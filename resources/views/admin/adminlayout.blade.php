<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel|{{env('APP_NAME')}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles

    
</head>

<body>
    @include('admin.adminheader')
    @section('content')
    @show
    
    @livewireScripts
</body>

</html>