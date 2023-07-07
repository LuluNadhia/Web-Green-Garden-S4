<?php

namespace App\Http\Controllers;

use App\Models\Penanam;
use Illuminate\Http\Request;
use App\Models\Sistem;
use App\Models\Gap;
use App\Models\Phair;
use App\Models\LokasiTanam;
use App\Models\MediaTanam;
use App\Models\JenisAir;
use App\Models\Kriteria;
use App\Models\PenggunaanListrik;
use App\Models\TingkatPerakitan;
use Illuminate\Contracts\Session\Session;
use Symfony\Component\HttpKernel\Profiler\Profile;

class SPKController extends Controller
{
    public function krite(){
        return view('dataKriteria', [
            'krt' => Kriteria::all(),
            'ph' => Phair::all(),
            'mt' => MediaTanam::all(),
            'ja' => JenisAir::all(),
            'tp' => TingkatPerakitan::all(),
            'lt' => LokasiTanam::all(),
            'pl' => PenggunaanListrik::all()
        ]);
    }

    public function addPnm(){
        return view('addPnm',
        [
            
            'phAir' => Phair::all(),
            'mediaTanam' => MediaTanam::all(),
            'jenisAir' => JenisAir::all(),
            'tingkatPerakitan' => TingkatPerakitan::all(),
            'lokasiTanam' => LokasiTanam::all(),
            'penggunaanListrik' => PenggunaanListrik::all()

        ]);
    }

    public function test(){
        return view('coba',
        [
            
            'phAir' => Phair::all(),
            'mediaTanam' => MediaTanam::all(),
            'jenisAir' => JenisAir::all(),
            'tingkatPerakitan' => TingkatPerakitan::all(),
            'lokasiTanam' => LokasiTanam::all(),
            'penggunaanListrik' => PenggunaanListrik::all()

        ]);
    }



    public function storePnm(Request $request){
        // $validated = $request->validate([
        //     'nam' => ['required'],
        //     'email' => ['required','email:rfc,dns'],
        //     'no_hp' => ['required','numeric'],
        //     'alamat' => ['required'],
        //     'name' => ['required'],
        //     'tgl' => ['required','numeric']
            
        // ], [
        //     'required' => 'Tidak boleh kosong',
        //     'alpha_dash' => 'Mengandung angka atau karakter spesial',
        //     'max' => 'Jumlah karakter melebihi batas',
        //     'numeric' => 'Masukkan angka!'
        // ]);

        $c1 = $request->input('c1');
        $c2 = $request->input('c2');
        $c3 = $request->input('c3');
        $c4 = $request->input('c4');
        $c5 = $request->input('c5');
        $c6 = $request->input('c6');


        $pnm = new Penanam;
        $pnm->nama = $request->input('nam');
        $pnm->email = $request->input('email'); 
        $pnm->no_hp = $request->input('no_hp');
        $pnm->alamat = $request->input('alamat');
        $pnm->nama_tanaman = $request->input('name');
        $pnm->tanggal_penanaman = $request->input('tgl');
        $pnm->ph_air_id = $c1;
        $pnm->media_tanam_id= $c2;
        $pnm->jenis_air_id = $c3;
        $pnm->tingkat_perakitan_id= $c4;
        $pnm->lokasi_tanam_id= $c5;
        $pnm->penggunaan_listrik_id= $c6;
        $pnm->save();

        $selisih = $this->pm_selisih($c1,$c2,$c3,$c4,$c5,$c6);
        $bobot = $this->pm_bobot($selisih);
        $mean = $this->pm_mean($bobot);
        $hasil = $this->pm_result($mean);

        return view('spkHasil',[
            'hasil' => collect($hasil)->sortByDesc('persentase')->values()->all()
        ]);

        // return view('coba',['hasil'=> collect($hasil)]);
    }


    public function pm_selisih($s1,$s2,$s3,$s4,$s5,$s6){
        $sistem = Sistem::all();

        $listSistem = [];

        foreach($sistem as $sis){
            $c1 = $sis->ph_air_id-$s1;
            $c2 = $sis->media_tanam_id-$s2;
            $c3 = $sis->jenis_air_id-$s3;
            $c4 = $sis->tingkat_perakitan_id-$s4;
            $c5 = $sis->lokasi_tanam_id-$s5;
            $c6 = $sis->penggunaan_listrik_id-$s6;

            $listSistem[] = ['id'=>$sis->id,
                            'nama'=>$sis->nama_sistem,
                            'c1'=>$c1,
                            'c2'=>$c2,
                            'c3'=>$c3,
                            'c4'=>$c4,
                            'c5'=>$c5,
                            'c6'=>$c6
                           ];
        }

        return $listSistem;

    }

    public function pm_bobot($listSelisih){
        $listBobot = [];
        foreach($listSelisih as $sls){
            $c1 = Gap::where('selisih',$sls['c1'])->value('bobot');
            $c2 = Gap::where('selisih',$sls['c2'])->value('bobot');
            $c3 = Gap::where('selisih',$sls['c3'])->value('bobot');
            $c4 = Gap::where('selisih',$sls['c4'])->value('bobot');
            $c5 = Gap::where('selisih',$sls['c5'])->value('bobot');
            $c6 = Gap::where('selisih',$sls['c6'])->value('bobot');

            $listBobot[] = ['id'=>$sls['id'],
                            'nama'=>$sls['nama'],
                            'c1'=>$c1,
                            'c2'=>$c2,
                            'c3'=>$c3,
                            'c4'=>$c4,
                            'c5'=>$c5,
                            'c6'=>$c6
                           ];
        }

        // $this->pm_mean($listBobot);
        return $listBobot;
    }

    public function pm_mean($listBobot){
        $listMean = [];
        foreach($listBobot as $bbt){
            $c1 = $bbt['c1']; //sec
            $c2 = $bbt['c2']; //core
            $c3 = $bbt['c3'];   //sec
            $c4 = $bbt['c4']; //sec
            $c5 = $bbt['c5']; // core
            $c6 = $bbt['c6']; // core

            $core = ($c2+$c5+$c6)/3;
            $sec = ($c1+$c3+$c4)/3;

            $listMean[] = ['id'=>$bbt['id'],
                            'nama'=>$bbt['nama'],
                            'core'=>$core,
                            'second'=>$sec
                            ];

        }
        return $listMean;
    }


    public function pm_result($listMean){
        $listHasil = [];
        foreach($listMean as $i => $lmn){
            $core = $lmn['core'];
            $second = $lmn['second'];

            $rslt = (0.6*$core)+(0.4*$second);
            $prsn = ($rslt/5)*100;

            $listHasil[] = ['id'=>$lmn['id'],
                            'nama'=>$lmn['nama'],
                            'total'=>$rslt,
                            'persentase'=>$prsn,
                            ];
            
            asort($listHasil);

        }

        return $listHasil;
    }

}
