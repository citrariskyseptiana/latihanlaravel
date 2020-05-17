<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Datatables;

class Pemasukan_controller extends Controller
{
    public function index(){
    	$data = \DB::table('pemasukan as a')->join('sumber as b', 'a.sumber_pemasukan','=','b.id')->get();

    	return view('pemasukan.pemasukan_index',compact('data'));
    }
    public function add(){
        $sumber = \DB::table('sumber')->get();

        return view('pemasukan.pemasukan_add', compact('sumber'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'sumber_pemasukan'=>'required',
            'nominal'=>'required',
            'tanggal'=>'required',
            'keterangan'=>'required'
        ]);

        \DB::table('pemasukan')->insert([
            'pemasukan_id'=>\Uuid::generate(4),
            'sumber_pemasukan'=>$request->sumber_pemasukan,
            'nominal'=>$request->nominal,
            'tanggal'=>date('Y-m-d',strtotime($request->tanggal)),
            'keterangan'=>$request->keterangan
        ]);

        return redirect('pemasukan');
    }

    public function edit($id){
        $data = \DB::table('pemasukan')->where('pemasukan_id',$id)->first();

        $sumber = \DB::table('sumber')->get();

        return view('pemasukan.pemasukan_edit',compact('data','sumber'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'sumber_pemasukan'=>'required',
            'nominal'=>'required',
            'tanggal'=>'required',
            'keterangan'=>'required'
        ]);

        \DB::table('pemasukan')->where('pemasukan_id',$id)->update([
            'sumber_pemasukan'=>$request->sumber_pemasukan,
            'nominal'=>$request->nominal,
            'tanggal'=>date('Y-m-d',strtotime($request->tanggal)),
            'keterangan'=>$request->keterangan
        ]);

        return redirect('pemasukan');
    }

    public function delete($id){
        \DB::table('pemasukan')->where('pemasukan_id',$id)->delete();
        return redirect('pemasukan');
    }

 //    public function yajra(Request $request)
 //    {
 //        DB::statement(DB::raw('set @rownum=0'));
 //        $pemasukan = DB::table('pemasukan as a')->join('sumber as b', 'a.sumber_pemasukan','=','b.id')->select([
 //            DB::raw('@rownum  := @rownum  + 1 AS rownum'),
 //            'a.pemasukan_id',
 //            'a.sumber_pemasukan',
 //            'b.nama',
 //            'a.nominal',
 //            'a.tanggal',
 //            'a.keterangan']);
 //        $datatables = Datatables::of($pemasukan);

 //        if ($keyword = $request->get('search')['value']) {
 //            $datatables->filterColumn('rownum', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
 //        }

 //        return $datatables->make(true);
	// }
}
