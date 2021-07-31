<nav class="z-10 bg-white py-3 shadow-md">
    <div class="w-full px-6">
        <div class="flex items-center justify-between">
            <div class="flex">
                <div>
                    <button class="md:hidden text-gray-800 p-1 rounded-md border-2 mobile-navbar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex md:hidden">
                <div>
                    <h1 class="font-semibold text-gray-800">RnTemplate</h1>
                </div>
            </div>
            <div class="flex">
                <button
                    class="h-10 w-10 rounded-full bg-gray-400 focus:ring-4 focus:ring-gray-200 overflow-hidden mobile-menu-button focus:outline-none">
                    <img class="mobile-menu-button"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80"
                        alt="profile photo">
                </button>
            </div>
        </div>
    </div>
    <div id="dropdown"
        class="hidden mobile-menu absolute right-7 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md">
        <ul>
            <li>
                <a href="#"
                    class="inline-flex items-center w-full px-2 py-1 mb-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                    {{-- <i class="w-4 h-4 mr-3 fas fa-cogs"></i> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex flex-row items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                    {{-- <i class="w-4 h-4 mr-3 fas fa-door-open"></i> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-3" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Log out</span>
                </a>
            </li>
        </ul>
    </div>
</nav>