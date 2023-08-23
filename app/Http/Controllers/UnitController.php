<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Unit::orderBy('id','asc');
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('aksi',function($data){
            return view('tombol.index')->with('data', $data );
        })
        ->make(true);

    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'kode_unit'=>'required',
            'nama_unit'=>'required',
            'alias'=>'required',
            'nickname'=>'required',
    ],[
        'kode_unit.required' => 'Harus Di isi',
        'nama_unit.required' => 'Harus Di isi',
        'alias.required' => 'Harus Di isi',
        'nickname.required' => 'Harus Di isi',

    ]);
    if($validate ->fails()){

        return response()->json(['errors'=>$validate->errors()]);
    }
    else{
        $data =[
            'kode_unit'=>$request->kode_unit,
            'nama_unit'=>$request->nama_unit,
            'alias'=>$request->alias,
            'nickname'=>$request->nickname
            
        ];
        Unit::create($data);
        return response()->json(['success'=>"DONE"]);
    }


      
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Unit::where('id', $id)->first();
        return response()->json(['result' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = Validator::make($request->all(),[
            'kode_unit'=>'required',
            'nama_unit'=>'required',
            'alias'=>'required',
            'nickname'=>'required',
    ],[
        'kode_unit.required' => 'Harus Di isi',
        'nama_unit.required' => 'Harus Di isi',
        'alias.required' => 'Harus Di isi',
        'nickname.required' => 'Harus Di isi',

    ]);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()]);
        } else {
            $data = [
                'kode_unit'=>$request->kode_unit,
                'nama_unit'=>$request->nama_unit,
                'alias'=>$request->alias,
                'nickname'=>$request->nickname
            ];
            Unit::where('id', $id)->update($data);
            return response()->json(['success' => "Berhasil melakukan update data"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Unit::where('id', $id)->delete();

    }
}
