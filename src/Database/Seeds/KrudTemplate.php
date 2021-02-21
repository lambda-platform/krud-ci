<?php

namespace Krud\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Krud\Models\KrudTemplateModel;

class KrudTemplate extends Seeder
{
	public function run()
	{
        $Model = new KrudTemplateModel();
        $first = $Model->first();
        if(!$first){

            $rows = [
                ["template_name"=>"canvas"],
                ["template_name"=>"spa"],
                ["template_name"=>"default"],
                ["template_name"=>"default"],
            ];
            foreach ($rows as $row){
                $Model->insert($row);
            }
        }
	}
}
