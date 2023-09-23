@extends('frontend.layouts.master')
@section('content')
    <div class="contactHead">
        <div class="contactHead-Title">{{ $contact?->title }}</div>
        <div class="contactHead-Text">
           {!! $contact?->description !!}
        </div>
    </div>

    <!------------------------ Contact Boxes ------------------------------>

    <div class="contactBoxes">
        <div class="contactBox-items">
            <a href="#" class="contactBox-item">
                <div class="mailIcon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M0 5C0 4.33696 0.263392 3.70107 0.732233 3.23223C1.20107 2.76339 1.83696 2.5 2.5 2.5H17.5C18.163 2.5 18.7989 2.76339 19.2678 3.23223C19.7366 3.70107 20 4.33696 20 5V15C20 15.663 19.7366 16.2989 19.2678 16.7678C18.7989 17.2366 18.163 17.5 17.5 17.5H2.5C1.83696 17.5 1.20107 17.2366 0.732233 16.7678C0.263392 16.2989 0 15.663 0 15V5ZM2.5 3.75C2.16848 3.75 1.85054 3.8817 1.61612 4.11612C1.3817 4.35054 1.25 4.66848 1.25 5V5.27125L10 10.5212L18.75 5.27125V5C18.75 4.66848 18.6183 4.35054 18.3839 4.11612C18.1495 3.8817 17.8315 3.75 17.5 3.75H2.5ZM18.75 6.72875L12.865 10.26L18.75 13.8812V6.72875ZM18.7075 15.3237L11.6575 10.985L10 11.9788L8.3425 10.985L1.2925 15.3225C1.36353 15.5885 1.5204 15.8236 1.73874 15.9913C1.95708 16.159 2.22468 16.25 2.5 16.25H17.5C17.7752 16.25 18.0426 16.1593 18.261 15.9918C18.4793 15.8243 18.6362 15.5895 18.7075 15.3237ZM1.25 13.8812L7.135 10.26L1.25 6.72875V13.8812Z" fill="#3D3D3D"/>
                    </svg>
                </div>
                <div class="contactBox-description">
                    <span>Email</span>
                    <div class="contactBox-mail">{{ $contact?->email }}</div>
                </div>
            </a>
            <div class="spaceLine"></div>
            <a href="#"class="contactBox-item">
                <div class="phoneIcon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <g clip-path="url(#clip0_269_4864)">
                            <path d="M4.56809 1.66021C4.4943 1.56528 4.40115 1.48715 4.29484 1.43099C4.18853 1.37483 4.07149 1.34193 3.95149 1.33449C3.83149 1.32704 3.71127 1.34521 3.59883 1.38779C3.48639 1.43037 3.3843 1.49639 3.29934 1.58146L2.00684 2.87521C1.40309 3.48021 1.18059 4.33646 1.44434 5.08771C2.53901 8.19719 4.31971 11.0203 6.65434 13.3477C8.98175 15.6823 11.8049 17.463 14.9143 18.5577C15.6656 18.8215 16.5218 18.599 17.1268 17.9952L18.4193 16.7027C18.5044 16.6177 18.5704 16.5157 18.613 16.4032C18.6556 16.2908 18.6738 16.1706 18.6663 16.0506C18.6589 15.9306 18.626 15.8135 18.5698 15.7072C18.5136 15.6009 18.4355 15.5078 18.3406 15.434L15.4568 13.1915C15.3554 13.1128 15.2375 13.0582 15.1119 13.0318C14.9863 13.0054 14.8563 13.0078 14.7318 13.039L11.9943 13.7227C11.6289 13.814 11.2461 13.8092 10.8831 13.7086C10.5202 13.6081 10.1894 13.4153 9.92309 13.149L6.85309 10.0777C6.58655 9.81151 6.3935 9.48081 6.29273 9.11783C6.19196 8.75486 6.18692 8.37197 6.27809 8.00646L6.96309 5.26896C6.99422 5.14445 6.99667 5.0145 6.97026 4.88891C6.94384 4.76332 6.88924 4.64537 6.81059 4.54396L4.56809 1.66021ZM2.35559 0.638959C2.57433 0.420145 2.83712 0.250372 3.12651 0.14091C3.4159 0.0314486 3.72527 -0.0151955 4.03407 0.00407483C4.34286 0.0233452 4.64403 0.108089 4.91757 0.252679C5.1911 0.39727 5.43075 0.598398 5.62059 0.842709L7.86309 3.72521C8.27434 4.25396 8.41934 4.94271 8.25684 5.59271L7.57309 8.33021C7.53774 8.472 7.53965 8.62052 7.57863 8.76135C7.61762 8.90218 7.69236 9.03054 7.79559 9.13396L10.8668 12.2052C10.9704 12.3087 11.099 12.3835 11.24 12.4225C11.3811 12.4615 11.5299 12.4633 11.6718 12.4277L14.4081 11.744C14.7289 11.6638 15.0637 11.6575 15.3872 11.7257C15.7107 11.794 16.0145 11.9348 16.2756 12.1377L19.1581 14.3802C20.1943 15.1865 20.2893 16.7177 19.3618 17.644L18.0693 18.9365C17.1443 19.8615 15.7618 20.2677 14.4731 19.814C11.1746 18.6534 8.17968 16.765 5.71059 14.289C3.2347 11.8202 1.34635 8.82578 0.185589 5.52771C-0.266911 4.24021 0.139339 2.85646 1.06434 1.93146L2.35684 0.638959H2.35559Z" fill="#3D3D3D"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_269_4864">
                                <rect width="20" height="20" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="contactBox-description">
                    <span>Phone</span>
                    <div class="contactBox-phone">{{ $contact?->phone }}</div>
                </div>
            </a>
            <div class="spaceLine"></div>
            <a href="#" class="contactBox-item">
                <div class="locationIcon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M10.5 11.7513C12.0078 11.7513 13.23 10.529 13.23 9.02125C13.23 7.51352 12.0078 6.29125 10.5 6.29125C8.99228 6.29125 7.77002 7.51352 7.77002 9.02125C7.77002 10.529 8.99228 11.7513 10.5 11.7513Z" stroke="#3D3D3D" stroke-width="1.5"/>
                        <path d="M3.16749 7.42875C4.89124 -0.148748 16.1175 -0.139998 17.8325 7.4375C18.8387 11.8825 16.0737 15.645 13.65 17.9725C11.8912 19.67 9.10874 19.67 7.34124 17.9725C4.92624 15.645 2.16124 11.8738 3.16749 7.42875Z" stroke="#3D3D3D" stroke-width="1.5"/>
                    </svg>
                </div>
                <div class="contactBox-description">
                    <span>Location</span>
                    <div class="contactBox-location">
                        {{ $contact?->location }}
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!------------------------ Contact Forms ------------------------------>

    <div class="contact-form">

        <div class="locationMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.1785102076283!2d55.27180147491669!3d25.197201831701456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43348a67e24b%3A0xff45e502e1ceb7e2!2zQsO8cmMgWMmZbGlmyZk!5e0!3m2!1saz!2saz!4v1695098483633!5m2!1saz!2saz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <a href="#" class="openMap">Open in Waze</a>
        </div>

        <div class="form-content">
            <form action="{{ route('contact.message', ['lang' => app()->getLocale()]) }}" method="POST">
                @csrf
            <div class="firstColumn">
                <div class="nameInput">
                    <label for="contactName">Name</label>
                    <input type="text" name="name" id="contactName">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="phoneInput">
                    <label for="contactPhone">Phone</label>
                    <input type="text" name="phone" id="contactPhone">
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mailInput">
                <label for="contactMail">Email</label>
                <input type="email" name="email" id="contactMail">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="message">
                <label for="contactMessage">Message</label>
                <textarea name="message" id="contactMessage" cols="30" rows="10" class="contactMessage" placeholder="Type your message here..."></textarea>
                @error('message')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="sendMessage">
                Send Message
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M9.62012 3.95337L13.6668 8.00004L9.62012 12.0467" stroke="#3D3D3D" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.33301 8H13.553" stroke="#3D3D3D" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            </form>
        </div>

    </div>

@endsection
