<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // ==================================================
        // DEFINE PERMISSIONS
        // ==================================================

        // Admin Permissions - Full CRUD on Users, Roles, Permissions
        $adminPermissions = [
            // User Management - Full CRUD
            'view users',
            'create users',
            'edit users',
            'delete users',

            // Role Management - Full CRUD
            'view roles',
            'create roles',
            'edit roles',
            'delete roles',

            // Permission Management - Full CRUD
            'view permissions',
            'create permissions',
            'edit permissions',
            'delete permissions',
        ];

        // Shop Owner Permissions - Limited User Access
        $shopOwnerPermissions = [
            'view users',
            'create users',
        ];

        // Combine all permissions
        $allPermissions = array_unique(array_merge($adminPermissions, $shopOwnerPermissions));

        // ==================================================
        // CREATE PERMISSIONS
        // ==================================================

        foreach ($allPermissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web'
            ]);
        }

        // ==================================================
        // CREATE ROLES AND ASSIGN PERMISSIONS
        // ==================================================

        // Admin Role - Gets ALL permissions
        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $adminRole->syncPermissions(Permission::all());

        // Shop Owner Role - Limited permissions
        $shopOwnerRole = Role::firstOrCreate(['name' => 'shop-owner', 'guard_name' => 'web']);
        $shopOwnerRole->syncPermissions($shopOwnerPermissions);

        // Customer Role - No user management permissions
        $customerRole = Role::firstOrCreate(['name' => 'customer', 'guard_name' => 'web']);
        $customerRole->syncPermissions([]);

        // ==================================================
        // CREATE DEMO USERS
        // ==================================================

        // Admin User
        $admin = User::firstOrCreate(
            ['email' => 'jamir@gmail.com'],
            [
                'name' => 'Jamir Admin',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
        $admin->syncRoles(['admin']);

        // Shop Owner User
        $owner = User::firstOrCreate(
            ['email' => 'benedict@gmail.com'],
            [
                'name' => 'Benedict Shop Owner',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
        $owner->syncRoles(['shop-owner']);

        // Customer Users
        $customers = [
            ['name' => 'Maryan Customer', 'email' => 'maryan@gmail.com'],
            ['name' => 'Bargo Customer', 'email' => 'bargo@gmail.com'],
            ['name' => 'Bilbar Customer', 'email' => 'bilbar@gmail.com'],
        ];

        foreach ($customers as $customerData) {
            $customer = User::firstOrCreate(
                ['email' => $customerData['email']],
                [
                    'name' => $customerData['name'],
                    'password' => Hash::make('password'),
                    'email_verified_at' => now(),
                ]
            );
            $customer->syncRoles(['customer']);
        }

        // ==================================================
        // OUTPUT INFORMATION
        // ==================================================

        $this->command->info('====================================');
        $this->command->info('Roles and Permissions Seeded Successfully!');
        $this->command->info('====================================');
        $this->command->newLine();

        $this->command->info('PERMISSIONS SUMMARY:');
        $this->command->info('────────────────────────────────────');

        $this->command->info('ADMIN Permissions (' . count($adminPermissions) . '):');
        foreach ($adminPermissions as $permission) {
            $this->command->info("  ✓ {$permission}");
        }
        $this->command->newLine();

        $this->command->info('SHOP OWNER Permissions (' . count($shopOwnerPermissions) . '):');
        foreach ($shopOwnerPermissions as $permission) {
            $this->command->info("  ✓ {$permission}");
        }
        $this->command->newLine();

        $this->command->info('CUSTOMER Permissions:');
        $this->command->info("  ✓ No user management permissions");
        $this->command->newLine();
    }
}
