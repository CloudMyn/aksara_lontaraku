<div>

    <!-- SERVICES -->
    <div class="service-swipe">
        <div class="diffSection" id="services_section">
            <center>
                <p style="font-size: 50px; padding-top: 100px; padding-bottom: 10px; color: #fff;">Media Pembelajaran</p>
                <p style="font-size: 36px; padding-top: 10px; padding-bottom: 40px; color: #fff;">(ᨆᨈᨙᨑᨗ ᨄᨅᨒᨓᨗᨍᨑᨗᨕᨊ᨞)</p>
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
            <p style="font-size: 50px; padding-top: 100px;">Informasi</p>
            <p style="font-size: 36px; padding-top: 20px; padding-bottom: 40px;">(ᨕᨗᨇᨚᨑᨇᨆᨔᨗ᨞)</p>
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
            {{-- <p>Hal yang indah tentang belajar adalah bahwa tidak ada yang dapat mengambilnya dari Anda</p> --}}
            <h2>
                Belajar bahasa Lontara Makassar bukan hanya mengenal aksara, tapi juga menjaga warisan budaya leluhur kita!
                Dengan mempelajarinya, kamu akan lebih memahami sejarah, seni, dan kebanggaan identitas daerah. Yuk, jadikan
                pembelajaran ini seru dan bermakna untuk masa depan budaya kita!
                Belajar bahasa Lontara Makassar bukan hanya mengenal aksara, tapi juga menjaga warisan budaya leluhur kita!
                Dengan mempelajarinya, kamu akan lebih memahami sejarah, seni, dan kebanggaan identitas daerah. Yuk, jadikan
                pembelajaran ini seru dan bermakna untuk masa depan budaya kita!
            </h2>
            <h5>Pendidikan adalah proses memfasilitasi pembelajaran, atau pengambilan pengetahuan, keterampilan,
                nilai, keyakinan, dan kebiasaan. Metode pendidikan termaksud mengajar, melatih, bercerita, dan berdiskusi
            </h5>
            <div class="play">
                <img src="/front-end/images/icon/play.png" alt="play">
                <span style="display: flex; flex-direction: column; align-items: start;">
                    <a href="{{ route('daftar-video-pembelajaran') }}">Mari Memulai</a>
                    <span style="margin-left: 25px;">
                        (ᨆᨑᨗ ᨆᨘᨒᨕᨗ᨞)
                    </span>
                </span>
            </div>
        </div>
        <div class="svg-image">
            <img src="/front-end/images/kids-1.png" alt="svg">
        </div>
    </div>
@endpush
