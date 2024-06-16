<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <title>{{$title ?? 'Home'}}</title>
</head>
<body class="h-full">

<div class="min-h-full">
    <x-navbar/>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">

            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading ?? 'Dashboard'}}</h1>
            <x-button href="/jobs/create" >Create Job</x-button>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            {{$slot}}
        </div>
    </main>
</div>


</body>
</html>
