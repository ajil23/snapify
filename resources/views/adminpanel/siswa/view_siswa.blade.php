@extends('admin.admin_master') 
@section('admin')
<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
  
      <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
        <h6 class="mb-0 font-bold text-blue-500 capitalize">Siswa</h6>
        <div class="flex items-center md:ml-auto md:pr-4">
         
        </div>
        <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
          <!-- online builder btn  -->
          <!-- <li class="flex items-center">
            <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center text-blue-500 uppercase align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer leading-pro hover:-translate-y-px active:shadow-xs hover:border-blue-500 active:bg-blue-500 active:hover:text-blue-500 hover:text-blue-500 tracking-tight-rem hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
          </li> -->
          <li class="flex items-center">
            <a href="./pages/sign-in.html" class="block px-0 py-2 text-sm font-semibold text-blue-500 transition-all ease-nav-brand">
              <i class="fa fa-user sm:mr-1"></i>
              <span class="hidden sm:inline">{{Auth::user()->name}}</span>
            </a>
          </li>
          <li class="flex items-center pl-4 xl:hidden">
            <a href="javascript:;" class="block p-0 text-sm text-blue-500 transition-all ease-nav-brand" sidenav-trigger>
              <div class="w-4.5 overflow-hidden">
                <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-blue-500 transition-all"></i>
                <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-blue-500 transition-all"></i>
                <i class="ease relative block h-0.5 rounded-sm bg-blue-500 transition-all"></i>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="w-full px-6 py-6 mx-auto">
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
     <h1>Ini Adalah Halaman Siswa</h1>
    </div>
  
    @include('admin.components.footer')
  
  </div>
@endsection