<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function changeRole(Request $request)
    {
        $role = $request->jawatan_app;

        $user = User::where('jawatan_app', Auth::user()->jawatan_app)->first();
        if ($user) {
            $user = Auth::user();
            $user->jawatan_app = $role;
            $user->save();

            if($user->jawatan_app == 0){
                $ubahKe = "Super Admin";
            } elseif ($user->jawatan_app == 2) {
                $ubahKe = "Admin Sekolah Rendah";
            } elseif ($user->jawatan_app == 3){
                $ubahKe = "Admin Sekolah Menengah";
            }

            session()->flash('change-role-success', 'Akaun berhasil diubah ke ' . $ubahKe);
            return view('dashboard');


        } else {
            return Redirect::back()->with('error', 'Pengguna tidak ditemukan.');
        }
    }

    public function resetRole(Request $request){
        $user = Auth::user();
        $user->jawatan_app = 0; // Set jawatan_app menjadi 0 (Super Admin)
        $user->save();

        return redirect()->route('logout');
    }

}
