<div class="navbar">
    <a href="{{ route('home', ['lang' => app()->getLocale()]) }}" class="logo"><img src="{{ asset('frontend/assets') }}/img/166Logo.png" alt=""></a>
    <div class="navbar-items" id="navbar-items">
        <div class="navLinks">
            <a href="{{ route('home',['lang' => app()->getLocale()])}}" class="homePage navlink">{!! $settings['navbar.home'] !!}</a>
            <a href="{{ route('about',['lang' => app()->getLocale()]) }}" class="aboutPage navlink">{!! $settings['navbar.about'] !!}</a>
            <a href="{{ route('service', ['lang' => app()->getLocale()]) }}" class="featuresPage navlink">{!! $settings['navbar.service'] !!}</a>
            <a href="{{ route('blog',['lang' => app()->getLocale()]) }}" class="PricingPage navlink">{!! $settings['navbar.blog'] !!}</a>
            <a href="{{ route('contact',['lang' => app()->getLocale()])}}" class="PricingPage navlink">{!! $settings['navbar.contact'] !!}</a>

        </div>
        @php
            $currentLocale = app()->getLocale();
            $currentRoute = Route::currentRouteName();
            $params = request()->route()->parameters();
        @endphp
        <div class="changeLangBtn dropdown">
            <button class="activeLang dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ app()->getLocale() }}
                <div class="flagIcon">
                    <img src="{{ asset('frontend/assets') }}/img/{{ app()->getLocale()  }}.png" alt="">
                </div>
                <i class="bi bi-chevron-down"></i>
            </button>
            <div class="otherLang-menu dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach(['en','ar','ru'] as $lang)
                    @if(app()->getLocale() != $lang)
                        <a class="otherLang dropdown-item" href="{{ route($currentRoute, ['lang' => $lang] + $params) }}">
                            @if($lang == 'en')
                                En
                            @elseif($lang == 'ar')
                                Ar
                            @elseif($lang == 'ru')
                               Ru
                            @endif
                            <div class="flagIcon">
                                <img src="{{ asset('frontend/assets/img/' . $lang . '.png') }}" alt="">
                            </div>
                        </a>
                    @endif
                @endforeach

            </div>
        </div>
        <a href="#" class="getTouch">Get in touch</a>
    </div>
    <div class="responsiveMenuIcon" onclick="showResponsiveMenu()" id="MenuIcon">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
            <path d="M1.40002 1.72406H20.6" stroke="#353E5C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M1.40002 18.2757H20.6" stroke="#353E5C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M1.40002 9.99979H20.6" stroke="#353E5C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
    <div class="responsiveCloseMenuIcon" onclick="closeResponsiveMenu()" id="CloseMenuIcon" >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M12.0001 10.9394L5.6361 4.57538L4.57544 5.63604L10.9394 12L4.57544 18.364L5.6361 19.4246L12.0001 13.0607L18.3641 19.4246L19.4247 18.364L13.0608 12L19.4247 5.63604L18.3641 4.57538L12.0001 10.9394Z" fill="#1F1F1F"/>
        </svg>
    </div>
</div>
