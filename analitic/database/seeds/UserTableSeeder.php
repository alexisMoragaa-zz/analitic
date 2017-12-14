<?php
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{
/**
 * seeder para agragar usuarios al sistema.
 * no se uso un faker ya que son pocos usuarios y con esto controlamos lso pribilegios de cada usuario para posteriores pruebas de privilegios
*/
    public function run()
    {
        // teleoperadores
        \DB::table('users')->insert(array(
            'name' => 'alexis',
            'email'=>'alexis@gmail.com',
             'password' =>\Hash::make('alexis'),

        ));

    }
}
