<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function index(): View{

        return view('page.register');
    }

    public function success(): View{
        return view('page.success');
    }

    public function store(Request $request): RedirectResponse {

        $fields = $request->validate([
            'fullname' => 'required',
            'services' => 'required',
            'about' => 'required',
            'whatsapp' => 'required|numeric',
            'image' => 'required|image'
        ]);

        dd($fields);

        return Redirect::route('register.success');
    }
}
