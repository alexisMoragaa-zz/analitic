<?php
use Illuminate\Database\Seeder;
class categoryTableSeeder extends Seeder
{
/**
 * seeder para agragar usuarios al sistema.
 * no se uso un faker ya que son pocos usuarios y con esto controlamos lso pribilegios de cada usuario para posteriores pruebas de privilegios
*/
    public function run()
    {
        // teleoperadores
        \DB::table('categorias')->insert(array(
            'name' => 'arroz',
            'description'=>'productos comestbles',


          
        ));

    }
}
