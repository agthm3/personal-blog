@extends('layouts.dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('store_info_about') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <h6 class="mb-4">Welcome Message</h6>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px"
                                name="welcome_message"></textarea>
                            <label for="floatingTextarea">Welcome Message
                            </label>
                        </div>
                        <h6 class="mb-4 mt-2">Foto sampul</h6>
                        <div class="form-floating">
                            <input type="file" name="image" class="form-control" />
                        </div>
                        <h6 class="mb-4 mt-2">Artikel</h6>
                        <div class="form-floating">
                            <textarea name="article" id="" cols="30" rows="10"></textarea>

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
