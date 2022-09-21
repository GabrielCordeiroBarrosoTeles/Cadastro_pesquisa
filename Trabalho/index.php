<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <?php include './menu.php'; ?>    
        <div class="container">      
        <div class="carousel carousel-slider">
            <a class="carousel-item" href="#one!"><img src="img/01.png"></a>
            <a class="carousel-item" href="#one!"><img src="img/02.png"></a>
            <a class="carousel-item" href="#one!"><img src="img/03.png"></a>
        </div>
        <div class="row">
            <h3 class="blue-text">Quem somos</h3> 
            <div class="col s4">
                <div class="card">
                    <div class="card-image">
                        <img src="img/Ftaima.png">
                        <span class="card-title blue white-text">Dra. Fátima</span>
                    </div>
                    <div class="card-content">
                        <p>Dra. Fátima, formada na Universidade Federal do Estado do Ceará</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Saibba mais</a>
                    </div>
                </div>
            </div>
            <div class="col s4">
                <div class="card">
                    <div class="card-image">
                        <img src="img/Raquel.png">
                        <span class="card-title blue white-text">Dra. Raquel</span>
            </div>
            <div class="card-content">
                <p>
                    Dra. Fátima, formada na Universidade Federal do Estado do Ceará
                </p>
            </div>
            <div class="card-action">
              <a href="#">Saiba Mais..</a>
            </div>
          </div>
        </div>
      
              <div class="col s4">
          <div class="card">
            <div class="card-image">
                <img src="img/carlos.png">
              <span class="card-title blue white-text">Dr. Carlos Henrique</span>
            </div>
            <div class="card-content">
              <p>Dr. Carlos Henrique, formada na Universidade Federal do Estado do Ceará</p>
            </div>
            <div class="card-action">
              <a href="#">SAIBA MAIS</a>
            </div>
          </div>
        </div>
      
              <div class="col s4">
          <div class="card">
            <div class="card-image">
                <img src="img/joao.png">
              <span class="card-title blue white-text">DR.João</span>
            </div>
            <div class="card-content">
              <p>Dra. João, formado na Universidade Federal do Estado do Ceará</p>
            </div>
            <div class="card-action">
              <a href="#">SAIBA MAIS</a>
            </div>
          </div>
        </div>
      
              <div class="col s4">
          <div class="card">
            <div class="card-image">
                <img src="img/leticia.png">
              <span class="card-title blue white-text">Dra.Letícia</span>
            </div>
            <div class="card-content">
              <p>Dra. Fátima, formada na Universidade Federal do Estado do Ceará</p>
            </div>
            <div class="card-action">
              <a href="#">SAIBA MAIS</a>
            </div>
          </div>
        </div>
      
              <div class="col s4">
          <div class="card">
            <div class="card-image">
                <img src="img/maria.png">
              <span class="card-title blue white-text">Dra.Maria</span>
            </div>
            <div class="card-content">
              <p>Dra. Fátima, formada na Universidade Federal do Estado do Ceará</p>
            </div>
            <div class="card-action">
              <a href="#">SAIBA MAIS</a>
            </div>
          </div>
        </div>
         
         </div>
        </div>

        <div class="container">
            <3> noccos serviços </.
            <div class="row">
                
                
  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>DENTISTA</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>PROCEDIMENTO</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>CLÍNICA</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>
                
            </div>
            
            
            
            
            
        </div>
            
        
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
          $('.carousel.carousel-slider').carousel({fullWidth: true});
      
       $('.collapsible').collapsible();
      </script>
      
    </body>
  </html>