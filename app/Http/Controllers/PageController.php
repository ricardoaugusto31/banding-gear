<?php

namespace App\Http\Controllers;

use App\Peripherals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\HttpCache\Store;
use App\User;

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
        return redirect('/peripherals')->with('alert', 'New peripheral has been added!');
    }

    public function peripheralseditform($id)
    {
        $peripheral = Peripherals::find($id);
        return view('peripheralseditform', ['prs' => $peripheral]);
    }

    public function peripheralsupdate($id, Request $request)
    {
        $peripheral = Peripherals::find($id);
        $peripheral->bg_id = $request->bg_id;
        $peripheral->name = $request->name;
        $peripheral->brand = $request->brand;
        $peripheral->category = $request->category;
        $peripheral->price = $request->price;
        $peripheral->description = $request->description;
        if ($request -> image_path)
            {
                if($peripheral->image_path)
                    {
                        Storage::disk('public')->delete('image_path/'.$peripheral->image_path);
                    }
                $file_name = time().'-'.$request->file('image_path')->getClientOriginalName();
                $path = $request->file('image_path')->storeAs('image_path', $file_name, 'public');
                $peripheral->image_path = $file_name;
            }
            $peripheral->save();
            return redirect('/peripherals')->with('alert', 'Peripheral has been updated!');
    }

    public function peripheralsdelete($id)
    {
        $peripheral = Peripherals::find($id);
        if($peripheral->image_path)
            {
                Storage::disk('public')->delete('image_path/'.$peripheral->image_path);
            }
        $peripheral->delete();
        return redirect('/peripherals')->with('alert', 'Peripheral has been deleted!');
    }

    public function users() 
    {
        $data = User::orderBy('id', 'desc')->get();
        return view('users', ['users' => $data]);
    }

    public function usersaddnew()
    {
        return view('usersaddnew', ['key' => 'users']);
    }

    public function userssave(Request $request)
    {
        if ($request->hasFile('photo')) 
        {
            $file_name = time().'-'.$request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('photo', $file_name, 'public');
        } else {
            $file_name = null;
            $path = null;
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'photo' => $file_name,
        ]);
        return redirect('/users')->with('alert', 'New user has been added!');
    }

    public function usersdelete($id)
    {
        $users = User::find($id);
        if($users->image_path)
            {
                Storage::disk('public')->delete('photo/'.$users->photo);
            }
        $users->delete();
        return redirect('/users')->with('alert', 'User has been deleted!');
    }
}
