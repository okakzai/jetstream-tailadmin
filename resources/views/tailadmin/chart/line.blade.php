@extends('layouts.tailadmin')

@section('title', 'Line Chart')
@section('data', "{ page: 'lineChart', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }")

@section('content')
    @include('tailadmin.sidebar')
    <!-- ===== Content Area Start ===== -->
    <div
        class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto"
    >
    @include('tailadmin.topbar')

        <!-- ===== Main Content Start ===== -->
        <main>
          <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
            <!-- Breadcrumb Start -->
            <div x-data="{ pageName: `Line Chart`}">
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

            <div class="space-y-6">
              <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
              >
                <div class="px-6 py-5">
                  <h3
                    class="text-base font-medium text-gray-800 dark:text-white/90"
                  >
                    Line Chart 1
                  </h3>
                </div>
                <div
                  class="p-5 border-t border-gray-100 dark:border-gray-800 sm:p-6"
                >
                  <!-- ====== Line Chart One Start -->
                  <div class="max-w-full overflow-x-auto custom-scrollbar">
                    <div id="chartThree" class="min-w-[1000px]"></div>
                  </div>
                  <!-- ====== Line Chart One End -->
                </div>
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


