<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;

class AnswerModel
{
    public static function savejawaban($data,  $question_id){
    	$data["question_id"] = $question_id;
        $data["user_id"] = Auth::user()->id;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        // dd($data);
    	$new_data = DB::table('answers')->insert($data);

    	return $new_data;

    	// $new_jawaban = DB::table('jawaban')->insert($data);
    	// return $new_jawaban;
    }

    public static function find_by_id($id){
    	$answer = DB::table('answers')
                    ->select('answers.id as id', 'answers.*', 'users.name', 'users.email')
                    ->join('users', 'answers.user_id', '=', 'users.id')
                    ->where('question_id',$id)
                    ->get();
    	return $answer;
    }

    public static function find_by_answer_id($id){
        $answer = DB::table('answers')->where('id',$id)->get();
        return $answer;
    }

    public static function favorites($question_id, $answer_id){
        // dd($question_id,$answer_id);
        $ans = DB::table('answers')
                        // ->where('user_id', Auth::user()->id)
                        ->where('question_id', $question_id)
                        // ->where('id', $answer_id)
                        ->update([
                            'marked' => NULL
                        ]);
                        // ->where('id', $answer_id);
        $ans = DB::table('answers')
                        // ->where('user_id', Auth::user()->id)
                        ->where('id', $answer_id)
                        ->update([
                            'marked' => 1
                        ]);
        return $ans;


    }

    public static function upvote($question_id, $answer_id){
        $votes = DB::table('votes')
                        ->where('user_id', Auth::user()->id)
                        // ->where('question_id', $question_id)
                        ->where('answer_id', $answer_id)
                        ->get();
        // dd($votes);
        if(count($votes) == 0){
            $data["upvote"] = '1';
            $data["user_id"] = Auth::user()->id;
            // $data["question_id"] = $question_id;
            $data["answer_id"] = $answer_id;

            $result = DB::table('votes')->insert($data);
        }
        else{
            if($votes[0]->upvote == 1){
                $result = DB::table('votes')
                            ->where('user_id', Auth::user()->id)
                            // ->where('question_id', $question_id)
                            ->where('answer_id', $answer_id)
                            ->update([
                                'upvote' => NULL,
                                'downvote' => NULL
                            ]);

            }else{
                $result = DB::table('votes')
                            ->where('user_id', Auth::user()->id)
                            // ->where('question_id', $question_id)
                            ->where('answer_id', $answer_id)
                            ->update([
                                'upvote' => 1,
                                'downvote' => NULL
                            ]);
            }
        }
        return $result;
    }

    public static function downvote($question_id, $answer_id){
        $votes = DB::table('votes')
                        ->where('user_id', Auth::user()->id)
                        // ->where('question_id', $question_id)
                        ->where('answer_id', $answer_id)
                        ->get();
        // dd($votes);
        if(count($votes) == 0){
            $data["downvote"] = '1';
            $data["user_id"] = Auth::user()->id;
            // $data["question_id"] = $question_id;
            $data["answer_id"] = $answer_id;

            $result = DB::table('votes')->insert($data);
        }
        else{
            if($votes[0]->downvote == 1){
                $result = DB::table('votes')
                            ->where('user_id', Auth::user()->id)
                            // ->where('question_id', $question_id)
                            ->where('answer_id', $answer_id)
                            ->update([
                                'upvote' => NULL,
                                'downvote' => NULL
                            ]);

            }else{
                $result = DB::table('votes')
                            ->where('user_id', Auth::user()->id)
                            // ->where('question_id', $question_id)
                            ->where('answer_id', $answer_id)
                            ->update([
                                'upvote' => NULL,
                                'downvote' => 1
                            ]);
            }
        }
        return $result;
    }

    public static function deleteanswer($id){
        $pertanyaan = DB::table('answers')
                        ->where('id', $id)
                        ->where('user_id', Auth::user()->id)
                        ->delete();
        return $pertanyaan;
    }

     public static function updateanswer($id, $request){
        $pertanyaan = DB::table('answers')
                        ->where('id', $id)
                        ->where('user_id', Auth::user()->id)
                        ->update([
                            'content' => "'".$request['content']."'",
                            'updated_at' => Carbon::now()
                        ]);
        return $pertanyaan;
    }
}
