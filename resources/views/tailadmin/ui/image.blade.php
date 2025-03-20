@extends('layouts.tailadmin')

@section('title', 'Images')
@section('data', "{ page: 'images', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }")

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
            <div x-data="{ pageName: `Images`}">
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

            <div class="space-y-5 sm:space-y-6">
              <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
              >
                <div class="px-6 py-5">
                  <h3
                    class="text-base font-medium text-gray-800 dark:text-white/90"
                  >
                    Responsive image
                  </h3>
                </div>
                <div
                  class="p-4 border-t border-gray-100 dark:border-gray-800 sm:p-6"
                >
                  <div class="relative">
  <div id="pane" class="overflow-hidden">
    <img
      src="{{asset('template/tailadmin/src')}}/images/grid-image/image-01.png"
      alt="Cover"
      class="w-full rounded-xl border border-gray-200 dark:border-gray-800"
    />
  </div>
  <div
    id="ghostpane"
    class="absolute left-0 top-0 duration-300 ease-in-out"
  ></div>
</div>
</div>
              </div>

              <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
              >
                <div class="px-6 py-5">
                  <h3
                    class="text-base font-medium text-gray-800 dark:text-white/90"
                  >
                    Image in 2 Grid
                  </h3>
                </div>
                <div
                  class="p-4 border-t border-gray-100 dark:border-gray-800 sm:p-6"
                >
                  <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
  <div>
    <img
      src="{{asset('template/tailadmin/src')}}/images/grid-image/image-02.png"
      alt="image grid"
      class="rounded-xl border border-gray-200 dark:border-gray-800"
    />
  </div>

  <div>
    <img
      src="{{asset('template/tailadmin/src')}}/images/grid-image/image-03.png"
      alt="image grid"
      class="rounded-xl border border-gray-200 dark:border-gray-800"
    />
  </div>
</div>
</div>
              </div>

              <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
              >
                <div class="px-6 py-5">
                  <h3
                    class="text-base font-medium text-gray-800 dark:text-white/90"
                  >
                    Image in 3 Grid
                  </h3>
                </div>
                <div
                  class="p-4 border-t border-gray-100 dark:border-gray-800 sm:p-6"
                >
                  <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3">
  <div>
    <img
      src="{{asset('template/tailadmin/src')}}/images/grid-image/image-04.png"
      alt="image grid"
      class="rounded-xl border border-gray-200 dark:border-gray-800"
    />
  </div>

  <div>
    <img
      src="{{asset('template/tailadmin/src')}}/images/grid-image/image-05.png"
      alt="image grid"
      class="rounded-xl border border-gray-200 dark:border-gray-800"
    />
  </div>

  <div>
    <img
      src="{{asset('template/tailadmin/src')}}/images/grid-image/image-06.png"
      alt="image grid"
      class="rounded-xl border border-gray-200 dark:border-gray-800"
    />
  </div>
</div>
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


