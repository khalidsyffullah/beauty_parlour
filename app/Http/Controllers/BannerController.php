<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebannerRequest;
use App\Http\Requests\UpdatebannerRequest;
use App\Models\banner;
use db;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;



class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = banner::all();
        return view('admin.pages.banner.banner',['banners'=>$banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.banner.bannercreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebannerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebannerRequest $request)
    {

        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $banner= new banner;
        $banner->name=$request->name;
        $banner->title=$request->title;
        $banner->short_description = $request->short_description;
        $banner->alt_text = $request->alt_text;


        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=$banner->name.'.'.$extension;
            $file->move(public_path('/images/banners'),$filename);
            $banner->image=$filename;
        }
        $banner -> save();
        return redirect()->back()->with('status', 'Banner Uploaded Successfully');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $banners=banner::find($id);
        return view('admin.pages.banner.banneredit' ,compact('banners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebannerRequest  $request
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $banner= banner::find($id);
        $banner->name=$request->name;
        $banner->title=$request->title;
        $banner->short_description = $request->short_description;
        $banner->alt_text = $request->alt_text;


        if($request->hasfile('image')){
            $destination = 'images/banners'.$banner->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=$banner->name.'.'.$extension;
            $file->move(public_path('/images/banners'),$filename);
            $banner->image=$filename;
        }
        $banner -> update();
        return redirect()->back()->with('status', 'Banner Uploaded Successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner= banner::find($id);
        $destination = 'images/banners'.$banner->image;

        if(File::exists($destination)){
            File::delete($destination);
        }
        $banner -> delete();
        return redirect()->back()->with('status', 'Banner Deleted Successfully');
    }
}
