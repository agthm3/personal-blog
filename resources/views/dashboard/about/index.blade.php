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
                    <h6 class="mb-4">Welcome Message</h6>
                    <div class="form-floating">
                        @if ($about == null)
                            <p>Belum ada Welcome message</p>
                        @else
                            {{ $about->welcome_message }}
                        @endif
                    </div>
                    <h6 class="mb-4 mt-2">Foto Sampul</h6>
                    <div class="form-floating">
                        @if ($about == null)
                            <p>Belum ada foto sampul</p>
                        @else
                            <img src="{{ url('storage/' . $about->image) }}" height="100px" alt="">
                        @endif
                    </div>
                    <h6 class="mb-4 mt-2">Article</h6>
                    <div class="form-floating">
                        @if ($about == null)
                            <p>Belum ada article</p>
                        @else
                            {!! $about->article !!}
                        @endif
                    </div>
                    @if ($about == null)
                        <form action="{{ route('add_info_about') }}" method="get">
                            <button type="submit" class="btn btn-primary mt-2">
                                Tambah
                            </button>
                        </form>
                    @else
                        <form action="{{ route('edit_info_about', $about) }}" method="get">
                            <button type="submit" class="btn btn-primary mt-2">
                                Edit
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>

        <div class="bg-light text-center rounded p-4 mt-2">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Pengalaman Kerja</h6>
                <a href="create_job_experience.html">Create</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">
                                <input class="form-check-input" type="checkbox" />
                            </th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Pengalaman</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox" />
                            </td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="">Hapus</a>
                                <a class="btn btn-sm btn-primary" href="">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox" />
                            </td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="">Hapus</a>
                                <a class="btn btn-sm btn-primary" href="">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="bg-light text-center rounded p-4 mt-2">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Pencapaian / Sertifikat</h6>
                <a href="create_achivement.html">Create</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">
                                <input class="form-check-input" type="checkbox" />
                            </th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Pencapaian</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox" />
                            </td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="">Hapus</a>
                                <a class="btn btn-sm btn-primary" href="">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox" />
                            </td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="">Hapus</a>
                                <a class="btn btn-sm btn-primary" href="">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
