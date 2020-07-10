<?php

namespace App\Http\Controllers;
use App\Models\QuestionModel;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $questions = QuestionModel::get_all();
        return view('feed', compact('questions'));
    }

    public function show($id){
        $questions = QuestionModel::find_by_id($id);
        return view('discussion', compact('questions'));
    }
}
