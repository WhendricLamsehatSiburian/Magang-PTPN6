<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){
        
        return view('content.index',[

            'tittle' => 'Data Karyawan',
            'nav1' => 'active',
            'nav2' =>'',
            'data' =>'/DataKaryawan',
            'unit' =>'unit'
        ]);
    }

    public function unit(){
        return view('content.unit',[
        'tittle' => 'Unit',
        'nav1' => '',
        'nav2' =>'active',
        'data' =>'/DataKaryawan',
        'unit' =>'/unit'
        ]);
    }

    public function SDM(){
        
        return view('content.sdm.index',[

            'tittle' => 'Data Karyawan',
            'nav1' => 'active',
            'nav2' =>'',
            'data' =>'/ContentSDM',
            'unit' =>'/unitsdm'
        ]);
    }
    public function SDMunit(){
        
        return view('content.sdm.unit',[

            'tittle' => 'Data Unit',
            'nav1' => '',
            'nav2' =>'active',
            'data' =>'/ContentSDM',
            'unit' =>'/unitsdm'
        ]);
    }
    public function unitusaha(){
        
        return view('content.unitusaha.index',[

            'tittle' => 'Data Karyawan',
            'nav1' => 'active',
            'nav2' =>'',
            'data' =>'',
            'unit' =>'/Unitusaha'
        ]);
    }
    public function unitunit(){
        
        return view('content.unitusaha.unit',[

            'tittle' => 'Data Unit',
            'nav1' => '',
            'nav2' =>'active',
            'data' =>'/Adminunit',
            'unit' =>''
        ]);
    }

    public function informasi(){
        return view('Biodata.index');
    }
}
