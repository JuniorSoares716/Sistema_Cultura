<!DOCTYPE html>
<html lang="pt-br">
@extends('site.header')
    <body>
        @extends('site.menu')
        @extends('site.rodape')
            @section('imagem-rodape')
                <div class="gallery">
                    <img src="{{asset('img/9if.jpg')}}" alt="" class="img-responsive" />     
                </div>
             @endsection
        @extends('site.introducao')
            @section('texto')
                <h2>Secretaria de Cultura de Cedro Ceará</h2>
                <p>
                O Núcleo de Estudos Afro-Brasileiros e Indígena (NEABI) do Instituto Federal de Educação, Ciência e Tecnologia do Ceará -
                <i>campus</i> Cedro, é constituído por Grupos de Ensino, Pesquisa e Extensão, voltados para o direcionamento de estudos e
                ações para as questões étnico-raciais.
                </p>
            @endsection
            @section('conteudo')
                <div class="col-md-4">
                    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="services">                                          
                            <div class="icons">
                                <i class="glyphicon glyphicon-home fa-3x"></i>
                            </div>
                            
                            <h4>Missão</h4> 
                            <p>
                            À Secretaria de Cultura compete executar a política cultural no Município, em consonância com as diretrizes enunciadas pelos órgãos e entidades pertinentes, sendo o órgão responsável pelos projetos e programas culturais no âmbito municipal, especialmente aqueles relacionados com o fomento e o desenvolvimento cultural; desenvolver projetos voltados à valorização do patrimônio histórico, artístico e cultural do município; ordenar e incrementar a cultura em geral, promovendo atividades voltadas para o fortalecimento da cultura local; desenvolver projetos voltados à valorização da literatura e da leitura; estimular a realização de eventos e promoções, mantendo intercâmbio e integração junto a órgãos e entidades da área de cultura locais, regionais, estaduais, nacionais e internacionais e intermediar convênios, acordos, ajustes, termos de cooperação técnica e financeira com entidades privadas sem fins lucrativos e órgãos da administração direta e indireta da União, Estados e outros Municípios.
                            </p>
                        </div>
                    </div>
                    <hr>
                </div>
                
                <div class="col-md-4">
                    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                        <div class="services">                                          
                            <div class="icons">
                                <!--<i class="fa fa-users fa-3x" aria-hidden="true"></i>-->
                                <i class="glyphicon glyphicon-cog fa-3x"></i>
                            </div>
                            <h4>Visão</h4>
                            <p>Abrir caminhos para transformar possibilidades em realidade, contribuindo para a melhoria da qualidade de vida da população.
                            </p>                            
                        </div>
                    </div>
                    <hr>
                </div>
                
                <div class="col-md-4">
                    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.2s">
                        <div class="services">                                              
                            <div class="icons">
                                <i class="glyphicon glyphicon-list-alt fa-3x"></i>
                            </div>
                                <h4>Informes</h4>
                                <p>SECRETARIA DE CULTURA</p>
                                <p>CNPJ: 07.812.241/0001-84</p>
                                <p>  Telefone: 88 3564 0655</p>
                                <p>  Horário de funcionamento: DE SEGUNDA A SEXTA - DAS 07:00H AS 11:00H E 13:00H AS 17:00H</p>
                                <b>Informações do Gestor</b>
                                <p>Nome: MARIA APARECIDA DE SOUZA EVANGELISTA</p>
                                <p>  Cargo: SECRETÁRIO(A)</p>
                                <p>  Nomeação: 0902.002/2017</p>
                                <p>  Nomeação: 09/02/2017 - Publicação: 09/02/2017 </p>
                                <p> Matrícula: 3436</p>
                            </p>                            
                        </div>
                    </div>
                    <hr>
                </div>  
            @endsection
        @extends('site.banner')  
        
    </body>
</html>