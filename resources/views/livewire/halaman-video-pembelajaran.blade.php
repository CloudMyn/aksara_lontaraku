<div class="content-box">
    <!-- Video player -->
    <div class="video-player" id="player">
    </div>


    @php
        // Regex untuk mengekstrak ID video dari tautan embed YouTube
        preg_match('/src="https:\/\/www\.youtube\.com\/embed\/([^\?]+)/', $video->video, $matches);

        if (isset($matches[1])) {
            $video_id = $matches[1];
        } else {
            $video_id = '';
        }
    @endphp

    <!-- Informasi video -->
    <div class="box-info">
        <h1 class="box-title">{{ $video->judul }}</h1>
        <div>{!! $video->deskripsi !!}</div>
    </div>

    <!-- Tombol Kuis -->
    <div class="box-quiss" id="quizButton" style="display: none;">
        @if ($kuis_count > 0)
            <a href="{{ route('kuis', ['video_id' => $video->id]) }}">
                <i class="fa fa-book" aria-hidden="true"></i> Kerjakan Kuis
            </a>
        @else
            <button type="button" href="#" disabled class="disabled">
                <i class="fa fa-book" aria-hidden="true"></i> Tidak Ada Kuis
            </button>
        @endif
    </div>

    <script>
        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '550',
                width: '690',
                videoId: '{{ $video_id }}',
                playerVars: {
                    'playsinline': 1
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange,
                }
            });
        }

        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
            // event.target.playVideo();
            // setTimeout(function() {
            // }, 2000)
        }

        function onPlayerStateChange(event) {
            if (event.data === YT.PlayerState.ENDED) {
                // Tampilkan tombol kuis saat video selesai
                document.getElementById('quizButton').style.display = 'flex';
            }
        }

        function stopVideo() {
            player.stopVideo();
        }
    </script>
</div>
