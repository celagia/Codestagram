@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://avatars.githubusercontent.com/u/36736971?v=4" style="height: 175px" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href='#'>Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>3</strong> posts</div>
                <div class="pr-5"><strong>158K</strong> followers</div>
                <div class="pr-5"><strong>410</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a style="color:#385898" href="https://github.com/celagia">{{ $user->profile->url ?? 'https://github.com/celagia'}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://cdn.pixabay.com/photo/2016/11/19/14/00/code-1839406_1280.jpg" class="w-100" style="object-fit: cover;" width=300px height=300px>
        </div>
        <div class="col-4">
            <img src="https://edsurge.imgix.net/uploads/post/image/12176/coding-1556754232.jpg?auto=compress%2Cformat&w=1024&h=512&fit=crop" class="w-100" style="object-fit: cover;" width=300px height=300px>
        </div>
        <div class="col-4">
            <img src="https://cdn-wordpress-info.futurelearn.com/wp-content/uploads/Coding_Blog_Header_1500x750-606x303.jpg.optimal.jpg" class="w-100" style="object-fit: cover;" width=300px height=300px>
        </div>
    </div>
</div>
@endsection
