<?php

namespace App\Http\Controllers\Admin;

use App\Models\BackImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Intervention\Image\Facades\Image;
use function PHPUnit\Framework\returnSelf;

class BackImageController extends Controller
{
    public function edit()
    {
        $backimage = BackImage::first();
        return view('pages.admin.backimage.content', compact('backimage'));
    }

    // Company profile Update 
    public function update(Request $request, BackImage $backimage)
    {
        $request->validate([
            'bgimage' => 'mimes:jpg,jpeg,png,bmp,webp',
        ]);
        try {
            $imagehas = $request->hasFile('bgimage');
            if($imagehas) {
                $image = $request->file('bgimage');
                $imageName = date('YmdHi').$image->getClientOriginalName();
                Image::make($image)->resize(1349,250)->save('uploads/background/' . $imageName);

                if(file_exists($backimage->bgimage)){
                    unlink($backimage->bgimage);
                }
                $backimage->bgimage = 'uploads/background/'.$imageName;
                $backimage->update();
            }
            return redirect()->back()->with('success', 'Update Successfull!');
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->back()->with('error', 'Update Failed!');
        }
    }
}
