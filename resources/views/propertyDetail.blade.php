@php foreach($data as $dt) @endphp
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from design.dev.drcsystems.ooo:8084/themeforest/Dream_House/detail-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Apr 2021 05:51:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content = "telephone=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Title -->
    <title>Dream House</title> 
    
    <!-- favicon icon -->
    <link rel="icon" href="{{asset('asst/images/favicon.ico')}}">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPT+Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">  <!-- Icons -->
    <link href="{{asset('asst/css/font-awesome.min.css')}}" rel="stylesheet"><!-- font-awesome.min css -->
    <link href="{{asset('asst/css/custom-icons.css')}}" rel="stylesheet"><!-- custom-icons css -->
    
    <!-- CSS Stylesheet -->
    <link href="{{asset('asst/css/bootstrap.min.css')}}" rel="stylesheet"><!-- bootstrap.min css -->
    <link href="{{asset('asst/css/slick.css')}}" rel="stylesheet"><!-- slick css -->
    <link href="{{asset('asst/css/slick-theme.css')}}" rel="stylesheet"><!-- slick-theme css -->
    <link href="{{asset('asst/css/lightbox.css')}}" rel="stylesheet"><!-- lightbox css -->
    <link href="{{asset('asst/css/theme-styles/theme-1/style.css')}}" rel="stylesheet"><!-- style css -->
    <link href="{{asset('asst/css/theme-styles/theme-1/css3.css')}}" rel="stylesheet"><!-- css3 css -->
    <link href="{{asset('asst/css/theme-colors/theme-1/theme-red.css')}}" rel="stylesheet"><!-- color theme css -->
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if gte IE 9]>
        <style type="text/css">
            .thumb-hover,
            .contact{filter: none;}
        </style>
    <![endif]-->
    <script src="{{asset('assets/js/modernizr-2.8.0.min.js')}}"></script>
</head>

<body>
   
            <div class="navbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="has-child">
                                    <a href="index.html">Home<em class="fa fa-angle-down"></em></a>
                                        <span class="menu-arrow"><em class="fa fa-angle-down"></em></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.html">HOMEPAGE 1</a></li>
                                            <li><a href="index-2.html">HOMEPAGE 2</a></li>
                                            <li><a href="index-3.html">HOMEPAGE 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child active">
                                        <a href="list-layout-full-width.html">Properties<em class="fa fa-angle-down"></em></a>
                                        <span class="menu-arrow"><em class="fa fa-angle-down"></em></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="list-layout-full-width.html">List Layout Full Width</a></li>
                                            <li><a href="list-layout-with-sidebar.html">List Layout With Sidebar</a></li>
                                            <li><a href="grid-layout-full-width.html">Grid Layout Full Width</a></li>
                                            <li><a href="grid-layout-with-sidebar.html">Grid Layout With Sidebar</a></li>
                                            <li><a href="property-listing-map.html">Property Listing Map</a></li> 
                                            <li class="active"><a href="detail-page.html">Detail Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="blog-left-sidebar.html">Blog<em class="fa fa-angle-down"></em></a>
                                        <span class="menu-arrow"><em class="fa fa-angle-down"></em></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-right-sidebar.html">Listing Right Sidebar</a></li>
                                            <li><a href="blog-left-sidebar.html">Listing Left Sidebar</a></li>
                                            <li><a href="blog-details-right-sidebar.html">Listing Right Details Sidebar</a></li>
                                            <li><a href="blog-details-left-sidebar.html">Listing Left Details Sidebar</a></li>
                                        </ul>
                                    </li> 
                                    <li class="has-child">
                                        <a href="2-columns-gallery.html">Gallery<em class="fa fa-angle-down"></em></a>
                                        <span class="menu-arrow"><em class="fa fa-angle-down"></em></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="2-columns-gallery.html">2 Columns Gallery</a></li>
                                            <li><a href="3-columns-gallery.html">3 Columns Gallery</a></li>
                                            <li><a href="4-columns-gallery.html">4 Columns Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="agents.html">Pages<em class="fa fa-angle-down"></em></a>
                                        <span class="menu-arrow"><em class="fa fa-angle-down"></em></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="agents.html">Agents</a></li>
                                            <li><a href="for-rent.html">For Rent</a></li>
                                            <li><a href="for-sale.html">For Sale</a></li>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="404-page.html">404-page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="search-box">
                                <div class="search-group">
                                    <input type="text" placeholder="Search" />
                                    <button type="submit" value=""><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header> 
         
         <!--Breadcrumb Start -->
         <div class="breadcrumb-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="list-layout-full-width.html">Properties</a></li>
                    <li class="active">Detail Page</li>
                </ol>
            </div>
        </div> 
       
        <div id="content" class="inner-wrapper"> 
            <!-- Blogs Section -->
            <section class="inner-content">
                <div class="container">
                    <div class="row">
                        <!-- Detail Page Content -->
                        <div class="col-md-9">
                            <div id="detail-page">
                                <div class="property-slider">
                                    <div class="property-img-slider">
                                        <div>
                                            <div class="property-thumb">
                                                <img src="{{asset('asst/images/blog-img/blogdetail1.jpg')}}" alt="" />
                                                <a class="example-image-link expand-icon" href="{{asset('assets/images/blog-img/blogdetail1.jpg')}}" data-lightbox="example-set" data-title="1">
                                                    <i class="fa fa-expand" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="property-thumb">
                                                <img src="assets/images/blog-img/blogdetail2.jpg" alt="" />
                                                <a class="example-image-link expand-icon" href="assets/images/blog-img/blogdetail2.jpg" data-lightbox="example-set" data-title="2">
                                                    <i class="fa fa-expand" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="property-thumb">
                                                <img src="assets/images/blog-img/blogdetail3.jpg" alt="" />
                                                <a class="example-image-link expand-icon" href="assets/images/blog-img/blogdetail3.jpg" data-lightbox="example-set" data-title="3">
                                                    <i class="fa fa-expand" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="slider-info">
                                        <div><i class="fa fa-camera" aria-hidden="true"></i><div class="get-the-title"></div></div>
                                        <div><i class="fa fa-map-marker" aria-hidden="true"></i>Map</div>
                                    </div>
                                </div>
                                <div>
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#property-detail" aria-controls="property-detail" role="tab" data-toggle="tab">overview</a></li>
                                        <li role="presentation"><a href="#school-neighborhood" aria-controls="school-neighborhood" role="tab" data-toggle="tab">FloarPlan</a></li>
                                        <li role="presentation"><a href="#payment-options" aria-controls="payment-options" role="tab" data-toggle="tab">Amenities</a></li>
                                        <li role="presentation"><a href="#payment-options" aria-controls="payment-options" role="tab" data-toggle="tab"><a href="4-columns-gallery.html">gallery</a></a></li>
                                        <li role="presentation"><a href="#property-history" aria-controls="property-history" role="tab" data-toggle="tab">homeloan</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="property-detail">
                                            <div class="block-wrapper">
                                                <h2>overview</h2>
                                                <div class="inner-wrapper">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <h3>silent features</h3>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <p>Windflower Real Estate Project Will Bring You Close To Nature Backed By Modern Facilities To Provide The Potential Buyers With A Modern LifestyleThe Project Is Connected By Sodepur Railway Station And Upcoming Noaparabarasat Metro Link Which Is The Most Convenient Mode Of Traveling</p>
                                                             <div class="row">
                                                                <h3>More about Windmere</h3>
                                                                <p>Windflower by Signum Group, located in Madhyamgram, Kolkata, offers apartments, with the price being on request. The amenities include landscaped gardens, car parking, and lift. This area is well-connected to the various parts of Kolkata through a wide network of roads. The nearest railway station is at a distance of 1.9 kilometre while the airport is 9.4 kilometre from this area. The property price has witnessed a rise by up to 37.5% in the last 6 months. The area also boasts of many popular educational institutions, hospitals, banks etc. Areas such as New Town, Salt Lake, VIP Road etc. are easily accessible from this locality</p>
                                                                <div class="col-sm-6">  
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border"></div>
                                                <div class="inner-wrapper">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <h3>Floar plans</h3>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <h3>Bedrooms</h3>
                                                                    <div class="border"></div>
                                                                    <ul>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Bedrooms: {{$dt->bedrooms}}</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <h3>Bathrooms</h3>
                                                                    <div class="border"></div>
                                                                    <ul>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Full Bathrooms: {{$dt->fullbathrooms}}</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Half Bathrooms: {{$dt->halfbathrooms}}</li> 
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h3>Other rooms</h3>
                                                            <div class="border"></div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <ul>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Rooms: {{$dt->othersrooms}}</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <ul>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Basement:{{$dt->basement}}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            
                                                            <h3>Interior Features</h3>


                                                            <div class="border"></div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <ul>
                                                                        @foreach($addintrriorr as $adintrr)
                                                                         <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{$adintrr->addInterior}}</li> 
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                               <!--  <div class="col-sm-6">
                                                                    <ul>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Porch</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Refrigerator</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Stove</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Washer</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Window Treatments</li>
                                                                    </ul>
                                                                </div> -->
                                                            </div>
                                                            <h3>Building and Construction </h3>
                                                            <div class="border"></div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <ul>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Construction: {{$dt->construction}}</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Construction Type: {{$dt->constructionType}}</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Floor: {{$dt->floor}}</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Foundation: {{$dt->foundation}}</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <ul>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Roof: {{$dt->roof}}</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>House Style: {{$dt->houseStyle}}</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Levels or Stories: {{$dt->lavelOrStories}}</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Exterior Features: {{$dt->exteriorFeature}}</li>
                                                                    </ul>
                                                                </div> 
                                                            </div>
                                                            <h3>Exterior and Lot Features </h3>
                                                            <div class="border"></div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <ul>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Yard: {{$dt->yard}}</li> 
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h3>Garage and Parking</h3>
                                                            <div class="border"></div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <ul>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>2 Spaces</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Detached Garage</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <ul>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Private Drive</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Number of Garage Spaces: 2</li>
                                                                    </ul>
                                                                </div> 
                                                            </div>


                                                            <h3>Other Property Info</h3>
                                                            <div class="border"></div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <ul>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>State: {{$dt->state}}</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>City: {{$dt->city}}</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Region: {{$dt->region}}</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Area: {{$dt->area}}</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <ul>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Zoning: {{$dt->zoning}}</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Families: {{$dt->families}}</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Property Subtype: {{$dt->propertySubtype}}</li>
                                                                    </ul>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div role="tabpanel" class="tab-pane" id="school-neighborhood">
                                            <div class="block-wrapper">
                                                <h2>Windmere Amenities</h2>
                                                <div class="inner-wrapper">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <h3>Amenities</h3>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <p>{{$dt->amenitiesDetails}}</p>
                                                            {{-- <div class="row">
                                                                <div class="col-sm-6">
                                                                    <h3>Public Elementary</h3>
                                                                    <div class="border"></div>
                                                                    <ul>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Learners And Leaders School</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Ps 290 School</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Ps 123 Suydam School</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Ps 9 School</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Ps 71 Forest School</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Achievement First Bushwick Charter School</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <h3>gallery</h3>
                                                                    <div class="border"></div>
                                                                    <ul>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Jhs 162 The Willoughby School</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Ps 9 School</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Is 93 Ridgewood School</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Is 347 School Of Humanities</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Is 349 Math Science And Technology School</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Achievement First Bushwick Charter School</li>
                                                                    </ul>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border"></div>
                                                <div class="inner-wrapper">
                                                    <div class="row">
                                                        {{-- <div class="col-sm-2">
                                                            <h3><a href="4-columns-gallery.html">gallery</a></h3>
                                           

                                                        </div> --}}
                                                        <!-- <div class="col-sm-10">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Area</th>
                                                                        <th class="text-center">Median Listing</th>
                                                                        <th class="text-center">Median Sales</th>
                                                                        <th class="text-right">Price / Sq ft</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-left">This home</td>
                                                                        <td>$825,000</td>
                                                                        <td>N/A</td>
                                                                        <td class="text-right">$647</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-left">Queens</td>
                                                                        <td>$535,000</td>
                                                                        <td>$470,000</td>
                                                                        <td class="text-right">$417</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-left">New York</td> 
                                                                        <td>$270,000</td>
                                                                        <td>$265,000</td>
                                                                        <td class="text-right">$150</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="payment-options">
                                            <div class="block-wrapper">
                                                <h2>home loan</h2>
                                                <div class="inner-wrapper">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <h3>Monthly Payment</h3>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <p>Have you or your spouse served in the military?  </p>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <p>Veterans may be entitled to:</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Down payment of 0%</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>No mortgage insurance</li>
                                                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Lower interest rate</li>
                                                                    </ul>
                                                                    <p>Yes! Apply veteran benefits </p>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <label>Home Price</label>
                                                                            <input type="text" placeholder="$825,000" />
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <label>Down Payment</label>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <input type="text" placeholder="20%" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <input type="text" placeholder="$825,000" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <label>Mortgage Loan Type</label>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <input type="text" placeholder="Year Fixed 30" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <input type="text" placeholder="3.560%" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <a href="#" class="btn btn-default">Calculate</a>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="chart-area">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <img src="assets/images/chart-img.png" alt="" />
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <table class="chart-detail">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><span class="circle orange"></span>Principal & Interest</td>
                                                                                    <td class="text-right">$2,986</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><span class="circle green"></span>Property Tax</td>
                                                                                    <td class="text-right">$715</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><span class="circle purple"></span>Home Insurance</td>
                                                                                    <td class="text-right">$286</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><span class="circle blue"></span>HOA Fees</td>
                                                                                    <td class="text-right">$0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><span class="circle gray"></span>Mortgage Insurance</td>
                                                                                    <td class="text-right">$0</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="property-history">
                                            <div class="block-wrapper">
                                                <h2>Home Loan</h2>
                                                <div class="inner-wrapper">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <h3>Property Price</h3>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border"></div>
                                                <div class="inner-wrapper">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <h3>Property Price</h3>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Year</th>
                                                                        <th class="text-center">Taxes</th>
                                                                        <th class="text-center">Land</th>
                                                                        <th class="text-center">Additions</th>
                                                                        <th class="text-center"></th>
                                                                        <th class="text-center">Total Assessment</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>2016</td>
                                                                        <td>Price Unavailable</td>
                                                                        <td>$5,947 +</td>
                                                                        <td>$17,276</td>
                                                                        <td>=</td>
                                                                        <td>$23,223</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2015</td>
                                                                        <td>$4,073</td>
                                                                        <td>$7,895 +</td>
                                                                        <td>$14,515</td>
                                                                        <td>=</td>
                                                                        <td>$22,410</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2014</td>
                                                                        <td>$3,529</td>
                                                                        <td>$7,971 +</td>
                                                                        <td>$13,171</td>
                                                                        <td>=</td>
                                                                        <td>$21,142</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            </div>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div> 
                        <!-- SideBar -->
                        <div class="col-md-3">
                            <div id="sidebar">
                                <div class="side-wrapper">
                                    <div class="heading h2">Contact Our Agent</div>
                                    <div class="side-info">
                                        <div class="agent-contact-form">
                                            <form method="post" action="{{url('/')}}/contactAgent">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" name="fullName" class="form-control" placeholder="Full Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" placeholder="Message"></textarea>
                                                </div>
                                                 
                                                <button type="submit" class="btn btn-danger">Submit Now</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="side-wrapper">
                                    <div class="agent-need">
                                        <div class="agent-img"><img src="assets/images/agent-img.png" alt="agent-img.png" /></div>
                                        <div class="contact-agent">
                                            <div class="h2">Need a personal agent ?</div>
                                            <a href="#" class="btn btn-danger"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="side-wrapper">
                                    <div class="heading h2">Populer Post</div>
                                    <div class="side-info">
                                        <div class="post">
                                            <div class="img"><img src="assets/images/post-img1.png" alt="post" /></div>
                                            <div class="post-detail">
                                                <div class="h3">Lorem Ipsum is simply dummy text of the</div>
                                                <div class="date">21 June 2016</div>
                                            </div>
                                        </div>
                                        <div class="post">
                                            <div class="img"><img src="assets/images/post-img2.png" alt="post" /></div>
                                            <div class="post-detail">
                                                <div class="h3">Lorem Ipsum is simply dummy text of the</div>
                                                <div class="date">21 June 2016</div>
                                            </div>
                                        </div>
                                        <div class="post">
                                            <div class="img"><img src="assets/images/post-img3.png" alt="post" /></div>
                                            <div class="post-detail">
                                                <div class="h3">Lorem Ipsum is simply dummy text of the</div>
                                                <div class="date">21 June 2016</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      
                </div>
            </section>
        </div>
        <!-- Get In Touch Section -->
        <!-- <div id="get-in-touch">
            <div class="container">
                <div class="get-in-touch">
                    <div class="img"><img src="assets/images/get-in-touch.png" alt="Get In Touch" /></div>
                    <div class="row">
                        <div class="col-md-5 col-md-offset-2 col-sm-5">
                            <div class="sale-home">
                                <div class="h1">LOOKING TO SELL YOUR HOME?</div>
                                <p>Lorem ipsum dolor sit amet, consecteturin ligula .</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <a href="tel:215-123-4567" class="h1 call-us"><span>call us now</span>215-123-4567</a>
                        </div>
                        <div class="col-md-2 col-md-offset-1 col-sm-3">
                            <a href="#" class="btn btn-primary">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Footer Start -->
        <footer id="footer">
            <div class="blue-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h2>Recent Post</h2>
                        <div class="recent-posts">
                            <div class="post">
                                <div class="img">
                                    <img src="assets/images/recent-post1.png" alt="Recent Post" />
                                </div>
                                <div class="detail">
                                    <p>There are many variations of passages of Lorem Ipsum available,</p>
                                    <span class="date">- 5 June 2016</span>
                                </div>
                            </div>
                            <div class="post">
                                <div class="img">
                                    <img src="assets/images/recent-post2.png" alt="Recent Post" />
                                </div>
                                <div class="detail">
                                    <p>There are many variations of passages of Lorem Ipsum available,</p>
                                    <span class="date">- 5 June 2016</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h2>Contact Us</h2>
                        <address>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>74 West Main Street, Oyster Bay,  New York 11771 </p>
                            <p><i aria-hidden="true" class="fa fa-phone"></i>516-124-4567 ext 101</p>
                            <p><i aria-hidden="true" class="fa fa-fax"></i>123-456-789</p>
                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@americanrealty.com">info@americanrealty.com</a></p>
                        </address>
                        <ul class="list-inline social-links">
                            <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i aria-hidden="true" class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-links clearfix">
                    <span class="copyright">Copyright <span class="year">2016</span>. All Rights Reserved by Dream House</span>
                    <ul class="list-inline">
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertise with us</a></li>
                        <li><a href="#">Agent support</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Privacy/Terms</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <!-- JavaScript files -->
    <script src="{{asset('asst/js/jquery-1.12.4.min.js')}}"></script><!-- jquery-1.12.4.min js-->
    <script src="{{asset('asst/js/bootstrap.min.js')}}"></script><!-- bootstrap.min js-->
    <script src="{{asset('asst/js/lightbox-plus-jquery.min.js')}}"></script>
    <script src="{{asset('asst/js/slick.min.js')}}"></script><!-- slick js-->
    <script src="{{asset('asst/js/theme-jquery/theme-1/custom.js')}}"></script><!-- custom js-->
</body>

<!-- Mirrored from design.dev.drcsystems.ooo:8084/themeforest/Dream_House/detail-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Apr 2021 05:51:56 GMT -->
</html>
