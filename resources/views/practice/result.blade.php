@extends('layouts.application')
@section('title', '採点結果')

@section('script')
<script type="text/javascript">
</script>
@endsection

@section('content')
<div class="col-md-12 text-right" style="margin:10px;">
  <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
    <div class="card-header">
      {{$answers[0]->answerDateTime->format('Y年m月d日 H:i')}}&nbsp&nbsp
      {{$answers[0]->userId}}
    </div>
    <div class="card-body">
      <h4 class="card-title">
        @if($answers->where('result', '==', '1')->count() / $answers->count() * 100 == '100') 
          Perfect!
        @elseif ($answers->where('result', '==', '1')->count() / $answers->count() * 100 > '90') 
          Excellent!
        @elseif ($answers->where('result', '==', '1')->count() / $answers->count() * 100 > '70') 
          VeryGood
        @elseif ($answers->where('result', '==', '1')->count() / $answers->count() * 100 > '50') 
          Good
        @else
          Study harder
        @endif
        (正解率：{{$answers->where('result', '==', '1')->count() / $answers->count() * 100}}%)
      </h4>
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
        <td>{{$answer->problem->answer}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection