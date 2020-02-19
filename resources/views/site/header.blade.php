    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>www.secretariadeculturacedro.com.br</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery.bxslider.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/jquery.mask.min.js') }}"></script>


        <script>
            $(document).ready(function() {

            $('#idade').mask('99');
            $('#numero').mask('99999');
            $('#celular').mask('(99) 9 9999-9999');
            $('#telefone').mask('(99) 9999-9999');
            $('#outro').mask('(99) 9999-9999');

                function foco() {
                    $('#consulta').focus();
                }
                $(".buscar").click(foco);
            });


        </script>
    </head>
