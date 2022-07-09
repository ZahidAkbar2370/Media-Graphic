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
        <div class="content">
          <ul class="breadcrumb">
            <li>
              <p>Vous êtes sur la page de</p>
            </li>
            <li><a href="#" class="active">Produits</a>
            </li>
          </ul>
          <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Tout - <span class="semi-bold">les produits</span></h3>
          </div>
            <div class="row">
                <div class="col-md-12">
                  <div class="grid simple ">
                    <div class="grid-title no-border">
                      <h4>Produit</h4>
                      <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#grid-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                      </div>
                    </div>
                    <div class="grid-body no-border">
                      <h3>Gammes de  <span class="semi-bold">Produits</span></h3>
                      <!-- <p>They (allegedly) aid usability in reading tabular data by offering the user a coloured means of separating and differentiating rows from one another. Simply add the class<code>.table-striped</code>
                      </p>
                      <br> -->
                      <table class="table table-striped table-flip-scroll cf">
                        <thead class="cf">
                          <tr>
                            <th>
                              <div class="checkbox check-default ">
                                <input id="checkbox1" type="checkbox" value="1" class="checkall">
                                <label for="checkbox1"></label>
                              </div>
                            </th>
                            <th>Titre de produit</th>
                            <th>Description</th>
                            <th>Statut</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td>
                                <div class="checkbox check-default">
                                    <input id="checkbox2" type="checkbox" value="1">
                                    <label for="checkbox2"></label>
                                </div>
                              </td>
                              <td>PLAN</td>
                              <td>
                                  Vestibulum turpis sem aliquet...
                              </td>
                              <td>
                                  <span class="label label-success">Publié</span>
                              </td>
                              <td class="action">
                                  <a href="{{ url('admin/products/edit/1') }}">
                                    <i class="material-icons" title="Modifier">edit</i>
                                  </a>
                                  <!-- <a href="#!"><i class="material-icons" title="Supprimer">delete</i></a>
                                  <a href="../commande-plan.html" target="_blank"><i class="material-icons" title="Afficher">visibility_on</i></a> -->
                              </td>
                          </tr>
                          <tr>
                              <td>
                                <div class="checkbox check-default">
                                  <input id="checkbox3" type="checkbox" value="1">
                                  <label for="checkbox3"></label>
                                </div>
                              </td>
                              <td>MÉMOIRE & RAPPORT</td>
                              <td>Morbi vestibulum volutpat enim...</td>
                              <td><span class="label label-success">Publié</span>
                              </td>
                              <td class="action">
                                <a href="{{ url('admin/products/edit/2') }}">
                                  <i class="material-icons" title="Modifier">edit</i>
                                </a>
                                <!-- <a href="#!"><i class="material-icons" title="Supprimer">delete</i></a>
                                <a href="../commande-memoire-rapport.html" target="_blank"><i class="material-icons" title="Afficher">visibility_on</i></a> -->
                              </td>
                          </tr>
                          <tr>
                              <td>
                                <div class="checkbox check-default">
                                  <input id="checkbox4" type="checkbox" value="1">
                                  <label for="checkbox4"></label>
                                </div>
                              </td>
                              <td>BROCHURE & LIVRET</td>
                              <td>Curabitur blandit mollis lacus...</td>
                              <td><span class="label label-success">Publié</span>
                              </td>
                              <td class="action">
                                <a href="{{ url('admin/products/edit/3') }}">
                                  <i class="material-icons" title="Modifier">edit</i>
                                </a>
                                <!-- <a href="#!"><i class="material-icons" title="Supprimer">delete</i></a>
                                <a href="../commande-prochure-livret.html" target="_blank"><i class="material-icons" title="Afficher">visibility_on</i></a> -->
                              </td>
                          </tr>
                          <tr>
                              <td>
                                <div class="checkbox check-default">
                                  <input id="checkbox4" type="checkbox" value="1">
                                  <label for="checkbox4"></label>
                                </div>
                              </td>
                              <td>AFFICHE</td>
                              <td>Aenean ut eros et vestibulum...</td>
                              <td><span class="label label-success">Publié</span>
                              </td>
                              <td class="action">
                                <a href="{{ url('admin/products/edit/4') }}">
                                  <i class="material-icons" title="Modifier">edit</i>
                                </a>
                                <!-- <a href="#!"><i class="material-icons" title="Supprimer">delete</i></a>
                                <a href="../commande-affiche.html" target="_blank"><i class="material-icons" title="Afficher">visibility_on</i></a> -->
                              </td>
                          </tr>
                          <tr>
                              <td>
                                <div class="checkbox check-default">
                                  <input id="checkbox4" type="checkbox" value="1">
                                  <label for="checkbox4"></label>
                                </div>
                              </td>
                              <td>DOSSIER DE PLANS</td>
                              <td>Quisque malesuada placerat nisl...</td>
                              <td><span class="label label-success">Publié</span>
                              </td>
                              <td class="action">
                                <a href="{{ url('admin/products/edit/5') }}">
                                  <i class="material-icons" title="Modifier">edit</i>
                                </a>
                                <!-- <a href="#!"><i class="material-icons" title="Supprimer">delete</i></a>
                                <a href="../commande-dossier-plan.html" target="_blank"><i class="material-icons" title="Afficher">visibility_on</i></a> -->
                              </td>
                          </tr>
                        </tbody>
                        <!-- <tbody>
                          @if(count($commandes))
                              @foreach($commandes as $order)
                                  <tr>
                                    <td>
                                      <div class="checkbox check-default">
                                        <input id="checkbox2" type="checkbox" value="1">
                                        <label for="checkbox2"></label>
                                      </div>
                                    </td>
                                    <td><a href="{{ url('admin/products/edit/'.$order->id) }}" target="_blank">{{ ucfirst($order->type) }}</a></td>
                                    <td>{{ $order->name }}</td>
                                    <td><span class="label label-success">Publié</span>
                                    </td>
                                    <td class="action">
                                      <a href="{{ url('admin/products/edit/'.$order->id) }}">
                                        <i class="material-icons" title="Modifier">edit</i>
                                      </a>
                                      <a href="{{ url('admin/products/delete/'.$order->id) }}" onClick = "return confirm('Êtes-vous sûr de vouloir compléter ce dossier');">
                                        <i class="material-icons" title="Supprimer">delete</i> 
                                      </a>
                                      <a href="{{ url('admin/products/edit/'.$order->id) }}" target="_blank">
                                        <i class="material-icons" title="Afficher">visibility_on</i>
                                      </a>
                                    </td>
                                  </tr>
                              @endforeach
                          @endif
                        </tbody> -->
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
