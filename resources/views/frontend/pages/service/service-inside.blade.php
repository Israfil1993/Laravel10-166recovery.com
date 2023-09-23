@extends('frontend.layouts.master')
@section('content')
    <div class="headBtnArea">
        <a href="#" class="backToBlogs">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M6.38016 3.95334L2.3335 8.00001L6.38016 12.0467" stroke="#030303" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                <path d="M13.6668 8.00003H2.44678" stroke="#030303" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
            </svg>
            Back to Services
        </a>
    </div>
    <div class="serviceInside-title">{{ $service->title }}</div>
    <div class="serviceInside-HeadImg">
        <img src="{{ asset('uploads/services/' . $service->image_2) }}" alt="">
    </div>
    <div class="serviceInside-Context">
        <div class="serviceInside-Context-title">
            {{ $service->title }}
        </div>
        <div class="serviceInside-text">
           {!! $service->description !!}
        </div>
    </div>

    <div class="service-Section">
        <div class="service-Items">
            <div class="swiper service-swiper">
                <div class="swiper-head">
                    <div class="swiper-title">Other Services</div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <div class="swiper-wrapper">
                    @foreach($services as $service)
                    <div class="swiper-slide">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('uploads/services/' . $service->image_2) }}" alt="">

                            </div>
                            <div class="service-body">
                                <div class="service-descripton">
                                    {{ $service->title }}
                                </div>
                                <div class="service-footer">
                                    <div class="service-date">{{ $service->created_at }}</div>
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
