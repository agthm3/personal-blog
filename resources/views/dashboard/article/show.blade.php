@extends('layouts.dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">

        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <h1>Detail Article</h1>
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('edit_dashboard_article', $article) }}" method="get">
                        @csrf

                        <h6 class="mb-4">Gambar</h6>
                        <div class="mb-3">
                            <img src="{{ url('storage/' . $article->image) }}" height="100px" alt="">
                        </div>
                        <h6 class="m2-4 mt-2"> Title</h6>
                        <div class="form-floating">
                            <p>{{ $article->title }}</p>
                            <h6 class="mb-2 mt-2">Article</h6>
                            <p>{!! $article->article !!}</p>
                            <h6 class="mb-2 mt-2">Tag</h6>
                            <p>{{ $article->tag->new_tag }}</p>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">
                            Edit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
