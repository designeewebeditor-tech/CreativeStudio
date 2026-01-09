<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class MainController extends Controller
{
    private $company_title = "Creative Studio";

    private $company_eamil = "someone@example.com";

    private $company_phone = "+0000000";

    private $lang = ['en', 'ru', 'az'];

    private $length = 7;

    public function designs(): View
    {
        !session()->has('lang') ? session()->put('lang', $this->lang[0]) : null;
        App::setLocale(session('lang'));
        return view('index', ["show" => false, "error" => false, "length" => $this->length, "title" => $this->company_title, "phone"=>$this->company_phone, "email" => $this->company_eamil,]);
    }

    public function design(int $id) : View
    {
        $imageCount = count(File::glob(public_path("images/designs/design_{$id}_*.png")));

        !session()->has('lang') ? session()->put('lang', $this->lang[0]) : null;
        App::setLocale(session('lang'));
        return view('index', ["show" => true, "error" => false, "length" => $this->length, "title" => $this->company_title, "phone"=>$this->company_phone, "email" => $this->company_eamil, "id" => $id, "image" =>$imageCount]);
    }

    public function designsLang(Request $request): View
    {
        session()->put('lang', $request->lang);
        App::setLocale(session('lang'));
        return view('index', ["show" => false, "error" => false, "length" => $this->length, "title" => $this->company_title, "phone"=>$this->company_phone, "email" => $this->company_eamil,]);
    }

    public function designLang(int $id, Request $request) : View
    {
        $imageCount = count(File::glob(public_path("images/designs/design_{$id}_*.png")));

        session()->put('lang', $request->lang);
        App::setLocale(session('lang'));
        return view('index', ["show" => true, "error" => false, "length" => $this->length, "title" => $this->company_title, "phone"=>$this->company_phone, "email" => $this->company_eamil, "id" => $id, "image" =>$imageCount]);
    }

    public function errorPage(): View
    {
        !session()->has('lang') ? session()->put('lang', $this->lang[0]) : null;
        App::setLocale(session('lang'));
        return view('index', ["show" => false, "error" => true, "length" => $this->length, "title" => $this->company_title, "phone"=>$this->company_phone, "email" => $this->company_eamil,]);
    }
}
