@extends('layouts.tailadmin')

@section('title', 'Basic Tables')
@section('data', "{ page: 'basicTables', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }")

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
            <div x-data="{ pageName: `Basic Tables`}">
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
                <div class="px-5 py-4 sm:px-6 sm:py-5">
                  <h3
                    class="text-base font-medium text-gray-800 dark:text-white/90"
                  >
                    Basic Table 1
                  </h3>
                </div>
                <div
                  class="p-5 border-t border-gray-100 dark:border-gray-800 sm:p-6"
                >
                  <!-- ====== Table Six Start -->
                  <div
  class="overflow-hidden rounded-xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
>
  <div class="max-w-full overflow-x-auto">
    <table class="min-w-full">
      <!-- table header start -->
      <thead>
        <tr class="border-b border-gray-100 dark:border-gray-800">
          <th class="px-5 py-3 sm:px-6">
            <div class="flex items-center">
              <p
                class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
              >
                User
              </p>
            </div>
          </th>
          <th class="px-5 py-3 sm:px-6">
            <div class="flex items-center">
              <p
                class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
              >
                Project Name
              </p>
            </div>
          </th>
          <th class="px-5 py-3 sm:px-6">
            <div class="flex items-center">
              <p
                class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
              >
                Team
              </p>
            </div>
          </th>
          <th class="px-5 py-3 sm:px-6">
            <div class="flex items-center">
              <p
                class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
              >
                Status
              </p>
            </div>
          </th>
          <th class="px-5 py-3 sm:px-6">
            <div class="flex items-center">
              <p
                class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
              >
                Budget
              </p>
            </div>
          </th>
        </tr>
      </thead>
      <!-- table header end -->
      <!-- table body start -->
      <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
        <tr>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 overflow-hidden rounded-full">
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-17.jpg" alt="brand" />
                </div>

                <div>
                  <span
                    class="block font-medium text-gray-800 text-theme-sm dark:text-white/90"
                  >
                    Lindsey Curtis
                  </span>
                  <span
                    class="block text-gray-500 text-theme-xs dark:text-gray-400"
                  >
                    Web Designer
                  </span>
                </div>
              </div>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                Agency Website
              </p>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <div class="flex -space-x-2">
                <div
                  class="w-6 h-6 overflow-hidden border-2 border-white rounded-full dark:border-gray-900"
                >
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-22.jpg" alt="user" />
                </div>
                <div
                  class="w-6 h-6 overflow-hidden border-2 border-white rounded-full dark:border-gray-900"
                >
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-23.jpg" alt="user" />
                </div>
                <div
                  class="w-6 h-6 overflow-hidden border-2 border-white rounded-full dark:border-gray-900"
                >
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-24.jpg" alt="user" />
                </div>
              </div>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <p
                class="rounded-full bg-success-50 px-2 py-0.5 text-theme-xs font-medium text-success-700 dark:bg-success-500/15 dark:text-success-500"
              >
                Active
              </p>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <p class="text-gray-500 text-theme-sm dark:text-gray-400">3.9K</p>
            </div>
          </td>
        </tr>
        <tr>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 overflow-hidden rounded-full">
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-18.jpg" alt="brand" />
                </div>

                <div>
                  <span
                    class="block font-medium text-gray-800 text-theme-sm dark:text-white/90"
                  >
                    Kaiya George
                  </span>
                  <span
                    class="block text-gray-500 text-theme-xs dark:text-gray-400"
                  >
                    Project Manager
                  </span>
                </div>
              </div>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                Technology
              </p>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <div class="flex -space-x-2">
                <div
                  class="w-6 h-6 overflow-hidden border-2 border-white rounded-full dark:border-gray-900"
                >
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-25.jpg" alt="user" />
                </div>
                <div
                  class="w-6 h-6 overflow-hidden border-2 border-white rounded-full dark:border-gray-900"
                >
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-26.jpg" alt="user" />
                </div>
              </div>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <p
                class="rounded-full bg-warning-50 px-2 py-0.5 text-theme-xs font-medium text-warning-700 dark:bg-warning-500/15 dark:text-warning-400"
              >
                Pending
              </p>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                24.9K
              </p>
            </div>
          </td>
        </tr>
        <tr>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 overflow-hidden rounded-full">
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-19.jpg" alt="brand" />
                </div>

                <div>
                  <span
                    class="block font-medium text-gray-800 text-theme-sm dark:text-white/90"
                  >
                    Zain Geidt
                  </span>
                  <span
                    class="block text-gray-500 text-theme-xs dark:text-gray-400"
                  >
                    Content Writer
                  </span>
                </div>
              </div>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                Blog Writing
              </p>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <div class="flex -space-x-2">
                <div
                  class="w-6 h-6 overflow-hidden border-2 border-white rounded-full dark:border-gray-900"
                >
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-27.jpg" alt="user" />
                </div>
              </div>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <p
                class="rounded-full bg-success-50 px-2 py-0.5 text-theme-xs font-medium text-success-700 dark:bg-success-500/15 dark:text-success-500"
              >
                Active
              </p>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                12.7K
              </p>
            </div>
          </td>
        </tr>
        <tr>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 overflow-hidden rounded-full">
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-20.jpg" alt="brand" />
                </div>

                <div>
                  <span
                    class="block font-medium text-gray-800 text-theme-sm dark:text-white/90"
                  >
                    Abram Schleifer
                  </span>
                  <span
                    class="block text-gray-500 text-theme-xs dark:text-gray-400"
                  >
                    Digital Marketer
                  </span>
                </div>
              </div>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                Social Media
              </p>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <div class="flex -space-x-2">
                <div
                  class="w-6 h-6 overflow-hidden border-2 border-white rounded-full dark:border-gray-900"
                >
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-28.jpg" alt="user" />
                </div>
                <div
                  class="w-6 h-6 overflow-hidden border-2 border-white rounded-full dark:border-gray-900"
                >
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-29.jpg" alt="user" />
                </div>
                <div
                  class="w-6 h-6 overflow-hidden border-2 border-white rounded-full dark:border-gray-900"
                >
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-30.jpg" alt="user" />
                </div>
              </div>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <p
                class="rounded-full bg-error-50 px-2 py-0.5 text-theme-xs font-medium text-error-700 dark:bg-error-500/15 dark:text-error-500"
              >
                Cancel
              </p>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <p class="text-gray-500 text-theme-sm dark:text-gray-400">2.8K</p>
            </div>
          </td>
        </tr>
        <tr>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 overflow-hidden rounded-full">
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-21.jpg" alt="brand" />
                </div>

                <div>
                  <span
                    class="block font-medium text-gray-800 text-theme-sm dark:text-white/90"
                  >
                    Carla George
                  </span>
                  <span
                    class="block text-gray-500 text-theme-xs dark:text-gray-400"
                  >
                    Front-end Developer
                  </span>
                </div>
              </div>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                Website
              </p>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <div class="flex -space-x-2">
                <div
                  class="w-6 h-6 overflow-hidden border-2 border-white rounded-full dark:border-gray-900"
                >
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-31.jpg" alt="user" />
                </div>
                <div
                  class="w-6 h-6 overflow-hidden border-2 border-white rounded-full dark:border-gray-900"
                >
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-32.jpg" alt="user" />
                </div>
                <div
                  class="w-6 h-6 overflow-hidden border-2 border-white rounded-full dark:border-gray-900"
                >
                  <img src="{{asset('template/tailadmin/src')}}/images/user/user-33.jpg" alt="user" />
                </div>
              </div>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <p
                class="rounded-full bg-success-50 px-2 py-0.5 text-theme-xs font-medium text-success-700 dark:bg-success-500/15 dark:text-success-500"
              >
                Active
              </p>
            </div>
          </td>
          <td class="px-5 py-4 sm:px-6">
            <div class="flex items-center">
              <p class="text-gray-500 text-theme-sm dark:text-gray-400">4,5K</p>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- ====== Table Six End -->
                </div>
              </div>
            </div>
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
    
    </div>
    <!-- ===== Content Area End ===== -->
    
    <!-- BEGIN MODAL -->
    <div
  x-show="isProfileInfoModal"
  class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999"
>
  <div
    class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"
  ></div>
  <div
    @click.outside="isProfileInfoModal = false"
    class="no-scrollbar relative w-full max-w-[700px] overflow-y-auto rounded-3xl bg-white p-4 dark:bg-gray-900 lg:p-11"
  >
    <!-- close btn -->
    <button
      @click="isProfileInfoModal = false"
      class="transition-color absolute right-5 top-5 z-999 flex h-11 w-11 items-center justify-center rounded-full bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-gray-600 dark:bg-gray-700 dark:bg-white/[0.05] dark:text-gray-400 dark:hover:bg-white/[0.07] dark:hover:text-gray-300"
    >
      <svg
        class="fill-current"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M6.04289 16.5418C5.65237 16.9323 5.65237 17.5655 6.04289 17.956C6.43342 18.3465 7.06658 18.3465 7.45711 17.956L11.9987 13.4144L16.5408 17.9565C16.9313 18.347 17.5645 18.347 17.955 17.9565C18.3455 17.566 18.3455 16.9328 17.955 16.5423L13.4129 12.0002L17.955 7.45808C18.3455 7.06756 18.3455 6.43439 17.955 6.04387C17.5645 5.65335 16.9313 5.65335 16.5408 6.04387L11.9987 10.586L7.45711 6.04439C7.06658 5.65386 6.43342 5.65386 6.04289 6.04439C5.65237 6.43491 5.65237 7.06808 6.04289 7.4586L10.5845 12.0002L6.04289 16.5418Z"
          fill=""
        />
      </svg>
    </button>
    <div class="px-2 pr-14">
      <h4 class="mb-2 text-2xl font-semibold text-gray-800 dark:text-white/90">
        Edit Personal Information
      </h4>
      <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">
        Update your details to keep your profile up-to-date.
      </p>
    </div>
    <form class="flex flex-col">
      <div class="custom-scrollbar h-[450px] overflow-y-auto px-2">
        <div>
          <h5
            class="mb-5 text-lg font-medium text-gray-800 dark:text-white/90 lg:mb-6"
          >
            Social Links
          </h5>

          <div class="grid grid-cols-1 gap-x-6 gap-y-5 lg:grid-cols-2">
            <div>
              <label
                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
              >
                Facebook
              </label>
              <input
                type="text"
                value="https://facebook.com/PimjoHQ"
                class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
              />
            </div>

            <div>
              <label
                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
              >
                X.com
              </label>
              <input
                type="text"
                value="https://x.com/PimjoHQ"
                class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
              />
            </div>

            <div>
              <label
                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
              >
                Linkedin
              </label>
              <input
                type="text"
                value="https://linkedin.com/PimjoHQ"
                class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
              />
            </div>

            <div>
              <label
                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
              >
                Instagram
              </label>
              <input
                type="text"
                value="https://instagram.com/PimjoHQ"
                class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
              />
            </div>
          </div>
        </div>
        <div class="mt-7">
          <h5
            class="mb-5 text-lg font-medium text-gray-800 dark:text-white/90 lg:mb-6"
          >
            Personal Information
          </h5>

          <div class="grid grid-cols-1 gap-x-6 gap-y-5 lg:grid-cols-2">
            <div class="col-span-2 lg:col-span-1">
              <label
                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
              >
                First Name
              </label>
              <input
                type="text"
                value="Musharof"
                class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
              />
            </div>

            <div class="col-span-2 lg:col-span-1">
              <label
                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
              >
                Last Name
              </label>
              <input
                type="text"
                value="Chowdhury"
                class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
              />
            </div>

            <div class="col-span-2 lg:col-span-1">
              <label
                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
              >
                Email Address
              </label>
              <input
                type="text"
                value="randomuser@pimjo.com"
                class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
              />
            </div>

            <div class="col-span-2 lg:col-span-1">
              <label
                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
              >
                Phone
              </label>
              <input
                type="text"
                value="+09 363 398 46"
                class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
              />
            </div>

            <div class="col-span-2">
              <label
                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
              >
                Bio
              </label>
              <input
                type="text"
                value="Team Manager"
                class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="flex items-center gap-3 px-2 mt-6 lg:justify-end">
        <button
          @click="isProfileInfoModal = false"
          type="button"
          class="flex w-full justify-center rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] sm:w-auto"
        >
          Close
        </button>
        <button
          type="button"
          class="flex w-full justify-center rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600 sm:w-auto"
        >
          Save Changes
        </button>
      </div>
    </form>
  </div>
    </div>
    <div
  x-show="isProfileAddressModal"
  class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999"
>
  <div
    class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"
  ></div>
  <div
    @click.outside="isProfileAddressModal = false"
    class="no-scrollbar relative flex w-full max-w-[700px] flex-col overflow-y-auto rounded-3xl bg-white p-6 dark:bg-gray-900 lg:p-11"
  >
    <!-- close btn -->
    <button
      @click="isProfileAddressModal = false"
      class="transition-color absolute right-5 top-5 z-999 flex h-11 w-11 items-center justify-center rounded-full bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-gray-600 dark:bg-gray-700 dark:bg-white/[0.05] dark:text-gray-400 dark:hover:bg-white/[0.07] dark:hover:text-gray-300"
    >
      <svg
        class="fill-current"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M6.04289 16.5418C5.65237 16.9323 5.65237 17.5655 6.04289 17.956C6.43342 18.3465 7.06658 18.3465 7.45711 17.956L11.9987 13.4144L16.5408 17.9565C16.9313 18.347 17.5645 18.347 17.955 17.9565C18.3455 17.566 18.3455 16.9328 17.955 16.5423L13.4129 12.0002L17.955 7.45808C18.3455 7.06756 18.3455 6.43439 17.955 6.04387C17.5645 5.65335 16.9313 5.65335 16.5408 6.04387L11.9987 10.586L7.45711 6.04439C7.06658 5.65386 6.43342 5.65386 6.04289 6.04439C5.65237 6.43491 5.65237 7.06808 6.04289 7.4586L10.5845 12.0002L6.04289 16.5418Z"
          fill=""
        />
      </svg>
    </button>

    <div class="px-2 pr-14">
      <h4 class="mb-2 text-2xl font-semibold text-gray-800 dark:text-white/90">
        Edit Address
      </h4>
      <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">
        Update your details to keep your profile up-to-date.
      </p>
    </div>
    <form class="flex flex-col">
      <div class="px-2 overflow-y-auto custom-scrollbar">
        <div class="grid grid-cols-1 gap-x-6 gap-y-5 lg:grid-cols-2">
          <div>
            <label
              class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
            >
              Country
            </label>
            <input
              type="text"
              value="United States"
              class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
            />
          </div>

          <div>
            <label
              class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
            >
              City/State
            </label>
            <input
              type="text"
              value="Arizona, United States"
              class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
            />
          </div>

          <div>
            <label
              class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
            >
              Postal Code
            </label>
            <input
              type="text"
              value="ERT 2489"
              class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
            />
          </div>

          <div>
            <label
              class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
            >
              TAX ID
            </label>
            <input
              type="text"
              value="AS4568384"
              class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
            />
          </div>
        </div>
      </div>
      <div class="flex items-center gap-3 mt-6 lg:justify-end">
        <button
          @click="isProfileAddressModal = false"
          type="button"
          class="flex w-full justify-center rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] sm:w-auto"
        >
          Close
        </button>
        <button
          type="button"
          class="flex w-full justify-center rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600 sm:w-auto"
        >
          Save Changes
        </button>
      </div>
    </form>
  </div>
    </div>
    <!-- END MODAL -->
@endsection

@push('styles')

@endpush

@push('scripts')

@endpush


