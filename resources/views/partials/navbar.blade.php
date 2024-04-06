<div class="nav-menu fixed-top mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark navbar-expand-lg">
                    <a class="navbar-brand" href="/">
                        <!-- <img src="images/ashiil.png" width="70" class="img-fluid" alt="logo"> -->
                        <h3 class="text-light font-weight-normal">Ashiil<span class="font-weight-bold">app</span>
                        </h3>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                        aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"> <a class="nav-link {{ (request()->is('/') ? 'active' : '') }}" href="/">Beranda <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link {{ (request()->is('features') ? 'active' : '') }}" href="/features">Fitur</a> </li>
                            <li class="nav-item"> <a class="nav-link {{ (request()->is('majelis') ? 'active' : '') }}" href="/majelis">Majelis</a> </li>
                            <li class="nav-item" style="cursor: pointer;">
                                <div class="btn-group d-sm-block d-md-block">
                                    <a class="nav-link my-3 my-sm-0 ml-lg-3 dropdown-toggle {{ (request()->is('donasi') ? 'active' : '') }}" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Donasi</a>

                                    <div class="dropdown-menu mt-4">
                                        <a class="dropdown-item {{ (request()->is('donasi') ? 'active' : '') }}" href="/donasi">Pembangunan Markaz Al
                                            Hijrah</a>
                                        <a class="dropdown-item" href="/donasi">Operasional Pendidikan</a>
                                        <a class="dropdown-item" href="#">Operasional Masjid Al Hijrah</a>
                                        <a class="dropdown-item" href="#">Ashiil TV Peduli</a>
                                        <a class="dropdown-item" href="#">Operasional Ashiil TV</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"> <a class="nav-link {{ (request()->is('galery') ? 'active' : '') }}" href="/galery">Galeri</a> </li>
                            <li class="nav-item"> <a class="nav-link {{ (request()->is('about_as') ? 'active' : '') }}" href="/about_as">Tentang Kami</a> </li>
                            <li class="nav-item"> <a class="nav-link {{ (request()->is('contact') ? 'active' : '') }}" href="/contact">Kontak</a> </li>
                            <li class="nav-item"> <a href="https://play.google.com/store/apps/details?id=id.or.markazalhijrah.ashiilapp&pcampaignid=web_share" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">DOWNLOAD</a></li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>