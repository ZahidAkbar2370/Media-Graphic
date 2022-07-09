@extends('layouts/default')
@section('title')
    Home
    @parent
@stop
@section('header_styles')

@stop

@section('content')
    <!-- BEGIN PAGE CONTAINER-->

    <!-- <section class="hero">
                  </section> -->
    <section class="content">
        <h1>Commande de brochure et livret</h1>
        <div id="commande-brochure-livret">
            <form id="commander-brochure-livret" method="post" action="{{ url('booklet') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-step step-1 opned">
                    <div class="step"><span>1</span> Configurez le produit</div>
                    <div class="pique">
                        <!-- <p class="half"><label>Piqure à cheval à préciser</label><input type="text" name="pique" placeholder="Préciser.."></p> -->
                        <p class="half">
                            Les brochures et livrets sont réalisés par pliage et reliés via une "piqure
                            à cheval".<br>Il s'agit d'une finition avec deux agrafes fixées sur la tranche du document.
                        </p>
                    </div>
                    <div>
                        <p class="half">
                            <label>Titre de votre dossier</label>
                            <input required type="text" name="file_name" placeholder="Nom de dossier">
                        </p>
                    </div>
                    <div class="nombre">
                        <p class="half">
                            <label>Nombre d'exemplaires</label>
                            <input type="number" required min="1" name="desired_copies" placeholder="Nombre d'exemplaires souhaité">
                        </p>
                    </div>
                    <div>
                        <!-- <h3>Format:</h3> -->
                        <p class="half">
                            <label>Format</label>
                            <select id="format" name="file_format">
                                <option value="not selected">-- Select --</option>
                                <option value="A4 fermé (=A3 ouvert)">A4 fermé (=A3 ouvert)</option>
                                <option value="A5 fermé (=A4 ouvert)">A5 fermé (=A4 ouvert)</option>
                            </select>
                        </p>
                    </div>
                    <div class="nombre pages">
                        <p class="half">
                            <label>Nombre de page</label>
                            <!-- <input type="number" min="1" name="n_page" placeholder=""> -->
                            <select id="n_page" name="no_of_pages">
                                <option value="not selected">-- Select --</option>
                                <option value="08">8 Pages y compris couverture</option>
                                <option value="12">12</option>
                                <option value="16">16</option>
                                <option value="20">20</option>
                                <option value="24">24</option>
                                <option value="28">28</option>
                                <option value="32">32</option>
                                <option value="36">36</option>
                                <option value="40">40</option>
                                <option value="44">44</option>
                                <option value="48">48</option>
                                <option value="52">52</option>
                                <option value="56">56</option>
                                <option value="60">60</option>
                                <option value="64">64</option>
                            </select>
                            <span class="help-info">
                                <i class="fas fa-info-circle"></i>
                                <span class="help-info-content">
                                    Attention: 1 page correspond à un côté imprimé d'une feuille - 1 recto/verso imprimé = 2
                                    pages
                                </span>
                            </span>
                        </p>
                    </div>
                    <div class="inpression">
                        <p class="half">
                            <label>Impression</label>
                            <select id="inpression" name="print">
                                <option value="not selected">-- Select --</option>
                                <option value="Couleur">Couleur</option>
                                <option value="Noir & Blanc">Noir & Blanc</option>
                            </select>
                        </p>
                    </div>
                    <div class="orientation">
                        <p class="half">
                            <label>Orientation</label>
                            <select id="orientation" name="orientation">
                                <option value="not selected">-- Select --</option>
                                <option value="vertical recto verso">Vertical recto verso</option>
                                <option value="horizontal recto verso">Horizontal recto verso(format paysage)</option>
                            </select>
                        </p>
                    </div>
                    <div>
                        <p class="half"><label>Papier</label>
                            <select id="papier" name="paper">
                                <option value="not selected">-- Select --</option>
                                <option value="80 gr">80 gr</option>
                                <option value="90 gr">90 gr</option>
                                <option value="120 gr satiné">120 gr satiné</option>
                                <option value="130 gr Couché brillant (Corep)">130 gr Couché brillant (Corep)</option>
                            </select>
                        </p>
                    </div>
                    <div class="couverture">
                        <p class="half"><label>Couverture</label>
                            <select id="couverture_color" name="cover_transparent">
                                <option value="not selected">-- Select --</option>
                                <option value="Couleur">Couleur</option>
                                <option value="Noir&Blanc">Noir&Blanc</option>
                            </select>
                            <span class="help-info"><i class="fas fa-info-circle"></i>
                                <span class="help-info-content">1ère et 4ème de couverture</span>
                            </span>
                        </p>
                        <p class="half"><label></label>
                            <select id="couverture_paper" name="weight">
                                <option value="not selected">-- Select --</option>
                                <option value="80 gr">80 gr</option>
                                <option value="90 gr">90 gr</option>
                                <option value="120 gr satiné">120 gr satiné</option>
                                <option value="130 gr">130 gr</option>
                                <option value="160 gr">160 gr</option>
                            </select>
                            <span class="help-info"><i class="fas fa-info-circle"></i>
                                <span class="help-info-content">1ère et 4ème de couverture</span>
                            </span>
                        </p>
                    </div>
                    <!-- <button class="btn format-identique">Format identique</button> <button class="btn autre-format">Autre format</button> -->
                    <!-- <div class="format">
                                    <ul class="autre-format">
                                        <li class="perso">
                                            <figure></figure>
                                            <span class="type"><i class="fas fa-compress"></i></span>
                                            <span class="size">Format personnalisé</span>
                                        </li>
                                        <li class="defini">
                                            <figure></figure>
                                            <span class="type">Format A3</span>
                                            <span class="size"><span class="hauteur">42</span>cm x <span class="largeur">29,7</span>cm</span>
                                        </li>
                                        <li class="defini">
                                            <figure></figure>
                                            <span class="type">Format A4</span>
                                            <span class="size"><span class="hauteur">29,7</span>cm x <span class="largeur">21</span>cm</span>
                                        </li>
                                        <li class="defini">
                                            <figure></figure>
                                            <span class="type">Format A5</span>
                                            <span class="size"><span class="hauteur">21</span>cm x <span class="largeur">14,8</span>cm</span>
                                        </li>
                                    </ul>
                                </div> -->
                    <!-- <div class="size-entries hide">
                                    <p class="half"><label>Largeur (cm):</label> <input type="text" name="largeur" placeholder="Largeur en cm"></p>
                                    <p class="half"><label>Hauteur (cm):</label> <input type="text" name="hauteur" placeholder="Hauteur en cm"></p>
                                </div> -->
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
                            <i class="fas fa-info-circle"></i><span class="help-info-content">Vous pouvez déposer jusqu'à 20
                                fichiers. La taille limite par fichier est de 500Mo.<br>
                                Si votre fichier dépasse la taille maximum, veuillez nous contacter</span>
                        </span>
                    </div>
                </div>
                <div class="form-step step-3">
                    <div class="step"><span>3</span> Sélectionnez le prix et la date de livraison</div>
                    <div class="date-time">
                        <h3>Séléctionnez le prix et la date de livraison:</h3>
                        <h5>Livraison en France métropolitaine</h5>
                        <p><i>Plus vous anticipez votre commande, plus le tarif est bas !</i><br>
                            Les dates de livraison sont indicatives et 99 % d'entre elles arrivent avant la date estimée.
                        </p>
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
                        <p class="devis-sur-mesure small">Vous ne trouvez pas votre besoin ? <a href="devis.html">Devis sur mesure</a></p>
                        <input type="hidden" name="product_quantity" id="product_quantity">
                        <input type="hidden" name="product_cart_totalht" id="product_cart_totalht">
                        <input type="hidden" name="product_cart_totlettc" id="product_cart_totlettc">
                        <input type="hidden" name="product_cart_tva" id="product_cart_tva">
                    </aside>
                </div>
            </form>
        </div>
    </section>

    <!-- END CHAT -->

    <!-- END CONTAINER -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/asset/script.js') }}"></script>
@stop
