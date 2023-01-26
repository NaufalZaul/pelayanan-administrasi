@extends('index')

@section('main')
<div class="fixed-bottom bottom-0 text-end">
    <div class="m-4">
        <a class="btn btn-primary" href="#ktp" role="button">Link</a>       
    </div>
</div>

{{-- buat KTP --}}
<div id="ktp" class=" mb-5 mx-3 px-5 border-bottom bg-white">
    <div class="w-100">
        <div class="d-flex justify-content-between align-items-center ps-5 pt-5">
            <p class="border border-2 rounded-5 py-1 p-3">KTP</p>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Baca Langsung</a></li>
                    <li class="page-item"><a class="page-link" href="#sim">SIM</a></li>
                    <li class="page-item"><a class="page-link" href="#kk">KK</a></li>
                </ul>
            </nav>
        </div>
        <div class="w-75 ms-5">
            <h1 class="title my-4">Pentingnya KTP Dalam Kehidupan Bernegara</h1>
            <p class="mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati dolore aperiam numquam ipsa nam vitae cupiditate, odit ipsum dicta suscipit doloremque illo atque omnis esse incidunt dolorem eos exercitationem quaerat unde commodi illum consectetur rem iusto eaque.</p>
            <div class="d-flex mt-3 mb-4">
                <img class="mt-1 rounded-5" src="{{ asset('Image/joanna-kosinska-7ACuHoezUYk-unsplash.jpg') }}" width="50" height="50" alt="">
                <div class="mx-3">
                    <h5>Naufal Zaul Karim</h5>
                    <p>Content cls</p>
                </div>
            </div>
        </div>
        <img class="img-fluid rounded" src="{{ asset('Image/joanna-kosinska-7ACuHoezUYk-unsplash.jpg') }}" alt="">
    </div>
    <div class="d-flex justify-content-between mt-5">
        <article class="w-75 me-5 fs-5">
            <p>
                Kartu Tanda Penduduk (KTP) adalah identitas resmi penduduk sebagai bukti diri yang diterbitkan oleh Kementerian Dalam Negeri yang berlaku di seluruh wilayah Negara Kesatuan Republik Indonesia. Kartu ini wajib dimiliki bagi Warga Negara Indonesia (WNI) dan Warga Negara Asing (WNA) yang memiliki Izin Tinggal Tetap (ITAP) yang sudah berumur 17 tahun atau sudah pernah kawin atau telah kawin. Anak dari orang tua Warga Negara Asing yang memiliki ITAP dan sudah berumur 17 tahun juga wajib memilki KTP.
            </p>
            <p>
                Menurut peraturan perundang-undangan yaitu UU No. 24 Tahun 2013 tentang Perubahan Atas UU No. 23 Tahun 2006 tentang Administrasi Kependudukan pasal, 1 point 14 bahwa Kartu Tanda Penduduk Elektronik, selanjutnya disingkat KTP-el, adalah Kartu Tanda Penduduk yang dilengkapi cip yang merupakan identitas resmi penduduk sebagai bukti diri yang diterbitkan oleh Instansi Pelaksana. Dengan demikian menurut peraturan perundang-undangan yang berlaku, Kartu Tanda Penduduk Elektronik (KTP-el) adalah Kartu Tanda Penduduk (KTP) diproses secara komputerisasi  dan  dilengkapi cip yang berfungsi untuk menyimpan biodata, sidik jari dan tanda tangan.
            </p>
            <p>
                Program KTP-el di Indonesia telah dimulai sejak tahun 2009 dengan ditunjuknya empat kota sebagai proyek percontohan nasional. Adapun keempat kota tersebut adalah Padang, Makasar, Yogyakarta dan Denpasar. Sedangkan kabupaten/kota lainnya secara resmi diluncurkan Kementerian Dalam Negeri pada bulan Februari 2011 yang pelaksanannya dibagi dalam dua tahap. Pelaksanaan tahap  pertama  dimulai  pada  tahun 2011 dan  berakhir  pada  30  April 2012 yang mencakup 67 juta  penduduk  di 2348  kecamatan  dan 197 kabupaten/kota. Sedangkan tahap kedua mencakup 105 juta penduduk yang tersebar di 300 kabupaten/kota lainnya di Indonesia.
            </p>
            <p>
                Secara  keseluruhan  pada  akhir 2012 ditargetkan setidaknya 172 juta penduduk sudah memiliki KTP-el dan dari awal sampai akhir tahun 2013 perekaman data penduduk tetap berlanjut sampai seluruh penduduk Indonesia wajib KTP terekam data pribadinya. Penerapan KTP Elektronik (KTP-el) yang saat ini dilaksanakan merupakan bagian dari upaya untuk mempercepat serta mendukung akurasi terbangunnya databasekependudukan di kabupaten/ kota, provinsi maupun databasekependudukan secara nasional. Dengan diterapkannya KTP-el, maka setiap penduduk tidak dimungkinkan lagi dapat memiliki KTP lebih dari satu atau pemalsuan KTP, mengingat dalam KTP-el tersebut telah memuat kode keamanan dan rekaman elektronik data penduduk yang antara lain berupa sidik jari, iris mata , tanda tangan, dan elemen data lainnya.
            </p>    
        </article>
        <div class="w-25 ms-5 pt-4">
            <figure>
                <img class="w-100 rounded-top" src="{{ asset('Image/pexels-german-suarez-10370307.jpg') }}" alt="">
                <blockquote class="border border-top-0 rounded-bottom text-center p-3 bg-light text-dark">
                    KTP atau <cite>Kartu tanda Penduduk</cite> sangat penting dalam kehidupan bernegara, karena kartu tersebut sebagai tanda pengenal bahwa merupakan warga Indonesia.
                </blockquote>
            </figure>
        </div>
    </div>

    <div class="card bg-light text-dark">
        <div class="card-body">
            <i class="mx-4">Dikutip dari: https://laravel.com/ ,</i>
            <i>Terkahir update 13 Januari 2022</i>
        </div>
    </div>
</div>










{{-- artikel sim --}}
<div id="sim" class=" mb-5 mx-3 px-5 border-bottom bg-white">
    <div class="w-100">
        <div class="d-flex justify-content-between align-items-center ps-5 pt-5">
            <p class="border border-2 rounded-5 py-1 p-3">SIM</p>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Baca Langsung</a></li>
                    <li class="page-item"><a class="page-link" href="#ktp">KTP</a></li>
                    <li class="page-item"><a class="page-link" href="#kk">KK</a></li>
                </ul>
            </nav>
        </div>
        <div class="w-75 ms-5">
            <h1 class="title my-4">SIM, Bentuk Surat Ijin Legal Berkendara</h1>
            <p class="mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati dolore aperiam numquam ipsa nam vitae cupiditate, odit ipsum dicta suscipit doloremque illo atque omnis esse incidunt dolorem eos exercitationem quaerat unde commodi illum consectetur rem iusto eaque.</p>
            <div class="d-flex mt-3 mb-4">
                <img class="mt-1 rounded-5" src="{{ asset('Image/joanna-kosinska-7ACuHoezUYk-unsplash.jpg') }}" width="50" height="50" alt="">
                <div class="mx-3">
                    <h5>Naufal Zaul Karim</h5>
                    <p>Content cls</p>
                </div>
            </div>
        </div>
        <img class="img-fluid rounded" src="{{ asset('Image/joanna-kosinska-7ACuHoezUYk-unsplash.jpg') }}" alt="">
    </div>

    <div class="d-flex justify-content-between mt-5">
        <article class="w-75 me-5 fs-5">
            <p>
                SIM adalah dokumen yang wajib dimiliki oleh pengendara kendaraan bermotor Roda dua atau lebih, semua memiliki golongan SIM yang diwajibkan. Didalam SIM terdapat data pengemudi pemilik SIM, jika mengemudikan kendaraan bermotor tanpa dilengkapi SIM, dapat dijerat dengan UU Lalu Lintas, bisa berupa denda tilang. Kewajiban bagi pengemudi kendaraan bermotor di Indonesia adalah untuk memiliki surat ijin mengemudi(SIM). Dan apabila berkendara di jalan harus membawa kelengkapan surat surat yang di antaranya adalah SIM. Hal ini sesuai dalam Undang-undang nomor 14 Tahun 1992 Pasal 18(1) tentang Lalu-lintas dan angkutan jalan.bahwa"setiap pengemudi kendaraan bermotor di wilayah Negara Republik Indonesia wajib memiliki surat ijin mengemudi(SIM)."             
            </p>
            <p>
                Adapun tugas Kepolisian mengenai SIM telah diatur dalam undang-undang sebagai berikut: UU No 2 Tahun 2002 Pasal 14 ayat (1) b "Menyelenggarakan segala kegiatan dalam menjamin keamanan, ketertiban,dan kelancaran lalu-lintas di jalan." UU No 2 Tahun 2002 Pasal 15(2) c "Memberikan surat ijin mengemudi kendaraan bermotor". Perlunya mengetahui golongan SIM yaitu untuk menentukan pembuatan SIM yang cocok sesuai dengan jenis kendaraan dan usia pengemudi. Berikut adalah golongan SIM sesuai dengan jenis kendaraan:
            </p>

            <ol>
                <li>
                    SIM A ini untuk mengemudikan mobil penumpang dan barang perseorangan dengan jumlah berat yang diperbolehkan tidak melebihi 3.500 kg.
                </li>
                <li>
                    SIM B 1 ini untuk mengemudikan mobil penumpang dan barang perseorangan dengan jumlah berat yang diperbolehkan tidak lebih 3.500 kg.
                </li>
                <li>
                    SIM B 2 ini untuk mengemudikan kendaraan alat berat,kendaraan penarik , atau kendaraan bermotor dengan menarik kereta tempelan atau gandengan lebih dari 1.000 kg.
                </li>
                <li>
                    SIM C untuk sepeda motor dengan kisaran kapasitas silinder (cylinder capacity) paling tinggi 250cc.
                </li>
                <li>
                    SIM C 1 untuk pengemudi sepeda motor dengan kisaran kapasitas silinder (cylinder capacity) diatas 500cc dan motor Listrik.
                </li>
                <li>
                    SIM D ini berlaku untuk mengemudi kendaraan bermotor khusus bagi pengemudi disabilitas atau berkebutuhan khusus.
                </li>
            </ol>

            <p>
                Sebelum masa berlaku berakhir sebaiknya dilakukan pengajuan perpanjangan SIM , dapat dilakukan dengan datang ke kantor layanan terkait(SAMSAT) terdekat.

                Kini pengajuan perpanjangan dipermudah dan dapat dilakukan secara online .Hal ini agar masyarakat dapat mematuhi peraturan yang berlaku di Indonesia tentang berkendara dan berlalu-lintas.
            </p>
        </article>
        <div class="w-25 ms-5 pt-4">
            <figure>
                <img class="w-100 rounded-top" src="{{ asset('Image/pexels-german-suarez-10370307.jpg') }}" alt="">
                <blockquote class="border border-top-0 rounded-bottom text-center p-3 bg-light text-dark">
                    SIM atau <cite>Surat Ijin Mengemudi</cite> merupakan surat ijin yang menyatakan bahwa sudah cukup umur dalam mengendarai kendaraan bermotor
                </blockquote>
            </figure>
        </div>
    </div>

    <div class="card bg-light text-dark">
        <div class="card-body">
            <i class="mx-4">Dikutip dari: https://laravel.com/ ,</i>
            <i>Terkahir update 13 Januari 2022</i>
        </div>
    </div>
</div>





{{-- buat KK --}}
<div id="kk" class=" mb-5 mx-3 px-5 bg-white">
    <div class="w-100">
        <div class="d-flex justify-content-between align-items-center ps-5 pt-5">
            <p class="border border-2 rounded-5 py-1 p-3">Kartu Keluarga</p>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Baca Langsung</a></li>
                    <li class="page-item"><a class="page-link" href="#ktp">KTP</a></li>
                    <li class="page-item"><a class="page-link" href="#sim">SIM</a></li>
                </ul>
            </nav>
        </div>
        <div class="w-75 ms-5">
            <h1 class="title my-4">Daftarkan Keluargamu Dalam Bentuk Kartu Keluarga</h1>
            <p class="mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati dolore aperiam numquam ipsa nam vitae cupiditate, odit ipsum dicta suscipit doloremque illo atque omnis esse incidunt dolorem eos exercitationem quaerat unde commodi illum consectetur rem iusto eaque.</p>
            <div class="d-flex mt-3 mb-4">
                <img class="mt-1 rounded-5" src="{{ asset('Image/joanna-kosinska-7ACuHoezUYk-unsplash.jpg') }}" width="50" height="50" alt="">
                <div class="mx-3">
                    <h5>Naufal Zaul Karim</h5>
                    <p>Content cls</p>
                </div>
            </div>
        </div>
        <img class="img-fluid rounded" src="{{ asset('Image/joanna-kosinska-7ACuHoezUYk-unsplash.jpg') }}" alt="">
    </div>

    <div class="d-flex justify-content-between mt-5">
        <article class="w-75 me-5 fs-5">
            <p>
                Kartu keluarga (KK) menjadi salah satu hal penting untuk diperhatikan, terutama jika baru saja menikah dan memiliki keluarga baru. Dalam kondisi seperti ini, ada baiknya kamu segera mengurus dan membuat kartu keluarga yang baru dan terpisah dari kedua keluarga, yaitu keluarga kamu dan keluarga pasangan kamu. Hal ini akan membuat berbagai urusan administrasi keluarga baru kamu akan menjadi lebih mudah dan cepat prosesnya.
            </p>
            <p>
                Kartu keluarga merupakan kartu identitas bagi sebuah keluarga yang memuat berbagai data penting, seperti nama, susunan anggota keluarga, hubungan, pekerjaan setiap anggota keluarga, dan berbagai informasi penting lainnya. Jika melihat fungsinya, kepemilikan kartu keluarga adalah sebuah hal yang wajib. Dalam penggunaannya, kartu keluarga akan sering dipakai untuk persyaratan utama dalam pengurusan administrasi dan berbagai dokumen penting. Misalnya, pembuatan akta kelahiran bagi anak, pendaftaran anak masuk sekolah, penggantian KTP, dan berbagai urusan yang berhubungan dengan perbankan juga akan membutuhkan kartu keluarga sebagai persyaratannya. Untuk membuat kartu keluarga yang baru, tentu akan membutuhkan waktu cukup lama. Sebab ada beberapa tahap yang harus dilalui untuk mengurus hal tersebut. Kamu harus mengurusnya sesuai prosedur dan ketentuan yang berlaku. Tahapannya dimulai dari tingkat Rukun Tetangga (RT) hingga ke Kantor Dinas Kependudukan dan Pencatatan Sipil (Dukcapil) di daerah kamu.
            </p>
            <p>
                Pada dasarnya, kartu keluarga akan diganti setiap kali ada perubahan di dalam susunan anggota keluarga, baik ada anggota keluarga yang berkurang maupun yang bertambah di dalamnya. Ada banyak alasan yang menjadi penyebab terjadinya perubahan susunan dalam kartu keluarga, misalnya kematian, pernikahan, kelahiran, perceraian, dan berbagai alasan lainnya. Berdasarkan peraturan yang berlaku, setiap kali terjadi perubahan susunan anggota keluarga di dalam kartu keluarga, maka kamu sebagai kepala keluarga wajib untuk melaporkan hal tersebut ke kantor kelurahan paling lambat 14 hari setelah adanya perubahan tersebut. ssDalam setiap proses pelaporan tersebut, kamu wajib membawa dua lembar kartu keluarga, yaitu lembar yang disimpan kamu selaku kepala keluarga dan lembar yang disimpan Ketua RT. Proses pelaporan ini kemudian akan dilanjutkan ke Ketua RW dan selanjutnya ke kantor kelurahan.
            </p>
        </article>
        <div class="w-25 ms-5 pt-4">
            <figure>
                <img class="w-100 rounded-top" src="{{ asset('Image/pexels-german-suarez-10370307.jpg') }}" alt="">
                <blockquote class="border border-top-0 rounded-bottom text-center p-3 bg-light text-dark">
                    KTP atau <cite>Kartu tanda Penduduk</cite> sangat penting dalam kehidupan bernegara, karena kartu tersebut sebagai tanda pengenal bahwa merupakan warga Indonesia.
                </blockquote>
            </figure>
        </div>
    </div>

    <div class="card bg-light text-dark">
        <div class="card-body">
            <i class="mx-4">Dikutip dari: https://laravel.com/ ,</i>
            <i>Terkahir update 13 Januari 2022</i>
        </div>
    </div>
</div>



@endsection