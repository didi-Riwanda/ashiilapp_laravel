@extends('layouts.main')

@section('container')

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

<div class="container">
    <div class="call-to-action">

        <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
        <h2>Unduh Dimana Saja</h2>
        <p class="tagline">Tersedia untuk semua platform seluler. </p>
        <div class="my-4">

            <a href="#" class="btn btn-light"><img src="images/appleicon.png" alt="icon"> App Store</a>
            <a href="https://play.google.com/store/apps/details?id=id.or.markazalhijrah.ashiilapp&pcampaignid=web_share" class="btn btn-light"><img src="images/playicon.png" alt="icon"> Google play</a>
        </div>
        <p class="text-primary"><small><i>*Berfungsi di iOS 10.0.5+, Android Kitkat and above. </i></small></p>
    </div>
</div>

@endsection