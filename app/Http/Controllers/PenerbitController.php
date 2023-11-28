<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Penerbit;

class PenerbitController extends Controller
{
    public function index()
    {
        $penerbit = Penerbit::all();

        return view('penerbit.index', compact('penerbit'));
    }

    public function store(Request $request)
    {
        $penerbit = new Penerbit;
        $penerbit->kode = $request->kode;
        $penerbit->nama = $request->nama;


        $penerbit->save();

        return redirect('penerbit')->with('sukses', 'Data berhasil disimpan');
    
    }

    public function edit($id)
    {

        $penerbit = Penerbit::find($id);
        return view('penerbit.edit', compact('penerbit'));

    }
    
    public function update(Request $request, $id)
    {
        $penerbit = Penerbit::find($id);
        $penerbit->kode = $request->kode;
        $penerbit->nama = $request->nama;
        $penerbit->update();

        return redirect('penerbit')->with('sukses', 'Data berhasil diedit');
    }
    public function destroy($id)
    {
        $penerbit = Penerbit::find($id);
        $penerbit->delete();

        return redirect('penerbit')->with('sukses', 'Data berhasil dihapus');
    }
    
}