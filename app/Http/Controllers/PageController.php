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
        $contact = DB ::table('contact_person')->get();
    	return view('home',['contact' =>$contact]);
    }
    public function sejarah(){
        $contact = DB ::table('contact_person')->get();
    	return view('sejarahpkm',['contact' =>$contact]);
    }
    public function tujuan(){
        $contact = DB ::table('contact_person')->get();
    	return view('tujuanpkm',['contact' =>$contact]);
    }
    public function karakteristik(){
        $contact = DB ::table('contact_person')->get();
    	return view('karakteristikumum',['contact' =>$contact]);
    }
    public function kriteria(){
        $bidang=DB::table('bidang')
        ->select('NAMA_BIDANG','NAMA_JENIS','TEMPLATE', DB::raw("COALESCE(URAIAN_KRITERIA,'Tidak ada') as URAIAN_KRITERIA"))
        ->join('detil_kriteria','detil_kriteria.ID_BIDANG','=','bidang.ID_BIDANG')
        ->join('jenis_kriteria','jenis_kriteria.ID_JENIS_KRITERIA','=','detil_kriteria.ID_JENIS_KRITERIA')
        ->get();
        $kriteria=DB::table('detil_kriteria')->where('ID_BIDANG',1)->get();
        $jenis_kriteria = DB::table('jenis_kriteria')->get();
       
        return view('kriteriabidang',['bidang' => $bidang,'jenis_kriteria' => $jenis_kriteria,'kriteria' => $kriteria]);
    }
    public function tatacara(){
        $tatacara = DB::table('tata_cara')->get();
        $wa = DB::table('contact_person')->where('ID_CP',1)->get();
        $contact = DB ::table('contact_person')->get();
    	return view('tatacara',['tatacara' =>$tatacara,'wa' =>$wa,'contact' =>$contact]);
    }
    public function aspekpenilaian(){
        $contact = DB ::table('contact_person')->get();
    	return view('aspekpenilaian',['contact' =>$contact]);
    }
    public function perbandingan(){
        $bidang = DB::table('bidang')->get();
        $jenis_kriteria = DB::table('jenis_kriteria')->get();
        return view('perbedaan',['bidang' => $bidang,'jenis_kriteria' => $jenis_kriteria]);
    }
    public function getData($id){
        $bidang=DB::table('bidang')
        ->select('NAMA_BIDANG','NAMA_JENIS','TEMPLATE', DB::raw("COALESCE(URAIAN_KRITERIA,'Tidak ada') as URAIAN_KRITERIA"))
        ->join('detil_kriteria','detil_kriteria.ID_BIDANG','=','bidang.ID_BIDANG')
        ->join('jenis_kriteria','jenis_kriteria.ID_JENIS_KRITERIA','=','detil_kriteria.ID_JENIS_KRITERIA')
        ->where('bidang.ID_BIDANG','=',$id)->get();
        $template=DB::table('bidang')->select('TEMPLATE')->where('bidang.ID_BIDANG','=',$id)->first();
        return response()->json(['bidang' => $bidang,'template' => $template]);
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
                  $message->to('ilpresvokasi@gmail.com');
               });
    }
}