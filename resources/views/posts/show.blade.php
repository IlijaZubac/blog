@extends ('layouts.master')
@section('title')
   Single post
@endsection
@section('content')

<h2 class="blog-post-title">Create new comments</h2>

       <h1>{{$post->title}}</h1>
       <p>{{$post->body}}</p>

       <form method="POST" action="{{ route('comments-post', ['post_id'=> $post->id]) }}"> 
       {{ csrf_field() }}
       <textarea name='body'></textarea>
       <button type="submit">Submit</button>
       </form>
@endsection