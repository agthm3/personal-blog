@extends('layouts.dashboard');

@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
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
                <h1>Create New Portofolio</h1>
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('store_dashboard_portofolio') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h6 class="mb-4">Gambar</h6>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" name="image" type="file" id="formFile" />
                        </div>
                        <h6 class="m2-4 mt-2">Project Name</h6>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="input-github" name="project_name" />
                            <label for="input-github">
                                Masukkan nama project</label>
                            <h6 class="mb-2 mt-2">Client Name</h6>
                            <input type="text" class="form-control mt-2" id="input-github" name="client_name" />
                            <h6 class="mb-2 mt-2">Tahun</h6>
                            <input type="number" class="form-control mt-2" id="input-github" name="year" />
                            <h6 class="mb-2 mt-2">Live Preview</h6>
                            <input type="text" class="form-control mt-2" id="input-github" name="live_preview" />
                            <h6 class="mb-2 mt-2">Github Link</h6>
                            <input type="text" class="form-control mt-2" id="input-github" name="github_link" />
                            <h6 class="mb-2 mt-2">Title</h6>
                            <input type="text" class="form-control mt-2" id="input-github" name="title" />
                            <h6 class="mb-2 mt-2">Deskripsi</h6>
                            <div id="editor">

                            </div>
                            {{-- <textarea name="description" id="" cols="30" rows="20" class="form-control"></textarea> --}}
                            <h6 class="mb-2 mt-2">Harga</h6>
                            <input type="number" class="form-control mt-2" id="input-github" name="price" />
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
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
