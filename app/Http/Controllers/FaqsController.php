<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;


class FaqsController extends Controller
{
   public function faqs(){
        $faqs = new Faq();
       $faq =  $faqs::all();

       return view('faqs.questions',compact('faq'));
   } 
}
