@extends('layouts.application')
@section('title', '詳細')
@section('content')

<br><br>
<div class="row">
    <label class="col-md-12 control-label">問題ID</label>
    <div class="col-md-12">{{$problem->problemId}}</div>
</div>
<div class="row">
    <label class="col-md-12 control-label">カテゴリ</label>
    <div class="col-md-12">{{$problem->problemCategory}}</div>
</div>
<div class="row">
    <label class="col-md-12 control-label">内容</label>
    <div class="col-md-12">{{$problem->problemTitle}}</div>
</div>
<div class="row">
    <label class="col-md-12 control-label">選択肢1</label>
    <div class="col-md-12">{{$problem->selectItem1}}</div>
</div>
<div class="row">
    <label class="col-md-12 control-label">選択肢2</label>
    <div class="col-md-12">{{$problem->selectItem2}}</div>
</div>
<div class="row">
    <label class="col-md-12 control-label">選択肢3</label>
    <div class="col-md-12">{{$problem->selectItem3}}</div>
</div>
<div class="row">
    <label class="col-md-12 control-label">選択肢4</label>
    <div class="col-md-12">{{$problem->selectItem4}}</div>
</div>
<div class="row">
    <label class="col-md-12 control-label">選択肢5</label>
    <div class="col-md-12">{{$problem->selectItem5}}</div>
</div>
<div class="row">
    <label class="col-md-12 control-label">選択肢6</label>
    <div class="col-md-12">{{$problem->selectItem6}}</div>
</div>
<div class="row">
    <label class="col-md-12 control-label">メモ</label>
    <div class="col-md-12">{{$problem->memo}}</div>
</div>
<div class="row">
    <label class="col-md-12 control-label">●✖問題フラグ</label>
    <div class="col-md-12">{{$problem->yesNoProblemFlag}}</div>
</div>
<div class="row">
    <label class="col-md-12 control-label">説明ID</label>
    <div class="col-md-12">{{$problem->explainId}}</div>
</div>
<div class="row">
    <a href="{{ route('problem.index') }}" class="btn btn-primary">戻る</a>
</div>
<br><br>

@endsection