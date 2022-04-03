@extends('template.appSurat')

@section('content')

<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">

        <div class="col-span-12 mt-8">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Dashboard
                </h2>
            </div>
            <div class="grid grid-cols-12 gap-12 mt-5">
                <div class="col-span-12 md:col-span-4 md:col-span-3 intro-y">
                    <div class="box p-5 zoom-in">
                        <div class="grid grid-cols-12">
                            <div class="col-span-4 xl:col-span-12 sm:col-span-4 flex items-center">
                                <i class="fa-solid fa-envelope text-grey-400 text-5xl xl:text-3xl ml-4"></i>
                                <h2 class="text-lg font-medium truncate ml-5">Surat Masuk</h2>
                            </div>
                            <div class="col-span-8 xl:col-span-12 sm:col-span-8">
                                <div class="text-3xl text-right font-bold leading-8 mt-6 mr-4">4</div>
                                <div class="text-base text-right text-gray-600 mt-1 mr-4">Surat</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-4 md:col-span-3 intro-y">
                    <div class="box p-5 zoom-in">
                        <div class="grid grid-cols-12">
                            <div class="col-span-4 xl:col-span-12 sm:col-span-4 flex items-center">
                                <i class="fa-solid fa-envelope-open text-grey-400 text-5xl xl:text-3xl ml-4"></i>
                                <h2 class="text-lg font-medium truncate ml-5">Surat Keluar</h2>
                            </div>
                            <div class="col-span-8 xl:col-span-12 sm:col-span-8">
                                <div class="text-3xl text-right font-bold leading-8 mt-6 mr-4">9</div>
                                <div class="text-base text-right text-gray-600 mt-1 mr-4">Surat</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-4 md:col-span-4 intro-y items-stretch">
                    <div class="box p-12 zoom-in">
                        <div class="grid grid-cols-none">
                            <div class="col-span-2 xl:col-span-12 sm:col-span-4 flex items-stretch">
                                <i class="fa-solid fa-circle-plus text-grey-400 text-5xl xl:text-3xl py-3"></i>
                                <h2 class="text-lg font-medium truncate mt-3 ml-5">Tambah Surat</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection