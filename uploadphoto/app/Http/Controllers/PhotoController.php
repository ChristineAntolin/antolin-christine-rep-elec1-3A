<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::latest()->get();
        return view('upload', compact('photos'));
    }

    public function storeSingle(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $image = $request->file('image');
        $name = time() . '_' . uniqid() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $name);

        Photo::create([
            'image' => $name
        ]);

        return back()->with('success', 'Single image uploaded successfully!');
    }

    public function storeMultiple(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        foreach ($request->file('images') as $image) {
            $name = time() . '_' . uniqid() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $name);

            Photo::create([
                'image' => $name
            ]);
        }

        return back()->with('success', 'Multiple images uploaded successfully!');
    }

    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);
        $filePath = public_path('images/' . $photo->image);
        if (File::exists($filePath)) 
         {
            File::delete($filePath);
         }
        $photo->delete();
        return back()->with('success', 'Image deleted successfully!');
    }
}