@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://www.freecodecamp.org/news/content/images/2021/05/freecodecamp-org-gravatar.jpeg" style="height: 150px " class="rounded-circle" alt="freeCodeCamp logo">
        </div>
        <div class="col-9 pt-5">
            <div><h1>freeCodeCamp</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>616</strong> posts</div>
                <div class="pr-5"><strong>158K</strong> followers</div>
                <div class="pr-5"><strong>410</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/</div>
            <div><a style="color:#385898" href="https://l.instagram.com/?u=https%3A%2F%2Fwww.freecodecamp.org%2F&e=AT0-njY_xb6wKjxH0POomnJE44YNM1RsoMKNAuV7mWpKJelOW7Gwg0TGjaUdswGV397sChQroZY1cn-poDdpBeGk_AfACZcR">www.freecodecamp.org</a></div>
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
