@extends('_layouts.master')

@section('body')
<div class="main-wrapper">
        <div class="top-border"></div>
        <div class="container">
            <div class="logo">
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
                    <path class="svg-logo" d="M32 64a32 32 0 1 1 0-64 32 32 0 0 1 0 64zm0-2a30 30 0 1 0 0-60 30 30 0 0 0 0 60zm-9-22h18a5 5 0 0 0 4-2 5 5 0 0 0-4-2H23a7 7 0 0 1-6.33-10A7 7 0 0 1 23 16h25v1a7 7 0 0 1-7 7H23a5 5 0 0 0-4 2 5 5 0 0 0 4 2h18a7 7 0 0 1 6.33 10A7 7 0 0 1 41 48H16v-1a7 7 0 0 1 7-7zm-4.97-11.5A5 5 0 0 0 23 34h18c1.9 0 3.64.76 4.9 2a5.02 5.02 0 0 0-4.9-6H23c-1.9 0-3.64-.76-4.9-2a5 5 0 0 0-.07.5zM41 42H23a5 5 0 0 0-4.9 4H41a5 5 0 0 0 4.9-6c-1.26 1.24-3 2-4.9 2zM23 22h18a5 5 0 0 0 4.9-4H23a5 5 0 0 0-4.9 6c1.26-1.24 3-2 4.9-2z"></path>
                </svg>
            </a>
            </div>
            <div class="m-xs-b-7">
                <div class="projects-title m-xs-b-2">All Posts</div>
                <div class="line-seperator m-xs-b-5"></div>
                <ul class="projects no-list-style">
                    @foreach ($posts as $post)
                    <li class="m-xs-b-4">
                    <p class="font-size-sm font-sans font-normal text-gray-light">{{ $post->formatDate('F j, Y') }}</p>
                    <a class="m-xs-r-1" href="{{ $post->url }}">{{ $post->title }}<svg width="12" height="7" viewBox="0 0 12 7" xmlns="http://www.w3.org/2000/svg"><path class="icon-link" d="M9.293 3H0v1h9.293L7.146 6.146l.708.708L11.207 3.5 7.854.146l-.708.708L9.293 3" fill-rule="evenodd"/></svg></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection