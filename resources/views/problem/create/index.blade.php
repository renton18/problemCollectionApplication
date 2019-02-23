@extends('layouts.application')
@section('title', '新規作成')

@section('content')
<br><br>
<form action="" method="post" class="form-horizontal">
  @csrf
  {{ method_field('patch') }}
  @include('layouts.errors')
  <div class="form-group">
    <label for="problemId" class="col-md-12 control-label">問題ID</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="problemId" name="problemId" value="{{old('problemId')}}" placeholder="問題ID">
    </div>
  </div>
  <div class="form-group">
    <label for="problemCategory" class="col-md-5 control-label">カテゴリ</label>
    <div class="col-md-5">
      <select class="form-control select select-default" id="problemCategory" name="problemCategory" data-toggle="select">
      <option>情報セキュリティ総論</option>
      <option>情報資産に対する脅威と対策①</option>
      </select>
    </div>
  <div class="form-group">
    <label for="problemTitle" class="col-md-12 control-label">内容</label>
    <div class="col-md-12">
      <textarea class="form-control" name="problemTitle" value="{{old('problemTitle')}}" rows="8" placeholder="内容"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="selectItem1" class="col-md-12 control-label">選択肢1</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="selectItem1" name="selectItem1" value="{{old('selectItem1')}}" placeholder="選択肢1">
    </div>
  </div>
  <div class="form-group">
    <label for="selectItem2" class="col-md-12 control-label">選択肢2</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="selectItem2" name="selectItem2" value="{{old('selectItem2')}}" placeholder="選択肢2">
    </div>
  </div>
  <div class="form-group">
    <label for="selectItem3" class="col-md-12 control-label">選択肢3</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="selectItem3" name="selectItem3" value="{{old('selectItem3')}}" placeholder="選択肢3">
    </div>
  </div>
  <div class="form-group">
    <label for="selectItem4" class="col-md-12 control-label">選択肢4</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="selectItem4" name="selectItem4" value="{{old('selectItem4')}}" placeholder="選択肢4">
    </div>
  </div>
  <div class="form-group">
    <label for="selectItem5" class="col-md-12 control-label">選択肢5</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="selectItem5" name="selectItem5" value="{{old('selectItem5')}}" placeholder="選択肢5">
    </div>
  </div>
  <div class="form-group">
    <label for="selectItem6" class="col-md-12 control-label">選択肢6</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="selectItem6" name="selectItem6" value="{{old('selectItem6')}}" placeholder="選択肢6">
    </div>
  </div>
  <div class="form-group">
    <label for="memo" class="col-md-12 control-label">メモ</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="memo" name="memo" value="{{old('memo')}}" placeholder="メモ">
    </div>
  </div>
  <div class="form-group">
    <label for="yesNoProblemFlag" class="col-md-2 control-label">●✖問題フラグ</label>
    <div class="col-md-2">
      <select class="form-control select select-default" id="yesNoProblemFlag" name="yesNoProblemFlag" data-toggle="select">
        <option value="1">はい</option>
        <option value="0">いいえ</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="explainId" class="col-md-12 control-label">説明ID</label>
    <div class="col-md-12">
      <input type="text" class="form-control" id="explainId" name="explainId" value="{{old('explainId')}}" placeholder="説明ID">
    </div>
  </div>
  <div class="text-right"><button class="btn btn-primary">確認</button></div>
</form>
<br><br>
@endsection