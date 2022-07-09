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
                <li><a href="#" class="active">Compte client - Commandes</a>
                </li>
            </ul>
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3>Tout - <span class="semi-bold">les commandes de <span class="client-name">Joe
                            Bidden</span></span></h3>
            </div>
            <div class="row">
                <div class="col-md-12 m-b-30">
                    <div class="pull-right">
                        <button class="btn btn-primary btn-cons add-new" type="submit">
                            <i class="material-icons">add</i> Nouvelle commande
                        </button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="grid simple ">
                        <div class="grid-title no-border">
                            <h4>Les commandes</h4>
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
                                        <th>Commande N°</th>
                                        <th>Date</th>
                                        <th>Par</th>
                                        <th>Adresse de livraison</th>
                                        <th>Total</th>
                                        <th>Date de livraison</th>
                                        <th>Etat</th>
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
                                        <td>{{ $order_details->id }}</td>
                                        <td>{{ $order_details->created_at }}</td>
                                        <td>{{ $order_details->first_name }}</td>
                                        <td>{{ $order_details->delivery_address }}</td>
                                        <td>
                                        {{ $order_details->order->pluck('amount_include_tax')->sum() ?? '' }}
                                        </td>
                                        <td>{{ $order_details->created_at }}</td>
                                        <td><span class="label label-success">En cours</span>
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

@stop
