<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sistem;
use App\Models\Phair;
use App\Models\LokasiTanam;
use App\Models\MediaTanam;
use App\Models\JenisAir;
use App\Models\PenggunaanListrik;
use App\Models\TingkatPerakitan;
use Symfony\Component\Console\Input\Input;

class SistemController extends Controller
{
    public function index(){
        return view('dataSistem', [
            'sistemnn' => Sistem::all()
        ]);
    }

    public function dashboard(){
        return view('index3');
    }

    public function add() {
        return view('create',
        [
            'phAir' => Phair::all(),
            'mediaTanam' => MediaTanam::all(),
            'jenisAir' => JenisAir::all(),
            'tingkatPerakitan' => TingkatPerakitan::all(),
            'lokasiTanam' => LokasiTanam::all(),
            'penggunaanListrik' => PenggunaanListrik::all()

        ]);
    }

    public function store(Request $request){
        // $validated = $request->validate([
        //     'namaSistem' => ['required', 'alpha_dash', 'max:50'],
           
        // ], [
        //     'required' => 'Tidak boleh kosong',
        //     'alpha_dash' => 'Mengandung angka atau karakter spesial',
        //     'ascii' => 'Mengandung angka atau karakter spesial',
        //     'max' => 'Jumlah karakter melebihi batas',
        // ]);
        

        $nama = $request->input('namaSistem');
        $ph = $request->input('phAir');
        $media = $request->input('mediaTanam');
        $jenis = $request->input('jenisAir');
        $perakitan = $request->input('tingkatPerakitan');
        $lokasi = $request->input('lokasiTanam');
        $listrik = $request->input('penggunaanListrik');

        
        $sistem = new Sistem;
        $sistem->nama_sistem = $nama;
        $sistem->ph_air_id = $ph;
        $sistem->media_tanam_id = $media;
        $sistem->jenis_air_id= $jenis;
        $sistem->tingkat_perakitan_id= $perakitan;
        $sistem->lokasi_tanam_id= $lokasi;
        $sistem->penggunaan_listrik_id= $listrik;
        $sistem->save();


        return redirect('sistem');
    }

    public function edit($id){
        $sistem = Sistem::where('id', $id)->first();
        
        return view('update',
        [
            'sistem' =>  $sistem,
            'phAir' => Phair::all(),
            'mediaTanam' => MediaTanam::all(),
            'jenisAir' => JenisAir::all(),
            'tingkatPerakitan' => TingkatPerakitan::all(),
            'lokasiTanam' => LokasiTanam::all(),
            'penggunaanListrik' => PenggunaanListrik::all()

        ]);
    }

    public function update(Request $request, $id){
        // $validated = $request->validate([
        //     'namaSistem' => ['required', 'alpha_dash', 'max:50'],
           
        // ], [
        //     'required' => 'Tidak boleh kosong',
        //     'alpha_dash' => 'Mengandung angka atau karakter spesial',
        //     'ascii' => 'Mengandung angka atau karakter spesial',
        //     'max' => 'Jumlah karakter melebihi batas',
        // ]);

        $nama = $request->input('namaSistem');
        $ph = $request->input('phAir');
        $media = $request->input('mediaTanam');
        $jenis = $request->input('jenisAir');
        $perakitan = $request->input('tingkatPerakitan');
        $lokasi = $request->input('lokasiTanam');
        $listrik = $request->input('penggunaanListrik');

        $sistem = Sistem::where('id', $id)->first();

        $sistem->nama_sistem = $nama;
        $sistem->ph_air_id = $ph;
        $sistem->media_tanam_id = $media;
        $sistem->jenis_air_id= $jenis;
        $sistem->tingkat_perakitan_id= $perakitan;
        $sistem->lokasi_tanam_id= $lokasi;
        $sistem->penggunaan_listrik_id= $listrik;

        $sistem->save();

        return redirect('sistem');
    }

    public function delete($id) {
        $sistem = Sistem::where('id', $id)->first();
        $sistem->delete();

        return redirect('sistem');
    }

}