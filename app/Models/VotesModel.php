<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;

class VotesModel{

    public static function get_all(){
        $votes = DB::table('votes')->get();
        return $votes;
    }

    public static function savequestion($data){
        $data["user_id"] = Auth::user()->id;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        // dd($data);
        $new_question = DB::table('questions')->insert($data);
        return $new_question;
    }

    public static function find_by_id($id){
        $question = DB::table('questions')->where('id', $id)->first();
        return $question;
    }


    public static function get_upvote(){
        $questions = DB::table('votes')
                        ->where('user_id', Auth::user()->id)
                        ->where('upvote', 1)
                        ->get();
        return $questions;
    }

    public static function get_downvote(){
        $questions = DB::table('votes')
                        ->where('user_id', Auth::user()->id)
                        ->where('downvote', 1)
                        ->get();
        return $questions;
    }

    public static function get_favorite(){
        $questions = DB::table('answers')
                        ->where('user_id', Auth::user()->id)
                        ->where('marked', 1)
                        ->get();
        return $questions;
    }
}