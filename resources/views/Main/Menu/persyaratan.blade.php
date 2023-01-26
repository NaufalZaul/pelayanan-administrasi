@extends('index')

@section('main')
<div class="fixed-bottom bottom-0">
    <div class="btn-group m-4" role="group" aria-label="Basic outlined example">
        <button type="button" class="btn btn-primary active">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
    </div>
</div>

{{-- ktp --}}
<div class="requirements mb-5 mx-3 p-5 border-bottom rounded bg-white">
    <div class="mb-5 pb-5 border-bottom">
        <h1 class="ms-5 mb-5">Kartu Tanda Penduduk</h1>
        <div class="ms-5">        
            <h4>Syarat Utama dalam Pembuatan :</h4>
            <ol class="mb-4">
                <li>Berusia minimal 17 tahun</li>
                <li>Fotokopi Kartu Keluarga (KK).</li>
            </ol>
            
            <h4>Syarat penduduk asing yang memiliki izin tinggal tetap :</h4>
            <ol class="mb-4">
                <li>Telah berusia 17 tahun atau sudah kawin/pernah kawin</li>
                <li>Membawa KK</li>
                <li>Dokumen perjalanan</li>
                <li>Kartu izin tetap tinggal.</li>
            </ol>
            
            <h4>Syarat bagi penduduk yang pindah datang atau pindah domisili :</h4>
            <ol class="mb-4">
                <li>Melampirkan surat keterangan pindah dari Disdukcapil/UPT tempat asal pemohon</li>
                <li>Kartu Kaluarga</li>
            </ol>

            {{-- button untuk alur --}}
            <a href="{{ url('/alur') }}">
                <button class="btn" type="button">Alur Pendaftaran</button>
            </a>
        </div>
    </div>


    <div class="my-5 pb-5 border-bottom">
        <h1 class="ms-5 mb-5">Surat Ijin Mengemudi</h1>
        <div class="ms-5">
            <h4>Persyaratan Pembuatan SIM A</h4>
            <ol>
                <li>Tidak boleh berusia kurang dari 17 tahun.</li>
                <li>Memiliki e-KTP aktif.</li>
                <li>Sehat jasmani dan rohani berdasarkan surat keterangan dari dokter.</li>
                <li>Mampu membaca serta menulis.</li>
                <li>Dinyatakan lulus ujian teori dan praktik.</li>
                <li>Dilakukan kegiatan pencatatan biometrik meliputi perekaman retina mata, pengenalan wajah, dan sidik jari.</li>
            </ol>

            <h4>Persyaratan Pembuatan SIM B</h4>
            <ol>
                <li>Membuat permohonan tertulis.</li>
                <li>Pemohon bisa membaca serta menulis.</li>
                <li>Pemohon memiliki pengetahuan seputar peraturan lalu lintas jalan dan teknik dasar berkendara menggunakan kendaraan bermotor.</li>
                <li>Batas usia minimal 20 tahun.</li>
                <li>Terampil dalam mengemudi kendaraan bermotor.</li>
                <li>Sehat jasmani dan rohani, dibuktikan dengan melampirkan surat keterangan sehat rohani dan jasmani dari dokter.</li>
                <li>Dinyatakan lulus ujian teori dan ujian praktik. Melampirkan KTP asli dan fotokopi KTP.</li>
                <li>Pemohon disarankan membawa asuransi kecelakaan diri pengemudi atau AKDP.</li>
            </ol>

            <h4>Persyaratan Pembuatan SIM C</h4>
            <ol>
                <li>Minimal usia 17 tahun untuk SIM C (kapasitas mesin motor maksimal 250 cc). Untuk SIM C1 (kapasitas mesin motor 250 cc - 500 cc) setidaknya berumur 18 tahun, sedangkan SIM C2 (kapasitas mesin motor di atas 500 cc) yakni 19 tahun.</li>
                <li>Mempunyai e-KTP aktif & Foto copy KTP (4 Lembar)</li>
                <li>Sehat jiwa dan raga berdasarkan surat keterangan dokter.</li>
                <li>Mampu membaca dan menulis.</li>
            </ol>

            <button class="btn" type="button">Alur Pendaftaran</button>
        </div>
    </div>

    <div class="my-5">
        <h1 class="ms-5 mb-5">Persyaratan Pembuatan Kartu Keluarga</h1>
        <div class="ms-5">
            <h4>Pembuatan Kartu Keluarga Baru (Tanpa Identitas)</h4>
            <ol>
                <li>F1.01 dari Desa</li>
                <li>Dokumen Pendukung (Ijasah, Akta Lahir, Buku Nikah atau Dokumen yang diterbitkan oleh lembaga lain)</li>
            </ol>
            
            <h4>Pembuatan Kartu Keluarga (Pisah KK karena menikah)</h4>
            <ol>
                <li>Kartu Keluarga asli masing-masing pasangan (suami dan istri)</li>
                <li>Surat Keterangan Pindah Domisili dari Desa (jika suami/istri berbeda domisili)</li>
                <li>e-KTP asli</li>
                <li>Fotocopy Buku Nikah/Akta Perkawinan</li>
            </ol>
            
            <h4>Pembuatan Kartu Keluarga (Pindah Domisili)</h4>
            <ol>
                <li>Surat Keterangan Pindah Domisili dari Desa</li>
                <li>Kartu Keluarga asli</li>
                <li>e-KTP asli</li>
            </ol>

            <button class="btn" type="button">Alur Pendaftaran</button>
        </div>
    </div>


</div>

    @endsection