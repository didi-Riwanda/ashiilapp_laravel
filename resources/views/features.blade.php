@extends('layouts.main')

@section('container')
<div class="container">

    <div class="section-title">
        <small>mobile application</small>
        <h3>Fitur Aplikasi</h3>
    </div>


    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="card features">
                <div class="card-body">
                    <div class="media">
                        <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                        <div class="media-body">
                            <h4 class="card-title">Ilmu Bermanfaat</h4>
                            <p class="card-text">Materi ilmu yang beragam berisi konten Islami, Fiqih,
                                Pendidikan, Al-Qur'an serta Kitab Hadist. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card features">
                <div class="card-body">
                    <div class="media">
                        <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                        <div class="media-body">
                            <h4 class="card-title">Mudah Digunakan</h4>
                            <p class="card-text">Dikembangkan dengan teknologi mobile app akan memudahkan
                                Ashiilapp selalu dalam genggaman. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card features">
                <div class="card-body">
                    <div class="media">
                        <span class="ti-lock gradient-fill ti-3x mr-3"></span>
                        <div class="media-body">
                            <h4 class="card-title">Donasi Aman</h4>
                            <p class="card-text">Aplikasi dakwah yang dilengkapi fitur DONASI telah dilengkapi
                                dengan sistem keamanan terbaik. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- <div class="section"> --}}

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/hp2.png" width="500" alt="dual phone" class="img-fluid rounded">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                    <h2>Online Streaming</h2>
                    <p class="mb-4">Keuntungan memiliki aplikasi mobile Ashiilapp dalam genggaman, anda dapat
                        menikmati kemudahan menyaksikan Live TV Streaming dari berbagai station TV Online dari
                        berbagai daerah di tanah air. </p>
                    <a href="#gallery" class="btn btn-primary">Galeri TV Streaming</a>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="section-title">
            <small>FAQ</small>
            <h3>Pertanyaan Yang Sering Diajukan</h3>
        </div>
    
        <div class="row pt-4">
            <div class="col-md-6">
                <h4 class="mb-3">Ashiilapp itu apa?</h4>
                <p class="light-font mb-5">Ashiilapp adalah aplikasi dakwah islamiah yang mengusung konsep All in
                    One, semua dalam 1 aplikasi. Tersedia untuk Android dan IOS. </p>
                <h4 class="mb-3">Siapa tim Ashiilapp?</h4>
                <p class="light-font mb-5">Ashiilapp dibuat oleh tim dari berbagai disiplin ilmu, diantaranya
                    asatidz, programmer, tim kreatif dan sebagainya. </p>
    
            </div>
            <div class="col-md-6">
                <h4 class="mb-3">Apakah Ashiilapp gratis?</h4>
                <p class="light-font mb-5">In syaa Allah, Ashiilapp selamanya gratis. </p>
                <h4 class="mb-3">Apakah Ashiilapp tersedia untuk Operation System Windows?</h4>
                <p class="light-font mb-5">Tidak. Untuk saat ini hanya tersedia untuk Android dan IOS. </p>
    
            </div>
        </div>
    </div>
    
    <div class="container light-bg">
        <div class="call-to-action">
    
            <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
            <h2 class="text-dark">Unduh Dimana Saja</h2>
            <p class="tagline">Tersedia untuk semua platform seluler. </p>
            <div class="my-4">
    
                <a href="#" class="btn btn-light"><img src="images/appleicon.png" alt="icon"> App Store</a>
                <a href="https://play.google.com/store/apps/details?id=id.or.markazalhijrah.ashiilapp&pcampaignid=web_share" class="btn btn-light"><img src="images/playicon.png" alt="icon"> Google play</a>
            </div>
            <p class="text-primary"><small><i>*Berfungsi di iOS 10.0.5+, Android Kitkat and above. </i></small></p>
        </div>
    </div>

{{-- </div> --}}
@endsection