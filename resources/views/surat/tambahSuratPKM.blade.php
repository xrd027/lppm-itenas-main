@extends('template.appSurat')

@section('content')
<div class="col-span-12 mt-8">
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5 mb-5">
            Tambah Surat PKM
        </h2>
    </div>
</div>
<div class="intro-y box">
    <div class="p-5" id="input">
        <div>
            <label>No. Surat</label>
            <input type="text" class="input w-full border mt-2" placeholder="No.surat" readonly>
        </div>
        <div class="mt-3">
            <label>Judul Kegiatan</label>
            <input type="text" class="input w-full border mt-2" placeholder="Judul Kegiatan">
        </div>
        <div class="mt-3">
            <label>Tempat</label>
            <input type="text" class="input w-full border mt-2" placeholder="Tempat">
        </div>
        <div class="mt-3"> <label>Sumber Dana</label>
            <div class="mt-2"> <select class="select2 w-full">
                    <option disabled selected value>Pilih Sumber Dana</option>
                    <option value="1">Mandiri</option>
                    <option value="2">Institut</option>
                </select> </div>
        </div>
        <div class="mt-3"> <label>Ketua Pelaksana</label>
            <div class="mt-2"> <select class="select2 w-full">
                    <option disabled selected value>Pilih Ketua Pelaksana</option>
                    <option value="1">Leonardo DiCaprio</option>
                    <option value="2">Johnny Deep</option>
                    <option value="3">Robert Downey, Jr</option>
                    <option value="4">Samuel L. Jackson</option>
                    <option value="5">Morgan Freeman</option>
                </select> </div>
        </div>
        <div class="mt-3"> <label>Anggota Pelaksana</label>
            <div class="mt-2"> <select class="select2 w-full">
                    <option disabled selected value>Pilih Anggota Pelaksana</option>
                    <option value="1">Leonardo DiCaprio</option>
                    <option value="2">Johnny Deep</option>
                    <option value="3">Robert Downey, Jr</option>
                    <option value="4">Samuel L. Jackson</option>
                    <option value="5">Morgan Freeman</option>
                </select> </div>
        </div>
        <div class="mt-3"> <label>Anggota Pelaksana</label>
            <div class="mt-2"> <select class="select2 w-full">
                    <option disabled selected value>Pilih Anggota Pelaksana</option>
                    <option value="1">Leonardo DiCaprio</option>
                    <option value="2">Johnny Deep</option>
                    <option value="3">Robert Downey, Jr</option>
                    <option value="4">Samuel L. Jackson</option>
                    <option value="5">Morgan Freeman</option>
                </select> </div>
        </div>
        <div class="mt-3" id="inline-form">
            <div class="grid grid-cols-12 gap-2">
                <div class="col-span-4">
                    <label for="">Tanggal Mulai</label>
                    <div class="relative w-full mt-2">
                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"> <i data-feather="calendar" class="w-4 h-4"></i> </div>
                        <input type="text" class="datepicker input pl-12 border pr-0">
                    </div>
                </div>
                <div class="col-span-4">
                    <label for="">Tanggal Selesai</label>
                    <div class="relative w-full mt-2">
                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"> <i data-feather="calendar" class="w-4 h-4"></i> </div>
                        <input type="text" class="datepicker input pl-12 border pr-0">
                    </div>
                </div>
                <div class="col-span-4">
                    <label for="">Tahun</label>
                    <div class="mt-2"> <select class="input border mr-2 w-full">
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                        </select> </div>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <label>Berkas-berkas</label>
        </div>
        <div class="border border-gray-200 rounded-md p-5 mt-3">
            <div class="grid grid-cols-12 gap-2">
                <div class="col-span-4 mt-2">
                    <label for="">Laporan</label>
                    <div data-single="true" action="/file-upload" class="dropzone border-gray-200 border-dashed">
                        <div class="fallback">
                            <input name="file" type="file" />
                        </div>
                        <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Drop files here or click to upload.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection