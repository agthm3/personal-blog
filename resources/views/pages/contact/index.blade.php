@extends('layouts.app')

@section('content')
    <article>
        {{-- @dd($contact) --}}
        <div class="content-1330 center-relative">
            @if ($contact == null)
                <p>Tidak ada informasi</p>
            @else
                @foreach ($contact as $item)
                    <div class="one_half">
                        <strong>Interested in collaborating?</strong>
                        <br />
                        <p>

                            {{ $item->welcome_message }}

                        </p>
                        <p>&nbsp;</p>
                    </div>

                    <div class="one_half last">
                        <b>Contact me through the information below.</b>
                        <div class="text-left">
                            <a href="{{ $item->github_link }}" target="_self" class="button" style="width: 80%">Github</a>
                            <a href="{{ $item->linkedin_link }}" target="_self" class="button"
                                style="
                                        width: 80%;
                                        color: #0e76a8;
                                        border-color: #0e76a8;
                                    ">LInkedin</a>
                            <a href="{{ $item->whatsapp_link }}" target="_self" class="button"
                                style="
                                        width: 80%;
                                        color: #075e54;
                                        border-color: #075e54;
                                    ">WhatsApp</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                @endforeach
            @endif
        </div>
    </article>
@endsection
