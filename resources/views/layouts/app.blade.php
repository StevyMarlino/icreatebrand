<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ setting('site.title') }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="https://icreatebrands.net/assets/img/brand/favicon.png"/>

    <meta itemprop="name" content="icreate Graphic Designer, logo, Flyer, packaging"/>
    <meta itemprop="url" content="https://icreatebrands.net/"/>
    <meta itemprop="description"
          content="Graphic Design service for all your visual communication and branding needs, we produce logos, flyers, packaging design, U/UX design."/>

    <meta name="twitter:title" content="icreate | Graphic Designer, logo, Flyer, packaging"/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content="https://icreatebrands.net/"/>
    <meta name="twitter:card" content="website"/>
    <meta name="twitter:description"
          content="{{ setting('site.description') }}"/>
    <meta name="description"
          content="{{ setting('site.description') }}"/>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom1.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

</head>
<body>

{{-- Nav bar--}}
<section>
    <nav class=" navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset(Voyager::image(setting('site.logo')))  }}" alt="Logo icreatebrand" /></a>
            <button class="navbar-toggler bg-warning text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mt-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="list-group"><a class="dropdown-item" href="{{ route('poster') }}">
                                    <h5 class="fw-bold">Poster design</h5>
                                    <p class="nav-text">High quality poster/flyer designs for <br>your announcement
                                        or marketing campaigns</p>
                                </a>
                            </li>
                            <li class="list-group"><a class="dropdown-item" href="{{ route('package') }}">
                                    <h5 class="fw-bold">Packaging Design</h5>
                                    <p class="nav-text">Packaging designs that gets your product noticed <br>in the
                                        crowd</p>
                                </a>
                            </li>
                            <li class="list-group"><a class="dropdown-item" href="{{ route('ui') }}">
                                    <h5 class="fw-bold">UI/UX</h5>
                                    <p class="nav-text">Beautify and intuitive designs for your website or apps <br>to
                                        keep your users hooked</p>
                                </a>
                            </li>
                            <li class="list-group"><a class="dropdown-item" href="{{ route('brand') }}">
                                    <h5 class="fw-bold">Brand identity design</h5>
                                    <p class="nav-text">Logos and stationary designs for your startup <br> or
                                        business</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('blog.posts') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                </ul>
                <ul class="navbar-nav me mt-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn bg-gradient-warning" aria-current="page" href="{{ route('contact') }}">Request
                            design</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- hero content -->
    @if(request()->routeIs('home') || request()->routeIs('blog.posts'))
        <div style="padding-top: 8rem;">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="fw-bolder heading-1 mb-3"><span class="text-warning">Graphic Design services</span>
                            that makes your brand outstanding</h1>
                        <p class="body-text mb-2">We are a creative agency that provide high quality design services for
                            your packaging, advertising campains, websites and Apps</p>
                        <a href="{{ route('contact') }}">
                            <div type="button" class="btn-cta btn-ic btn-big">Request a design</div>
                        </a>
                        <a href="#">
                            <div class="btn-cta btn-ic-faint btn-big"><i class="fas fa-play"></i> watch video</div>
                        </a>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/cover.png') }}" alt="a cover for contact" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>

@yield('content')

<footer class="py-3 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-s-12">
                <h5 class="text-muted">Lets make something awesome</h5>
                <p class="text-white">lorem ipsum doloreannut apsunit elts emmet dorlre. lorem ipsum doloreannut apsunit
                    elts emmet dorlrelorem ipsum doloreannut apsunit elts emmet dorlre</p>
            </div>
            <div class="col-lg-3 col-md-3">
                <h5 class="text-muted ms-3">Services</h5>
                <ul class="list-unstyled">
                    <li class="">
                        <a href="#" class="nav-link">Poster design</a>
                    </li>
                    <li class="">
                        <a href="#" class="nav-link">Brand identity design</a>
                    </li>
                    <li class="">
                        <a href="#" class="nav-link">Packaging design</a>
                    </li>
                    <li class="">
                        <a href="#" class="nav-link">UI/UX design</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="text-muted ms-3">Social</h5>
                <ul class="list-unstyled">
                    <li class="">
                        <a href="#" class="nav-link">Facebook</a>
                    </li>
                    <li class="">
                        <a href="#" class="nav-link">Instagram</a>
                    </li>
                    <li class="">
                        <a href="#" class="nav-link">linkedIn</a>
                    </li>
                    <li class="">
                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Our
                            network</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</footer>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Countries</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li class="">
                                <a href="graphic-design-services-cameroon.html">
                                    Cameroon
                                </a>
                            </li>
                            <li>
                                <a href="graphic-design-services-cameroon.html">
                                    Rwanda
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn bg-gradient-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<!--  Plugin for the Wizard -->
<script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>


<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
<script src="{{ asset('assets/js/multistep-form.js') }}" type="text/javascript"></script>

@yield('js')
</body>
</html>
