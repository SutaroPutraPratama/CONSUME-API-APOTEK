<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class ApotekController extends Controller
{

    public function allData()
    {
        $data = (new BaseApi)->index('/api/apotek');
        $apotek = $data->json();

        return view('showAll')->with('apotek' , $apotek['data']);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $upload = [
            'nama' => $request->nama,
            'rujukan' => $request->rujukan,
            'rumah_sakit' => $request->rumah_sakit,
            'obat' => $request->obat,
            'harga_satuan' => $request->harga_satuan,
            'total_harga' => $request->total_harga,
            'apoteker' => $request->apoteker,
        ];



        // $baseApi = new BaseApi;
        // $response = $baseApi->create('/api/apotek/store', $upload);
        // if($response->failed()){
        //     // return redirect()->back();
        //     dd('test');
        // }
        // return redirect('/data')->with('success');
        $baseApi = new BaseApi;
           $response = $baseApi->create('/api/apotek/store', $upload);
            if ($response->failed()) {
                $errors = $response->json('data');
                return redirect()->back()->with(['errors' => $errors]);
            }
    return redirect('/data')->with('success', 'Berhasil menambahkan data');

    }

    
    public function show($id)
    {
        $data = (new BaseApi)->index('/api/apotek');
        $apotek = $data->json();

        return view('update')->with('apotek' , $apotek['data']);
    }

    public function edit($id)
    {
        $data = (new BaseApi)->detail('/api/apotek', $id);
        $apotek = $data->json();
        return view('update')->with(['apotek' => $apotek['data']]);
    }

    public function update(Request $request, $id)
    {
        $upload = [
            'nama' => $request->nama,
            'rujukan' => $request->rujukan,
            'rumah_sakit' => $request->rumah_sakit,
            'obat' => $request->obat,
            'harga_satuan' => $request->harga_satuan,
            'total_harga' => $request->total_harga,
            'apoteker' => $request->apoteker,
        ];

        $baseApi = new BaseApi;
           $response = $baseApi->update('/api/apotek/update',$id, $upload);
            if ($response->failed()) {
                $errors = $response->json('data');
                return redirect()->back()->with(['errors' => $errors]);
            }
    return redirect('/data')->with('success', 'Berhasil update data');
    }

    public function destroy(Request $request, $id)
    {
        $apotek = (new BaseApi)->delete('/api/apotek/delete', $id);
        if ($apotek->status() == 200) {
            return redirect()->back()->with('success', 'Berhasil menghapus data secara permanen!');
        } else {
            $errors = $apotek->json('data');
            return redirect()->back()->with('errors', $errors);
        }
    }

}
