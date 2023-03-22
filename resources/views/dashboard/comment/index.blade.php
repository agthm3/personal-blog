@extends('layouts.dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4 mt-2">
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">
                                <input class="form-check-input" type="checkbox" />
                            </th>
                            <th scope="col">Date</th>
                            <th scope="col">Artikel</th>
                            <th scope="col">Komentar</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $comment)
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" />
                                </td>
                                <td>{{ $comment->created_at->format('d M Y') }}</td>
                                <td>{{ $comment->article->title }}</td>
                                <td>{{ $comment->content }}</td>
                                <td>{{ $comment->user->name }}</td>
                                <td>
                                    <form action="{{ route('delete_comment', $comment) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-primary"><a>Hapus</a></button>

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
