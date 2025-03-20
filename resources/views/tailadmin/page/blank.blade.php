@extends('layouts.tailadmin')

@section('title', 'Blank Page')
@section('data', "{ page: 'blank', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }")

@section('content')
    @include('tailadmin.sidebar')
    <!-- ===== Content Area Start ===== -->
    <div
        class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto"
    >
        @include('tailadmin.topbar')

        <!-- ===== Main Content Start ===== -->
        <main>
          <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
            <!-- Breadcrumb Start -->
            <div x-data="{ pageName: `Blank Page`}">
              <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
  <h2
    class="text-xl font-semibold text-gray-800 dark:text-white/90"
    x-text="pageName"
  ></h2>

  <nav>
    <ol class="flex items-center gap-1.5">
      <li>
        <a
          class="inline-flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400"
          href="{{url('/dashboard')}}"
        >
          Home
          <svg
            class="stroke-current"
            width="17"
            height="16"
            viewBox="0 0 17 16"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366"
              stroke=""
              stroke-width="1.2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </a>
      </li>
      <li
        class="text-sm text-gray-800 dark:text-white/90"
        x-text="pageName"
      ></li>
    </ol>
  </nav>
</div>
</div>
            <!-- Breadcrumb End -->

            <div
              class="min-h-screen rounded-2xl border border-gray-200 bg-white px-5 py-7 dark:border-gray-800 dark:bg-white/[0.03] xl:px-10 xl:py-12"
            >
              <div class="mx-auto w-full max-w-[630px] text-center">
                <h3
                  class="mb-4 text-theme-xl font-semibold text-gray-800 dark:text-white/90 sm:text-2xl"
                >
                  Card Title Here
                </h3>

                <p
                  class="text-sm text-gray-500 dark:text-gray-400 sm:text-base"
                >
                  Start putting content on grids or panels, you can also use
                  different combinations of grids. Please check out the
                  dashboard and other pages
                </p>
              </div>
            </div>
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
    
    </div>
    <!-- ===== Content Area End ===== -->
 
@endsection

@push('styles')

@endpush

@push('scripts')

@endpush


