@extends('layouts.application')
@section('title', '問題集')

@section('script')

<script type="text/javascript">
  $(function() {
      //初回呼び込み時
      $("#prev").prop('disabled', true);
      $(".view").hide();
      $("#view0").show();
      $("#explain").prop('disabled', true);
      $("#score").hide();

      $("#prev").click(function() {
          var current = $(".view:visible");
          if(current.index() == $(".view").first().index()+1)
          {
            $("#prev").prop('disabled', true);
          }
          $("#next").prop('disabled', false);
          $("#score").hide();
          current.hide();
          current.prev("div").show();
      });

      $("#next").click(function() {
          var current = $(".view:visible");
          if(current.index() == $(".view").last().index()-1)
          {
            $("#next").prop('disabled', true);
            $("#score").show();
          }
          $("#prev").prop('disabled', false);
          current.hide();
          current.next("div").show();
      });
  });
</script>
@endsection

@section('content')
<div class="col-md-12">
  <form action="{{ route('practice.score') }}" method="post" role="form">
  @csrf

    @foreach($problems as $problem)
    <div class="view" id="view{{$loop->index}}">
      <div class="row">
        <div class="col-md-4" style="color:#FFFFFF;background:#651FFF;">問題番号：{{$problem->problemId}}</div>
        <div class="col-md-8" style="color:#FFFFFF;background:#651FFF;">問題カテゴリ：{{$problem->problemCategory}}</div>
      </div>

      <div class="row">
        <div class="col-md-12" style="height:200px;background:#D1C4E9;">{{$problem->problemTitle}}</div>
      </div>

      <div class="col-md-12" style="height:190px;">
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
      </div>
    </div>
    @endforeach

    <div class="col-md-12 text-left">
      <button type="button" class="btn btn-hg btn-inverse" id="prev" style="width:150px;">
        前へ
      </button>
      <button type="button" class="btn btn-hg btn-inverse" id="next" style="width:150px;">
        次へ
      </button>
      <button type="button" class="btn btn-hg btn-inverse" id="explain" style="width:150px;">
        説明
      </button>
      <button type="submit" class="btn btn-hg btn-success" id="score" style="width:150px;">
        採点
      </button>
    </div>

  </form>
</div>

@endsection