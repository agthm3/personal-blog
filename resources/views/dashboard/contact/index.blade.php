@extends('layouts.dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Welcome Message</h6>
                    <div class="form-floating">
                        @if ($contact == null)
                            <p>Belum ada Welcome message</p>
                        @else
                            {{ $contact->welcome_message }}
                        @endif
                    </div>
                    <h6 class="mb-4 mt-2">Github Link</h6>
                    <div class="form-floating">
                        @if ($contact == null)
                            <p>Belum ada link</p>
                        @else
                            {{ $contact->github_link }}
                        @endif
                    </div>
                    <h6 class="mb-4 mt-2">WhatsApp Link</h6>
                    <div class="form-floating">
                        @if ($contact == null)
                            <p>Belum ada link</p>
                        @else
                            {{ $contact->whatsapp_link }}
                        @endif
                    </div>
                    <h6 class="mb-4 mt-2">LinkedIn Link</h6>
                    <div class="form-floating">
                        @if ($contact == null)
                            <p>Belum ada link</p>
                        @else
                            {{ $contact->linkedin_link }}
                        @endif
                    </div>
                    @if ($contact == null)
                        <a href="{{ route('create_dashboard_contact') }}">
                            <button type="submit" class="btn btn-primary mt-2">
                                Tambah
                            </button></a>
                    @else
                        <form action="{{ route('edit_dashboard_contact') }}" method="get">
                            <button type="submit" class="btn btn-primary mt-2">
                                Edit
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Form End -->
@endsection
