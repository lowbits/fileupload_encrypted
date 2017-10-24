<?php

namespace App\Http\Controllers;

use App\Files;
use App\Upload;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;

class FilesController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $uploads = Upload::with('files')->get();



        return view('welcome', [
            'uploads' => $uploads
        ]);
    }

    public function create(){
        return view('upload.create');
    }

    public function addUpload(Request $request){

        $now = Carbon::now(new DateTimeZone('Europe/Berlin'));
        $add_hours = $now->addHours(2);

        $upload = new Upload();

        $upload->role_id = 1;
        $upload->pre_date = $now;
        $upload->post_date = $add_hours;

        $upload->save();

        return 'done';
    }

    public function addFile(Request $request){
        $now = Carbon::now(new DateTimeZone('Europe/Berlin'));
        $add_hours = $now->addHours(2);

        $upload = new Upload();

        $upload->role_id = 1;
        $upload->pre_date = $now;
        $upload->post_date = $add_hours;

        $upload->save();


        $this->validate($request, [
           'file' => 'required|mimes:pdf'
        ]);

        $file = $request->file('file');

        $name = time() . $file->getClientOriginalName();

        $file->move('files/', $name);

        $newFile = new Files();

        $newFile->path = 'files/'.$name;

        $newFile->upload_id = $upload->id;

        $newFile->save();



        return 'Done';

    }
}
