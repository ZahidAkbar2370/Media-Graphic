@extends('admin/layouts/default')
@section('title')
    Dashboard
    @parent
@stop
@section('header_styles')

@stop

@section('content')

    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"></button>
                <h3>Widget Settings</h3>
            </div>
            <div class="modal-body"> Widget settings form goes here </div>
        </div>
        <div class="clearfix"></div>
        <div class="content ">
            <div class="page-title">
                <h3>Indicateurs Clé - Activité</h3>
            </div>
            <div id="container">
                <div class="row 1col">
                    <div class="col-md-6 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles blue added-margin">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Chiffre d'affaire HT</div>
                                <div class="heading"> <span class="animate-number" data-value="1236.56"
                                        data-animation-duration="1200">1 236,56</span> €</div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="26.8%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 12% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles green added-margin">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Chiffre d'affaire TTC</div>
                                <div class="heading"> <span class="animate-number" data-value="1483.87"
                                        data-animation-duration="1000">1 483.87</span> € </div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="79%">
                                    </div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 12% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Chiffre d'affaire par produit</h4>
                <div class="row 2col">
                    <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles blue added-margin">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Plan</div>
                                <div class="heading"> <span class="animate-number" data-value="236"
                                        data-animation-duration="1200">2 36</span> €</div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="26.8%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 4% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles green added-margin">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">MÉMOIRE &amp; RAPPORT</div>
                                <div class="heading"> <span class="animate-number" data-value="368"
                                        data-animation-duration="1200">3 68</span> €
                                </div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="79%">
                                    </div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 2% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 spacing-bottom">
                        <div class="tiles red added-margin">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">BROCHURE &amp; LIVRET</div>
                                <div class="heading"><span class="animate-number" data-value="175"
                                        data-animation-duration="1200">1 75</span> €</div>
                                <div class="progress transparent progress-white progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="45%">
                                    </div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 5% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="tiles purple added-margin">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">AFFICHE</div>
                                <div class="row-fluid">
                                    <div class="heading"> <span class="animate-number" data-value="1600"
                                            data-animation-duration="1200">1 600</span> €
                                    </div>
                                    <div class="progress transparent progress-white progress-small no-radius">
                                        <div class="progress-bar progress-bar-white animate-progress-bar"
                                            data-percentage="12%"></div>
                                    </div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 3% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row 3col m-t-40">
                    <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles blue added-margin" style="zoom: 1;">
                            <div class="tiles-body" style="background: var(--hover);">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Taux croissance CA HT/Année N-1</div>
                                <div class="heading"> <span class="animate-number" data-value="236.56"
                                        data-animation-duration="1200">2 36.56</span> %</div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="26.8%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 17% supérieur <span
                                            class="blend">cette année</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles green added-margin" style="background: var(--purple);">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Nbre commandes</div>
                                <div class="heading"> <span class="animate-number" data-value="1736"
                                        data-animation-duration="1200">1 736</span></div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="79%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 43% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 spacing-bottom">
                        <div class="tiles red added-margin">
                            <div class="tiles-body" style="background: var(--tur);">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Croissance nbre commande / N-1</div>
                                <div class="heading"><span class="animate-number" data-value="56"
                                        data-animation-duration="1200">5 6</span> %</div>
                                <div class="progress transparent progress-white progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="45%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 5% supérieur <span
                                            class="blend">cette année</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="tiles purple added-margin">
                            <div class="tiles-body" style="background: var(--b);">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Nbre nouveaux clients</div>
                                <div class="row-fluid">
                                    <div class="heading"> <span class="animate-number" data-value="84"
                                            data-animation-duration="1200">8 4</span></div>
                                    <div class="progress transparent progress-white progress-small no-radius">
                                        <div class="progress-bar progress-bar-white animate-progress-bar"
                                            data-percentage="12%"></div>
                                    </div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 3% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row 4col">
                    <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles blue added-margin" style="zoom: 1;">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Taux de conversion</div>
                                <div class="heading"> <span class="animate-number" data-value="236.56"
                                        data-animation-duration="1200">2 36.56</span> %</div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="26.8%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 45% supérieur <span
                                            class="blend">au mois dérnier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles green added-margin">
                            <div class="tiles-body" style="background: var(--b);">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Panier moyen</div>
                                <div class="heading"> <span class="animate-number" data-value="123"
                                        data-animation-duration="1200">1 23</span> €</div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="79%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 26% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 spacing-bottom">
                        <div class="tiles red added-margin">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Taux croissance panier moyen / N-1</div>
                                <div class="heading"><span class="animate-number" data-value="63"
                                        data-animation-duration="1200">6 3</span> %</div>
                                <div class="progress transparent progress-white progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="45%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 13% supérieur <span
                                            class="blend">cette année</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="m-t-40">Indicateurs Clé - Logistique</h3>
                <div class="row 5col">
                    <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles blue added-margin">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Frais de port réels TTC (FPR)</div>
                                <div class="heading"> <span class="animate-number" data-value="1632.87"
                                        data-animation-duration="1200">1 632.87</span> €</div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="26.8%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 36% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles green added-margin">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Frais de port facturés au clients TTC (FPF)</div>
                                <div class="heading"> <span class="animate-number" data-value="368"
                                        data-animation-duration="1200">3 68</span> €
                                </div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="79%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 29% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 spacing-bottom">
                        <div class="tiles red added-margin">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Perte de marge (FPF-FPR)</div>
                                <div class="heading"><span class="animate-number" data-value="175"
                                        data-animation-duration="1200">1 75</span> €</div>
                                <div class="progress transparent progress-white progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="45%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 7% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="tiles purple added-margin">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Perte de marge en % du CA</div>
                                <div class="row-fluid">
                                    <div class="heading"> <span class="animate-number" data-value="1600"
                                            data-animation-duration="1200">1 600</span> %
                                    </div>
                                    <div class="progress transparent progress-white progress-small no-radius">
                                        <div class="progress-bar progress-bar-white animate-progress-bar"
                                            data-percentage="12%"></div>
                                    </div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 3% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="m-t-40">Service client</h3>
                <div class="row 6col">
                    <div class="col-md-6 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles blue added-margin">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Nombre d'avoirs créés</div>
                                <div class="heading"> <span class="animate-number" data-value="13"
                                        data-animation-duration="1200">1 3</span></div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="26.8%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 12% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles green added-margin">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Montant d'avoirs créés</div>
                                <div class="heading"> <span class="animate-number" data-value="264.94"
                                        data-animation-duration="1200">2 64.94</span> € </div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="79%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 6% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row 7col">
                    <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles blue added-margin" style="zoom: 1;">
                            <div class="tiles-body" style="background: var(--hover);">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Nombre commandes annulées</div>
                                <div class="heading"> <span class="animate-number" data-value="4"
                                        data-animation-duration="1200">4</span></div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="26.8%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 1% supérieur <span
                                            class="blend">cette année</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles green added-margin" style="background: var(--purple);">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">En % du nbre de commande</div>
                                <div class="heading"> <span class="animate-number" data-value="2.5"
                                        data-animation-duration="1200">2.5</span> %</div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="79%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 3% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 spacing-bottom">
                        <div class="tiles red added-margin">
                            <div class="tiles-body" style="background: var(--tur);">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Montant cumulé des commandes annulées</div>
                                <div class="heading"><span class="animate-number" data-value="56"
                                        data-animation-duration="1200">56</span> €</div>
                                <div class="progress transparent progress-white progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="45%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 5% supérieur <span
                                            class="blend">cette année</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="tiles purple added-margin">
                            <div class="tiles-body" style="background: var(--b);">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">En % du CA</div>
                                <div class="row-fluid">
                                    <div class="heading"> <span class="animate-number" data-value="5.7"
                                            data-animation-duration="1200">5.7</span> %</div>
                                    <div class="progress transparent progress-white progress-small no-radius">
                                        <div class="progress-bar progress-bar-white animate-progress-bar"
                                            data-percentage="12%"></div>
                                    </div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 3% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row 8col m-b-60">
                    <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles blue added-margin" style="zoom: 1;">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Nombre commandes en anomalies</div>
                                <div class="heading"> <span class="animate-number" data-value="2"
                                        data-animation-duration="1200">2</span></div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="26.8%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; -50% inférieur <span
                                            class="blend">au mois dérnier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                        <div class="tiles green added-margin">
                            <div class="tiles-body" style="background: var(--b);">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Montant global des anomalies</div>
                                <div class="heading"> <span class="animate-number" data-value="345"
                                        data-animation-duration="1200">3 45</span> €</div>
                                <div class="progress transparent progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="79%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 26% supérieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 spacing-bottom">
                        <div class="tiles red added-margin">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">En % du CA</div>
                                <div class="heading"><span class="animate-number" data-value="3"
                                        data-animation-duration="3000">3</span> %</div>
                                <div class="progress transparent progress-white progress-small no-radius">
                                    <div class="progress-bar progress-bar-white animate-progress-bar"
                                        data-percentage="45%"></div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; 13% supérieur <span
                                            class="blend">cette année</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="tiles purple added-margin">
                            <div class="tiles-body">
                                <div class="controller">
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                                <div class="tiles-title">Produits en anomalie</div>
                                <div class="row-fluid">
                                    <div class="heading"> <span class="animate-number" data-value="2"
                                            data-animation-duration="1200">2</span></div>
                                    <div class="progress transparent progress-white progress-small no-radius">
                                        <div class="progress-bar progress-bar-white animate-progress-bar"
                                            data-percentage="12%"></div>
                                    </div>
                                </div>
                                <div class="description"><i class="icon-custom-up"></i><span
                                        class="text-white mini-description ">&nbsp; -30% inféieur <span
                                            class="blend">au mois dernier</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Indicateurs FIN -->
                <!-- <div class="row tiles-container spacing-bottom tiles grey">
            <div class="tiles white col-md-9 col-sm-9 no-padding">
              <div class="tiles-body">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="mini-chart-wrapper">
                      <div class="chart-details-wrapper">
                        <div class="chartname"> Nouvelles commandes </div>
                        <div class="chart-value"> 17,555 </div>
                      </div>
                      <div class="mini-chart">
                        <div id="mini-chart-orders"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="mini-chart-wrapper">
                      <div class="chart-details-wrapper">
                        <div class="chartname"> Balance </div>
                        <div class="chart-value"> $14,500 </div>
                      </div>
                      <div class="mini-chart">
                        <div id="mini-chart-other"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div id="ricksaw"></div>
              <div class="clearfix"></div>
            </div>
            <div class="col-md-3 col-sm-3 no-padding">
              <div class="tiles grey ">
                <div class="tiles white no-margin">
                  <div class="tiles-body">
                    <div class="tiles-title blend"> Toutes les commandes </div>
                    <div class="heading"> <span data-animation-duration="1000" data-value="432852" class="animate-number">0</span> </div>
                    44% supérieur <span class="blend">au mois dernier</span> </div>
                </div>
                <div id="legend"></div>
              </div>
            </div>
          </div> -->
                <!-- <div class="row">
            <div class="col-md-9 spacing-bottom">
              <div class="row tiles-container tiles white spacing-bottom">
                <div class="tile-more-content col-md-4 col-sm-4 no-padding">
                  <div class="tiles green">
                    <div class="tiles-body">
                      <div class="heading"> Statistique </div>
                      <p>Statut : live</p>
                    </div>
                    <div class="tile-footer">
                      <div class="iconplaceholder"><i class="fa fa-map-marker"></i></div>
                      258 Pays, 4835 Villes </div>
                  </div>
                  <div class="tiles-body">
                    <ul class="progress-list">
                      <li>
                        <div class="details-wrapper">
                          <div class="name">Visites nationnales</div>
                          <div class="description">Visites de France</div>
                        </div>
                        <div class="details-status pull-right"> <span class="animate-number" data-value="63" data-animation-duration="800">0</span>% </div>
                        <div class="clearfix"></div>
                        <div class="progress progress-small no-radius">
                          <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="63%"></div>
                        </div>
                      </li>
                      <li>
                        <div class="details-wrapper">
                          <div class="name">Visites d'europe</div>
                          <div class="description">Visites de pays européens</div>
                        </div>
                        <div class="details-status pull-right"> <span class="animate-number" data-value="23" data-animation-duration="600">0</span>% </div>
                        <div class="clearfix"></div>
                        <div class="progress progress-small no-radius ">
                          <div class="progress-bar progress-bar-warning animate-progress-bar" data-percentage="23%"></div>
                        </div>
                      </li>
                      <li>
                        <div class="details-wrapper">
                          <div class="name">Autres visites</div>
                          <div class="description">Visites intérnationalles</div>
                        </div>
                        <div class="details-status pull-right"> <span class="animate-number" data-value="14" data-animation-duration="200">0</span>% </div>
                        <div class="clearfix"></div>
                        <div class="progress progress-small no-radius">
                          <div class="progress-bar progress-bar-danger animate-progress-bar" data-percentage="12%"></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="tiles white col-md-8 col-sm-8 no-padding">
                  <div class="tiles-chart">
                    <div class="controller">
                      <a href="javascript:;" class="reload"></a>
                      <a href="javascript:;" class="remove"></a>
                    </div>
                    <div class="tiles-body">
                      <div class="tiles-title">GEO-LOCATIONS</div>
                      <div class="heading"> 8,545,654 <i class="fa fa-map-marker"></i> </div>
                    </div>
                    <div id="world-map" style="height:405px"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="col-md-4 hide">
              <div class="row spacing-bottom ">
                <div class="col-md-12">
                  <div class="tiles white added-margin">
                    <div class="tiles-body">
                      <div class="controller">
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                      </div>
                      <div class="tiles-title"> SERVER SURCHARGES </div>
                      <div class="heading text-black "> 250 GB </div>
                      <div class="progress  progress-small no-radius">
                        <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="25%"></div>
                      </div>
                      <div class="description"> <span class="mini-description"><span class="text-black">250GB</span> de <span class="text-black">1,024GB</span> Utilisé</span>
                      </div>
                    </div>
                  </div>
                  <div class="tiles white added-margin">
                    <div id="chart"> </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-6 spacing-bottom">
                  <div class="widget">
                    <div class="widget-title dark">
                      <div class="pull-left ">
                        <button class="btn  btn-dark  btn-small" type="button"><i class="fa fa-plus"></i></button>
                      </div>
                      Todo list
                      <div class="controller">
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                      </div>
                    </div>
                    <div class="widget-body">
                      <div class="col-md-12">
                        <input type="text" class="form-control dark m-b-25" id="date">
                      </div>
                      <br>
                      <div class="row-fluid">
                        <div class="checkbox check-success  ">
                          <input type="checkbox" value="1" id="chk_todo01" class="todo-list">
                          <label for="chk_todo01">Send email to David, new signups</label>
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="checkbox check-success  ">
                          <input type="checkbox" checked="checked" value="1" id="chk_todo02" class="todo-list">
                          <label for="chk_todo02" class="done">Call Jane!!</label>
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="checkbox check-success  ">
                          <input type="checkbox" value="1" id="chk_todo03" class="todo-list">
                          <label for="chk_todo03">Server upgrades ASAP</label>
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="checkbox check-success  ">
                          <input type="checkbox" value="1" id="chk_todo04" class="todo-list">
                          <label for="chk_todo04">Hello, new task</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 white col-sm-6">
                  <div class="tiles purple added-margin" style="max-height:345px">
                    <div class="tiles-body">
                      <div class="controller">
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                      </div>
                      <h3 class="text-white "> <br>
                    <br>
                    <br>
                    <span class="semi-bold">Steve Jobs</span> Time Capsule` is
                    Finally Unearthed on <span class="semi-bold">Skyace News</span> </h3>
                      <div class="blog-post-controls-wrapper">
                        <div class="blog-post-control"> <a class="text-white" href="#"><i class="icon-heart"></i> 47k</a> </div>
                        <div class="blog-post-control"> <a class="text-white" href="#"><i class="icon-comment"></i> 1584</a> </div>
                      </div>
                      <br>
                    </div>
                  </div>
                  <div class="tiles white added-margin">
                    <div class="tiles-body">
                      <div class="row">
                        <div class="user-comment-wrapper col-mid-12">
                          <div class="profile-wrapper"> <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35"> </div>
                          <div class="comment">
                            <div class="user-name"> David <span class="semi-bold">Cooper</span> </div>
                            <div class="preview-wrapper"> What's the progress on the new project? </div>
                            <div class="more-details-wrapper">
                              <div class="more-details"> <i class="icon-time"></i> 1Il y'a 2 mins </div>
                              <div class="more-details"> <i class="icon-map-marker"></i> Near Florida </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 spacing-bottom">
              <div class="tiles white">
                <div class="tiles-body">
                  <div class="controller">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                  <div class="tiles-title"> NOTIFICATIONS </div>
                  <br>
                  <div class="notification-messages info">
                    <div class="user-profile"> <img src="assets/img/profiles/c.jpg" alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35"> </div>
                    <div class="message-wrapper">
                      <div class="heading"> David Nester - Eenvoyé un message </div>
                      <div class="description"> Rencontre reportée à demain </div>
                    </div>
                    <div class="date pull-right"> Maintenant </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="notification-messages danger">
                    <div class="iconholder"> <i class="icon-warning-sign"></i> </div>
                    <div class="message-wrapper">
                      <div class="heading"> Charge serveur limitée </div>
                      <div class="description"> Le serveur de base de données a atteint sa capacité journalière </div>
                    </div>
                    <div class="date pull-right"> Hier </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="notification-messages success">
                    <div class="user-profile"> <img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35"> </div>
                    <div class="message-wrapper">
                      <div class="heading"> Vous avez 150 messages </div>
                      <div class="description"> 150 nouveaux messages non lus dans la boîte de réception </div>
                    </div>
                    <div class="date pull-right"> Hier </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 spacing-bottom">
              <div class="tiles red weather-widget ">
                <div class="tiles-body">
                  <div class="controller">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                  <div class="tiles-title"> MÉTÉO D'AUJOURD'HUI </div>
                  <div class="heading">
                    <div class="pull-left"> Jeudi </div>
                    <div class="pull-right"> 55 </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="big-icon">
                    <canvas id="partly-cloudy-day" width="120" height="120"></canvas>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="tile-footer">
                  <div class="pull-left">
                    <canvas id="wind" width="32" height="32"></canvas>
                    <span class="text-white small-text-description">Venteux</span> </div>
                  <div class="pull-right">
                    <canvas id="rain" width="32" height="32"></canvas>
                    <span class="text-white small-text-description">Humidité</span> </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div> -->
            </div>
            <!-- END PAGE -->
        </div>
    </div>


@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
