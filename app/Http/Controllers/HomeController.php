<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
  
class HomeController extends Controller
{
    public function home_redirect()
    {
        return view('home');
    }
    public function addItem_redirect()
    {
        return view('addProduct');
        //Munculkan Auth Login
    }
    public function index_home(){
        return view('main');
    }
}