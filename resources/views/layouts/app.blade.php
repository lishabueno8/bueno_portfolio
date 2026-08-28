<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal portfolio of {{ $profile['name'] }}.">
    <meta name="theme-color" content="#0b1f14">

    <title>{{ $profile['name'] }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-background text-foreground antialiased" data-name="{{ $profile['name'] }}">

@include('partials.nav', ['navLinks' => $navLinks])

<main>
    @yield('content')
</main>

@include('partials.footer', ['profile' => $profile, 'socials' => $socials])

</body>
</html>