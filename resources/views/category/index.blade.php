@extends('layouts.main')

@section('content')

    <main class="blog">
        <div class="container">
            <h2 class="section-title mb-4" data-aos="fade-up">Categories</h2>
            <section class="featured-posts-section">
                <div class="d-flex justify-content-between" >
                    <div class="list-group col-sm-4 mb-4">
                        @foreach ($categories as $category)
                            <a href="{{ route('category.post.index', $category->id) }}"
                                class="list-group-item list-group-item-action">{{ $category->title }}</a>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
