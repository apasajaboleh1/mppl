<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\model\member;
use Carbon;
use App\model\asdos;

class member1 extends Controller
{
    public function login(Request $req)
    {
    	$username=Input::get('username');
    	$password=Input::get('password');
    	$temp=new Member();
    	$datamember=$temp->search_id($username,$password);
    	//$memberdata=$datamember;
    	//var_dump($memberdata);
        if($datamember!=NULL)
        {
            if($datamember->id_member==$username&&$datamember->password=md5($password))
            {
                $req->session()->put('username',$datamember->id_member);
                $req->session()->put('role',$datamember->role);
                $req->session()->put('name',$datamember->nama);
                //$temp=$req->session()->all();
                //return $temp;
                if($datamember->role=='1')
                    {
                        //return "saya";
                        return redirect('admin');
                    }
                else
                    {
                        //return "kamu";
                        return redirect('mahasiswa');
                    }
            }
            else
            {
                $message='login failed';
                return view('login',compact('message'));
            }

        }
        else
        {
            $message='login failed';
            return view('login',compact('message'));
        }
    	
    }
    public function mahasiswa(Request $req)
    {
        //return $req->session()->get('role');

        if($req->session()->has('role')!=NULL)
        {
            $mytime = Carbon\Carbon::now();
            $tempdata=explode(" ", $mytime->toDateTimeString());
            $temp1=explode("-", $tempdata[0]);
            //return (int)$temp1[0].(int)$temp1[1];
            if($req->session()->get('role')=='2')
            {
                //return "saya";
                $res='';
                $count=0;
                $tempcadangan='';
                $temp= new Asdos();
                $tmp=$temp->get_period();
                foreach ($tmp as $a) {
                    if($count==0)
                    {
                        if($a!=NULL)
                        {
                         //   var_dump($a);
                            $tempcadangan=$a;
                            $res[]=$a->periode;    
                        }
                    }
                    elseif ($tempcadangan!=$a) {
                        if($a!=NULL)
                        {
                           // var_dump($a);
                        $res[]=$a->periode;
                        $tempcadangan=$a;
                        $count=$count+1;
                        }
                    }
                    else
                    {
                        continue;
                    }

                }
                //var_dump($tmp);
                $periode='';
                $bulan=(int)$temp1[1];
                if($bulan >=2 && $bulan<=6)$periode='genap';
                else $periode='gasal';
                if($periode=="genap")
                {
                   $periode=$periode.((int)$temp1[0]-1); 
                }
                else
                {
                 $periode=$periode.((int)$temp1[0]);   
                }
                //var_dump($periode);
                $tmp1=$temp->tampil_history_asdos($periode);
                //return $res;
                return view('mhs',compact('res','tmp1'));
            }
            else
            {
                //$message='error please relogin';
                $req->session()->flush();
                return redirect('login');
            }
        }
        else
        {
            $message='you not authenticated';
            return redirect('login');
        }
        
    }
    public function admin(Request $req)
    {
        if($req->session()->has('role')!=NULL)
        {
            $mytime = Carbon\Carbon::now();
            $tempdata=explode(" ", $mytime->toDateTimeString());
            $temp1=explode("-", $tempdata[0]);
            if($req->session()->get('role')=='1')
            {
                $res='';
                $count=0;
                $tempcadangan='';
                $temp= new Asdos();
                $tmp=$temp->get_period();
                foreach ($tmp as $a) {
                    if($count==0)
                    {
                        if($a!=NULL)
                        {
                         //   var_dump($a);
                            $tempcadangan=$a;
                            $res[]=$a->periode;    
                        }
                    }
                    elseif ($tempcadangan!=$a) {
                        if($a!=NULL)
                        {
                           // var_dump($a);
                        $res[]=$a->periode;
                        $tempcadangan=$a;
                        $count=$count+1;
                        }
                    }
                    else
                    {
                        continue;
                    }

                }
                //var_dump($tmp);
                $periode='';
                $bulan=(int)$temp1[1];
                if($bulan >=2 && $bulan<=6)$periode='genap';
                else $periode='gasal';
                if($periode=="genap")
                {
                   $periode=$periode.((int)$temp1[0]-1); 
                }
                else
                {
                 $periode=$periode.((int)$temp1[0]);   
                }
                //var_dump($periode);
                $tmp1=$temp->tampil_history_asdos($periode);
                return view('admin',compact('res','tmp1'));

            }
            else
            {
                $message='error please relogin';
                $req->session()->flush();
                return redirect('login');
            }
        }
        else
        {
            $message='you not authenticated';
            return redirect('login');
        }
    }
    public function list_asdos(Request $req)
    {
         if($req->session()->has('role')!=NULL)
        {
            if($req->session()->get('role')=='2')
            {
                $temp= new Asdos();
                $mytime = Carbon\Carbon::now();
                $tempdata=explode(" ", $mytime->toDateTimeString());
                $temp1=explode("-", $tempdata[0]);
                $periode='';
                $bulan=(int)$temp1[1];
                if($bulan >=2 && $bulan<=6)$periode='genap';
                else $periode='gasal';
                if($periode=="genap")
                {
                   $periode=$periode.((int)$temp1[0]-1); 
                }
                else
                {
                 $periode=$periode.((int)$temp1[0]);   
                }
                $id=$req->session()->get('username');
                $tmp1=$temp->slot_asdos_tersisa($periode,$id);
                //var_dump($tmp1);
                return view('daftar_asdos',compact('tmp1'));
            }
            else
            {
                //$message='error please relogin';
                $req->session()->flush();
                return redirect('login');
            }
        }
        else
        {
            $message='you not authenticated';
            return redirect('login');
        }
    }
    public function liat_history(Request $req)
    {

        if($req->session()->has('role')!=NULL)
        {
            $mytime = Carbon\Carbon::now();
            $tempdata=explode(" ", $mytime->toDateTimeString());
            $temp1=explode("-", $tempdata[0]);
            if($req->session()->get('role')=='1'||$req->session()->get('role')=='2')
            {
                $res='';
                $count=0;
                $tempcadangan='';
                $temp= new Asdos();
                $tmp=$temp->get_period();
                foreach ($tmp as $a) {
                    if($count==0)
                    {
                        if($a!=NULL)
                        {
                         //   var_dump($a);
                            $tempcadangan=$a;
                            $res[]=$a->periode;    
                        }
                    }
                    elseif ($tempcadangan!=$a) {
                        if($a!=NULL)
                        {
                           // var_dump($a);
                        $res[]=$a->periode;
                        $tempcadangan=$a;
                        $count=$count+1;
                        }
                    }
                    else
                    {
                        continue;
                    }

                }
                //var_dump($tmp);
                $periode=Input::get('periode');
                //var_dump($periode);
                $tmp1=$temp->tampil_history_asdos($periode);
                if($req->session()->get('role')=='1')
                    return view('admin',compact('res','tmp1'));
                elseif ($req->session()->get('role')=='2')
                    return view('mhs',compact('res','tmp1'));
            }
            else
            {
                $message='error please relogin';
                $req->session()->flush();
                return redirect('login');
            }
        }
        else
        {
            $message='you not authenticated';
            return redirect('login');
        }
    }
    public function logout(Request $req)
    {
        $req->session()->flush();
        return redirect('login');
    }
    public function daftar(Request $req)
    {
        if($req->session()->has('role')!=NULL)
        {
                $mytime = Carbon\Carbon::now();
                $tempdata=explode(" ", $mytime->toDateTimeString());
                $temp1=explode("-", $tempdata[0]);
                $periode='';
                $bulan=(int)$temp1[1];
                if($bulan >=2 && $bulan<=6)$periode='genap';
                else $periode='gasal';
                if($periode=="genap")
                {
                   $periode=$periode.((int)$temp1[0]-1); 
                }
                else
                {
                 $periode=$periode.((int)$temp1[0]);   
                }
            if($req->session()->get('role')=='2')
            {
               
                $temp= new Asdos();
                $id_slot=Input::get('id');
                $nrp=$req->session()->get('username');

                $tmp1=$temp->insert_data_calon_asdos($nrp,$periode,$id_slot);
                return redirect('mahasiswa/daftar')->with('result',$tmp1);
            }
            else
            {
                $message='error please relogin';
                $req->session()->flush();
                return redirect('login');
            }
        }
        else
        {
            $message='you not authenticated';
            return redirect('login');
        }
    }
    //belom kelar
    public function list_bakal_asdos(Request $req)
    {
        if($req->session()->has('role')!=NULL)
        {
                $mytime = Carbon\Carbon::now();
                $tempdata=explode(" ", $mytime->toDateTimeString());
                $temp1=explode("-", $tempdata[0]);
                $periode='';
                $bulan=(int)$temp1[1];
                if($bulan >=2 && $bulan<=6)$periode='genap';
                else $periode='gasal';
                if($periode=="genap")
                {
                   $periode=$periode.((int)$temp1[0]-1); 
                }
                else
                {
                 $periode=$periode.((int)$temp1[0]);   
                }
            if($req->session()->get('role')=='1')
            {
                $temp=new Asdos();
                $ans=$temp->get_asdos_ada($periode);
                //var_dump($ans);
                return view('penerimaan_asdos',compact('ans'));
            }
            else
            {
                $message='error please relogin';
                $req->session()->flush();
                return redirect('login');
            }
        }
        else
        {
            $message='you not authenticated';
            return redirect('login');
        }      
    }
    public function menerima_asdos(Request $req , $id)
    {
        if($req->session()->has('role')!=NULL)
        {
            if($req->session()->get('role')=='1')
            {
                $temp=new Asdos();
                $ans=$temp->insert_asdos_baru($id);
                //var_dump($ans);
                return redirect('admin/get_asdos')->with('result',$ans);
            }
            else
            {
                $message='error please relogin';
                $req->session()->flush();
                return redirect('login');
            }
        }
        else
        {
            $message='you not authenticated';
            return redirect('login');
        }   
    }
}
