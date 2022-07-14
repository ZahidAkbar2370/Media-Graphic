<div class="page-sidebar " id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
        <div class="user-info-wrapper sm">
            <!-- <div class="profile-wrapper sm">
                <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg"
                    data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" />
                <div class="availability-bubble online"></div>
            </div> -->
            <div class="user-info sm">
                <div class="username">
                    {{ Sentinel::getUser()->first_name }}
                    <span class="semi-bold">{{ Sentinel::getUser()->last_name }}</span>
                </div>
                <div class="status">La vie est belle...</div>
            </div>
        </div>
        <!-- END MINI-PROFILE -->
        <!-- BEGIN SIDEBAR MENU -->
        <p class="menu-title sm">
            RAFRAÎCHIR
            <span class="pull-right">
                <a href="javascript:;">
                    <i class="material-icons">refresh</i>
                </a>
            </span>
        </p>
        <ul>
            <!-- <li class="start active"> <a href="index.html"><i class="material-icons">home</i> <span
                        class="title">Tableau de bord</span> <span class="selected"></span></a>
            </li>-->
            <li class="products {!! Request::is('admin/products') ? 'active' : '' !!}">
                <a href="{{ url('admin/products') }}">
                    <i class="material-icons">inventory</i>
                    <span class="title">Produits</span>
                    <span class="label label-important"></span>
                </a>
            </li>
            <li class="devis {!! Request::is('admin/devis') ||
            Request::is('admin/devis/traiter') ||
            Request::is('admin/devis/encours') ||
            Request::is('admin/devis/envoye')
                ? 'open active'
                : '' !!}">
                <a href="{{ url('admin/devis') }}">
                    <i class="material-icons">info</i>
                    <span class="title">Devis</span>
                    <span class=" badge badge-disable m-l-30 ">
                        {{ App\Models\Quotation::where('status', '<', 3)->count() }}
                    </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu open">
                    <span class="separator"></span>
                    <li {!! Request::is('admin/devis') ? 'class = "active"' : '' !!}>
                        <a href="{{ url('admin/devis') }}">Tout les devis</a>
                    </li>
                    <span class="separator"></span>
                    <li {!! Request::is('admin/devis/traiter') ? 'class = "active"' : '' !!}>
                        <a href="{{ url('admin/devis/traiter') }}">Devis - A traiter
                            <span class=" label label-warning pull-right m-r-20">
                                {{ App\Models\Quotation::where('status', 0)->count() }}
                            </span>
                        </a>
                    </li>
                    <li {!! Request::is('admin/devis/encours') ? 'class = "active"' : '' !!}>
                        <a href="{{ url('admin/devis/encours') }}">Devis - En cours
                            <span class=" label label-success pull-right m-r-20">
                                {{ App\Models\Quotation::where('status', 1)->count() }}
                            </span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="devis-envoyes.html">Devis - Envoyés
                            <span class=" label label-info pull-right m-r-20"></span>
                        </a>
                    </li> -->
                    <li {!! Request::is('admin/devis/encours') ? 'class = "active"' : '' !!}>
                        <a href="{{ url('admin/commande/encours') }}">
                            Commande anomalie - Devis en cours
                            <span class=" label label-inverse pull-right m-r-20">
                                {{ App\Models\Order::where('status', 0)->count() }}
                            </span>
                        </a>
                    </li>
                    <li {!! Request::is('admin/devis/envoye') ? 'class = "active"' : '' !!}>
                        <a href="{{ url('admin/commande/envoye') }}">
                            Commande anomalie - Devis envoyé
                            <span class=" label label-danger pull-right m-r-20">
                                {{ App\Models\Order::where('status', 1)->count() }}
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="commandes {!! Request::is('admin/commande') ||
            Request::is('admin/commande/traiter') ||
            Request::is('admin/commande/encours') ||
            Request::is('admin/commande/envoye')
                ? 'open active'
                : '' !!} ? 'open active' : '') !!}">
                <a href="{{ url('admin/commande') }}">
                    <i class="material-icons">shopping_cart</i>
                    <span class="title">Commandes</span>
                    <span class=" badge badge-disable m-l-30 ">
                        {{ App\Models\Commande::count() }}
                    </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <span class="separator"></span>
                    <li {!! Request::is('admin/commande') ? 'class = "active"' : '' !!}>
                        <a href="{{ url('admin/commande') }}">Tout les commandes</a>
                    </li>
                    <span class="separator"></span>
                    <li {!! Request::is('admin/commande/traiter') ? 'class = "active"' : '' !!}>
                        <a href="{{ url('admin/commande/traiter') }}">Commandes - A traiter
                            <span class=" label label-warning pull-right m-r-20">
                                {{ App\Models\Commande::where('status', 0)->count() }}
                            </span>
                        </a>
                    </li>
                    <li {!! Request::is('admin/commande/encours') ? 'class = "active"' : '' !!}>
                        <a href="{{ url('admin/commande/encours') }}">Commandes - En cours
                            <span class=" label label-success pull-right m-r-20">
                                {{ App\Models\Commande::where('status', 1)->count() }}
                            </span>
                        </a>
                    </li>
                    <!-- <li> <a href="commandes-finalisees.html">Commandes - Finalisées <span
                                class=" label label-info pull-right m-r-20"></span></a> </li>
                    <li> <a href="commandes-expediees.html">Commandes - Expédiées <span
                                class=" label label-inverse pull-right m-r-20"></span></a> </li>
                    <li> <a href="commandes-anomalies-a-traiter.html">Commandes - Anomalies à traiter <span
                                class=" label label-danger pull-right m-r-20"></span></a> </li> -->
                </ul>
            </li>

            <li class="comptabililite {!! Request::is('admin/comptabililite/devis') ||
            Request::is('admin/comptabililite') ||
            Request::is('admin/comptabililite/traiter') ||
            Request::is('admin/comptabililite/encours') ||
            Request::is('admin/comptabililite/devis') ||
            Request::is('admin/comptabililite/avoris') ||
            Request::is('admin/comptabililite/statistiques') ||
            Request::is('admin/comptabililite/factures') ||
            Request::is('admin/comptabililite/envoye')
                ? 'open active'
                : '' !!} ? 'open active' : '') !!}">
                <a href="{{ url('admin/comptabililite') }}"> <i class="material-icons">tags</i> <span
                        class="title">Comptabilité</span>
                    <span class=" badge badge-disable m-l-30 ">1</span><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li> <a href="{{ url('admin/comptabililite/clients') }}">Clients</a> </li>
                    <li> <a href="{{ url('admin/comptabililite/devis') }}">Devis <span
                                class=" label label-success pull-right m-r-20">1</span></a> </li>
                    <li> <a href="{{ url('admin/comptabililite/factures') }}">Factures <span
                                class=" label label-info pull-right m-r-20"></span></a>
                    </li>
                    <li> <a href="{{ url('admin/comptabililite/avoris') }}">Avoirs <span
                                class=" label label-inverse pull-right m-r-20"></span></a>
                    </li>
                    <li> <a href="{{ url('admin/comptabililite/statistiques') }}">Statistiques <span
                                class=" label label-danger pull-right m-r-20"></span></a>
                    </li>
                </ul>
            </li>

            <li class="compteclient {!! Request::is('admin/compteclient/commandes') ||
            Request::is('admin/compteclient/devis') ||
            Request::is('admin/compteclient/avoris') ||
            Request::is('admin/compteclient/statistiques') ||
            Request::is('admin/compteclient/commandes') ||
            Request::is('admin/compteclient/factures')
                ? 'open active'
                : '' !!} ? 'open active' : '') !!}">
                <a href="{{ url('admin/compteclient/commandes') }}"> <i class="material-icons">tags</i> <span
                        class="title">compteclient</span>
                    <span class=" badge badge-disable m-l-30 ">1</span><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li> <a href="{{ url('admin/compteclient/commandes') }}">commandes</a> </li>
                    <li> <a href="{{ url('admin/compteclient/devis') }}">Devis <span
                                class=" label label-success pull-right m-r-20">1</span></a> </li>
                    <li> <a href="{{ url('admin/compteclient/factures') }}">Factures <span
                                class=" label label-info pull-right m-r-20"></span></a>
                    </li>
                    <li> <a href="{{ url('admin/compteclient/avoris') }}">Avoirs <span
                                class=" label label-inverse pull-right m-r-20"></span></a>
                    </li>
                    <li> <a href="{{ url('admin/compteclient/statistiques') }}">Statistiques <span
                                class=" label label-danger pull-right m-r-20"></span></a>
                    </li>
                </ul>
            </li>
            <!-- <li class="comptabilite">
                <a href="comptabilite.html"> <i class="material-icons">tags</i> <span
                        class="title">Comptabilité</span> <span
                        class=" badge badge-disable m-l-30 ">1</span><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li> <a href="clients.html">Clients</a> </li>
                    <li> <a href="devis-a-facture.html">Devis <span
                                class=" label label-success pull-right m-r-20">1</span></a> </li>
                    <li> <a href="factures.html">Factures <span class=" label label-info pull-right m-r-20"></span></a>
                    </li>
                    <li> <a href="avoirs.html">Avoirs <span class=" label label-inverse pull-right m-r-20"></span></a>
                    </li>
                    <li> <a href="statistiques.html">Statistiques <span
                                class=" label label-danger pull-right m-r-20"></span></a> </li>
                </ul>
            </li>
            <li class="compte-client">
                <a href="compte-client.html"> <i class="material-icons">person</i> <span class="title">Compte
                        client</span> <span class="arrow"></span> </a>
                <ul class="sub-menu">
                    <li> <a href="compte-client.html">Profil (coordonnées)</a> </li>
                    <li> <a href="compte-client-commandes.html">Commandes</a> </li>
                    <li> <a href="compte-client-devis.html">Devis</a> </li>
                    <li> <a href="compte-client-factures.html">Factures</a> </li>
                    <li> <a href="compte-client-avoir.html">Avoirs</a> </li>
                    <li> <a href="compte-client-ca-ht-an.html">Total CA client HT/An</a> </li>
                    <li><a href="compte-client-impayee.html">Impayées > 60 Jrs</a></li>
                </ul>
            </li>
            <li>
                <a href="email.html"> <i class="material-icons">email</i> <span class="title">Email</span>
                    <span class=" badge badge-disable pull-right ">203</span>
                </a>
            </li> -->
        </ul>
        <div class="clearfix"></div>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
