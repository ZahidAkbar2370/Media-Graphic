@extends('admin/layouts/default')
@section('title')
    Edit Devis
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
            <li><a href="#" class="active">{{ $data['title'] }}</a>
            </li>
          </ul>
          <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Tout - <span class="semi-bold">Les {{ $data['title'] }}</span> <mark>(Tableau avec formulaire de recherche ave filtre)</mark></h3>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple ">
                <div class="grid-title no-border">
                  <h4>Les commande {{ $data['status'] }}</h4>
                </div>
                <div class="grid-body no-border">
                  <table class="table table-striped table-flip-scroll cf">
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
                  <div class="row">
                    <div class="col-md-12">&nbsp;</div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      @if($commande->status == 0)
                        <a onclick=" return confirm('Are you want to change status');" href="{{ url('admin/commande/status/1/'.$commande->id) }}">
                          <button class="btn btn-priamry">En cours</button>
                        </a>
                      @elseif($commande->status == 1)
                        <a onclick=" return confirm('Are you want to change status');" href="{{ url('admin/commande/status/2/'.$commande->id) }}">
                          <button class="btn btn-priamry">Envoye</button>
                        </a>
                      @endif
                    </div>
                  </div>
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
    function taxcalculate(){
      var ht = jQuery('#ht').val();
      /**include tax **/
      ttc = parseFloat(ht) + parseFloat(ht * 20/100);
      jQuery('#ttc').val(ttc);
      return true;
    }
  </script>
@stop
