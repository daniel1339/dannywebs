<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

         <!-- iconos -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <!-- Scripts -->
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class="font-sans bg-gray-300  ">
        <img class="cursor-pointer md:mx-7 -mx-2  btn-whatsapp" src="https://clientes.dongee.com/whatsapp.png" width="64" height="64" alt="Whatsapp" onclick="window.location.href='https://api.whatsapp.com/send?phone=573024504528'">

        @inertia
        
        <style>
             img.btn-whatsapp {
            display: block !important;
            position: fixed;
            z-index: 9999999;
            bottom: 40px;
            right: 20px;
            cursor: pointer;
            border-radius:100px !important;
            }
            img.btn-whatsapp:hover{
            border-radius:100px !important;
            -webkit-box-shadow: 0px 0px 15px 0px rgba(7,94,84,1); 
            -moz-box-shadow: 0px 0px 15px 0px rgba(7,94,84,1);
            box-shadow: 0px 0px 15px 0px rgba(7,94,84,1);
            transition-duration: 1s;
            } 
        </style>
       
</html>
