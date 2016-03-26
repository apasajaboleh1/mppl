<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use DB;
class member extends Model
{
    //protected $fillable =['nama','nomer_telepon','password'];
    function search_id($username,$password)
    {
    	return DB::table('member')->where('id_member',$username)->where('password',md5($password))->first();
    }

}
