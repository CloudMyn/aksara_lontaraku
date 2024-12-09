<div class="content-box">
    <div class="video-player">
        {!! $video->video !!}
    </div>

    <div class="box-info">
        <h1 class="box-title">{{ $video->judul }}</h1>
        <div>{!! $video->deskripsi !!}</div>
    </div>

    <div class="box-quiss">
        <a href="{{ route('kuis', ['video_id' => $video->id]) }}">
            <i class="fa fa-book" aria-hidden="true"></i> Kerjakan Kuis
        </a>
    </div>
</div>
