@extends('layouts.dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <h1>Detail Portofolio</h1>
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('edit_portofolio', $portofolio) }}" method="get">
                        <h6 class="mb-4">Gambar</h6>
                        <div class="mb-3">
                            <img src="{{ url('storage/' . $portofolio->image) }}" height="100px" alt="">
                        </div>
                        <h6 class="m2-4 mt-2">Project Name</h6>
                        <div class="form-floating">
                            <p>{{ $portofolio->project_name }}</p>
                            <h6 class="mb-2 mt-2">Client Name</h6>
                            <p>{{ $portofolio->client_name }}</p>

                            <h6 class="mb-2 mt-2">Tahun</h6>
                            {{ $portofolio->year }}
                            <h6 class="mb-2 mt-2">Live Preview</h6>
                            {{ $portofolio->live_preview }}
                            <h6 class="mb-2 mt-2">Github Link</h6>
                            {{ $portofolio->github_link }}
                            <h6 class="mb-2 mt-2">Title</h6>
                            {{ $portofolio->title }}
                            <h6 class="mb-2 mt-2">Deskripsi</h6>
                            <p>{{ $portofolio->description }}</p>
                            <h6 class="mb-2 mt-2">Harga</h6>
                            Rp{{ number_format($portofolio->price) }}
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
