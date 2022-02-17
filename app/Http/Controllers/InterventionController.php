<?php

namespace App\Http\Controllers;

use File;
use Image;
use Illuminate\Http\Request;

class InterventionController extends Controller
{
    /**
     * Show the image upload view
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('intervention');
    }

    /**
     * store image
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg',
        ]);

        $request_image = $request->file('image');
        $image = Image::make($request_image);

        $image_path = public_path('/images/');

        if (!File::exists($image_path)) {
            File::makeDirectory($image_path);
        }

        $image_name = time().'.'.$request_image->getClientOriginalExtension();

        // keep ratio height and width
        $image->resize(null, 200, function($constraint) {
            $constraint->aspectRatio();
        });

        $image->save($image_path.$image_name);

        return back()->with('success', 'Image uploaded successfully.');
    }
}
