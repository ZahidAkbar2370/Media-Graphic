<div class="page-container row">

    <!-- BEGIN SIDEBAR -->
    <a href="#" class="scrollup">Scroll</a>

    @include('admin.layouts._left_menu')

    <div class="footer-widget">

        <div class="progress transparent progress-small no-radius no-margin">

            <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="79%"

                style="width: 79%;"></div>

        </div>

        <div class="pull-right">

            <div class="details-status"> <span class="animate-number" data-value="86"

                    data-animation-duration="560">86</span>% </div>

            <a href="lockscreen.html"><i class="material-icons">power_settings_new</i></a>

        </div>

    </div>

    <!-- END SIDEBAR -->

    @yield('content')

</div>