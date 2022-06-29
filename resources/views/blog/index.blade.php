@extends('layouts.app')

@section('content')
    <section class="py mt-3 py-3">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="text-center fw-bold mb-5 heading-2 lh-0">Blog post</h2>
            </div>
            <div class="row">

            @forelse($posts as $post)
                <!-- blog card -->
                    <div class="col-md-4 mt-3">
                        <div class="card">
                            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                <a href="javascript:;" class="d-block blur-shadow-image">
                                    <img src="{{ asset(Voyager::image($post->image)) }}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="card-body">
                                <p class="card-description mb-5 mt-3">
                                    {{ $post->excerpt }}
                                </p>
                                <div class="pull-left">
                                    <span>―</span>
                                    Derek Agendia
                                </div>
                                <a href="{{ route('details.post',$post->slug) }}" class="text-success icon-move-right pull-right">Read More
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    No Yet Post
            @endforelse
                {{ $posts->links() }}
            </div>
        </div>
    </section>
@endsection
