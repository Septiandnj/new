<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrakerinController extends Controller
{
    //
    public function percobaan()
    {
    	$a = 2;
    	$b = 2;
    	return view('index', compact('a', 'b'));
    }

    public function a()
    {
    	$a = "Lala";
    	$b = "Lulu";
    	$c = "Lili";
    	$d = "Lolo";
    	$e = "Lele";
    	return view('satu', compact('a', 'b', 'c', 'd', 'e'));
    }

    public function b()
    {
    	$a = "Rafi";
    	$b = "Rival";
    	$c = "Ihsan";
    	$d = "Saya";
    	$e = "Septian";
    	$f = "Bebas";
    	return view('dua', compact('a', 'b', 'c', 'd', 'e', 'f'));
    }

    public function c()
    {
    	$a = "Bla";
    	$b = "Bli";
    	$c = "Blu";
    	$d = "Ble";
    	$e = "Blo";
    	return view('tiga', compact('a', 'b', 'c', 'd', 'e'));
    }

    public function d()
    {
    	$a = "Ha";
    	$b = "Hi";
    	$c = "Hu";
    	$d = "He";
    	$e = "Ho";
    	return view('empat', compact('a', 'b', 'c', 'd', 'e'));    }

    public function e()
    {
    	$a = "Gha";
    	$b = "Ghi";
    	$c = "Ghu";
    	$d = "Ghe";
    	$e = "Gho";
    	$f = "Gogo";
    	return view('lima', compact('a', 'b', 'c', 'd', 'e', 'f'));
    }

	public function param($id)
	{
		return view('welcome');
	}
}
