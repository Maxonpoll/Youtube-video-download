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

    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white" id="sidenav-main">
        
        <x-admin.sidenav-header />

        <hr class="horizontal dark mt-0">

        <x-admin.sidebar />
        
    </aside>
    
    <main class="main-content mt-1 border-radius-lg">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="false">
             <div class="container-fluid py-1 px-3">

                <x-admin.breadcrumbs />

                <x-admin.navright />

             </div>
           </nav>
          <!-- End Navbar -->

            <div class="container-fluid py-4">
                <div class="row">

                    @livewire('admin.settings.proxy')

                </div>
            </div>

        <x-admin.footer />

    </main>
    
    <x-admin.footerAssets />

    @livewireScripts

    <script>
    (function( $ ) {
        "use strict";

        document.addEventListener('livewire:load', function () {

            window.addEventListener('swal:modal', event => {

                const swalWithBootstrapButtons = Swal.mixin({
                  customClass: {
                    confirmButton: 'btn bg-gradient-success',
                    cancelButton: 'btn bg-gradient-danger'
                  },
                  buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                  title: event.detail.title,
                  text: event.detail.text,
                  icon: event.detail.type,
                  showCancelButton: true,
                  confirmButtonText: "{{ __('Yes, delete it!') }}",
                  cancelButtonText: "{{ __('Cancel') }}"
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.livewire.emit('onDeleteProxy', event.detail.id)
                  }
                });

            });
        
            window.addEventListener('closeModal', event => {
                $('#' + event.detail.id).modal('hide');
            });

            window.addEventListener('showModal', event => {
                $('#' + event.detail.id).modal('show');
            });

            window.addEventListener('alert', event => {
                toastr[event.detail.type](event.detail.message);
            });

        });

    })( jQuery );
    </script>

</body>
</html>