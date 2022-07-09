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

    <main class="commander">

        <section class="content">

            <h1>Commande Affiche</h1>



            <div id="commander-affiche">

                <form id="commander-affiche" method="post" action="{{ url('attach') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-step step-1 opned">

                        <div class="step"><span>1</span> Téléchargez vos fichier</div>

                        <div class="container uploader">

                            <input type="file" name="image" id="file">



                            <!-- Drag and Drop container-->

                            <div class="upload-area" id="uploadfile">

                                <!-- <i class="fas fa-upload"></i> -->

                                <img src="images/upload_icon.svg">

                                <h2>Glissez déposez vos fichier ici</h2>

                                <p><i>ou</i></p>

                                <p class="btn">téléchargez vos fichiers</p>

                                <p class="small">Format PDF pour une qualité d’impression optimum</p>

                            </div>

                        </div>

                    </div>

                    <div class="form-step step-2">

                        <div class="step"><span>2</span> Configurez le produit</div>

                        <h3>Configurez votre impression:</h3>

                        <!-- <button class="btn format-identique">Format identique</button> <button class="btn autre-format">Autre format</button> -->

                        <div class="format">

                            <p class="half">
                                <input type="radio" name="format" value="Format identique"> 
                                <label for="format">Format identique</label>
                            </p>

                            <p class="half">
                                <input type="radio" name="format" value="Autre format"> 
                                <label for="format">Autre format</label>
                            </p>

                            <ul class="autre-format hide">

                                <li class="perso">
                                    <figure></figure>

                                    <span class="type"><i class="fas fa-compress"></i></span>

                                    <span class="size">Format personnalisé</span>
                                    <span class="paper_size_text">Custom</span>

                                </li>

                                <li class="defini">

                                    <figure></figure>

                                    <span class="type">Format A0</span>
                                    <span class="paper_size_text">A0</span>

                                    <span class="size">
                                        <span class="largeur">84,1</span>cm x 
                                        <span class="hauteur">118,9</span>cm
                                    </span>

                                </li>

                                <li class="defini">

                                    <figure></figure>

                                    <span class="type">Format A1</span>
                                    <span class="paper_size_text">A1</span>

                                    <span class="size">
                                        <span class="largeur">59,4</span>cm x 
                                        <span class="hauteur">84,1</span>cm
                                    </span>

                                </li>

                                <li class="defini">

                                    <figure></figure>

                                    <span class="type">Format A2</span>
                                    <span class="paper_size_text">A2</span>

                                    <span class="size">
                                        <span class="largeur">42</span>cm x 
                                        <span class="hauteur">59,4</span>cm
                                    </span>

                                </li>

                            </ul>

                        </div>

                        <div class="size-entries hide">

                            <input type="hidden" name="paper_size" id="paper_size" value="custom">
                            <p class="half">
                                <label>Largeur:</label> 
                                <input type="text" name="smallest" id="smallest" value="0.00" placeholder="Largeur (cm): Max 90cm">
                            </p>

                            <p class="half">
                                <label>Hauteur:</label> 
                                <input type="text" name="largest" id="largest" value="0.00" placeholder="Haureur (cm): Max 400cm">
                            </p>

                        </div>

                        <div class="choix-couleur">

                            <p class="half">
                                <input type="radio" name="color_pages" value="Noir et blanc"> 
                                <label>Noir et blanc</label>
                            </p>

                            <p class="half">
                                <input type="radio" name="color_pages" value="Couleur">
                                <label>Couleur</label>
                            </p>

                        </div>

                        <div class="papier">

                            <h3>Choisir votre papier:</h3>

                            <p class="half"><input type="radio" name="paper" value="120gr"> <label>papier 120 gr

                                    couché mat</label></p>

                            <p class="half"><input type="radio" name="paper" value="180gr"> <label>papier 180 gr

                                    couché mat</label></p>

                            <p class="half"><input type="radio" name="paper" value="195gr-satine"> <label>papier

                                    195 gr satiné</label></p>

                            <p class="half"><input type="radio" name="paper" value="120gr-photo"> <label>papier

                                    195 gr photo</label></p>

                        </div>

                        <div class="faconnage">

                            <h3>Façonnage:</h3>

                            <p style="width:100%">Les affiches sont livrées roulées sous tube ultra résistant</p>

                        </div>

                        <div class="nombre">

                            <p><label>Nombre d'exemplaires souhaité</label>

                                <input type="number" min="1" name="quantite" placeholder="Nombre d'exemplaires souhaité">

                            </p>

                        </div>

                        <div class="fichier-joindre">

                            <label class="btn verse">

                                <input type="file" name="image1" placeholder="Ajoutez des fichiers">

                                <i class="fas fa-upload"></i> Ajoutez des fichiers

                            </label>

                        </div>

                    </div>

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

                            <input type="text" name="livraison-date" id="livraison_date">

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

                            <!-- <p class="add-to-cart"><button type="submit" name="submit" class="btn bg-btn"

                                    href="#!">Ajouter au panier <i class="fas fa-shopping-cart"></i></button></p> -->

                            <p class="devis-sur-mesure small">Vous ne trouvez pas votre besoin ? <a href="{{ url('devis') }}">Devis sur mesure</a></p>

                        </aside>

                    </div>

                    <input type="hidden" name="product_quantity" id="product_quantity">
                    <input type="hidden" name="product_cart_totalht" id="product_cart_totalht">
                    <input type="hidden" name="product_cart_totlettc" id="product_cart_totlettc">
                    <input type="hidden" name="product_cart_tva" id="product_cart_tva">

                </form>

            </div>

        </section>

    </main>



    <!-- END CHAT -->



    <!-- END CONTAINER -->

@stop



{{-- page level scripts --}}

@section('footer_scripts')

    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/asset/script.js') }}"></script>

@stop

