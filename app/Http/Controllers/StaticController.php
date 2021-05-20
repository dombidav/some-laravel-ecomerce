<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\{Factory as ViewFactory, View};
use Illuminate\Http\RedirectResponse;

class StaticController extends Controller
{
    public function welcome(): ViewFactory|View|Application
    {
        return view('welcome');
    }

    public function home(): ViewFactory|View|Application|RedirectResponse
    {
        if(Auth::user()->is_admin) {
            return view('home');
        }

        return redirect(route('product.index'));
    }
}
