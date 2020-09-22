<?php

use Illuminate\Database\Seeder;

class PekerjaanSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_pekerjaan')->insert(
            [
                [   'pekerjaan' => 'BELUM/TIDAK BEKERJA',],
                [   'pekerjaan' => 'MENGURUS RUMAH TANGGA',],
                [   'pekerjaan' => 'PELAJAR/MAHASISWA',],
                [   'pekerjaan' => 'PEGAWAI NEGERI SIPIL (PNS)', ],
                [   'pekerjaan' => 'TENTARA NASIONAL INDONESIA (TNI)',],
                [   'pekerjaan' => 'KEPOLISIAN RI (POLRI)',],                
                [   'pekerjaan' => 'PERDAGANGAN',],                
                [   'pekerjaan' => 'PETANI/PEKEBUN',],                
                [   'pekerjaan' => 'PETERNAK',],               
                [   'pekerjaan' => 'NELAYAN/PERIKANAN',],                
                [   'pekerjaan' => 'INDUSTRI',],                
                [   'pekerjaan' => 'KONSTRUKSI',],                
                [   'pekerjaan' => 'TRANSPORTASI',],                
                [   'pekerjaan' => 'KARYAWAN SWASTA',],                
                [   'pekerjaan' => 'KARYAWAN BUMN',],                
                [   'pekerjaan' => 'KARYAWAN BUMD',],                
                [   'pekerjaan' => 'KARYAWAN HONORER',],                
                [   'pekerjaan' => 'BURUH HARIAN LEPAS',],                
                [   'pekerjaan' => 'BURUH TANI/PERKEBUNAN',],                
                [   'pekerjaan' => 'BURUH NELAYAN/PERIKANAN',],                
                [   'pekerjaan' => 'BURUH PETERNAKAN',],                [   'pekerjaan' => 'PEMBANTU RUMAH TANGGA',],                [   'pekerjaan' => 'TUKANG CUKUR',],                [   'pekerjaan' => 'TUKANG LISTRIK',],                [   'pekerjaan' => 'TUKANG BATU',],                [   'pekerjaan' => 'TUKANG KAYU',],                [   'pekerjaan' => 'TUKANG SOL SEPATU',],                [   'pekerjaan' => 'TUKANG LAS/PANDAI BESI',],                [   'pekerjaan' => 'TUKANG JAHIT',],                [   'pekerjaan' => 'TUKANG GIGI',],                [   'pekerjaan' => 'PENATA RIAS',],                [   'pekerjaan' => 'PENATA BUSANA',],                [   'pekerjaan' => 'PENATA RAMBUT',],                [   'pekerjaan' => 'MEKANIK',],                [   'pekerjaan' => 'SENIMAN',],                [   'pekerjaan' => 'TABIB',],                [   'pekerjaan' => 'PARAJI',],                [   'pekerjaan' => 'PERANCANG BUSANA',],                [   'pekerjaan' => 'PENTERJEMAH',],                [   'pekerjaan' => 'IMAM MASJID',],                [   'pekerjaan' => 'PENDETA',],                [   'pekerjaan' => 'PASTOR',],                [   'pekerjaan' => 'WARTAWAN',],                [   'pekerjaan' => 'USTADZ/MUBALIGH',],                [   'pekerjaan' => 'JURU MASAK',],                [   'pekerjaan' => 'PROMOTOR ACARA',],                [   'pekerjaan' => 'ANGGOTA DPR-RI',],                [   'pekerjaan' => 'ANGGOTA DPD',],                [   'pekerjaan' => 'ANGGOTA BPK',],                [   'pekerjaan' => 'PRESIDEN',],                [   'pekerjaan' => 'WAKIL PRESIDEN',],                [   'pekerjaan' => 'ANGGOTA MAHKAMAH KONSTITUSI',],                [   'pekerjaan' => 'ANGGOTA KABINET KEMENTERIAN',],                [   'pekerjaan' => 'DUTA BESAR',],                [   'pekerjaan' => 'GUBERNUR',],                [   'pekerjaan' => 'WAKIL GUBERNUR',],                [   'pekerjaan' => 'WAKIL WALIKOTA',],
                [   'pekerjaan' => 'ANGGOTA DPRD PROVINSI',],
                [   'pekerjaan' => 'ANGGOTA DPRD KABUPATEN/KOTA',],
                [   'pekerjaan' => 'DOSEN',],
                [   'pekerjaan' => 'GURU',],
                [   'pekerjaan' => 'PILOT',],
                [   'pekerjaan' => 'PENGACARA',],
                [   'pekerjaan' => 'NOTARIS',],
                [   'pekerjaan' => 'ARSITEK',],
                [   'pekerjaan' => 'AKUNTAN',],
                [   'pekerjaan' => 'KONSULTAN',],
                [   'pekerjaan' => 'DOKTER',],
                [   'pekerjaan' => 'BIDAN',],
                [   'pekerjaan' => 'PERAWAT',],
                [   'pekerjaan' => 'APOTEKER',],
                [   'pekerjaan' => 'PSIKIATER/PSIKOLOG',],
                [   'pekerjaan' => 'PENYIAR TELEVISI',],
                [   'pekerjaan' => 'PENYIAR RADIO',],
                [   'pekerjaan' => 'PELAUT',],
                [   'pekerjaan' => 'PENELITI',],
                [   'pekerjaan' => 'SOPIR',],
                [   'pekerjaan' => 'PIALANG',],
                [   'pekerjaan' => 'PARANORMAL',],
                [   'pekerjaan' => 'PEDAGANG',],
                [   'pekerjaan' => 'PERANGKAT DESA',],
                [   'pekerjaan' => 'KEPALA DESA',],
                [   'pekerjaan' => 'BIARAWATI',],
                [   'pekerjaan' => 'WIRASWASTA',],
                [   'pekerjaan' => 'LAINNYA',]
            ]
            
        );
    }
}
