<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->role == 'Super Admin'){
        $data = User::orderBy('nama','asc');
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('aksi',function($data){
            return view('karyawan.tombol')->with('data', $data);
        })
        ->make(true);
    }
        elseif(auth()->user()->role == 'Admin SDM'){
            $data = User::where('role','Karyawan');
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('aksi',function($data){
                return view('karyawan.tombol')->with('data', $data);
            })
            ->make(true);
        }
        elseif(auth()->user()->role == 'Admin Unit Usaha'){
            $data = User::where('personel2',auth()->user()->personel2)->where('role','Karyawan');  
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('aksi',function($data){
                return view('karyawan.tombol')->with('data', $data);
            })
            ->make(true);
        }
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
            'persno' => 'required',
            'nama' => 'required',
            'suskel' => 'required',
            'ptkp' => 'required',
            'personel' => 'required',
            'psubarea' => 'required',
            'personel2' => 'required',
            'orgunit' => 'required',
            'organization' => 'required',
            'position' => 'required',
            'position2' => 'required',
            'costcenter'=> 'required',
            'costctr'=> 'required',
            'eegrp' => 'required',
            'employee' => 'required',
            'esgrp' => 'required',
            'employee2' => 'required',
            'birthdayplace' => 'required',
            'birthdaydate' => 'required',
            'parea' => 'required',
            'psgroup' => 'required',
            'lv' => 'required',
            'educationalestablishment' => 'required',
            'institue' => 'required',
            'tglmasuk' => 'required',
            'tglcutitahunan' => 'required',
            'tglcutipanjang' => 'required',
            'tglmbt' => 'required',
            'tglpensiun' => 'required',
            'genderkey' => 'required',
            'actiontype' => 'required',
            'reason' => 'required',
            'startdate' => 'required',
            'employeestatus' => 'required',
            'username'=> 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
    ],[
        'persno.required' => 'Persno Harus Di isi',
        'nama.required' => 'Nama Harus Di isi',
        'suskel.required' => 'Suskel Harus Di isi',
        'ptkp.required' => 'ptkp Harus Di isi',
        'personel.required' => 'personel Harus Di isi',
        'psubarea.required' => 'psubarea Harus Di isi',
        'personel2.required' => 'personel2 Harus Di isi',
        'orgunit.required' => 'orgunitHarus Di isi',
        'organization.required' => 'Organization Harus Di isi',
        'position.required' => 'position Harus Di isi',
        'position2.required' => 'position 2Harus Di isi',
        'costcenter.required' => 'cost centerHarus Di isi',
        'costctr.required' => 'cost ctr Harus Di isi',
        'eegrp.required' => 'eegrp Harus Di isi',
        'employee.required' => 'employee Harus Di isi',
        'esgrp.required' => 'esgrp Harus Di isi',
        'employee2 kode_unit.required' => 'employee2 Harus Di isi',
        'birthdayplace.required' => 'birthday place Harus Di isi',
        'birthdaydate.required' => 'Birthday Date Harus Di isi',
        'parea.required' => 'PareaHarus Di isi',
        'psgroup.required' => 'psgroup Harus Di isi',
        'lv.required' => 'lv Harus Di isi',
        'educationalestablishment .required' => 'educationalestablishment Harus Di isi',
        'institue.required' => 'institue Harus Di isi',
        'tglmasuk.required' => 'tglmasukHarus Di isi',
        'tglcutitahunan.required' => 'Tgl Cuti Tahunan Harus Di isi',
        'tglcutipanjang.required' => 'Tgl Cuti Panjang Harus Di isi',
        'tglmbt.required' => 'Tgl MBT Harus Di isi',
        'tglpensiun.required' => 'Tgl Pensiun Harus Di isi',
        'genderkey.required' => 'genderkey Harus Di isi',
        'actiontype.required' => 'action type Harus Di isi',
        'reason.required' => 'Reason Harus Di isi',
        'startdate.required' => 'Start Date Harus Di isi',
        'employeestatus.required' => 'employee status Harus Di isi',
        'username.required' => 'Username Harus Di isi',
        'email.required' => 'email Harus Di isi',
        'role.required' => 'role type Harus Di isi',
        'password.required' => 'password Reason Harus Di isi',
        
    ]);
    if($validate ->fails()){

        return response()->json(['errors'=>$validate->errors()]);
    }
    else{
        $data =[
            'persno'=>$request->persno,
            'nama'=>$request->nama,
            'suskel'=>$request->suskel,
            'ptkp'=>$request->ptkp,
            'personel'=>$request->personel,
            'psubarea'=>$request->psubarea,
            'personel2'=>$request->personel2,
            'orgunit'=>$request->orgunit,
            'organization'=>$request->organization,
            'position'=>$request->position,
            'position2'=>$request->position2,
            'costcenter'=>$request->costcenter,
            'costctr'=>$request->costctr,
            'eegrp'=>$request->eegrp,
            'employee'=>$request->employee,
            'esgrp'=>$request->esgrp,
            'employee2'=>$request->employee2,
            'birthdayplace'=>$request->birthdayplace,
            'birthdaydate'=>$request->birthdaydate,
            'parea'=>$request->parea,
            'psgroup'=>$request->psgroup,
            'lv'=>$request->lv,
            'educationalestablishment'=>$request->educationalestablishment,
            'institue'=>$request->institue,
            'tglmasuk'=>$request->tglmasuk,
            'tglcutitahunan'=>$request->tglcutitahunan,
            'tglcutipanjang'=>$request->tglcutipanjang,
            'tglmbt'=>$request->tglmbt,
            'tglpensiun'=>$request->tglpensiun,
            'genderkey'=>$request->genderkey,
            'actiontype'=>$request->actiontype,
            'reason'=>$request->reason,
            'startdate'=>$request->startdate,
            'employeestatus'=>$request->employeestatus,
            'username'=>$request->username,
            'email'=>$request->email,
            'role'=>$request->role,
            'password'=>$request->password
            
        ];
        User::create($data);
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
        $data = User::where('id', $id)->first();
        return response()->json(['result' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = Validator::make($request->all(),[
            'persno' => 'required',
            'nama' => 'required',
            'suskel' => 'required',
            'ptkp' => 'required',
            'personel' => 'required',
            'psubarea' => 'required',
            'personel2' => 'required',
            'orgunit' => 'required',
            'organization' => 'required',
            'position' => 'required',
            'position2' => 'required',
            'costcenter'=> 'required',
            'costctr'=> 'required',
            'eegrp' => 'required',
            'employee' => 'required',
            'esgrp' => 'required',
            'employee2' => 'required',
            'birthdayplace' => 'required',
            'birthdaydate' => 'required',
            'parea' => 'required',
            'psgroup' => 'required',
            'lv' => 'required',
            'educationalestablishment' => 'required',
            'institue' => 'required',
            'tglmasuk' => 'required',
            'tglcutitahunan' => 'required',
            'tglcutipanjang' => 'required',
            'tglmbt' => 'required',
            'tglpensiun' => 'required',
            'genderkey' => 'required',
            'actiontype' => 'required',
            'reason' => 'required',
            'startdate' => 'required',
            'employeestatus' => 'required',
            'username'=> 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
    ],[
        'persno.required' => 'Persno Harus Di isi',
        'nama.required' => 'Nama Harus Di isi',
        'suskel.required' => 'Suskel Harus Di isi',
        'ptkp.required' => 'ptkp Harus Di isi',
        'personel.required' => 'personel Harus Di isi',
        'psubarea.required' => 'psubarea Harus Di isi',
        'personel2.required' => 'personel2 Harus Di isi',
        'orgunit.required' => 'orgunitHarus Di isi',
        'organization.required' => 'Organization Harus Di isi',
        'position.required' => 'position Harus Di isi',
        'position2.required' => 'position 2Harus Di isi',
        'costcenter.required' => 'cost centerHarus Di isi',
        'costctr.required' => 'cost ctr Harus Di isi',
        'eegrp.required' => 'eegrp Harus Di isi',
        'employee.required' => 'employee Harus Di isi',
        'esgrp.required' => 'esgrp Harus Di isi',
        'employee2 kode_unit.required' => 'employee2 Harus Di isi',
        'birthdayplace.required' => 'birthday place Harus Di isi',
        'birthdaydate.required' => 'Birthday Date Harus Di isi',
        'parea.required' => 'PareaHarus Di isi',
        'psgroup.required' => 'psgroup Harus Di isi',
        'lv.required' => 'lv Harus Di isi',
        'educationalestablishment .required' => 'educationalestablishment Harus Di isi',
        'institue.required' => 'institue Harus Di isi',
        'tglmasuk.required' => 'tglmasukHarus Di isi',
        'tglcutitahunan.required' => 'Tgl Cuti Tahunan Harus Di isi',
        'tglcutipanjang.required' => 'Tgl Cuti Panjang Harus Di isi',
        'tglmbt.required' => 'Tgl MBT Harus Di isi',
        'tglpensiun.required' => 'Tgl Pensiun Harus Di isi',
        'genderkey.required' => 'genderkey Harus Di isi',
        'actiontype.required' => 'action type Harus Di isi',
        'reason.required' => 'Reason Harus Di isi',
        'startdate.required' => 'Start Date Harus Di isi',
        'employeestatus.required' => 'employee status Harus Di isi',
        'username.required' => 'Username Harus Di isi',
        'email.required' => 'email Harus Di isi',
        'role.required' => 'role type Harus Di isi',
        'password.required' => 'password Reason Harus Di isi',
        
    ]);
    if($validate ->fails()){

        return response()->json(['errors'=>$validate->errors()]);
    }
    else{
        $data =[
            'persno'=>$request->persno,
            'nama'=>$request->nama,
            'suskel'=>$request->suskel,
            'ptkp'=>$request->ptkp,
            'personel'=>$request->personel,
            'psubarea'=>$request->psubarea,
            'personel2'=>$request->personel2,
            'orgunit'=>$request->orgunit,
            'organization'=>$request->organization,
            'position'=>$request->position,
            'position2'=>$request->position2,
            'costcenter'=>$request->costcenter,
            'costctr'=>$request->costctr,
            'eegrp'=>$request->eegrp,
            'employee'=>$request->employee,
            'esgrp'=>$request->esgrp,
            'employee2'=>$request->employee2,
            'birthdayplace'=>$request->birthdayplace,
            'biryhdaydate'=>$request->biryhdaydate,
            'parea'=>$request->parea,
            'psgroup'=>$request->psgroup,
            'lv'=>$request->lv,
            'educationalestablishment'=>$request->educationalestablishment,
            'instiue'=>$request->instiue,
            'tglmasuk'=>$request->tglmasuk,
            'tglcutitahunan'=>$request->tglcutitahunan,
            'tglcutipanjang'=>$request->tglcutipanjang,
            'tglmbt'=>$request->tglmbt,
            'tglpensiun'=>$request->tglpensiun,
            'genderkey'=>$request->genderkey,
            'actiontype'=>$request->actiontype,
            'reason'=>$request->reason,
            'startdate'=>$request->startdate,
            'employeestatus'=>$request->employeestatus,
            'username'=>$request->username,
            'email'=>$request->email,
            'role'=>$request->role,
            'password'=>$request->password
            
        ];
        User::where('id', $id)->update($data);
        return response()->json(['success' => "Berhasil melakukan update data"]);
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
    }
}
