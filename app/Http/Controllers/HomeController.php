<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\QuestionModel;
use App\Models\AnswerModel;
use App\Models\VotesModel;
use App\Models\CommentModel;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
        // $upvote = count(VotesModel::get_upvote());
        // $this->upvote = $upvote;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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

    public function index()
    {
        $value = $this->value();
        // dd($value);
        return view('home', compact('value'));
    }
    
    public function erd()
    {
        $value = $this->value();
        return view('erd', compact('value'));
    }
}
