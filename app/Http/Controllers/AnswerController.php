<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AnswerModel;
use App\Models\QuestionModel;
use App\Models\VotesModel;
use Auth;

class AnswerController extends Controller
{
    public function value(){
        $upvote = count(VotesModel::get_upvote());
        $downvote = count(VotesModel::get_downvote());
        $favorite = count(VotesModel::get_favorite());
        $reputasi = ($upvote * 10) + ($downvote * (-1)) + ($favorite * 15);
        $value = array([
                    'upvote' => $upvote,
                    'downvote' => $downvote,
                    'favorite' => $favorite,
                    'reputasi' => $reputasi
                        ]);
        // dd($value);

        return $value;
    }
    public function create($question_id)
    {
        $value = $this->value();
    	return view('answer_create', compact('question_id', 'value'));
    }

    public function store(Request $request, $question_id)
    {
        $data = $request->all();
        unset($data['_token']);
        // dd($question_id);
        $insert = AnswerModel::savejawaban($data,  $question_id);
        if($insert) {
        	return redirect()->route('questionDetail', ['id' => $question_id]);
        }
    }

    public function favorite($question_id, $answer_id)
    {
        $answer_fav = AnswerModel::favorites($question_id, $answer_id);
        $questions = QuestionModel::find_by_id($question_id);
        $answers = AnswerModel::find_by_id($question_id);
        
        for($i = 0; $i < count($answers); $i++){
            if($answers[$i]->marked == 1){
                $answers[$i]->star = 'fa fa-star';
            }
            else{
                $answers[$i]->star = 'pe-7s-star';
            }

        }
        return redirect()->route('questionDetail', ['id' => $question_id]);
    }

    public function upvote($question_id = 0, $answer_id = 0)
    {
        //update upvote
        $upvote = AnswerModel::upvote($question_id, $answer_id);

        return redirect()->route('questionDetail', ['id' => $question_id]);
        // return view('discussion', compact('questions', 'answers'));
    }

    public function downvote($question_id = 0, $answer_id = 0)
    {
        //update upvote
        $downvote = AnswerModel::downvote($question_id, $answer_id);

        return redirect()->route('questionDetail', ['id' => $question_id]);
        // return view('discussion', compact('questions', 'answers'));
    }

    public function delete($question_id = 0, $answer_id = 0)
    {
        $pertanyaan = AnswerModel::deleteanswer( $answer_id );
        return redirect()->route('questionDetail', ['id' => $question_id]);
    }

    public function edit($question_id = 0, $answer_id = 0)
    {
        $value = $this->value();
        $answers = AnswerModel::find_by_answer_id($answer_id);
        // dd($answers);

        return view('answer_edit', compact('question_id', 'answers', 'value'));
    }

    public function update($question_id = 0, $answer_id = 0, Request $request)
    {
        // dd($request->all);
        $pertanyaan = AnswerModel::updateanswer( $answer_id, $request->all() );
        return redirect()->route('questionDetail', ['id' => $question_id]);
    }
     
}
