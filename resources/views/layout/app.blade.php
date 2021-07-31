<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset=" UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Andika+New+Basic:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="flex h-screen bg-gray-50 dark:bg-gray-900 font-andika-new-basic">
    <x-sidebar />
    <div class="flex flex-col flex-1 w-full">
        <x-navbar />

        <main class="h-full overflow-y-auto">
            <div class="flex item-center py-14">
                <div class="w-full px-4">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener("click", (event) => {
            var dropdown = document.getElementById("dropdown");

            if (event.target.classList.contains('mobile-menu-button')){
                dropdown.classList.toggle('hidden');
                blackCover.classList.add("hidden");
                sidebar.classList.add("hidden");
            } else {
                dropdown.classList.add('hidden');
            }
        });

        const btn = document.querySelector('button.mobile-navbar');
        const blackCover = document.querySelector(".mobile-black-bakground");
        const sidebar = document.querySelector(".mobile-sidebar");

        btn.addEventListener('click', () => {
            blackCover.classList.toggle("hidden");
            sidebar.classList.toggle("hidden");
        });
    </script>
</body>

</html>