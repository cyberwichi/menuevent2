<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>

	<!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Oswald:600" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">



	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('css/stylelogo.css') }}">


</head>


<body class="card2">




        <div class="card2">
                <nav class="navbar navbar-expand-lg navbar-light mb-5" style="">

                        <div >

                                <a class="position-relative" href="{{ url('/') }}">
                                    <ul class="logo">
                                            <li>m</li>
                                            <li>e</li>
                                            <li>n</li>
                                            <li>u</li>
                                            <li>E</li>
                                            <li>v</li>
                                            <li>e</li>
                                            <li>n</li>
                                            <li>t</li>
                                        </ul>


                                </a>


                        </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse  mt-1 mb-0" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav  mr-auto mb-0 menu1" id="menu1">
                            @can('users.index')
                            <li id="boton">
                                <a href="{{ route('users.index') }}" class="" >Usuarios</a>
                            </li>
                            @endcan
                            @can('roles.index')
                            <li id="boton">
                                <a href="{{ route('roles.index') }}" class=""  onclick="">Roles</a>
                            </li>

                            @endcan


                            @can('aliments.index')
                            <li id="boton">
                                <a href="{{ route('aliments.index') }}" class="" >Productos</a>
                            </li>
                            @endcan
                            @can('menus.index')
                            <li id="boton">
                                <a href="{{ route('menus.index') }}" class="" >Menus</a>
                            </li>
                            @endcan
                            @can('events.index')
                            <li id="boton">
                                <a class="" href="{{ route('events.index') }}" >Eventos</a>
                            </li>
                            @endcan



                            @if(session('info'))

                            <div class="izquierda  w-100">
                                {{ session('info') }}
                            </div>

                            @endif


                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                <a class="" href="{{ route('register') }}">{{ __('Nuevo Usuario') }}</a>
                                @endif
                            </li>
                            @else

                            <div class="dropdown izquierda ">

                                <button class="bg-dark text-white dropdown-toggle " type="button" id="dropdown1" data-toggle="dropdown"><i class=" fas fa-user-check"></i>{{ Auth::user()->name }}</button>

                                    <div class="dropdown-menu dropdown-menu-right bg-danger text-center w-25 " type="button" id="" data-toggle="dropdown">
                                        <a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-user-slash"></i>Salir</a>
                                    </div>


                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>




                            @endguest
                        </ul>
                    </div>

                </nav>



        </div>



		<div class=" container pes mt-5 mb-5">
			@yield('content')
		</div>






	<script>
		$(document).ready(function() {
			$('#tablaAliments').DataTable();
		});

	</script>
</body>

</html>
