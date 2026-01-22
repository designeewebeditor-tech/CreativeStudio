<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MainController extends Controller
{
    /**
     * Company Title
     */
    private $companyTitle = "Creative Studio";
    /**
     * Company Tax Number
     */
    private $companyTaxNumber = "1308418672";
    /**
     * Company Email
     */
    private $companyEamil = "Crk1studio@gmail.com";
    /**
     * Company Phone Number
     */
    private $companyPhone = "+994503661615";
    /**
     * Context Languages
     */
    private $lang = ['en', 'ru', 'az'];
    /**
     * The Social Networks URL
     */
    private $xUrl = "https://x.com";
    private $facebookUrl = "https://www.facebook.com";
    private $instagramUrl = "https://www.instagram.com/crk.studio1?igsh=bHVjZHVkZngwc2F6";
    /**
     * Designs Lenght
     */
    private $length = 16;

    public function designs(): View
    {
        !session()->has('lang') ? session()->put('lang', $this->lang[0]) : null;
        App::setLocale(session('lang'));
        return view('index', ["show" => false, "error" => false, "length" => $this->length, "title" => $this->companyTitle, "tax_number" => $this->companyTaxNumber, "x" => $this->xUrl, "facebook" => $this->facebookUrl, "instagram" => $this->instagramUrl, "phone" => $this->companyPhone, "email" => $this->companyEamil,]);
    }

    public function design(int $id) : View
    {
        $imageCount = count(File::glob(public_path("images/designs/design_{$id}_*.png")));
        $data = json_decode(File::get(resource_path('json/actives.json')), true);

        !session()->has('lang') ? session()->put('lang', $this->lang[0]) : null;
        !session()->has('username') ? session()->put('username', 'user_'.Str::uuid()) : null;
        !session()->has('user.likes') ? session()->put('user.likes', []) : null;
        !session()->has('user.comments') ? session()->put('user.comments', []) : null;

        App::setLocale(session('lang'));
        return view('index', ["show" => true, "error" => false, "length" => $this->length, "title" => $this->companyTitle, "tax_number" => $this->companyTaxNumber, "x" => $this->xUrl, "facebook" => $this->facebookUrl, "instagram" => $this->instagramUrl, "phone"=>$this->companyPhone, "email" => $this->companyEamil, "id" => $id, "image" =>$imageCount, "data" => $data["designs"][$id],]);
    }


    public function designsLang(Request $request): View
    {
        session()->put('lang', $request->lang);
        App::setLocale(session('lang'));
        return view('index', ["show" => false, "error" => false, "length" => $this->length, "title" => $this->companyTitle, "tax_number" => $this->companyTaxNumber, "x" => $this->xUrl, "facebook" => $this->facebookUrl, "instagram" => $this->instagramUrl, "phone"=>$this->companyPhone, "email" => $this->companyEamil,]);
    }

    public function designLang(int $id, Request $request) : View
    {
        $imageCount = count(File::glob(public_path("images/designs/design_{$id}_*.png")));
        $data = json_decode(File::get(resource_path('json/actives.json')), true);

        !session()->has('lang') ? session()->put('lang', $this->lang[0]) : null;
        !session()->has('username') ? session()->put('username', 'user_'.Str::uuid()) : null;
        !session()->has('user.likes') ? session()->put('user.likes', []) : null;
        !session()->has('user.comments') ? session()->put('user.comments', []) : null;

        session()->put('lang', $request->lang);
        App::setLocale(session('lang'));
        return view('index', ["show" => true, "error" => false, "length" => $this->length, "title" => $this->companyTitle, "tax_number" => $this->companyTaxNumber, "x" => $this->xUrl, "facebook" => $this->facebookUrl, "instagram" => $this->instagramUrl, "phone"=>$this->companyPhone, "email" => $this->companyEamil, "id" => $id, "image" =>$imageCount, "data" => $data["designs"][$id],]);
    }

    public function errorPage(): View
    {
        !session()->has('lang') ? session()->put('lang', $this->lang[0]) : null;
        App::setLocale(session('lang'));
        return view('index', ["show" => false, "error" => true, "length" => $this->length, "title" => $this->companyTitle, "tax_number" => $this->companyTaxNumber, "x" => $this->xUrl, "facebook" => $this->facebookUrl, "instagram" => $this->instagramUrl, "phone"=>$this->companyPhone, "email" => $this->companyEamil,]);
    }
}
