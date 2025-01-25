<div>

    <div class="diffSection" id="portfolio_section">
        <center>
            <p style="font-size: 50px; padding: 100px; padding-bottom: 40px;">Halaman Tabel Aksara</p>
        </center>
        <div class="content">
            <p>
                Tabel ini berisi 19 aksara dasar yang mewakili berbagai bunyi dalam bahasa Makassar. Selain itu, aksara lontara makassar digunakan untuk memperjelas struktur, ritme, dan intonasi dalam membaca teks beraksara Makassar. Kami berharap tabel ini dapat menjadi panduan yang membantu Anda dalam mempelajari dan memahami Aksara Makassar dengan lebih mudah serta melestarikan warisan budaya ini.
            </p>
        </div>
    </div>
    <div class="extra">
        <p>19 Huruf Lontara</p>
        <div class="smbox">
            {{-- <button class="item-smbox play-sound">
                <center>
                    <div class="font-lontara"></div>
                    <div class="det"></div>
                </center>
            </button> --}}
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
