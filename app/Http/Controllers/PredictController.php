<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Data;



class PredictController extends Controller
{
    public function index()
    {
        $hasil = '';
        $gambar = '';
        $anjay = '';
        return view('landing.pages.index', [
            'hasil' => $hasil,
            'gambar' => $gambar,
            'anjay' => $anjay,
        ]);
    }

    public function predict(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'image.required' => 'Image is required!',
            'image.image' => 'File must be an image!',
            'image.mimes' => 'File must be jpeg, png, or jpg!',
            'image.max' => 'File must be less than 2MB!',

        ]);

        $image = $request->file('image');
        $image_name = time() . '.' . $image->extension();
        $image->move(public_path('images/buah/'), $image_name);

        $data = new Data();
        $id = time() . rand(1, 100);
        $data->id = $id;
        $data->image = $image_name;
        $data->save();

        $response = Http::attach(
            'image',
            file_get_contents(public_path('images/buah/') . $image_name),
            $image_name
        )->post('http://localhost:5000/predict');

        $data = json_decode($response->body(), true);

        $hasil = $data['prediction'];

        // return view('landing.pages.index', [
        //     'hasil' => $hasil,
        //     'gambar' => $image_name,
        // ]);
        return response()->json(['hasil' => $hasil, 'gambar' => $image_name]);
    }


}
