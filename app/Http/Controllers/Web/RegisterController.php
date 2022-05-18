<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function index(): View
    {
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

        $imageProfile = $request->file('image');
        $pathToImage = Storage::disk('public')->put(
            'profile',
            $imageProfile
        );

        $newFields = [
            ...$fields,
            'image' => $pathToImage
        ];

        Worker::create($newFields);

        return Redirect::route('register.success');
    }
}
