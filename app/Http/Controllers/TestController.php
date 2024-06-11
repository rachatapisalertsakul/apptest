<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    public function pre_test()
    {

        $pretest = DB::table('pretest')->orderBy('choice_no', 'ASC')->get();
        return view('PreTest', compact('pretest'));
    }

    public function send_pretest(Request $request)
    {

        // dd($request->all());

        $pretest = DB::table('pretest')->orderBy('choice_no', 'ASC')->get();

        $point = 0;
        foreach ($pretest as $key => $p) {
            $key++;
            if ($request->$key == $p->ans) {
                $point += 1;
            }
        }

        // dd($point);
        
        // dd($request->$key);

        DB::table('test_history')->insert([
            'point' => $point,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'nickname' => $request->nickname,
            'stucode' => $request->stucode,
            'email' => $request->email,
            'type' => 'pretest',
            'date_test' => date('d-m-y H:i:s'),
        ]);

        $result = DB::table('test_history')->orderBy('id_history','DESC')->first();

        return view('Result',compact('result'));
       
    }

    public function post_test(){
        $posttest = DB::table('posttest')->orderBy('choice_no', 'ASC')->get();
        return view('PostTest', compact('posttest'));
    }

    public function send_posttest(Request $request){
        $posttest = DB::table('posttest')->orderBy('choice_no', 'ASC')->get();

        $point = 0;
        foreach ($posttest as $key => $p) {
            $key++;
            if ($request->$key == $p->ans) {
                $point += 1;
            }
        }

        DB::table('test_history')->insert([
            'point' => $point,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'nickname' => $request->nickname,
            'stucode' => $request->stucode,
            'email' => $request->email,
            'type' => 'posttest',
            'date_test' => date('d-m-y H:i:s'),
        ]);

        $result = DB::table('test_history')->orderBy('id_history','DESC')->first();

        return view('Result',compact('result'));
        // dd($point);
        dd($request->all());
        dd($request->$key);
    }

    public function quiz(){
        $quiz = DB::table('quiz')->get();

        return view('Quiz',compact('quiz'));
    }

    public function send_quiz(Request $request){

        // dd($request->all());
        $ans = [];
        for ($i=0; $i < count($request->answer_no); $i++) { 
            $ans[] = $request->answer_no[$i].'='.$request->answer[$i]; 
        }
        $ans = implode("||",$ans);

        DB::table('quiz_ans')->insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'nickname' => $request->nickname,
            'stucode' => $request->stucode,
            'email' => $request->email,
            'date_test' => date('d-m-y H:i:s'),
            'answer' => $ans,
        ]);

        return view('ResultQuiz');
    }

    public function answer(){
        $pre_post_test =  DB::table('test_history')->get();

        $quiz = DB::table('quiz_ans')->get();

        return view('Answer',compact('pre_post_test','quiz'));
    }
}
