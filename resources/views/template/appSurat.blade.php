<!DOCTYPE html>
<html lang="en">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@isset($title){{$title}} -@endisset LP2M ITENAS</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('dist/css/appSurat.css') }} " />
    <link rel="stylesheet" href="{{ asset('dist/css/fontawesome/css/all.min.css') }}">
    @yield('csslib')
    @yield('custom-css')
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="app">
    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img alt="LP2M ITENAS" class="w-6" src="{{ asset('logo-itenas.svg') }}">
            </a>
            <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <ul class="border-t border-theme-2 py-5 hidden">
            <li>
                <a href="index.html" class="menu menu--active">
                    <div class="menu__icon"> <i data-feather="home"></i> </div>
                    <div class="menu__title"> Dashboard </div>
                </a>
            </li>
            <li>
                <a href="side-menu-inbox.html" class="menu">
                    <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                    <div class="menu__title"> Surat Masuk </div>
                </a>
            </li>
            <li>
                <a href="side-menu-file-manager.html" class="menu">
                    <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                    <div class="menu__title"> Surat Keluar </div>
                </a>
            </li>
            <li>
                <a href="tambahSurat" class="menu">
                    <div class="side-menu__icon"> <i data-feather="plus-circle"></i> </div>
                    <div class="side-menu__title"> Tambah Surat </div>
                </a>
            </li>
            <li>
                <a href="transaksiSurat" class="menu">
                    <div class="side-menu__icon"> <i data-feather="archive"></i> </div>
                    <div class="side-menu__title"> Transaksi Surat </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- END: Mobile Menu -->
    <div class="flex">
        <!-- BEGIN: Side Menu -->
        <nav class="side-nav">
            <a href="" class="intro-x flex items-center pl-5 pt-4">
                <img alt="LP2M" class="w-6" src="{{asset('logo-itenas.svg') }}">
                <span class="hidden xl:block text-black font-medium text-lg ml-3"><span class="font-bold text-white">LP2M </span>itenas</span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                <li>
                    <a href="dashboardSurat" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                        <div class="side-menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="suratMasuk" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="side-menu__title"> Surat Masuk </div>
                    </a>
                </li>
                <li>
                    <a href="suratKeluar" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="mail"></i> </div>
                        <div class="side-menu__title"> Surat Keluar </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="plus-circle"></i> </div>
                        <div class="side-menu__title"> Tambah Surat <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="tambahSuratPKM" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="side-menu__title"> PKM </div>
                            </a>
                        </li>
                        <li>
                            <a href="tambahSuratPenelitian" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="side-menu__title"> Kontrak Penelitian </div>
                            </a>
                        </li>
                        <li>
                            <a href="tambahSuratHAKI" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="side-menu__title"> HAKI </div>
                            </a>
                        </li>
                        <li>
                            <a href="tambahSuratUndangan" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="side-menu__title"> Undangan </div>
                            </a>
                        </li>
                        <li>
                            <a href="tambahSuratTugas" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="side-menu__title"> Tugas </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="tambahSurat" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="plus-circle"></i> </div>
                        <div class="side-menu__title"> Tambah Surat </div>
                    </a>
                </li> -->
                <li>
                    <a href="transaksiSurat" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="archive"></i> </div>
                        <div class="side-menu__title"> Transaksi Surat </div>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto hidden sm:flex">
                    <p>Sistem Informasi Lembaga Penelitian dan Pengabdian kepada Masyarakat</p>
                </div>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Notifications -->
                <div class="intro-x dropdown relative mr-auto sm:mr-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon"></i> </div>
                    <div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 sm:ml-0">
                        <div class="notification-content__box dropdown-box__content box">
                            <div class="notification-content__title">Notifications</div>
                            <div class="cursor-pointer relative flex items-center ">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Angelina Jolie</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-14.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                                    <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Edward Norton</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8 relative">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                        <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                    </div>
                    <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                        <div class="dropdown-box__content box bg-theme-1 text-white">
                            <div class="p-4 border-b border-theme-2">
                                <div class="font-medium">Angelina Jolie</div>
                                <div class="text-xs text-theme-2">Software Engineer</div>
                            </div>
                            <div class="p-2">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                            </div>
                            <div class="p-2 border-t border-theme-2">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
            <!-- END: Top Bar -->

            @yield('content')

        </div>
        <!-- END: Content -->
    </div>
    <!-- BEGIN: JS Assets-->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
    <script src="dist/js/app.js"></script>
    <!-- END: JS Assets-->
    @yield('lib-script')
    @yield('page-script')
    @yield('line-script')
</body>

</html>