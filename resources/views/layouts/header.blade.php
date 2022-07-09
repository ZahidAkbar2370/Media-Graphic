<header>
    <div class="logo">
        <a href="index.html"><img src="{{ asset('frontend_assets/images/header_logo.svg') }}"></a>
    </div>
    <nav>
        <ul>
            <li class="current"><a href="{{ url('') }}">Accueil</a></li>
            <li><a href="{{ url('devis') }}">Devis sur mesure</a></li>
            <li><a href="{{ url('fichiers-faq') }}">Envoi de vos fichiers & F.A.Q</a></li>
            <li><span>Aide &amp; Conseil? <a href="tel:01 42 06 90 02">01 42 06 90 02</a></span> <span>Du lundi au
                    vendredi - 9h00 - 17h00</span></li>
        </ul>
        <ul>
            @if (Sentinel::guest())
                <li><a href="{{ url('login') }}"><i class="fas fa-sign-in-alt"></i> <span>Connexion</span></a></li>
            @else
                <li><a href="{{ url('user-dashboard') }}"><i class="far fa-user"></i> <span>Mon compte</span></a></li>
                <li><a href="{{ url('logout') }}"><i class="fas fa-sign-out-alt"></i> <span>Se déconnecter</span></a>
                </li>
            @endif
            <li><a href="{{ url('panier') }}"><i class="fas fa-shopping-basket"></i> <span>Panier</span></a></li>
            <li>
                <a href="{{ url('admin') }}" target="_blank" title="backoffice">
                    <i class="fas fa-cogs"></i>
                    <span>Panier</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="menu-toggle">
        <a href="#!">
            <i class="fas fa-bars"></i>
            <i class="fas fa-ellipsis-v"></i>
        </a>
    </div>
</header>

@if (!Request::is('register') && !Request::is('contactus'))
    @include('layouts.navbar');
@endif
@include('notifications');
