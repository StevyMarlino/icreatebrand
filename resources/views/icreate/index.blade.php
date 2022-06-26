@extends('layouts.app')

@section('content')

    <section class="py-3 mt-5 mb-3" style="background-color:#edeff3;">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="text-center fw-bold mb-5 heading-2 lh-0">Expertise we can assist you with</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card border-0 mb-3">
                        <div class="card-body">
                            <div class="circle-yellow"><i class="fas fa-file-image"></i></div>
                            <h2 class="heading-3 mt-3">Advertising Posters</h2>
                            <p>Lorem ipsum dolore annuit apsunit Lorem ipsum dolore annuit apsunitelts
                            </p>
                            <a href="{{ route('poster') }}" type="button" class="nav-link fw-bold">See our work</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card border-0 mb-3">
                        <div class="card-body">
                            <div class="circle-yellow"><i class="fas fa-file-image"></i></div>
                            <h2 class="heading-3 mt-3">Brand identity design</h2>
                            <p>Lorem ipsum dolore annuit apsunit Lorem ipsum dolore annuit apsunitelts
                            </p>
                            <a href="{{ route('brand') }}" type="button" class="nav-link fw-bold">See our work</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card border-0 mb-3">
                        <div class="card-body">
                            <div class="circle-yellow"><i class="fas fa-file-image"></i></div>
                            <h2 class="heading-3 mt-3">Packaging design</h2>
                            <p>Lorem ipsum dolore annuit apsunit Lorem ipsum dolore annuit apsunitelts
                            </p>
                            <a href="{{ route('package') }}" type="button" class="nav-link fw-bold">See our work</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card border-0 mb-3">
                        <div class="card-body">
                            <div class="circle-yellow"><i class="fas fa-file-image"></i></div>
                            <h2 class="heading-3 mt-3">UI/UX Design</h2>
                            <p>Lorem ipsum dolore annuit apsunit Lorem ipsum dolore annuit apsunitelts
                            </p>
                            <a href="{{ route('ui') }}" type="button" class="nav-link fw-bold">See our work</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="py-5 mb-3 bg-dark" style="border-radius:2rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h4 class="fw-bold text-warning">7 Years working striving brands that are out to make meaningful
                        impact in their community and the world</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        .</p>
                </div>
                <div class="col-lg-6">
                    <div class="card card-carousel overflow-hidden h-100 p-0">
                        <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                            <div class="carousel-inner border-radius-lg h-100">
                                <div class="carousel-item h-100"
                                     style="background-image: url('{{ asset('assets/img/portfolio/posters/afristar.jpg') }}');
                                         background-size: cover;">
                                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                        <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                            <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item h-100"
                                     style="background-image: url('{{ asset('assets/img/portfolio/posters/afristar.jpg') }}');
                                         background-size: cover;">
                                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                        <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                            <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item h-100 active"
                                     style="background-image: url('{{ asset('assets/img/portfolio/posters/afristar.jpg') }}');
                                         background-size: cover;">
                                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                        <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                            <i class="ni ni-trophy text-dark opacity-10"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev w-5 me-3" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next w-5 me-3" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section class="py-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                <h1 class="text-center fw-bold mb-5 heading-2 lh-0">Selected works</h2>
            </div>
        </div>
        <div class="row">
            @foreach(\App\Models\Service::where('type','PUBLISHED')->limit(4)->get() as $i)
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <a href="{{ route('details',$i->slug) }}" class="nav-link">
                        <div class="card card-background move-on-hover mb-3">
                            <div class="full-background"
                                 style="background-image: url('{{ asset(Voyager::image($i->image)) }}')"></div>
                            <div class="card-body pt-12">
                                <h4 class="text-white">Search and Discovery</h4>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <!--
        other works -->
        <div class="text-center mt-3">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h5 class="text-center mb-3">See other works</h5>
                </div>
            </div>
            <ul class="list-unstyled">
                <li class="list-inline-item">
                    <a href="{{ route('ui') }}">
                        <span class="badge badge-dark">UI/UX design</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('brand') }}">
                        <span class="badge badge-primary">Logo design</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('package') }}">
                        <span class="badge badge-warning">Packaging design</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('brand') }}">
                        <span class="badge badge-success">Brand identity</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('poster') }}">
                        <span class="badge badge-danger">Print design</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end of other works -->
    </div>
    <section class="py mt-3 py-3">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="text-center fw-bold mb-5 heading-2 lh-0">Blog post</h2>
            </div>
            <div class="row">
                <!-- blog card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <a href="javascript:;" class="d-block blur-shadow-image">
                                <img src="./assets/img/blog/packaging.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="card-description mb-5 mt-3">
                                Does packaging design help aquire new customers?
                            </p>
                            <div class="pull-left">
                                <span>―</span>
                                Derek Agendia
                            </div>
                            <a href="javascript:;" class="text-success icon-move-right pull-right">Read More
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- blog card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <a href="javascript:;" class="d-block blur-shadow-image">
                                <img src="./assets/img/blog/packaging.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="card-description mb-5 mt-3">
                                Does packaging design help aquire new customers?
                            </p>
                            <div class="pull-left">
                                <span>―</span>
                                Derek Agendia
                            </div>
                            <a href="javascript:;" class="text-success icon-move-right pull-right">Read More
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- blog card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <a href="javascript:;" class="d-block blur-shadow-image">
                                <img src="./assets/img/blog/packaging.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="card-description mb-5 mt-3">
                                Does packaging design help aquire new customers?
                            </p>
                            <div class="pull-left">
                                <span>―</span>
                                Derek Agendia
                            </div>
                            <a href="javascript:;" class="text-success icon-move-right pull-right">Read More
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
