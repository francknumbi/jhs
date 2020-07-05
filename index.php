<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Design</title>
    
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <link rel="stylesheet" href="css/iconfont/material-icons.css">
    <link rel="stylesheet" href="swiper/package/css/swiper.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <? include('vue/menu1.php'); ?>
    <div class="row">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="images/pdj-02-jan-site.jpg__770x433_q85_crop_subsampling-2_upscale.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="images/pdj-08-fev-site.jpg__770x433_q85_crop_subsampling-2_upscale.jpg" alt=""></div>
                    <div class="swiper-slide">Slide 3</div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 6</div>
                    <div class="swiper-slide">Slide 7</div>
                    <div class="swiper-slide">Slide 8</div>
                    <div class="swiper-slide">Slide 9</div>
                    <div class="swiper-slide">Slide 10</div>
                  </div>
                  <!-- Add Arrows -->
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                  <!-- Add Pagination -->
                  <div class="swiper-pagination"></div>
            </div>
    </div>

    <!--PANNEAU EXHORTATION-->
    <div class="row">
        <h5 class="col s12 m12 l12 center pensee">Pensee du jour</h5>
    </div>
    <div class="row light-green lighten-4">
        <div class="card">
            <div class="card-image col s12 m6 l4 ">
                <div>
                    <img src="images/pdj-02-jan-site.jpg__770x433_q85_crop_subsampling-2_upscale.jpg">
                </div>
            </div>
            <div class="col s12 m6 l6 center">
                <h4 class="header titreActu">Titre</h4>
                <p>
                    De manière synthétique et générale, moignage… jskjskiswo on peut rendre compte de l'enchaînement plus ou moins complexe des événements d'un roman en établissant le schéma narratif de l'œuvre et définir le principe général de l'action par le schéma actantiel qui expose les différents rôles présents dans le récit. On peut également définir le statut du narrateur (ou des narrateurs), distinct(s) de l'auteur, ainsi que les points de vue narratifs choisis
                </p>
            </div>
        </div>       
    </div>

    <div class="row" style="padding-left:2%;padding-right:2%;">
<!--ANNONCES-->
        
        <div class="col s12 m8 l9">  
            <h6 class="titre">EVENEMENTS</h6>       
            <div class="row" style="border-bottom: 1px solid #cfd8dc;">                
                <div class="col s12 m5 l4" >
                    <div class="card">
                        <div class="card-image">
                            <span class="act_img"><img src="images/pdj-15-jan-site.jpg__770x433_q85_crop_subsampling-2_upscale.jpg"></span>  
                        </div>
                    </div>
                </div>
    
                <div class="col s12 m7 l7">
                <!-- contenu  -->
                    <h6 class="card-title titreEvent">SOIREE DE LOUANGE</h6>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am a very simple card. I am good at containing small bits of information.
                            I am good at containing small bits I am good at containing small bits 
                            I am good at containing small bitsI am good at containing small bits</p>
                        
                        <a class="waves-effect lireActu">LIRE PLUS</a>
                        <span class="date">le 12/04/2014</span>
                    </div>
                </div>     
            </div>

            <div class="row" style="border-bottom: 1px solid #cfd8dc;">                
                <div class="col s12 m5 l4" >
                    <div class="card">
                        <div class="card-image">
                            <span class="act_img"><img src="images/pdj-15-jan-site.jpg__770x433_q85_crop_subsampling-2_upscale.jpg"></span>  
                        </div>
                    </div>
                </div>
    
                <div class="col s12 m7 l7">
                <!-- contenu  -->
                    <h6 class="card-title titreEvent">SOIREE DE LOUANGE</h6>   
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am a very simple card. I am good at containing small bits of information.
                            I am good at containing small bits I am good at containing small bits 
                            I am good at containing small bitsI am good at containing small bits</p>
                        
                        <a class="waves-effect lireActu" >LIRE PLUS</a>
                        
                        <span class="date">le 12/04/2014</span>
                    </div>
     
                </div>     
            </div>

  
        </div>
        

<!-- ACTUALITES-->
        <div class="col s12 m4 l3"> 

            <div class="row">
                    <h6 class="titre" style="margin-left: 3%;">ACTUALITES</h6>
                    <div class="col s12 m12">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/design-wallpapers-25199-6492166.png">
                        
                        </div>
                        <div class="card-content">
                            <span class="card-title titreActu">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                        <a href="#">lire plus</a>
                        </div>
                    </div>
                    </div>
            </div>

        </div>

    </div>
    
<!--EVENEMENTS-->        
    <div class="row " style="padding-left:2%;padding-right:2%">
        <h6 style="margin-left:8px;padding-top:1%" class="titre">ANNONCES</h6>
        <div class="row">
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/pdj-02-jan-site.jpg__770x433_q85_crop_subsampling-2_upscale.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title titreAnnon">Card Title</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because </p>
                        <div style="margin-top: 4%;">
                            <a class="waves-effect lireEvent" >LIRE PLUS</a>
                            <span class="date">le 12/04/2014</span>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/pdj-02-jan-site.jpg__770x433_q85_crop_subsampling-2_upscale.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title titreAnnon">Card Title</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because </p>
                        <div style="margin-top: 4%;">
                            <a class="waves-effect lireEvent" >LIRE PLUS</a>
                            <span class="date">le 12/04/2014</span>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/pdj-02-jan-site.jpg__770x433_q85_crop_subsampling-2_upscale.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title titreAnnon">Card Title</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because </p>
                        <div style="margin-top: 4%;">
                            <a class="waves-effect lireEvent" >LIRE PLUS</a>
                            <span class="date">le 12/04/2014</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/pdj-02-jan-site.jpg__770x433_q85_crop_subsampling-2_upscale.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title titreAnnon">Soiree de louange</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because</p>
                        <div style="margin-top: 4%;">
                            <a class="waves-effect lireEvent" >LIRE PLUS</a>
                            <span class="date">le 12/04/2014</span>
                        </div>
                    </div>
                </div>
            </div>
  
 


        </div>
    </div>
  
    
    <script src="materialize/js/materialize.js"></script>
    <script type="module" src="jquery/src/jquery.js"></script>
    <script type="module" src="cropperjs/src/js/cropper.js"></script>
    <script type="module" src="swiper/package/js/swiper.min.js"></script>
    <script type="module">
        var swiper = new Swiper('.swiper-container', {
            cssMode: false,
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            pagination: {
              el: '.swiper-pagination'
            },
            mousewheel: true,
            keyboard: true,
            
            breakpoints: {
                // when window width is >= 320px
                320: {
                  slidesPerView: 1,
                  spaceBetween: 780,
                  height:250
                },
                // when window width is >= 480px
                480: {
                  slidesPerView: 1,
                  spaceBetween: 770,
                  height:250
                },
                // when window width is >= 640px
                640: {
                  slidesPerView: 1,
                  spaceBetween: 70,
                  height:250
                }
            }
        });
      
    </script>
    <script src="js/main.js"></script>
</body>
</html>