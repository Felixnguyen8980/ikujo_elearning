<?php

use Illuminate\Database\Seeder;
use App\filetypes;
class FiletypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->newfiletype('videos');
        $this->newfiletype('documents');
    }
    public function newfiletype($str){
    	$obj = new filetypes();
    	$obj->name = $str;
    	$obj->toArray();
    	$obj->save();
    	return $obj;

    }
}
