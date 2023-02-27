<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function update(Request $request)
    {
        $request->validate([
            'image'=> ['image', 'mimes:jpeg,png,jpg,gif']
        ]);

        $image = Image::find($request->id);

        $image->image = $request['image'];
        $image->save();
    }
}
