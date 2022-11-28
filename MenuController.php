<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function buat()
    {
        return view("Menu.form-input");
    }

    public function simpan(Request $request)
    {
        $Menu = new Menu();
        $Menu->nama = $request->get("nama");
        $Menu->keterangan = $request->get("keterangan");
        $Menu->save();

        return redirect(route("tampil_menu", ['id' => $Menu->id]));
    }

    public function tampil($id)
    {
        $Menu = Menu::find($id);

        return view("menu.tampil")->with("menu", $Menu);
    }

    public function semua()
    {
        $data = Menu::all();
        return view("menu.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("menu.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $Menu = Menu::find($id);
        $Menu->nama = $request->get("nama");
        $Menu->keterangan = $request->get("keterangan");
        $Menu->save();

        return redirect(route("tampil_menu", ['id' => $Menu->id]));
    }

    public function hapus($id)
    {
        Menu::destroy($id);
        return redirect(route('semua_menu'));
    }
}