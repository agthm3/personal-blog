@extends('layouts.dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">

        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Welcome Message</h6>
                    <div class="form-floating">

                        @if ($articleInfo == null)
                            <p>Belum ada welcome message</p>
                        @else
                            {{ $articleInfo->welcome_message }}
                        @endif

                    </div>

                    @if ($articleInfo == null)
                        <a href="{{ route('create_info_article') }}">
                            <button type="submit" class="btn btn-primary mt-2">
                                Tambah
                            </button></a>
                    @else
                        <a href="{{ route('edit_info_article', $articleInfo) }}">
                            <p class="btn btn-primary mt-2"> Edit</p>
                        </a>
                    @endif


                </div>
            </div>
        </div>

        <div class="bg-light text-center rounded p-4 mt-2">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Artikel</h6>
                <a href="{{ route('create_dashboard_article') }}">Create</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">
                                <input class="form-check-input" type="checkbox" />
                            </th>
                            <th scope="col">Dipublikasikan</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Komentar</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" />
                                </td>
                                <td>{{ $article->created_at }}</td>
                                <td>{{ $article->title }}</td>
                                <td>{{ Auth::user()->name }}</td>
                                <td>$123</td>
                                <td>
                                    <form action="{{ route('delete_dashboard_article', $article) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-primary mb-1" type="submit">Hapus</button>
                                    </form>
                                    <form action="{{ route('show_dashboard_article', $article) }}" method="get">
                                        <button class="btn btn-sm btn-primary" type="submit">Detail</button>
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
