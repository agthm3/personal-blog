@extends('layouts.app')


@section('content')
    <article>

        <div class="content-1330 center-relative">
            <div class="clear"></div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>

        <div class="content-1530 center-relative block">
            @foreach ($about as $item)
                @if ($item->image == null)
                    <p>no image</p>
                @else
                    <center> <img style="width: 100%" class="mb-2" src="{{ url('storage/' . $item->image) }}"><br /></center>
                @endif
            @endforeach
        </div>

        <div class="content-1330 center-relative block">
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="one_half">
                <b>Tentang saya</b>
                <br />
                @foreach ($about as $item)
                    <p>{!! $item->article !!}</p>
                @endforeach
            </div>

            <div class="one_half last">
                <p>&nbsp;</p>
                <b style="color: red">Pengalaman kerja</b>
                <ul class="archive-list">
                    @foreach ($jobexperience as $item)
                        <li>
                            <span>{{ $item->year }} &nbsp; · &nbsp; </span> {{ $item->experienced }}
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="one_half last">
                <p>&nbsp;</p>
                <b style="color: red">Prestasi dan Sertifikat</b>
                <ul class="archive-list">
                    @foreach ($achievements as $item)
                        <li>
                            <span>{{ $item->year }} &nbsp; · &nbsp; </span>{{ $item->achievement }}
                        </li>
                    @endforeach

                </ul>
                <div class="text-left">
                    @foreach ($linked as $item)
                        <a href="{{ $item->linkedin_link }}" target="_self" class="button"
                            style="
                                        border-color: #0e76a8;
                                        color: #0e76a8;
                                    ">Linkedin
                            Profile</a>
                    @endforeach
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </article>
@endsection
