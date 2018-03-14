<?php


use Phinx\Seed\AbstractSeed;

class UsuarioSeeder extends AbstractSeed
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
                'email'=>$faker->email,
                'contrasena'=>$faker->vat,
                'clave'=>'',
                'fecha_clave'=>null,
                'nombres'=>$faker->name,
                'apellidos'=>$faker->name,
                'nacimiento'=>$faker->date('Y-m-d', 'now'),
                'foto'=>$faker->imageUrl(640, 480)
            ];
        }
        $this->table('usuario')
            ->insert($data)
            ->save();
    }
}
