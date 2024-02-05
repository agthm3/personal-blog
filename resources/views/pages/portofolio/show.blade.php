@extends('layouts.app')

@section('content')
    <div style=" display: flex;
  align-items: center;
  justify-content: center;">
        <article>
            <div class="content-1330 center-relative clear">
                <div class="entry-content">
                    <div class="content-wrap">
                        <div class="one margin-0">
                            <img src="{{ url('storage/' . $portofolio->image) }}"><br />
                        </div>
                        <div class="clear"></div>
                        <div class="one_half margin-0">
                            <img src="demo-images/sun_item_image02.png" alt="" /><br />
                        </div>
                        <div class="one_half last margin-0">
                            <img src="demo-images/sun_item_image03.png" alt="" /><br />
                        </div>
                        <div class="clear"></div>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <div class="one_half text-right portfolio-item-info">
                            <strong>Project Name:</strong>&nbsp;{{ $portofolio->project_name }}<br />
                            <strong>Client:</strong> {{ $portofolio->client_name }}<br />
                            <strong>Year:</strong> {{ $portofolio->year }}
                            <p></p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <div class="text-right">
                                <a href="{{ $portofolio->live_preview }}" target="_self" class="button">Live Preview</a>
                                <a href="{{ $portofolio->github_link }}" target="_self" class="button">Github
                                </a>
                            </div>
                        </div>
                        <div class="one_half last">
                            <strong>{{ $portofolio->title }}</strong>
                            <br />
                            <p>{!! $portofolio->description !!}</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </article>
    </div>
@endsection
