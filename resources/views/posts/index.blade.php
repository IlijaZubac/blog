@extends ('layouts.master')
@section('title')
    All Posts
@endsection

    @section('content')
       <h1>Posts</h1>
       <ul>
       @foreach($posts as $post)
       <li>
        <a href= "{{route('single_post',['id'=>$post->id])}}"> {{$post->title}}</a>
       </li>
       @endforeach
       </ul>
    @endsection