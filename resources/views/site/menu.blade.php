        <div class="container">
            <!--    MENU HORIZONTAL     -->
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div><a href="http://www.cedro.ce.gov.br/" title="Prefeitura de Cedro"><img src="{{asset('img\logo\logo.png')}}" alt="" class="img-responsive">
                </a></div>
                <div class="navbar-collapse collapse">                          
                    <div class="menu">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation"><a href="{{route('site')}}" title="Ir para Secretaria de Cultura">Secretaria de Cultura</a></li>
                            <li role="presentation"><a href="{{route('site.cursos')}}" title="Ir para Cursos">Cursos</a></li>
                            @guest
                                <li role="presentation"><a href="{{route('login')}}" title="Ir para Login de Administrador">Login</a></li>
                            @else
                               <li role="presentation">
                                    <a href="{{route('logout')}}"
                                        title="Sair da Home do administrador"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                               </li>
                            @endguest
                        </ul>
                    </div>
                </div>          
            </nav>
        </div>  
