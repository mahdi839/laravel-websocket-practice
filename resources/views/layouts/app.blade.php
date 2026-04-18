<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Notification UI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="text-xl font-bold text-gray-800">
                MyApp
            </div>

            <div class="flex items-center space-x-6">
                <div class="relative">
                    <button id="notificationButton" type="button" class="relative focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-7 w-7 text-gray-700 hover:text-blue-500 transition"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>

                        <span id="notificationCount"
                              class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5 hidden">
                            0
                        </span>
                    </button>

                    <div id="notificationDropdown"
                         class="hidden absolute right-0 mt-2 w-80 bg-white shadow-lg rounded-lg overflow-hidden z-50">
                        <div class="p-3 border-b font-semibold">
                            Notifications
                        </div>

                        <ul id="notificationList" class="max-h-72 overflow-y-auto">
                            <li id="emptyNotification" class="p-3 text-gray-500 text-sm">
                                No notifications
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="text-gray-700">
                    {{ auth()->user()->name ?? 'Guest' }}
                </div>
            </div>
        </div>
    </nav>

    <div class="p-6">
        @yield('content')
    </div>

</body>
</html>