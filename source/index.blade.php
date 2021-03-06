@extends('_layouts.master')

@section('body')
<div class="main-wrapper">
        <div class="top-border"></div>
        <div class="container">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
                    <path class="svg-logo" d="M32 64a32 32 0 1 1 0-64 32 32 0 0 1 0 64zm0-2a30 30 0 1 0 0-60 30 30 0 0 0 0 60zm-9-22h18a5 5 0 0 0 4-2 5 5 0 0 0-4-2H23a7 7 0 0 1-6.33-10A7 7 0 0 1 23 16h25v1a7 7 0 0 1-7 7H23a5 5 0 0 0-4 2 5 5 0 0 0 4 2h18a7 7 0 0 1 6.33 10A7 7 0 0 1 41 48H16v-1a7 7 0 0 1 7-7zm-4.97-11.5A5 5 0 0 0 23 34h18c1.9 0 3.64.76 4.9 2a5.02 5.02 0 0 0-4.9-6H23c-1.9 0-3.64-.76-4.9-2a5 5 0 0 0-.07.5zM41 42H23a5 5 0 0 0-4.9 4H41a5 5 0 0 0 4.9-6c-1.26 1.24-3 2-4.9 2zM23 22h18a5 5 0 0 0 4.9-4H23a5 5 0 0 0-4.9 6c1.26-1.24 3-2 4.9-2z"></path>
                </svg>
            </div>
            <div class="bio m-xs-b-7">
            <p class="text-gray-light">Hello! I’m Steve Schoger, a multidisciplinary designer from <a href="https://www.google.ca/maps/place/Kitchener,+ON/@43.430349,-80.6163985,11z/data=!3m1!4b1!4m5!3m4!1s0x882bf48c03ee5105:0x9525f8e6df5f544b!8m2!3d43.450301!4d-80.4831917">Kitchener, Ontario</a> where I run <a href="http://www.dukestreetstudio.com/">Duke Street Studio</a>, an independent design and illustration studio.</p>
            </div>
            <div class="m-xs-b-7">
            <div class="projects-title m-xs-b-2">Get in touch</div>
            <div class="line-seperator m-xs-b-5"></div>
            <ul class="projects no-list-style">
                <li><a href="mailto:&#115;&#109;&#046;&#115;&#099;&#104;&#111;&#103;&#101;&#114;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">&#115;&#109;&#046;&#115;&#099;&#104;&#111;&#103;&#101;&#114;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;</a></li>
            </ul>
            </div>
            <div class="m-xs-b-7">
                <div class="projects-title m-xs-b-2">Recent Posts</div>
                <div class="line-seperator m-xs-b-5"></div>
                <ul class="projects no-list-style">
                    @foreach ($posts->take(5) as $post)
                    <li class="m-xs-b-4">
                    <p class="font-size-sm font-sans font-bold text-gray-lighter">{{ $post->formatDate('F j, Y') }}</p>
                    <a class="m-xs-r-1" href="{{ $post->url }}">{{ $post->title }}<svg width="12" height="7" viewBox="0 0 12 7" xmlns="http://www.w3.org/2000/svg"><path class="icon-link" d="M9.293 3H0v1h9.293L7.146 6.146l.708.708L11.207 3.5 7.854.146l-.708.708L9.293 3" fill-rule="evenodd"/></svg></a>
                    </li>
                    @endforeach
                    <li class="m-xs-b-4"><a href="/posts/">View all posts</a></li>
                </ul>
            </div>
            <div class="m-xs-b-7">
                <div class="projects-title m-xs-b-2">Recent Projects</div>
                <div class="line-seperator m-xs-b-5"></div>
                <ul class="projects no-list-style">
                    <li class="m-xs-b-4"><a href="http://www.zondicons.com/">Zondicons<svg width="12" height="7" viewBox="0 0 12 7" xmlns="http://www.w3.org/2000/svg"><path class="icon-link" d="M9.293 3H0v1h9.293L7.146 6.146l.708.708L11.207 3.5 7.854.146l-.708.708L9.293 3" fill-rule="evenodd"/></svg></a></li>
                    <li class="m-xs-b-4"><a href="http://www.heropatterns.com/">Hero Patterns<svg width="12" height="7" viewBox="0 0 12 7" xmlns="http://www.w3.org/2000/svg"><path class="icon-link" d="M9.293 3H0v1h9.293L7.146 6.146l.708.708L11.207 3.5 7.854.146l-.708.708L9.293 3" fill-rule="evenodd"/></svg></a></li>
                    <li class="m-xs-b-4"><a href="/status-code-poster/">HTTP Status Code Poster<svg width="12" height="7" viewBox="0 0 12 7" xmlns="http://www.w3.org/2000/svg"><path class="icon-link" d="M9.293 3H0v1h9.293L7.146 6.146l.708.708L11.207 3.5 7.854.146l-.708.708L9.293 3" fill-rule="evenodd"/></svg></a></li>
                    <li class="m-xs-b-4"><a href="http://www.heroicons.com">Heroicons<svg width="12" height="7" viewBox="0 0 12 7" xmlns="http://www.w3.org/2000/svg"><path class="icon-link" d="M9.293 3H0v1h9.293L7.146 6.146l.708.708L11.207 3.5 7.854.146l-.708.708L9.293 3" fill-rule="evenodd"/></svg></a></li>
                    <li class="m-xs-b-4"><a href="https://refactoringui.com/">Refactoring UI<svg width="12" height="7" viewBox="0 0 12 7" xmlns="http://www.w3.org/2000/svg"><path class="icon-link" d="M9.293 3H0v1h9.293L7.146 6.146l.708.708L11.207 3.5 7.854.146l-.708.708L9.293 3" fill-rule="evenodd"/></svg></a></li>
                </ul>
            </div>
            <div class="m-xs-b-6">
            <ul class="social">
                <li>
                    <a href="https://www.twitter.com/steveschoger">
                        <svg width="26" height="22" viewBox="0 0 26 22" xmlns="http://www.w3.org/2000/svg">
                            <path class="social-icon" d="M22.937 3.478c1.102-.686 1.947-1.775 2.344-3.07-1.03.636-2.17 1.097-3.387 1.346C20.923.674 19.535 0 18 0c-2.945 0-5.332 2.487-5.332 5.553 0 .436.044.86.136 1.265-4.432-.232-8.362-2.44-10.994-5.803-.46.823-.722 1.777-.722 2.794 0 1.924.942 3.624 2.373 4.622-.873-.028-1.696-.28-2.416-.694v.068c0 2.692 1.837 4.937 4.28 5.445-.448.132-.918.197-1.407.197-.343 0-.68-.033-1.002-.1.677 2.207 2.648 3.815 4.983 3.858-1.827 1.49-4.127 2.377-6.625 2.377-.43 0-.856-.024-1.273-.077C2.36 21.08 5.164 22 8.177 22c9.813 0 15.175-8.463 15.175-15.802 0-.24-.003-.48-.014-.718 1.043-.783 1.95-1.762 2.662-2.876-.957.442-1.985.74-3.063.874z" fill-rule="evenodd" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.dribbble.com/steveschoger">
                        <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                            <path class="social-icon" d="M24.746 9.984c-.163-.804-.41-1.594-.73-2.35-.31-.74-.7-1.455-1.152-2.122-.447-.662-.96-1.285-1.524-1.85-.566-.565-1.188-1.078-1.85-1.525-.668-.453-1.383-.84-2.124-1.154-.755-.317-1.546-.566-2.35-.727C14.195.086 13.347 0 12.502 0c-.847 0-1.694.087-2.517.256-.803.16-1.594.41-2.35.727-.74.315-1.455.7-2.124 1.154-.662.447-1.284.96-1.85 1.526-.566.564-1.077 1.187-1.524 1.85-.453.666-.84 1.38-1.154 2.12-.32.757-.565 1.547-.73 2.35C.086 10.806 0 11.654 0 12.5c0 .847.085 1.695.253 2.52.164.8.41 1.592.73 2.346.312.74.7 1.456 1.153 2.125.447.663.958 1.283 1.524 1.85.566.565 1.188 1.076 1.85 1.523.668.453 1.383.84 2.124 1.154.755.32 1.546.563 2.35.727.822.17 1.67.256 2.517.256s1.694-.085 2.517-.256c.803-.164 1.594-.408 2.35-.727.74-.313 1.455-.7 2.122-1.154.662-.447 1.284-.958 1.85-1.524.564-.567 1.077-1.187 1.524-1.85.45-.668.84-1.383 1.153-2.124.32-.754.566-1.546.73-2.347.168-.825.253-1.673.253-2.52s-.085-1.695-.254-2.516zm-1.573 2.41c-.155-.034-3.768-.812-7.435-.35l-.23-.55c-.225-.523-.463-1.04-.71-1.55 4.215-1.72 5.926-4.196 5.946-4.225 1.497 1.82 2.404 4.14 2.43 6.673zM19.55 4.488c-.026.04-1.546 2.355-5.576 3.864-1.825-3.352-3.83-6.016-3.99-6.227.807-.196 1.65-.3 2.517-.3 2.703 0 5.17 1.007 7.05 2.662zM9.944 2.135H9.94l-.03.008.033-.008zm-1.998.71c.14.19 2.117 2.866 3.965 6.15-5.126 1.363-9.576 1.31-9.858 1.304.694-3.307 2.915-6.048 5.893-7.454zM1.825 12.5c0-.114.005-.226.008-.337.188.004 5.464.123 10.96-1.522.306.6.6 1.208.866 1.815-.142.04-.282.082-.42.128-5.762 1.862-8.685 7.045-8.685 7.045s.005.004.005.006c-1.7-1.892-2.736-4.392-2.736-7.135zM12.5 23.173c-2.583 0-4.953-.918-6.8-2.445.14.112.24.185.24.185s2.045-4.462 8.376-6.668c.024-.01.047-.016.072-.024 1.503 3.904 2.12 7.173 2.28 8.106-1.28.543-2.69.844-4.167.844zm5.966-1.82c-.11-.644-.678-3.778-2.08-7.625 3.448-.552 6.434.393 6.655.465-.474 2.974-2.178 5.54-4.574 7.158z" fill-rule="evenodd" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.github.com/sschoger">
                        <svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
                            <path class="social-icon" d="M13 0C5.82 0 0 5.82 0 13c0 5.744 3.725 10.616 8.89 12.335.65.12.888-.28.888-.626 0-.31-.01-1.127-.018-2.212-3.616.785-4.38-1.743-4.38-1.743-.59-1.502-1.442-1.902-1.442-1.902-1.18-.806.09-.79.09-.79 1.304.092 1.99 1.34 1.99 1.34 1.16 1.987 3.043 1.413 3.784 1.08.118-.84.454-1.413.825-1.737-2.887-.328-5.922-1.444-5.922-6.426 0-1.418.507-2.58 1.34-3.488-.135-.33-.58-1.65.126-3.44 0 0 1.092-.35 3.576 1.332 1.037-.288 2.15-.432 3.254-.438 1.105.006 2.217.15 3.255.438 2.482-1.682 3.57-1.332 3.57-1.332.71 1.79.265 3.11.13 3.44.834.908 1.337 2.07 1.337 3.488 0 4.995-3.04 6.094-5.935 6.415.466.402.882 1.195.882 2.408 0 1.737-.017 3.14-.017 3.566 0 .347.235.75.894.624C22.28 23.61 26 18.742 26 13c0-7.18-5.82-13-13-13" fill="#000" fill-rule="evenodd" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/steve-schoger-1298831b">
                        <svg width="25" height="24" viewBox="0 0 25 24" xmlns="http://www.w3.org/2000/svg">
                            <path class="social-icon" d="M1.105 7.696h4.678v16.302H1.105V7.696zm2.22-2.04H3.29C1.6 5.657.5 4.41.5 2.833.5 1.222 1.63 0 3.357 0c1.726 0 2.787 1.22 2.82 2.828 0 1.578-1.094 2.83-2.852 2.83zM24.5 24h-5.304v-8.438c0-2.208-.83-3.714-2.655-3.714-1.394 0-2.17 1.016-2.532 1.998-.135.35-.114.84-.114 1.332V24H8.64s.067-14.946 0-16.304h5.254v2.558c.31-1.118 1.99-2.715 4.67-2.715 3.324 0 5.936 2.346 5.936 7.394V24z" fill-rule="evenodd" />
                        </svg>
                    </a>
                </li>
            </ul>
            </div>
        </div>
    </div>
@endsection
