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
                    <form action="{{ route('update_dashboard_home', $homes) }}" method="post">
                        @method('patch')
                        @csrf
                        <h6 class="mb-4">Welcome Message</h6>
                        <div class="form-floating">
                            <textarea class="form-control" name="welcome_message" value="{{ $homes->welcome_message }}"
                                placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px"></textarea>
                            <label for="floatingTextarea">{{ $homes->welcome_message }}
                            </label>
                        </div>
                        <h6 class="mb-4 mt-2">Left Message</h6>
                        <div class="form-floating">
                            <textarea class="form-control" name="left_message" value="{{ $homes->left_message }}" placeholder="Leave a comment here"
                                id="floatingTextarea" style="height: 150px"></textarea>
                            <label for="floatingTextarea">{{ $homes->left_message }}
                            </label>
                        </div>
                        <h6 class="mb-4 mt-2">Right Message</h6>
                        <div class="form-floating">
                            <textarea class="form-control" name="right_message" value="{{ $homes->right_message }}"
                                placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px"></textarea>
                            <label for="floatingTextarea">{{ $homes->right_message }}
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
