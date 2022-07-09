@extends('layouts/default')
@section('title')
    Home
    @parent
@stop
@section('header_styles')

@stop

@section('content')

    <main class="panier">
        <section class="content">
            <h1>Validation de commande</h1>
            <!-- <div class="inscription-choix">
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
       </div> -->
            <div class="call-to-action">
                <div class="description">
                    <h2>Vos informations</h2>
                    <form id="individual-inscription">
                        <div class="infos">
                            <select name="structure" class="half first">
                                <option value="not selected">-- Vous êtes? --</option>
                                <option value="Société">Société</option>
                                <option value="Association">Association</option>
                                <option value="Administration">Administration</option>
                                <option value="Particulier">Particulier</option>
                                <option value="Autre">Autre</option>
                            </select>
                            <input class="half hide" type="text" name="autre-structure" placeholder="A préciser..">
                            <input type="text" name="raison-sociale" placeholder="Raison sociale">
                            <div class="civilite">
                                <label><input type="radio" name="civilite" value="M"> M</label>
                                <label><input type="radio" name="civilite" value="Mme"> Mme</label>
                                <label><input type="radio" name="civilite" value="Mlle"> Mlle</label>
                            </div>
                            <input class="half first" type="text" name="nom" placeholder="Nom">
                            <input class="half" type="text" name="prenom" placeholder="Préom">
                            <input class="half first" type="email" name="email" placeholder="Email">
                            <input class="half" type="phone" name="tel" placeholder="Téléphone">
                            <input type="text" name="adresse-livraison" placeholder="Adresse de livraison">
                            <input class="half first" type="text" name="code-postal-livraison"
                                placeholder="Code postal">
                            <input class="half" type="text" name="ville-livraison" placeholder="Ville">
                            <label class="adresse-identique"><input type="checkbox" name="adresse-identique"> Mon adresse de
                                facturation est identique à mon adresse de livraison.</label>
                            <div class="separator"></div>
                            <div class="adresse-faturation">
                                <input type="text" name="adresse-faturation" placeholder="Adresse de facturation">
                                <input class="half first" type="text" name="code-postal-facturation"
                                    placeholder="Code postal">
                                <input class="half" type="text" name="ville-facturation" placeholder="Ville">
                            </div>
                            <h2 class="paiement">Méthode de paiement</h2>
                            <div class="paiement">
                                <label class="half first paypal"><input type="radio" name="paiement" class="paypal"
                                        value="paypal"> <i class="fab fa-paypal"></i> PayPal</label>
                                <label class="half card"><input type="radio" name="paiement" class="card"
                                        value="card"> <i class="far fa-credit-card"></i> Carte bancaire</label>
                                <div class="card hide">
                                    <label class="half first">Numéro de la carte: <input type="text"
                                            name="card-number"></label>
                                    <label class="half">Date d'expiration: <input type="text"
                                            name="expiration-date" placeholder="dd-aaaa"></label><label
                                        class="half">CCV: <input type="text" name="ccv" placeholder="ccv"></label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="action">
           <span>Nous sommes <a href="#!" class="professional">Grand compte</a></span>
           <input class="btn bg-btn" type="submit" name="submit" value="S'inscrire">
          </div> -->
                        <aside class="">
                            <h2>Récapitulatif de votre panier<span>Détails de votre commande</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <th class="designation">Liste des fichiers</th>
                                        <th class="qte">Quantité</th>
                                        <th class="prix">Total HT</th>
                                    </tr>
                                    <tr class="item">
                                        <td class="designation">Nom de plan N°1</td>
                                        <td class="qte">100</td>
                                        <td class="prix">125.00 €</td>
                                    </tr>
                                    <tr class="tax-tva">
                                        <td>TVA 20%</td>
                                        <td class=""></td>
                                        <td class="prix">25.00 €</td>
                                    </tr>
                                    <tr class="total">
                                        <td>Total TTC</td>
                                        <td></td>
                                        <td class="prix">150.00 €</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="livraison-date"><span>Livraison le:</span> <span class="date">
                                    Lundi 10/01
                                </span></p>
                            <p class="add-to-cart"><button type="submit" name="submit" class="btn bg-btn"
                                    href="#!">Valider la commande <i class="fab fa-paypal"></i></button></p>
                            <p class="devis-sur-mesure small">Vous avez besoin d'aide ? <a
                                    href="nous-contacter.html">Contactez-nous</a></p>
                        </aside>
                    </form>

                </div>
                <!-- <div id="professional" class="description">
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
        </div> -->
                <!-- <div class="contact">
         <h2>Besoin d'aide?</h2>
         <p>Aide &amp; Support</p>
         <p><a href="tel:0142069707"><i class="fa fa-phone-alt"></i> 01 42 06 97 07</a></p>
         <p><a href="nous-contacter.html" class="btn bg-btn">Nous contacter<i class="fas fa-arrow-right"></i></a></p>
        </div> -->
            </div>
        </section>
    </main>


@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
