@extends('layouts.application')
@section('title', '採点結果')

@section('content')
<br>
<div class="col-md-12 text-right">
  <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
    <div class="card-header">
      {{$answers[0]->answerDateTime->format('Y年m月d日 H:i')}}&nbsp&nbsp
      {{$answers[0]->userId}}
    </div>
    <div class="card-body">
      <h4 class="card-title">VeryGood</h4>
      <p class="card-text">
        正解：{{$answers->where('result', '==', '1')->count()}}&nbsp
        不正解：{{$answers->where('result', '==', '0')->count()}}&nbsp
        全問数：{{$answers->count()}}
      </p>
    </div>
  </div>
</div>

<div class="col-md-12 text-center">
  <table class="table table-sm table-striped">
    <thead class="thead-dark">
      <tr>
        <th>問題ID</th>
        <th>結果</th>
        <th>解答</th>
        <th>正解</th>
      </tr>
    </thead>
    <tbody>
      @foreach($answers as $answer)
      <tr>
        <td>{{$answer->problemId}}</td>
        <td>@if($answer->result=='1') 正解 @else 不正解 @endif</td>
        <td>{{$answer->answer}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection