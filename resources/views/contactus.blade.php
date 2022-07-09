@extends('layouts/default')
@section('title')
    Nous contacter
    @parent
@stop
@section('header_styles')

@stop

@section('content')

    <section class="inscription content">
        <h1>Nous contacter</h1>

        <div class="call-to-action">
            <div class="description">
                <h2>Veuillez remplir ce formulaire</h2>
                <form id="nous-contacter">
                    <div class="infos">
                        <input class="half" type="text" name="nom" placeholder="Nom">
                        <input class="half" type="text" name="prenom" placeholder="Préom">
                        <input class="half" type="email" name="email" placeholder="Email">
                        <input class="half" type="phone" name="tel" placeholder="Téléphone">
                        <input class="half" type="text" name="code-postal-livraison" placeholder="Code postal">
                        <input class="half" type="text" name="ville-livraison" placeholder="Ville">
                        <textarea name="message" placeholder="Vote message ici..."></textarea>
                    </div>
                    <div class="action">
                        <span>Besoin de <a href="#!" class="individual">Devis sur mesure</a></span>
                        <input type="submit" name="submit" value="Envoyer" class="btn bg-btn">
                    </div>
                </form>
            </div>
            <div class="contact">
                <h2>Contact rapide</h2>
                <p>Aide &amp; Support</p>
                <p><a href="tel:0142069707"><i class="fa fa-phone-alt"></i> 01 42 06 97 07</a></p>
                <p><a href="mailto:hbconsultant@gmail.com" class="btn bg-btn">Nous contacter <i class="fas fa-envelope"></i></a></p>
                <p><a href="{{ url('/register') }}" class="btn bg-btn inscription">Inscription<i class="fas fa-user-plus"></i></a></p>
            </div>
        </div>
    </section>
    
    
   

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script type="text/javascript" src="frontend_assets/script.js"></script>

    <script type="text/javascript">
    jQuery(document).ready( function($){    
        $('.inscription-choix .individual, a.individual').click( function(){
            $('.inscription-choix, #professional').addClass('hide');
            $('.call-to-action, #individual').removeClass('hide');
        });
        $('.inscription-choix .professional, a.professional').click( function(){
            $('.inscription-choix, #individual').addClass('hide');
            $('.call-to-action, #professional').removeClass('hide');
        });
    });
    </script>
@stop
