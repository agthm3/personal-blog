@extends('layouts.dashboard')

@section('content') <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Artikel</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Portofolio</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Komentar</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fas fa-money-check-alt text-primary fa-3x"></i>
                    <div class="ms-3">
                        <p class="mb-2">Pendapatan</p>
                        <h6 class="mb-0">Rp1234</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->

    <!-- Sales Chart End -->

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Komentar Terbaru</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">
                                <input class="form-check-input" type="checkbox" />
                            </th>
                            <th scope="col">Date</th>
                            <th scope="col">Komentar</th>
                            <th scope="col">User</th>
                            <th scope="col">Artikel</th>
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
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Artikel baru -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Artikel Terbaru</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">
                                <input class="form-check-input" type="checkbox" />
                            </th>
                            <th scope="col">Date</th>
                            <th scope="col">Judul</th>
                            <th scope="col">User</th>
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
                                <a class="btn btn-sm btn-primary" href="">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
