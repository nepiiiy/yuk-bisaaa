<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\pkk_structure;
use App\Models\lembaga_structure;
use App\Models\kt_structure;
use App\Models\desa_rule;
use App\Models\desa_new;
use App\Models\Product;
use App\Models\resident;
use App\Models\public_facility;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function getAge(){
        $umur=Carbon::parse($this->tanggal);
        $today=Carbon::today();
        return $umur->diffInYears($today);
    }
    public function dashboard()
    {
        $jumlah_pkk = pkk_structure::all()->count();
        $jumlah_struktur = lembaga_structure::all()->count();
        $jumlah_kt = kt_structure::all()->count();
        $jumlah_peraturan = desa_rule::all()->count();
        $jumlah_berita = desa_new::all()->count();
        $jumlah_product = Product::all()->count();
        $jumlah_penduduk = resident::all()->count();
        $jumlah_sarana = public_facility::all()->count();

        //grafik jenis kelamin
        $jk = resident::all()->count();
        $perempuan = resident::where('jk', 'Perempuan')->count();
        $laki = resident::where('jk', 'Laki-Laki')->count();

        //grafik agama
        $agama = resident::all()->count();
        $islam = resident::where('agama', 'Islam')->count();
        $kristen = resident::where('agama', 'Kristen Protestan')->count();
        $katolik = resident::where('agama', 'Kristen Katolik')->count();
        $hindu = resident::where('agama', 'Hindu')->count();
        $budha = resident::where('agama', 'Budha')->count();
        $konghucu = resident::where('agama', 'Konghucu')->count();

        //grafik pendidikan
        $pendidikan = resident::all()->count();
        $sd = resident::where('pendidikan', 'SD')->count();
        $smp = resident::where('pendidikan', 'SMP')->count();
        $sma = resident::where('pendidikan', 'SMA/SMK')->count();
        $d3 = resident::where('pendidikan', 'D3')->count();
        $d4 = resident::where('pendidikan', 'Sarjana/D4')->count();
        $s2 = resident::where('pendidikan', 'S2')->count();

        //grafik status
        $status = resident::all()->count();
        $sudah = resident::where('status', 'Sudah')->count();
        $belum = resident::where('status', 'Belum')->count();

        //grafik usia
        $usia=resident::all()->count();
        //balita
        $limitDate = Carbon::now()->subYears(0 < 5);
        $balita = resident::where('tanggal', '<=', $limitDate)
            ->get()->count();

        //anak-anak
        $ank = Carbon::now()->subYears(0 >= 5 && 6 < 15);
        $anak = resident::where('tanggal', '<=', $ank)
            ->get()->count();

        //remaja
        $rem = Carbon::now()->subYears(6 >= 15 && 16 < 25);
        $remaja = resident::where('tanggal', '<=', $rem)
            ->get()->count();
            

        //dewasa
        $dew = Carbon::now()->subYears(16 >= 25 && 26 < 45);
        $dewasa = resident::where('tanggal', '<=', $dew)
            ->get()->count();

        //lansia
        $lan = Carbon::now()->subYears(26 >= 45 && 45 < 100);
        $lansia = resident::where('tanggal', '<=', $lan)
            ->get()->count();
        
        return view('admindesa.dashboard', compact('jk', 'perempuan', 'laki', 'agama', 'islam', 'kristen', 'katolik', 'hindu', 'budha', 'konghucu', 'pendidikan', 'sd', 'smp', 'sma', 'd3', 'd4', 's2', 'status', 'sudah', 'belum', 'usia', 'balita', 'anak', 'remaja', 'dewasa', 'lansia'))
        ->with('jumlah_pkk', $jumlah_pkk)->with('jumlah_struktur', $jumlah_struktur)->with('jumlah_kt', $jumlah_kt)->with('jumlah_peraturan', $jumlah_peraturan)->with('jumlah_berita', $jumlah_berita)->with('jumlah_product', $jumlah_product)->with('jumlah_penduduk', $jumlah_penduduk)->with('jumlah_sarana', $jumlah_sarana);
    }
}