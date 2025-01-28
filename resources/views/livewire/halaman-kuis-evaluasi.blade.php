<div>

    <style>
        .selected-option {
            color: #5fb7ff;
        }
    </style>

    @if ($is_finish)
        <div class="diffSection" id="contactus_section">
            <center>
                <p style="font-size: 50px; padding: 100px">Selamat Anda Telah Menyelesaikan Kuis 🎉🎉</p>
            </center>
            <div class="csec"></div>
            <div class="back-contact">
                <div class="cc" style="width: 560px;">
                    <div style="text-align: center;">
                        <h2>Terima Kasih</h2>
                        <p>Terima kasih karena telah mengikuti kuis. Kami berharap Anda menikmati proses belajar dan
                            memahami Aksara Lontara lebih dalam.</p>

                        <div class="score">
                            <div>Anda Mendapatkan Skor</div>
                            <h1>{{ $total_nilai }}</h1>
                            <strong>
                                @if ($total_nilai < 50)
                                    Kurang
                                @elseif ($total_nilai >= 50 && $total_nilai < 75)
                                    Baik
                                @else
                                    Sangat Baik
                                @endif
                            </strong>
                        </div>
                    </div>
                    <div class="quiss-actions">
                        @if ($total_nilai < 50)
                            <button onclick="window.location.reload();"  class="btn-quiss q-danger">Ulang Kuis</button>
                        @else
                            <a href="{{ route('daftar-video-pembelajaran') }}" class="btn-quiss q-danger">Kembali Ke
                                Video</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="diffSection" id="contactus_section">
            <center>
                <p style="font-size: 50px; padding: 100px">Pertanyaan #{{ $pertanyaan_count }}</p>
            </center>
            <div class="csec"></div>
            <div class="back-contact">
                <form class="cc" style="width: 560px;">
                    <div>
                        <h2>{{ $kuis->soal }}</h2>
                        <div class="quiss-options">
                            <div>
                                <input type="radio" wire:model="jawaban" required id="a1" name="answer"
                                    value="a">
                                <label class="label" for="a1">A ) </label>
                                <label class="answer {{ strlen($kuis->pilihan_a) < 3 ? 'font-lontara' : '' }}"
                                    for="a1">{{ $kuis->pilihan_a }}</label>
                            </div>
                            <div>
                                <input type="radio" wire:model="jawaban" required id="b1" name="answer"
                                    value="b">
                                <label class="label" for="b1">B ) </label>
                                <label class="answer {{ strlen($kuis->pilihan_b) < 3 ? 'font-lontara' : '' }}"
                                    for="b1">{{ $kuis->pilihan_b }}</label>
                            </div>
                            <div>
                                <input type="radio" wire:model="jawaban" required id="c1" name="answer"
                                    value="c">
                                <label class="label" for="c1">C ) </label>
                                <label class="answer {{ strlen($kuis->pilihan_c) < 3 ? 'font-lontara' : '' }}"
                                    for="c1">{{ $kuis->pilihan_c }}</label>
                            </div>
                            <div>
                                <input type="radio" wire:model="jawaban" required id="d1" name="answer"
                                    value="d">
                                <label class="label" for="d1">D ) </label>
                                <label class="answer {{ strlen($kuis->pilihan_d) < 3 ? 'font-lontara' : '' }}"
                                    for="d1">{{ $kuis->pilihan_d }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="quiss-actions">
                        <button wire:click="prev" type="button" class="btn-quiss q-danger">Kembali</button>
                        <button wire:click="next" type="button" class="btn-quiss q-success">Selanjutnya</button>
                    </div>
                    </fo>
            </div>
        </div>
    @endif



</div>
