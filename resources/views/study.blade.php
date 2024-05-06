@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="section-title">
            <small>Kajian</small>
            <h3>Majelis Harian Markaz Sunnah Nusantara Al Hijrah</h3>
        </div>

        <div class="img-gallery owl-carousel owl-theme">

            @foreach ($data as $d)
                @foreach ($d['fileurl'] as $f)
                    <a href="/majelis/{{ $d['id'] }}">
                        <img src="{{ $f }}" width="50" class="image rounded">
                    </a>
                @endforeach
            @endforeach

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 d-flex align-items-center">
                <ul class="list-unstyled ui-steps">
                    <li class="media">
                        <div class="circle-icon mr-4">1</div>
                        <div class="media-body">
                            <h5>Buat Akun</h5>
                            <p>Antum dapat mendaftar sebagai pengguna baru dengan memasukkan alamat email dan nomor
                                handphone aktif yang antum miliki. </p>
                        </div>
                    </li>
                    <li class="media my-4">
                        <div class="circle-icon mr-4">2</div>
                        <div class="media-body">
                            <h5>Bagikan Dengan Sahabat</h5>
                            <p>Ingin mendapatkan pahala jariyah? Antum dapat ajak keluarga, saudara, maupun sahabat
                                untuk menggunakan aplikasi dakwah islamiyah Ashiilapp.</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="circle-icon mr-4">3</div>
                        <div class="media-body">
                            <h5>Selamat Menggunakan</h5>
                            <p>Belajar Islam kapanpun dan dimanapun sesuai ajaran Al-Qur'an dan Sunnah hanya dalam
                                satu genggaman. </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <!-- <img src="images/al qur_an.png" alt="iphone" width="400" class="img-fluid rounded border border-dark"> -->
                <img src="images/iPhone 14 Pro Max – 72.png" alt="iphone" width="400"
                    class="img-fluid rounded border border-dark">
            </div>

        </div>

    </div>
@endsection
