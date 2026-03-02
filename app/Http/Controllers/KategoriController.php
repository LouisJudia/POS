<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        //     DB::table('m_kategori')->insert([
        //         'kategori_kode' => 'KTG99',
        //         'kategori_nama' => 'Percobaan',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]);

        //     return 'Insert berhasil';
        // }


        //     $row = DB::table('m_kategori')
        //         ->where('kategori_kode', 'KTG99')
        //         ->update([
        //             'kategori_nama' => 'Percobaan Update'
        //         ]);

        //     return 'Update berhasil. Jumlah data: ' . $row . ' baris';
        // }

        //     $row = DB::table('m_kategori')
        //         ->where('kategori_kode', 'KTG99')
        //         ->delete();

        //     return 'Delete berhasil. Jumlah data: ' . $row . ' baris';
        // }
        $data = DB::table('m_kategori')->get();

        return view('kategori', ['data' => $data]);
    }
}
