<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $client = Role::create(['name' => 'client']);

        $categoryList = Permission::create(['name' => 'categoryList']);
        $categoryCreate = Permission::create(['name' => 'categoryCreate']);
        $categoryUpdate = Permission::create(['name' => 'categoryUpdate']);
        $categoryDelete = Permission::create(['name' => 'categoryDelete']);

        $productList = Permission::create(['name' => 'productList']);
        $productCreate = Permission::create(['name' => 'productCreate']);
        $productUpdate = Permission::create(['name' => 'productUpdate']);
        $cproductDelete = Permission::create(['name' => 'productDelete']);

        $admin->givePermissionTo([
            $categoryList,
            $categoryCreate,
            $categoryUpdate,
            $categoryDelete,
            $productList,
            $productCreate,
            $productUpdate,
            $cproductDelete,
        ]);
        $client->givePermissionTo([
            $categoryList,
            $productList,
        ]);
    }
}
