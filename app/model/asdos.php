<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use DB;

class asdos extends Model
{
    public function get_period()
    {
    	//return DB::table('member')->select('role')->groupBy('role')->get();
    	return DB::table('asdos')->select('asdos.periode')->groupBy('asdos.periode')->get();
    }
    public function slot_asdos_tersisa($periode,$id)
    {
    	//yang tersisa
    	return DB::table('slot_asdos')
    	->select('slot_asdos.id_slot_asdos as id','mata_kuliah.nama_mk as nama_mk','slot_asdos.kelas as kelas')
    	//->leftJoin('asdos','asdos.id_slot_asdos','=','slot_asdos.id_slot_asdos')
        ->leftJoin(DB::raw("(select * from asdos where periode="."'".$periode."'".") as Q"),'Q.id_slot_asdos','=','slot_asdos.id_slot_asdos')
        ->join('nilai','nilai.id_mk','=','slot_asdos.id_mk')
    	->join('mata_kuliah','mata_kuliah.id_mk','=','nilai.id_mk')
    	->where('nilai.history','=','0')
        ->where('nilai.nilai','>=','3.5')
    	//->where('asdos.periode','=',$periode)
    	->where('nilai.id_member','=',$id)
        ->whereNull('Q.id_slot_asdos')
    	->get();
    }
    public function tampil_history_asdos($periode)
    {
    	return DB::table('asdos')
    	->join('member','member.id_member','=','asdos.id_member')
    	->join('slot_asdos','slot_asdos.id_slot_asdos','=','asdos.id_slot_asdos')
    	->join('mata_kuliah','mata_kuliah.id_mk','=','slot_asdos.id_mk')
    	->where('asdos.periode','=',$periode)
    	->select('member.nama as nama','mata_kuliah.nama_mk as nama_mk','slot_asdos.kelas as kelas','asdos.periode as periode')
    	->get();
    }
    public function insert_data_calon_asdos($nrp,$periode,$id)
    {
        if((DB::table('calon_asdos')->where('id_slot_asdos','=',$id)->where('id_member','=',$nrp)->where('periode','=',$periode)->count('*'))==0)
        {
            /*var_dump(DB::table('calon_asdos')->where('id_slot_asdos','=',$id)->where('id_member','=',$nrp)->where('periode','=',$periode)->count('*'));*/
            $id=DB::table('calon_asdos')->insertGetId( ['id_member' => $nrp, 'id_slot_asdos' => $id, 'periode'=> $periode,'status'=>0]);
            if($id!=0)
                return "sukses";
            else
                return "failed";
        }
        else
        {
            return "failed";
        }
    }
    public function get_asdos_ada($periode)
    {
        $a= DB::table('calon_asdos')
        ->select('calon_asdos.id_calon_asdos as id','member.nama as nama','mata_kuliah.nama_mk as nama_mk','slot_asdos.kelas as kelas','calon_asdos.periode as periode')
        ->join('member','member.id_member','=','calon_asdos.id_member')
        ->join('slot_asdos','slot_asdos.id_slot_asdos','=','calon_asdos.id_slot_asdos')
        ->join('mata_kuliah','mata_kuliah.id_mk','=','slot_asdos.id_mk')
        ->where('calon_asdos.periode','=',$periode)
        ->where('calon_asdos.status','=','0')
        ->get();
        
        return $a;
    }
    public function insert_asdos_baru($id)
    {
        $data=DB::table('calon_asdos')->where('calon_asdos.id_calon_asdos','=',$id)
        ->select('calon_asdos.id_member as id','calon_asdos.id_slot_asdos as id_slot_asdos','calon_asdos.periode as periode')
        ->get();
        DB::table('calon_asdos')->where('calon_asdos.id_calon_asdos','=',$id)->update(['status'=>1]);
        $id=DB::table('asdos')->insertGetId(['id_member'=>$data[0]->id,'id_slot_asdos'=>$data[0]->id_slot_asdos,'periode'=>$data[0]->periode]);
        if($id!=NULL)
        {
            return "sukses";
        }
        else
            return "failed";
        
        //return $id;
        //
    }
}
