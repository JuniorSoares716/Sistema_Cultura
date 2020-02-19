                <!--     RODAPE         -->
        <footer>
            <!--       IMAGEM ANTES DO RODAPE      -->
            @yield('imagem-rodape')
            <div class="inner-footer">
                <div class="row">
                    <div class="col-md-4 f-about">
                        <a href="http://www.cedro.ce.gov.br/informa.php?id=1" title="História de Cedro Ceará"><h1>Cedro Ceará</h1></a>
                        <p class="jus">Município brasileiro do estado do Ceará. Localiza-se na Região Centro-Sul do Estado a uma latitude 06º36'24" sul e a uma longitude 39º03'44" oeste, estando a uma altitude de 250 metros. Sua população estimada em 2010 era de 24.527 habitantes. Possui uma área de 678,86 km². </p>
                    </div>
                    <div class="col-md-4 l-posts">
                        <h3 class="widgetheading">Acesse também</h3>
                        <ul>
                            <li><a href="http://www.cedro.ce.gov.br/index.php" title="Ir para Prefeitura de Cedro">Prefeitura Municipal de Cedro</a></li>
                            <li><a href="http://www.cedro.ce.gov.br/perguntaserespostas.php?secr=6" title="Ir para área de perguntas">Perguntas e Respostas</a></li>
                            <li><a href="http://www.cedro.ce.gov.br/ouvidoria.php" title="Ir para ouvidoria">Ouvidoria</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 f-contact">
                        <h3 class="widgetheading">Contato</h3>
                        <a href="culturacedro@hotmail.com" title="Ir para Gmail da Secretaria de Cultura de Cedro"><p><i class="fa fa-envelope"></i> culturacedro@hotmail.com</p></a>
                        <p><i class="fa fa-phone"></i>  +55 (88) 3564 0655</p>
                        <p><i class="fa fa-home"></i> AVENIDA ENEAS VIANA DE ARAÚJO, Nº 122 - CENTRO - CEP:63.400-000 - CEDRO-CE <br></p>
                    </div>
                </div>
            </div>
                
            <div class="last-div">
                <div class="row">
                    <div class="copyright">
                        <i>© 2017 Desenvolvido por J2D Tech - Cedro Ceará.</i>
                    </div>
                    <ul class="social-network">
                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x">
                        </i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Instagram"><i class="fa fa-instagram fa-1x"></i></a></li>
                    </ul>
                </div>
            </div>  
        </footer>
        <!-- jQuery (necessario para Bootstrap's JavaScript plugins) -->
        <script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
        <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
        <script src="{{asset('js/fancybox/jquery.fancybox.pack.js')}}"></script>
        <script src="{{asset('js/functions.js')}}"></script>
        <script>
        wow = new WOW(
         {

            }   ) 
            .init();
        </script>