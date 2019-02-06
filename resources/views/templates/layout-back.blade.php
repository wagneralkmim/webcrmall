<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Web CRMALL - Processo Seletivo</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

    @yield('styles')

</head>
<body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="{{ url('/') }}" class="logo">
                <span class="logo-lg"><b>Web CRMALL</span>
            </a>
            <nav class="navbar navbar-static-top">
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu">
                    <li class="header">Navegação Principal</li>
                    <li><a href="{{ url('/') }}"><i class="fa fa-table"></i> <span>Tabela de Clientes</span></a></li>
                    <li><a href="{{ url('customers/create') }}"><i class="fa fa-plus-square-o"></i> <span>Adicionar Cliente</span></a></li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <section class="content">
                @yield('content')  
            </section>
        </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Versão</b> 1.0.0
            </div>
            <strong>Processo Seletivo Web CRMALL - Wagner Alkmim</strong>
        </footer>
    </div>

    <script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/js/app.min.js') }}"></script>

    @yield('scripts')
</body>
</html>