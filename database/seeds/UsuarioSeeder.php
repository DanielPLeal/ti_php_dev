<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//senha 123123 para acesso
        DB::table('users')->insert(['name'=>'Adm Usuarios','email'=>'adm@gmail.com', 'password'=>'$2y$10$6j3oh.ZT0YGL04Z2Gcg2LuVJSH9jfYmLsBTy95xBk05BU/QUhf5SO']);       
    }
}
