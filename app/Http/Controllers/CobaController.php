<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coba;

class CobaController extends Controller
{
    //
    public function test1()
    {
    	$a = Coba::all();
    	return $a;
    }

    public function test2($id)
    {
    	$a = Coba::find($id);
    	return $a;
    }

    public function index()
    {
    	$a = Coba::all();
    	return view('indexx', compact('a'));
    }

    public function percobaan()
    {
    	$a = ['adi', 'tatang', 'juju', 'icih'];
    	return view('buah', compact('a'));
    }

    public function binatan($data)
    {
    	$mee = ['binatang' => ['singa', 'semut', 'jerapah', 'ayam', 'koala'],
    	'kendaraan' => ['motor', 'mobil', 'bus', 'bajaj', 'truck'],
    	'laptop' => ['hp', 'axioo', 'lenovo', 'acer', 'asus']];

    	$hhehe = $mee[$data];
    	return view('nama', compact('hhehe'));
    }
}
