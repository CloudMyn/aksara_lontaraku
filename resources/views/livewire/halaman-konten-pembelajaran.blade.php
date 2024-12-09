
<div class="extra">
    <div class="box-pembelajaran" style="margin-top: 20px">
        <h1 style="margin-bottom: 10px">{!! $konten->judul !!}</h1>
        {!! $konten->deskripsi !!}
    </div>
</div>

@push('header-content')
    <div class="head-container" style="margin-top: 80px">
        <div class="svg-image" style="height: 230px; width: 100vw">
            <img src="{{ (strpos($konten->gambar, 'https') === 0) ? $konten->gambar : "/storage/" . $konten->gambar }}" alt="SVG" width="100%" height="230px" style="object-fit: cover; width: 100%;">
        </div>
    </div>
@endpush
