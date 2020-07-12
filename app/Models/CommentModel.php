<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;

class CommentModel
{
    public static function savecomment($data,  $question_id, $answer_id = 0){
        $data["question_id"] = $question_id;
        $data["user_id"] = Auth::user()->id;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        if($answer_id != 0) $data["answer_id"] = $answer_id;
        // dd($data);
        $new_data = DB::table('comments')->insert($data);

        return $new_data;
    }

    
    public static function find_by_id($id){
        $comments = DB::table('comments')
                        ->select('comments.id as id', 'comments.*', 'users.name', 'users.email')
                        ->join('users', 'comments.user_id', '=', 'users.id')
                        ->where('question_id',$id)
                        ->where('answer_id',NULL)
                        ->get();
        return $comments;
    }

    public static function find_by_answer_id($id, $answer_id){
        $comments = DB::table('comments')
                        ->select('comments.id as id', 'comments.*', 'users.name', 'users.email')
                        ->join('users', 'comments.user_id', '=', 'users.id')
                        ->where('question_id',$id)
                        ->where('answer_id',$answer_id)
                        ->get();
        return $comments;
    }
}
