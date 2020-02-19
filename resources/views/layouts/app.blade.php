<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-notify.min.js') }}"></script>

      <title>Secretaria de Cultura</title>


    <script>

        $(document).ready(function() {


            $('#cpf').mask('999.999.999-99');
            $('#rg').mask('9999999999-9');
            $('#tempo').mask('99');
            $('#ch').mask('999');
            $('#horario').mask('99:99-99:99');
            $('#numero').mask('99999');
            $('#cep').mask('99999-999');
            $('#celular').mask('(99) 9 9999-9999');
            $('#telefone').mask('(99) 9999-9999');

            //Função que exibe/esconde o horário do curso a tarde

            function mostrar(){
                var valor = $("#turno option:selected").val();

                if(valor == 'A'){
                     $("#esconder").show();
                 } else {
                     $("#esconder").hide();
                 }
            };

            // Chamada da função ao carregar a página
            mostrar();


           // Chamada da função ao escolher uma opção
            $("#turno").click(function(){
                mostrar();
            });

        });

        function formatar(mascara, documento){
            var i = documento.value.length;
            var saida = mascara.substring(0,1);
            var texto = mascara.substring(i);
          
            if (texto.substring(0,1) != saida)
            {
                documento.value += texto.substring(0,1);
            }
        }

    </script>

  <!-- 
<script type="text/javascript">
    $(document).ready(function(){
    $('#nascimento').mask('00/00/0000');
    $('#cpf').mask('00000000000');
    $('#rg').mask('00000000000');
    $('#tempo').mask('00');
    $('#serie').mask('0');
    $('#numero').mask('00000');
    $('#cep').mask('00000000');
    $('#celular').mask('(00)0 0000-0000');
    $('#telefone').mask('(00) 0000-0000');

    $(document).ready(function (){
    validate();
    $('#nome,#cpf').change(validate);
});

function validate(){
    if ($('#nome').val().length > 10 &&
        $('#cpf').val().length > 10 &&
        $('#rg').val().length > 10 &&
        $('#nascimento').val().length > 4
        ){
        $("#submit").attr("disabled", false);
    }
    else {
        $("#submit").attr("disabled", true);
    }
}

});
</script>

<script>
$(document).ready(function() {
    /*desativar guias"tab" não ativas*/
    $('.controla li').not('.active').addClass('disabled');
    $('.controla li').not('.active').find('a').removeAttr("data-toggle");

    $('button.next').click(function(){
        
    /*habilite a próxima guia"tab"*/
    $('.controla li.active').next('li').removeClass('disabled');
    $('.controla li.active').next('li').find('a').attr("data-toggle","tab").trigger("click");
    });

    $('button.prev').click(function() {
        $('.controla li.active').prev('li').find('a').trigger("click");
    });
});
</script> -->
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{route('home')}}">
                        Secretaria de cultura
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                            &nbsp;
                            @guest
                            @else
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastro
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('agente.create')}}">Agentes Culturais</a></li>
                                <li><a href="{{route('curso.create')}}">Cursos</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pesquisar
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('agente.show')}}">Agentes Culturais</a></li>
                                <li><a href="{{route('curso.show')}}">Cursos</a></li>
                            </ul>
                        </li>
                            @endguest
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
