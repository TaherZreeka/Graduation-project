<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle text-right">
            <div class="mb-title"><span class="fa fa-sign-out"></span> تسجيل <strong>الخروج</strong> ؟</div>
            <div class="mb-content">
                <p>هل أنت متأكد أنك تريد تسجيل الخروج؟</p>
                <p>اضغط على "لا" إذا كنت تريد متابعة العمل. اضغط على "نعم" لتسجيل خروج المستخدم الحالي.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-left">
                    <a href="{{url('logout')}}" class="btn btn-success btn-lg">نعم</a>
                    <button class="btn btn-default btn-lg mb-control-close">لا</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->
<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="{{asset('asset_back/js/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset_back/js/plugins/jquery/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset_back/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type='text/javascript' src="{{ asset('asset_back/js/plugins/icheck/icheck.min.js') }}"></script>
<script type="text/javascript" src="{{asset('asset_back/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}">
</script>

<script type="text/javascript" src="{{asset('asset_back/js/demo_tables.js')}}"></script>
<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->
<script type="text/javascript" src="{{asset('asset_back/js/settings.js')}}"></script>

<script type="text/javascript" src="{{asset('asset_back/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('asset_back/js/actions.js')}}"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
</body>

</html>
