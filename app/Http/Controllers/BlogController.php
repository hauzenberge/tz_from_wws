<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Info\WhereAre;
use App\Models\Blog\StepsSales;
use App\Models\Blog\Siedbar;
use App\Models\Blog\Responce;



class BlogController extends Controller
{
    public function index()
    {
    	return view('home', [
    		'whears' => WhereAre::all(),
    		'stepssales' => StepsSales::all(),
    		'siedbars' => Siedbar::all(),
    	]);
    }

    public function response (Request $request)
    {
        $response = new Responce;
    	$response->name = $request->input('name');
    	$response->email = $request->input('email');
    	$response->phone = $request->input('phone');
    	$response->message = $request->input('message');
    	$response->save();
    	return redirect('/');
    }
}