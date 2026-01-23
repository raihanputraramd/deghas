<?php

namespace App\Http\Controllers\Back;

use App\Helpers\User as HelpersUser;
use App\Http\Controllers\Controller;
use App\Models\CMS\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FooterController extends Controller
{
    public function index()
    {
        $footer = Footer::first();

        return view('back.footer.index', compact('footer'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $footer = Footer::first();

            if ($footer != null) {
                $footer->telepon            = $request->telepon;
                $footer->email              = $request->email;
                $footer->alamat             = $request->alamat;
                $footer->jam_buka           = $request->jam_buka;
                $footer->sosmed_link_1      = $request->sosmed_link_1;
                $footer->sosmed_link_2      = $request->sosmed_link_2;
                $footer->sosmed_link_3      = $request->sosmed_link_3;
                $footer->sosmed_link_4      = $request->sosmed_link_4;

                if($request->hasFile('logo')) {
                    if($footer->logo != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/footer/'. $footer->logo);
                    }
                    $footer->logo = HelpersUser::uploadImage($request, 'logo', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('icon_telepon')) {
                    if($footer->icon_telepon != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/footer/'. $footer->icon_telepon);
                    }
                    $footer->icon_telepon = HelpersUser::uploadImage($request, 'icon_telepon', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('icon_email')) {
                    if($footer->icon_email != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/footer/'. $footer->icon_email);
                    }
                    $footer->icon_email = HelpersUser::uploadImage($request, 'icon_email', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('icon_alamat')) {
                    if($footer->icon_alamat != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/footer/'. $footer->icon_alamat);
                    }
                    $footer->icon_alamat = HelpersUser::uploadImage($request, 'icon_alamat', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('icon_jam_buka')) {
                    if($footer->icon_jam_buka != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/footer/'. $footer->icon_jam_buka);
                    }
                    $footer->icon_jam_buka = HelpersUser::uploadImage($request, 'icon_jam_buka', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('sosmed_icon_1')) {
                    if($footer->sosmed_icon_1 != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/footer/'. $footer->sosmed_icon_1);
                    }
                    $footer->sosmed_icon_1 = HelpersUser::uploadImage($request, 'sosmed_icon_1', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('sosmed_icon_2')) {
                    if($footer->sosmed_icon_2 != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/footer/'. $footer->sosmed_icon_2);
                    }
                    $footer->sosmed_icon_2 = HelpersUser::uploadImage($request, 'sosmed_icon_2', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('sosmed_icon_3')) {
                    if($footer->sosmed_icon_3 != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/footer/'. $footer->sosmed_icon_3);
                    }
                    $footer->sosmed_icon_3 = HelpersUser::uploadImage($request, 'sosmed_icon_3', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('sosmed_icon_4')) {
                    if($footer->sosmed_icon_4 != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/footer/'. $footer->sosmed_icon_4);
                    }
                    $footer->sosmed_icon_4 = HelpersUser::uploadImage($request, 'sosmed_icon_4', 'back_assets/dist/img/cms/footer/');
                }

                $footer->save();
            } else {
                $footer                     = new Footer();
                $footer->telepon            = $request->telepon;
                $footer->email              = $request->email;
                $footer->alamat             = $request->alamat;
                $footer->jam_buka           = $request->jam_buka;
                $footer->sosmed_link_1      = $request->sosmed_link_1;
                $footer->sosmed_link_2      = $request->sosmed_link_2;
                $footer->sosmed_link_3      = $request->sosmed_link_3;
                $footer->sosmed_link_4      = $request->sosmed_link_4;

                if($request->hasFile('logo')) {
                    $footer->logo = HelpersUser::uploadImage($request, 'logo', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('icon_telepon')) {
                    $footer->icon_telepon = HelpersUser::uploadImage($request, 'icon_telepon', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('icon_email')) {
                    $footer->icon_email = HelpersUser::uploadImage($request, 'icon_email', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('icon_alamat')) {
                    $footer->icon_alamat = HelpersUser::uploadImage($request, 'icon_alamat', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('icon_jam_buka')) {
                    $footer->icon_jam_buka = HelpersUser::uploadImage($request, 'icon_jam_buka', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('sosmed_icon_1')) {
                    $footer->sosmed_icon_1 = HelpersUser::uploadImage($request, 'sosmed_icon_1', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('sosmed_icon_2')) {
                    $footer->sosmed_icon_2 = HelpersUser::uploadImage($request, 'sosmed_icon_2', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('sosmed_icon_3')) {
                    $footer->sosmed_icon_3 = HelpersUser::uploadImage($request, 'sosmed_icon_3', 'back_assets/dist/img/cms/footer/');
                }

                if($request->hasFile('sosmed_icon_4')) {
                    $footer->sosmed_icon_4 = HelpersUser::uploadImage($request, 'sosmed_icon_4', 'back_assets/dist/img/cms/footer/');
                }
                $footer->save();
            }

            DB::commit();
            return redirect()->back()->with('success', 'Konten berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
