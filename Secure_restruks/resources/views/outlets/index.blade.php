@extends('layouts.app')

@section('content')
<div class="relative">
  <!-- Page title + Add button -->
  <div class="flex items-center justify-between mb-6">
    <h1 class="text-[22px] font-semibold">Outlets</h1>

    <button
      class="inline-flex items-center gap-2 h-10 px-4 rounded-lg bg-brand-100 text-brand-700 hover:bg-brand-200 border border-brand-200">
      <span class="h-6 w-6 rounded-md bg-brand-500 text-white grid place-items-center text-[16px]">+</span>
      <span class="font-medium">Add Outlet</span>
    </button>
  </div>

  <!-- Cards grid -->
  <div class="grid gap-6 xl:gap-8 md:grid-cols-2">
    {{-- CARD 1 --}}
    <div
      class="bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 rounded-[18px] shadow-[0_8px_24px_rgba(0,0,0,0.04)]">
      <div class="p-6">
        <!-- header -->
        <div class="flex items-start gap-4">
          <div
            class="h-14 w-14 rounded-xl bg-white shadow-[0_6px_18px_rgba(0,0,0,0.06)] grid place-items-center">
            {{-- storefront icon (colored like iRestora) --}}
            <svg viewBox="0 0 64 64" class="h-10 w-10">
              <defs>
                <linearGradient id="roof" x1="0" x2="1">
                  <stop offset="0" stop-color="#f97316"/>
                  <stop offset="1" stop-color="#fb923c"/>
                </linearGradient>
              </defs>
              <rect x="8" y="26" width="48" height="28" rx="2" fill="#ffd7a8"/>
              <rect x="12" y="30" width="18" height="24" rx="2" fill="#fde68a"/>
              <rect x="34" y="30" width="18" height="16" rx="2" fill="#93c5fd"/>
              <rect x="38" y="34" width="10" height="8" rx="1.5" fill="#bfdbfe"/>
              <path d="M6 26h52l-4-12H10L6 26z" fill="url(#roof)"/>
              <rect x="8" y="26" width="48" height="4" fill="#e5e7eb"/>
            </svg>
          </div>
          <div>
            <h2 class="text-[26px] leading-7 font-semibold">Door Soft</h2>
            <p class="text-[15px] text-gray-500">Outlet Code : 000001</p>
          </div>
        </div>

        <div class="my-5 border-t border-gray-200 dark:border-gray-800"></div>

        <!-- details -->
        <div class="space-y-3.5 text-[15px] text-gray-700 dark:text-gray-300">
          <div class="flex items-start gap-3">
            <svg viewBox="0 0 24 24" class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.7">
              <path d="M12 21s-7-4.5-7-10a7 7 0 1 1 14 0c0 5.5-7 10-7 10z"/><circle cx="12" cy="11" r="3"/>
            </svg>
            <p>Address: House No: 5, Road No: 4, Nikunja 2, Khilkhet, Dhaka.</p>
          </div>
          <div class="flex items-center gap-3">
            <svg viewBox="0 0 24 24" class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.7">
              <path d="M22 16.92V21a1 1 0 0 1-1.09 1 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 3 3.09 1 1 0 0 1 4 2h4.09A1 1 0 0 1 9 2.72l1.2 2.73a1 1 0 0 1-.27 1.18L8.91 7.91a16 16 0 0 0 6 6l1.28-1a1 1 0 0 1 1.18-.27L20 14.91a1 1 0 0 1 .57.9z"/>
            </svg>
            <p>Phone: +923065305216</p>
          </div>
          <div class="flex items-center gap-3">
            <svg viewBox="0 0 24 24" class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.7">
              <path d="M4 4h16v16H4z"/><path d="M22 6l-10 7L2 6"/>
            </svg>
            <p>Email: info@doorsoft.co</p>
          </div>
        </div>

        <!-- actions -->
        <div class="mt-6 flex items-center gap-3">
          <button
            class="h-10 px-5 rounded-lg bg-brand-600 text-white hover:bg-brand-700 flex items-center gap-2">
            <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.9">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
            Enter
          </button>
          <button
            class="h-10 px-5 rounded-lg bg-brand-600 text-white hover:bg-brand-700 flex items-center gap-2">
            <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.9">
              <path d="M12 20h9"/><path d="M16.5 3.5a2.1 2.1 0 1 1 3 3L7 19l-4 1 1-4 12.5-12.5z"/>
            </svg>
            Edit
          </button>
          <button
            class="ml-auto h-10 px-5 rounded-lg bg-red-500 hover:bg-red-600 text-white flex items-center gap-2">
            <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.9">
              <path d="M3 6h18M8 6V4h8v2m-1 0v14a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6"/>
            </svg>
            Delete
          </button>
        </div>
      </div>
    </div>

    {{-- CARD 2 --}}
    <div
      class="bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 rounded-[18px] shadow-[0_8px_24px_rgba(0,0,0,0.04)]">
      <div class="p-6">
        <div class="flex items-start gap-4">
          <div
            class="h-14 w-14 rounded-xl bg-white shadow-[0_6px_18px_rgba(0,0,0,0.06)] grid place-items-center">
            <svg viewBox="0 0 64 64" class="h-10 w-10">
              <defs>
                <linearGradient id="roof2" x1="0" x2="1">
                  <stop offset="0" stop-color="#f97316"/>
                  <stop offset="1" stop-color="#fb923c"/>
                </linearGradient>
              </defs>
              <rect x="8" y="26" width="48" height="28" rx="2" fill="#ffd7a8"/>
              <rect x="12" y="30" width="18" height="24" rx="2" fill="#fde68a"/>
              <rect x="34" y="30" width="18" height="16" rx="2" fill="#93c5fd"/>
              <rect x="38" y="34" width="10" height="8" rx="1.5" fill="#bfdbfe"/>
              <path d="M6 26h52l-4-12H10L6 26z" fill="url(#roof2)"/>
              <rect x="8" y="26" width="48" height="4" fill="#e5e7eb"/>
            </svg>
          </div>
          <div>
            <h2 class="text-[26px] leading-7 font-semibold">KFC Zone</h2>
            <p class="text-[15px] text-gray-500">Outlet Code : 000002</p>
          </div>
        </div>

        <div class="my-5 border-t border-gray-200 dark:border-gray-800"></div>

        <div class="space-y-3.5 text-[15px] text-gray-700 dark:text-gray-300">
          <div class="flex items-start gap-3">
            <svg viewBox="0 0 24 24" class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.7">
              <path d="M12 21s-7-4.5-7-10a7 7 0 1 1 14 0c0 5.5-7 10-7 10z"/><circle cx="12" cy="11" r="3"/>
            </svg>
            <p>Address: 328 Bobcat Drive, Washington, United States</p>
          </div>
          <div class="flex items-center gap-3">
            <svg viewBox="0 0 24 24" class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.7">
              <path d="M22 16.92V21a1 1 0 0 1-1.09 1 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 3 3.09 1 1 0 0 1 4 2h4.09A1 1 0 0 1 9 2.72l1.2 2.73a1 1 0 0 1-.27 1.18L8.91 7.91a16 16 0 0 0 6 6l1.28-1a1 1 0 0 1 1.18-.27L20 14.91a1 1 0 0 1 .57.9z"/>
            </svg>
            <p>Phone: 7895478</p>
          </div>
          <div class="flex items-center gap-3">
            <svg viewBox="0 0 24 24" class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.7">
              <path d="M4 4h16v16H4z"/><path d="M22 6l-10 7L2 6"/>
            </svg>
            <p>Email:</p>
          </div>
        </div>

        <div class="mt-6 flex items-center gap-3">
          <button
            class="h-10 px-5 rounded-lg bg-brand-600 text-white hover:bg-brand-700 flex items-center gap-2">
            <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.9">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
            Enter
          </button>
          <button
            class="h-10 px-5 rounded-lg bg-brand-600 text-white hover:bg-brand-700 flex items-center gap-2">
            <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.9">
              <path d="M12 20h9"/><path d="M16.5 3.5a2.1 2.1 0 1 1 3 3L7 19l-4 1 1-4 12.5-12.5z"/>
            </svg>
            Edit
          </button>
          <button
            class="ml-auto h-10 px-5 rounded-lg bg-red-500 hover:bg-red-600 text-white flex items-center gap-2">
            <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.9">
              <path d="M3 6h18M8 6V4h8v2m-1 0v14a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6"/>
            </svg>
            Delete
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
