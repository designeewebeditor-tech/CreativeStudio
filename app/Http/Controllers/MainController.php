<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    private $company_title = "Creative Studio";

    private $company_eamil = "someone@example.com";

    private $lang = ['en', 'ru', 'az'];

    private $length = 4;

    // private $length = [
    //     [
    //         "title" => "Magna sed adipiscing",
    //         "header" => "Magna sed adipiscing",
    //         "context" => "Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.",
    //     ],
    //     [
    //         "title" => "Ultricies sed magna euismod",
    //         "header" => "Ultricies sed magna euismod enim vitae gravida",
    //         "context" => "Lorem ipsum dolor amet nullam consequat etiam feugiat",
    //     ],
    //     [
    //         "title" => "Euismod et accumsan",
    //         "header" => "Euismod et accumsan",
    //         "context" => "Lorem ipsum dolor amet nullam consequat etiam feugiat",
    //     ],
    //     [
    //         "title" => "Elements",
    //         "header" => "Elements",
    //         "context" => "Lorem ipsum dolor amet nullam consequat etiam feugiat",
    //     ],
    // ];

    public function designs(): View
    {
        !session()->has('lang') ? session()->put('lang', $this->lang[0]) : null;
        App::setLocale(session('lang'));
        return view('index', ["show" => false, "error" => false, "length" => $this->length, "title" => $this->company_title, "email" => $this->company_eamil,]);
    }

    public function design(int $id) : View
    {
        !session()->has('lang') ? session()->put('lang', $this->lang[0]) : null;
        App::setLocale(session('lang'));
        return view('index', ["show" => true, "error" => false, "length" => $this->length, "title" => $this->company_title, "email" => $this->company_eamil, "id" => $id]);
    }

    public function designsLang(Request $request): View
    {
        session()->put('lang', $request->lang);
        App::setLocale(session('lang'));
        return view('index', ["show" => false, "error" => false, "length" => $this->length, "title" => $this->company_title, "email" => $this->company_eamil,]);
    }

    public function designLang(int $id, Request $request) : View
    {
        session()->put('lang', $request->lang);
        App::setLocale(session('lang'));
        return view('index', ["show" => true, "error" => false, "length" => $this->length, "title" => $this->company_title, "email" => $this->company_eamil, "id" => $id]);
    }

    public function errorPage(): View
    {
        !session()->has('lang') ? session()->put('lang', $this->lang[0]) : null;
        App::setLocale(session('lang'));
        return view('index', ["show" => false, "error" => true, "length" => $this->length, "title" => $this->company_title, "email" => $this->company_eamil,]);
    }
}
