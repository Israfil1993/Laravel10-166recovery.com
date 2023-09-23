@extends('frontend.layouts.master')
@section('content')
    <div class="allServices" >
        <div class="title">Services</div>
        <div class="allService-item">
            @foreach($services as $service)

            <a href="#" class="ServiceItem">
                <div class="ServiceTitle">{{ $service->title }}</div>
                <div class="ServiceText">{!! $service->description !!}</div>
                <div class="ServiceImg">
                    <img src="{{ asset('uploads/services/' . $service->image_1) }}" alt="">
                </div>
            </a>
            @endforeach

        </div>
    </div>
    <!------------------------ Blog Success ------------------------------>

    <div class="blogSection">
        <div class="blogTitle">
            <span>Blogs</span>
            <a href="#" class="moreBlogs">
                More Blogs
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M9.62012 3.95337L13.6668 8.00004L9.62012 12.0467" stroke="#030303" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.33334 8H13.5533" stroke="#030303" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
        <div class="blog-Items">
            <div class="swiper blog-swiper">
                <div class="swiper-wrapper">
                    @foreach($services as $service)
                    <div class="swiper-slide">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('uploads/services/' . $service->image_2) }}" alt="">
                            </div>
                            <div class="blog-body">
                                <div class="blog-descripton">
                                    {{ $service->title }}
                                </div>
                                <div class="blog-footer">
                                    <div class="blog-date">{{ $service->created_at }}</div>
                                    <a href="{{ route('service.inside.show', ['lang' => app()->getLocale(), 'id'=> $service->id]) }}" class="read-blog">
                                        Read More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M9.62012 3.95337L13.6668 8.00004L9.62012 12.0467" stroke="#3D3D3D" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2.33325 8H13.5533" stroke="#3D3D3D" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

@endsection
