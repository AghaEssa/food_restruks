@extends('layouts.app')

@section('content')
<div class="space-y-4">
  <div class="flex items-center justify-between">
    <h1 class="text-[22px] font-semibold">Add Outlet</h1>
  </div>

  <div class="bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 rounded-xl">
    <div class="p-6">
      {{-- Top row of 4 inputs --}}
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        {{-- Outlet Code --}}
        <div>
          <label class="block text-sm font-medium mb-1">Outlet Code <span class="text-red-500">*</span></label>
          <input type="text" value="000003"
                 class="w-full h-11 rounded-lg border border-gray-300 focus:border-brand-500 focus:ring-0 px-3 bg-white dark:bg-gray-900">
        </div>

        {{-- Outlet Name --}}
        <div>
          <label class="block text-sm font-medium mb-1">Outlet Name <span class="text-red-500">*</span></label>
          <input type="text" placeholder="Outlet Name"
                 class="w-full h-11 rounded-lg border border-gray-300 focus:border-brand-500 focus:ring-0 px-3 bg-white dark:bg-gray-900">
        </div>

        {{-- Phone --}}
        <div>
          <label class="block text-sm font-medium mb-1">Phone <span class="text-red-500">*</span></label>
          <input type="text" placeholder="Phone"
                 class="w-full h-11 rounded-lg border border-gray-300 focus:border-brand-500 focus:ring-0 px-3 bg-white dark:bg-gray-900">
        </div>

        {{-- Email --}}
        <div>
          <label class="block text-sm font-medium mb-1">Email</label>
          <input type="email" placeholder="Email"
                 class="w-full h-11 rounded-lg border border-gray-300 focus:border-brand-500 focus:ring-0 px-3 bg-white dark:bg-gray-900">
        </div>
      </div>

      {{-- Address + Active + Default Waiter + Online Order --}}
      <div class="mt-4 grid grid-cols-1 md:grid-cols-4 gap-4">
        {{-- Address (with icons at right like screenshot) --}}
        <div class="md:col-span-1">
          <label class="block text-sm font-medium mb-1">Address <span class="text-red-500">*</span></label>
          <div class="relative">
            <input type="text" placeholder="Address"
                   class="w-full h-11 rounded-lg border border-gray-300 focus:border-brand-500 focus:ring-0 pl-3 pr-16 bg-white dark:bg-gray-900">
            <div class="absolute inset-y-0 right-2 flex items-center gap-1">
              <button class="h-8 w-8 rounded-md border border-gray-300 grid place-items-center text-gray-500">
                <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.7">
                  <path d="M12 21s-7-4.5-7-10a7 7 0 1 1 14 0c0 5.5-7 10-7 10z"/>
                  <circle cx="12" cy="11" r="3"/>
                </svg>
              </button>
              <label class="h-8 w-8 rounded-md border border-gray-300 grid place-items-center text-gray-500 cursor-pointer">
                <input type="file" class="hidden">
                <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.7">
                  <rect x="3" y="5" width="18" height="14" rx="2"/>
                  <path d="M3 13l4-4 4 4 4-4 4 4"/>
                </svg>
              </label>
            </div>
          </div>
        </div>

        {{-- Active Status --}}
        <div>
          <label class="block text-sm font-medium mb-1">Active Status <span class="text-red-500">*</span></label>
          <select class="w-full h-11 rounded-lg border border-gray-300 focus:border-brand-500 focus:ring-0 px-3 bg-white dark:bg-gray-900">
            @foreach($statuses as $s)
              <option {{ $s==='Active' ? 'selected' : '' }}>{{ $s }}</option>
            @endforeach
          </select>
        </div>

        {{-- Default Waiter --}}
        <div>
          <label class="block text-sm font-medium mb-1">Default Waiter</label>
          <select class="w-full h-11 rounded-lg border border-gray-300 focus:border-brand-500 focus:ring-0 px-3 bg-white dark:bg-gray-900">
            @foreach($waiters as $w)
              <option>{{ $w }}</option>
            @endforeach
          </select>
        </div>

        {{-- Online Order? --}}
        <div>
          <label class="block text-sm font-medium mb-1">Will show for Online Order?</label>
          <select class="w-full h-11 rounded-lg border border-gray-300 focus:border-brand-500 focus:ring-0 px-3 bg-white dark:bg-gray-900">
            @foreach($online as $o)
              <option {{ $o==='Yes' ? 'selected' : '' }}>{{ $o }}</option>
            @endforeach
          </select>
        </div>
      </div>

      {{-- Menu select copy & legend --}}
      <div class="mt-6">
        <p class="text-sm font-medium">Select those food menus you want to sell from this outlet</p>
        <label class="mt-2 flex items-center gap-2 select-none">
          <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-brand-600 focus:ring-brand-500">
          <span class="text-[15px]">Select All</span>
        </label>
        <p class="mt-2 text-[15px] font-semibold text-orange-500">DI = Dine In, TA = Take Away, De = Delivery</p>
      </div>

      {{-- Actions --}}
      <div class="mt-6 flex items-center gap-3">
        <button
          class="h-10 px-5 rounded-lg bg-brand-600 text-white hover:bg-brand-700 flex items-center gap-2">
          <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.9">
            <path d="M12 5v14M5 12h14"/>
          </svg>
          Submit
        </button>

        <a href="{{ route('outlets.index') }}"
           class="h-10 px-5 rounded-lg bg-brand-100 text-brand-700 border border-brand-200 hover:bg-brand-200 flex items-center gap-2">
          <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.9">
            <path d="M15 18l-6-6 6-6"/>
          </svg>
          Back
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
