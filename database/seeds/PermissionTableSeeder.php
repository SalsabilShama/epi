<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $permissions = [

           'roles-view', 'roles-add', 'roles-edit', 'roles-delete', 
           'tikas-view', 'tikas-add', 'tikas-edit', 'tikas-delete', 
           'tika_expecteds-view', 'tika_expecteds-add', 'tika_expecteds-edit', 'tika_expecteds-delete', 
           'tika_uses-view', 'tika_uses-add', 'tika_uses-edit', 'tika_uses-delete', 
           'unions-view', 'unions-add', 'unions-edit', 'unions-delete',
           'union_stocks-view', 'union_stocks-add', 'union_stocks-edit', 'union_stocks-delete', 
           'upozillas-view', 'upozillas-add', 'upozillas-edit', 'upozillas-delete', 
           'upozilla_stock_models-view', 'upozilla_stock_models-add', 'upozilla_stock_models-edit', 'upozilla_stock_models-delete', 
           'users-view', 'users-add', 'users-edit', 'users-delete', 
           'user_tikas-view', 'user_tikas-add', 'user_tikas-edit', 'user_tikas-delete',
           'wards-view', 'wards-add', 'wards-edit', 'wards-delete'
        ];
        foreach ($permissions as $permission) {

             Permission::create(['name' => $permission]);

        }
    }
}
