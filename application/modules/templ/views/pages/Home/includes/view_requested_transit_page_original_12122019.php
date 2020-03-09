
<style>
#scroll {
  height: 700px;
  overflow: auto;
}
</style>
<div class="card">
            <div class="card-header">
                <h3 class="card-title"><h1 style="margin-left: 39%;"><font color="blue">{{client_name}}</font></h1><!--DataTable with minimal features &amp; hover style--></h3>
            </div>
    <div id="no_data_available">
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row"><div class="col-sm-12 col-md-6"></div>
                      <div class="col-sm-12 col-md-6"></div>
                      
                  </div>
                  <div class="row"><div class="col-sm-12">
                          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">{{type_of_ads_number}}</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">{{type_of_ads_requested}}</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Actions</th>
                    
                </thead>
                <tbody>
                
                    <tr role="row" class="odd" ng-repeat="transit in view_transits_requested">
                  <td class="sorting_1">{{transit.plate_number}}</td>
                  <td>{{transit.type_of_transit}}</td>
                  <td>
                      <!--<?php //echo validation_errors();?>
                        <?php //echo form_open_multipart('admin/type_of_ads/multiple_files');?>
                        <p><input type="file" multiple="multiple" name="image_name[]" class="form-control" style="width:30%;"/></p>

                        <input type="submit" class="btn btn-success btn-block" style="width:30%;" value="Upload"/> 
                        </form>-->
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-md-3">
                                  <input type="file" name="images[]" class="{{transit.plate_number}}" multiple id="{{transit.plate_number}}"/><!--multiple ng-model="aaa"-->
                              </div>
                              <div class="col-md-3">
                                  <button class="btn btn-success btn-block" style="width:30%; margin-top: 3px;" value="Upload" ng-click="save_photo(client_name, transit.type_of_transit, transit.plate_number)">Upload</button>
                              </div>
                              <div class="col-md-2">
                                  <div class="card card-danger" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
                                    <div class="card-header">
                                      <h3 class="card-title">View Photos</h3>

                                      <div class="card-tools" ng-model="txt">
                                          <button type="button" class="btn btn-tool" data-card-widget="maximize" ng-click="view_photo(transit.plate_number)"><i class="fas fa-expand"></i>
                                        </button>
                                      </div>
                                      <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body" style="height: 5px;" id="xxx">
                                        <!--<h1 ng-repeat="x in check_view_photo"><img src="{{x}}" alt="Smiley face" height="42" width="42"></h1>-->
                                        <!--<div id="photo{{transit.plate_number}}"></div>-->
                                        
                                        <div class="container my-4" id="scroll">
                                        <div class="row">
                                        <div class="col-lg-3 col-md-2 mb-4" ng-repeat="x in check_view_photo">

                                          <!--Modal: Name-->
                                          <div class="modal fade" id="modal{{x.saved_photo_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">

                                              <!--Content-->
                                              <div class="modal-content">

                                                <!--Body-->
                                                <div class="modal-body mb-0 p-0">

                                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                    <!--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gsNY7TV4r1M"
                                                      allowfullscreen></iframe>--><img class="embed-responsive-item" src="<?php echo base_url();    ?>/Uploads/2019/{{client_contract_name}}/{{location_name}}/{{type_of_ads_given_name}}/{{x.item_number}}/{{x.photo_name}}" alt="video"
                                              data-toggle="modal" data-target="#modal">
                                                  </div>

                                                </div>

                                                <!--Footer-->
                                                <div class="modal-footer d-block d-md-flex justify-content-center">
                                                  

                                                  <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                                                </div>

                                              </div>
                                              <!--/.Content-->

                                            </div>
                                          </div>
                                          <!--Modal: Name-->

                                          <a><img class="img-fluid z-depth-1" src="<?php echo base_url();    ?>/Uploads/2019/{{client_contract_name}}/{{location_name}}/{{type_of_ads_given_name}}/{{x.item_number}}/{{x.photo_name}}" alt="video"
                                              data-toggle="modal" data-target="#modal{{x.saved_photo_id}}" style="height:300px;width:100%;"></a>
                                              <label class="container"> &nbsp&nbsp&nbsp{{x.photo_name}}
                                            <input type="checkbox" ng-model="x.selected" value={{x.photo_name}} /> 
                                            
                                            <span class="checkmark"></span>
                                            </label>

                                        </div>
                                        </div><div id="check_button" style="margin-top:-30px;"><button ng-click="show()">show</button></div>
                                            </div>
                                        
                                            
                                        
                                        
                                        
                                        
                                        
                                        
                                    </div>
                                    <!-- /.card-body -->
                                  </div>
                              </div>




                              <div class="col-md-2">
                                  <div class="card card-warning" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
                                    <div class="card-header">
                                      <h3 class="card-title">Returned Photos</h3>

                                      <div class="card-tools" ng-model="txt">
                                          <button type="button" class="btn btn-tool" data-card-widget="maximize" ng-click="view_photo_returned(transit.plate_number)"><i class="fas fa-expand"></i>
                                        </button>
                                      </div>
                                      <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body" style="height: 5px;" id="xxx">
                                        <!--<h1 ng-repeat="x in check_view_photo"><img src="{{x}}" alt="Smiley face" height="42" width="42"></h1>-->
                                        <!--<div id="photo{{transit.plate_number}}"></div>-->
                                        
                                        <div class="container my-4" id="scroll">
                                        <div class="row">
                                        <div class="col-lg-3 col-md-2 mb-4" ng-repeat="x in check_view_photo">

                                          <!--Modal: Name-->
                                          <div class="modal fade" id="modal{{x.saved_photo_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">

                                              <!--Content-->
                                              <div class="modal-content">

                                                <!--Body-->
                                                <div class="modal-body mb-0 p-0">

                                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                    <!--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gsNY7TV4r1M"
                                                      allowfullscreen></iframe>--><img class="embed-responsive-item" src="<?php echo base_url();    ?>/Uploads/2019/{{client_contract_name}}/{{location_name}}/{{type_of_ads_given_name}}/{{x.item_number}}/{{x.photo_name}}" alt="video"
                                              data-toggle="modal" data-target="#modal">
                                                  </div>

                                                </div>

                                                <!--Footer-->
                                                <div class="modal-footer d-block d-md-flex justify-content-center">
                                                  

                                                  <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                                                </div>

                                              </div>
                                              <!--/.Content-->

                                            </div>
                                          </div>
                                          <!--Modal: Name-->

                                          <a><img class="img-fluid z-depth-1" src="<?php echo base_url();    ?>/Uploads/2019/{{client_contract_name}}/{{location_name}}/{{type_of_ads_given_name}}/{{x.item_number}}/{{x.photo_name}}" alt="video"
                                              data-toggle="modal" data-target="#modal{{x.saved_photo_id}}" style="height:300px;width:100%;"></a>
                                              <label class="container"> &nbsp&nbsp&nbsp{{x.photo_name}}
                                            <input type="checkbox" ng-model="x.selected" value={{x.photo_name}} /> 
                                            
                                            <span class="checkmark"></span>
                                            </label>

                                        </div>
                                        </div>
                                            </div>
                                        
                                            <!--<div id="check_button"><button ng-click="show()">show</button></div>-->
                                        
                                        
                                        
                                        
                                        
                                        
                                    </div>
                                    <!-- /.card-body -->
                                  </div>
                              </div>



                              
                          </div>
                      </div>
                      
                      
                  </td>
                  
                </tr>
                </tbody>
                
              </table></div></div></div>
            </div>
            <!-- /.card-body -->
          </div>
{{msg}}




