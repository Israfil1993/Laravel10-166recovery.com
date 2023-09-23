<div class="serviceSection">
    <div class="serviceTitle">
        <span>Services</span>
        <a href="{{ route('service', ['lang' => app()->getLocale()]) }}" class="moreService">
            More Services
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M9.62012 3.95337L13.6668 8.00004L9.62012 12.0467" stroke="#030303" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2.33334 8H13.5533" stroke="#030303" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
    <div class="serviceItems">
        <a href="#" class="popularService">
            <div class="popular-serviceTitle">
                {{ $service?->title }}
            </div>
            <div class="popular-serviceText">{!! $service?->description !!}</div>
            <div class="popular-ServiceImg">
                <img src="{{ asset('uploads/services/' . $service?->image_1) }}" alt="">
            </div>
        </a>

        <div class="generalServiceItems">
            @foreach($services as $service)
            <a href="#" class="generalServiceItem">
                <div class="generalServiceTitle">{{ $service?->title }}</div>
                <div class="generalServiceText">{!! $service?->description !!}</div>
                <div class="generalServiceImg">
                    <img src="{{ asset('uploads/services/' . $service?->image_1) }}" alt="">
                </div>
            </a>
            @endforeach


        </div>
    </div>

</div>
