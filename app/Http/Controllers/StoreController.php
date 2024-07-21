<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use Illuminate\Support\Facades\File;


class StoreController extends Controller
{
    
    
    public function parseJsonFile()
    {
        $filePath = storage_path('app/public/barang.json');

        if (File::exists($filePath)) {
            $jsonContent = File::get($filePath);
            $data = json_decode($jsonContent, true);

            return view('jsonview', ['data' => $data]);
        } else {
            return view('jsonview', ['data' => null, 'error' => 'File tidak ditemukan.']);
        }
    }
    
    public function dashboard()
    {            
        $filePath = storage_path('app/public/barang.json');
        $jsonContent = File::get($filePath);
        $data = json_decode($jsonContent, true);
        return view('homepage',['data' => $data["lainLain"]]);
    }

    public function catalog()
    {    
        $filePath = storage_path('app/public/barang.json');
        $jsonContent = File::get($filePath);
        $data = json_decode($jsonContent, true);
        return view('catalog' , ['data' => $data]);
    }    
    
    public function contact()
    {    
        return view('contact');
    }

    public function cart()
    {    
        return view('cart');
    }
}
