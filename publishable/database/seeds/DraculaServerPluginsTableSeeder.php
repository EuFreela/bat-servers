<?php

use Illuminate\Database\Seeder;

class DraculaServerPluginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('plugins')->delete();
        $data = array(
            [
                'status' => 1,
                'name' => 'Bat Servers',
                'shortname' => 'Servers',
                'page' => '/dracula/server/list',
                'img' => 'https://i.postimg.cc/XYFkF5tg/servers.png',
                'about' => 'Lista de servidores para conexão.',
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()         
            ]            
        );
        if(DB::table('plugins')->where('page','=','/dracula/server/list')->count()<=0)
            DB::table('plugins')->insert($data);
    }
}
