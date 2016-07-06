<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\question;
use App\answer;
use App\Http\Requests;

class home extends Controller
{
     /**
     * Show a list of all available flights.
     *
     * @return Response
     */
    public function index()
    {
        $finalArray=array();
        $questions = question::all();
        $answers = answer::all();
        
        
       //echo '<pre>'; print_r($questions);exit;
        return view('welcome', ['questions' => $questions,'answers'=>$answers]);
    }
}
