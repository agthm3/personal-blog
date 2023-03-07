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
                        @if ($info == null)
                            <p>Belum ada welcome message</p>
                        @else
                            {!! $info->welcome_message !!}
                        @endif
                    </div>
                    <h6 class="mb-4 mt-2">Github Link</h6>
                    <div class="form-floating">
                        @if ($info == null)
                            <p>Belum ada Github link</p>
                        @else
                            <p>{{ $info->github_link }}</p>
                        @endif
                    </div>
                    @if ($info == null)
                        <a href="{{ route('add_info_portofolio') }}">
                            <button type="submit" class="btn btn-primary mt-2">
                                Tambah
                            </button></a>
                    @else
                        <a href="{{ route('edit_info_portofolio') }}">
                            <button type="submit" class="btn btn-primary mt-2">
                                Edit
                            </button></a>
                    @endif
                </div>
            </div>
        </div>

        <div class="bg-light text-center rounded p-4 mt-2">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Portofolio</h6>
                <a href="portofolio-create.html">Create</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">
                                <input class="form-check-input" type="checkbox" />
                            </th>
                            <th scope="col">Date</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Client</th>
                            <th scope="col">Harga</th>
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
                            <td>$123</td>
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
                            <td>$123</td>
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
