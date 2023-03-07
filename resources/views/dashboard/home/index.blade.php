@extends('layouts.dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Welcome Message</h6>
                    <div class="form-floating">


                        @if ($messages == null)
                            <p>Belum ada welcome message</p>
                        @else
                            <p>{{ $messages->welcome_message }}</p>
                        @endif

                    </div>
                    <h6 class="mb-4 mt-2">Left Message</h6>
                    <div class="form-floating">

                        @if ($messages == null)
                            <p>Belum ada left message</p>
                        @else
                            <p>{{ $messages->left_message }}</p>
                        @endif
                    </div>
                    <h6 class="mb-4 mt-2">Right Message</h6>
                    <div class="form-floating">

                        @if ($messages == null)
                            <p>Belum ada right message</p>
                        @else
                            <p>{{ $messages->right_message }}</p>
                        @endif
                    </div>
                    <a href="{{ route('create_dashboard_home') }}">
                        @if ($messages == null)
                            <button type="submit" class="btn btn-primary mt-2">
                                Tambah
                            </button>
                    </a>
                @else
                    <a href="{{ route('edit_dashboard_home') }}"> <button type="submit" class="btn btn-primary mt-2">
                            Edit
                        </button></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
