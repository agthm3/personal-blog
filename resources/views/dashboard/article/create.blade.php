@extends('layouts.dashboard');

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
                {{-- @foreach ($tags as $item)
                    <p>{{ $item->new_tag }}</p>
                    @dd([$item])
                @endforeach --}}
                <form action="{{ route('store_dashboard_article') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <h1>Create New Article</h1>
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Gambar</h6>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" name="image" id="formFile" />
                        </div>
                        <h6 class="m2-4 mt-2">Judul</h6>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="input-github" name="title" />

                            <h6 class="mb-2 mt-2">Article</h6>
                            <textarea name="article" id="" cols="30" rows="20" class="form-control"></textarea>
                            <h6 class="mb-2 mt-2">Tag</h6>
                            <select name="tag_id" class="form-select" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected>Open this select menu</option>
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->new_tag }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Or create new tag:</small>
                            <input type="text" name="new_tag" class="form-control mt-2" placeholder="New tag name"
                                value="{{ old('new_tag') }}">

                        </div>
                        <button type="submit" class="btn btn-primary mt-2">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection

@push('addon-script')
    <script>
        CKEDITOR.replace('article');
    </script>
@endpush
