@extends('layouts.application')
@section('title', '更新')

@section('content')
<br><br>
<form action="" method="post" class="form-horizontal">
  @csrf
  {{ method_field('patch') }}
  @include('layouts.errors')
  <div class="row">
      <label class="col-md-12 control-label">問題ID</label>
      <div class="col-md-12">{{$problem->problemId}}</div>
      <input type="hidden" name="problemId" value="{{$problem->problemId}}">
  </div>
  <div class="form-group">
    <label for="problemCategory" class="col-md-5 control-label">カテゴリ</label>
    <div class="col-md-5">
      <select class="form-control select select-default" id="problemCategory" name="problemCategory" data-toggle="select">
      <option @if($problem->problemCategory=='情報セキュリティ総論')) selected @endif>情報セキュリティ総論</option>
      <option @if($problem->problemCategory=='情報資産に対する脅威と対策①')) selected @endif>情報資産に対する脅威と対策①</option>
      </select>
    </div>
  <div class="form-group">
    <label for="problemTitle" class="col-md-12 control-label">内容</label>
    <div class="col-md-12">
      <textarea class="form-control" name="problemTitle" rows="8" placeholder="内容">{{$problem->problemTitle}}</textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="selectItem1" class="col-md-12 control-label">選択肢1</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="selectItem1" name="selectItem1" value="{{$problem->selectItem1}}" placeholder="選択肢1">
    </div>
  </div>
  <div class="form-group">
    <label for="selectItem2" class="col-md-12 control-label">選択肢2</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="selectItem2" name="selectItem2" value="{{$problem->selectItem2}}" placeholder="選択肢2">
    </div>
  </div>
  <div class="form-group">
    <label for="selectItem3" class="col-md-12 control-label">選択肢3</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="selectItem3" name="selectItem3" value="{{$problem->selectItem3}}" placeholder="選択肢3">
    </div>
  </div>
  <div class="form-group">
    <label for="selectItem4" class="col-md-12 control-label">選択肢4</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="selectItem4" name="selectItem4" value="{{$problem->selectItem4}}" placeholder="選択肢4">
    </div>
  </div>
  <div class="form-group">
    <label for="selectItem5" class="col-md-12 control-label">選択肢5</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="selectItem5" name="selectItem5" value="{{$problem->selectItem5}}" placeholder="選択肢5">
    </div>
  </div>
  <div class="form-group">
    <label for="selectItem6" class="col-md-12 control-label">選択肢6</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="selectItem6" name="selectItem6" value="{{$problem->selectItem6}}" placeholder="選択肢6">
    </div>
  </div>
  <div class="form-group">
    <label for="memo" class="col-md-12 control-label">メモ</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="memo" name="memo" value="{{$problem->memo}}" placeholder="メモ">
    </div>
  </div>
  <div class="form-group">
    <label for="yesNoProblemFlag" class="col-md-2 control-label">●✖問題フラグ</label>
    <div class="col-md-2">
      <select class="form-control select select-default" id="yesNoProblemFlag" name="yesNoProblemFlag" data-toggle="select">
        <option value="1" @if($problem->yesNoProblemFlag=='1')) selected @endif>はい</option>
        <option value="0" @if($problem->yesNoProblemFlag=='0')) selected @endif>いいえ</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="explainId" class="col-md-12 control-label">説明ID</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="explainId" name="explainId" value="{{$problem->explainId}}" placeholder="説明ID">
    </div>
  </div>
  <div class="text-right"><button class="btn btn-primary">確認</button></div>
</form>
<br><br>
@endsection