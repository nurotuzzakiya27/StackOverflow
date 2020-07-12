<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\QuestionModel;
use App\Models\AnswerModel;
use App\Models\VotesModel;
use App\Models\CommentModel;
use Auth;


class QuestionController extends Controller
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
    public function index(){
        $value = $this->value();
        $questions = QuestionModel::get_all();
        // dd($questions);
        return view('feed', compact('questions', 'value'));
    }

    public function show($id){
        $value = $this->value();
        $questions = QuestionModel::find_by_id($id);
        $answers = AnswerModel::find_by_id($id);
        $votes = VotesModel::get_all();
        $comments = CommentModel::find_by_id($id);
        // dd($answers);


        $sum_qvotes = 0;
        $questions->btn_upvote = 'lnr-chevron-up-circle';
        $questions->btn_downvote = 'lnr-chevron-down-circle';
        $questions->btn_upvote_color = '';   
        $questions->btn_downvote_color = '';
        for($i=0; $i < count($votes); $i++){
            if($questions->id == $votes[$i]->question_id && $votes[$i]->upvote == 1){
                $sum_qvotes++;
                if($votes[$i]->user_id == Auth::user()->id){
                    $questions->btn_upvote = 'fa fa-chevron-circle-up';
                    $questions->btn_upvote_color = 'color:blue';
                }
            }
            if($questions->id == $votes[$i]->question_id && $votes[$i]->downvote == 1){
                $sum_qvotes--;
                if($votes[$i]->user_id == Auth::user()->id){
                    $questions->btn_downvote = 'fa fa-chevron-circle-down';
                    $questions->btn_downvote_color = 'color:blue';
                }
            }
        }
        $questions->sum_votes = $sum_qvotes; 
        // dd($questions);

        for($i = 0; $i < count($answers); $i++){
            $answer_comments = CommentModel::find_by_answer_id($id, $answers[$i]->id);
            // dd($answer_comments);
            $answers[$i]->comments = $answer_comments;

            if($answers[$i]->marked == 1)$answers[$i]->star = 'fa fa-star';
            else $answers[$i]->star = 'pe-7s-star';

            $sum_votes = 0;
            $answers[$i]->btn_upvote = 'lnr-chevron-up-circle';
            $answers[$i]->btn_downvote = 'lnr-chevron-down-circle';
            $answers[$i]->btn_upvote_color = '';   
            $answers[$i]->btn_downvote_color = '';

            for($j = 0; $j < count($votes); $j++){
                
                if($answers[$i]->id == $votes[$j]->answer_id && $votes[$j]->upvote == 1){
                    $sum_votes++;
                    if($votes[$j]->user_id == Auth::user()->id){
                        $answers[$i]->btn_upvote = 'fa fa-chevron-circle-up';
                        $answers[$i]->btn_upvote_color = 'color:blue';
                    }
                }
                if($answers[$i]->id == $votes[$j]->answer_id && $votes[$j]->downvote == 1){
                    $sum_votes--;
                    if($votes[$j]->user_id == Auth::user()->id){
                        $answers[$i]->btn_downvote = 'fa fa-chevron-circle-down';
                        $answers[$i]->btn_downvote_color = 'color:blue';
                    }
                }

            }
            $answers[$i]->sum_votes = $sum_votes; 

        }
        // dd($answers);
        return view('discussion', compact('questions', 'answers', 'comments', 'value'));
    }

    public function create()
    {
        // dd('oke');   
        $value = $this->value();
    	return view('question_create', compact('value'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        unset($data['_token']);
        $insert = QuestionModel::savequestion($data);
        if($insert) {
        	return redirect()->route('feed');
        }
    }

    public function upvote($question_id = 0)
    {
        //update upvote
        $upvote = QuestionModel::upvote($question_id);

        return redirect()->route('questionDetail', ['id' => $question_id]);
        // return view('discussion', compact('questions', 'answers'));
    }

    public function downvote($question_id = 0)
    {
        //update upvote
        $downvote = QuestionModel::downvote($question_id);

        return redirect()->route('questionDetail', ['id' => $question_id]);
        // return view('discussion', compact('questions', 'answers'));
    }

    public function delete($question_id = 0)
    {
        $check = QuestionModel::find_by_id( $question_id );
        if($check->user_id == Auth::user()->id){
            $pertanyaan = QuestionModel::deletequestion( $question_id );

        }
        return redirect()->route('feed');
    }
}
