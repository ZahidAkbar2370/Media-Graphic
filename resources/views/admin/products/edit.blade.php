@extends('admin/layouts/default')
@section('title')
    Edit Produits
    @parent
@stop
@section('header_styles')
    <link href="{{ url('admin_assets/webarch/css/webarch.css') }}" rel="stylesheet" type="text/css" />
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
            <li><a href="#" class="active">Edit Produits</a>
            </li>
          </ul>
          <!-- <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Tout - <span class="semi-bold"> Edit Produits</span></h3>
          </div> -->
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple ">
                <div class="grid-title no-border">
                  <h4>{{ App\Models\ProductSetting::$types[$id] }}</h4>
                </div>
                <div class="grid-body no-border">
                  <div class="row">
                    <div class="col-md-12">&nbsp;</div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="{{ url('admin/products/update/'.$id) }}">
                            @csrf
                            <div class="" id="quantityRow">
                                @if(count($prices))
                                  @foreach($prices as $price)        
                                    <div class="row" style="display: flex;align-items: center;"> 
                                        <div class="form-group col-md-3">
                                            <label for="">Quantity</label>
                                            <input type="text" class="form-control" required value="{{ $price->quantity }}" name="quantity[]" placeholder="100">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">First day</label>
                                            <input type="text" class="form-control" required name="first_day_price[]" placeholder="0.00" value="{{ $price->first_day_price }}">
                                        </div>
                                        <!-- <div class="form-group col-md-2">
                                            <label for="">Second day</label>
                                            <input type="text" class="form-control" required name="second_day_price[]" placeholder="0.00" value="{{ $price->second_day_price }}">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Third day</label>
                                            <input type="text" class="form-control" required name="third_day_price[]" placeholder="0.00" value="{{ $price->third_day_price }}">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Forth day</label>
                                            <input type="text" class="form-control" required name="fourth_day_price[]" placeholder="0.00" value="{{ $price->fourth_day_price }}">
                                        </div> -->
                                        <div class="col-md-1">
                                            <button class="btn btn-danger btn-sm" type="button" style="padding: 5px 10px;" onclick="removeRow(this)">Delete</button>
                                        </div>
                                    </div>
                                  @endforeach
                                @else
                                  <div class="row" style="display: flex;align-items: center;"> 
                                        <div class="form-group col-md-3">
                                            <label for="">Quantity</label>
                                            <input type="text" class="form-control" required  name="quantity[]" placeholder="100">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">First day</label>
                                            <input type="text" class="form-control" required name="first_day_price[]" placeholder="0.00" >
                                        </div>
                                        <!-- <div class="form-group col-md-2">
                                            <label for="">Second day</label>
                                            <input type="text" class="form-control" required name="second_day_price[]" placeholder="0.00" >
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Third day</label>
                                            <input type="text" class="form-control" required name="third_day_price[]" placeholder="0.00" >
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Forth day</label>
                                            <input type="text" class="form-control" required name="fourth_day_price[]" placeholder="0.00" >
                                        </div> -->
                                        <div class="col-md-1">
                                            <button class="btn btn-danger btn-sm" type="button" style="padding: 5px 10px;" onclick="removeRow(this)">Delete</button>
                                        </div>
                                    </div>
                                @endif
                                <div id="html"></div>
                                <div class="row">
                                  <div class="col-md-12">
                                      <button class="btn btn-success" type="submit">Update</button>
                                      <button id="addQuantity" class="btn btn-primary" type="button">
                                        Add More
                                      </button>
                                  </div>
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
    // to add pricing row
        let addQuantity = document.getElementById('addQuantity');
        addQuantity.addEventListener('click', addQuantityRow);

        function addQuantityRow(){
            let temp = ` <div class="row " style="display: flex;align-items: center;" id=""> 
                          <div class="form-group col-md-3">
                              <label for="">Quantity</label>
                              <input type="text" class="form-control" required name="quantity[]" placeholder="100">
                          </div>
                          <div class="form-group col-md-2">
                              <label for="">First day</label>
                              <input type="text" class="form-control" required name="first_day_price[]" placeholder="0.00">
                          </div>
                          <div class="col-md-1">
                              <button class="btn btn-danger btn-sm" style="padding: 5px 10px;" onclick="removeRow(this)">Delete</button>
                          </div>
                      </div>`;
            jQuery('#html').append(temp);
           
            //quantityRow.firstElementChild.innerHTML(temp);
        }

        // to remove row
        function removeRow(currentElement){
            // currentElement.parentEelement
            let parentOFCurrent = currentElement.parentElement;
            // console.log(parentOFCurrent.parentElement);
            parentOFCurrent.parentElement.remove();
        }
  </script>
@stop
