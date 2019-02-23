@extends('layouts.application')
@section('title', '更新確認')
@section('content')

<br><br>
<form action="" method="post" class="form-horizontal">
    @csrf
    <input type="hidden" name="problemId" value="{{$problemId}}">
    <input type="hidden" name="problemCategory" value="{{$problemCategory}}">
    <input type="hidden" name="problemTitle" value="{{$problemTitle}}">
    <input type="hidden" name="selectItem1" value="{{$selectItem1}}">
    <input type="hidden" name="selectItem2" value="{{$selectItem2}}">
    <input type="hidden" name="selectItem3" value="{{$selectItem3}}">
    <input type="hidden" name="selectItem4" value="{{$selectItem4}}">
    <input type="hidden" name="selectItem5" value="{{$selectItem5}}">
    <input type="hidden" name="selectItem6" value="{{$selectItem6}}">
    <input type="hidden" name="memo" value="{{$memo}}">
    <input type="hidden" name="yesNoProblemFlag" value="{{$yesNoProblemFlag}}">
    <input type="hidden" name="explainId" value="{{$explainId}}">
    <script>
        document.write('<input type="hidden" name="problemUpdateTime" value="' + (new Date).toLocaleString() + '">');
    </script>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​
    <div class="row">
        <label class="col-md-12 control-label">問題ID</label>
        <div class="col-md-12">{{$problemId}}</div>
    </div>
    <div class="row">
        <label class="col-md-12 control-label">カテゴリ</label>
        <div class="col-md-12">{{$problemCategory}}</div>
    </div>
    <div class="row">
        <label class="col-md-12 control-label">内容</label>
        <div class="col-md-12">{{$problemTitle}}</div>
    </div>
    <div class="row">
        <label class="col-md-12 control-label">選択肢1</label>
        <div class="col-md-12">{{$selectItem1}}</div>
    </div>
    <div class="row">
        <label class="col-md-12 control-label">選択肢2</label>
        <div class="col-md-12">{{$selectItem2}}</div>
    </div>
    <div class="row">
        <label class="col-md-12 control-label">選択肢3</label>
        <div class="col-md-12">{{$selectItem3}}</div>
    </div>
    <div class="row">
        <label class="col-md-12 control-label">選択肢4</label>
        <div class="col-md-12">{{$selectItem4}}</div>
    </div>
    <div class="row">
        <label class="col-md-12 control-label">選択肢5</label>
        <div class="col-md-12">{{$selectItem5}}</div>
    </div>
    <div class="row">
        <label class="col-md-12 control-label">選択肢6</label>
        <div class="col-md-12">{{$selectItem6}}</div>
    </div>
    <div class="row">
        <label class="col-md-12 control-label">メモ</label>
        <div class="col-md-12">{{$memo}}</div>
    </div>
    <div class="row">
        <label class="col-md-12 control-label">●✖問題フラグ</label>
        <div class="col-md-12">{{$yesNoProblemFlag}}</div>
    </div>
    <div class="row">
        <label class="col-md-12 control-label">説明ID</label>
        <div class="col-md-12">{{$explainId}}</div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-sm-offset-4 col-md-12">
            <input type="submit" value="変更" class="btn btn-primary" />
        </div>
    </div>
</form>
<br><br>

@endsection