<?php


use Phinx\Seed\AbstractSeed;

class ClienteSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data=[];
        $faker=\Faker\Factory::create('es_ES');
        for ($i=1; $i <=100; $i++) {
            $data[]=[
                'razon_social'=>$faker->name,
                'rfc'=>$faker->vat,
                'domicilio'=>$faker->address,
                'correo'=>$faker->email,
                'telefono'=>$faker->isbn10,
                'id_tipo'=>rand(1, 4),
                'id_estado'=>rand(1, 32),
                'id_usuario'=>$i
            ];
        }
        $this->table('cliente')
            ->insert($data)
            ->save();
    }
}
