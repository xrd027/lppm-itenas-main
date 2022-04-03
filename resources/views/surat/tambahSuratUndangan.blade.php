@extends('template.appSurat')

@section('content')
<div class="col-span-12 mt-8">
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5 mb-5">
            Tambah Surat Undangan
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
            <label>Agenda</label>
            <input type="text" class="input w-full border mt-2" placeholder="Agenda Kegiatan">
        </div>
        <div class="mt-3"> <label>Tempat</label>
            <div class="mt-2"> <select class="select2 w-full">
                    <option disabled selected value>Pilih Tempat</option>
                    <option value="1">15220 - Ruang Rapat 1</option>
                    <option value="2">15221 - Ruang Rapat 2</option>
                    <option value="3">15222 - Ruang Rapat 3</option>
                </select> </div>
        </div>
        <div class="mt-3"> <label>Anggota Pelaksana</label>
            <select data-placeholder="Pilih Anggota" class="select2 w-full" multiple>
                <option value="1">Leonardo DiCaprio</option>
                <option value="2">Johnny Deep</option>
                <option value="3">Robert Downey, Jr</option>
                <option value="4">Samuel L. Jackson</option>
                <option value="5">Morgan Freeman</option>
            </select>
        </div>
        <div class="mt-3" id="inline-form">
            <div class="grid grid-cols-12 gap-2">
                <div class="col-span-4">
                    <label for="">Tanggal Mulai</label>
                    <div class="relative w-full mt-2">
                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"> <i data-feather="calendar" class="w-4 h-4"></i> </div>
                        <input data-timepicker="true" class="datepicker input w-56 border block mx-auto">
                    </div>
                </div>
                <div class="col-span-4">
                    <label for="">Tanggal Selesai</label>
                    <div class="relative w-full mt-2">
                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"> <i data-feather="calendar" class="w-4 h-4"></i> </div>
                        <input data-timepicker="true" class="datepicker input w-56 border block mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection