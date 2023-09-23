@extends('frontend.layouts.master')
@section('content')
    <div class="headBtnArea">
        <a href="{{ route('blog',['lang' => app()->getLocale()]) }}" class="backToBlogs">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M6.38016 3.95334L2.3335 8.00001L6.38016 12.0467" stroke="#030303" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                <path d="M13.6668 8.00003H2.44678" stroke="#030303" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
            </svg>
            Back to Blogs
        </a>
    </div>
    <div class="blogPage-HeadImg">
        <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="">
    </div>

    <div class="blogPage-Context">
        <div class="left-area">
            <span>Share</span>
            <a href="#" class="shareWithFaceBook">
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 13 20" fill="none">
                    <path
                        d="M3.84107 11.2891H1.08469C0.639211 11.2891 0.5 11.1389 0.5 10.7635V7.73467C0.5 7.33417 0.667053 7.20901 1.08469 7.20901H3.84107V5.00626C3.84107 4.00501 4.03596 3.05382 4.59281 2.17772C5.17749 1.2766 6.01276 0.675845 7.07077 0.325407C7.76682 0.100125 8.46288 0 9.21462 0H11.9432C12.3329 0 12.5 0.150188 12.5 0.500626V3.35419C12.5 3.70463 12.3329 3.85482 11.9432 3.85482C11.1914 3.85482 10.4397 3.85482 9.68794 3.87985C8.9362 3.87985 8.5464 4.20526 8.5464 4.90613C8.51856 5.65707 8.5464 6.38298 8.5464 7.15895H11.7761C12.2216 7.15895 12.3886 7.30914 12.3886 7.70964V10.7384C12.3886 11.1389 12.2494 11.2641 11.7761 11.2641H8.5464V19.4243C8.5464 19.8498 8.40719 20 7.90603 20H4.42575C4.00812 20 3.84107 19.8498 3.84107 19.4743V11.2891Z"
                        fill="#959595" />
                </svg>
            </a>
            <a href="#" class="shareWithTelegram">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <g clip-path="url(#clip0_269_4133)">
                        <path
                            d="M0.853259 9.64303L5.46166 11.363L7.24539 17.0995C7.35953 17.4669 7.80879 17.6027 8.10699 17.3589L10.6758 15.2648C10.8068 15.158 10.9695 15.0976 11.1385 15.0929C11.3074 15.0881 11.4732 15.1394 11.61 15.2387L16.2432 18.6025C16.5622 18.8344 17.0141 18.6596 17.0941 18.2741L20.4882 1.94803C20.5755 1.52696 20.1618 1.17569 19.7609 1.33076L0.847859 8.62683C0.381126 8.80683 0.385192 9.46763 0.853259 9.64303ZM6.95793 10.4474L15.9645 4.90029C16.1263 4.80089 16.2929 5.01976 16.1539 5.14869L8.72086 12.058C8.45982 12.3008 8.29105 12.6267 8.24333 12.98L7.99013 14.8564C7.95659 15.1069 7.60466 15.1318 7.53553 14.8893L6.56173 11.4676C6.45019 11.0774 6.61273 10.6605 6.95793 10.4474Z"
                            fill="#959595" />
                    </g>
                    <defs>
                        <clipPath id="clip0_269_4133">
                            <rect width="20" height="20" fill="white" transform="translate(0.5)" />
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
        <div class="right-area">
            <div class="date">
                <div class="blog-date">{{ $blog->published_at}}</div>
            </div>
            <div class="blogPage-Context-title">
                {{ $blog->title }}
            </div>
            <div class="blogPage-Context-text">
                {!! $blog->description !!}
            </div>
        </div>
    </div>

    <div class="blog-Section">
        <div class="blog-Items">
            <div class="swiper blog-swiper">
                <div class="swiper-head">
                    <div class="swiper-title">Other Blogs</div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <div class="swiper-wrapper">
                    @foreach ($blogs as $blog)
                    <div class="swiper-slide">
                        <div class="blog-item">
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
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

@endsection
