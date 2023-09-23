@extends('frontend.layouts.master')
@section('content')
    <div class="allBlogs-head">
        <div class="allBlogs-title">Expert Advices</div>
        <div class="searchArea">
            <input class="searchInput" type="email" placeholder="Search">
            <button class="searchBtn">Search</button>
        </div>
    </div>

    <div class="blogCart">
        <div class="blogCart-Img">
            <img src="{{ asset('uploads/blogs/' . $blog?->image) }}" alt="">
        </div>
        <div class="blogCart-context">
            <div class="blogCart-context-head">
                <div class="blog-date">{{ $blog?->published_at}}</div>

            </div>
            <div class="blogCart-context-title">{{ $blog?->title }}</div>
            <div class="blogCart-context-text">
                {!! $blog?->description !!}
            </div>
        </div>
    </div>


    <div class="allBlog-items">
        @foreach ($blogs as $blog)
        <div class="blog-item" >
            <div class="blog-img">
                <img src="{{ asset('uploads/blogs/' . $blog?->image) }}" alt="">
            </div>
            <div class="blog-body">
                <div class="blog-descripton">
                    {{ $blog?->title }}
                </div>
                <div class="blog-footer">
                    <div class="blog-date">{{ $blog?->published_at }}</div>
                    <a href="{{ route('blog.inside.show', ['lang' => app()->getLocale(), 'id'=> $blog->id]) }}" class="read-blog">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M9.62012 3.95337L13.6668 8.00004L9.62012 12.0467" stroke="#3D3D3D" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2.33325 8H13.5533" stroke="#3D3D3D" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
        @endforeach


    </div>

@endsection
