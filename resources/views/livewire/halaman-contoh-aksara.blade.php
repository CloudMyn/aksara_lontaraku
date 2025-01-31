<div>

    <div class="extra" style="margin-bottom: 0px">
        <p style="padding-top: 10%; padding-bottom: 0px;">4 Tanda Baca & Contohnya</p>
        <p style="padding-bottom: 140px; padding-top: 5px; font-size: 2rem;">(4 ᨆᨈᨇ ᨊᨃ & ᨃᨈᨆ ᨉᨈᨌ)</p>
        <div class="smbox">
            @foreach ($tanda_baca as $aksara)
                <button class="item-smbox play-sound" onclick="playSound('{{ 'storage/' . $aksara->suara }}')">
                    <center>
                        <div class="font-lontara">{{ $aksara->kode_aksara }}</div>
                        <div class="det">{{ $aksara->nama_aksara }}</div>
                    </center>
                </button>
            @endforeach
        </div>

        <div class="smbox">
            <h1 style="width: 100%; text-align: center; margin: 40px 0px;">Contoh Tanda Baca</h1>
            @foreach ($contoh_tanda_baca as $aksara)
                <button class="item-smbox play-sound sm" onclick="playSound('{{ 'storage/' . $aksara->suara }}')">
                    <center>
                        <div class="font-lontara">{{ $aksara->kode_aksara }}</div>
                        <div class="det">{{ $aksara->nama_aksara }}</div>
                    </center>
                </button>
            @endforeach
        </div>
    </div>


</div>
