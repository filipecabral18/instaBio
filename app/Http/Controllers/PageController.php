<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index($slug){
        $page = Page::where('slug', $slug)->first();

        if($page){
            echo'Página encontrada';
        } else{
            echo'Página: '.$slug.' Not Found';
        }
    }
}
