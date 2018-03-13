<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\leaderboard;
use App\solved;
use App\question;
use App\round;

class MainController extends Controller
{

    public function roundoverview(Request $requests)
    {
        if(!$requests->session()->has('email'))
        {
           return redirect('/dashboard');
        }
        $currentRound = leaderboard::where('email',session('email'))->first()['round_id'];
        $maxround = round::all()->max('round_id');
        
        if($currentRound>$maxround)
            return view('quiz/winner')->with(array('tab'=>2));
        
        $status = round::where('round_id',$currentRound)->first()['status'];
        
        if($status == 0){
            return view('quiz/locked')->with(array('tab'=>2));;
        }
        $question = question::where('round_id',$currentRound)->select(['question_no','title','question','position'])->get()->toArray();
        usort($question, function($a, $b){ return $a['question_no']>=$b['question_no']; });
        $solved = solved::where(['email'=>session('email'),'round_id'=>$currentRound])->get()->toArray();
        $roundDetails = round::where('round_id',$currentRound)->select(['round_name','question'])->first();

        $locations = [];
        $solved = array_column($solved, 'question_no');

        foreach ($question as $key=>$value) {
            if(in_array($value['question_no'], $solved))
            {
                $locations[]=explode(",",$value['position']);
                $question[$key]['solved'] = 1;
            }
            else
            {
                $question[$key]['solved'] = 0;
            }
            unset($question[$key]['position']);
        }
        $details = array(
                        'tab'       =>  2,
                        'dashname'  => 'Round '.$currentRound,
                        'locations' =>  $locations,
                        'roundDetails'     =>  $roundDetails,
                        'question'  =>  $question,
                        'round'     =>  $currentRound
                    );
        return view('quiz/roundoverview')->with($details);
    }

    public function verifyans(Request $requests)
    {
        $qno = $requests->input('qno');
        $ques = question::where('question_no', $qno)
                        ->where('round_id', $requests->input('rno'))
                        ->select(['answer','round_id'])->first();
        $userans = $requests->input('ans');
        $userans = preg_replace('/[^A-Za-z0-9\-]/', '', $userans);
        $userans = strtolower($userans);
        if($ques['answer'] == $userans){
            solved::firstOrCreate(['email'=>session('email'),'question_no'=>$qno, 'round_id'=>$ques['round_id']]);
            return "true";
        }
        else
            return "false";
    }

    public function verifyroundans(Request $requests)
    {
        $rno = $requests->input('rno');
        $maxround = round::all()->max('round_id');
        $ans = round::where('round_id',$rno)->select('answer')->first()['answer'];
        $userans = $requests->input('ans');
        $userans = preg_replace('/[^A-Za-z0-9\-]/', '', $userans);
        $userans = strtolower($userans);
        if($ans == $userans){
            $rno++;
            leaderboard::where('email',session('email'))->update(['round_id'=>$rno]);
            if($rno>$maxround)
                return "complete";
            return "true";
        }
        else
            return "false";
    }
    
}
