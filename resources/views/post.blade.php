
@extends('layouts.main')

@section('container')

  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
        <h3 class="mb-4">{{$post->title}}</h3>

        <h5>By. <a href="/posts?author=/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>

        @if ($post->image)
        <div style="max-height: 400px; overflow:hidden; width:100%; height:400px;">
          <img src="{{ asset('storage/'. $post->image)  }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
        </div>
        @else
          <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
        @endif
        
        <article class="my-3">
          {!! $post->body !!}
        </article>

        <a href="/posts" class="d-block mt-4">Back To Post</a>
      </div>
    </div>
  </div>
  
@endsection

