<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- @vite('resources/css/app.css') --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="scroll-smooth">
    <x-header></x-header>
    {{$slot}}
    <x-footer></x-footer>

    <script>
        function fixed(){
            window.onscroll = function() {
                const header = document.querySelector('header');
                const fixedNav = header.offsetTop;
            
                if(window.pageYOffset > fixedNav){
                    header.classList.add('navbar-fixed');
                }
                else{
                    header.classList.remove('navbar-fixed');
                }
            }
        }
        fixed()
    </script>
</body>
</html>