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
                <button class="item-smbox play-sound" onclick="playSound('{{ 'storage/' . $aksara->suara }}')">
                    <center>
                        <div class="font-lontara">{{ $aksara->kode_aksara }}</div>
                        <div class="det">{{ $aksara->nama_aksara }}</div>
                    </center>
                </button>
            @endforeach
        </div>
    </div>


    <script>
        function playSound(sound) {
            var audio = new Audio(sound);
            audio.play();
        }
        // document.addEventListener('livewire:init', () => {

        //     const elements = document.querySelectorAll('.play-sound');

        //     elements.forEach(element => {

        //         let sound = element.querySelector('.sound');
        //         let dataSound = sound.getAttribute('data-sound');

        //         console.log(dataSound);

        //         element.addEventListener('mouseenter', function() {
        //             const audio = new Audio(
        //                 '{{ $aksara->sound }}'); // specify the path to your sound file
        //             audio.play();
        //         });
        //     });
        // });
    </script>

</div>
