<?php


use Phinx\Seed\AbstractSeed;

class TipoClienteSeeder extends AbstractSeed
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
            ['descripcion'=>'fisica'],
            ['descripcion'=>'moral'],
            ['descripcion'=>'sociedad']
        ];
         $this->table('tipo')
            ->insert($data)
            ->save();

    }
}
