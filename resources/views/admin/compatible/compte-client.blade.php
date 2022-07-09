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
            <div class="modal-body">Widget settings form goes here</div>
        </div>
        <div class="clearfix"></div>
        <div class="content">
            <ul class="breadcrumb">
                <li>
                    <p>Vous êtes sur la page de</p>
                </li>
                <li><a href="#" class="active">Compte client</a>
                </li>
            </ul>
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3>Profil de client - <span class="semi-bold">Joe Bidden</span> <span
                        class="client-type">(Individuel)</span></h3>
            </div>
            <!--  -->
            <div class="row">
                <div class="col-md-12 m-b-30">
                    <div class="pull-right">
                        <button class="btn btn-primary btn-cons add-new" type="submit">
                            <i class="material-icons">add</i> Ajouter nouveau client
                        </button>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="grid simple form-grid">
                        <div class="grid-title no-border">
                            <h4>Informations de <span class="bold">Joe Bidden</span> - Client <span
                                    class="client-type">(Individuel)</span></h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#grid-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="grid-body no-border">
                            <form method="Post" action="{{ url('admin/comptabililite/update-user/' . $user->id) }}"
                                class="form-no-horizontal-spacing" id="form-condensed" novalidate="novalidate">
                                @csrf
                                @method('PUT')
                                <div class="row column-seperation">
                                    <div class="col-md-6">
                                        <h4>Informations de base</h4>
                                        <div class="row form-row m-t-25 m-b-15">
                                            <div class="col-md-6">
                                                <strong>Type de client:</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="radio">
                                                    <input id="grand-compte" type="radio" name="client-type"
                                                        value="Grand compte"
                                                        @if ($user->role_id == '1') checked="checked" @endif>
                                                    <label for="grand-compte">Grand compte</label>
                                                    <input id="individuel" type="radio" name="client-type"
                                                        value="Individuel"
                                                        @if ($user->role_id == '2') checked="checked" @endif>
                                                    <label for="individuel">Individuel</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-row pro hide">
                                            <div class="col-md-5">
                                                <select name="structure" id="structure"
                                                    class="select2 form-control structure">
                                                    <option value="0">-- Vous êtes? --</option>
                                                    <option value="Société">Société</option>
                                                    <option value="Association">Association</option>
                                                    <option value="Administration">Administration</option>
                                                    <option value="Particulier">Particulier</option>
                                                    <option value="Autre">Autre</option>
                                                </select>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" placeholder="A préciser.."
                                                    class="form-control autre-structure hide" id="autreStructure"
                                                    name="autreStructure">
                                            </div>
                                        </div>
                                        <div class="row form-row pro hide">
                                            <div class="col-md-12">
                                                <input name="raisonSociale" id="raisonSociale" type="text"
                                                    class="form-control raison-sociale" placeholder="Raison sociale">
                                            </div>
                                        </div>
                                        <!-- <div class="row form-row">
                                                                                                                                                                  <div class="col-md-8">
                                                                                                                                                                    <div class="radio">
                                                                                                                                                                      <input id="m" type="radio" name="gender" value="m" checked="checked">
                                                                                                                                                                      <label for="m">M</label>
                                                                                                                                                                      <input id="mme" type="radio" name="gender" value="mme">
                                                                                                                                                                      <label for="mme">Mme</label>
                                                                                                                                                                      <input id="mlle" type="radio" name="gender" value="mlle">
                                                                                                                                                                      <label for="mlle">Mlle</label>
                                                                                                                                                                    </div>
                                                                                                                                                                  </div>
                                                                                                                                                                </div> -->
                                        <div class="row form-row">
                                            <div class="col-md-5">
                                                <input name="first_name" id="form3FirstName" type="text"
                                                    class="form-control" placeholder="Prénom"
                                                    value="{{ $user->first_name }}">
                                            </div>
                                            <div class="col-md-7">
                                                <input name="last_name" id="form3LastName" type="text"
                                                    class="form-control" placeholder="Nom"
                                                    value="{{ $user->last_name }}">
                                            </div>
                                        </div>
                                        <!-- <div class="row form-row">
                                                                                                                                                                  <div class="col-md-5">
                                                                                                                                                                    <select name="form3Gender" id="form3Gender" class="select2 form-control">
                                                                                                                                                                      <option value="1">Male</option>
                                                                                                                                                                      <option value="2">Female</option>
                                                                                                                                                                    </select>
                                                                                                                                                                  </div>
                                                                                                                                                                  <div class="col-md-7">
                                                                                                                                                                    <input type="text" placeholder="Date of Birth" class="form-control" id="form3DateOfBirth" name="form3DateOfBirth">
                                                                                                                                                                  </div>
                                                                                                                                                                </div> -->
                                        <div class="row form-row">
                                            <div class="col-md-12">
                                                <input name="form3Email" id="form3Email" type="text"
                                                    class="form-control" placeholder="email@address.com"
                                                    value="{{ $user->email }}">
                                            </div>
                                        </div>
                                        <div class="row form-row">

                                            <div class="col-md-12">
                                                <input name="phone" id="form3TeleNo" type="text"
                                                    class="form-control" placeholder="{{ $user->phone }}"
                                                    value="{{ $user->phone }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Adresse de livraison</h4>
                                        <div class="row form-row">
                                            <div class="col-md-12">
                                                <input name="billing_address" id="billing_address" type="text"
                                                    class="form-control" placeholder="Adresse de livraison"
                                                    value="{{ $user->billing_address }}">
                                            </div>
                                        </div>
                                        <div class="row form-row">
                                            <div class="col-md-4">
                                                <input name="billing_postal" id="billing_postal" type="text"
                                                    class="form-control" placeholder="Code postal"
                                                    value="{{ $user->billing_postal }}">
                                            </div>
                                            <div class="col-md-6">
                                                <input name="billing_city" id="billing_city" type="text"
                                                    class="form-control" placeholder="Vile"
                                                    value="{{ $user->billing_city }}">
                                            </div>
                                        </div>
                                        <!-- <div class="row form-row">
                                                                                                                                                                  <div class="col-md-6">
                                                                                                                                                                    <input name="form3State" id="form3State" type="text" class="form-control" placeholder="Région">
                                                                                                                                                                  </div>
                                                                                                                                                                  <div class="col-md-6">
                                                                                                                                                                    <input name="form3Country" id="form3Country" type="text" class="form-control" placeholder="Pays">
                                                                                                                                                                  </div>
                                                                                                                                                                </div> -->
                                        <h4>Adresse de facturation</h4>
                                        <div class="row form-row pull-left">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <input type="checkbox" value="1" onclick="return sameshipping()"
                                                        id="sameAdress" checked>
                                                    <label for="sameAdress">Mon adresse de facturation est
                                                        identique à mon adresse de livraison.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-row">
                                            <div class="col-md-12">
                                                <input name="shipping_address" id="shipping_address" type="text"
                                                    class="form-control" placeholder="Adresse de facturation"
                                                    value="{{ $user->shipping_address }}">
                                            </div>
                                        </div>
                                        <div class="row form-row">
                                            <div class="col-md-4">
                                                <input name="shipping_postal" id="shipping_postal" type="text"
                                                    class="form-control" placeholder="Code postal"
                                                    value="{{ $user->shipping_postal }}">
                                            </div>
                                            <div class="col-md-6">
                                                <input name="shipping_city" id="shipping_city" type="text"
                                                    class="form-control" placeholder="Vile"
                                                    value="{{ $user->shipping_city }}">
                                            </div>
                                        </div>
                                        <!-- <div class="row small-text">
                                                                                                                                                                  <p class="col-md-12">
                                                                                                                                                                    NOTE - Facts to be considered, Simply remove or edit this as for what you desire. Disabled font Color and size
                                                                                                                                                                  </p>
                                                                                                                                                                </div> -->
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <!-- <div class="pull-left">
                                                                                                                                                                <div class="checkbox checkbox check-success   ">
                                                                                                                                                                  <input type="checkbox" value="1" id="chkTerms">
                                                                                                                                                                  <label for="chkTerms">I Here by agree on the Term and condition. </label>
                                                                                                                                                                </div>
                                                                                                                                                              </div> -->
                                    <div class="pull-right">
                                        <button class="btn btn-primary btn-cons" type="submit"><i class="icon-ok"></i>
                                            Enregistrer</button>
                                        <button class="btn btn-white btn-cons" type="button">Annuler</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 client-infos">
                    <div class="col-md-12">
                        <a class="btn btn-block btn-info"
                            href="{{ url('admin/comptabililite/compte-client-commandes/' . $user->id) }}"><i
                                class="material-icons">shopping_cart</i> Commandes</a>
                    </div>
                    <div class="col-md-12">
                        <a class="btn btn-block btn-info" href="#"><i class="material-icons">info</i> Devis</a>
                    </div>
                    <div class="col-md-12">
                        <a class="btn btn-block btn-info" href="#"><i class="material-icons">layers</i>
                            Factures</a>
                    </div>
                    <div class="col-md-12">
                        <a class="btn btn-block btn-info" href="#"><i class="material-icons">style</i> Avoirs</a>
                    </div>
                    <div class="col-md-12">
                        <a class="btn btn-block btn-info" href="#"><i class="material-icons">money</i> Total CA</a>
                    </div>
                    <div class="col-md-12">
                        <a class="btn btn-block btn-info" href="#"><i class="material-icons">arrow_right</i>
                            Impayées</a>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
        <!-- END PAGE -->
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script>
        function sameshipping() {

            var address = jQuery('#billing_address').val();
            jQuery('#shipping_address').val(address)

            var postal = jQuery('#billing_postal').val();
            jQuery('#shipping_postal').val(postal)

            var city = jQuery('#billing_city').val();
            jQuery('#shipping_city').val(city)

            return false;



        }
    </script>
@stop
