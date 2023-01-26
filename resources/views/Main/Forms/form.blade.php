@extends('index')
@section('main')
<div class="bg-white p-5">

    <a href="{{ url('/persyaratan') }}" class="my-5">
        <button type="button" class="btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg>
            Back
        </button>
    </a>

    <h2 class="mt-5">Formulir Pendataan</h2>

    <form class="m-auto mt-4 p-3 border rounded" action="{{ route('input') }}" method="POST">
        @csrf
        <div class="mb-3 d-flex justify-content-center align-items-center bg-light rounded-start">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill mx-2" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
            </svg>
            <input type="text" name="nama" class="w-100 border rounded-end p-2" placeholder="Masukkan Nama Lengkap">
        </div>
        <div class="row mx-0">
            <div class="col mb-3 me-1 px-0 d-flex justify-content-center align-items-center bg-light rounded-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-houses-fill mx-2" viewBox="0 0 16 16">
                    <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.51 2.51 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354L7.207 1Z"/>
                <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Z"/>
                </svg>
                <input type="text" name="tempat_lahir" class="w-100 border rounded-end p-2" placeholder="Masukkan Tempat Lahir">
            </div>
            <div class="col mb-3 ms-1 px-0 d-flex justify-content-center align-items-center bg-light rounded-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-week-fill mx-2" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zM2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                </svg>
                <input type="text" name="tanggal_lahir" class="w-100 border rounded-end p-2" placeholder="Masukkan Tanggal Lahir" onfocus="(this.type='date')">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputJenisKelamin" class="form-label">Masukkan Jenis Kelamin</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-Laki">
                <label class="form-check-label" for="laki-laki">
                    Laki-Laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                <label class="form-check-label" for="perempuan">
                    Perempuan
                </label>
            </div>
        </div>
        <div class="mb-3 d-flex justify-content-center align-items-center bg-light rounded-start">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-moon-fill mx-2" viewBox="0 0 16 16">
                <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
            </svg>
            <select class="form-select" name="agama" aria-label="Default select example">
                <option selected>-- Pilih Agama --</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Buddha">Buddha</option>
                <option value="Hindu">Hindu</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        
        <div class="row mx-0">
            <div class="col mb-3 px-0 d-flex justify-content-center align-items-center bg-light rounded-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill mx-2" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                </svg>

                <input type="text" name="alamat" class="w-100 border rounded-end p-2" placeholder="Masukkan Alamat">
            </div>
            <div class="col mb-3 mx-1 px-0 d-flex justify-content-center align-items-center bg-light rounded-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill mx-2" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                </svg>

                <input type="text" name="kota" class="w-100 border rounded-end p-2" placeholder="Masukkan Kota">
            </div>
            <div class="col mb-3 px-0 d-flex justify-content-center align-items-center bg-light rounded-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill mx-2" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                </svg>

                <input type="text" name="provinsi" class="w-100 border rounded-end p-2" placeholder="Masukkan Provinsi">
            </div>
        </div>

        <div class="mb-3 d-flex justify-content-center align-items-center bg-light rounded-start">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-workspace mx-2" viewBox="0 0 16 16">
                <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
            </svg> 
            <select class="form-select" name="pekerjaan" aria-label="Default select example">
                <option selected>-- Pilih Pekerjaan --</option>
                <option value="Bekerja">Bekerja</option>
                <option value="Belum Bekerja">Belum Bekerja</option>
                <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputTanggalLahir" class="form-label">Pilih Kewarganegaraan</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="kewarganegaraan" id="indonesia" value="Indonesia">
                <label class="form-check-label" for="indonesia">
                    Indonesia
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="kewarganegaraan" id="asing" value="Asing">
                <label class="form-check-label" for="asing">
                    Asing
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputStatus" class="form-label">Pilih Status Pernikahan</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status_pernikahan" id="menikah" value="Menikah">
                <label class="form-check-label" for="menikah">
                    Menikah
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status_pernikahan" id="belum-menikah" value="Belum Menikah">
                <label class="form-check-label" for="belum-menikah">
                    Belum Menikah
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        {{-- <button type="submit" class="btn btn-success">Cetak</button> --}}
    </form>
</div>

@endsection