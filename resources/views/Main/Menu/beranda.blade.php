<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
    <link rel="stylesheet" href="{{ asset('css/persyaratan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/artikel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    
    @include('Main.Submain.navbar')


    {{-- header --}}
    <div class="header min-vh-100 d-flex justify-content-center align-items-center px-5">
        <div class="w-50">
            <h1 class="header-title">Pelayanan Mudah Tanpa Ribet.</h1>
            <p class="header-des mb-5">Melayani Pembuatan Surat Pengantar Kecamatan</p>
            <span class="fs-2">Support by OpenCode Company</span>
        </div>
        <div class="header-img w-50 position-relative text-center">
            <img class="w-75 rounded" src="{{ asset('Image/michal-parzuchowski-Nh4Sxasye24-unsplash.jpg') }}" alt="">
        </div>
    </div>

    {{-- tentang --}}
    <div class="min-vh-100 d-flex flex-column justify-content-center px-5">
        <div class="row mb-5">
            <div class="col-4 position-relative">
                <img class="about-img w-100 rounded" src="{{ asset('Image/coinview-app-h7a6g0ua6LM-unsplash.jpg') }}" alt="">
                <div class="position-absolute bottom-0 d-flex align-items-center justify-content-center text-white ms-3 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                        <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                    </svg>
                    <p class="fs-3 my-0 ms-2 p-0">Surat Ijin Mengemudi</p>
                </div>
            </div>
            <div class="col-4 position-relative">
                <img class="about-img w-100 rounded" src="{{ asset('Image/tran-mau-tri-tam-3xFwO_wTrkg-unsplash.jpg') }}" alt="">
                <div class="position-absolute bottom-0 d-flex align-items-center justify-content-center text-white ms-3 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                        <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
                        <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
                    </svg>
                    <p class="fs-3 my-0 ms-2 p-0">Kartu Tanda Penduduk</p>
                </div>
            </div>
            <div class="col-4 position-relative">
                <img class="about-img w-100 rounded" src="{{ asset('Image/juja-han-RprU1dBtdGY-unsplash.jpg') }}" alt="">
                <div class="position-absolute bottom-0 d-flex align-items-center justify-content-center text-white ms-3 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                        <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    <p class="fs-3 my-0 ms-2 p-0">Kartu Keluarga</p>
                </div>
            </div>
        </div>
        <div class="w-75 mt-5 mx-auto">
            <h1 class="about-title">Lorem ipsum dolor sit.</h1>
            <p class="about-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quia animi voluptas recusandae! Odit quae aliquam pariatur provident modi excepturi nihil quia soluta! Mollitia incidunt harum nobis ullam, suscipit nisi!</p>
        </div>
    </div>
    
    {{-- fitur pesan --}}
    <div class="min-vh-100 d-flex justify-content-center align-items-center px-5">
        <div class="w-50 position-relative text-center">
            <img class="w-75 rounded" src="{{ asset('Image/jonas-leupe-QQ2d5naZee0-unsplash.jpg') }}" alt="">
            <div class="mess-icon-one position-absolute w-50 bg-light p-2 px-3 rounded shadow">
                <div class="d-flex justify-content-between">
                    <h5 class="mess-title-icon w-50 text-truncate text-start m-0 p-0">Lorem, ipsum dolor</h5>
                    <p class="mess-time-icon text-muted m-0 p-0">18:00</p>
                </div>
                <p class="mess-des-icon text-truncate m-0 p-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, dolorem?</p>
            </div>
            <div class="mess-icon-two position-absolute w-50 bg-light p-2 px-3 rounded shadow">
                <div class="d-flex justify-content-between">
                    <h5 class="mess-title-icon w-50 text-truncate text-start m-0 p-0">Lorem, ipsum dolor</h5>
                    <p class="mess-time-icon text-muted m-0 p-0">20:00</p>
                </div>
                <p class="mess-des-icon text-truncate m-0 p-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, dolorem?</p>
            </div>
        </div>
        <div class="w-50 ms-5">
            <h1 class="notification-title">Lorem ipsum dolor sit.</h1>
            <p class="notification-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia suscipit delectus mollitia! Hic ea aut assumenda reprehenderit laudantium. Debitis et, ad cumque repudiandae harum magnam alias distinctio similique cupiditate ratione!</p>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
