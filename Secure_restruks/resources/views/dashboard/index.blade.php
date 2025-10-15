@extends('layouts.app')

@section('content')
<div class="space-y-6">

  <!-- Tabs row (light purple chips) -->
  <div class="grid grid-cols-4 gap-4">
    @foreach(['Dashboard','POS Screen','Waiter Screen','Kitchen Panel'] as $tab)
      <div class="rounded-2xl border border-brand-100 bg-brand-50 text-gray-800 dark:text-gray-200 px-4 py-3 text-center">
        <p class="font-medium">{{ $tab }}</p>
      </div>
    @endforeach
  </div>

  <div class="grid grid-cols-12 gap-6">
    <!-- Profile card -->
    <div class="col-span-3">
      <div class="bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 rounded-2xl p-5">
        <div class="flex items-center gap-3">
          <div class="w-12 h-12 rounded-full bg-brand-500 text-white flex items-center justify-center">A</div>
          <div>
            <p class="font-semibold">Admin User</p>
            <p class="text-sm text-gray-500">adikhanofficial@gmail.com</p>
          </div>
        </div>

        <div class="mt-5 space-y-3">
          @php
            $actions = [
              ['Change Profile','#','bg-purple-100 text-purple-600'],
              ['Change Password','#','bg-green-100 text-green-600'],
              ['Set Security Question','#','bg-cyan-100 text-cyan-600'],
              ['Logout','#','bg-rose-100 text-rose-600'],
            ];
          @endphp

          @foreach($actions as [$label,$href,$chip])
            <a href="javascript:void(0)" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-900 border border-transparent hover:border-gray-200 dark:hover:border-gray-800">
              <span class="w-6 h-6 rounded-full {{ $chip }} flex items-center justify-center">
                <svg viewBox="0 0 24 24" class="w-3.5 h-3.5" fill="currentColor">
                  @if($label==='Change Profile')
                    <path d="M12 12a4 4 0 1 0-4-4 4 4 0 0 0 4 4Zm-7 7a7 7 0 0 1 14 0Z"/>
                  @elseif($label==='Change Password')
                    <path d="M17 9H7V7a5 5 0 0 1 10 0v2Zm-9 3h8v7H8z"/>
                  @elseif($label==='Set Security Question')
                    <path d="M12 2a9 9 0 100 18 9 9 0 000-18Zm0 13h1v1h-2v-1h1Zm1-2h-2V7h2v6Z"/>
                  @else
                    <path d="M10 17l-1.5-1.5L12 12l-3.5-3.5L10 7l5 5-5 5Z"/>
                  @endif
                </svg>
              </span>
              <span class="text-sm">{{ $label }}</span>
            </a>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Recent Sales -->
    <div class="col-span-9">
      <div class="bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 rounded-2xl">
        <div class="px-5 py-4 border-b border-gray-200 dark:border-gray-800 flex items-center justify-between">
          <p class="text-lg font-semibold">Recent Sales</p>

          <div class="flex items-center gap-3">
            <!-- Entries -->
            <div class="flex items-center gap-2">
              <span class="text-sm">Entries</span>
              <div class="relative">
                <select class="h-9 pl-3 pr-8 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-950 text-sm appearance-none">
                  <option selected>10</option><option>25</option><option>50</option>
                </select>
                <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-500 absolute right-2 top-2.5"><path d="M7 10l5 5 5-5" fill="currentColor"/></svg>
              </div>
            </div>

            <!-- Search -->
            <div class="relative">
              <input class="h-9 w-72 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-950 pl-10 pr-3 text-sm"
                     placeholder="Search Here"/>
              <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-500 absolute left-3 top-2.5"><path d="M10 18a8 8 0 1 1 5.3-14.1A8 8 0 0 1 10 18Zm6 0l5 5" fill="none" stroke="currentColor" stroke-width="1.6"/></svg>
            </div>

            <!-- Export (muted gray pill with chevron) -->
            <button class="h-9 px-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-100 dark:bg-gray-900 text-sm flex items-center gap-2">
              <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 3v12m0 0l-4-4m4 4l4-4M4 21h16"/></svg>
              Export
              <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-500"><path d="M7 10l5 5 5-5" fill="currentColor"/></svg>
            </button>
          </div>
        </div>

        <!-- Table -->
        <div class="p-5">
          <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
              <thead class="text-left text-gray-600 dark:text-gray-300">
                <tr class="border-b border-gray-200 dark:border-gray-800">
                  @foreach(['SN','Sale No','Customer','Items','Total Payable','Paid Amount','Sale Date'] as $th)
                    <th class="py-3 px-2">{{ $th }}</th>
                  @endforeach
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-6 text-gray-500" colspan="7">No data available in table</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="flex items-center justify-between mt-4 text-sm text-gray-600 dark:text-gray-300">
            <span>Showing 0 to 0 of 0 entries</span>
            <div class="flex gap-2">
              <button class="px-3 h-9 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-100 dark:bg-gray-900 text-gray-500" disabled>Previous</button>
              <button class="px-3 h-9 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-100 dark:bg-gray-900 text-gray-500" disabled>Next</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
