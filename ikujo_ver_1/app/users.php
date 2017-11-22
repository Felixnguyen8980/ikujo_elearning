<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
class users extends Model
{
    public $timestamps = false;
    public function roles() {
        return $this->belongsTo('App\roles','roles_id','id');
    }
    public function students(){
    	if($this->attributes['roles_id'] === 3){
    		return $this->hasOne('App\students','users_id','id');
    	} 
    	return null;
    }
    public function members(){
    	if($this->attributes['roles_id'] === 2){
    		return $this->hasOne('App\members','users_id','id');
    	}
    	return null;
    }
    public function masters(){
    	if($this->attributes['roles_id'] === 1){
    		return $this->hasOne('App\masters','users_id','id');
   		}
   		return null;
    }

    public function save(array $options = []){
    	parent::save($options);
    	if($this->students()!=null){
    		$students = new students();
    		$this->students()->save($students);
    	}
    	if($this->members()!=null){
    		$members = new members();
    		$this->members()->save($members);
    	}
    	if($this->masters()!=null){
    		$masters = new masters();
    		$this->masters()->save($masters);
    	}
    	
    }
    public function seedusers(){
        $users = new users();
        $users->email = "ntnam89999@gmail.com";
        $users->username = "felixnguyen89999";
        $users->password = md5("123");
        $users->roles_id = 3;
        $users->toArray();
        $users->save();
        return $users;
    }
}
