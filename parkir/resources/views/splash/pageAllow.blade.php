<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body class="splash flex items-center justify-center h-screen bg-[#13414D] ">
    <div class="text-center bg-[#13414D] ">
        <div class="font-bold text-2xl text-left my-1"><label for="">What's Nearby?</label></div>
        <div class="text-left text-md font-bold">
            <p class="font-thin">Parkirin would like to access <br> your location see the<br>nearest department
                store
            </p>
        </div>
        <div class="flex items-start mt-3 gap-2">
            <a href="{{ route('splash.search') }}"><button
                    class="bg-transparent text-white text-xs hover:bg-gray-100 hover:text-gray-900 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    No, thanks
                </button></a>
            <a href="{{ route('explorer.index') }}"><button
                    class="bg-white hover:bg-transparent hover:text-white text-xs text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Allow access
                </button></a>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>
