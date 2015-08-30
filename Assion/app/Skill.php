<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Skill extends Model {

    protected $table = 'skill';

    public function index ($username) {
            $array =DB::table('identity')->where('user_id' , '=' , $username )->pluck('id') ;

            $res = $this->where('identity_id' , '=' , $array)->lists('skill') ;

            return $res ;
    }

	//

}
