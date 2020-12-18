<?php

namespace App\Http\Controllers;

use App\Models\Fileupload;
use Illuminate\Http\Request;
use App\Http\Requests\FileuploadStoreRequest;

class FileuploadController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fileuploads = Fileupload::all();

        return view('file_upload.index', compact('fileuploads'));
    }

    /**
     * @param \App\Http\Requests\FileuploadStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileuploadStoreRequest $request)
    {
        $fileupload = Fileupload::create($request->validated());

        $request->session()->flash('fileupload', $fileupload);

        return redirect()->route('fileupload.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Fileupload $fileupload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Fileupload $fileupload)
    {
        $fileupload->delete();

        return redirect()->route('fileupload.index');
    }

    public function downloadFile($filename)
    {
        $file = storage_path()."/app/historyfile/".$filename;
        return response()->download($file, $filename);
    }
}
