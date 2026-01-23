@extends('layouts.common.app')

@section('content')
<header class="page-header">
    <div class="container-fluid px-4 px-md-5">
        <div class="row align-items-center">
            <div class="col-lg-7 position-relative">
                <div class="header-content">
                    <h2 class="title color-black mb-4 font-weight-700 mb-3 text-center text-lg-left">
                        @if ($header != null)
                            {{ $header->judul }}
                        @else
                        Fashion Streetwear Modern, Elegant dan Terpercaya
                        @endif
                    </h2>
                    <p class="body-1 color-grey mb-4 text-center text-lg-left">
                        @if ($header != null)
                            {{ $header->deskripsi }}
                        @else
                        Kami adalah sebuah toko online Fashion Streetwear yang
                        menawarkan berbagai macam pakaian, aksesoris, dan barang-barang fashion
                        lainnya dengan kualitas terbaik dan harga yang terjangkau. Kami selalu berusaha untuk
                        memperkenalkan merek-merek lokal dan produk-produk fashion terbaru yang sedang tren.
                        @endif
                    </p>
                    <div class="d-flex justify-content-lg-start justify-content-center">
                        <a class="btn btn-custom" target="_blank" href="https://api.whatsapp.com/send?phone=62{{ $whatsapp !== null ? $whatsapp->telepon : '' }}">Hubungi Kami</a>
                    </div>
                </div>

                <img
                class="img-fluid header-ornament-circle"
                src="{{ asset('front_assets/images/pages/home/header-ornament-circle.svg') }}"
                alt="header-ornament-circle">
            </div>

            <div class="col-lg-5">
                <div class="position-relative">
                    <img
                    width="107"
                    height="107"
                    class="header-ornament-top"
                    src="{{ asset('front_assets/images/pages/home/header-ornament-top.png') }}"
                    alt="Ornament header">

                    <img
                    width="153"
                    height="153"
                    class="header-ornament-bottom"
                    src="{{ asset('front_assets/images/pages/home/header-ornament-bottom.png') }}"
                    alt="Ornament header">

                    <img
                    alt="Header image"
                    class="img-fluid header-img"
                    width="225"
                    height="213"
                    @if ($header != null)
                    src="{{ $header->gambar($header->gambar) }}"
                    @else
                    src="{{ asset('front_assets/images/pages/home/header-img.jpg') }}"
                    @endif
                >
                </div>
            </div>
        </div>
    </div>
</header>

<section id="daftarProduk" class="position-relative">
    <div class="container-fluid px-4 px-md-5">
        <hr class="dapro-line">
        <h2 class="header-1 color-black text-center mb-32 font-weight-600">
            @if ($produkJudul != null)
                {{ $produkJudul->judul }}
            @else
                Produk Unggulan Dari Deghas.co
            @endif
        </h2>

        <div class="row dapro-gutter justify-content-center">
            @if (!$produk->isEmpty())
                @foreach ($produk as $item)
                    <div class="col-6 col-md-4 col-lg-3 mb-32">
                        <div class="card dapro-card lift">
                            <img
                                alt="{{ $item->judul }} image"
                                class="img-fluid card-img-top"
                                width="237"
                                height="279"
                                src="{{ $item->gambar() }}"
                            >

                            <div class="card-body">
                                <h3 class="header-3 font-weight-500 color-black mb-2 mb-lg-1">{{ $item->nama }}</h3>
                                <p class="body-1 font-weight-500 color-black mb-2 mb-lg-2">Rp {{ $item->harga() }}</p>

                                <p class="body-2 font-weight-400 color-grey mb-3">
                                    {{ $item->deskripsi }}
                                </p>

                                <a class="text-decoration-none dapro-link w-100 body-1 text-white" href="https://api.whatsapp.com/send?phone=62{{ $whatsapp !== null ? $whatsapp->telepon : '' }}" target="_blank">
                                    <i class="fab fa-whatsapp mr-1"></i>
                                    Whatsapp
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            <div class="col-6 col-md-4 col-lg-3 mb-32">
                <div class="card dapro-card lift">
                    <img
                        alt="Produk image"
                        class="img-fluid card-img-top"
                        width="237"
                        height="279"
                        src="{{ asset('front_assets/images/pages/home/gapro-img-1.jpg') }}"
                    >

                    <div class="card-body">
                        <h3 class="header-3 font-weight-500 color-black mb-2 mb-lg-1">Celana</h3>
                        <p class="body-1 font-weight-500 color-black mb-2 mb-lg-2">Rp 160.000</p>

                        <p class="body-2 font-weight-400 color-grey mb-3">
                            Morem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                        </p>

                        <a class="text-decoration-none dapro-link w-100 body-1 text-white" href="">
                            <i class="fab fa-whatsapp mr-1"></i>
                            Whatsapp
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-32">
                <div class="card dapro-card lift">
                    <img
                        alt="Produk image"
                        class="img-fluid card-img-top"
                        width="237"
                        height="279"
                        src="{{ asset('front_assets/images/pages/home/gapro-img-2.jpg') }}"
                    >

                    <div class="card-body">
                        <h3 class="header-3 font-weight-500 color-black mb-2 mb-lg-1">Jaket</h3>
                        <p class="body-1 font-weight-500 color-black mb-2 mb-lg-2">Rp 180.000</p>

                        <p class="body-2 font-weight-400 color-grey mb-3">
                            Morem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                        </p>

                        <a class="text-decoration-none dapro-link w-100 body-1 text-white" href="">
                            <i class="fab fa-whatsapp mr-1"></i>
                            Whatsapp
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-32">
                <div class="card dapro-card lift">
                    <img
                        alt="Produk image"
                        class="img-fluid card-img-top"
                        width="237"
                        height="279"
                        src="{{ asset('front_assets/images/pages/home/gapro-img-3.jpg') }}"
                    >

                    <div class="card-body">
                        <h3 class="header-3 font-weight-500 color-black mb-2 mb-lg-1">Hoodie</h3>
                        <p class="body-1 font-weight-500 color-black mb-2 mb-lg-2">Rp 80.000</p>

                        <p class="body-2 font-weight-400 color-grey mb-3">
                            Morem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                        </p>

                        <a class="text-decoration-none dapro-link w-100 body-1 text-white" href="">
                            <i class="fab fa-whatsapp mr-1"></i>
                            Whatsapp
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-32">
                <div class="card dapro-card lift">
                    <img
                        alt="Produk image"
                        class="img-fluid card-img-top"
                        width="237"
                        height="279"
                        src="{{ asset('front_assets/images/pages/home/gapro-img-4.jpg') }}"
                    >

                    <div class="card-body">
                        <h3 class="header-3 font-weight-500 color-black mb-2 mb-lg-1">Kaos</h3>
                        <p class="body-1 font-weight-500 color-black mb-2 mb-lg-2">Rp 380.000</p>

                        <p class="body-2 font-weight-400 color-grey mb-3">
                            Morem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                        </p>

                        <a class="text-decoration-none dapro-link w-100 body-1 text-white" href="">
                            <i class="fab fa-whatsapp mr-1"></i>
                            Whatsapp
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-32">
                <div class="card dapro-card lift">
                    <img
                        alt="Produk image"
                        class="img-fluid card-img-top"
                        width="237"
                        height="279"
                        src="{{ asset('front_assets/images/pages/home/gapro-img-5.jpg') }}"
                    >

                    <div class="card-body">
                        <h3 class="header-3 font-weight-500 color-black mb-2 mb-lg-1">Aksesoris</h3>
                        <p class="body-1 font-weight-500 color-black mb-2 mb-lg-2">Rp 165</p>

                        <p class="body-2 font-weight-400 color-grey mb-3">
                            Morem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                        </p>

                        <a class="text-decoration-none dapro-link w-100 body-1 text-white" href="">
                            <i class="fab fa-whatsapp mr-1"></i>
                            Whatsapp
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-32">
                <div class="card dapro-card lift">
                    <img
                        alt="Produk image"
                        class="img-fluid card-img-top"
                        width="237"
                        height="279"
                        src="{{ asset('front_assets/images/pages/home/gapro-img-6.jpg') }}"
                    >

                    <div class="card-body">
                        <h3 class="header-3 font-weight-500 color-black mb-2 mb-lg-1">Sepatu</h3>
                        <p class="body-1 font-weight-500 color-black mb-2 mb-lg-2">Rp 170.000</p>

                        <p class="body-2 font-weight-400 color-grey mb-3">
                            Morem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                        </p>

                        <a class="text-decoration-none dapro-link w-100 body-1 text-white" href="">
                            <i class="fab fa-whatsapp mr-1"></i>
                            Whatsapp
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-32">
                <div class="card dapro-card lift">
                    <img
                        alt="Produk image"
                        class="img-fluid card-img-top"
                        width="237"
                        height="279"
                        src="{{ asset('front_assets/images/pages/home/gapro-img-7.jpg') }}"
                    >

                    <div class="card-body">
                        <h3 class="header-3 font-weight-500 color-black mb-2 mb-lg-1">Tas</h3>
                        <p class="body-1 font-weight-500 color-black mb-2 mb-lg-2">Rp 500.000</p>

                        <p class="body-2 font-weight-400 color-grey mb-3">
                            Morem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                        </p>

                        <a class="text-decoration-none dapro-link w-100 body-1 text-white" href="">
                            <i class="fab fa-whatsapp mr-1"></i>
                            Whatsapp
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-32">
                <div class="card dapro-card lift">
                    <img
                        alt="Produk image"
                        class="img-fluid card-img-top"
                        width="237"
                        height="279"
                        src="{{ asset('front_assets/images/pages/home/gapro-img-8.jpg') }}"
                    >

                    <div class="card-body">
                        <h3 class="header-3 font-weight-500 color-black mb-2 mb-lg-1">Topi</h3>
                        <p class="body-1 font-weight-500 color-black mb-2 mb-lg-2">Rp 220.000</p>

                        <p class="body-2 font-weight-400 color-grey mb-3">
                            Morem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                        </p>

                        <a class="text-decoration-none dapro-link w-100 body-1 text-white" href="">
                            <i class="fab fa-whatsapp mr-1"></i>
                            Whatsapp
                        </a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <img
    width="108"
    height="86"
    class="img-fluid dapro-ornament left"
    src="{{ asset('front_assets/images/pages/home/dapro-ornaments-left.svg') }}"
    alt="dapro ornamen">

    <img
    width="108"
    height="86"
    class="img-fluid dapro-ornament right"
    src="{{ asset('front_assets/images/pages/home/dapro-ornaments-right.svg') }}"
    alt="dapro ornamen">
</section>

<section id="tentangKami">
    <div class="container-fluid px-4 px-md-5">
        <div class="row align-items-center position-relative">
            <div class="col-lg-7">
                <img
                class="img-fluid teka-img"
                width="618"
                height="480"
                @if ($tentangKami != null)
                src="{{ $tentangKami->gambar($tentangKami->gambar) }}"
                @else
                src="{{ asset('front_assets/images/pages/home/teka-img.jpg') }}"
                @endif
                alt="tentang kami image">
            </div>

            <div class="col-12 d-lg-none mt-4">
                <div class="teka-card card">
                    <div class="card-body">
                        <hr class="teka-card-line">

                        <h2 class="header-1 color-black font-weight-600 mb-3">
                            @if ($tentangKami != null)
                                {{ $tentangKami->judul }}
                            @else
                            Fashion Streetwear Terpercaya Di Bandung
                            @endif
                        </h2>
                        <p class="body-1 color-grey font-weight-400 mb-4">
                            @if ($tentangKami != null)
                                {{ $tentangKami->deskripsi }}
                            @else
                            Kami adalah sebuah toko online Fashion Streetwear yang menawarkan berbagai macam pakaian,
                            aksesoris, dan barang-barang fashion lainnya dengan kualitas terbaik dan harga yang terjangkau.
                            Kami selalu berusaha untuk memperkenalkan merek-merek lokal dan produk-produk
                            fashion terbaru yang sedang tren.
                            @endif
                        </p>

                        <a target="_blank" href="https://api.whatsapp.com/send?phone=62{{ $whatsapp !== null ? $whatsapp->telepon : '' }}" class="btn btn-custom">Hubungi Kami</a>
                    </div>
                </div>
            </div>

            {{-- Desktop --}}
            <div class="teka-card card d-none d-lg-block">
                <div class="card-body">
                    <hr class="teka-card-line">
                    <h2 class="header-1 color-black font-weight-600 mb-3">
                    @if ($tentangKami != null)
                        {{ $tentangKami->judul }}
                    @else
                        Fashion Streetwear Terpercaya Di Bandung
                    @endif
                    </h2>
                    <p class="body-1 color-grey font-weight-400 mb-4">
                        @if ($tentangKami != null)
                            {{ $tentangKami->deskripsi }}
                        @else
                        Kami adalah sebuah toko online Fashion Streetwear yang menawarkan berbagai macam pakaian,
                        aksesoris, dan barang-barang fashion lainnya dengan kualitas terbaik dan harga yang terjangkau.
                        Kami selalu berusaha untuk memperkenalkan merek-merek lokal dan produk-produk
                        fashion terbaru yang sedang tren.
                        @endif
                    </p>

                    <a target="_blank" href="https://api.whatsapp.com/send?phone=62{{ $whatsapp !== null ? $whatsapp->telepon : '' }}" class="btn btn-custom">Hubungi Kami</a>
                </div>
            </div>
            {{-- End Desktop --}}
        </div>
    </div>
</section>

<section id="keunggulanPerusahaan">
    <div class="container-fluid px-4 px-md-5">
        <hr class="keper-line">
        <h2 class="header-1 color-black text-center mb-32 font-weight-600">
            @if ($keunggulanPerusahaan != null)
                {{ $keunggulanPerusahaan->judul }}
            @else
                Keunggulan Kami Sebagai Penyedia Fashion Streetwear
            @endif
        </h2>

        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="keper-card card lift">
                    <div class="card-body">
                        <div class="keper-ic-container">
                            <img
                            width="39"
                            height="39"
                            @if ($keunggulanPerusahaan != null)
                            src="{{ $keunggulanPerusahaan->gambar($keunggulanPerusahaan->keunggulan_gambar_1) }}"
                            @else
                            src="{{ asset('front_assets/images/pages/home/keper-ic-1.png') }}"
                            @endif
                            alt="icon">
                        </div>

                        <h3 class="header-3 color-black font-weight-500 mb-3">
                            @if ($keunggulanPerusahaan)
                                {{ $keunggulanPerusahaan->keunggulan_judul_1 }}
                            @else
                                Desain yang unik dan kreatif
                            @endif
                        </h3>
                        <p class="body-1 color-grey font-weight-400 mb-0">
                            @if ($keunggulanPerusahaan)
                                {{ $keunggulanPerusahaan->keunggulan_deskripsi_1 }}
                            @else
                                Kami selalu memastikan untuk menyediakan produk baju Distro dengan
                                desain yang unik dan kreatif. Kami bekerja sama dengan desainer terbaik
                                untuk menciptakan produk baju Distro yang berkualitas tinggi dan
                                selalu up to date dengan tren fashion terbaru.
                            @endif
                        </p>
                    </div>

                    <div class="keper-ornament"></div>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="keper-card card lift">
                    <div class="card-body">
                        <div class="keper-ic-container">
                            <img
                            width="39"
                            height="39"
                            @if ($keunggulanPerusahaan != null)
                            src="{{ $keunggulanPerusahaan->gambar($keunggulanPerusahaan->keunggulan_gambar_2) }}"
                            @else
                            src="{{ asset('front_assets/images/pages/home/keper-ic-2.png') }}"
                            @endif
                            alt="icon">
                        </div>

                        <h3 class="header-3 color-black font-weight-500 mb-3">
                            @if ($keunggulanPerusahaan != null)
                                {{ $keunggulanPerusahaan->keunggulan_judul_2 }}
                            @else
                                Berbagai macam pilihan produk
                            @endif
                        </h3>
                        <p class="body-1 color-grey font-weight-400 mb-0">
                            @if ($keunggulanPerusahaan != null)
                                {{ $keunggulanPerusahaan->keunggulan_deskripsi_2 }}
                            @else
                            Kami menyediakan berbagai macam produk baju Distro, mulai dari kaos
                            Distro, hoodie Distro, jaket Distro, celana pendek Distro,
                            topi Distro, sweater Distro, kemeja Distro dan tas Distro.
                            Setiap pelanggan dapat memilih produk yang sesuai dengan gaya dan kebutuhan mereka.
                            @endif
                        </p>
                    </div>

                    <div class="keper-ornament"></div>
                </div>
            </div>

            <div class="col-md-6 mb-5 mb-md-0">
                <div class="keper-card card lift">
                    <div class="card-body">
                        <div class="keper-ic-container">
                            <img
                            width="39"
                            height="39"
                            @if ($keunggulanPerusahaan != null)
                            src="{{ $keunggulanPerusahaan->gambar($keunggulanPerusahaan->keunggulan_gambar_3) }}"
                            @else
                            src="{{ asset('front_assets/images/pages/home/keper-ic-3.png') }}"
                            @endif
                            alt="icon">
                        </div>

                        <h3 class="header-3 color-black font-weight-500 mb-3">
                            @if ($keunggulanPerusahaan)
                                {{ $keunggulanPerusahaan->keunggulan_judul_3 }}
                            @else
                                Kualitas bahan yang baik
                            @endif
                        </h3>
                        <p class="body-1 color-grey font-weight-400 mb-0">
                            @if ($keunggulanPerusahaan)
                                {{ $keunggulanPerusahaan->keunggulan_deskripsi_3 }}
                            @else
                            Kami selalu memastikan untuk menyediakan produk baju Distro
                            dengan desain yang unik dan kreatif. Kami bekerja sama dengan
                            desainer terbaik untuk menciptakan produk baju Distro yang
                            berkualitas tinggi dan selalu up to date dengan tren fashion terbaru.
                            @endif
                        </p>
                    </div>

                    <div class="keper-ornament"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="keper-card card lift">
                    <div class="card-body">
                        <div class="keper-ic-container">
                            <img
                            width="39"
                            height="39"
                            @if ($keunggulanPerusahaan != null)
                            src="{{ $keunggulanPerusahaan->gambar($keunggulanPerusahaan->keunggulan_gambar_4) }}"
                            @else
                            src="{{ asset('front_assets/images/pages/home/keper-ic-4.png') }}"
                            @endif
                            alt="icon">
                        </div>

                        <h3 class="header-3 color-black font-weight-500 mb-3">
                            @if ($keunggulanPerusahaan)
                            {{ $keunggulanPerusahaan->keunggulan_judul_4 }}
                            @else
                                Layanan pengiriman cepat
                            @endif
                        </h3>
                        <p class="body-1 color-grey font-weight-400 mb-0">
                            @if ($keunggulanPerusahaan)
                                {{ $keunggulanPerusahaan->keunggulan_deskripsi_4 }}
                            @else
                                Kami selalu memberikan layanan pengiriman cepat dan aman untuk setiap
                                pelanggan. Kami memastikan bahwa setiap produk yang dipesan akan segera
                                dikirim dengan cepat dan aman sampai ke tangan pelanggan.
                            @endif
                        </p>
                    </div>

                    <div class="keper-ornament"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section
id="promosi"
style="background: var(--layer-color),
url({{ $promosi !== null ? $promosi->gambar($promosi->background) :  asset('front_assets/images/pages/home/promosi-bg.jpg') }}) no-repeat center center;
background-size: cover"
>
    <div class="container-fluid px-4 px-md-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="promosi-title color-white text-center mb-4 font-weight-600">
                    @if ($promosi != null)
                        {{ $promosi->judul }}
                    @else
                        Daftarlah untuk Bergabung dengan Program Loyalitas Kami dan Nikmati Diskon Khusus Setiap Pembelian!
                    @endif
                </h2>

                <div class="d-flex justify-content-center">
                    <a class="btn btn-custom promosi-btn" target="_blank" href="https://api.whatsapp.com/send?phone=62{{ $whatsapp !== null ? $whatsapp->telepon : '' }}">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="whatsapp">
    <div class="container-fluid px-4 px-md-5">
        <hr class="wa-line">
        <h2 class="header-1 color-black text-center mb-32 font-weight-600">
            @if ($testimoniJudul != null)
                {{ $testimoniJudul->judul }}
            @else
                Ulasan Positif Dari Mitra Kami
            @endif
        </h2>

        <div class="wa-carousel-container">
            <div class="wa-button-container">
                <button aria-label="Previous Whatsapp button" class="btn wa-btn prev">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button aria-label="Next Whatsapp button" class="btn wa-btn next">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>

            <div class="wa-carousel">
                @if (!$testimoni->isEmpty())
                    @foreach ($testimoni as $item)
                        <div>
                            <img
                            alt="whatsapp"
                            class="img-fluid wa-img"
                            width="248"
                            height="434"
                            src="{{ $item->gambar() }}">
                        </div>
                    @endforeach
                @else
                    <div>
                        <img
                        alt="whatsapp"
                        class="img-fluid wa-img"
                        width="248"
                        height="434"
                        src="{{ asset('front_assets/images/pages/home/wa-img.jpg') }}">
                    </div>

                    <div>
                        <img
                        alt="whatsapp"
                        class="img-fluid wa-img"
                        width="248"
                        height="434"
                        src="{{ asset('front_assets/images/pages/home/wa-img.jpg') }}">
                    </div>

                    <div>
                        <img
                        alt="whatsapp"
                        class="img-fluid wa-img"
                        width="248"
                        height="434"
                        src="{{ asset('front_assets/images/pages/home/wa-img.jpg') }}">
                    </div>

                    <div>
                        <img
                        alt="whatsapp"
                        class="img-fluid wa-img"
                        width="248"
                        height="434"
                        src="{{ asset('front_assets/images/pages/home/wa-img.jpg') }}">
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('front_assets/css/pages/home/index.css') }}">
@endpush

@push('js')
<script src="{{ asset('front_assets/js/pages/home/index.js') }}"></script>
@endpush
