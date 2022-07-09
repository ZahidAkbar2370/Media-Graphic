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
            <li><a href="#" class="active">Devis - A traiter</a>
            </li>
          </ul>
          <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Tout - <span class="semi-bold">les devis à traiter</span> <mark>(Tableau avec formulaire de recherche ave filtre)</mark></h3>
          </div>
          <div class="row">
                <div class="col-md-12 m-b-30">
                  <a class="btn btn-primary pull-right" href="#!">Créer un nouveau devis</a>
                </div>
                <div class="col-md-12">
                  <div class="grid simple ">
                    <div class="grid-title no-border">
                      <h4>Les devis à traiter</h4>
                    </div>
                    <div class="grid-body no-border">
                      <table class="table table-striped table-flip-scroll cf">
                        <tr>
                          <th>Créé à</th>
                          <td>{{ date('d/m/Y',strtotime($quotation->created_at)) }}</td>
                        </tr>
                        <tr>
                          <th>Nom</th>
                          <td>{{ $quotation->first_name.' '.$quotation->last_name }}</td>
                        </tr>
                        <tr>
                          <th>E-mail</th>
                          <td>{{ $quotation->email }}</td>
                        </tr>
                        <tr>
                          <th>Téléphoner</th>
                          <td>{{ $quotation->phone }}</td>
                        </tr>
                        <tr>
                          <th>Code postal</th>
                          <td>{{ $quotation->postalcode }}</td>
                        </tr>
                        <tr>
                          <th>Ville</th>
                          <td>{{ $quotation->city }}</td>
                        </tr>
                        <tr>
                          <th>Devis</th>
                          <td>{{ $quotation->description }}</td>
                        </tr>
                        @if($quotation->image)
                          <tr>
                            <th>Image</th>
                            <td>
                              <img src="{{ url('/uploads/files/'.$quotation->image) }}" width="100">
                            </td>
                          </tr>
                        @endif
                      </table>
                      <div class="row">
                        <div class="col-md-12">&nbsp;</div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="{{ url('admin/devis/update/'.$quotation->id) }}">
                                @csrf
                                <div class="row">
                                  <div class="col-md-12">
                                      <h2>Prix ​​de l'offre</h2>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                      <label class="label">MONTANT HT</label>
                                      <input type="number" onkeyup="return taxcalculate();" id="ht" name="ht" step="0.01" value="{{ $quotation->amount_exclude_tax }}" required class="form-control">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">&nbsp;</div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                      <label class="label">MONTANT TTC</label>
                                      <input type="number" required step="0.01" id="ttc" readonly name="ttc" value="{{ $quotation->amount_include_tax }}" class="form-control">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">&nbsp;</div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="submit" name="save" class="btn btn-primary" value="Sauvegarder">
                                  </div>
                                </div>
                            </form>
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
