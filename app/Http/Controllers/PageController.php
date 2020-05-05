<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
    	return view('home');
    }
    public function sejarah(){
    	return view('sejarahpkm');
    }
    public function tujuan(){
    	return view('tujuanpkm');
    }
    public function karakteristik(){
    	return view('karakteristikumum');
    }
    public function kriteria(){
    	return view('kriteriabidang');
    }
    public function tatacara(){
    	return view('tatacara');
    }
    public function aspekpenilaian(){
    	return view('aspekpenilaian');
    }
    public function perbandingan(){
        $bidang = DB::table('bidang')->get();
        $jenis_kriteria = DB::table('jenis_kriteria')->get();
        return view('perbedaan1',['bidang' => $bidang,'jenis_kriteria' => $jenis_kriteria]);
    }
    public function getData($id){
        $bidang=DB::table('bidang')
        ->select('NAMA_BIDANG','NAMA_JENIS', DB::raw("COALESCE(URAIAN_KRITERIA,'Tidak ada') as URAIAN_KRITERIA"))
        ->join('detil_kriteria','detil_kriteria.ID_BIDANG','=','bidang.ID_BIDANG')
        ->join('jenis_kriteria','jenis_kriteria.ID_JENIS_KRITERIA','=','detil_kriteria.ID_JENIS_KRITERIA')
        ->where('bidang.ID_BIDANG','=',$id)->get();
        return response()->json(['bidang' => $bidang]);
    }
    public function sendMail(Request $request){
        $request->validate(['name' => 'required','email' => 'required','phone' => 'required','message' => 'required']);
        \Mail::send('contact_email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'phone' => $request->get('phone'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('deaamartya3@gmail.com');
               });
    }
}