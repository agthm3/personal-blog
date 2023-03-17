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
                    <form action="{{ route('update_info_article', $articleInfo) }}" method="post">
                        @csrf
                        @method('patch')
                        <h6 class="mb-4">Welcome Message</h6>
                        <div class="form-floating">
                            <textarea class="form-control" name="welcome_message" placeholder="Leave a comment here" id="floatingTextarea"
                                style="height: 150px">{{ $articleInfo->welcome_message }}</textarea>
                            <label for="floatingTextarea">Welcome Message
                            </label>
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
