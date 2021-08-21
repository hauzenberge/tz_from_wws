<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Models\Menu\BlogHeaderMenu;
use App\Models\Info\Logos;
use App\Models\Info\CopyWrite;
use App\Models\Info\HeaderText;
use App\Models\Info\SEO;
use App\Models\Info\WhereAre;
use App\Models\Blog\StepsSales;
use App\Models\Blog\Siedbar;
use App\Models\Info\Contacts;
use App\Models\Blog\Responce;

class BlogController extends Controller
{
    public function index(){
    	return view('home', [
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
        $response = new Responce;
    	$response->name = $request->input('name');
    	$response->email = $request->input('emai');
    	$response->phone = $request->input('phone');
    	$response->message = $request->input('message');
    	$response->save();
    	return redirect('/');
    }
}
