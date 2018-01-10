@extends('_layouts.master')

@section('meta')
    @if($item->twitter_title)
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@steveschoger" />
    <meta name="twitter:title" content="{{ $item->twitter_title }}" />
    <meta name="twitter:description" content="{{ $item->twitter_description }}" />
    <meta name="twitter:image" content="{{ $item->twitter_image }}" />
    <meta name="twitter:creator" content="@steveschoger" />
    @endif

    @if($item->twitter_large_title)
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@steveschoger" />
    <meta name="twitter:title" content="{{ $item->twitter_large_title }}" />
    <meta name="twitter:description" content="{{ $item->twitter_large_description }}" />
    <meta name="twitter:image" content="{{ $item->twitter_large_image }}" />
    <meta name="twitter:creator" content="@steveschoger" />
    @endif
@endsection

@section('body')
<div class="main-wrapper">
<div class="top-border"></div>
    <div class="constrain constrain-lg">
    <div class="logo">
        <a href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
                <path class="svg-logo" d="M32 64a32 32 0 1 1 0-64 32 32 0 0 1 0 64zm0-2a30 30 0 1 0 0-60 30 30 0 0 0 0 60zm-9-22h18a5 5 0 0 0 4-2 5 5 0 0 0-4-2H23a7 7 0 0 1-6.33-10A7 7 0 0 1 23 16h25v1a7 7 0 0 1-7 7H23a5 5 0 0 0-4 2 5 5 0 0 0 4 2h18a7 7 0 0 1 6.33 10A7 7 0 0 1 41 48H16v-1a7 7 0 0 1 7-7zm-4.97-11.5A5 5 0 0 0 23 34h18c1.9 0 3.64.76 4.9 2a5.02 5.02 0 0 0-4.9-6H23c-1.9 0-3.64-.76-4.9-2a5 5 0 0 0-.07.5zM41 42H23a5 5 0 0 0-4.9 4H41a5 5 0 0 0 4.9-6c-1.26 1.24-3 2-4.9 2zM23 22h18a5 5 0 0 0 4.9-4H23a5 5 0 0 0-4.9 6c1.26-1.24 3-2 4.9-2z"></path>
            </svg>
        </a>
    </div>
    <article>
        <header>
            <aside class="no-line-height">
                <p class="text-sm font-sans font-normal text-gray-lighter m-xs-b-2">
                    {{ $item->formatDate('F j, Y') }}
                </p>
            </aside>
            <h1 class="font-size-jumbo font-sans font-normal text-gray-dark m-xs-b-6">{{ $item->title }}</h1>
        </header>
        <div class="markdown js-blog-post-body">
            @yield('post')
        </div>
    </article>
    <div class="m-xs-b-6">
        <div class="font-size-lg">
            <a href="/" class="inline-block font-sans font-normal">Go back to home</a>
        </div>
    </div>
    </div>
</div>
@endsection