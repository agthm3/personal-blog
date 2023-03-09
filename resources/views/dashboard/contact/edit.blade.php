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
                    <form action="{{ route('update_dashboard_contact', $contact) }}" method="post">
                        @csrf
                        @method('patch')
                        <h6 class="mb-4">Welcome Message</h6>
                        <div class="form-floating">
                            <textarea class="form-control" name="welcome_message" placeholder="Leave a comment here"
                                value="{{ $contact->welcome_message }}" id="floatingTextarea" style="height: 150px">{{ $contact->welcome_message }}</textarea>

                        </div>
                        <h6 class="mb-4 mt-2">Github Link</h6>
                        <div class="form-floating">
                            <input type="text" name="github_link" class="form-control"
                                placeholder="{{ $contact->github_link }}" value="{{ $contact->github_link }}"
                                id="input-github" />

                            <h6 class="mb-4 mt-2">WhatsApp Link</h6>
                            <div class="form-floating">
                                <input type="text" name="whatsapp_link" class="form-control"
                                    value="{{ $contact->whatsapp_link }}" placeholder="{{ $contact->whatsapp_link }}"
                                    id="input-github" />

                                <h6 class="mb-4 mt-2">LinkedIn Link</h6>
                                <div class="form-floating">
                                    <input type="text" name="linkedin_link" value="{{ $contact->linkedin_link }}"
                                        placeholder="{{ $contact->linkedin_link }}" class="form-control"
                                        id="input-github" />

                                </div>
                                <button type="submit" class="btn btn-primary mt-2">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Form End -->


    </div>
    <!-- Content End -->
@endsection
