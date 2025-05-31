<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function showProfile()
{
     $mahasiswa = [
            'nama' => 'Bunga Rasikhah Haya',
            'npm' => '230810701010',
            'jenjang' => 'S1',
            'fakultas' => 'Fakultas MIPA',
            'jurusan' => 'Informatika'
        ];

        $dataDiri = [
            'NPM' => '230810701010',
            'Nama' => 'Bunga Rasikhah Haya',
            'NIS' => '0040760240',
            'NIK' => '1904500060001',
            'Email USK' => 'bungarh23@mhs.usk.ac.id',
            'Email Pribadi' => 'bunga.rasikhah@gmail.com',
            'Tempat Lahir' => 'Sinabang',
            'Jenis Kelamin' => 'Perempuan',
            'Kewarganegaraan' => 'WNI',
            'Negara' => 'Indonesia',
            'Provinsi Lahir' => 'Aceh',
            'Kabupaten Lahir' => 'KAB. SIMEULUE',
            'Tanggal Lahir' => '10 Januari 2006',
            'Status Perkawinan' => 'Belum Kawin',
            'Agama' => 'Islam',
            'Nomor Telepon' => '082210644144',
            'Nomor Passport' => '0',
            'Nomor BPJS' => '0000936222882'
        ];

        return view('profile', compact('mahasiswa', 'dataDiri'));
    }
}