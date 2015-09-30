<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
	public function index(){
        return \View::make('home');   
    }
	
	public function consultar(){
		$data = \Input::all();
		$ced = $data['cedula'];

        return file_get_contents('http://www3.registraduria.gov.co/censo/_censoresultado.php?nCedula='.$ced);   
        //return get_meta_tags('http://www3.registraduria.gov.co/censo/_censoresultado.php?nCedula='.$ced);   
    }

	public function file_get_contents_curl($url){
    
	$ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
	}


 
}
