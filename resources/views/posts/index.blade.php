@extends('layouts.default')
@section('content')

<nav class="navbar navbar-default">
  <div class="container-fluid">
  <form class="navbar-form navbar-right"
        method="GET"
        action="">
    <div class="input-group">
      <input class="form-control"
             name="query"
             type="text"
             value="{{ $query }}"
             placeholder="検索語句">
      <span class="input-group-btn">
        <button class="btn btn-default"
               type="submit">検索</button>
      </span>
    </div>
  </form>
  </div>
</nav>

<div class="col-xs-8 col-xs-offset-1">

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

</div>

@stop
