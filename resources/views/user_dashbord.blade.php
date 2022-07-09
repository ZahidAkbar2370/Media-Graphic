@extends('layouts/default')
@section('title')
    Dashboard
    @parent
@stop
@section('header_styles')

@stop

@section('content')


    <main>
        <section class="content">
            <aside>
                <img src="{{ asset('frontend_assets/images/mon-compte.svg') }}" width="150">
            </aside>
            <div class="content-target menu">
                <nav>
                    <ul>
                        <li>
                            <a class="vos-commandes" href="{{ url('mydevis') }}">
                                <span class="icone">
                                    <img src="{{ asset('frontend_assets/images/compte_cmd.svg') }}">
                                </span>
                                <span class="title">Devis</span>
                                <span class="desc">Voir votre devis.</span>
                            </a>
                        </li>
                        <li>
                            <a class="vos-commandes" href="{{ url('mycommandes') }}">
                                <span class="icone">
                                    <img src="{{ asset('frontend_assets/images/compte_cmd.svg') }}">
                                </span>
                                <span class="title">Mes commandes</span>
                                <span class="desc">Suivre ou retourner mes commandes.</span>
                            </a>
                        </li>
                        <li><a class="modes-paiement" href="#!">
                                <span class="icone">
                                    <img src="{{ asset('frontend_assets/images/compte_pai.svg') }}">
                                </span>

                                <span class="title">Modes de paiement</span>
                                <span class="desc">Gérer les modes de paiement et les paramètres.</span>
                            </a>
                        </li>
                        <li><a class="mes-adresses" href="#!">
                                <span class="icone">
                                    <img src="{{ asset('frontend_assets/images/compte_adr.svg') }}">
                                </span>
                                <span class="title">Mon Profil</span>
                                <span class="desc">Modifier mes coordonnées et préférences.</span>
                            </a>
                        </li>
                        <!-- <li>
                                                <a class="aides" href="#!">
                                                    <span class="icone">
                                                        <img src="images/compte_aid.svg">
                                                    </span>
                                                    <span class="title">Aide</span>
                                                    <span class="desc"></span>
                                                </a>
                                            </li> -->
                        <li>
                            <a class="security" href="#!">
                                <span class="icone">
                                    <img src="{{ asset('frontend_assets/images/compte_cox.svg') }}">
                                </span>

                                <span class="title">Connexion & Sécurité</span>
                                <span class="desc">Modifier l'adresse e-mail, le numéro de téléphone
                                    mobile.</span>
                            </a>
                        </li>
                        <li>
                            <a class="messagerie" href="#!">
                                <span class="icone">
                                    <img src="{{ asset('frontend_assets/images/compte_msg.svg') }}">
                                </span>
                                <span class="title">Messagerie</span>
                                <span class="desc">Consulter nos messages échnagés</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div id="vos-commandes" class="content-target hide">
                <h2>Mes commandes</h2>
                <table>
                    <tbody>
                        <tr>
                            <th class="number">N°</th>
                            <th class="date">Date</th>
                            <th class="designation">Description</th>
                            <th class="statut">Statut</th>
                            <th class="livraison">Livraison</th>
                            <th class="montant">Montant</th>
                            <th class="actions">Actions</th>
                        </tr>
                        <tr class="item">
                            <td class="number">12365</td>
                            <td class="date">26/01/2021</td>
                            <td class="designation">Société Google inc <span class="product">MÉMOIRE &amp;
                                    RAPPORT</span></td>
                            <td class="statut">Términée</td>
                            <td class="montant">28/01/2021</td>
                            <td class="montant">150,00 €</td>
                            <td class="actions"><a href="mon-compte.html title=" title="Afficher la commande"><i
                                        class="far fa-eye"></i> </a><a href="mon-compte.html" title="Commande payée"><i
                                        class="fas fa-check-double"></i> </a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="messagerie" class="content-target hide">
                <h2>Messagerie</h2>
                <!-- <table>
                                        <tr>
                                            <th class="number">N°</th>
                                            <th class="designation">Description</th>
                                            <th class="statut">Statut</th>
                                            <th class="montant">Montant</th>
                                        </tr>
                                        <tr class="item">
                                            <td class="number">23</td>
                                            <td class="designation">Retour des affiches</td>
                                            <td class="statut">En cours</td>
                                            <td class="montant">762,00 €</td>
                                        </tr>
                                    </table> -->

                <table>
                    <tr>
                        <th class="number">De</th>
                        <th class="designation">Message</th>
                        <th class="statut">Statut</th>
                        <th class="montant">Date</th>
                    </tr>
                    <tr class="item">
                        <td class="number">Admin</td>
                        <td class="designation"><a href="#!">Fusce risus nisl viverra et...</a></td>
                        <td class="statut">Non-lu</td>
                        <td class="montant">12/10/2021</td>
                    </tr>
                    <tr class="item">
                        <td class="number">Support</td>
                        <td class="designation"><a href="#!">Aenean commodo ligula eget dolor..</a></td>
                        <td class="statut">Non-lu</td>
                        <td class="montant">23/12/2021</td>
                    </tr>
                </table>
            </div>
            <div id="mes-adresses" class="content-target hide">
                <h2>Mon profil</h2>
                <p><strong>Civilité:</strong> Monsieur</p>
                <p><strong>Nom:</strong> Joe</p>
                <p><strong>Préom:</strong> Bidden</p>
                <p><strong>Téléphone:</strong> 01 23 45 67 89</p>
                <p><strong>Email:</strong> JoeBidden@mail.me</p>
                <p class="my_address_1"><strong>Adresse 1:</strong> 50, Rue des merveilles 72000, Paris - France </p>
                <p class="my_address_2"><strong>Adresse 2:</strong> 36, Rue de paradis 23000, Lion - France </p>
                <p class="my_address_3"><strong>Adresse 3:</strong> Bloc AF Résidence de Napolion 20000, Toulouse - France
                </p>
                <a href="#!"><i class="fas fa-plus"></i> Nouvelle adresse</a>
                <a class="edit" href="#!"><i class="far fa-edit"></i> Modifier mon profil</a>
            </div>
            <div id="modes-paiement" class="content-target hide">
                <h2>Modes de paiement</h2>
                <p><strong>Carte de crédit:</strong> 5045***25</p>
                <p><strong>Carte de crédit:</strong> 4545***65</p>
                <p><strong>Paypal:</strong> ton***pal@email.com</p>
                <a href="#!" class="add-new"><i class="fas fa-plus"></i> Nouveau mode de paiement</a>
                <form id="new-paiement-method" class="hide">
                    <div class="paiement">
                        <label class="half first paypal"><input type="radio" name="paiement" class="paypal"
                                value="paypal"> <i class="fab fa-paypal"></i> PayPal</label>
                        <label class="half card"><input type="radio" name="paiement" class="card"
                                value="card"> <i class="far fa-credit-card"></i> Carte bancaire</label>
                        <div class="card hide">
                            <label class="half first">Numéro de la carte: <input type="text" name="card-number"></label>
                            <label class="half">Date d'expiration: <input type="text" name="expiration-date"
                                    placeholder="dd-aaaa"></label><label class="half">CCV: <input type="text"
                                    name="ccv" placeholder="ccv"></label>
                        </div>
                    </div>
                </form>
            </div>
            <div id="security" class="content-target hide">
                <h2>Connexion & Sécurité</h2>
                <p class="my_mail"><strong>Adresse email:</strong> meconatcter@mail.com <a href="#!"><i
                            class="far fa-edit"></i> Modifier</a></p>
                <p class="my_pass"><strong>Mot de passe:</strong> ****** <a href="#!"><i class="far fa-edit"></i>
                        Modifier</a></p>
            </div>
            <div id="aides" class="content-target hide">
                <!-- <h2>Mes informations personnelle</h2>
                                    <p><strong>Civilité:</strong> Monsieur</p>
                                    <p><strong>Nom:</strong> TEST</p>
                                    <p><strong>Prénom:</strong> Client</p>
                                    <div class="separator"></div>
                                    <p><strong>Téléphone:</strong> (+33) 01 23 45 67 89</p>
                                    <p><strong>Email:</strong> test-client@mail.me</p>
                                    <div class="separator"></div>
                                    <p><strong>Mot de passe:</strong> ******</p>
                                    <a href="#!"><i class="fas fa-edit"></i>Changer mes infos</a> -->
                <h2>Aide</h2>
                <div class="ques-wrapper opned">
                    <div class="ques"><span class="fas fa-question-circle"></span> Question A</div>
                    <div class="rep">
                        <p>Suspendisse eu ligula. Duis lobortis massa imperdiet quam. In turpis. Sed aliquam ultrices
                            mauris. Praesent adipiscing.</p>

                        <p>Duis vel nibh at velit scelerisque suscipit. Morbi ac felis. Nullam accumsan lorem in dui.
                            Praesent nonummy mi in odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius
                            nisi, condimentum viverra felis nunc et lorem.</p>

                        <p>Duis leo. Quisque malesuada placerat nisl. Nam adipiscing. Vivamus consectetuer hendrerit lacus.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac
                            dui quis mi consectetuer lacinia.</p>

                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras
                            dapibus. Phasellus gravida semper nisi. Vivamus in erat ut urna cursus vestibulum. Fusce
                            vulputate eleifend sapien.</p>

                        <p>Praesent egestas tristique nibh. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                            imperdiet, leo. Phasellus gravida semper nisi. Mauris turpis nunc, blandit et, volutpat
                            molestie, porta ut, ligula. Vestibulum dapibus nunc ac augue.</p>
                    </div>

                </div>
                <div class="ques-wrapper">
                    <div class="ques"><span class="fas fa-question-circle"></span> Question B</div>
                    <div class="rep">
                        <p>Suspendisse eu ligula. Duis lobortis massa imperdiet quam. In turpis. Sed aliquam ultrices
                            mauris. Praesent adipiscing.</p>

                        <p>Duis vel nibh at velit scelerisque suscipit. Morbi ac felis. Nullam accumsan lorem in dui.
                            Praesent nonummy mi in odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius
                            nisi, condimentum viverra felis nunc et lorem.</p>

                        <p>Duis leo. Quisque malesuada placerat nisl. Nam adipiscing. Vivamus consectetuer hendrerit lacus.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac
                            dui quis mi consectetuer lacinia.</p>

                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras
                            dapibus. Phasellus gravida semper nisi. Vivamus in erat ut urna cursus vestibulum. Fusce
                            vulputate eleifend sapien.</p>

                        <p>Praesent egestas tristique nibh. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                            imperdiet, leo. Phasellus gravida semper nisi. Mauris turpis nunc, blandit et, volutpat
                            molestie, porta ut, ligula. Vestibulum dapibus nunc ac augue.</p>
                    </div>
                </div>
                <div class="ques-wrapper">
                    <div class="ques"><span class="fas fa-question-circle"></span> Question C</div>
                    <div class="rep">
                        <p>Suspendisse eu ligula. Duis lobortis massa imperdiet quam. In turpis. Sed aliquam ultrices
                            mauris. Praesent adipiscing.</p>

                        <p>Duis vel nibh at velit scelerisque suscipit. Morbi ac felis. Nullam accumsan lorem in dui.
                            Praesent nonummy mi in odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius
                            nisi, condimentum viverra felis nunc et lorem.</p>

                        <p>Duis leo. Quisque malesuada placerat nisl. Nam adipiscing. Vivamus consectetuer hendrerit lacus.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac
                            dui quis mi consectetuer lacinia.</p>

                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras
                            dapibus. Phasellus gravida semper nisi. Vivamus in erat ut urna cursus vestibulum. Fusce
                            vulputate eleifend sapien.</p>

                        <p>Praesent egestas tristique nibh. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                            imperdiet, leo. Phasellus gravida semper nisi. Mauris turpis nunc, blandit et, volutpat
                            molestie, porta ut, ligula. Vestibulum dapibus nunc ac augue.</p>
                    </div>
                </div>
                <div class="ques-wrapper">
                    <div class="ques"><span class="fas fa-question-circle"></span> Question D</div>
                    <div class="rep">
                        <p>Suspendisse eu ligula. Duis lobortis massa imperdiet quam. In turpis. Sed aliquam ultrices
                            mauris. Praesent adipiscing.</p>

                        <p>Duis vel nibh at velit scelerisque suscipit. Morbi ac felis. Nullam accumsan lorem in dui.
                            Praesent nonummy mi in odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius
                            nisi, condimentum viverra felis nunc et lorem.</p>

                        <p>Duis leo. Quisque malesuada placerat nisl. Nam adipiscing. Vivamus consectetuer hendrerit lacus.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac
                            dui quis mi consectetuer lacinia.</p>

                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras
                            dapibus. Phasellus gravida semper nisi. Vivamus in erat ut urna cursus vestibulum. Fusce
                            vulputate eleifend sapien.</p>

                        <p>Praesent egestas tristique nibh. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                            imperdiet, leo. Phasellus gravida semper nisi. Mauris turpis nunc, blandit et, volutpat
                            molestie, porta ut, ligula. Vestibulum dapibus nunc ac augue.</p>
                    </div>
                </div>
                <div class="ques-wrapper">
                    <div class="ques"><span class="fas fa-question-circle"></span> Question E</div>
                    <div class="rep">
                        <p>Suspendisse eu ligula. Duis lobortis massa imperdiet quam. In turpis. Sed aliquam ultrices
                            mauris. Praesent adipiscing.</p>

                        <p>Duis vel nibh at velit scelerisque suscipit. Morbi ac felis. Nullam accumsan lorem in dui.
                            Praesent nonummy mi in odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius
                            nisi, condimentum viverra felis nunc et lorem.</p>

                        <p>Duis leo. Quisque malesuada placerat nisl. Nam adipiscing. Vivamus consectetuer hendrerit lacus.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac
                            dui quis mi consectetuer lacinia.</p>

                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras
                            dapibus. Phasellus gravida semper nisi. Vivamus in erat ut urna cursus vestibulum. Fusce
                            vulputate eleifend sapien.</p>

                        <p>Praesent egestas tristique nibh. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                            imperdiet, leo. Phasellus gravida semper nisi. Mauris turpis nunc, blandit et, volutpat
                            molestie, porta ut, ligula. Vestibulum dapibus nunc ac augue.</p>
                    </div>
                </div>
                <div class="ques-wrapper">
                    <div class="ques"><span class="fas fa-question-circle"></span> Question F</div>
                    <div class="rep">
                        <p>Suspendisse eu ligula. Duis lobortis massa imperdiet quam. In turpis. Sed aliquam ultrices
                            mauris. Praesent adipiscing.</p>

                        <p>Duis vel nibh at velit scelerisque suscipit. Morbi ac felis. Nullam accumsan lorem in dui.
                            Praesent nonummy mi in odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius
                            nisi, condimentum viverra felis nunc et lorem.</p>

                        <p>Duis leo. Quisque malesuada placerat nisl. Nam adipiscing. Vivamus consectetuer hendrerit lacus.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac
                            dui quis mi consectetuer lacinia.</p>

                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras
                            dapibus. Phasellus gravida semper nisi. Vivamus in erat ut urna cursus vestibulum. Fusce
                            vulputate eleifend sapien.</p>

                        <p>Praesent egestas tristique nibh. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                            imperdiet, leo. Phasellus gravida semper nisi. Mauris turpis nunc, blandit et, volutpat
                            molestie, porta ut, ligula. Vestibulum dapibus nunc ac augue.</p>
                    </div>
                </div>
                <div class="ques-wrapper">
                    <div class="ques"><span class="fas fa-question-circle"></span> Question G</div>
                    <div class="rep">
                        <p>Suspendisse eu ligula. Duis lobortis massa imperdiet quam. In turpis. Sed aliquam ultrices
                            mauris. Praesent adipiscing.</p>

                        <p>Duis vel nibh at velit scelerisque suscipit. Morbi ac felis. Nullam accumsan lorem in dui.
                            Praesent nonummy mi in odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius
                            nisi, condimentum viverra felis nunc et lorem.</p>

                        <p>Duis leo. Quisque malesuada placerat nisl. Nam adipiscing. Vivamus consectetuer hendrerit lacus.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac
                            dui quis mi consectetuer lacinia.</p>

                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras
                            dapibus. Phasellus gravida semper nisi. Vivamus in erat ut urna cursus vestibulum. Fusce
                            vulputate eleifend sapien.</p>

                        <p>Praesent egestas tristique nibh. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                            imperdiet, leo. Phasellus gravida semper nisi. Mauris turpis nunc, blandit et, volutpat
                            molestie, porta ut, ligula. Vestibulum dapibus nunc ac augue.</p>
                    </div>
                </div>
            </div>
            <div class="retour hide">
                <a href="" class="btn"><i class="fas fa-arrow-left"></i> Retour</a>
            </div>
        </section>

    </main>



@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
