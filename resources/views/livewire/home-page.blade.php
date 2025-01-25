<div>

    <!-- SERVICES -->
    <div class="service-swipe">
        <div class="diffSection" id="services_section">
            <center>
                <p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">Media Pembelajaran</p>
            </center>
        </div>
        <a href="{{ route('tabel-aksara') }}">
            <div class="s-card"><img src="/front-end/images/icon/computer-courses.png">
                <p>Tabel Aksara Lontara</p>
            </div>
        </a>
        <a href="{{ route('daftar-video-pembelajaran') }}">
            <div class="s-card"><img src="/front-end/images/icon/online-tutorials.png">
                <p>Pembelajaran Melalui Video</p>
            </div>
        </a>
        <a href="{{ route('daftar-video-pembelajaran') }}">
            <div class="s-card"><img src="/front-end/images/icon/papers.jpg">
                <p>Kuis Untuk Evaluasi Hasil Pembelajaran</p>
            </div>
        </a>
    </div>

    <!-- ABOUT -->
    <div class="diffSection" id="about_section" style="margin-bottom: 50px;">
        <center>
            <p style="font-size: 50px; padding: 100px">Informasi</p>
        </center>
        <div class="about-content">
            <div class="side-image">
                <img class="sideImage" src="/front-end/images/extra/e3.jpg">
            </div>
            <div class="side-text">
                <h2>Apa itu Aksara Lontara ?</h2>
                <p>Lontara adalah sebuah aksara tradisional yang digunakan oleh masyarakat Bugis dan Makassar di
                    Sulawesi Selatan, Indonesia. Aksara ini digunakan untuk menulis bahasa Bugis dan bahasa Makassar.
                    Aksara Lontara terdiri dari 23 huruf yang mewakili bunyi, dan 4 tanda baca yang digunakan untuk
                    mengatur ritme dan intonasi dalam membaca.</p>
            </div>
        </div>
    </div>


</div>


@push('header-content')
    <div class="head-container">
        <div class="quote">
            <p>Hal yang indah tentang belajar adalah bahwa tidak ada yang dapat mengambilnya dari Anda</p>
            <h5>Pendidikan adalah proses memfasilitasi pembelajaran, atau pengambilan pengetahuan, keterampilan,
                nilai, keyakinan, dan kebiasaan. Metode pendidikan termaksud mengajar, melatih, bercerita, dan berdiskusi</h5>
            <div class="play">
                <img src="/front-end/images/icon/play.png" alt="play"><span><a
                        href="{{ route('daftar-video-pembelajaran') }}">Mari Memulai</a></span>
            </div>
        </div>
        <div class="svg-image">
            <img src="/front-end/images/kids-1.png" alt="svg">
        </div>
    </div>
@endpush
