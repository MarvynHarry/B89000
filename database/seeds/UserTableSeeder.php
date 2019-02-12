<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name','admin')->first();
        $role_emple = Role::where('name','emple')->first();
        $role_user = Role::where('name','user')->first();


        $user = new User();
        $user ->name = "Admin";
        $user ->last_name = "adminis";
        $user ->sexo = "hombre";
        $user ->edad = 22;
        $user ->email ="admin@gmail.com";
        $user ->telefono  = "849-626-2888";
        $user ->password = bcrypt('12345');
        $user ->save();
        $user ->roles()->attach($role_admin);

        $user = new User();
        $user ->name = "Emple";
        $user ->last_name = "empleado";
        $user ->sexo = "mujer";
        $user ->edad = 22;
        $user ->email ="emple@gmail.com";
        $user ->telefono  = "809-557-9656";
        $user ->password = bcrypt('12345');
        $user ->save();
        $user ->roles()->attach($role_emple);

        $user = new User();
        $user ->name = "user";
        $user ->last_name = "usuario";
        $user ->sexo = "hombre";
        $user ->edad = 22;
        $user ->email ="usuario@gmail.com";
        $user ->telefono  = "809-557-2512";
        $user ->password = bcrypt('12345');
        $user ->save();
        $user ->roles()->attach($role_user);
    }

}
