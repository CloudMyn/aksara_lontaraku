<div style="min-height: 50vh">

    <div class="extra">
        <p style="margin-top: 55px; padding-bottom: 50px; font-size: 40px">{{ $materi->judul }}</p>
        <div class="box-container">

            @foreach ($pelajaran as $_materi)

            <div class="box-item">
                <div class="item-leading">
                    <img src="{{ filter_var($_materi->gambar, FILTER_VALIDATE_URL) ? $_materi->gambar : asset("storage/" . $_materi->gambar) }}" alt="">
                </div>
                <div class="item-content">
                    <div class="content-number">{{ $loop->index + 1 }}</div>
                    <div class="content-body">
                        <div class="content-title">{{ $_materi->judul }}</div>
                        <!-- <div class="content-subtitle">8 Menit</div> -->
                    </div>
                </div>
                <div class="item-trailing">
                    <a class="content-button" href="{{ route('konten-pembelajaran', ['slug' => $_materi->slug]) }}" style="width: auto; padding: 10px; 0; height: auto; border-radius: 5px;">
                        Kunjungi
                    </a>
                </div>
            </div>

            @endforeach

        </div>
    </div>


</div>
