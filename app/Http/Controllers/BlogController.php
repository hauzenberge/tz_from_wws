<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\BlogHeaderMenu;
use App\Logos;
use App\CopyWrite;
use App\HeaderText;
use App\SEO;
use App\WhereAre;
use App\StepsSales;
use App\Siedbar;
use App\Contacts;
use App\Responce;

class BlogController extends Controller
{
    public function index(){
    	//dd(SEO::all());
    	return view('index', [
    		'seos' => SEO::all(),
    		'header_menu_items' => BlogHeaderMenu::all(),

    		'header_texts' => HeaderText::all(),

    		'header_logos' => Logos::where('name', '=', 'header')->get(),
    		'footer_logos' => Logos::where('name', '=', 'footer')->get(),

    		'whears' => WhereAre::all(),
    		'stepssales' => StepsSales::all(),
    		'siedbars' => Siedbar::all(),

    		'copywrites' => CopyWrite::all(),
    		'contacts' => Contacts::all(),
    	]);
    }
    public function response (Request $request){
    	$response->name = $request->input('name');
    	$response->email = $request->input('emai');
    	$response->phone = $request->input('phone');
    	$response->message = $request->input('message');
    	$response->save();
        Mail::to($request->input('emai'))
                ->queue($request->input('message'));
    	return redirect('/');
    }
}
