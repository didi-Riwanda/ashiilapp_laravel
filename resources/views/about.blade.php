@extends('layouts.main')

@section('container')
    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>Tentang AshiilApp | Aplikasi Dakwah</h1>
            <p class="tagline">Aplikasi dakwah islamiah yang mengusung konsep All in One mobile app. Tersedia untuk Android dan IOS. <br> Dikembangkan oleh Yayasan Ashiil Cahaya Tauhid 2023</p>
        </div>
        <div class="img-holder mt-3"><img src="../images/hp2.png" width="400" alt="phone" class="img-fluid rounded"></div>
    </header>

    <div class="section bg-gradient">
        <div class="container">
            <div class="call-to-action">

                <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                <h2>Unduh Dimana Saja</h2>
                <p class="tagline">Tersedia untuk semua platform seluler. </p>
                <div class="mb-5">
                    <a href="#" class="btn btn-light"><img src="../images/appleicon.png" alt="icon"> App Store</a>
                    <a href="https://play.google.com/store/apps/details?id=id.or.markazalhijrah.ashiilapp&pcampaignid=web_share" class="btn btn-light"><img src="../images/playicon.png" alt="icon"> Google play</a>
                </div>
                <p class="text-primary"><small><i>*Berfungsi di iOS 10.0.5+, Android Kitkat and above. </i></small></p>
            </div>
        </div>
    </div>

    <div class="light-bg py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                    <p class="mb-2"> <span class="ti-location-pin mr-2"></span> Jl. Kayu Putih, Kelurahan Bina Widya,
                        Kecamatan Bina Widya, Pekanbaru Kota, Kode Pos 28294</p>
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-email mr-2"></span> <a class="mr-4"
                                href="mailto:itashiilapp@gmail.com">itashiilapp@gmail.com</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0">
                            <span class="ti-headphone-alt mr-2"></span> <a href="tel:6281287780680">081287780680</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline social-icons">
                        <a href="https://www.facebook.com/profile.php?id=61552362316993&mibextid=h0bNNIvJDl07j6qQ"
                            target="_blank"><span class="ti-facebook"></span></a>
                        <a href="https://twitter.com/ashiilapp" target="_blank"><span class="ti-twitter-alt"></span></a>
                        <a href="https://www.instagram.com/ashiilapp" target="_blank"><span
                                class="ti-instagram"></span></a>
                    </div>

                </div>

                <div class="col-lg-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.66987357622!2d101.36956097585025!3d0.49425126372664263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a9d1d47e37e1%3A0xd50c6870fe541db!2sMARKAZ%20SUNNAH%20NUSANTARA%20AL%20HIJRAH!5e0!3m2!1sid!2sid!4v1702714449666!5m2!1sid!2sid"
                        width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- <div class="col-lg-3">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=61552362316993&mibextid=h0bNNIvJDl07j6qQ" target="_blank"><span class="ti-facebook"></span></a>
                        <a href="https://twitter.com/ashiilapp" target="_blank"><span class="ti-twitter-alt"></span></a>
                        <a href="https://www.instagram.com/ashiilapp" target="_blank"><span class="ti-instagram"></span></a>
                    </div>
                </div> -->
            </div>

        </div>

    </div>
@endsection