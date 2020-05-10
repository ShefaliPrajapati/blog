@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="middle-area">
                                 <b>Post by {{ $post->user->name }}</b>
                            </div>
                        </div><!-- post-info -->
                        <img class="card-img-top" src="{{ asset('/images/'.$post->image) }}" alt="{{ $post->title }}">
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <p class="card-text">{{ $post->body }}</p>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on {{ date('M j, Y', strtotime($post->created_at)) }}
                        </div>
                    </div>
                </div><!-- col-lg-8 col-md-12 -->

                <div class="col-lg-4 col-md-12 no-left-padding">

                    <div class="card">
                        <div class="card-header">

                            <h4 class="title"><b>CATEGORIES</b></h4>
                        </div>
                        <div class="card-body">

                            <ul>
                                @foreach($post->categories as $category)
                                    <li> {{ $category->name }} </li>
                                @endforeach
                            </ul>

                        </div>
                        </div><!-- subscribe-area -->

                    </div><!-- info-area -->

                </div><!-- col-lg-4 col-md-12 -->

            </div><!-- row -->

        </div><!-- container -->
    </section><!-- post-area -->

@endsection
