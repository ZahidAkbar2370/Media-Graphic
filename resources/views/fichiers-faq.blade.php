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
        <aside>
            <!-- <nav>
             <ul>
              <li><a class="vos-commandes current" href="#!">Mes commandes</a></li>
              <li><a class="messagerie" href="#!">Mes avoirs</a></li>
              <li><a class="mes-adresses" href="#!">Mes adresses</a></li>
              <li><a class="aides" href="#!">Mes informations personnelles</a></li>
             </ul>
            </nav> -->
            <img src="{{ asset('frontend_assets/images/mon-compte.svg') }}">
        </aside>
        <!-- <div class="content-target menu">
            <nav>
             <ul>
              <li>
               <a class="vos-commandes" href="#!">
                <span class="icone">
                 <img src="images/compte_cmd.svg">
                </span>
                <span class="title">Vos commandes</span>
                <span class="desc">Suivre ou retourner mes commandes.</span>
               </a>
              </li>
              <li><a class="modes-paiement" href="#!">
                <span class="icone">
                 <img src="images/compte_pai.svg">
                </span>
                
                <span class="title">Modes de paiement</span>
                <span class="desc">Gérer les modes de paiement et les paramètres.</span>
               </a>
              </li>
              <li><a class="mes-adresses" href="#!">
                <span class="icone">
                 <img src="images/compte_adr.svg">
                </span>
                <span class="title">Mon Profil</span>
                <span class="desc">Modifier mes coordonnées et préférences.</span>
               </a>
              </li>
              <li>
               <a class="messagerie" href="#!">
                <span class="icone">
                 <img src="images/compte_cox.svg">
                </span>
                
                <span class="title">Connexion & Sécurité</span>
                <span class="desc">Modifier l'adresse e-mail, le numéro de téléphone mobile.</span>
               </a>
              </li>
              <li>
               <a class="messagerie" href="#!">
                <span class="icone">
                 <img src="images/compte_msg.svg">
                </span>
                <span class="title">Messagerie</span>
                <span class="desc">Consulter nos messages échnagés</span>
               </a>
              </li>
             </ul>
            </nav>
           </div> -->

        <div id="vos-fichers" class="content-target">
            <h2>Vos fichiers</h2>
            <table>
                <tr>
                    <th class="designation">Nom de fichier</th>
                    <th class="statut">Format</th>
                    <th class="montant">Taille</th>
                    <th class="actions">Action</th>
                </tr>
                <tr class="item">
                    <td class="designation">Impression des cartes visites</td>
                    <td class="statut">PDF</td>
                    <td class="montant">1500 Ko</td>
                    <td class="actions">
                        <a class="edit" href="#!"><i class="fas fa-edit"></i></a>
                        <a class="delete" href="#!"><i class="fas fa-trash-alt"></i></a>
                        <a class="view" href="#!"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
                <tr class="item">
                    <td class="designation">Plan de projet centre ville</td>
                    <td class="statut">PDF</td>
                    <td class="montant">13200 Ko</td>
                    <td class="actions">
                        <a class="edit" href="#!"><i class="fas fa-edit"></i></a>
                        <a class="delete" href="#!"><i class="fas fa-trash-alt"></i></a>
                        <a class="view" href="#!"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
                <tr class="item">
                    <td class="designation">Carte de visite Google</td>
                    <td class="statut">PDF</td>
                    <td class="montant">6800 Ko</td>
                    <td class="actions">
                        <a class="edit" href="#!"><i class="fas fa-edit"></i></a>
                        <a class="delete" href="#!"><i class="fas fa-trash-alt"></i></a>
                        <a class="view" href="#!"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
            </table>
        </div>

        <div id="aides" class="content-target">
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
            <h2>FAQ & Aide</h2>
            <div class="ques-wrapper opned">
                <div class="ques"><span class="fas fa-question-circle"></span> Question A</div>
                <div class="rep">
                    <p>Suspendisse eu ligula. Duis lobortis massa imperdiet quam. In turpis. Sed aliquam ultrices mauris.
                        Praesent adipiscing.</p>

                    <p>Duis vel nibh at velit scelerisque suscipit. Morbi ac felis. Nullam accumsan lorem in dui. Praesent
                        nonummy mi in odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi,
                        condimentum viverra felis nunc et lorem.</p>

                    <p>Duis leo. Quisque malesuada placerat nisl. Nam adipiscing. Vivamus consectetuer hendrerit lacus.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui
                        quis mi consectetuer lacinia.</p>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras dapibus.
                        Phasellus gravida semper nisi. Vivamus in erat ut urna cursus vestibulum. Fusce vulputate eleifend
                        sapien.</p>

                    <p>Praesent egestas tristique nibh. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                        imperdiet, leo. Phasellus gravida semper nisi. Mauris turpis nunc, blandit et, volutpat molestie,
                        porta ut, ligula. Vestibulum dapibus nunc ac augue.</p>
                </div>

            </div>
            <div class="ques-wrapper">
                <div class="ques"><span class="fas fa-question-circle"></span> Question B</div>
                <div class="rep">
                    <p>Suspendisse eu ligula. Duis lobortis massa imperdiet quam. In turpis. Sed aliquam ultrices mauris.
                        Praesent adipiscing.</p>

                    <p>Duis vel nibh at velit scelerisque suscipit. Morbi ac felis. Nullam accumsan lorem in dui. Praesent
                        nonummy mi in odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi,
                        condimentum viverra felis nunc et lorem.</p>

                    <p>Duis leo. Quisque malesuada placerat nisl. Nam adipiscing. Vivamus consectetuer hendrerit lacus.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui
                        quis mi consectetuer lacinia.</p>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras dapibus.
                        Phasellus gravida semper nisi. Vivamus in erat ut urna cursus vestibulum. Fusce vulputate eleifend
                        sapien.</p>

                    <p>Praesent egestas tristique nibh. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                        imperdiet, leo. Phasellus gravida semper nisi. Mauris turpis nunc, blandit et, volutpat molestie,
                        porta ut, ligula. Vestibulum dapibus nunc ac augue.</p>
                </div>
            </div>
            <div class="ques-wrapper">
                <div class="ques"><span class="fas fa-question-circle"></span> Question C</div>
                <div class="rep">
                    <p>Suspendisse eu ligula. Duis lobortis massa imperdiet quam. In turpis. Sed aliquam ultrices mauris.
                        Praesent adipiscing.</p>

                    <p>Duis vel nibh at velit scelerisque suscipit. Morbi ac felis. Nullam accumsan lorem in dui. Praesent
                        nonummy mi in odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi,
                        condimentum viverra felis nunc et lorem.</p>

                    <p>Duis leo. Quisque malesuada placerat nisl. Nam adipiscing. Vivamus consectetuer hendrerit lacus.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui
                        quis mi consectetuer lacinia.</p>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras dapibus.
                        Phasellus gravida semper nisi. Vivamus in erat ut urna cursus vestibulum. Fusce vulputate eleifend
                        sapien.</p>

                    <p>Praesent egestas tristique nibh. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                        imperdiet, leo. Phasellus gravida semper nisi. Mauris turpis nunc, blandit et, volutpat molestie,
                        porta ut, ligula. Vestibulum dapibus nunc ac augue.</p>
                </div>
            </div>
            <div class="ques-wrapper">
                <div class="ques"><span class="fas fa-question-circle"></span> Question D</div>
                <div class="rep">
                    <p>Suspendisse eu ligula. Duis lobortis massa imperdiet quam. In turpis. Sed aliquam ultrices mauris.
                        Praesent adipiscing.</p>

                    <p>Duis vel nibh at velit scelerisque suscipit. Morbi ac felis. Nullam accumsan lorem in dui. Praesent
                        nonummy mi in odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi,
                        condimentum viverra felis nunc et lorem.</p>

                    <p>Duis leo. Quisque malesuada placerat nisl. Nam adipiscing. Vivamus consectetuer hendrerit lacus.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui
                        quis mi consectetuer lacinia.</p>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras dapibus.
                        Phasellus gravida semper nisi. Vivamus in erat ut urna cursus vestibulum. Fusce vulputate eleifend
                        sapien.</p>

                    <p>Praesent egestas tristique nibh. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                        imperdiet, leo. Phasellus gravida semper nisi. Mauris turpis nunc, blandit et, volutpat molestie,
                        porta ut, ligula. Vestibulum dapibus nunc ac augue.</p>
                </div>
            </div>
            <div class="ques-wrapper">
                <div class="ques"><span class="fas fa-question-circle"></span> Question E</div>
                <div class="rep">
                    <p>Suspendisse eu ligula. Duis lobortis massa imperdiet quam. In turpis. Sed aliquam ultrices mauris.
                        Praesent adipiscing.</p>

                    <p>Duis vel nibh at velit scelerisque suscipit. Morbi ac felis. Nullam accumsan lorem in dui. Praesent
                        nonummy mi in odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi,
                        condimentum viverra felis nunc et lorem.</p>

                    <p>Duis leo. Quisque malesuada placerat nisl. Nam adipiscing. Vivamus consectetuer hendrerit lacus.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui
                        quis mi consectetuer lacinia.</p>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras dapibus.
                        Phasellus gravida semper nisi. Vivamus in erat ut urna cursus vestibulum. Fusce vulputate eleifend
                        sapien.</p>

                    <p>Praesent egestas tristique nibh. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                        imperdiet, leo. Phasellus gravida semper nisi. Mauris turpis nunc, blandit et, volutpat molestie,
                        porta ut, ligula. Vestibulum dapibus nunc ac augue.</p>
                </div>
            </div>
            <div class="ques-wrapper">
                <div class="ques"><span class="fas fa-question-circle"></span> Question F</div>
                <div class="rep">
                    <p>Suspendisse eu ligula. Duis lobortis massa imperdiet quam. In turpis. Sed aliquam ultrices mauris.
                        Praesent adipiscing.</p>

                    <p>Duis vel nibh at velit scelerisque suscipit. Morbi ac felis. Nullam accumsan lorem in dui. Praesent
                        nonummy mi in odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi,
                        condimentum viverra felis nunc et lorem.</p>

                    <p>Duis leo. Quisque malesuada placerat nisl. Nam adipiscing. Vivamus consectetuer hendrerit lacus.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui
                        quis mi consectetuer lacinia.</p>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras dapibus.
                        Phasellus gravida semper nisi. Vivamus in erat ut urna cursus vestibulum. Fusce vulputate eleifend
                        sapien.</p>

                    <p>Praesent egestas tristique nibh. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                        imperdiet, leo. Phasellus gravida semper nisi. Mauris turpis nunc, blandit et, volutpat molestie,
                        porta ut, ligula. Vestibulum dapibus nunc ac augue.</p>
                </div>
            </div>
            <div class="ques-wrapper">
                <div class="ques"><span class="fas fa-question-circle"></span> Question G</div>
                <div class="rep">
                    <p>Suspendisse eu ligula. Duis lobortis massa imperdiet quam. In turpis. Sed aliquam ultrices mauris.
                        Praesent adipiscing.</p>

                    <p>Duis vel nibh at velit scelerisque suscipit. Morbi ac felis. Nullam accumsan lorem in dui. Praesent
                        nonummy mi in odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi,
                        condimentum viverra felis nunc et lorem.</p>

                    <p>Duis leo. Quisque malesuada placerat nisl. Nam adipiscing. Vivamus consectetuer hendrerit lacus.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui
                        quis mi consectetuer lacinia.</p>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras dapibus.
                        Phasellus gravida semper nisi. Vivamus in erat ut urna cursus vestibulum. Fusce vulputate eleifend
                        sapien.</p>

                    <p>Praesent egestas tristique nibh. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                        imperdiet, leo. Phasellus gravida semper nisi. Mauris turpis nunc, blandit et, volutpat molestie,
                        porta ut, ligula. Vestibulum dapibus nunc ac augue.</p>
                </div>
            </div>
        </div>
        <div class="retour hide">
            <a href="" class="btn"><i class="fas fa-arrow-left"></i> Retour</a>
        </div>
    </section>

    <!-- END CHAT -->

    <!-- END CONTAINER -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
