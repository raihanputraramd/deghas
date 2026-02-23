<footer class="footer">
    <div class="container-fluid px-3 px-md-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <span class="header-1 color-secondary mb-32 font-weight-700 d-block">
                    Deghas.co
                </span>

                <a class="btn btn-custom" style="color: var(--white) !important" target="_blank" href="https://api.whatsapp.com/send?phone=62{{ $whatsapp !== null ? $whatsapp->telepon : '' }}">Hubungi Kami</a>
            </div>

            <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                <h2 class="header-3 color-white mb-4">Hubungi Kami</h2>

                <div class="media align-items-center mb-4">
                    @if ($footer != null)
                        <img
                        alt="Logo Ahlinya Tas"
                        class="img-fluid footer-icon"
                        width="20"
                        height="20"
                        src="{{ $footer->gambar($footer->icon_telepon) }}"
                        >
                    @else
                        <i class="fas fa-phone-alt footer-icon"></i>
                    @endif

                    <div class="media-body">
                        <address class="body-1 color-white mb-0">
                            @if ($footer != null)
                                {{ $footer->telepon }}
                            @else
                                0877-7737-1788
                            @endif
                        </address>
                    </div>
                </div>

                <div class="media align-items-center mb-4">
                    @if ($footer != null)
                        <img
                        alt="Logo Ahlinya Tas"
                        class="img-fluid footer-icon"
                        width="20"
                        height="20"
                        src="{{ $footer->gambar($footer->icon_email) }}"
                        >
                    @else
                        <i class="fas fa-envelope footer-icon"></i>
                    @endif
                    <div class="media-body">
                        <address class="body-1 color-white mb-0">
                            @if ($footer != null)
                                {{ $footer->email }}
                            @else
                                deghas@gmail.com
                            @endif
                        </address>
                    </div>
                </div>

                <div class="media align-items-start mb-4">
                    @if ($footer != null)
                        <img
                        alt="Logo Ahlinya Tas"
                        class="img-fluid footer-icon mt-1"
                        width="20"
                        height="20"
                        src="{{ $footer->gambar($footer->icon_alamat) }}"
                        >
                    @else
                        <i class="fas fa-map-marker-alt footer-icon mt-1"></i>
                    @endif

                    <div class="media-body">
                        <address class="body-1 color-white mb-0">
                            @if ($footer != null)
                                {{ $footer->alamat }}
                            @else
                            jln telegrapia III no 4 RT 4 RW 6 Cibereum Cimahi Selatan kota Cimahi 40535
                            @endif
                        </address>
                    </div>
                </div>

                <div class="media align-items-center">
                    @if ($footer != null)
                        <img
                        alt="Logo Ahlinya Tas"
                        class="img-fluid footer-icon"
                        width="20"
                        height="20"
                        src="{{ $footer->gambar($footer->icon_jam_buka) }}"
                        >
                    @else
                        <i class="fas fa-envelope footer-icon"></i>
                    @endif
                    <div class="media-body">
                        <address class="body-1 color-white mb-0">
                            @if ($footer != null)
                                {{ $footer->jam_buka }}
                            @else
                                Jam buka: 07:00 - 19:00
                            @endif
                        </address>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <h2 class="header-3 color-white mb-4">Sosial Media Kami</h2>

                <ul class="list-unstyled d-flex mb-0">
                    @if ($footer != null)
                    <li class="mr-3">
                        <a class="text-decoration-none" href="{{ $footer->sosmed_link_1 }}">
                            <div class="footer-social instagram">
                                <img src="{{ $footer->gambar($footer->sosmed_icon_1) }}" width="16" height="16" alt="">
                            </div>
                        </a>
                    </li>
                    @else
                    <li class="mr-3">
                        <a class="text-decoration-none" href="#">
                            <div class="footer-social instagram">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </a>
                    </li>
                    @endif

                    @if ($footer != null)
                    <li class="mr-3">
                        <a class="text-decoration-none" href="{{ $footer->sosmed_link_2 }}">
                            <div class="footer-social facebook">
                                <img src="{{ $footer->gambar($footer->sosmed_icon_2) }}" width="16" height="16" alt="">
                            </div>
                        </a>
                    </li>
                    @else
                    <li class="mr-3">
                        <a class="text-decoration-none" href="#">
                            <div class="footer-social facebook">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </a>
                    </li>
                    @endif


                    @if ($footer != null)
                    <li class="mr-3">
                        <a class="text-decoration-none" href="{{ $footer->sosmed_link_3 }}">
                            <div class="footer-social youtube">
                                <img src="{{ $footer->gambar($footer->sosmed_icon_3) }}" width="16" height="16" alt="">
                            </div>
                        </a>
                    </li>
                    @else
                    <li class="mr-3">
                        <a class="text-decoration-none" href="#">
                            <div class="footer-social youtube">
                                <i class="fab fa-youtube"></i>
                            </div>
                        </a>
                    </li>
                    @endif

                    @if ($footer != null)
                    <li class="mr-3">
                        <a class="text-decoration-none" href="{{ $footer->sosmed_link_4 }}">
                            <div class="footer-social linkedin">
                                <img src="{{ $footer->gambar($footer->sosmed_icon_4) }}" width="16" height="16" alt="">
                            </div>
                        </a>
                    </li>
                    @else
                    <li class="mr-3">
                        <a class="text-decoration-none" href="#">
                            <div class="footer-social linkedin">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <div class="container px-3 px-md-5">
        <div class="d-flex justify-content-center align-items-center">
            <small class="body-2 color-white mt-4 mt-md-0 order-2 order-md-1">Copyright © 2026 • All rights reserved • Ahlinya Web</small>
        </div>
    </div>
</footer>
