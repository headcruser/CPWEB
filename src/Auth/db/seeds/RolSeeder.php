<?php


use Phinx\Seed\AbstractSeed;

class RolSeeder extends AbstractSeed
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
        $data = [
            ['descripcion'=>'administrador'],
            ['descripcion'=>'contador'],
            ['descripcion'=>'cliente'],
            ['descripcion'=>'login']
		];
         $this->table('rol')
            ->insert($data)
            ->save();
    }
}
