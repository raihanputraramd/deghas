<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CMS\Footer;
use App\Models\CMS\Header;
use App\Models\CMS\KeunggulanPerusahaan;
use App\Models\CMS\ProdukList;
use App\Models\CMS\ProdukListJudul;
use App\Models\CMS\Promosi;
use App\Models\CMS\TentangKami;
use App\Models\CMS\Testimoni;
use App\Models\CMS\TestimoniJudul;
use App\Models\CMS\Whatsapp;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $header = Header::first();
        $whatsapp = Whatsapp::first();
        $produkJudul = ProdukListJudul::first();
        $produk = ProdukList::all();
        $tentangKami = TentangKami::first();
        $keunggulanPerusahaan = KeunggulanPerusahaan::first();
        $promosi = Promosi::first();
        $testimoniJudul = TestimoniJudul::first();
        $testimoni = Testimoni::all();
        $footer = Footer::first();

        return view('front.home.index', compact(
            'header',
            'whatsapp',
            'produkJudul',
            'produk',
            'tentangKami',
            'keunggulanPerusahaan',
            'promosi',
            'testimoniJudul',
            'testimoni',
            'footer'
        ));
    }
}
