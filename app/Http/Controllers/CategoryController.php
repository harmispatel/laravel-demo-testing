<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function addCategory(Request $req)
    {

        $this->validate($req,[
            'category'=>'required',
            'day'=>'required',
            'description'=>'required',
            'image'=>'required',
            'images'=>'required',
            'name'=>'required',
         ]);

        $day = $req->day;
        $result = implode(',', $day);
        $data = new Category();
        $data->category = $req->category;
        $data->day = $result;
        $data->description = $req->description;
        if ($req->hasfile('image')) {
            $Image = $req->file('image');
            $filename = $Image->getClientOriginalName();
            $Image->move(public_path('uploade/images/'), $filename);
            $data->Image = $filename;
        }
        if ($req->hasfile('images')) {
            $Image = $req->file('images');
            $filenames = $Image->getClientOriginalName();
            $Image->move(public_path('uploade/bannner/'), $filenames);
            $data->images = $filenames;
        }
        $data->name = $req->name;
        $data->save();
        return redirect('category')->with('insert record successfully');
    }
}
