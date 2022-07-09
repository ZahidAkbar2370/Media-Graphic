@extends('layouts/default')
@section('title')
    Inscription
    @parent
@stop
@section('header_styles')

@stop

@section('content')

    <section class="inscription content">
        <h1>Créer mon compte</h1>
        <div class="inscription-choix">
            <p>Vous êtes:</p>
            <div class="individual">
                <i class="fas fa-user"></i>
                <a class="btn bg-btn" href="#!">Particulier</a>
            </div>
            <div class="sep"></div>
            <div class="professional">
                <i class="fas fa-users"></i>
                <a class="btn bg-btn" href="#!">Professionnel</a>
            </div>
        </div>
        <div class="call-to-action hide">
            <div id="individual" class="description">
                <h2>Créer mon compte particulier</h2>
                <form id="individual-inscription" method = "post" action = "{{ url('register') }}">
                    @csrf
                    <input type="hidden" name="role" value="Individuel">
                    <div class="infos">
                        <div class="civilite">
                            <label><input type="radio" name="title" checked value="Mr">Mr</label>
                            <label><input type="radio" name="title" value="Mme"> Mme</label>
                            <!-- <label><input type="radio" name="title" value="Mlle"> Mlle</label> -->
                        </div>
                        <input class="half" type="text" required name="first_name" placeholder="Préom">
                        <input class="half" type="text" required name="last_name" placeholder="Nom de famille">
                        @if(!empty($email))
                            <input class="half" readonly type="email" value="{{ $email }}" required name="email" placeholder="Email">
                        @else
                            <input class="half" type="email" required name="email" placeholder="Email">
                        @endif
                        
                        <input class="half" type="phone" required name="phone" placeholder="Téléphone">
                        <input type="password" required name="password" placeholder="Mot de passe">
                        <input type="text" required id = "address" name="address" placeholder="Adresse de livraison">
                        <input class="half" required id = "postal" type="text" name="postal" placeholder="Code postal">
                        <input class="half" type="text" id = "city" required name="city" placeholder="Ville">
                        <label class="adresse-identique">
                            <input type="checkbox" name="adresse-identique" onclick = "return fillBillingField('i');"> Mon adresse de facturation est identique à mon adresse de livraison.
                        </label>
                        <div class="separator"></div>
                        <div class="adresse-faturation">
                            <input type="text" id = "billing_address" name="billing_address" placeholder="Adresse de facturation">
                            <input class="half" id = "billing_postal" type="text" name="billing_postal" placeholder="Code postal">
                            <input class="half" id = "billing_city" type="text" name="billing_city" placeholder="Ville">
                        </div>
                    </div>
                    <div class="action">
                        <span>Nous sommes <a href="#!" class="professional">Je suis un professionnel</a></span>
                        <input class="btn bg-btn" type="submit" name="submit" value="S'inscrire">
                    </div>
                </form>

            </div>
            <div id="professional" class="description">
                <h2>Créer mon compte professionnel</h2>
                <form id="individual-inscription" method = "post" action = "{{ url('register') }}">
                    @csrf
                    <input type="hidden" name="role" value="professional">
                    <div class="infos">
                        <select name="service_id" class="half">
                            <option value="0">-- Vous êtes? --</option>
                            <option value="1">Société</option>
                            <option value="2">Association</option>
                            <option value="3">Administration</option>
                            <option value="4">Particulier</option>
                            <option value="5">Autre</option>
                        </select>
                        <input class="half hide" type="text" name="autre-structure" placeholder="A préciser..">
                        <input type="text" required name="social_reason" placeholder="Raison sociale">
                        <input class="half" type="text" required name="first_name" placeholder="Préom">
                        <input class="half" type="text" required name="last_name" placeholder="Nom de famille">
                        @if(!empty($email))
                            <input class="half" readonly type="email" value="{{ $email }}" required name="email" placeholder="Email">
                        @else
                            <input class="half" type="email" required name="email" placeholder="Email">
                        @endif
                        <input class="half" type="phone" required name="phone" placeholder="Téléphone">
                        <input type="password" required name="password" placeholder="Mot de passe">
                        <input type="text" required id = "paddress" name="address" placeholder="Adresse de livraison">
                        <input class="half" required id = "ppostal" type="text" name="postal" placeholder="Code postal">
                        <input class="half" type="text" id = "pcity" required name="city" placeholder="Ville">
                        <label class="adresse-identique">
                            <input type="checkbox" name="adresse-identique" onclick = "return fillBillingField('p');"> Mon adresse de facturation est identique à mon adresse de livraison.
                        </label>
                        <div class="separator"></div>
                        <div class="adresse-faturation">
                            <input type="text" id = "pbilling_address" name="billing_address" placeholder="Adresse de facturation">
                            <input class="half" id = "pbilling_postal" type="text" name="billing_postal" placeholder="Code postal">
                            <input class="half" id = "pbilling_city" type="text" name="billing_city" placeholder="Ville">
                        </div>
                    </div>
                    <div class="action">
                        <span>Je suis un<a href="#!" class="individual">particulier</a></span>
                        <input class="btn bg-btn" type="submit" name="submit" value="S'inscrire">
                    </div>
                </form>
            </div>
            <div class="contact">
                <h2>Besoin d'aide?</h2>
                <p>Aide &amp; Support</p>
                <p><a href="tel:0142069707"><i class="fa fa-phone-alt"></i> 01 42 06 97 07</a></p>
                <p><a href="{{ url('contactus') }}" class="btn bg-btn">Nous contacter<i class="fas fa-arrow-right"></i></a></p>
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
    function fillBillingField(dec){
        if(dec == 'p'){
            jQuery('#pbilling_address').val(jQuery('#paddress').val());
            jQuery('#pbilling_postal').val(jQuery('#ppostal').val());
            jQuery('#pbilling_city').val(jQuery('#pcity').val());
        }
        jQuery('#billing_address').val(jQuery('#address').val());
        jQuery('#billing_postal').val(jQuery('#postal').val());
        jQuery('#billing_city').val(jQuery('#city').val());
        return true;
    }
    </script>
@stop
