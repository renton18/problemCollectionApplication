@extends('layouts.application')
@section('title', '問題集')

@section('script')
<script type="text/javascript">
  $(function() {
      //初回呼び込み時
      $(".prev").prop('disabled', true);
      $(".view").hide();
      $(".correctView").hide();
      $("#view0").show();
      $(".score").hide();

      $(".prev").click(function() {
          var current = $(".view:visible");
          if(current.index() == $(".view").first().index()+1)
          {
            $(".prev").prop('disabled', true);
          }
          $(".next").prop('disabled', false);
          $(".score").hide();
          current.hide();
          current.prev("div").show();
          $(".correctView").hide();
      });

      $(".next").click(function() {
          var current = $(".view:visible");
          if(current.index() == $(".view").last().index()-1)
          {
            $(".next").prop('disabled', true);
            $(".score").show();
          }
          $(".prev").prop('disabled', false);
          current.hide();
          current.next("div").show();
          $(".correctView").hide();
      });
      $(".score").click(function() {
        $("#loadingAfter").hide();
        $("#loading").show();
      });
  });
  //正解ボタンclick時、解答を表示する
  function ShowCorrect(id){
    var correct = "#correctView" + id;
    $(correct).toggle();
  }
  //画面Loading用
  window.onload = function(){
    $(function() {
      $("#loading").fadeOut();
      $("#loadingAfter").fadeIn();
    });
  }
</script>
@endsection

@section('content')

{{-- 画面Loading用 --}}
<div id="loading" style="position:absolute;top:50%;left:50%;">
  <img class="logo" src="{{ asset('images/gif-load.gif') }}" alt="logo">
</div>

<div id="loadingAfter" style="display:none;">
<div class="col-md-12" style="margin:10px;">
  <form action="{{ route('practice.score') }}" method="post" role="form">
    @csrf
    <div class="row">
      <div class="col-sm">
        <button type="button" class="prev btn btn-hg btn-secondary" id="prev" style="width:150px;margin:5px;">
          前へ
        </button>&nbsp;
        <button type="button" class="next btn btn-hg btn-secondary" id="next" style="width:150px;margin:5px;">
          次へ
        </button>&nbsp;
        <button type="submit" class="score btn btn-hg btn-success" id="score" style="width:150px;margin:5px;">
          採点
        </button>
      </div>
    </div>

    @foreach($problems as $problem)
    <div class="view card border-primary md-12" id="view{{$loop->index}}">

      <div class="card-header">
        <div style="text-align:left;">
          問題番号：{{$problem->problemId}}&nbsp;&nbsp;&nbsp;問題カテゴリ：{{$problem->problemCategory}}&nbsp;&nbsp;&nbsp; 
          <div class="correctView" id="correctView{{$loop->index}}" style="text-align:right;float:right;padding:0 0 0 20px;">{{$problem->answer}}</div>
          <div style="text-align:right;float:right;">
            <button type="button" class="correct btn btn-warning btn-sm" onclick="ShowCorrect({{$loop->index}})">正解</button>
          </div>
        </div>
      </div>

      <div class="card-body text-primary ">
        {{-- <h4 class="card-title">Secondary card title</h4> --}}
        <p class="card-text">
          {{$problem->problemTitle}}

          @if ($problem->yesNoProblemFlag == '1')
            <div class="form-group">
              <div class="row col-md-12">
                <label class="radio">
                  <input type="radio" data-toggle="radio" name="answer{{$loop->index}}" value="answer_{{$problem->problemId}}_◯" data-radiocheck-toggle="radio"  checked="">
                  ◯
                </label>
              </div>
              <div class="row col-md-12">
                <label class="radio">
                  <input type="radio" data-toggle="radio" name="answer{{$loop->index}}" value="answer_{{$problem->problemId}}_✖" data-radiocheck-toggle="radio">
                  ✖
                </label>
              </div>
            </div>
          @else
            <div class="form-group">
              <div class="row col-md-12">
                  <label class="radio">
                    <input type="radio" data-toggle="radio" name="answer{{$loop->index}}" value="answer_{{$problem->problemId}}_ア" data-radiocheck-toggle="radio" checked="">
                    {{$problem->selectItem1}}
                  </label>
              </div>
              <div class="row col-md-12">
                  <label class="radio">
                    <input type="radio" data-toggle="radio" name="answer{{$loop->index}}" value="answer_{{$problem->problemId}}_イ" data-radiocheck-toggle="radio">
                    {{$problem->selectItem2}}
                  </label>
              </div>
              <div class="row col-md-12">
                  <label class="radio">
                    <input type="radio" data-toggle="radio" name="answer{{$loop->index}}" value="answer_{{$problem->problemId}}_ウ" data-radiocheck-toggle="radio">
                    {{$problem->selectItem3}}
                  </label>
              </div>
              <div class="row col-md-12">
                  <label class="radio">
                    <input type="radio" data-toggle="radio" name="answer{{$loop->index}}" value="answer_{{$problem->problemId}}_エ" data-radiocheck-toggle="radio">
                    {{$problem->selectItem4}}
                  </label>
              </div>
              @if(!empty($problem->selectItem5))
                <div class="row col-md-12">
                    <label class="radio">
                      <input type="radio" data-toggle="radio" name="answer{{$loop->index}}" value="answer_{{$problem->problemId}}_オ" data-radiocheck-toggle="radio">
                      {{$problem->selectItem5}}
                    </label>
                </div>
              @endif
              @if(!empty($problem->selectItem6))
                <div class="row col-md-12">
                    <label class="radio">
                      <input type="radio" data-toggle="radio" name="answer{{$loop->index}}" value="answer_{{$problem->problemId}}_カ" data-radiocheck-toggle="radio">
                      {{$problem->selectItem6}}
                    </label>
                </div>
              @endif
            </div>
          @endif
        </p>
      </div>
    </div>
    @endforeach

    <div class="row">
      <div class="col-sm">
        <button type="button" class="prev btn btn-hg btn-secondary " id="prev" style="width:150px;margin:5px;">
          前へ
        </button>&nbsp;
        <button type="button" class="next btn btn-hg btn-secondary " id="next" style="width:150px;margin:5px;">
          次へ
        </button>&nbsp;
        <button type="submit" class="score btn btn-hg btn-success" id="score" style="width:150px;margin:5px;">
          採点
        </button>
      </div>
    </div>
  </form>
</div>

</div>
@endsection