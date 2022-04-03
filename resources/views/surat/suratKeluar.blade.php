@extends('template.appSurat')

@section('content')
<div class="col-span-12 mt-8">
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5 mb-5">
            Surat Keluar
        </h2>
    </div>
</div>
<div class="table-responsive-xl">
    <table class="table">
        <thead>
            <tr class="bg-gray-700 text-white">
                <th class="whitespace" style="word-wrap:normal;">Kategori</th>
                <th class="whitespace" style="word-wrap:normal;">Hibah</th>
                <th class="whitespace" style="word-wrap:normal;">Judul</th>
                <th class="whitespace" style="word-wrap:normal;">Ketua</th>
                <th class="whitespace" style="word-wrap:normal;">Dana yang disetujui</th>
                <th class="whitespace" style="word-wrap:normal;">Dana yang diajukan</th>
                <th class="whitespace" style="word-wrap:normal;">Lama kegiatan (Bulan)</th>
                <th class="whitespace" style="word-wrap:normal;">Status</th>
                <th class="whitespace" style="word-wrap:normal;">Tgl Dibuat</th>
                <th class="whitespace" style="word-wrap:normal;">Tgl Disetujui</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border-b">Surat Keluar</td>
                <td class="border-b">Kontrak Penelitian</td>
                <td class="border-b">Sistem Informasi Manajemen Rumah Sakit</td>
                <td class="border-b">Steve Jobs</td>
                <td class="border-b">5,000,000</td>
                <td class="border-b">5,000,000</td>
                <td class="border-b">3</td>
                <td class="border-b">Selesai</td>
                <td class="border-b">2022-03-27</td>
                <td class="border-b">2022-03-29</td>
            </tr>
            <tr>
                <td class="border-b">Surat Masuk</td>
                <td class="border-b">Institut</td>
                <td class="border-b">Sistem Informasi Manajemen</td>
                <td class="border-b">Mark</td>
                <td class="border-b">4,000,000</td>
                <td class="border-b">4,000,000</td>
                <td class="border-b">3</td>
                <td class="border-b">Diterima</td>
                <td class="border-b">2022-02-17</td>
                <td class="border-b">2022-03-21</td>
            </tr>
            <tr>
                <td class="border-b">Surat Keluar</td>
                <td class="border-b">Kegiatan PKM</td>
                <td class="border-b">Sistem Informasi Manajemen</td>
                <td class="border-b">Steve Jobs</td>
                <td class="border-b">4,000,000</td>
                <td class="border-b">4,000,000</td>
                <td class="border-b">1</td>
                <td class="border-b">Selesai</td>
                <td class="border-b">2022-03-27</td>
                <td class="border-b">2022-03-29</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection