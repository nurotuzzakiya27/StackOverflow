<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class QuestionModel{

    public static function get_all(){
        $questions = DB::table('questions')->get();
        return $questions;
    }

    public static function save($data){
        $new_question = DB::table('questions')->insert();
        return $new_question;
    }

    public static function find_by_id($id){
        $question = DB::table('questions')->where('id', $id)->first();
        return $question;
    }
}