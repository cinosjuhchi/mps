<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            if ($request->path() == 'dashboard' and Auth::user()->jawatan_app != 0) {
                $items = [
                    ['program_aktiviti' => 'Mesyuarat Jawatankuasa Induk Pengurusan Sekolah Bil.1/2023', 'komponen' => 'Pengurusan', 'tarikh' => '02/03/2024', 'tindakan' => 'John Doe', 'status' => 'Rancang', 'status_color_class' => 'info'],
                    ['program_aktiviti' => 'Mesyuarat Jawatankuasa Induk Pengurusan Sekolah Bil.1/2023', 'komponen' => 'Kurikulum', 'tarikh' => '22/04/2024', 'tindakan' => 'John Doe', 'status' => 'Siap', 'status_color_class' => 'success'],
                    ['program_aktiviti' => 'Mesyuarat Jawatankuasa Induk Pengurusan Sekolah Bil.1/2023', 'komponen' => 'Kurikulum', 'tarikh' => '22/04/2024', 'tindakan' => 'John Doe', 'status' => 'Gagal', 'status_color_class' => 'danger'],
                    ['program_aktiviti' => 'Mesyuarat Jawatankuasa Induk Pengurusan Sekolah Bil.1/2023', 'komponen' => 'Kurikulum', 'tarikh' => '22/04/2024', 'tindakan' => 'John Doe', 'status' => 'Tunda', 'status_color_class' => 'warning'],
                    ['program_aktiviti' => 'Mesyuarat Jawatankuasa Induk Pengurusan Sekolah Bil.1/2023', 'komponen' => 'Kurikulum', 'tarikh' => '22/04/2024', 'tindakan' => 'John Doe', 'status' => 'Hapus', 'status_color_class' => 'dark'],
                    ['program_aktiviti' => 'Mesyuarat Jawatankuasa Induk Pengurusan Sekolah Bil.1/2023', 'komponen' => 'Kurikulum', 'tarikh' => '22/04/2024', 'tindakan' => 'John Doe', 'status' => 'Siap', 'status_color_class' => 'success'],
                    ['program_aktiviti' => 'Mesyuarat Jawatankuasa Induk Pengurusan Sekolah Bil.1/2023', 'komponen' => 'Kurikulum', 'tarikh' => '22/04/2024', 'tindakan' => 'John Doe', 'status' => 'Gagal', 'status_color_class' => 'danger'],
                ];

                $perPage = 5;
                $page = request()->input('page', 1);
                $offset = ($page - 1) * $perPage;

                $currentItems = array_slice($items, $offset, $perPage);
                $totalItems = count($items);

                $pages = ceil($totalItems / $perPage);
                return view('dashboard', compact('currentItems', 'page', 'pages'));
            }
            return view($request->path());
        }
        return abort(404);
    }

    public function root()
    {
        $jawatan_app = Auth::user()->jawatan_app;

        if ($jawatan_app == 0 or $jawatan_app == 1) {
            return view('dashboard');
        } else {
            return view('welcome');
        }
    }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
            $user->avatar = '/images/' . $avatarName;
        }

        $user->update();
        if ($user) {
            Session::flash('message', 'User Details Updated successfully!');
            Session::flash('alert-class', 'alert-success');
            return response()->json([
                'isSuccess' => true,
                'Message' => "User Details Updated successfully!"
            ], 200); // Status code here
        } else {
            Session::flash('message', 'Something went wrong!');
            Session::flash('alert-class', 'alert-danger');
            return response()->json([
                'isSuccess' => true,
                'Message' => "Something went wrong!"
            ], 200); // Status code here
        }
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return response()->json([
                'isSuccess' => false,
                'Message' => "Your Current password does not matches with the password you provided. Please try again."
            ], 200); // Status code
        } else {
            $user = User::find($id);
            $user->password = Hash::make($request->get('password'));
            $user->update();
            if ($user) {
                Session::flash('message', 'Password updated successfully!');
                Session::flash('alert-class', 'alert-success');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Password updated successfully!"
                ], 200); // Status code here
            } else {
                Session::flash('message', 'Something went wrong!');
                Session::flash('alert-class', 'alert-danger');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Something went wrong!"
                ], 200); // Status code here
            }
        }
    }
}
