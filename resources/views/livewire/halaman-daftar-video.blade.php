<div class="extra" style="min-height: 70vh">
    <p style="margin-top: 55px; padding-bottom: 50px;">Daftar Video Pembelajaran</p>
    <div class="box-container">

        @foreach ($videos as $video)
            <div class="box-item">
                <div class="item-leading">
                    <img src="{{ (strpos($video->gambar, 'https') === 0) ? $video->gambar : "storage/" . $video->gambar }}" alt="">
                </div>
                <div class="item-content">
                    <div class="content-number">{{ $loop->index + 1 }}</div>
                    <div class="content-body">
                        <div class="content-title">{{ \Illuminate\Support\Str::limit($video->judul, 70) }}</div>
                        <div class="content-subtitle">{{ $video->durasi }}</div>
                    </div>
                </div>
                <div class="item-trailing">
                    <a class="play-button" href="{{ route('video-pembelajaran', ['slug' => $video->slug]) }}">
                        <i class="fa fa-play" style="font-size: 20px"></i>
                    </a>
                </div>
            </div>
        @endforeach

    </div>
</div>
