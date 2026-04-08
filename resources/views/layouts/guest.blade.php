<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Notification UI</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">

            <!-- Logo -->
            <div class="text-xl font-bold text-gray-800">
                MyApp
            </div>

            <!-- Right Menu -->
            <div class="flex items-center space-x-6">

                <!-- Bell Icon -->
                <div class="relative">

                    <!-- Button -->
                    <button id="notificationButton" class="relative focus:outline-none">

                        <!-- Bell SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" 
                             class="h-7 w-7 text-gray-700 hover:text-blue-500 transition"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 
                                     0118 14.158V11a6.002 6.002 0 
                                     00-4-5.659V5a2 2 0 
                                     10-4 0v.341C7.67 6.165 6 
                                     8.388 6 11v3.159c0 .538-.214 
                                     1.055-.595 1.436L4 17h5m6 
                                     0v1a3 3 0 11-6 0v-1m6 
                                     0H9" />
                        </svg>

                        <!-- Notification Badge -->
                        <span id="notificationCount"
                              class="absolute -top-1 -right-1 bg-red-500 text-white text-xs 
                                     rounded-full px-1.5 py-0.5 hidden">
                            0
                        </span>
                    </button>

                    <!-- Dropdown -->
                    <div id="notificationDropdown"
                         class="hidden absolute right-0 mt-2 w-72 bg-white shadow-lg rounded-lg overflow-hidden">

                        <div class="p-3 border-b font-semibold">
                            Notifications
                        </div>

                        <ul id="notificationList" class="max-h-60 overflow-y-auto">
                            <li class="p-3 text-gray-500 text-sm">
                                No notifications
                            </li>
                        </ul>

                    </div>
                </div>

                <!-- User -->
                <div class="text-gray-700">
                    {{ auth()->user()->name ?? 'Guest' }}
                </div>

            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="p-6">
        @yield('content')
    </div>

    <!-- JS -->
    <script>
        const button = document.getElementById('notificationButton');
        const dropdown = document.getElementById('notificationDropdown');

        button.addEventListener('click', () => {
            dropdown.classList.toggle('hidden');
        });
    </script>

</body>
</html>