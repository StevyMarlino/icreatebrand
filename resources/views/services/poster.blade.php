@extends('layouts.app')

@section('content')

    <div style="padding-top: 8rem;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h1 class="fw-bolder heading-1 text-center mb-3"><span
                            class="text-warning">Poster / Flyer design</span> for your business</h1>
                    <p class="body-text text-center mb-2">Posters are a great way of commmunicating your products or
                        event in a unique way</p>
                    <a href="{{ route('contact') }}">
                        <div type="button" class="btn-cta btn-ic btn-big w-100">Request a design</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="py-3 mt-3 mb-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <h1 class="heading-2 text-center mb-5 mt-5">Sample works</h1>
                </div>
                <div class="row">
                    @forelse($posters as $poster)
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                            <a href="{{ route('details',$poster->slug) }}" class="nav-link">
                                <div class="card card-background move-on-hover mb-3">
                                    <div class="full-background"
                                         style="background-image: url('{{ asset(Voyager::image($poster->image)) }}')"></div>
                                    <div class="card-body pt-12">
                                        <h4 class="text-white">Search and Discovery</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">
                            <div class="card card-background move-on-hover mb-3">
                                <div class="full-background"
                                     style="background-image: url('{{ asset('assets/img/cover.png') }}')"></div>
                                <div class="card-body pt-12">
                                    <h4 class="text-white h2">No Yet Poster Posted</h4>
                                </div>
                            </div>
                        </div>

                    @endforelse
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
                    </ul>
                </div>
            </div>
            <!-- end of other works -->
        </div>
    </section>

@endsection
