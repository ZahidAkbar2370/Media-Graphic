@extends('layouts/default')
@section('title')
    Mes Commandes
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
                <div id="vos-commandes" class="content-target"><h2>Mes Commandes</h2>
                    <table class="table table-bordered table-flip-scroll cf table-full">
                        <tbody>
                            <tr>
                                <th>N°</th>
                                <th>Date</th>
                                <th>Par</th>
                                <th>Objet de commande</th>
                                <th class="price">Montant HT</th>
                                <th class="price">Montant TTC</th>
                                <th>Statut</th>
                                <th>Etat</th>
                                <th class="action">Action</th>
                            </tr>
                            @if(count($commandes))
                                @foreach($commandes as $order)
                                    <tr class="item">
                                        <td>{{ $order->id }}</td>
                                        <td>{{ date('d/m/Y',strtotime($order->created_at)) }}</td>
                                        <td>
                                          {{ $order->User->first_name.' '.$order->User->last_name }}
                                        </td>
                                        <td>{{ $order->name }}</td>
                                        <td class="price">
                                          {{ $order->subtotal.' €' }}
                                        </td>
                                        <td class="price">
                                          {{ $order->total.' €' }}
                                        </td>
                                        <td>
                                            @if($order->status == 0)
                                              A traiter
                                            @elseif($order->status == 1)
                                              En cours
                                            @endif
                                        </td>
                                        <td>
                                          @if($order->status == 0)
                                            <span class="label label-warning">A traiter</span>
                                          @elseif($order->status == 1)
                                            <span class="label label-success">En cours</span>
                                          @endif
                                        </td>
                                        <td class="action">
                                            <!-- <a href="{{ url('admin/commande/edit/'.$order->id) }}" class="edit">
                                                <i class="material-icons" title="Modifier">edit</i>
                                            </a> -->
                                            <a href="{{ url('commande/detail/'.$order->id) }}" class="view">
                                                <i class="material-icons" title="Désactiver">Detail</i>
                                            </a>
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
