@extends('layouts/default')

@section('title')

    Home

    @parent

@stop

@section('header_styles')


@stop



@section('content')

    <!-- BEGIN PAGE CONTAINER-->

    <section class="content">

        <h1>Commande de mémoire et rapport</h1>

        <div id="commande-memoire-rapport">

            <form id="commander-plan" method="post" action="{{ url('memory') }}" enctype="multipart/form-data">

                @csrf

                <div class="form-step step-1 opned">

                    <div class="step"><span>1</span> Configurez le produit</div>

                    <div>

                        <label for="nom-fichier">Titre de votre dossier</label>

                        <input required type="text" name="file_name" placeholder="Nom de dossier">

                    </div>

                    <div class="nombre">

                        <p class="half"><label>Nombre d'exemplaires</label>
                            <input type="hidden" name="product_quantity" id="product_quantity">
                            <input type="number" required min="1" name="desired_copies" placeholder="Nombre d'exemplaires souhaité">

                        </p>

                    </div>



                    <h3>Format:</h3>

                    <!-- <button class="btn format-identique">Format identique</button> <button class="btn autre-format">Autre format</button> -->

                    <div class="format">

                        <ul class="autre-format">

                            <li class="perso">

                                <figure></figure>

                                <span class="type"><i class="fas fa-compress"></i></span>

                                <span class="size">Format personnalisé</span>
                                <span class="paper_size_text">Custom</span>

                            </li>

                            <li class="defini">

                                <figure></figure>

                                <span class="type">Format A3</span>
                                <span class="paper_size_text">A3</span>
                                <span class="size">
                                    <span class="hauteur">42</span>cm x 
                                    <span class="largeur">29,7</span>cm
                                </span>

                            </li>

                            <li class="defini">

                                <figure></figure>

                                <span class="type">Format A4</span>
                                <span class="paper_size_text">A4</span>

                                <span class="size">
                                    <span class="hauteur">29,7</span>cm x 
                                    <span class="largeur">21</span>cm
                                </span>

                            </li>

                            <li class="defini">

                                <figure></figure>

                                <span class="type">Format A5</span>
                                <span class="paper_size_text">A5</span>

                                <span class="size">
                                    <span class="hauteur">21</span>cm x 
                                    <span class="largeur">14,8</span>cm
                                </span>

                            </li>

                        </ul>

                    </div>

                    <!-- <div class="size-entries hide">

                    <p class="half"><label>Largeur (cm):</label> <input type="text" name="largeur" placeholder="Largeur en cm"></p>

                    <p class="half"><label>Hauteur (cm):</label> <input type="text" name="hauteur" placeholder="Hauteur en cm"></p>

                </div> -->

                    <div class="size-entries cote hide">
                        <input type="hidden" name="paper_size" id="paper_size" value="custom">
                        <p class="half">
                            <label>Côté le plus petit (cm):</label> 
                            <input class="cote-petit" type="text" id="smallest" value="0.00" name="smallest" placeholder="Dimension maximale : 29,7 cm">
                        </p>

                        <p class="half">
                            <label>Côté le plus grand (cm):</label> 
                            <input class="cote-grand" type="text" id="largest" value="0.00" name="largest" placeholder="Dimension maximale : 42 cm">
                        </p>

                    </div>

                    <div class="orientation">

                        <p class="half">
                            <label>Orientation</label>

                            <select id="orientation" name = "orientation">

                                <option value="not selected">-- Select --</option>

                                <option value="vertical">Vertical</option>

                                <option value="horizontal">Horizontal (format paysage)</option>

                            </select>

                        </p>

                    </div>

                    <div class="transparent">

                        <p class="half"><label>Transparent sur Couverture</label>

                            <select id="transparent" name="transparent">

                                <option value="not selected">-- Select --</option>

                                <option value="transparent">Transparent</option>

                                <option value="transparent nervuré">Transparent nervuré</option>

                                <option value="pas de transparent">Pas de transparent</option>

                            </select>

                        </p>

                    </div>

                    <div class="couverture">

                        <p class="half"><label>Couverture (Papier)</label>

                            <select id="couverture-papier" name="cover_paper">

                                <option value="not selected">-- Select --</option>

                                <!-- <option value="papier souple 100g">Papier souple 100g</option>

                            <option value="papier rigide 300 gr">Papier rigide 300 gr</option> -->

                                <option value="lf-160">Lisse fin 160 grs</option>

                                <option value="le-250">Lisse épais 250 grs</option>

                                <option value="gce-250">Grain cuire épais 250 gr</option>

                            </select>

                        </p>

                        <p class="half"><label>Couverture</label>

                            <select id="couverture" name="cover">

                                <option value="not selected">-- Select --</option>

                                <option class="hide lf-160 le-250 gce-250" value="">Blanc</option>

                                <option class="hide lf-160" value="">Bleu alizé</option>

                                <option class="hide lf-160" value="">Bleu intense</option>

                                <option class="hide lf-160" value="">Vert</option>

                                <option class="hide lf-160" value="">Rose</option>

                                <option class="hide lf-160 gce-250" value="">Ivoire</option>

                                <option class="hide lf-160" value="">Jaune intense</option>

                                <option class="hide lf-160" value="">Rouge intense</option>

                                <option class="hide lf-160" value="">Jaune canari</option>

                                <option class="hide lf-160" value="">Vert intense</option>

                                <option class="hide lf-160" value="">Orange vif</option>

                                <option class="hide lf-160" value="">Fuschia</option>

                                <option class="hide lf-160" value="">Pêche</option>

                                <option class="hide lf-160" value="">Caramel</option>

                                <option class="hide le-250 gce-250" value="">Noir</option>

                                <option class="hide le-250" value="">Bleu</option>

                                <option class="hide gce-250" value="">Bleu royal</option>

                                <option class="hide gce-250" value="">Bleu clair</option>

                                <option class="hide le-250 gce-250" value="">Rouge</option>

                                <option class="hide le-250 gce-250" value="">Jaune</option>

                                <option class="hide le-250 gce-250" value="">Gris</option>

                                <option class="hide gce-250" value="">Vert foncé</option>

                                <option class="hide gce-250" value="">Bordeau</option>

                            </select>

                        </p>

                    </div>

                    <div class="nombre">

                        <p class="half">

                            <label>Nombre de page N&B</label>

                            <input type="number" required min="1" name="black_and_white_pages" placeholder="Nombre d'exemplaires souhaité">

                            <span class="help-info">
                                <i class="fas fa-info-circle"></i>
                                <span class="help-info-content">Attention: 1 page correspond à un côté imprimé d'une feuille - 1 recto/verso imprimé = 2 pages</span>
                            </span>

                        </p>

                        <p class="half">

                            <label>Nombre de pages couleur</label>

                            <input type="number" required min="1" name="color_pages" placeholder="Nombre d'exemplaires souhaité">

                            <span class="help-info">
                                <i class="fas fa-info-circle"></i>
                                <span class="help-info-content">Attention: 1 page correspond à un côté imprimé d'une feuille - 1 recto/verso imprimé = 2 pages</span>
                            </span>

                        </p>

                    </div>

                    <div class="grammage">

                        <p class="half"><label>Grammage</label>

                            <select id="grammage" name="weight">

                                <option value="not selected">-- Select --</option>

                                <option value="80 gr">80 gr</option>

                                <option value="90 gr">90 gr</option>

                            </select>

                        </p>

                    </div>

                    <div class="format-impression">

                        <p class="half"><label>Format d'impression</label>

                            <select id="format-impression" name="print_size">

                                <option value="not selected">-- Select --</option>

                                <option value="recto">Recto</option>

                                <option value="recto-verso">Recto / Verso</option>

                            </select>

                        </p>

                    </div>

                    <div class="dos-impression">

                        <h3>Dos imprimé:</h3>

                        <p class="half">
                            <label>
                                <input type="radio" required name="back_print" value="yes">Oui
                            </label>
                        </p>

                        <p class="half">
                            <label>
                                <input type="radio" required name="back_print" value="no">Non
                            </label>
                        </p>

                    </div>

                    <div class="dos-transparent">

                        <p class="half"><label>Transparent sur Dos</label>

                            <select id="dos-transparent" name="clear_back">

                                <option value="not selected">-- Select --</option>

                                <option value="transparent">Transparent</option>

                                <option value="transparent nervuré">Transparent nervuré</option>

                                <option value="pas de transparent">Pas de transparent</option>

                            </select>

                        </p>

                    </div>

                    <div class="dos">

                        <p class="half"><label>Dos</label>

                            <select id="dos" name="back_color">

                                <option value="not selected">-- Select --</option>

                                <option class="lf-160 le-250 gce-250" value="">Blanc</option>

                                <option class="lf-160" value="">Bleu alizé</option>

                                <option class="lf-160" value="">Bleu intense</option>

                                <option class="lf-160" value="">Vert</option>

                                <option class="lf-160" value="">Rose</option>

                                <option class="lf-160 gce-250" value="">Ivoire</option>

                                <option class="lf-160" value="">Jaune intense</option>

                                <option class="lf-160" value="">Rouge intense</option>

                                <option class="lf-160" value="">Jaune canari</option>

                                <option class="lf-160" value="">Vert intense</option>

                                <option class="lf-160" value="">Orange vif</option>

                                <option class="lf-160" value="">Fuschia</option>

                                <option class="lf-160" value="">Pêche</option>

                                <option class="lf-160" value="">Caramel</option>

                                <option class="le-250 gce-250" value="">Noir</option>

                                <option class="le-250" value="">Bleu</option>

                                <option class="gce-250" value="">Bleu royal</option>

                                <option class="gce-250" value="">Bleu clair</option>

                                <option class="le-250 gce-250" value="">Rouge</option>

                                <option class="le-250 gce-250" value="">Jaune</option>

                                <option class="le-250 gce-250" value="">Gris</option>

                                <option class="gce-250" value="">Vert foncé</option>

                                <option class="gce-250" value="">Bordeau</option>

                            </select>

                        </p>

                    </div>

                    <div class="reliure">

                        <p class="half"><label>Type de reliure</label>

                            <select id="reliure" name="binding_type[]">

                                <option value="not selected">-- Select --</option>

                                <option value="plastique">Reliure spirale plastique</option>

                                <option value="metalique">Reliure spirale metallique</option>

                                <option value="pince">pince</option>

                                <option value="bande">Reliure collée par bande toilée</option>

                                <option value="sans reliure">Sans reliure</option>

                            </select>

                            <span class="note small hide">100 pages maximum (soit 50 feuilles)</span>

                            <!-- <span class="help-info"><i class="fas fa-info-circle"></i><span class="help-info-content">Pour X pages recto ou X pages recto/Verso maximum</span></span> -->

                        </p>

                        <p class="half"><label></label>

                            <select id="reliure_cote" name="binding_type[]">

                                <option value="not selected">-- Select --</option>

                                <option value="sur le grand côté">Sur le grand côté</option>

                                <option value="sur le petit côté">Sur le petit côté</option>

                            </select>

                        </p>

                        <p class="half"><label>Couleur de la reliure</label>

                            <!-- <select id="reliure_couleur">

                            <option value="not selected">-- Select --</option>

                            <option value="plastique">Pour plastique</option>

                            <option value="metalique">Pour metalique</option>

                            <option value="bande">Pour bande</option>

                        </select> -->

                            <select id="reliure_couleur_choix">

                                <option value="not selected">-- Select --</option>

                                <option class="metalique" value="Argent">Argent</option>

                                <option class="plastique metalique bande" value="Blanche">Blanche</option>

                                <option class="plastique metalique bande" value="Bleue">Bleue</option>

                                <option class="plastique metalique bande" value="Noire">Noire</option>

                                <option class="plastique metalique bande" value="Rouge">Rouge</option>

                                <option class="metalique bande" value="Vert">Vert</option>

                                <option class="plastique" value="Vert emeraude">Vert emeraude</option>



                            </select>

                        </p>

                    </div>

                    <div class="commentaire">

                        <p class="half">

                            <label>Commentaire (facultatif)</label>

                            <textarea name="comment" placeholder="Vote commentaire et observations ici..."></textarea>

                        </p>

                    </div>

                </div>

                <div class="form-step step-2">

                    <div class="step"><span>2</span> Ajoutez des fichiers</div>

                    <div class="fichier-joindre">

                        <label class="btn verse">

                            <input type="file" name="image" placeholder="Ajoutez des fichiers">

                            <i class="fas fa-upload"></i> Ajoutez des fichiers

                        </label>

                        <span class="help-info">

                            <i class="fas fa-info-circle"></i><span class="help-info-content">Vous pouvez déposer jusqu'à

                                20 fichiers. La taille limite par fichier est de 500Mo.<br>

                                Si votre fichier dépasse la taille maximum, veuillez nous contacter</span>

                        </span>

                    </div>

                    <!--  -->

                    <div class="form-step step-3">

                        <div class="step"><span>3</span> Sélectionnez le prix et la date de livraison</div>

                        <div class="date-time">

                            <h3>Séléctionnez le prix et la date de livraison:</h3>

                            <h5>Livraison en France métropolitaine</h5>

                            <p><i>Plus vous anticipez votre commande, plus le tarif est bas !</i><br>

                                Les dates de livraison sont indicatives et 99 % d'entre elles arrivent avant la date

                                estimée.</p>

                            <p class="prix-ttc"><span>Prix TTC:</span> <span class="prix"></span></p>

                            <h4 class="prix-indicatif">Livraison indicative</h4>

                            <div class="table">

                            <div class="row date">

                                <div></div>

                                <div class="j2 selected">

                                    <span class="day">
                                        {{ \App\Models\Functions::dateToFrench(date('l',strtotime(' +1 day')),'l') }}
                                    </span> 
                                    <span class="date">{{ date('d/m',strtotime(' +1 day')) }}</span>

                                </div>

                                <div class="j3">

                                    <span class="day">
                                        {{ \App\Models\Functions::dateToFrench(date('l',strtotime(' +2 day')),'l') }}
                                    </span> 
                                    <span class="date">{{ date('d/m',strtotime(' +2 day')) }}</span>

                                </div>

                                <div class="j4">

                                    <span class="day">
                                        {{ \App\Models\Functions::dateToFrench(date('l',strtotime(' +3 day')),'l') }}
                                    </span> 
                                    <span class="date">{{ date('d/m',strtotime(' +3 day')) }}</span>

                                </div>

                                <div class="j5">

                                    <span class="day">
                                        {{ \App\Models\Functions::dateToFrench(date('l',strtotime(' +4 day')),'l') }}
                                    </span> 
                                    <span class="date">{{ date('d/m',strtotime(' +4 day')) }}</span>

                                </div>

                            </div>

                            @if(count($prices))

                                    @php
                                        $x = 0;

                                    @endphp

                                @foreach($prices as $price)

                                    <div class="row">

                                        <div class="qte @if($x == 0) selected @endif">{{ $price->quantity }}</div>

                                        <div class="price j2 @if($x == 0) selected @endif">
                                            {{ $price->first_day_price }}
                                        </div>

                                        <div class="price j3">Prix J+3</div>

                                        <div class="price j4">Prix J+4</div>

                                        <div class="price j5">Prix J+5</div>

                                    </div>

                                    @php
                                        $x++;

                                    @endphp

                                @endforeach

                            @endif

                        </div>

                            <input type="date" name="livraison-date" id="livraison_date">

                        </div>

                        <!-- <input class="btn bg-btn" type="submit" name="submit" value="Commander"> -->

                        <aside>

                            <h2>Récapitulatif de votre panier<span></span></h2>

                            <table>

                                <tr>

                                    <th class="designation">Liste des fichiers</th>

                                    <th class="qte">Quantité</th>

                                    <th class="prix">Total HT</th>

                                </tr>

                                <tr class="item">

                                    <td class="designation">Nom de plan N°1</td>

                                    <td class="qte">123</td>

                                    <td class="prix">650,00 €</td>

                                </tr>

                                <tr class="tax-tva">

                                    <td>TVA 20%</td>

                                    <td class=""></td>

                                    <td class="prix"></td>

                                </tr>

                                <tr class="total">

                                    <td>Total TTC</td>

                                    <td></td>

                                    <td class="prix"></td>

                                </tr>

                            </table>
                            <input type="hidden" name="product_cart_totalht" id="product_cart_totalht">
                            <input type="hidden" name="product_cart_totlettc" id="product_cart_totlettc">
                            <input type="hidden" name="product_cart_tva" id="product_cart_tva">
                            <p class="livraison-date"><span>Livraison le:</span> <span class="date"></span></p>

                            <p class="add-to-cart">
                                <script src="https://checkout.stripe.com/checkout.js" 
                                    class="stripe-button" 
                                    data-key="{{ env('STRIPE_KEY') }}" 
                                    data-image="{{ url('/frontend_assets/images/header_logo.svg') }}" 
                                    data-name="{{ env('APP_NAME') }}" 
                                    data-description="Order Payment"
                                    data-email="{{ Sentinel::getUser()->email }}"
                                    data-label="Add Order">
                                  </script>
                                <!-- <button type="submit" name="submit" class="btn bg-btn" href="#!">
                                    Ajouter au panier 
                                    <i class="fas fa-shopping-cart"></i>
                                </button> -->
                            </p>

                            <!-- <p class="add-to-cart"><button type="submit" name="submit" class="btn bg-btn"

                                    href="#!">Ajouter au panier <i class="fas fa-shopping-cart"></i></button></p> -->

                            <p class="devis-sur-mesure small">Vous ne trouvez pas votre besoin ? <a href="devis.html">Devis

                                    sur mesure</a></p>

                        </aside>

                    </div>

                    <!-- <input class="btn bg-btn" type="submit" name="submit" value="Commander"> -->

                </div>

            </form>

        </div>

    </section>

    <div class="call-to-action">

        <div class="description">

            <h2>Autre besoin?</h2>

            <p>Vous ne trouvez pas votre besoin et vous voulez une demande sur mesure?</p>

            <p><a href="devis.html" class="btn bg-btn">Devis sur mesure <i class="fas fa-arrow-right"></i></a></p>

        </div>

        <div class="contact">

            <h2>Contact</h2>

            <p>Aide & Support</p>

            <p><a href="tel:0142069707"><i class="fa fa-phone-alt"></i> 01 42 06 97 07</a></p>

            <p><a href="devis.html" class="btn bg-btn">Nous contacter<i class="fas fa-arrow-right"></i></a></p>

        </div>

    </div>



    <!-- END CONTAINER -->

@stop



{{-- page level scripts --}}

@section('footer_scripts')
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/asset/script.js') }}"></script>


@stop

