<?php
namespace App\Http\Controllers;

use App\Models\TemporaryMedia;
use App\Models\Verification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {

        $tmp_file = TemporaryMedia::where('folder', $request->image)->first();

        if($tmp_file){
            Storage::copy('tmp/ids/' . $tmp_file->folder . '/' . $tmp_file->filename, 'ids/' . auth()->guard('user')->user()->id . '/' . $tmp_file->filename);

            Verification::create([
                'user_id' => auth()->guard('user')->user()->id,
                'id_path' => 'ids/' . auth()->guard('user')->user()->id . '/' . $tmp_file->filename,
            ]);

            Storage::deleteDirectory('tmp/ids/' . $tmp_file->folder);
            $tmp_file->delete();

            return redirect()->back()->with('success', 'Your ID has been uploaded successfully. Please wait for the admin to verify your account.');
        }

        return redirect()->back()->with('error', 'Please upload an image.');
    }

    public function process(Request $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image');
            $file = $image->getClientOriginalName();
            $folder = uniqid('id', true);
            $image->storeAs('tmp/ids/'. $folder, $file);
            TemporaryMedia::create([
                'folder' => $folder,
                'filename' => $file,
            ]);
            return $folder;
        }
        return "";
    }
}
