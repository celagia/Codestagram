@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::user()->following()->count() == 0)
    <div class="col-8 pt-3 justify-content-center">
        <h4>Welcome to Codestagram!</h4>
        <h5 class="pt-2">Follow some profiles to see some posts</h5>
    </div>
    @endif
    @foreach($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{ $post->user->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <div>
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection