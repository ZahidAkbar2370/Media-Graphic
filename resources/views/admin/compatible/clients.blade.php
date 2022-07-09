@extends('admin/layouts/default')
@section('title')
    Commande Encours
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
                <li><a href="#" class="active">Comptabilité - Clients</a>
                </li>
            </ul>
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3>Tout - <span class="semi-bold">les clients</span> <mark>(Tableau avec formulaire de recherche Par
                        <strong>"Nom"</strong> et <strong>"Adresse email"</strong>)</mark></h3>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="grid simple ">
                        <div class="grid-title no-border">
                            <h4>Clients</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#grid-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="grid-body no-border" style="display: block;">
                            <h3>Tout <span class="semi-bold">les clients</span></h3>
                            <!-- <p>They (allegedly) aid usability in reading tabular data by offering the user a coloured means of separating and differentiating rows from one another. Simply add the class<code>.table-striped</code>
                                                                                                                                                                                                                                                                                                              </p>
                                                                                                                                                                                                                                                                                                              <br> -->
                            <table class="table table-striped table-flip-scroll cf client">
                                <thead class="cf">
                                    <tr class="">

                                        <th class="type">ID</th>
                                        <TH>Type</TH>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>phone Number</th>
                                        <th>Orders</th>
                                        <th>Amount Include Tex</th>
                                        <th>Download</th>
                                        <TH>Action</TH>


                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($results))
                                        @foreach ($results as $user)
                                            <tr class="item">

                                                <td>
                                                    {{ $user->id ?? '' }}
                                                </td>

                                                <td>
                                                    @if ($user->role_id == 2)
                                                        {{ 'Indiviual' }}
                                                    @elseif($user->role_id == 1)
                                                        {{ 'prefessional' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ $user->first_name ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $user->last_name ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $user->phone ?? '' }}
                                                </td>

                                                <td>


                                                    {{ $user->order->count() ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $user->order->pluck('amount_include_tax')->sum() ?? '' }}
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{ url('admin/comptabililite/generate-pdf/' . $user->id) }}"
                                                        class="btn btn-sm bg-success-light me-2"><i
                                                            class="bi bi-download"></i>
                                                        Download</a>
                                                </td>
                                                <td class="action"><a
                                                        href="{{ url('admin/comptabililite/compte-details/' . $user->id) }}"
                                                        class="edit"><i class="material-icons"
                                                            title="Modifier">edit</i></a>
                                                    <a href="#!" class="view"><i class="material-icons"
                                                            title="Désactiver">visibility_on</i></a><a href="#!"
                                                        class="delete"><i class="material-icons"
                                                            title="Supprimer">delete</i></a>

                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
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
