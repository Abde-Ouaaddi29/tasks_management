<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('storage/approve.png') }}">
    {{-- <link rel="icon" type="image/png" href="{{ svg('si-todoist') }}"> --}}
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/alpinejs" defer></script>
    <title> TASK-IT | {{ $title }} </title>
</head>
<body>
    <div>
       @include('partials.nav')
    </div>
     <main>
      @include('partials.flashback')
        {{ $slot }}
     </main>
     <div>
       @include('partials.footer')
     </div>

</body>
</html>