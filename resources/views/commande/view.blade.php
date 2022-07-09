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
                    <tr>
                      <th>Commande N°</th>
                      <td>{{ $commande->id }}</td>
                    </tr>
                    <tr>
                      <th>Staut</th>
                      <td>{{ $data['status'] }}</td>
                    </tr>
                    <tr>
                      <th>Créé à</th>
                      <td>{{ date('d/m/Y',strtotime($commande->created_at)) }}</td>
                    </tr>
                    <tr>
                      <th>Nom de Fisher</th>
                      <td>{{ $commande->User->first_name.' '.$commande->User->last_name }}</td>
                    </tr>
                    <tr>
                      <th>E-mail</th>
                      <td>{{ $commande->User->email }}</td>
                    </tr>
                      <th>Name</th>
                      <td>{{ $commande->name }}</td>
                    </tr>
                    <tr>
                      <th>Format</th>
                      <td>{{ $commande->file_format }}</td>
                    </tr>
                    <tr>
                      <th>CONFIGUREZ VOTRE IMPRESSION</th>
                      <td>{{ $commande->print }}</td>
                    </tr>
                    <tr>
                      <th>VOS TRAVAUX SONT DE TYPE</th>
                      <td>{{ $commande->works_type }}</td>
                    </tr>
                    <tr>
                      <th>VOS TRAVAUX SONT DE TYPE</th>
                      <td>{{ $commande->paper }}</td>
                    </tr>
                    <tr>
                      <th>FAÇONNAGE</th>
                      <td>{{ $commande->shaping }}</td>
                    </tr>
                    <tr>
                      <th>QUANTITE</th>
                      <td>{{ $commande->desired_copies }}</td>
                    </tr>
                    <tr>
                      <th>QUANTITE</th>
                      <td>{{ $commande->maximum_deliver_copies }}</td>
                    </tr>
                    <tr>
                      <th>DATE DE LIVRAISON</th>
                      <td>{{ $commande->deliver_date }}</td>
                    </tr>
                    <tr>
                      <th>TOTAL HT</th>
                      <td>{{ $commande->subtotal.' €' }}</td>
                    </tr>
                    <tr>
                      <th>TVA (20%)</th>
                      <td>{{ $commande->tax.' €' }}</td>
                    </tr>
                    <tr>
                      <th>TOTAL TTC</th>
                      <td>{{ $commande->total.' €' }}</td>
                    </tr>
                    @if($commande->file)
                      <tr>
                        <th>VOS FICHIERS</th>
                        <td>
                          <img src="{{ url('/uploads/files/'.$commande->file) }}" width="100">
                        </td>
                      </tr>
                    @endif
                    @if($commande->file2)
                      <tr>
                        <th>AUTRES FICHIERS</th>
                        <td>
                          <img src="{{ url('/uploads/files/'.$commande->file2) }}" width="100">
                        </td>
                      </tr>
                    @endif
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
