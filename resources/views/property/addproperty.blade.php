@extends('layouts.app')

@section('content')

<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Starter</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                        <li class="breadcrumb-item active">Starter</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                       <form method="POST" action="{{url('/')}}/addProperty" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-8">

                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Add New Property</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        All the new property details will add from here .
                                    </p>

                                    
                                        @csrf
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Property For<span class="text-danger">*</span></label>
                                            <div class="col-7"> 
                                                <select name="prptFor" value="" class="form-control">
                                                    <option>...</option>
                                                    @foreach($addfr as $adfr)
                                                    <option value="{{$adfr->addfor}}">{{$adfr->addfor}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Title<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="hidden" name="type" value="webdetail" class="form-control"  placeholder="Name of the property">
                                                <input type="text" name="title" value="" class="form-control"  placeholder="Name...">
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Post By<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                 
                                                <input type="text" name="postBy" value="" class="form-control"  placeholder="...">
                                            </div>
                                        </div>  --}}
                                        <h4 class="header-title m-t-0">Overview Details</h4>
                                        {{-- <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Possession Start Date<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                 
                                                <input type="date" name="possessionStartDate" value="" class="form-control"  placeholder="...">
                                            </div>
                                        </div>  --}}
                                        {{-- <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Status<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                 
                                                <select name="status" value="" class="form-control">
                                                    <option>...</option>
                                                    <option value="Launch">Launch</option> 
                                                </select>
                                            </div>
                                        </div>  --}}
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Total Area<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                               <input type="text" name="totalArea" value="" class="form-control"  placeholder="00 Acres/Sqrft">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass1" class="col-4 col-form-label">Parking<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <select name="parking" class="form-control">
                                                    <option>...</option>
                                                    <option value="Allow">Allowed</option> 
                                                    <option value="N/A">Not-Allowed</option> 
                                                </select>    
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Total Launch Apartment<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                               <input type="text" name="totalLaunchApartment" value="" class="form-control"  placeholder="...">
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Launch Date<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                               <input type="date" name="launchDate" value="" class="form-control"  placeholder="...">
                                            </div>
                                        </div>  --}}
                                        {{-- <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Availbility<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                               <select name="availbility" class="form-control">
                                                <option>...</option>
                                                <option class="New">New</option>
                                                <option class="Old">Old</option>
                                               </select>
                                            </div>
                                        </div>  --}}


                                     



                                        <h4 class="header-title m-t-0">Building and Construction </h4>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Construction<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                               <select type="text" name="construction" value="" class="form-control">
                                                <option>...</option>
                                                <option value="Brick">Brick</option>
                                               </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Construction Type<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                               <select type="text" name="constructionType" class="form-control">
                                                <option>...</option>
                                                <option value="Attached">Attached</option>
                                               </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Floor<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                               <input type="text" name="floor" value="" class="form-control">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Foundation<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                               <select type="text" name="foundation" value="" class="form-control">
                                                <option>...</option>
                                                <option value="Poured Concrete">Poured Concrete</option>
                                               </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Roof<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                               <select type="text" name="roof" value="" class="form-control">
                                                <option>...</option>
                                                <option value="Flat">Flat</option>
                                               </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">House Style<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                               <select type="text" name="houseStyle" value="" class="form-control">
                                                <option>...</option>
                                                <option value="Duplex">Duplex</option>
                                               </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Levels or Stories<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                               <input type="number" name="lavelOrStories" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Exterior Features<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                               <select type="text" name="exteriorFeature" value="" class="form-control">
                                                <option>...</option>
                                                <option value="Brick">Brick</option>
                                               </select>
                                            </div>
                                        </div>

                                        <h4 class="header-title m-t-0">Exterior and Lot Features</h4>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Yard<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                              
                                                <input type="text" name="yard" class="form-control" placeholder="back,front">
                                               
                                            </div>
                                        </div>
                                        <h4 class="header-title m-t-0">Other Property Info</h4>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">State<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                              
                                                <input type="text" name="state" class="form-control" placeholder="back,front">
                                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">City<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                              
                                                <select type="text" name="city" class="form-control">
                                                    <option>...</option>
                                                    @foreach($city as $cty)
                                                      <option value="{{$cty->cityName}}">{{$cty->cityName}}</option>
                                                    @endforeach
                                                </select>    
                                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Region<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                              
                                                <input type="text" name="region" class="form-control" placeholder="back,front">
                                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Area<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                              
                                                <input type="text" name="area" class="form-control" placeholder="back,front">
                                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Zoning<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                              
                                                <input type="text" name="zoning" class="form-control" placeholder="back,front">
                                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Families<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                              
                                                <input type="text" name="families" class="form-control" placeholder="back,front">
                                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Property Subtype<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                              
                                                <input type="text" name="propertySubtype" class="form-control" placeholder="back,front">
                                               
                                            </div>
                                        </div>




                                        <h4 class="header-title m-t-0">Floor Plans</h4>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Select BHK<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                               <div class="row">

                                        <div class="col-sm-12">
                                             
                                                <div class="form-row align-items-center">
                                                    <div class="col-auto">
                                                        <input type="checkbox" id="checkbox1" value="1 BHK" class="firstCheck">
                                                        <label>1 BHK</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <input type="checkbox" id="checkbox2" value="2 BHK">
                                                        <label>2 BHK</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <input type="checkbox" id="checkbox3" value="3 BHK">
                                                        <label>3 BHK</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <input type="checkbox" id="checkbox4" value="4 BHK">
                                                        <label>4 BHK</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <input type="checkbox" id="checkbox5" value="5 BHK">
                                                        <label>5 BHK</label>
                                                    </div>

                                                </div>
                                             
                                        </div>

                                    </div>
                                            </div>
                                        </div>

                                        <div class="form-group row" id="bhk1xy" hidden>
                                            <label for="inputEmail3" class="col-4 col-form-label"><span class="text-danger"></span></label>
                                            <div class="col-7">
                                                <h4 class="header-title m-t-0">1 Bhk Details</h4>
                                                <input type="file" name="firstBhkFile" value="" class="form-control"  placeholder="...">
                                                <br>
                                                <input type="text" name="firstBhkCarpetArea" value="" class="form-control"  placeholder="Carpet Area">
                                                <br>
                                                <input type="text" name="firstBhkAgreementPrice" value="" class="form-control"  placeholder="Agreement Price">
                                            </div>
                                        </div> 
                                        <div class="form-group row" id="bhk2xy" hidden>
                                            <label for="inputEmail3" class="col-4 col-form-label"><span class="text-danger"></span></label>
                                            <div class="col-7">
                                                <h4 class="header-title m-t-0">2 Bhk Details</h4>
                                                <input type="file" name="secondBhkFile" value="" class="form-control"  placeholder="...">
                                                <br>
                                                <input type="text" name="secondBhkCarpetArea" value="" class="form-control"  placeholder="Carpet Area">
                                                <br>
                                                <input type="text" name="secondBhkAgreementPrice" value="" class="form-control"  placeholder="Agreement Price">
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                            <label for="hori-pass1" class="col-4 col-form-label">Bedrooms<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <select name="bedrooms" class="form-control">
                                                    <option>...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option> 
                                                </select>    
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass1" class="col-4 col-form-label">Full Bathrooms<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <select name="fullbathrooms" class="form-control">
                                                    <option>...</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option> 
                                                </select>    
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass1" class="col-4 col-form-label">Half Bathrooms<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <select name="halfbathrooms" class="form-control">
                                                    <option>...</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option> 
                                                </select>    
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass1" class="col-4 col-form-label">Other Rooms<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <select name="othersrooms" class="form-control">
                                                    <option>...</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option> 
                                                </select>    
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass1" class="col-4 col-form-label">Basement<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <textarea name="basement" class="form-control" cols="100%" rows="5">
                                                </textarea>
                                                      
                                            </div>
                                        </div>


                                         
                                        <div class="form-group row">
                                            <label for="hori-pass1" class="col-4 col-form-label">Category<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <select name="category" value="" class="form-control">
                                                </select>    
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass2" class="col-4 col-form-label">Property Image
                                                <span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="file" name="propertyImage" value="" placeholder="Password" class="form-control" id="hori-pass2">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="webSite" class="col-4 col-form-label">Property Details<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <textarea rows="100%" cols="5" name="propertyDetail" value="" placeholder=""  class="form-control">
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="webSite" class="col-4 col-form-label">Price<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="number" name="price" class="form-control">
                                                </textarea>
                                            </div>
                                        </div>
                                         
                                        
                                          
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Post Property</h4>
                                    <p class="text-muted font-14 m-b-20"> 
                                        Now Post your new properties here,
                                    </p>
 
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Choose Status<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <select class="form-control" name="postStatus" placeholder="Email">
                                                    <option>...</option>
                                                    <option value="publish">Publish</option>
                                                    <option value="draft">Save as Draft</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-8 offset-4">
                                                <button type="submit" class="btn btn-gradient waves-effect waves-light pull-right" style="margin-right: 30px;">
                                                     Post Property
                                                </button> 
                                            </div>
                                        </div>
                                         
                                    
                                </div> 

                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Add Amenities <a href="" title="Add More Amenities" data-toggle="modal" data-target="#login-modal"><i class="fi-circle-plus"></i></a></h4>
                                    <p class="text-muted font-14 m-b-20"> 
                                        Now Post your new properties here,
                                    </p>
                                       <div class="form-group row" style="height: 100px; overflow-y: scroll;"> 
                                            <div class="col-7">
                                                @foreach($amenities as $amnt)
                                                       <li style="list-style-type:none;">
                                                        <input type="checkbox" name="addAmenities[]" value="{{$amnt->amenitiesName}}"><span>{{$amnt->amenitiesName}}</span> 
                                                       </li>
                                                        @endforeach
                                            </div>

                                        </div>
                                        <label>Amenities Details</label>
                                        <textarea cols="25" rows="3" name="amenitiesDetails" placeholder="..." class="form-control"></textarea>
                                   </div> <!-- end col -->

                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Add Interior <a href="" title="Add More Amenities" data-toggle="modal" data-target="#login-modal"><i class="fi-circle-plus"></i></a></h4>
                                    <p class="text-muted font-14 m-b-20"> 
                                        Now Post your new properties here,
                                    </p>
                                       <div class="form-group row" style="height: 100px; overflow-y: scroll;"> 
                                            <div class="col-7">
                                                @foreach($addinterr as $intrr)
                                                    <li style="list-style-type: none;">
                                                        <input type="checkbox" name="addInterior[]" value="{{$intrr->cityName}}"><span>{{$intrr->cityName}}</span> 
                                                    </li>
                                                        @endforeach
                                            </div>

                                        </div>
                                   </div> <!-- end col --> 


                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Add Location</h4>
                                    <p class="text-muted font-14 m-b-20"> 
                                        Choose Your Location on map.
                                    </p>
                                
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Latitude<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="text" name="latitude" class="form-control" placeholder="... ...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Longitude<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="longitude" placeholder="... ...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Manual Address<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="manualAddress" placeholder="... ...">
                                            </div>
                                        </div>
                                         
                                   
                                    <div id="googleMap" style="width:100%;height:200px;"></div>
                                    <script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
                                
                            </div> <!-- end col -->

                            </div> <!-- end col -->

                            


                        </div>


                    </div>
                </form>



                {{-- ################################################### --}}
      {{-- ################################################### --}}

                                    <!-- Signup modal content -->
                                    <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h4 class="header-title m-t-0">Add More Amenities</h4>

                                                    <br> 

                                                    <form class="form-horizontal" action="{{url('/')}}/addAmenities" method="post">
                                                        @csrf

                                                        <div class="form-group m-b-25">
                                                            <div class="col-12">
                                                                <label for="emailaddress1">Amenities Name</label>
                                                                <input class="form-control" name="amenitiesName" type="text"  required="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group m-b-25">
                                                            <div class="col-12">
                                                                 
                                                                <label for="password1">Amenities Icon</label>
                                                                <input class="form-control" type="text" name="amenitiesIcon" placeholder="fa fa-icon">
                                                            </div>
                                                        </div>
 

                                                        <div class="form-group account-btn text-center m-t-10">
                                                            <div class="col-12">
                                                                <button class="btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit">Create</button>
                                                            </div>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->


      {{-- ################################################### --}}
      {{-- ################################################### --}}



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2017 - 2018 © Abstack. - Coderthemes.com
                </footer>

            </div>

            <script type="text/javascript">
                 
                $(document).ready(function () {
    

    $('#checkbox1').on('click',function () {
        if ($('#checkbox1').is(':checked')) {
             $('#bhk1xy').removeAttr('hidden',"");
        } else {
            $('#bhk1xy').attr('hidden',"");
        }
    });
    $('#checkbox2').on('click',function () {
        if ($('#checkbox2').is(':checked')) {
            $('#bhk2xy').removeAttr('hidden',"");
        } else {
            $('#bhk2xy').attr('hidden',"");
        }
    }); 
    $('#checkbox3').on('click',function () {
        if ($('#checkbox3').is(':checked')) {
            alert($(this).val());
        } else {
            alert('You Un-Checked it');
        }
    });
    $('#checkbox4').on('click',function () {
        if ($('#checkbox4').is(':checked')) {
            alert($(this).val());
        } else {
            alert('You Un-Checked it');
        }
    });
    $('#checkbox5').on('click',function () {
        if ($('#checkbox5').is(':checked')) {
            alert($(this).val());
        } else {
            alert('You Un-Checked it');
        }
    });
});
               
            </script>

@endsection
