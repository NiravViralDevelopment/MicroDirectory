<?php

namespace App\Http\Controllers;

use App\Models\ManageOrder;
use App\Models\UserImage;
use App\Models\VideoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function wishlistStore(){
        dd("well");
    }

    public function index()
    {

        $user = Auth::user();

        if ($user->is_active == 0) {
            Auth::logout();

            return redirect()->route('login')->withErrors([
                'email' => 'Your account is not active. Please contact the administrator.',

            ]);
        }

        if(Auth::id() == 2 ){
            return view('dashboard');
        }else{

            $imagescount = UserImage::where('user_id',Auth::id())->count();
            $videoscount = VideoGallery::where('user_id',Auth::id())->count();

            return view('userdashboard',compact('imagescount','videoscount'));
        }



    }
}
