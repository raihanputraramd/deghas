<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Deghas.co menyediakan koleksi fashion streetwear dan distro premium untuk pria dewasa usia 18-40 tahun. Temukan clothing market terbaik dengan gaya urban yang authentic." />
        <meta name="keywords" content="Fashion Streetwear, Distro Lokal, Clothing Market, Baju Pria Dewasa, Deghas.co, Streetwear Indonesia, Fashion Pria 18-40 Tahun" />
        <meta name="author" content="Deghas.co" />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Deghas.co | Fashion Streetwear & Distro Pria Dewasa" />
        <meta property="og:description" content="Pusat streetwear dan clothing market berkualitas untuk pria urban usia 18 sampai 40 tahun. Cek koleksi terbaru kami!" />

        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:title" content="Deghas.co | Fashion Streetwear & Distro Pria Dewasa" />
        <meta property="twitter:description" content="Koleksi distro dan streetwear eksklusif untuk pria dewasa. Upgrade gayamu bersama Deghas.co." />

        <link rel="canonical" href="https://deghas.co/" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Deghas.co | Fashion Streetwear & Distro Pria Dewasa</title>

        @include('layouts.common.components.style')

    </head>
    <body>
        <div id="layoutDefault">
            <div id="layoutDefault_content">
                <main>
                    <a class="text-decoration-none" href="https://api.whatsapp.com/send?phone=62{{ $whatsapp !== null ? $whatsapp->telepon : '' }}" target="_blank">
                        <img src="{{ asset('front_assets/images/common/fab-wa-ic.png') }}" class="img-fluid fab-wa" alt="icon">
                    </a>
                    @include('layouts.common.components.navbar')

                    @yield('content')
                </main>
            </div>
            <div id="layoutDefault_footer">
                @include('layouts.common.components.footer')
            </div>
        </div>
        @include('layouts.common.components.script')
    </body>
</html>
