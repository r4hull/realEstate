@php foreach($general as $gnrl) @endphp
<!DOCTYPE html>
<html lang="en"> 

<!-- Mirrored from design.dev.drcsystems.ooo:8084/themeforest/Dream_House/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Apr 2021 05:36:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" >
    <meta name="format-detection" content = "telephone=no">
    <meta name="description" content="">
    <meta name="author" content=""> 
    
    <!-- Title -->
    <title>Lokal Properties</title> 
    
    <!-- favicon icon -->
    <link rel="icon" href="asst/images/favicon.ico">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPT+Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">  
    
    <!-- Icons -->
    <link href="asst/css/font-awesome.min.css" rel="stylesheet"><!-- font-awesome.min css -->
    <link href="asst/css/custom-icons.css" rel="stylesheet"><!-- custom-icons css -->
    
    <!-- CSS Stylesheet -->
    <link href="asst/css/bootstrap.min.css" rel="stylesheet"><!-- bootstrap.min css -->
    <link href="asst/css/slick.css" rel="stylesheet"><!-- slick css -->
    <link href="asst/css/slick-theme.css" rel="stylesheet"><!-- slick-theme css -->
    <link href="asst/css/bootstrap-select.css" rel="stylesheet"><!-- bootsrap selectbox -->
    <link href="asst/css/theme-styles/theme-1/style.css" rel="stylesheet"><!-- style css -->
    <link href="asst/css/theme-styles/theme-1/css3.css" rel="stylesheet"><!-- css3 css -->
    <link href="asst/css/theme-colors/theme-1/theme-red.css" rel="stylesheet"><!-- color theme css -->
    
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
    <script src="asst/js/modernizr-2.8.0.min.js"></script>
</head> 

<body>
    <div id="wrapper" class="homePage">
        <!-- Header Start -->
        <header id="header">
            <div class="container">
                <div class="navbar-header">
                    <div class="col-md-4 col-sm-3 clearfix">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{$gnrl->websiteLogo}}" alt="Logo"/>
                        </a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button> 
                    </div>
                    <div class="col-md-8 col-sm-9">
                        <ul class="quick-links">
                            <li><a href="tel:9959616716"><i class="fa fa-phone" aria-hidden="true"></i>{{$gnrl->websiteContact}}</a></li>
                            <li><a href="mailto:{{$gnrl->websiteEmail}}"><i aria-hidden="true" class="fa fa-envelope-o"></i>{{$gnrl->websiteEmail}}</a></li>
                            <li><a href="login.html"><i aria-hidden="true" class="fa fa-user"></i>Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Navigation Start -->
            <div class="navbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="has-child">
                                    <a href="index.html">Home</a>
                                        <!-- <span class="menu-arrow"><em class="fa fa-angle-down"></em></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.html">HOMEPAGE 1</a></li>
                                            <li><a href="index-2.html">HOMEPAGE 2</a></li>
                                            <li><a href="index-3.html">HOMEPAGE 3</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="has-child">
                                        <a href="list-layout-full-width.html">Properties<em class="fa fa-angle-down"></em></a>
                                        <span class="menu-arrow"><em class="fa fa-angle-down"></em></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="list-layout-full-width.html">Plots</a></li>
                                            <li><a href="list-layout-with-sidebar.html">Flats</a></li>
                                            <!-- <li><a href="grid-layout-full-width.html">Grid Layout Full Width</a></li>
                                            <li><a href="grid-layout-with-sidebar.html">Grid Layout With Sidebar</a></li>
                                            <li><a href="property-listing-map.html">Property Listing Map</a></li> 
                                            <li><a href="detail-page.html">Detail Page</a></li> -->
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="blog-left-sidebar.html">Top Properties<em class="fa fa-angle-down"></em></a>
                                        <span class="menu-arrow"><em class="fa fa-angle-down"></em></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-right-sidebar.html">Hyderabad</a></li>
                                            <li><a href="blog-left-sidebar.html">Banglore</a></li>
                                            <!-- <li><a href="blog-details-right-sidebar.html">Listing Right Details Sidebar</a></li>
                                            <li><a href="blog-details-left-sidebar.html">Listing Left Details Sidebar</a></li> -->
                                        </ul>
                                    </li> 
                                    <li class="has-child active">
                                        <a href="2-columns-gallery.html">Input<em class="fa fa-angle-down"></em></a>
                                        <span class="menu-arrow"><em class="fa fa-angle-down"></em></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="2-columns-gallery.html">Input</a></li>
                                            <li><a href="3-columns-gallery.html">Input</a></li>
                                            <li><a href="4-columns-gallery.html">Input</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="agents.html">About Us</a>
                                        <!-- <span class="menu-arrow"><em class="fa fa-angle-down"></em></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="agents.html">Agents</a></li>
                                            <li><a href="for-rent.html">For Rent</a></li>
                                            <li><a href="for-sale.html">For Sale</a></li>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="404-page.html">404-page</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="contact-us.html">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            <div class="search-box">
                                <div class="search-group">
                                    <input type="text" placeholder="Search" />
                                    <button type="submit" value=""><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Banner Section -->
        <section id="banner" class="banner-slider white-color text-center">
            <div class="banner-img-slider">
                <div>
                    <div class="banner-thumb" style="background-image:url(asst/images/banner-img/banner-slide-1.jpg);"></div>
                </div>
                <div>
                    <div class="banner-thumb" style="background-image:url(asst/images/banner-img/banner-slide-2.jpg);"></div>
                </div>
                <div>
                    <div class="banner-thumb" style="background-image:url(asst/images/banner-img/banner-slide-3.jpg);"></div>
                </div>
            </div>
            <div class="banner-layer"></div>
            <div class="banner-text-wrapper">
                <div class="container">
                    <div class="banner-text">
                        <h1>NOW IT'S EASY TO FIND YOUR PROPERTY</h1>
                        <p>All the property realted services at once place.</p>

                        <form method="post" action="{{url('/')}}/query">
                            @csrf
                        <div class="search-wrapper">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="input-group" >
                                        <input  style="padding-left: 150px;" type="text" name="searchBox" class="form-control" placeholder="Search Any Kind Of Property">
                                        <select id="buy" name="cityBox" class="selectpicker show-tick form-control">
                                            <option>Select City</option>
                                            @php $city=DB::table('cityname')
                                                           ->where('type',"city")
                                                           ->get();
                                            @endphp
                                            @foreach($city as $ctyy)
                                            <option value="{{$ctyy->cityName}}">{{$ctyy->cityName}}</option> 
                                            @endforeach
                                        </select>
                                         <span class="input-group-btn">
                                            <button class="btn btn-danger" style="background-color: goldenrod;" type="text"><i aria-hidden="true" class="fa fa-search"></i>Search</button>
                                         </span>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Navigation Start -->
        <!-- <div class="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="has-child active">
                                <a href="index.html">Home<em class="fa fa-angle-down"></em></a>
                                    <span class="menu-arrow"><em class="fa fa-angle-down"></em></span>
                                    <ul class="dropdown-menu">
                                        <li class="active"><a href="index.html">HOMEPAGE 1</a></li>
                                        <li><a href="index-2.html">HOMEPAGE 2</a></li>
                                        <li><a href="index-3.html">HOMEPAGE 3</a></li>
                                    </ul>
                                </li>
                                <li class="has-child">
                                    <a href="list-layout-full-width.html">Properties<em class="fa fa-angle-down"></em></a>
                                    <span class="menu-arrow"><em class="fa fa-angle-down"></em></span>
                                    <ul class="dropdown-menu">
                                        <li><a href="list-layout-full-width.html">List Layout Full Width</a></li>
                                        <li><a href="list-layout-with-sidebar.html">List Layout With Sidebar</a></li>
                                        <li><a href="grid-layout-full-width.html">Grid Layout Full Width</a></li>
                                        <li><a href="grid-layout-with-sidebar.html">Grid Layout With Sidebar</a></li>
                                        <li><a href="property-listing-map.html">Property Listing Map</a></li> 
                                        <li><a href="detail-page.html">Detail Page</a></li>
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
        </div>   -->
        <!-- Content Start -->
        <div id="content">
            <!-- Services Section -->
            <!-- <section id="services" class="section-block">
                <div class="container">
                    <div class="top-desc">
                        <h1>Services</h1>
                        <div class="border"><span><img alt="icon" src="asst/images/home-icon.png"></span></div>
                        <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="service">
                                <i class="icon icon-guidance" aria-hidden="true"></i>
                                <div class="h2">Guidance</div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service">
                                <i class="icon icon-reputation" aria-hidden="true"></i>
                                <div class="h2">Reputation</div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service">
                                <i class="icon icon-happyclients" aria-hidden="true"></i>
                                <div class="h2">Happy Clients</div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service">
                                <i class="icon icon-listing" aria-hidden="true"></i>
                                <div class="h2">Listing</div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service">
                                <i class="icon icon-advertise" aria-hidden="true"></i>
                                <div class="h2">Advertise</div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service">
                                <i class="icon icon-consulting" aria-hidden="true"></i>
                                <div class="h2">Consulting</div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- About Us Information Section -->
            <section id="abt-info">
                <div class="red-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="info-box">
                                <span class="icon"><i aria-hidden="true" class="fa fa-heart"></i></span>
                                <div class="h1"><span class="counter">10</span> million</div>
                                <p>Happy Customers</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="info-box">
                                <span class="icon"><i aria-hidden="true" class="fa fa-thumbs-o-up"></i></span>
                                <div class="h1"><span class="counter">50</span> million</div>
                                <p>Sellers Prefer us</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="info-box">
                                <span class="icon"><i aria-hidden="true" class="fa fa-users"></i></span>
                                <div class="h1"><span class="counter">12</span> million</div>
                                <p>Buyers trust us</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="info-box">
                                <span class="icon"><i aria-hidden="true" class="fa fa-comments-o"></i></span>
                                <div class="h1"><span class="counter">1255</span></div>
                                <p>Expert Guidance</p>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
            <!-- Latest Properties Section -->
            <section id="latest-properties" class="section-block">
                <div class="container">
                    <div class="top-desc">
                        <h1>Latest Properties</h1>
                        <div class="border"><span><img src="asst/images/home-icon.png" alt="icon"></span></div>
                        <p class="text-center"></p>
                    </div>
                  
                    <div class="properties-slider slider-outer">
                        
                        @foreach($data as $getData)
                        <div class="slide-div">

                        <a href="{{url('/')}}/{{$getData->title}}/{{$getData->prptFor}}/{{$getData->qq}}">
                            <div class="property-content">
                                <div class="img">
                                    <img src="{{$getData->propertyImage}}" alt="property-img" />
                                    <div class="sale-label"><span>{{$getData->prptFor}}</span></div>
                                </div>
                                <div class="property-info">
                                    <div class="row">
                                        <div class="col-xs-10">
                                            <div class="h2">{{$getData->title}}<span class="price">₹ {{$getData->price}}</span></div>
                                            <div class="features">
                                                <ul class="clearfix">
                                                    <li style="color:#001;"><i aria-hidden="true" class="icon icon-squarefeet"></i>{{$getData->totalArea}} Sq Ft</li>
                                                    <li style="color:#001;"><i aria-hidden="true" class="icon icon-bedrooms"></i>{{$getData->bedrooms}} Bedrooms</li>
                                                    <li style="color:#001;"><i aria-hidden="true" class="icon icon-bathrooms"></i>{{$getData->fullbathrooms}} Bathrooms</li>
                                                    <li style="color:#001;"><i aria-hidden="true" class="icon icon-carparking"></i>Parking {{$getData->parking}}</li> 
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="#" class="add-fav"><i aria-hidden="true" class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="location"><i aria-hidden="true" class="fa fa-map-marker"></i>{{$getData->city}}</div>
                            </div>
                            </a>
                        </div>
                        
                        @endforeach
                         
                    </div>
                
                </div>
                
            </section> 
            <!-- Top Properties  -->
            <section>
                <div class="top-desc">
                    <h1>Latest Properties</h1>
                    <div class="border"><span><img src="asst/images/home-icon.png" alt="icon"></span></div>
                    <p class="text-center"></p>
                </div>
                <div class="container">
            <div id="properties-grid">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="property-wrapper">
                            <div class="property-content">
                                <div class="img">
                                    <img alt="property-img" src="asst/images/property/town.png">
                                    <div class="sale-label"><span>FOR SALE</span></div>
                                    <a class="add-fav" href="#" tabindex="0"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="detail-page.html" class="hover-block">
                                        <span>View Details</span>
                                    </a>
                                </div>
                                <div class="property-info">
                                    <div class="h2 clearfix">176 Perry St Apt 3S</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>New York, NY 10014</div>
                                    <span class="price">$9,950,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="property-wrapper">
                            <div class="property-content">
                                <div class="img">
                                    <img alt="property-img" src="asst/images/property/town.png">
                                    <div class="sale-label for-rent"><span>FOR rent</span></div>
                                    <a class="add-fav" href="#" tabindex="0"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="detail-page.html" class="hover-block">
                                        <span>View Details</span>
                                    </a>
                                </div>
                                <div class="property-info">
                                    <div class="h2 clearfix">248 W 71st St</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>New York, NY 10023</div>
                                    <span class="price">$7,995,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="property-wrapper">
                            <div class="property-content">
                                <div class="img">
                                    <img alt="property-img" src="asst/images/property/town.png">
                                    <div class="sale-label for-rent"><span>FOR rent</span></div>
                                    <a class="add-fav" href="#" tabindex="0"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="detail-page.html" class="hover-block">
                                        <span>View Details</span>
                                    </a>
                                </div>
                                <div class="property-info">
                                    <div class="h2 clearfix">138 Mulberry St #3A</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>New York, NY 10013</div>
                                    <span class="price">$4,200,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="property-wrapper">
                            <div class="property-content">
                                <div class="img">
                                    <img alt="property-img" src="asst/images/property/town.png">
                                    <div class="sale-label"><span>FOR SALE</span></div>
                                    <a class="add-fav" href="#" tabindex="0"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="detail-page.html" class="hover-block">
                                        <span>View Details</span>
                                    </a>
                                </div>
                                <div class="property-info">
                                    <div class="h2 clearfix">543 Broadway</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>New York, NY 10023</div>
                                    <span class="price">$2,995,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="property-wrapper">
                            <div class="property-content">
                                <div class="img">
                                    <img alt="property-img" src="asst/images/property/town.png">
                                    <div class="sale-label for-rent"><span>FOR rent</span></div>
                                    <a class="add-fav" href="#" tabindex="0"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="detail-page.html" class="hover-block">
                                        <span>View Details</span>
                                    </a>
                                </div>
                                <div class="property-info">
                                    <div class="h2 clearfix">269 W 72nd St #12A</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>New York, NY 10023</div>
                                    <span class="price">$649,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="property-wrapper">
                            <div class="property-content">
                                <div class="img">
                                    <img alt="property-img" src="asst/images/property/town.png">
                                    <div class="sale-label"><span>FOR SALE</span></div>
                                    <a class="add-fav" href="#" tabindex="0"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="detail-page.html" class="hover-block">
                                        <span>View Details</span>
                                    </a>
                                </div>
                                <div class="property-info">
                                    <div class="h2 clearfix">225 Central Park W #106</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>New York, NY 10024</div>
                                    <span class="price">$649,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="property-wrapper">
                            <div class="property-content">
                                <div class="img">
                                    <img alt="property-img" src="asst/images/property/town.png">
                                    <div class="sale-label"><span>FOR SALE</span></div>
                                    <a class="add-fav" href="#" tabindex="0"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="detail-page.html" class="hover-block">
                                        <span>View Details</span>
                                    </a>
                                </div>
                                <div class="property-info">
                                    <div class="h2 clearfix">317 W 103rd St #2R</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>New York, NY 10023</div>
                                    <span class="price">$499,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="property-wrapper">
                            <div class="property-content">
                                <div class="img">
                                    <img alt="property-img" src="asst/images/property/town.png">
                                    <div class="sale-label"><span>FOR SALE</span></div>
                                    <a class="add-fav" href="#" tabindex="0"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="detail-page.html" class="hover-block">
                                        <span>View Details</span>
                                    </a>
                                </div>
                                <div class="property-info">
                                    <div class="h2 clearfix">249 Eldridge St</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>New York, NY 10002</div>
                                    <span class="price">$495,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <!-- What Client Say Section -->
            <section id="client-say" class="section-block white-color">
                <div class="red-overlay"></div>
                <div class="container">
                    <div class="top-desc">
                        <h1>Customers Review</h1>
                        <div class="border"><span><img src="asst/images/user-img.png" alt="icon"></span></div>
                        <p class="text-center">“A review is a survey over a whole subject or division of it, or especially an article making a critical reconsideration and summary of something written: a review of the latest book on Chaucer. A criticism is a judgment, usually in an article, either favorable or unfavorable or both: a criticism of a proposed plan.”</p>
                    </div>
                    <div class="client-say-slider slider-outer">
                        <div class="slide-div">
                            <div class="client-feedback">
                                <div class="client-detail clearfix">
                                    <div class="img"><img src="asst/images/user-img.png" alt="Client Image" style="width: 100px;" /></div>
                                    <div class="name h2">Jack Willshere<span class="desgination">Co- Founder at CM Villa</span></div>
                                </div>
                                <div class="feedcack-detail"><p>“A review is a survey over a whole subject or division of it, or especially an article making a critical reconsideration and summary of something written: a review of the latest book on Chaucer. A criticism is a judgment, usually in an article, either favorable or unfavorable or both: a criticism of a proposed plan.”</p></div>
                            </div>
                        </div>
                        <div class="slide-div">
                            <div class="client-feedback">
                                <div class="client-detail clearfix">
                                    <div class="img"><img src="asst/images/user-img.png" alt="Client Image" style="width: 100px;" /></div>
                                    <div class="name h2">Mark Joie<span class="desgination">Co- Founder at NP Villa</span></div>
                                </div>
                                <div class="feedcack-detail"><p>“A review is a survey over a whole subject or division of it, or especially an article making a critical reconsideration and summary of something written: a review of the latest book on Chaucer. A criticism is a judgment, usually in an article, either favorable or unfavorable or both: a criticism of a proposed plan.”</p></div>
                            </div>
                        </div>
                        <div class="slide-div">
                            <div class="client-feedback">
                                <div class="client-detail clearfix">
                                    <div class="img"><img src="asst/images/user-img.png" alt="Client Image" style="width: 100px;" /></div>
                                    <div class="name h2">Robert Catch<span class="desgination">Co- Founder at WCP Villa</span></div>
                                </div>
                                <div class="feedcack-detail"><p>“A review is a survey over a whole subject or division of it, or especially an article making a critical reconsideration and summary of something written: a review of the latest book on Chaucer. A criticism is a judgment, usually in an article, either favorable or unfavorable or both: a criticism of a proposed plan.”</p></div>
                            </div>
                        </div>
                        <div class="slide-div">
                            <div class="client-feedback">
                                <div class="client-detail clearfix">
                                    <div class="img"><img src="asst/images/user-img.png" alt="Client Image" style="width: 100px;" /></div>
                                    <div class="name h2">Jack Willshere<span class="desgination">Co- Founder at CM Villa</span></div>
                                </div>
                                <div class="feedcack-detail"><p>“A review is a survey over a whole subject or division of it, or especially an article making a critical reconsideration and summary of something written: a review of the latest book on Chaucer. A criticism is a judgment, usually in an article, either favorable or unfavorable or both: a criticism of a proposed plan.”</p></div>
                            </div>
                        </div>
                        <div class="slide-div">
                            <div class="client-feedback">
                                <div class="client-detail clearfix">
                                    <div class="img"><img src="asst/images/user-img.png" alt="Client Image" style="width: 100px;" /></div>
                                    <div class="name h2">Mark Joie<span class="desgination">Co- Founder at NP Villa</span></div>
                                </div>
                                <div class="feedcack-detail"><p>“A review is a survey over a whole subject or division of it, or especially an article making a critical reconsideration and summary of something written: a review of the latest book on Chaucer. A criticism is a judgment, usually in an article, either favorable or unfavorable or both: a criticism of a proposed plan.”</p></div>
                            </div>
                        </div>
                        <div class="slide-div">
                            <div class="client-feedback">
                                <div class="client-detail clearfix">
                                    <div class="img"><img src="asst/images/user-img.png" alt="Client Image" style="width: 100px;" /></div>
                                    <div class="name h2">Robert Catch<span class="desgination">Co- Founder at WCP Villa</span></div>
                                </div>
                                <div class="feedcack-detail"><p>“A review is a survey over a whole subject or division of it, or especially an article making a critical reconsideration and summary of something written: a review of the latest book on Chaucer. A criticism is a judgment, usually in an article, either favorable or unfavorable or both: a criticism of a proposed plan.”</p></div>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
            <!-- Valuable Tools & Info Section -->
            <!-- <section id="tools-and-info" class="section-block">
                <div class="container">
                    <div class="top-desc">
                        <h1>Valuable tools and information</h1>
                        <div class="border"><span><img src="asst/images/home-icon.png" alt="icon"></span></div>
                        <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="content-box">
                                <div class="img"><img src="asst/images/tools-img1.png" alt="Image" /></div>
                                <div class="detail">
                                    <div class="h2">Agent Finder</div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                                    <a href="#" class="btn-link">More Details <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="content-box">
                                <div class="img"><img src="asst/images/tools-img2.png" alt="Image" /></div>
                                <div class="detail">
                                    <div class="h2">Local mortgage lenders</div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                                    <a href="#" class="btn-link">More Details <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="content-box">
                                <div class="img"><img src="asst/images/tools-img3.png" alt="Image" /></div>
                                <div class="detail">
                                    <div class="h2">Home design ideas</div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                                    <a href="#" class="btn-link">More Details <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  -->
            <!-- About Agent Section -->
            <section id="about-agent">
                <div class="agent-slider">
                    <div class="agent-bg">
                        <div class="col-md-7 no-padding">
                            <div class="agent-img"><img src="asst/images/bg.jpg" alt="Agent Image" /></div>
                        </div>
                        <div class="about-agent-detail">
                            <div class="inner-bg">
                                <h1>ABOUT LOKAL PROPERTIES </h1>
                                <!-- <div class="h2 name">John aDoe<span class="desgination">DH Real Estate</span></div> -->
                                <p class="agent-info">“PropTiger.com is an online real estate advisor that functions on the fundamentals of trust, transparency and expertise. As a digital marketplace with an exhaustive range of property listings, we know it is easy to get lost. At PropTiger.com, we guide home buyers right from the start of their home search to the very end. Browse through more than 139,000 verified real estate properties with accurate lowdown on amenities, neighborhoods and cities, and genuine pictures. Shortlist your favorite homes and allow us to arrange site visits. Our work does not end here. We assist you with home loans and property registrations. Buying a home is an important investment – turn it into your safest, best deal at PropTiger.com.”</p>
                                <address>
                                    <p><label>ADDRESS</label><i aria-hidden="true" class="fa fa-map-marker"></i>Hyderabad</p>
                                    <p><label>Phone</label><i class="fa fa-phone" aria-hidden="true"></i>9321654875</p>
                                </address>
                                <a href="#" class="btn btn-default">contact</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="agent-bg">
                        <div class="col-md-7 no-padding">
                            <div class="agent-img"><img src="asst/images/agent-img/agent-img2.jpg" alt="Agent Image" /></div>
                        </div>
                        <div class="about-agent-detail">
                            <div class="inner-bg">
                                <h1>ABOUT AGENT </h1>
                                <div class="h2 name">Alexandra<span class="desgination">DH Real Estate</span></div>
                                <p class="agent-info">“Lorem Ipsum is simply dummy text of the printing and typesetting industry been the try'sdard dummy text ever since the 1500s, when an took a galley of type and scrambled it to  industry beenmake a not only five centuries ”</p>
                                <address>
                                    <p><label>ADDRESS</label><i aria-hidden="true" class="fa fa-map-marker"></i>Space Marketing Shop 55 Broadway, New York, NY  11205</p>
                                    <p><label>Phone</label><i class="fa fa-phone" aria-hidden="true"></i>(844) 278-1845</p>
                                </address>
                                <a href="#" class="btn btn-default">contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="agent-bg">
                        <div class="col-md-7 no-padding">
                            <div class="agent-img"><img src="asst/images/agent-img/agent-img3.jpg" alt="Agent Image" /></div>
                        </div>
                        <div class="about-agent-detail">
                            <div class="inner-bg">
                                <h1>Edward Altman</h1>
                                <div class="h2 name">Alexandra<span class="desgination">DH Real Estate</span></div>
                                <p class="agent-info">“Lorem Ipsum is simply dummy text of the printing and typesetting industry been the try'sdard dummy text ever since the 1500s, when an took a galley of type and scrambled it to  industry beenmake a not only five centuries ”</p>
                                <address>
                                    <p><label>ADDRESS</label><i aria-hidden="true" class="fa fa-map-marker"></i>REALNY REALTY 1822 Haring street, Brooklyn, NY  11229</p>
                                    <p><label>Phone</label><i class="fa fa-phone" aria-hidden="true"></i>(732) 803-0108 </p>
                                </address>
                                <a href="#" class="btn btn-default">contact</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </section>
            <!-- Our Clients Section -->
            <section id="our-clients" class="section-block">
                <div class="container">
                    <h1>Our Clients</h1>
                    <div class="border"><span><img src="asst/images/home-icon.png" alt="icon" /></span></div>
                    <div class="clients-slider">
                        <div><img src="asst/images/test.png" alt="WooCommerece" style="width: 200px;" /></div>
                        <div><img src="asst/images/test.png" alt="jQuery"  style="width: 200px;"/></div>
                        <div><img src="asst/images/test.png" alt="Swan" style="width: 200px;" /></div>
                        <div><img src="asst/images/test.png" alt="GEARHEAD" style="width: 200px;" /></div>
                        <div><img src="asst/images/test.png" alt="envato" style="width: 200px;" /></div>
                        <div><img src="asst/images/test.png" alt="WordPress" style="width: 200px;" /></div>
                        <!-- <div><img src="asst/images/client-img/woo-commerece.png" alt="WooCommerece" /></div>
                        <div><img src="asst/images/client-img/jquery.png" alt="jQuery" /></div>
                        <div><img src="asst/images/client-img/swan.png" alt="Swan" /></div>
                        <div><img src="asst/images/client-img/gearhead.png" alt="GEARHEAD" /></div>
                        <div><img src="asst/images/client-img/envato.png" alt="envato" /></div>
                        <div><img src="asst/images/client-img/wordpress.png" alt="WordPress" /></div> -->
                    </div>
                </div>
            </section>
        </div>
        <!-- Get In Touch Section -->
        <div id="get-in-touch">
            <div class="container">
                <div class="get-in-touch">
                    <!-- <div class="img"><img src="asst/images/get-in-touch.png" alt="Get In Touch" /></div> -->
                    <div class="row">
                        <div class="col-md-5 col-md-offset-2 col-sm-5">
                            <div class="sale-home">
                                <div class="h1">LOOKING TO BUY A HOME?</div>
                                <!-- <p>Lorem ipsum dolor sit amet, consecteturin ligula .</p> -->
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <a href="tel:215-123-4567" class="h1 call-us"><span>call us now</span>9874651321</a>
                        </div>
                        <div class="col-md-2 col-md-offset-1 col-sm-3">
                            <a href="#" class="btn btn-primary">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Start -->
        <footer id="footer">
            <div class="blue-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <h2>About Us</h2>
                        <p>PropTiger.com is an online real estate advisor that functions on the fundamentals of trust, transparency and expertise. As a digital marketplace with an exhaustive range of property listings.</p>
                        <p>we know it is easy to get lost. At PropTiger.com, we guide home buyers right from the start of their home search to the very end.</p>
                    </div>
                    <!-- <div class="col-md-4 col-sm-6">
                        <h2>Recent Post</h2>
                        <div class="recent-posts">
                            <div class="post">
                                <div class="img">
                                    <img src="asst/images/recent-post1.png" alt="Recent Post" />
                                </div>
                                <div class="detail">
                                    <p>There are many variations of passages of Lorem Ipsum available,</p>
                                    <span class="date">- 5 June 2016</span>
                                </div>
                            </div>
                            <div class="post">
                                <div class="img">
                                    <img src="asst/images/recent-post2.png" alt="Recent Post" />
                                </div>
                                <div class="detail">
                                    <p>There are many variations of passages of Lorem Ipsum available,</p>
                                    <span class="date">- 5 June 2016</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-4 col-sm-6" style="float: left;">
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
    <script src="asst/js/jquery-1.12.4.min.js"></script><!-- jquery-1.12.4.min js-->
    <script src="asst/js/bootstrap.min.js"></script><!-- bootstrap.min js-->
    <script src="asst/js/slick.min.js"></script><!-- slick js-->
    <script src="asst/js/bootstrap-select.min.js"></script><!-- bootstrap selectbox js -->
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> 
    <script src="asst/js/jquery.counterup.min.js"></script><!-- counter js -->
    <script src="asst/js/theme-jquery/theme-1/custom.js"></script><!-- custom js--> 
</body>

<!-- Mirrored from design.dev.drcsystems.ooo:8084/themeforest/Dream_House/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Apr 2021 05:41:38 GMT -->
</html>
