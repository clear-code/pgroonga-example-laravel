@extends('layouts.default')
@section('content')

<div class="page-header">
  @if (!(empty($query)))
    <h1>{{ $query }} の検索結果</h1>
  @else
    <h1>すべての記事</h1>
  @endif
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
