
<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Naomi CBT</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gradient-to-b from-[#2046AE] via-[#2042A4] to-[#2147AF]">
    <x-button-sidebar/>
    <div class="inline-flex items-center justify-end w-1/2 sm:hidden">
        <img src="{{ asset('images/logo-brand.svg') }}" class="h-5 me-3 sm:h-6" alt="App Logo" />
        <h3 class="text-xl font-thin text-white me-2">Rubick</h3>
    </div>
    <x-sidebar/>
    <div class="p-4 lg:pl-64 sm:pl-24">
        <div class="p-4 rounded-[30px] bg-[#F1F5F9]">
            <x-header-nav :links="$breadcrumb"/>
            <div class="min-h-screen mx-4">
                @yield('content')
            </div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
@yield('scripts')
<script>
    $('.dropdown-button').click(function() {
        $(this).siblings('.dropdown-bar').slideToggle(300);
    });
</script>
</script>
</body>
</html>
