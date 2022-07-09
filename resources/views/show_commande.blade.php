@extends('layouts/default')
@section('title')
    Home
    @parent
@stop
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/dragdrop/style.css') }}">

@stop

@section('content')
    <!-- BEGIN PAGE CONTAINER-->


    <section class="content">
        <div id="commander-plan">
            <h1>Commande de Plan</h1>

            <form id="commander-plan" method="post" action="{{ url('command_plan') }}" enctype="multipart/form-data">

                @csrf

                <div class="form-step step-1">

                    <div class="step"><span>1</span> Téléchargez vos fichier</div>

                    <div class="container uploader">

                        <input type="file" name="image" id="file">

                        <!-- Drag and Drop container-->

                        <div class="upload-area" id="uploadfile">

                            <!-- <i class="fas fa-upload"></i> -->

                            <img src="{{ asset('frontend_assets/images/upload_icon.svg') }}">

                            <h2>Glissez déposez vos fichier ici</h2>

                            <p><i>ou</i></p>

                            <p class="btn">téléchargez vos fichiers</p>

                            <p class="small">Format PDF pour une qualité d’impression optimum</p>

                        </div>

                    </div>

                </div>

                <div class="form-step step-2">

                    <div class="step"><span>2</span> Configurez le produit</div>

                    <div>

                        <label for="nom-fichier">Nom de fichier</label>

                        <input required type="text" name="file_name" placeholder="Nom de fichier">

                    </div>

                    <div>

                        <label for="nom-fichier">Format reconnu</label>

                        <input type="text" name="file_format" placeholder="Format de fichier">

                    </div>

                    <h3>Configurez votre impression:</h3>

                    <!-- <button class="btn format-identique">Format identique</button> <button class="btn autre-format">Autre format</button> -->

                    <div class="format">

                        <p class="half">
                            <input required type="radio" name="print" value="Format identique"> 
                            <label for="format">Format identique</label>
                        </p>

                        <p class="half">
                            <input required type="radio" name="print" value="Autre format">
                            <label for="format">Autre format</label>
                        </p>

                        <ul class="autre-format hide">

                            <li class="perso">

                                <figure></figure>

                                <span class="type"><i class="fas fa-compress"></i></span>

                                <span class="size">Format personnalisé</span>

                            </li>

                            <li class="defini">

                                <figure></figure>

                                <span class="type">Format A0</span>

                                <span class="size">
                                    <span class="largeur">84,1</span>cm x 
                                    <span class="hauteur">118,9</span>cm
                                </span>

                            </li>

                            <li class="defini">

                                <figure></figure>

                                <span class="type">Format A1</span>

                                <span class="size"><span class="largeur">59,4</span>cm x <span
                                        class="hauteur">84,1</span>cm</span>

                            </li>

                            <li class="defini">

                                <figure></figure>

                                <span class="type">Format A2</span>

                                <span class="size"><span class="largeur">42</span>cm x <span
                                        class="hauteur">59,4</span>cm</span>

                            </li>Vos travaux sont de type:

                        </ul>

                    </div>

                    <div class="size-entries hide">

                        <p class="half">
                            <label>Largeur:</label> 
                            <input type="text" name="work_type" placeholder="Largeur (cm): Max 90cm">
                        </p>

                        <p class="half">
                            <label>Hauteur:</label> 
                            <input type="text" name="work_type" placeholder="Haureur (cm): Max 400cm">
                        </p>

                    </div>

                    <div class="choix-couleur">

                        <p class="half"><input type="radio" required name="print" value="Noir et blanc">

                            <label>Noir et blanc</label>

                        </p>

                        <p class="half"><input type="radio" required name="print" value="Couleur">

                            <label>Couleur</label>

                        </p>

                    </div>

                    <div class="travaux-type">

                        <h3>Vos travaux sont de type:</h3>

                        <p class="half">
                            <input type="radio" required name="work_type" value="Plan">

                            <label>Plan</label>

                        </p>

                        <p class="half">
                            <input type="radio" required name="work_type" value="Image avec des aplats ou mixte"> 
                            <label>Image avec des aplats ou mixte</label>
                        </p>

                    </div>

                    <div class="papier">

                        <h3>Choisir votre papier: 
                            <span class="help-info">
                                <i class="fas fa-info-circle"></i>

                                <span class="help-info-content">"Poids du papier au m²".

                                    Nous vous conseillons l'utilisation du papier 75gr pour des travaux courants:

                                    plans techniques, permis de construite etc…

                                    Si le taux d'encrage est important, nous vous recommandons un poids supérieur à

                                    120g/m².
                                </span>
                            </span>

                        </h3>

                        <p class="half"><input type="radio" required name="choose_paper" value="75gr">

                            <label>Papier 75gr (ordinaire)</label>

                        </p>

                        <p class="half"><input type="radio" required name="choose_paper" value="120gr">

                            <label>papier 120 gr couché mat</label>

                        </p>

                        <p class="half"><input type="radio" required name="choose_paper" value="180gr">

                            <label>papier 180 gr couché mat</label>

                        </p>

                        <p class="half"><input type="radio" required name="choose_paper" value="195gr-satine">

                            <label>papier 195 gr satiné</label>

                        </p>

                        <p class="half"><input type="radio" required name="choose_paper" value="120gr-photo">

                            <label>papier 195 gr photo</label>

                        </p>

                        <p class="half"><input type="radio" required name="choose_paper" value="calque">

                            <label>Calque</label>

                        </p>

                    </div>

                    <div class="faconnage">

                        <h3>Façonnage:</h3>

                        <p class="half"><input type="radio" required name="shaping"
                                value="Pilié"><label>Pilié</label></p>

                        <p class="half"><input type="radio" required name="shaping"
                                value="Roulé"><label>Roulé</label></p>

                    </div>

                    <div class="nombre">

                        <p class="half"><label>Nombre d'exemplaires souhaité</label>

                            <input type="number" required min="1" name="no_of_copies" placeholder="Nombre d'exemplaires souhaité" id="no_of_copies">

                        </p>

                    </div>

                    <div class="fichier-joindre">

                        <label class="btn verse">

                            <input type="file" name="image2" placeholder="Ajoutez des fichiers">

                            <i class="fas fa-upload"></i> Ajoutez des fichiers

                        </label>

                            <!-- <label class="custom-file-upload">
                                                
                                <input type="file"/>
                
                                <i class="fa fa-cloud-upload"></i> Custom Upload
                
                            </label> -->

                    </div>

                </div>

                <div class="form-step step-3">

                    <div class="step">
                        <span>3</span> Sélectionnez le prix et la date de livraison
                    </div>

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

                            <!-- <div class="row">

                                <div class="qte selected">100</div>

                                <div class="price j2 selected">125</div>

                                <div class="price j3">Prix J+3</div>

                                <div class="price j4">Prix J+4</div>

                                <div class="price j5">Prix J+5</div>

                            </div>

                            <div class="row">

                                <div class="qte">250</div>

                                <div class="price j2">236</div>

                                <div class="price j3">Prix J+3</div>

                                <div class="price j4">Prix J+4</div>

                                <div class="price j5">Prix J+5</div>

                            </div>

                            <div class="row">

                                <div class="qte">500</div>

                                <div class="price j2">489</div>

                                <div class="price j3">Prix J+3</div>

                                <div class="price j4">Prix J+4</div>

                                <div class="price j5">Prix J+5</div>

                            </div>

                            <div class="row">

                                <div class="qte">1000</div>

                                <div class="price j2">736</div>

                                <div class="price j3">Prix J+3</div>

                                <div class="price j4">Prix J+4</div>

                                <div class="price j5">Prix J+5</div>

                            </div>

                            <div class="row">

                                <div class="qte">2500</div>

                                <div class="price j2">1600</div>

                                <div class="price j3">Prix J+3</div>

                                <div class="price j4">Prix J+4</div>

                                <div class="price j5">Prix J+5</div>

                            </div>

                            <div class="row">

                                <div class="qte">5000</div>

                                <div class="price j2">3150</div>

                                <div class="price j3">Prix J+3</div>

                                <div class="price j4">Prix J+4</div>

                                <div class="price j5">Prix J+5</div>

                            </div>

                            <div class="row">

                                <div class="qte">7500</div>

                                <div class="price j2">5410</div>

                                <div class="price j3">Prix J+3</div>

                                <div class="price j4">Prix J+4</div>

                                <div class="price j5">Prix J+5</div>

                            </div>

                            <div class="row">

                                <div class="qte">10000</div>

                                <div class="price j2">6320</div>

                                <div class="price j3">Prix J+3</div>

                                <div class="price j4">Prix J+4</div>

                                <div class="price j5">Prix J+5</div>

                            </div>

                            <div class="row">

                                <div class="qte">15000</div>

                                <div class="price j2">7900</div>

                                <div class="price j3">Prix J+3</div>

                                <div class="price j4">Prix J+4</div>

                                <div class="price j5">Prix J+5</div>

                            </div>

                            <div class="row">

                                <div class="qte">20000</div>

                                <div class="price j2">8320</div>

                                <div class="price j3">Prix J+3</div>

                                <div class="price j4">Prix J+4</div>

                                <div class="price j5">Prix J+5</div>

                            </div>

                            <div class="row">

                                <div class="qte">30000</div>

                                <div class="price j2">12300</div>

                                <div class="price j3">Prix J+3</div>

                                <div class="price j4">Prix J+4</div>

                                <div class="price j5">Prix J+5</div>

                            </div>

                            <div class="row">

                                <div class="qte">40000</div>

                                <div class="price j2">15650</div>

                                <div class="price j3">Prix J+3</div>

                                <div class="price j4">Prix J+4</div>

                                <div class="price j5">Prix J+5</div>

                            </div>

                            <div class="row">

                                <div class="qte">50000</div>

                                <div class="price j2">18640</div>

                                <div class="price j3">Prix J+3</div>

                                <div class="price j4">Prix J+4</div>

                                <div class="price j5">Prix J+5</div>

                            </div> -->

                        </div>

                        <input type="text" name="livraison-date" id="livraison_date" value="">

                    </div>

                    <!-- <input class="btn bg-btn" type="submit" name="submit" value="Commander"> -->

                    <aside>

                        <h2>Récapitulatif de votre panier<span></span></h2>

                        <table>

                            <tr>

                                <th class="designation">Liste des fichiers</th>

                                <input type="hidden" name="product_quantity" id="product_quantity">



                                <th class="qte">Quantité</th>

                                <input type="hidden" name="product_cart_totalht" id="product_cart_totalht">



                                <th class="prix">Total HT</th>

                            </tr>

                            <tr class="item">

                                <input type="hidden" name="product_cart_name" value="Nom de plan N°1"
                                    id="product_cart_name">

                                <td class="designation">Nom de plan N°1</td>

                                <td class="qte">123</td>

                                <td class="prix">650,00 €</td>

                            </tr>

                            <tr class="tax-tva">

                                <input type="hidden" name="product_cart_tva" id="product_cart_tva">

                                <td>TVA 20%</td>

                                <td class=""></td>

                                <td class="prix"></td>

                            </tr>

                            <tr class="total">

                                <input type="hidden" name="product_cart_totlettc" id="product_cart_totlettc">



                                <td>Total TTC</td>

                                <td></td>

                                <td class="prix"></td>

                            </tr>

                        </table>

                        <input type="hidden" name="product_cart_date" id="product_cart_date">



                        <p class="livraison-date">
                            <span>Livraison le:</span> 
                            <span class="date"></span>

                        </p>

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

                    </aside>

                </div>

            </form>

        </div>
    </section>


@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/asset/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/dragdrop/script.js') }}"></script>

@stop
