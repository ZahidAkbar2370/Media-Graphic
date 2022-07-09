@extends('layouts/default')
@section('title')
    Inscription
    @parent
@stop
@section('header_styles')

@stop

@section('content')

    <section class="inscription content">
        <h1>Inscription</h1>
        <div class="inscription-choix">
            <p>Vous êtes:</p>
            <div class="individual">
                <i class="fas fa-user"></i>
                <a class="btn bg-btn" href="#!">Individuel</a>
            </div>
            <div class="sep"></div>
            <div class="professional">
                <i class="fas fa-users"></i>
                <a class="btn bg-btn" href="#!">Grand compte</a>
            </div>
        </div>
        <div class="call-to-action hide">
            <div id="individual" class="description">
                <h2>Inscription individuel</h2>
                <form id="individual-inscription">
                    <div class="infos">
                        <div class="civilite">
                            <label><input type="radio" name="civilite" value="M"> M</label>
                            <label><input type="radio" name="civilite" value="Mme"> Mme</label>
                            <label><input type="radio" name="civilite" value="Mlle"> Mlle</label>
                        </div>
                        <input class="half" type="text" name="nom" placeholder="Nom">
                        <input class="half" type="text" name="prenom" placeholder="Préom">
                        <input class="half" type="email" name="email" placeholder="Email">
                        <input class="half" type="phone" name="tel" placeholder="Téléphone">
                        <input type="text" name="adresse-livraison" placeholder="Adresse de livraison">
                        <input class="half" type="text" name="code-postal-livraison" placeholder="Code postal">
                        <input class="half" type="text" name="ville-livraison" placeholder="Ville">
                        <label class="adresse-identique"><input type="checkbox" name="adresse-identique"> Mon adresse de facturation est identique à mon adresse de livraison.</label>
                        <div class="separator"></div>
                        <div class="adresse-faturation">
                            <input type="text" name="adresse-faturation" placeholder="Adresse de facturation">
                            <input class="half" type="text" name="code-postal-facturation" placeholder="Code postal">
                            <input class="half" type="text" name="ville-facturation" placeholder="Ville">
                        </div>
                    </div>
                    <div class="action">
                        <span>Nous sommes <a href="#!" class="professional">Grand compte</a></span>
                        <input class="btn bg-btn" type="submit" name="submit" value="S'inscrire">
                    </div>
                </form>

            </div>
            <div id="professional" class="description">
                <h2>Inscription professionnel</h2>
                <form id="professional-inscription">
                    <div class="infos">
                        <select name="structure" class="half">
                            <option value="not selected">-- Vous êtes? --</option>
                            <option value="Société">Société</option>
                            <option value="Association">Association</option>
                            <option value="Administration">Administration</option>
                            <option value="Particulier">Particulier</option>
                            <option value="Autre">Autre</option>
                        </select>
                        <input class="half hide" type="text" name="autre-structure" placeholder="A préciser..">
                        <input type="text" name="raison-sociale" placeholder="Raison sociale">
                        <input class="half" type="text" name="nom" placeholder="Nom">
                        <input class="half" type="text" name="prenom" placeholder="Préom">
                        <input class="half" type="email" name="email" placeholder="Email">
                        <input class="half" type="phone" name="tel" placeholder="Téléphone">
                        <input type="text" name="adresse-livraison" placeholder="Adresse de livraison">
                        <input class="half" type="text" name="code-postal-livraison" placeholder="Code postal">
                        <input class="half" type="text" name="ville-livraison" placeholder="Ville">
                        <label class="adresse-identique"><input type="checkbox" name="adresse-identique"> Mon adresse de facturation est identique à mon adresse de livraison.</label>
                        <div class="separator"></div>
                        <div class="adresse-faturation">
                            <input type="text" name="adresse-faturation" placeholder="Adresse de facturation">
                            <input class="half" type="text" name="code-postal-facturation" placeholder="Code postal">
                            <input class="half" type="text" name="ville-facturation" placeholder="Ville">
                        </div>
                    </div>
                    <div class="action">
                        <span>Je suis <a href="#!" class="individual">Individuel</a></span>
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
    </script>
@stop
