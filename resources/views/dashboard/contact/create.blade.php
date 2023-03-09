@extends('layouts.dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('store_dashboard_contact') }}" method="post">
                        @csrf
                        @method('post')
                        <h6 class="mb-4">Welcome Message</h6>
                        <div class="form-floating">
                            <textarea class="form-control" name="welcome_message" placeholder="Leave a comment here" id="floatingTextarea"
                                style="height: 150px"></textarea>
                            <label for="floatingTextarea">Welcome Message
                            </label>
                        </div>
                        <h6 class="mb-4 mt-2">Github Link</h6>
                        <div class="form-floating">
                            <input type="text" name="github_link" class="form-control" id="input-github" />
                            <label for="input-github">
                                Masukkan link Github</label>
                            <h6 class="mb-4 mt-2">WhatsApp Link</h6>
                            <div class="form-floating">
                                <input type="text" name="whatsapp_link" class="form-control" id="input-github" />
                                <label for="input-github">
                                    Masukkan Whatsapp link</label>
                                <h6 class="mb-4 mt-2">LinkedIn Link</h6>
                                <div class="form-floating">
                                    <input type="text" name="linkedin_link" class="form-control" id="input-github" />
                                    <label for="input-github">
                                        Masukkan Linkedin link</label>
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

        <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-light rounded-top p-4">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-start">
                        &copy; <a href="#">Your Site Name</a>, All Right
                        Reserved.
                    </div>
                    <div class="col-12 col-sm-6 text-center text-sm-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By
                        <a href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Content End -->
@endsection
