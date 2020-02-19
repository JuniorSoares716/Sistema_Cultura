        <!-- BANNER COM ANIMAÇÃO AUTOMATICA    -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicadores -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <div class="carousel-inner">
                  <div class="item active">
                    <img src="{{asset('img/6.jpg')}}" alt="logo" style="width:100%;"></div>

                  <div class="item">
                    <img src="{{asset('img/7.jpg')}}" alt="7" style="width:100%;"></div>
                        
                  <div class="item">
                    <img src="{{asset('img/8.jpg')}}" alt="8" style="width:100%;"></div>

                <div class="item">
                    <img src="{{asset('img/9.jpg')}}" alt="9" style="width:100%;"></div>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
         </div>