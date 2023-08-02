<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\Notesinfo;
use App\Models\logininfo;
use App\Models\Feedbackinfo;

use Session;

class HomeController extends Controller
{

    public function home(){

        $notesinfo =  notesinfo::all();
        $data = compact('notesinfo');
        return view ('instruinsights/home')->with($data);
    }

    public function upload(){

        if(Session::has('LoginID')){
            return view('/instruinsights/upload');
        }
        else{
            //If User is not login He/She unable to upload the Note
            //return view('signup');
            return view('/instruinsights/upload');
        }
    }

    public function upload_backend(Request $request){

        $request->validate(
            [
                'topic' => 'required',
                'filename' => 'required|mimes:pdf|max:2048',
            ]
            );

        //Getting Uploaded Image name
        $oldname = $request->file('filename')->getClientOriginalName();
        //creating new image name
        $newfilename = time().$oldname;

        //Moving or saving image in Public/Images folder
        $request->filename->move(public_path('notes'),$newfilename);

        $noteinfo = new Notesinfo;
        $noteinfo->branch = $request->branch;
        $noteinfo->subject =  $request->subject;
        $noteinfo->unitno =  $request->unitno;
        $noteinfo->topic =  $request->topic;
        $noteinfo->filename = $newfilename; //We need save filename in database
        $noteinfo->save();

        return back()->with('success', 'Success! file uploaded');
    }

    public function subjects(){
        if(Session::has('LoginID')){
            return view('/instruinsights/subjects');
        }
        else{
            return view('/instruinsights/subjects');
        }
    }

    public function get_subjects($id){
        $subjectinfo = Notesinfo::where('subject', $id)->get();;
        $data = compact('subjectinfo');
        return view ('instruinsights/download')->with($data);
    }

    public function download(){
        if(Session::has('LoginID')){
            return redirect('instruinsights/download');
        }
        else{
            return view('/instruinsights/download');
        }
    }

    public function pdf_download($file){
        return response()->download(public_path('notes/'.$file));
    }

    public function feedback(Request $request,$filename,$Sno){
        // $request->validate(
        //     [
        //         'topicname' => 'required',
        //     ]
        //     );   

        $feedbackinfo = new Feedbackinfo;
        $feedbackinfo->Sno = $Sno;
        $feedbackinfo->filename =  $filename;
        $feedbackinfo->feedback =  $request->feedback;
        $feedbackinfo->save();

        return back()->with('feedback_sucess', 'Success! feedback uploaded');
        // return redirect('instruinsights/home');
    }
}
