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
                <h1>Create New Job Experience</h1>
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('store_dashboard_experiece') }}" method="post">
                        @csrf
                        <h6 class="m2-4 mt-2">Tahun</h6>
                        <div class="form-floating">
                            <input type="number" class="form-control" id="input-github" name="year" />
                            <label for="input-github">
                                Masukkan tahun</label>
                            <h6 class="mb-2 mt-2">Pengalaman</h6>
                            <input type="text" class="form-control mt-2" id="input-github" name="experienced" />

                            <button type="submit" class="btn btn-primary mt-2">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
