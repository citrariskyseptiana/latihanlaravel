<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BiodataMahasiswa;
use App\Http\Requests\UpdateBiodata;
use Illuminate\Support\Facades\Validator;
use DataTables;
use DB;
use App\Exports\BiodataExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = BiodataMahasiswa::all();
        return view("biodata.index", compact("mahasiswa"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("biodata.create");
    }

    public function export_excel()
    {
        return Excel::download(new BiodataExport, 'biodata.xlsx');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filePath = $request->file("foto")->store("public");

        BiodataMahasiswa::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'address' => $request->address,
            'foto' => $filePath
            ]); //menyimpan filePath yang didapatkan 

        return redirect()->route("biodata.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = BiodataMahasiswa::find("$id");
        
        return view("biodata.show", compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = BiodataMahasiswa::find($id);
        return view("biodata.edit", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBiodata $request, $id)
    {

        // nama nim alamat
        // $validation = Validator::make($request->all(), [
        //     "name" => "string|min:3|alpha",
        //     "nim" => "string|min:8",
        //     "alamat" => "string|min:10",
        // ]);

        // if ($validation->fails()){
        //     return redirect()->back()->withErrors($validation)->withInput();
        // }

        BiodataMahasiswa::where("id", $id)->update($request->except("_token"));
        return redirect()->route("biodata.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BiodataMahasiswa::where("id", $id)->delete();
        return redirect()->route("biodata.index");
    }
}
