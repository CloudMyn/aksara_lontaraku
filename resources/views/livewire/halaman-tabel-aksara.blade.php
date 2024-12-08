<div>


    <div class="diffSection" id="portfolio_section">
        <center>
            <p style="font-size: 50px; padding: 100px; padding-bottom: 40px;">Halaman Tabel Aksara</p>
        </center>
        <div class="content">
            <p>Berikut adalah Tabel Lengkap Aksara Lontara yang terdiri dari 22 huruf yang mewakili bunyi, dan 4 tanda
                baca yang digunakan untuk mengatur ritme dan intonasi dalam membaca. Kami berharap dengan adanya tabel
                ini dapat membantu Anda dalam mempelajari Aksara Lontara dengan lebih baik.</p>
        </div>
    </div>
    <div class="extra">
        <p>22 Huruf Lontara & 4 Tanda</p>
        <div class="smbox">
            @foreach ($aksara_data as $aksara)
                <span>
                    <center>
                        <div class="font-lontara">{{ $aksara->kode_aksara }}</div>
                        <div class="det">{{ $aksara->nama_aksara }}</div>
                    </center>
                </span>
            @endforeach
        </div>
    </div>


</div>
