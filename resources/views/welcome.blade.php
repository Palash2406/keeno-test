<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{config('app.name')}}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- Required Core Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    <title>Keeno</title>
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 200px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand" href="#">
        <img src="https://keeno.app/web/assets/images/logo/logo.svg" width="100" height="30" alt="" loading="lazy">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <form class="form-inline">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">&#128269;</span>
            </div>
            <input type="text" class="form-control" placeholder="Search" aria-label="Username" size="100" aria-describedby="basic-addon1">
        </div>
    </form>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home |<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($categories as $category)
                        <a class="dropdown-item" href="#">{{$category->name}}</a>
                    @endforeach
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">|  Log In |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> Sign Up |</a>
            </li>
            <li class="nav-item">
                <a class=" btn btn-primary nav-link " href="#" tabindex="-1"><i class="fa fa-shopping-cart" style="font-size:20px"></i> Your Cart </a>
            </li>
        </ul>
    </div>
</nav>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://cdn.iphonehacks.com/wp-content/uploads/2013/10/iphone5s-banner-v21.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://image.freepik.com/free-photo/fresh-healthy-gala-apple-white-wood-table-panoramic-banner-background_8087-2793.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://photos5.appleinsider.com/gallery/32119-54674-190725-AppleMusic-l.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="card text-center">
    <div class="card-header">
    </div>
    <div class="card-body">
        <h3 class="card-title">largest online marketplace to make
            shopping simple and fast!</h3>
        <p class="card-title">All Categories</p>
        <div class="container">

            <div class="row">
                <div class="glider-contain">
                    <div class="glider" id="glider1">
                        @foreach($categories as $key=>$category)
                            <div>
                                <div class="card" style="width: 18rem;">
                                    <a href="#"><img src="{{$category->image_url}}" class="card-img-top" ></a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <button aria-label="Previous" class="glider-prev" id="glider1-prev">«</button>
                    <button aria-label="Next" class="glider-next" id="glider1-next">»</button>
                    <div role="tablist" class="dots" id="glider1-dots"></div>
                </div>
            </div>
        </div>
    </div>
    <div align="center">
        <a href="#" class="btn btn-success">Shop now</a>
    </div>
    <h3 class="card-title"></h3>
</div>




<div class="card text-center">
    <div class="card-header">
    </div>
    <div class="card-body">
        <h3 class="card-title">Featured Products</h3>
        <div class="container">
            <div class="row">
                <div class="glider-contain">
                    <div class="glider2" id="glider2">
                        @foreach($featured_products as $featured_product)
                            <div >
                                <div class="card" style="width: 18rem;">
                                    @php
                                    $images = json_decode($featured_product->images_url,true);
                                    @endphp
                                    <img src="{{$images['img1']}}" class="card-img-top" >
                                    <div class="card-body">
                                        <h6 class="card-text">{{$featured_product->title}}</h6>
                                        <h4 class="card-text" style="color: green">{{$featured_product->price}} BDT</h4>
                                        <p class="card-text">Rating: {{$featured_product->rating}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <button aria-label="Previous" class="glider-prev" id="glider2-prev">«</button>
                    <button aria-label="Next" class="glider-next" id="glider2-next">»</button>
                    <div role="tablist" class="dots" id="glider2-dots"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header">
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card-body">
                <h3 class="card-title">Newsletter</h3>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"></p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card-body">
                <h3 class="card-title"></h3>
                <h3 class="card-title"></h3>
                <form class="form-inline my-2 my-lg-0" >
                    <input class="form-control mr-sm-2" type="search" placeholder="your email" size="50" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="card text-center">
    <div class="card-header">
    </div>
    <div class="card-body">
        <h3 class="card-title"></h3>
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-lg-4">
                        <div class="card">
                            @php
                            $images = json_decode($product->images_url,true);
                            @endphp
                            <img src="{{$images['img1']}}" class="card-img-top" >
                            <div class="card-body">
                                <h6 class="card-text">{{$product->title}}</h6>
                                <h4 class="card-text" style="color: green">{{$product->price}} BDT</h4>
                                <p class="card-text">Rating: {{$product->rating}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <div class="container">
        {{$products->links()}}
    </div>
</div>

<div class="card text-center">
    <div class="card-header">
    </div>
    <div class="card-body">
        <h5 class="card-title">About the shop</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

    </div>
    <div class="card-footer text-muted">
    </div>
</div>


<div class="card">

    <div class="row">
        <div class="col-lg-4">
            <div class="card-body">
                <div id="map"></div>
                <p class="card-text"></p>
                <p class="card-text">Address: 1120, College road ,Chittagong, Bangladesh</p>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card-body">
                <h6 class="card-title"> MAIN MENU</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Home</a></li>
                    <li class="list-group-item"><a href="#">About</a></li>
                    <li class="list-group-item"><a href="#">Shop</a></li>
                    <li class="list-group-item"><a href="#">Help</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card-body">
                <h6 class="card-title"> COMPANY</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">The Company</a></li>
                    <li class="list-group-item"><a href="#">Careers</a></li>
                    <li class="list-group-item"><a href="#">Press</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card-body">
                <h6 class="card-title"> DISCOVER</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">The Team</a></li>
                    <li class="list-group-item"><a href="#">Our History</a></li>
                    <li class="list-group-item"><a href="#">Brand Motto</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card-body">
                <h6 class="card-title"> FIND US ON</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Facebook</a></li>
                    <li class="list-group-item"><a href="#">Twitter</a></li>
                    <li class="list-group-item"><a href="#">Instagram</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <h6 class="card-header">&#xa9; Palash Chakraborty</h6>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var uluru = {lat: -25.344, lng: 131.036};
        // The map, centered at Uluru
        var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 4, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
    }


</script>
<script>
    new Glider(document.getElementById('glider1'), {
        slidesToShow: 3,
        slidesToScroll: 1,
        draggable: true,
        dots: '#glider1-dots',
        arrows: {
            prev: '#glider1-prev',
            next: '#glider1-next'
        }
    });
    new Glider(document.getElementById('glider2'), {
        slidesToShow: 3,
        slidesToScroll: 1,
        draggable: true,
        dots: '#glider2-dots',
        arrows: {
            prev: '#glider2-prev',
            next: '#glider2-next'
        }
    });
</script>
</body>
</html>