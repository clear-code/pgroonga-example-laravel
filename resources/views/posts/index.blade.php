@extends('layouts.default')
@section('content')

<div class="page-header">
  <h1>すべての記事</h1>
</div>

@foreach($posts as $post)
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title"><a href="{{ url("/posts/{$post->id}") }}">タイトル：{{ $post->title }} [{{ $post->category->name }}]</a></h2>
    </div>
    <div class="panel-body">
      <p>{{ $post->body }}</p>
    </div>
  </div>
@endforeach

@stop
