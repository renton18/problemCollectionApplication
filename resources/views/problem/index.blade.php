@extends('layouts.application')
@section('title', '問題マスタ')

@section('script')
<script>
  $(function() {
    $(".alert-msg").click(function() {
      if (confirm("本当に削除しますか？")) {
      } else {
        return false;
      }
    });
  });
</script>
@endsection

@section('content')
<div class="col-sm-12" style="text-align:center;">

  <div class="form-inline row" style="padding-left:0px;">
    <!--↓↓ 検索フォーム ↓↓-->
    <div class="col-md-10">
      <form action="{{ route('problem.index') }}">
        @csrf
        <div class="form-group">
          <input type="text" name="problemId" value="{{ $request->problemId }}" class="form-control" placeholder="問題ID">
          <input type="text" name="problemCategory" value="{{ $request->problemCategory }}" class="form-control" placeholder="カテゴリ">
          <input type="submit" value="検索" class="btn btn-primary">
        </div>
      </form>
    </div>
    <!--↑↑ 検索フォーム ↑↑-->
    <div class="col-md-2">
      <div class="form-group">
        <a href="{{ route('problem.create') }}" class="btn btn-primary">新規登録</a>
      </div>
    </div>
  </div>

  <table class="table table-sm able-responsive table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th>問題ID</th>
        <th>カテゴリ</th>
        <th>タイトル</th>
        <th>選択肢1</th>
        <th>選択肢2</th>
        <th>選択肢3</th>
        <th>選択肢4</th>
        <th>選択肢5</th>
        <th>選択肢6</th>
        <th>メモ</th>
        <th>○✖</th>
        <th>説明ID</th>
        <th>更新日時</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      　@foreach($problems as $problem)
      <tr>
        <td>{{$problem->problemId}}</td>
        <td>{{$problem->problemCategory}}</td>
        <td>{{$problem->problemTitle}}</td>
        <td>{{$problem->selectItem1}}</td>
        <td>{{$problem->selectItem2}}</td>
        <td>{{$problem->selectItem3}}</td>
        <td>{{$problem->selectItem4}}</td>
        <td>{{$problem->selectItem5}}</td>
        <td>{{$problem->selectItem6}}</td>
        <td>{{$problem->memo}}</td>
        <td>{{$problem->yesNoProblemFlag}}</td>
        <td>{{$problem->explainId}}</td>
        <td>{{$problem->problemUpdateTime}}</td>
        <td size="10">
          <div style="display:flex;">
            <a href="{{ route('problem.show', $problem) }}" class="btn btn-primary btn-sm">詳細</a>&nbsp;
            <a href="{{ route('problem.edit', $problem) }}" class="btn btn-primary btn-sm">編集</a>&nbsp;
            <form action="{{ route('problem.delete', $problem) }}" method="post">
              @csrf
              <input type="submit" value="削除" class="btn btn-danger btn-sm alert-msg">
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<!--↓↓ ページネーション ↓↓-->
<div class="text-center">
  {{ $problems->links() }}
</div>
<!--↑↑ ページネーション ↑↑-->

@endsection