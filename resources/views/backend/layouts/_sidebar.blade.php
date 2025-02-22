<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="{{asset('asset_back/assets/images/users/avatar.jpg')}}" alt="John Doe" />
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="{{asset('asset_back/assets/images/users/avatar.jpg')}}" alt="John Doe" />
                </div>
                <div class="profile-data">
                    <div class="profile-data-name">John Doe</div>
                    <div class="profile-data-title">Web Developer/Designer</div>
                </div>
                <div class="profile-controls">
                    <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                    <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                </div>
            </div>
        </li>
        <li class="{{Request::segment(2)=='dashboard'}} ? 'active': '' ">
            <a href="{{url('panel/dashboard')}}"><span class="fa fa-desktop"></span> <span class="xn-text">لوحة
                    القيادة</span></a>
        </li>
        <li class="{{Request::segment(2)=='university'}} ? 'active': '' ">
            <a href="{{url('panel/university')}}"><span class="fa fa-user"></span> <span class="xn-text">المعهد التقاني
                    للحاسوب</span></a>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">التخطيطات</span></a>
            <ul>
                <li><a href="pages-gallery.html"><span class="fa fa-list"></span>قائمة</a></li>
            </ul>
        </li>
    </ul>
    <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->
