<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\problem;
use App\Models\answer;

class PracticeController extends Controller
{
    public function start(int $pageNumber = 1)
    {
        $query = problem::query();
        $problems = $query->orderBy('id')->get();
        return view('practice.start', ['problems' => $problems]);
    }
    public function score(Request $request)
    {
        $datas = $request->all();
        $answerDateTime = new \Datetime();
        foreach ($datas as $data) {
            if (strpos($data, 'answer') === false) {
                continue;
            }
            $items = explode('_', $data);
            $problem = problem::where('problemId', $items[1])
                ->latest('problemUpdateTime')
                ->first();
            $judgeResult = false;
            //解答が正解かどうか
            if ($problem->answer == $items[2]) {
                $judgeResult = true;
            }
            answer::create(
                [
                    'userId' => 'user1',
                    'answerDateTime' => $answerDateTime,
                    'problemId' => $items[1],
                    'result' => $judgeResult,
                    'answer' => $items[2]
                ]
            );
        }
        
        $answers = answer::where('userId', 'user1')
                    ->where('answerDateTime', $answerDateTime)
                    ->get();
        // foreach ($answers as $problem) {
        //     dump($problem);
        //     // リレ ーション先のRoleモデルにアクセスできます
        // }
        // dump($answers->problem);

        // $problems = problem::where('userID', 'user1');
        return view('practice.result')->with('answers', $answers);
    }
}
