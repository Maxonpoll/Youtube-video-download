<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ __('Y2load Dashboard') }}</title>
	
    <x-admin.headerAssets />

    @livewireStyles

</head>
<body class="g-sidenav-show bg-gray-100">
	
    @livewire('admin.dashboard')

    <x-admin.footerAssets />
    
    @livewireScripts
</body>
</html>