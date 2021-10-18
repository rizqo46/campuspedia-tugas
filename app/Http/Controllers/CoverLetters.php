<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoverLettersModel;
use Illuminate\Support\Str;
use PDF;

class CoverLetters extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function __invoke(Request $request)
    // {
        
    // }

    public function form() {
        
        return view('form', ['title'=>'Buat surat lamaran anda', 'name' => '', 'to'=>'/form',
        'email' => '', 
        'position' => '', 
        'company'=> '', 
        'experience'=>'']);
    }
    public function formPost(Request $request) {
        $uuid = Str::uuid()->toString();
        CoverLettersModel::create([
            'uuid' => $uuid,
            'name' => $request->name,
    		'email' => $request->email,
            'position_to_apply' => $request->position,
            'company_to_apply' => $request->company,
            'experience' => $request->experience,
        ]);
        return redirect('/preview/'. $uuid);
    }
    public function preview($uuid) {
        $post = CoverLettersModel::where('uuid', '=', $uuid)->first();
        return  view('preview', [
            'uuid'=>$uuid,
            'name' => $post ->name, 
            'email' => $post ->email, 
            'position' => $post ->position_to_apply, 
            'company'=> $post ->company_to_apply, 
            'experience'=>$post ->experience
        ]);
    }
    public function edit($uuid) {
        $post = CoverLettersModel::where('uuid', '=', $uuid)->first();
        return view('form', ['title'=>'Edit surat lamaran anda', 'to'=>'/edit/'.$post->uuid,
        'name' => $post ->name, 
        'email' => $post ->email, 
        'position' => $post ->position_to_apply, 
        'company'=> $post ->company_to_apply, 
        'experience'=>$post ->experience]);;
    }
    public function editPost($uuid, Request $request) {
        $post = CoverLettersModel::where('uuid', '=', $uuid)->first();
        // $pegawai->nama = $request->nama;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->position_to_apply = $request->position;
        $post->company_to_apply = $request->company;
        $post->experience = $request->experience;
        $post->save();
        return  redirect('/preview/'. $uuid);
    }
    public function delete($uuid) {
        // $pegawai = Pegawai::find($id);
        // $pegawai->delete();
        // return redirect('/pegawai');
        $post = CoverLettersModel::where('uuid', '=', $uuid)->first();
        $post->delete();
        return  view('home', ['message'=>'Surat lamaran anda berhasil dihapus']);
    }
    public function update(Request $request)
    {
        return redirect('/edit/'. $request->uuid);
    }
    public function printPdf($uuid)
    {
        $post = CoverLettersModel::where('uuid', '=', $uuid)->first();

        $pdf = PDF::loadview('pdf', [
            'uuid'=>$uuid,
            'name' => $post ->name, 
            'email' => $post ->email, 
            'position' => $post ->position_to_apply, 
            'company'=> $post ->company_to_apply, 
            'experience'=>$post ->experience
        ]);
        //$pdf = PDF::loadview('pdf', ['title'=>'Judul saya ini']);
    	return $pdf->stream();
    }
}
