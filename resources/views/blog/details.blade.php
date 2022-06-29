@extends('layouts.app')

@section('content')

    <!-- hero content -->
    <div style="padding-top: 8rem;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h1 class="fw-bolder heading-1 text-center mb-3"><span class="text-warning">Project detail </h1>
                    <p class="text-center"><span class="badge bg-primary"><a href="{{ route('blog.posts') }}"> Blog</a> / {{ $details->title }}</span></p>
                </div>
            </div>
        </div>
    </div>

    <section class="py-3 mt-3 mb-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                    <p><img src="{{ asset(Voyager::image($details->image)) }}" class="img-fluid"></p>

                    <p>
                        {!! $details->body !!}
                    </p>
                </div>
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


@endsection
