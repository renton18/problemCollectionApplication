<?php

namespace App\Http\Controllers;

use App\Models\problem;
use Illuminate\Http\Request;

class ProblemController extends Controller
{
    public function index(Request $request)
    {
        $query = problem::query();

        $problemId = $request->problemId;
        $problemCategory = $request->problemCategory;

        if (!empty($problemId)) {
            $query->Where('problemID', 'like', '%'. $problemId.'%') ;
        }
        if (!empty($problemCategory)) {
            $query->orWhere('problemCategory', 'like', '%'. $problemCategory.'%') ;
        }

        $problems = $query->orderBy('problemId', 'desc')->paginate(10);
        return view('problem.index', [ 'problems' => $problems, 'request' => $request]);
    }
    public function create(Request $request)
    {
        $data = $request->all();
        return view('problem.create.create')->with($data);
    }
    public function store(Request $request)
    {
        $problem = new problem();
        $problem->create($request->all());
        return redirect()->to('problem');
    }
    public function edit(Request $request)
    {
        $data = $request->all();
        return view('problem.edit.edit')->with($data);
    }
    public function update(Request $request, problem $problem)
    {
        // $guardedに指定していないものは全て入り得る
        $problem->update($request->all());
        return redirect()->to('problem');
    }
}
