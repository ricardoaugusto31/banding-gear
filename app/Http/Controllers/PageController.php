<?php

namespace App\Http\Controllers;

use App\Peripherals;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function peripherals(){
        $data = Peripherals::orderBy('id', 'desc')->get();
        return view('peripherals', ['prs' => $data]);
    }

    public function peripheralsaddnew(){
        return view('peripheralsaddnew');
    }

    public function peripheralssave(Request $request){
        if ($request->hasFile('image_path')) 
        {
            $file_name = time().'-'.$request->file('image_path')->getClientOriginalName();
            $path = $request->file('image_path')->storeAs('image_path', $file_name, 'public');
        } else {
            $file_name = null;
            $path = null;
        }
        Peripherals::create([
            'bg_id' => $request->bg_id,
            'name' => $request->name,
            'brand' => $request->brand,
            'category' => $request->category,
            'price' => $request->price,
            'description' => $request->description,
            'image_path' => $file_name,
        ]);
        return redirect('/peripherals');
    }
}
