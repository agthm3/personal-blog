@extends('layouts.dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <form action="{{ route('update_dashboard_info_portofolio', $portofolioinfo) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Welcome Message</h6>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px"
                                placeholder="{{ $portofolioinfo->welcome_message }}">{{ $portofolioinfo->welcome_message }}</textarea>

                        </div>
                        <h6 class="mb-4 mt-2">Github Link</h6>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="input-github"
                                placeholder="{{ $portofolioinfo->github_link }}"
                                value="{{ $portofolioinfo->github_link }}" />
                        </div>

                        <button type="submit" class="btn btn-primary mt-2">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
