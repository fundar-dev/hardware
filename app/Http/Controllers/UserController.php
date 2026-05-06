<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of users.
     */
    public function index(Request $request)
    {
        // Check permission
        $this->authorizePermission('view users');
        
        $query = User::query();
        
        // Filter by role if specified
        if ($request->filled('role')) {
            $query->role($request->role);
        }
        
        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }
        
        $users = $query->with('roles')->orderBy('name')->paginate(15);
        
        // Get all roles for filter dropdown
        if (Auth::user()->hasRole('admin')) {
            $roles = Role::orderBy('name')->get();
        } else {
            // Shop owners can only see non-admin roles
            $roles = Role::where('name', '!=', 'admin')->orderBy('name')->get();
        }
        
        return view('users.index', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        // Check permission
        $this->authorizePermission('create users');
        
        // Get roles - shop owners cannot assign admin role
        if (Auth::user()->hasRole('admin')) {
            $roles = Role::orderBy('name')->get();
        } else {
            $roles = Role::where('name', '!=', 'admin')->orderBy('name')->get();
        }
        
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created user.
     */
    public function store(Request $request)
    {
        // Check permission
        $this->authorizePermission('create users');
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|exists:roles,id'
        ]);

        // Prevent shop-owners from assigning admin role
        $role = Role::findById($validated['role']);
        if (!Auth::user()->hasRole('admin') && $role->name === 'admin') {
            return back()->withErrors(['role' => 'You cannot assign the admin role.'])
                         ->withInput();
        }

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'email_verified_at' => now(),
        ]);

        $user->assignRole($role);

        return redirect()
            ->route('users.index')
            ->with('success', 'User created successfully!');
    }

    /**
     * Display the specified user.
     */
    public function show(User $user)
    {
        // Check permission
        $this->authorizePermission('view users');
        
        $user->load('roles', 'permissions');
        
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(User $user)
    {
        // Check permission - shop owners don't have edit permission
        $this->authorizePermission('edit users');
        
        // Prevent editing of admin role by shop-owners
        if (!Auth::user()->hasRole('admin') && $user->hasRole('admin')) {
            return redirect()
                ->route('users.index')
                ->with('error', 'You cannot edit admin users.');
        }
        
        // Get roles - shop owners cannot assign admin role
        if (Auth::user()->hasRole('admin')) {
            $roles = Role::orderBy('name')->get();
        } else {
            $roles = Role::where('name', '!=', 'admin')->orderBy('name')->get();
        }
        
        $userRole = $user->roles->first();
        
        return view('users.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified user.
     */
    public function update(Request $request, User $user)
    {
        // Check permission - shop owners don't have edit permission
        $this->authorizePermission('edit users');
        
        // Prevent updating of admin role by shop-owners
        if (!Auth::user()->hasRole('admin') && $user->hasRole('admin')) {
            return redirect()
                ->route('users.index')
                ->with('error', 'You cannot update admin users.');
        }
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id)
            ],
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required|exists:roles,id'
        ]);

        // Prevent shop-owners from assigning admin role
        $newRole = Role::findById($validated['role']);
        if (!Auth::user()->hasRole('admin') && $newRole->name === 'admin') {
            return back()->withErrors(['role' => 'You cannot assign the admin role.'])
                         ->withInput();
        }

        $updateData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
        ];
        
        if (!empty($validated['password'])) {
            $updateData['password'] = Hash::make($validated['password']);
        }
        
        $user->update($updateData);
        
        // Update role
        $user->syncRoles([$newRole]);

        return redirect()
            ->route('users.index')
            ->with('success', 'User updated successfully!');
    }

    /**
     * Remove the specified user.
     */
    public function destroy(User $user)
    {
        // Check permission - shop owners don't have delete permission
        $this->authorizePermission('delete users');
        
        // Prevent users from deleting themselves
        if ($user->id === Auth::id()) {
            return redirect()
                ->route('users.index')
                ->with('error', 'You cannot delete your own account.');
        }
        
        // Prevent shop-owners from deleting admin users
        if (!Auth::user()->hasRole('admin') && $user->hasRole('admin')) {
            return redirect()
                ->route('users.index')
                ->with('error', 'You cannot delete admin users.');
        }
        
        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('success', 'User deleted successfully!');
    }
    
    /**
     * Helper method to check permissions.
     */
    private function authorizePermission($permission)
    {
        if (!Auth::user()->can($permission)) {
            abort(403, 'You do not have permission to perform this action.');
        }
    }
}