@extends('layouts.dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <form action="" method="post">@csrf @method('patch')
                    <h1>Edit Job Experience</h1>
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="m2-4 mt-2">Tahun</h6>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="input-github" name="year" />
                            <label for="input-github">
                                Masukkan tahun</label>
                            <h6 class="mb-2 mt-2">Pengalaman</h6>
                            <input type="text" class="form-control mt-2" id="input-github" name="project-name" />

                            <button type="submit" class="btn btn-primary mt-2">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
