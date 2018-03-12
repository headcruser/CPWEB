<?php


use Phinx\Seed\AbstractSeed;

class PrivilegioSeeder extends AbstractSeed
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
            ['descripcion'=>'root'],
            ['descripcion'=>'administrador']
		];
         $this->table('privilegio')
            ->insert($data)
            ->save();
    }
}
