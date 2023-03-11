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
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('update_info_about', $about) }}" enctype="multipart/form-data" method="post">
                        @method('patch')
                        @csrf
                        <h6 class="mb-4">Welcome Message</h6>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="{{ $about->welcome_message }}" id="floatingTextarea" style="height: 150px"
                                name="welcome_message">{{ $about->welcome_message }}</textarea>

                        </div>
                        <h6 class="mb-4 mt-2">Foto sampul</h6>
                        <div class="form-floating">
                            <img src="{{ url('storage/' . $about->image) }}" height="100px" alt="">
                            <input type="file" name="image" class="form-control mt-1" />
                        </div>
                        <h6 class="mb-4 mt-2">Artikel</h6>
                        <div class="form-floating">
                            <textarea name="article" id="" placeholder="{{ $about->article }}" value="{{ $about->article }}" cols="30"
                                rows="10">{{ $about->article }}</textarea>

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
        CKEDITOR.replace('article');
    </script>
@endpush
