<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        sasa: '#0033A0',
                        bsouth: '#0060A9',
                        atlantic: '##9D2235',
                    }
                }
            }
        }
    </script>
    <title>Damu Sasa</title>
</head>
<body>
    <nav class="sticky top-0 bg-white flex justify-between items-center mb-4">
        <a href="/">
            <h1>DAMU SASA</h1>
        </a>
        <ul class="flex space-x-6 mr-10 text-lg">
            @auth
                <li>
                    <span class="font-bold hover:text-bsouth">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </span>
                </li>
                <li>
                    <a href="/blogs/manage" class="hover:text-sasa">
                        <i class="fa-solid fa-gear"></i> Manage Blogs
                    </a>
                </li>
                <li>
                    <form method="POST" action="/logout" class="inline">
                        @csrf
                        <button type="submit" class="hover:text-red-700">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
            @else

                <li>
                    <a href="/register" class="hover:text-sasa">
                        <i class="fa-solid fa-user-plus"></i> Register
                    </a>
                </li>
                <li>
                    <a href="/login" class="hover:text-sasa">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                    </a>
                </li>
            @endauth
        </ul>
    </nav>
    <main>
        {{ $slot }}
    </main>
    <footer class="fixed bg-white bottom-0 left-0 w-full flex items-center justify-start font-bold border-t-2 text-white h-24 mt-24 md:justify-center">
        <p class="ml-2 text-black">Copyright &copy; 2022, All Rights reserved</p>
    </footer>
    
</body>
</html>