<?php

use Illuminate\Database\Seeder;
use App\roles;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->newrole('masters');
        $this->newrole('members');
        $this->newrole('students');
    }
    public function newrole($str){
    	$obj = new roles();
    	$obj->name = $str;
    	$obj->toArray();
    	$obj->save();
    	return $obj;
    }
}
