<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ControllerView extends Controller
{
    public function index(){
        return view('content.index');
    }

    public function table_balita(){
        return view('content.tables-balita');
    }

    public function table_kader(){
        return view('content.tables-kader');
    }

    public function table_balita_rinci(){
        return view('content.tables-balita-rinci');
    }

    public function table_balita_pendataan(){
        return view('content.tables-balita-pendataan');
    }

    public function table_balita_imunisasi(){
        return view('content.tables-balita-imunisasi');
    }


    public function notFound(){
        return view('404');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function forgotPassword(){
        return view('forgot-password');
    }

    public function buttons(){
        return view('buttons');
    }

    public function blank(){
        return view('blank');
    }

    public function cards(){
        return view('cards');
    }

    public function charts(){
        return view('charts');
    }

    public function utilities_animations(){
        return view('utilities-animation');
    }

    public function utilities_others(){
        return view('utilities-other');
    }

    public function utilities_borders(){
        return view('utilities-border');
    }

    public function utilities_color(){
        return view('utilities-color');
    }

    public function input_data_kader(){
        return view('input-data.input-data-kader');
    }

    public function input_data_balita(){
        return view('input-data.input-data-balita');
    }

    public function input_data_imunisasi(){
        return view('input-data.input-data-imunisasi-balita');
    }

    public function input_data_pendataan_balita(){
        return view('input-data.input-data-pendataan-balita');
    }

    public function edit_data_balita(){
        return view('edit-data.edit-balita-awal');
    }

    public function edit_data_kader(){
        return view('edit-data.edit-kader');
    }
}
