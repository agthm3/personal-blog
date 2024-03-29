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
                <a href="{{ route('create_experience') }}">Create</a>
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
                        @if ($jobexperiences == null)
                            <p>Belum ada data</p>
                        @else
                            @foreach ($jobexperiences as $jobexperience)
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox" />
                                    </td>
                                    <td>{{ $jobexperience->created_at }}</td>
                                    <td>{{ $jobexperience->year }}</td>
                                    <td>{{ $jobexperience->experienced }}</td>
                                    <td>
                                        <form action="{{ route('delete_dashboard_experience', $jobexperience) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-primary">Hapus</button>
                                        </form>
                                        {{-- <form action="{{ route('edit_dashboard_experience') }}" method="post">
                                            <button type="submit">Edit</button>
                                        </form> --}}

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="bg-light text-center rounded p-4 mt-2">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Pencapaian / Sertifikat</h6>
                <a href="{{ route('create_achievement') }}">Create</a>
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
                        @foreach ($achievements as $achievement)
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" />
                                </td>
                                <td>{{ $achievement->created_at }}</td>
                                <td>{{ $achievement->year }}</td>
                                <td>{{ $achievement->achievement }}</td>
                                <td>
                                    <form action="{{ route('delete_achievement', $achievement) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-primary mb-1">Hapus</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
