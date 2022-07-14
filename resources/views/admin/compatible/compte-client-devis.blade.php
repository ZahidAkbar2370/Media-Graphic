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
                <li><a href="#" class="active">Compte client - Devis</a>
                </li>
            </ul>
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3>Tout - <span class="semi-bold">les devis de Joe Bidden</span></h3>
            </div>
            <div class="row">
                <div class="col-md-12 m-b-30">
                    <div class="pull-right">
                        <button class="btn btn-primary btn-cons add-new" type="submit">
                            <i class="material-icons">add</i> Nouveau devis
                        </button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="grid simple ">
                        <div class="grid-title no-border">
                            <h4>Les devis</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#grid-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="grid-body no-border">
                            <table class="table table-striped table-flip-scroll cf">
                                <thead class="cf">
                                    <tr class="">
                                        <th>
                                            <div class="checkbox check-default ">
                                                <input id="checkbox0" type="checkbox" value="0" class="checkall">
                                                <label for="checkbox0"></label>
                                            </div>
                                        </th>
                                        <th>N°</th>
                                        <th>Date</th>
                                        <th>Par</th>
                                        <th>Objet de devis</th>
                                        <th class="price">Montant HT</th>

                                        <th class="price">Montant TTC</th>
                                        <th>Statut</th>
                                        <th>Etat</th>
                                        <th class="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td>
                                            <div class="checkbox check-default">
                                                <input id="checkbox1" type="checkbox" value="1">
                                                <label for="checkbox1"></label>
                                            </div>
                                        </td>
                                        <td>{{ $devis->id }}</td>
                                        <td>{{ $devis->created_at }}</td>
                                        <td>{{ $devis->first_name . $devis->last_name }}</td>
                                        <td>{{ $devis->billing_postal . ',' . $devis->billing_city }}</td>
                                        <td class="price">{{ $devis->amount_include_tax }} €</td>
                                        <td class="price">{{ $devis->amount_include_tax }} €</td>
                                        <td>En cours</td>
                                        <td><span class="label label-success">En cours</span>
                                        </td>
                                        <td class="action"><a href="#!" class="edit"><i class="material-icons"
                                                    title="Modifier">edit</i></a>

                                            <a href="#!" class="arrow-right"><i class="material-icons"
                                                    title="Envoyer">send</i></a>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
