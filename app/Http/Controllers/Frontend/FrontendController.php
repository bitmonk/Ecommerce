<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
public function home(){
    $carousel = Carousel::where('status','active')->get();
    return view('Frontend.Page.Home.Home',compact('carousel'));
}
}
