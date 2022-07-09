@extends('layouts/default')
@section('title')
    My Devis
    @parent
@stop
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link href="{{ url('frontend_assets/table.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div id="vos-commandes" class="content-target"><h2>Mes Devis</h2>
                    <table class="table table-bordered table-flip-scroll cf table-full">
                        <tbody>
                            <tr>
                                <th>N°</th>
                                <th>Date</th>
                                <th>Par</th>
                                <th>Objet de devis</th>
                                <th class="price">Montant HT</th>
                                <th class="price">Montant TTC</th>
                                <th>Statut</th>
                                <th>Etat</th>
                                <th class="action">Action</th>
                                <!-- <th class="number">N°</th>
                                <th class="date">Date</th>
                                <th class="designation">Description</th>
                                <th class="statut">Statut</th>
                                <th class="livraison">Livraison</th>
                                <th class="montant">Montant</th>
                                <th class="actions">Actions</th> -->
                            </tr>
                            @if(count($quotations))
                                @foreach($quotations as $quotation)
                                    <tr class="item">
                                        <td>{{ $quotation->id }}</td>
                                        <td>{{ date('d/m/Y',strtotime($quotation->created_at)) }}</td>
                                        <td>{{ $quotation->first_name.' '.$quotation->last_name }}</td>
                                        <td>{{ $quotation->description }}</td>
                                        <td class="price">
                                            @if($quotation->amount_exclude_tax)
                                                {{ $quotation->amount_exclude_tax.' €' }}
                                            @endif
                                        </td>
                                        <td class="price">
                                            @if($quotation->amount_include_tax)
                                                {{ $quotation->amount_include_tax.' €' }}
                                            @endif
                                        </td>
                                        <td>
                                            @if($quotation->status == 0)
                                                A traiter
                                            @endif
                                        </td>
                                        <td><span class="label label-warning">A traiter</span></td>
                                        <td class="action">
                                            @if($quotation->status == 1)
                                                <form action="{{ url('devis/accept/'.$quotation->id) }}" method="POST">
                                                    @csrf
                                                  <script src="https://checkout.stripe.com/checkout.js" 
                                                    class="stripe-button" 
                                                    data-key="{{ env('STRIPE_KEY') }}" 
                                                    data-image="{{ url('/frontend_assets/images/header_logo.svg') }}" 
                                                    data-name="{{ env('APP_NAME') }}" 
                                                    data-description="Order Payment"
                                                    data-email="{{ Sentinel::getUser()->email }}"
                                                    data-amount="{{ $quotation->amount_include_tax * 100}}">
                                                  </script>
                                                </form>
                                                <!-- <a href="{{ url('devis/accept/'.$quotation->id) }}" class="edit">
                                                    Accepter et créer une commande
                                                </a> -->
                                            @else
                                                <span class="text-warning"></span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            <!-- <tr class="item">
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
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="https://js.stripe.com/v3/"></script>
@stop
