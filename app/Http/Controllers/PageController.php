<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
}