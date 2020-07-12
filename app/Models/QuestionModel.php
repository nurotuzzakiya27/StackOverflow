<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;

class QuestionModel{

    public static function get_all(){
        $questions = DB::table('questions')
                    ->select('questions.id as id', 'questions.*', 'users.name', 'users.email')
                    ->join('users', 'questions.user_id', '=', 'users.id')
                    ->get();
        return $questions;
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

    public static function upvote($question_id){
        $votes = DB::table('votes')
                        ->where('user_id', Auth::user()->id)
                        ->where('question_id', $question_id)
                        // ->where('answer_id', $answer_id)
                        ->get();
        // dd($votes);
        if(count($votes) == 0){
            $data["upvote"] = '1';
            $data["user_id"] = Auth::user()->id;
            $data["question_id"] = $question_id;
            // $data["answer_id"] = $answer_id;

            $result = DB::table('votes')->insert($data);
        }
        else{
            if($votes[0]->upvote == 1){
                $result = DB::table('votes')
                            ->where('user_id', Auth::user()->id)
                            ->where('question_id', $question_id)
                            // ->where('answer_id', $answer_id)
                            ->update([
                                'upvote' => NULL,
                                'downvote' => NULL
                            ]);

            }else{
                $result = DB::table('votes')
                            ->where('user_id', Auth::user()->id)
                            ->where('question_id', $question_id)
                            // ->where('answer_id', $answer_id)
                            ->update([
                                'upvote' => 1,
                                'downvote' => NULL
                            ]);
            }
        }
        return $result;
    }

    public static function downvote($question_id){
        $votes = DB::table('votes')
                        ->where('user_id', Auth::user()->id)
                        ->where('question_id', $question_id)
                        // ->where('answer_id', $answer_id)
                        ->get();
        // dd($votes);
        if(count($votes) == 0){
            $data["downvote"] = '1';
            $data["user_id"] = Auth::user()->id;
            $data["question_id"] = $question_id;
            // $data["answer_id"] = $answer_id;

            $result = DB::table('votes')->insert($data);
        }
        else{
            if($votes[0]->downvote == 1){
                $result = DB::table('votes')
                            ->where('user_id', Auth::user()->id)
                            ->where('question_id', $question_id)
                            // ->where('answer_id', $answer_id)
                            ->update([
                                'upvote' => NULL,
                                'downvote' => NULL
                            ]);

            }else{
                $result = DB::table('votes')
                            ->where('user_id', Auth::user()->id)
                            ->where('question_id', $question_id)
                            // ->where('answer_id', $answer_id)
                            ->update([
                                'upvote' => NULL,
                                'downvote' => 1
                            ]);
            }
        }
        return $result;
    }

    public static function deletequestion($id){

        $pertanyaan = DB::table('questions')
                        ->where('id', $id)
                        ->delete();
        return $pertanyaan;
    }
}