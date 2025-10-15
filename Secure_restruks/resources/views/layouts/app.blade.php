<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full" x-data="themeState()" x-init="init()" :class="darkMode ? 'dark' : ''">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Secure_restruks</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script>
        function themeState() {
            return {
                darkMode: JSON.parse(localStorage.getItem('sr_dark')) ?? false,
                init() {},
                toggle() { this.darkMode = !this.darkMode; localStorage.setItem('sr_dark', JSON.stringify(this.darkMode)); }
            }
        }
    </script>
</head>
<body class="h-full bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
<div class="min-h-full flex">

    <!-- SIDEBAR (own scrollbar) -->
    <aside class="w-72 bg-white dark:bg-gray-950 border-r border-gray-200 dark:border-gray-800 flex flex-col">
        <!-- Brand -->
        <div class="h-16 flex items-center gap-3 px-4 border-b border-gray-200 dark:border-gray-800">
            <div class="w-10 h-10 rounded-full border-2 border-brand-500 text-brand-600 flex items-center justify-center">
                <!-- fork & spoon logo -->
                <svg viewBox="0 0 24 24" class="w-5 h-5">
                    <path d="M7 3v9a2 2 0 1 0 2 0V3M13 3v7a2 2 0 0 0 2 2h1V3" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    <circle cx="18.5" cy="17.5" r="3" fill="currentColor" />
                </svg>
            </div>
            <div>
                <p class="font-semibold leading-tight">Food_restruk's</p>
                <p class="text-xs text-gray-500">Fast Food &amp; Grill</p>
            </div>
            <div class="ml-auto text-brand-500">
                <svg viewBox="0 0 24 24" class="w-5 h-5"><circle cx="12" cy="12" r="2" fill="currentColor"/></svg>
            </div>
        </div>

        <!-- Scrollable nav only in sidebar -->
        <nav class="flex-1 overflow-y-auto px-3 py-3 text-sm">
            <p class="px-2 text-xs uppercase tracking-wider text-gray-500">Common Usages</p>

            @php
            // label, svg (stroke), showPlus?
            $main = [
              ['Home','M4 12l8-8 8 8v8H4z M9 20v-6h6v6',false],
              ['Dashboard','M5 15h3V5H5v10zm5 0h3V9h-3v6zm5 0h3V7h-3v8',false],
              ['Outlets','M4 10h16l-1.5 8H5.5L4 10zm2-4h12l1 4H5l1-4',true],
              ['Panel','M6 7h12M6 12h12M6 17h8',true],
              ['Settings','M12 7a5 5 0 100 10 5 5 0 000-10zm9 5h-2.2m-13.6 0H3.0m10.3-7.3l-.8 2m-3 10.6l-.8 2',true],
              ['Self Order Setting','M7 3h10a2 2 0 012 2v14a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2zm5 16h0',true],
              ['Website Order Setting','M3 5h18v12H3zM3 9h18',true],
              ['Reservation Setting','M7 4v3m10-3v3M5 8h14v11H5z',true],
            ];
            $sections = [
              'Item/Stock' => [
                ['Item','M5 7h14v10H5z',true],
                ['Production','M4 8h16v4H4z M7 12v5h10v-5',true],
                ['Stock','M6 6h12v12H6z',true],
              ],
              'Sale/Customer' => [
                ['Sale','M6 6h12v12H6z',true],
                ['Customer Due Receive','M5 8h14v8H5z',true],
              ],
              'Purchase/Expense' => [
                ['Purchase','M4 7h16v10H4z',true],
                ['Supplier Due Payment','M5 7h14v10H5z',true],
                ['Expense','M6 7h12v10H6z',true],
              ],
              'Transfer/Damage' => [
                ['Transfer','M5 12h14M12 5v14',true],
                ['Waste','M7 6h10v12H7z',true],
              ],
              'Account/Attendance' => [
                ['Account and User','M5 7h14v10H5z',true],
                ['Attendance','M6 7h12v10H6z',true],
              ],
              'Report' => [
                ['Report','M5 5h14v14H5z',true],
                ['Send SMS','M4 8h16v8H4z',true],
                ['Logout','M6 6h12v12H6z',true],
              ],
            ];
            @endphp

            @foreach($main as [$label,$d,$plus])
              <a href="javascript:void(0)" class="group flex items-center justify-between px-2 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
                <span class="flex items-center gap-3">
                  <span class="w-5 h-5 text-gray-600">
                    <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <path d="{{ $d }}"/>
                    </svg>
                  </span>
                  <span>{{ $label }}</span>
                </span>
                @if($plus)<span class="text-gray-400">+</span>@endif
              </a>
            @endforeach

            @foreach($sections as $title => $rows)
              <div class="mt-4">
                <p class="px-2 text-xs uppercase tracking-wider text-gray-500">{{ $title }}</p>
                @foreach($rows as [$label,$d,$plus])
                  <a href="javascript:void(0)" class="group flex items-center justify-between px-2 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
                    <span class="flex items-center gap-3">
                      <span class="w-5 h-5 text-gray-600">
                        <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <path d="{{ $d }}"/>
                        </svg>
                      </span>
                      <span>{{ $label }}</span>
                    </span>
                    @if($plus)<span class="text-gray-400">+</span>@endif
                  </a>
                @endforeach
              </div>
            @endforeach
        </nav>
    </aside>

    <!-- MAIN AREA -->
    <div class="flex-1 flex flex-col">
        <!-- TOP BAR -->
        <header class="h-16 bg-white dark:bg-gray-950 border-b border-gray-200 dark:border-gray-800 flex items-center justify-between px-4">
            <!-- Quick icons row -->
            <div class="flex items-center gap-2">
                @php
                  $top = [
                   // cart
                   '<path d="M6 6h15l-2 8H8L6 6zM9 20a1 1 0 110-2 1 1 0 010 2zm8 1a1 1 0 100-2 1 1 0 000 2z" />',
                   // percent tag
                   '<path d="M7 7l10 10M8 10a1 1 0 110-2 1 1 0 010 2zm8 8a1 1 0 110-2 1 1 0 010 2z" />',
                   // clock
                   '<circle cx="12" cy="12" r="9"/><path d="M12 7v6l4 2"/>',
                   // grid
                   '<path d="M4 4h7v7H4zM13 4h7v7h-7zM4 13h7v7H4zM13 13h7v7h-7z"/>',
                   // power
                   '<path d="M12 3v6M7.5 5.5a8 8 0 1011 0" />',
                  ];
                @endphp
                @foreach($top as $p)
                 <button class="w-9 h-9 rounded-full border border-gray-200 dark:border-gray-800 flex items-center justify-center hover:bg-gray-50 dark:hover:bg-gray-900">
                    <svg viewBox="0 0 24 24" class="w-5 h-5 text-gray-700 dark:text-gray-300" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">{!! $p !!}</svg>
                 </button>
                @endforeach
            </div>

            <div class="flex items-center gap-4">
                <!-- Language pill -->
                <button class="h-9 px-3 rounded-lg border border-gray-200 dark:border-gray-800 flex items-center gap-2 text-sm bg-white dark:bg-gray-950">
                    <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a15 15 0 010 18M12 3a15 15 0 000 18"/></svg>
                    <span>English</span>
                    <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-500"><path d="M7 10l5 5 5-5" fill="currentColor"/></svg>
                </button>

                <!-- Dark/Light switch -->
                <button @click="toggle()" class="h-9 px-3 rounded-lg border border-gray-200 dark:border-gray-800 text-sm">
                    <span x-show="!darkMode">Dark</span>
                    <span x-show="darkMode">Light</span>
                </button>

                <!-- User -->
                <div class="flex items-center gap-3">
                    <div class="text-right">
                        <p class="text-sm font-medium">{{ auth()->user()->name }}</p>
                        <p class="text-xs text-gray-500">Super Admin</p>
                    </div>
                    <div class="w-9 h-9 rounded-full bg-brand-500 text-white flex items-center justify-center">A</div>
                </div>
            </div>
        </header>

        <!-- CONTENT -->
        <main class="flex-1 p-6">
            {{ $slot ?? '' }}
            @yield('content')
        </main>

        <!-- FOOTER -->
        <footer class="h-10 flex items-center justify-between px-6 text-sm text-gray-500">
            <span>iRestora PLUS - Next Gen Restaurant POS</span>
            <span>Version 7.6</span>
        </footer>
    </div>
</div>
</body>
</html>
