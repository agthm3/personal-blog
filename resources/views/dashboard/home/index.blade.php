@extends('layouts.dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Welcome Message</h6>
                    <div class="form-floating">
                        <p>Belum ada welcome message</p>
                    </div>
                    <h6 class="mb-4 mt-2">Left Message</h6>
                    <div class="form-floating">
                        <p>Belum ada Left message</p>
                    </div>
                    <h6 class="mb-4 mt-2">Right Message</h6>
                    <div class="form-floating">
                        <p>Belum ada Right Message</p>
                    </div>
                    <a href="create_home.html">
                        <button type="submit" class="btn btn-primary mt-2">
                            Tambah
                        </button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
