<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CommentModel;
use App\Models\VotesModel;
use Auth;

class CommentController extends Controller
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
    public function create($id)
    {	
    	// dd($id);
        $value = $this->value();

    	return view('comment_create', compact('id', 'value'));
    }

    public function creates($id, $answer_id)
    {	
    	// dd($id);
        $value = $this->value();

    	return view('comment_creates', compact('id', 'answer_id', 'value'));
    }

    public function store(Request $request, $question_id)
    {
        $data = $request->all();
        unset($data['_token']);
        // dd($data);
        $insert = CommentModel::savecomment($data,  $question_id);

        if($insert) {
        	return redirect()->route('questionDetail', ['id' => $question_id]);
        }
    }

    public function stores(Request $request, $question_id, $answer_id)
    {
        $data = $request->all();
        unset($data['_token']);
        // dd($data);
        $insert = CommentModel::savecomment($data,  $question_id, $answer_id);

        if($insert) {
        	return redirect()->route('questionDetail', ['id' => $question_id]);
        }
    }
}
