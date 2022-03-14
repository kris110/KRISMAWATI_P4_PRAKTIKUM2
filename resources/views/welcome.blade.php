@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @forelse ($posts as $post)
        <div class="col-md-8 my-2">
            <div class="card">
                <div class="card-header">{{ $post->title }}</div>
                <div class="card-body">
                    {{ $post->content }}
                </div>
            </div>
        </div>
        @empty
        <div class="col-md-8 my-3">
            <div class="card">
                <div class="card-header">Post</div>
                <div class="card-body">
                    No Post
                </div>
            </div>
        </div>
        @endforelse
    </div>
    {{ $posts->links() }}
</div>
@endsection
