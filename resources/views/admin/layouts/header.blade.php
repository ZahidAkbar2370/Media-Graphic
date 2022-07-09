<div class="header navbar navbar-inverse ">

    <!-- BEGIN TOP NAVIGATION BAR -->

    <div class="navbar-inner">

        <div class="header-seperation">

            <ul class="nav pull-left notifcation-center visible-xs visible-sm">

                <li class="dropdown">

                    <a href="#main-menu" data-webarch="toggle-left-side">

                        <i class="material-icons">menu</i>

                    </a>

                </li>

            </ul>

            <!-- BEGIN LOGO -->

            <a href="index.html">

                <img src="../images/logo_dashboard.svg" class="logo" alt=""

                    data-src="../images/logo_dashboard.svg" data-src-rretina="../images/logo_dashboard.svg"

                    width="140" height="auto" />

            </a>

            <!-- END LOGO -->

            <ul class="nav pull-right notifcation-center">

                <li class="dropdown hidden-xs hidden-sm">

                    <a href="index.html" class="dropdown-toggle active" data-toggle="">

                        <i class="material-icons">home</i>

                    </a>

                </li>

                <li class="dropdown hidden-xs hidden-sm">

                    <a href="email.html" class="dropdown-toggle">

                        <i class="material-icons">email</i><span class="badge bubble-only"></span>

                    </a>

                </li>

                <li class="dropdown visible-xs visible-sm">

                    <a href="#" data-webarch="toggle-right-side">

                        <i class="material-icons">chat</i>

                    </a>

                </li>

            </ul>

        </div>

        <!-- END RESPONSIVE MENU TOGGLER -->

        <div class="header-quick-nav">

            <!-- BEGIN TOP NAVIGATION MENU -->

            <div class="pull-left">

                <ul class="nav quick-section">

                    <li class="quicklinks">

                        <a href="#" class="" id="layout-condensed-toggle">

                            <i class="material-icons">menu</i>

                        </a>

                    </li>

                </ul>

                <ul class="nav quick-section">

                    <li class="quicklinks  m-r-10">

                        <a href="#" class="">

                            <i class="material-icons">refresh</i>

                        </a>

                    </li>

                    <li class="quicklinks">

                        <a href="#" class="">

                            <i class="material-icons">apps</i>

                        </a>

                    </li>

                    <li class="quicklinks"> <span class="h-seperate"></span></li>

                    <li class="quicklinks">

                        <a href="#" class="" id="my-task-list" data-placement="bottom" data-content=''

                            data-toggle="dropdown" data-original-title="Notifications">

                            <i class="material-icons">notifications_none</i>

                            <span class="badge badge-important bubble-only"></span>

                        </a>

                    </li>

                    <li class="m-r-10 input-prepend inside search-form no-boarder">

                        <span class="add-on"> <i class="material-icons">search</i></span>

                        <input name="" type="text" class="no-boarder "

                            placeholder="Recherche au tableau de bord..." style="width:250px;">

                    </li>

                </ul>

            </div>

            <div id="notification-list" style="display:none">

                <div style="width:300px">

                    <div class="notification-messages info">

                        <div class="user-profile">

                            <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg"

                                data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">

                        </div>

                        <div class="message-wrapper">

                            <div class="heading">

                                David Nester - Eenvoyé un message

                            </div>

                            <div class="description">

                                Rencontre reportée à demain

                            </div>

                            <div class="date pull-left">

                                Il y'a une min

                            </div>

                        </div>

                        <div class="clearfix"></div>

                    </div>

                    <div class="notification-messages danger">

                        <div class="iconholder">

                            <i class="icon-warning-sign"></i>

                        </div>

                        <div class="message-wrapper">

                            <div class="heading">

                                Charge serveur limitée

                            </div>

                            <div class="description">

                                Le serveur de base de données a atteint sa capacité journalière

                            </div>

                            <div class="date pull-left">

                                Il y'a 2 mins

                            </div>

                        </div>

                        <div class="clearfix"></div>

                    </div>

                    <div class="notification-messages success">

                        <div class="user-profile">

                            <img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg"

                                data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">

                        </div>

                        <div class="message-wrapper">

                            <div class="heading">

                                Vous avez 150 messages

                            </div>

                            <div class="description">

                                150 nouveaux messages non lus dans la boîte de réception

                            </div>

                            <div class="date pull-left">

                                Il y'a une heure

                            </div>

                        </div>

                        <div class="clearfix"></div>

                    </div>

                </div>

            </div>

            <!-- END TOP NAVIGATION MENU -->

            <!-- BEGIN CHAT TOGGLER -->

            <div class="pull-right">

                <!-- <div class="chat-toggler sm">

                    <div class="profile-pic">

                        <img src="assets/img/profiles/avatar_small.jpg" alt=""

                            data-src="assets/img/profiles/avatar_small.jpg"

                            data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="35" height="35" />

                        <div class="availability-bubble online"></div>

                    </div>

                </div> -->

                <ul class="nav quick-section ">

                    <li class="quicklinks">

                        <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">

                            <i class="material-icons">tune</i>

                        </a>

                        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">

                            <li>

                                <a href="clients-profile.html">Mon compte</a>

                            </li>

                            <li>

                                <a href="calender.html">Mon calendrier</a>

                            </li>

                            <li>

                                <a href="email.html"> Mes messages&nbsp;&nbsp;

                                    <span class="badge badge-important animated bounceIn">2</span>

                                </a>

                            </li>

                            <li class="divider"></li>

                            <li>

                                <a href="{{ url('admin/logout') }}"><i

                                        class="material-icons">power_settings_new</i>&nbsp;&nbsp;Déconnexion</a>

                            </li>

                        </ul>

                    </li>

                    <li class="quicklinks"> <span class="h-seperate"></span></li>

                    <li class="quicklinks">

                        <a href="#" class="chat-menu-toggle" data-webarch="toggle-right-side"><i

                                class="material-icons">chat</i><span class="badge badge-important hide">1</span>

                        </a>

                        <div class="simple-chat-popup chat-menu-toggle hide">

                            <div class="simple-chat-popup-arrow"></div>

                            <div class="simple-chat-popup-inner">

                                <div style="width:100px">

                                    <div class="semi-bold">David Nester</div>

                                    <div class="message">Salut, vous êtes là? </div>

                                </div>

                            </div>

                        </div>

                    </li>

                </ul>

            </div>

            <!-- END CHAT TOGGLER -->

        </div>

        <!-- END TOP NAVIGATION MENU -->

    </div>

    <!-- END TOP NAVIGATION BAR -->

</div>