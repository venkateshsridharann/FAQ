<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $questions = $user->questions()->paginate(6);
        return view('home')->with('questions', $questions);
    }
    public function viewReportedQuestions()
    {
        $user = Auth::user();
        $questions = $user->questionsreported()->paginate(6);
        return view('report')->with('questions', $questions);
    }
    public function guest()
    {    $user = Auth::user();
         $questions = $user->guest()->paginate(20);
        return view('guest')->with('questions', $questions);
    }
}