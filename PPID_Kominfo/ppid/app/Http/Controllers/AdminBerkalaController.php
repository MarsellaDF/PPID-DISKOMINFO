<?php

namespace App\Http\Controllers;

use App\Models\AdminBerkala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminBerkalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['adminBerkala'] = AdminBerkala::orderByDesc('id')->get();
        return view("admin.adminberkala.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.adminberkala.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'url' => 'required'
        ]);

        // $reqImage = $request->image;
        // if ($request->hasFile('image')) {
        //     $name = time().rand(1,100).'.'.$reqImage->extension();
        //     $reqImage->move(public_path().'/upload/adminberkala/', $name);
        //     $imageurl = $name;
        // }

        $dtadminBerkala = [
            'title' => $request->title,
            'url' => $request->url,
            // 'image' => $imageurl,
            'status' => $request->status,
            'created_at' => now(),
        ];

        $save = DB::table('admin_berkalas')->insert($dtadminBerkala);

        if ($save) {
            return redirect('/adminberkala-admin')
                ->with([
                    'success' => 'Data Berhasil Ditambah',
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Data Gagal Ditambah!',
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminBerkala  $adminberkala
     * @return \Illuminate\Http\Response
     */
    public function show(AdminBerkala $adminBerkala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminBerkala  $adminberkala
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['adminBerkala'] = AdminBerkala::where('id',$id)->first();
        return view('admin.adminberkala.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminBerkala  $adminberkala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $adminBerkala = AdminBerkala::where('id',$id)->first();
        // $imageurl = $adminBerkala->image;

        // if ($request->hasFile('image')) {
        //     $reqImage = $request->image;
        //     $name = time().rand(1,100).'.'.$reqImage->extension();
        //     $reqImage->move(public_path().'/upload/adminberkala/', $name);
        //     $imageurl = $name;

        //     $file = 'upload/adminberkala/' . $adminBerkala->image;
        //     if ($adminBerkala->image != '' && $adminBerkala->image != null) {
        //         unlink($file);
        //     }
        // }

        $changeadminBerkala = [
            'title' => $request->title,
            'url' => $request->url,
            'status' => $request->status,
            'updated_at' => now(),
        ];

        $data = DB::table('admin_berkalas')
        ->where('id', $id)
        ->update($changeadminBerkala);

        if ($adminBerkala) {
            return redirect('/adminberkala-admin')
                ->with([
                    'success' => 'Data Berhasil Diperbarui',
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Data Gagal Diperbarui!',
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminBerkala  $adminberkala
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminBerkala = AdminBerkala::where('id',$id)->first();

        if (empty($adminBerkala)) {
            return redirect()
            ->back()
            ->withInput()
            ->with([
                'error' => 'data tidak ditemukan!',
            ]);
        }

        // $file = 'upload/adminberkala/' . $adminBerkala->image;
        // if ($adminBerkala->image != '' && $adminBerkala->image != null) {
        //     unlink($file);
        // }

        $data = AdminBerkala::where('id',$id)->delete();

        if ($adminBerkala) {
            return redirect('/adminberkala-admin')
                ->with([
                    'success' => 'Data Berhasil Dihapus',
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Data Gagal Dihapus!',
                ]);
        }
    }
}