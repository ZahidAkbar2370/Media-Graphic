@extends('layouts/default')
@section('title')
    Home
    @parent
@stop
@section('header_styles')

@stop

@section('content')

    <main class="commander">
        <section class="content">
            <h1>Commande de dossier de plan</h1>
            <div id="commande-dossier-plan">
                <form id="commander-dossier-plan" method="post" action="{{ url('plans_life') }}">
                    @csrf
                    <div class="form-step step-1 opned">
                        <div class="step"><span>1</span> Configurez le produit</div>
                        <div class="nombre">
                            <p class="half">
                                <label>Nbre d'exemplaires du dossier souhaité</label>
                                <input type="number" required min="1" name="quantity"
                                    placeholder="Nombre d'exemplaires souhaité">
                            </p>
                        </div>
                        <div class="inpression">
                            <p class="half">
                                <label>Impression</label>
                                <select id="inpression" name="Impression">
                                    <option value="not selected">-- Select --</option>
                                    <option value="à l'identique">à l'identique</option>
                                    <option value="Noir & Blanc">Noir & Blanc</option>
                                </select>
                            </p>
                        </div>
                        <div class="facconage">
                            <p class="half">
                                <label>Façonnage des documents intérieurs</label>
                                <select id="faconnage" name="shaping">
                                    <option value="not selected">-- Select --</option>
                                    <option value="sans façonnage">Sans façonnage</option>
                                    <option value="façonnage à l'identique">Façonnage à l'identique</option>
                                </select>
                                <span class="help-info"><i class="fas fa-info-circle"></i>
                                    <span class="help-info-content">Le façonnage est l'action qui donne aux imprimés leur
                                        forme définitive: pliage, agrafage, reliure etc…</span>
                                </span>
                            </p>
                        </div>
                        <div class="finition">
                            <p class="half">
                                <label>Finition</label>
                                <select id="finition" name="finishing">
                                    <option value="not selected">-- Select --</option>
                                    <option value="sans finition">Sans finition</option>
                                    <option value="dossier à sangle rouge">Dossier à sangle rouge</option>
                                    <option value="dossier à sangle bleu">Dossier à sangle bleu</option>
                                    <option value="dossier à sangle noir">Dossier à sangle noir</option>
                                </select>
                                <span class="help-info"><i class="fas fa-info-circle"></i>
                                    <span class="help-info-content">Indiquez ici si vous souhaitez que les documents soient
                                        insérés dans un dossier</span>
                                </span>
                            </p>
                        </div>
                        <div class="cartouche">
                            <h3>Cartouche</h3>
                            <p class="half">
                                <label><input type="radio" name="catridge" value="yes">Oui</label>
                                <label><input type="radio" name="catridge" value="no">Non</label>
                            </p>
                            <span class="note hide">Merci de penser à joindre le modèle de votre cartouche</span>
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
                                <i class="fas fa-info-circle"></i><span class="help-info-content">Vous pouvez déposer
                                    jusqu'à 20 fichiers. La taille limite par fichier est de 500Mo.<br>
                                    Si votre fichier dépasse la taille maximum, veuillez nous contacter</span>
                            </span>
                        </div>
                        <button class="btn bg-btn" type="submit" name="submit" value="Commander">Commander
                            <i class="fas fa-arrow-right"></i>
                        </button>
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
                <p><a href="nous-contacter.html" class="btn bg-btn">Nous contacter<i
                            class="fas fa-arrow-right"></i></a></p>
            </div>
        </div>
    </main>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
