@extends('layouts.dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <h1>Edit Portofolio</h1>
                <div class="bg-light rounded h-100 p-4">

                    <form action="{{ route('update_portofolio', $portofolio) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <h6 class="mb-2">Image</h6>
                        <img src="{{ url('storage/' . $portofolio->image) }}" height="100px" alt="">
                        <input type="file" name="image" class="form-control mb-2 mt-2" id="">
                        <h6 class="mb-2">Project Name</h6>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="project_name"
                                value="{{ $portofolio->project_name }}" placeholder="{{ $portofolio->project_name }}">
                        </div>
                        <h6 class="mb-2 mt-2">Client Name</h6>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="client_name"
                                value="{{ $portofolio->client_name }}" placeholder="{{ $portofolio->client_name }}">
                        </div>
                        <h6 class="mb-2 mt-2">Tahun</h6>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="year" value="{{ $portofolio->year }}"
                                placeholder="{{ $portofolio->year }}">
                        </div>
                        <h6 class="mb-2 mt-2">Link Preview</h6>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="live_preview"
                                value="{{ $portofolio->live_preview }}" placeholder="{{ $portofolio->live_preview }}">
                        </div>
                        <h6 class="mb-2 mt-2">Github Link</h6>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="github_link"
                                value="{{ $portofolio->github_link }}" placeholder="{{ $portofolio->github_link }}">
                        </div>
                        <h6 class="mb-2 mt-2">Judul</h6>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="title" value="{{ $portofolio->title }}"
                                placeholder="{{ $portofolio->title }}">
                        </div>
                        <h6 class="mb-2">Deskripsi</h6>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="description"
                                value="{{ $portofolio->description }}" placeholder="{{ $portofolio->description }}">
                        </div>
                        <h6 class="mb-2">Harga</h6>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="price" value="{{ $portofolio->price }}"
                                placeholder="Rp{{ number_format($portofolio->price) }}">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection

@push('addon-script')
    <script>
        CKEDITOR.replace('welcome_message');
    </script>
@endpush
