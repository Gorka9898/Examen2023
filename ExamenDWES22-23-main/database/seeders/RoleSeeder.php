<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol= new Role;
        $rol->tipo="usuario";
        $rol->save();

        $rol= new Role;
        $rol->tipo="admin";
        $rol->save();
    }
}
