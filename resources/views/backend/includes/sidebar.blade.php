<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ (!empty( Auth::user()->image))? url('assets/backend/images/users/'. Auth::user()->image): url('backend/uploads/default.jpg') }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ Auth::user()->name }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Əsas Səhifə</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class=" ri-bookmark-2-line"></i>
                        <span>Bloglar</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.blog.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.blog.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-customer-service-2-line"></i>
                        <span>Xidmətlər</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.services.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.services.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-message-2-line"></i>
                        <span>Əlaqə Mesajları</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.contact.message.list') }}">Siyahı</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-chat-1-line"></i>
                        <span>Faq</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.faq.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.faq.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class=" ri-file-list-3-line"></i>
                        <span>Haqqımızda</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.about.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.about.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class=" ri-contacts-book-line"></i>
                        <span>Əlaqə</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.contact.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.contact.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-settings-5-line"></i>
                        <span>Tənzimləmələr</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.setting.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.setting.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
