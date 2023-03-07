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
                    <form action="{{ route('update_info_portofolio', $info) }}" method="post">
                        @csrf
                        @method('patch')
                        <h6 class="mb-4">Welcome Message</h6>
                        <div class="form-floating">
                            <textarea name="welcome_message">{{ $info->welcome_message }}</textarea>
                            <label for="floatingTextarea">
                            </label>
                        </div>
                        <h6 class="mb-4 mt-2">Github Link</h6>
                        <div class="form-floating">
                            <input type="text" name="github_link" value="{{ $info->github_link }}" class="form-control"
                                id="input-github" />
                            <label for="input-github">
                                {{ $info->github_link }}</label>
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

@push('addon-script')
    <script>
        CKEDITOR.replace('welcome_message');
    </script>
@endpush
