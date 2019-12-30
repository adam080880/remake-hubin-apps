<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script>
            const urlApi = "http://localhost:8000/api/"

            function api(param_) {
                return urlApi+param_
            }
        </script>

        <title>Gentelella Alela! | @yield('title')</title>

        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-wysiwyg -->
        <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
        <!-- Select2 -->
        <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
        <!-- Switchery -->
        <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <!-- starrr -->
        <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../build/css/custom.min.css" rel="stylesheet">

        <style>
            .loading {
                width:100px;
                height:10px;
                background-color:#f7f7f7;
                border-radius:5px;
                overflow-x:hidden;        
                overflow-y:hidden;
            }

            .bar {
                width:30%;
                height:10px;
                border-radius:5px;
                background-color:#1abb9c;
                animation: loading_ infinite 1s;
            }
        
            @keyframes loading_ {
                0% {
                    margin-right:70px;
                }
        
                50% {
                    margin-left:70px;
                }
            }
        </style>
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">