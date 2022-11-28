<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bayar;

class bayarController extends Controller
{
    public function buat()
    {
        return view("bayar.form-input");
    }

    public function simpan(Request $request)
    {
        $bayar = new bayar();
        $bayar->nama = $request->get("nama");
        $bayar->keterangan = $request->get("keterangan");
        $bayar->save();

        return redirect(route("tampil_bayar", ['id' => $bayar->id]));
    }

    public function tampil($id)
    {
        $kategori = bayar::find($id);

        return view("bayar.tampil")->with("bayar", $kbayar);
    }

    public function semua()
    {
        $data = bayar::all();
        return view("bayar.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("bayar.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $bayar = Kategori::find($id);
        $bayar->nama = $request->get("nama");
        $bayar->keterangan = $request->get("keterangan");
        $bayar->save();

        return redirect(route("tampil_bayar", ['id' => bayar->id]));
    }

    public function hapus($id)
    {
        bayar::destroy($id);
        return redirect(route('semua_bayar'));
    }
}