<?php

namespace App\Http\Controllers;

use App\Models\categoryModel;
use App\Models\news;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


         $category = categoryModel::all();

        return view('layouts.pages.home', compact('category'));
    }
   public function list()
   {
       $category = categoryModel::all();
       $news = news::all();
       $ticket = Ticket::all();
       return view('layouts.pages.List', compact('category', 'news','ticket'));
   }
   public function timve(Request $request){
    $addressstart = $request->addressstart;
    $addressend = $request->addressend;
    $timestart = $request->timestart;
    $category = categoryModel::all();
    // $news = news::all();
    $news = news::where('addressstart','=',$addressstart)->where('addressend','=',$addressend)->where('timestart','like','%'.$timestart.'%')->get();
    $ticket = Ticket::all();
    return view('layouts.pages.timkiem', compact('category', 'news','ticket'));
   }

}
