<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\leaderboard;
use App\solved;
use App\quiz;
use App\roundans;

class MainController extends Controller
{
	protected $maxround = 9;
    public function round($id)
    {
        $utoken = session('user_id');
        $maxround = leaderboard::where('id',$utoken)->select('round_id')->first();
        $maxround = $maxround['round_id'];
        $cc = leaderboard::where('round_id','>',$id)->count();
        $quesquery = solved::where(['email'=>session('email'),'round_id'=>$id])->select('question_no')->get();
        $totalques = quiz::where('round',$id)->select('id','position')->get();
        $rquery    = roundans::where('id',$id)->select('question','round_name')->first();
        $rq = $rquery['question'];
        $rname = $rquery['round_name'];
        $qdone = array();
        $i=0;
        foreach($quesquery as $ques) {
            $qdone[$i]=$ques['question_no'];
            $i++;
        }

        $i=0;$i2=0;
        $parray = array();
        $tques = array();
        $totpos = array();
        $location = array();
        foreach($totalques as $t)
        {
            $tques[$i2]=$t['id'];
            $totpos[$i2]=$t['position'];
            if(in_array($tques[$i2],$qdone)){
                $parray[$i]=explode(",",$t['position']);
                $location[$i]=$t['position'];
                $i++;
            }
            $i2++;
        }
        if($id>$maxround || $id<1)
            return redirect(url('/round/'.$maxround));
        else if($id>$this->maxround){
            return view('quiz/winner')->with('id',$id);
        }
        else
        {
            return view('quiz/round')->with(['id'=>$id,'qdone'=>$qdone,'pos'=>$location,'totalques'=>$tques,'totalpos'=>$totpos,'rq'=>$rq,'rname'=>$rname,'c'=>$cc,'locations'=>$parray]);
        }
    }
    public function showquestion($rid, $qid)
    {
        $utoken = session('user_id');
        $current = leaderboard::where('id',$utoken)->select('round_id')->first();
        $current=$current['round_id'];
        if(($rid==1 && $qid>4) || ($rid==2 && $qid>9) || ($rid==3 && $qid>14) || ($rid==4 && $qid>19) || ($rid==5 && $qid>22))
        {
            $invalid=1;
        }
        if($rid>$current || $invalid==1)
            return redirect(url('/round/'.$current));
        $quiz = quiz::where('id', $qid)->first();
        return view('quiz/ques')->with(['qid'=>$qid,'ques'=>$quiz['question'],'error'=>'']);    	
    }
	public function quesvalidate(Request $request, $qid)
    {
        $quiz= quiz::where('id', $qid)->first();
        $ans=$request->input('ansq');
        $utoken = session('user_id');
        if(strcasecmp($ans,$quiz['answer'])==0){
            $rid = $quiz['round'];
            solved::firstOrCreate(['email'=>session('email'),'question_no'=>$qid, 'round_id'=>$rid]);
            return redirect(url('/round/'.$rid));
        }
        else
             return view('quiz/ques')->with(['qid'=>$qid,'ques'=>$quiz['question'],'error'=>'Wrong Answer']);;
    }
    public function nextround(Request $request, $id)
    {
        if($id>$this->maxround){
            return 'Congrats !! you have completed the quiz';
        }
        $rans = roundans::where('id',$id)->first();
        $ans=$request->input('ansr');
        $utoken = session('user_id');
        if(strcasecmp($rans['answer'],$ans)==0){
            $id++;
            leaderboard::where('id',$utoken)->update(['round_id'=>$id]);
            return redirect(url('/round/'.$id));
        }
        else{
            return redirect(url('/round/'.$id));
        }

    }
    public function lboard()
    {
        $stats = leaderboard::all(['email','username','round_id','updated_at']);
        $statsdetails= array();
        $i=0;
        foreach($stats as $t)
            $statsdetails[$i++]=$t['attributes'];
        return view('quiz/leaderboard')->with('stand',$statsdetails);
    }

    public function rules(){
        return view('quiz/rules');
    }
}
