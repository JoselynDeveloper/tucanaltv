<!-- HEADER -->
<?php include("includes/header.php"); ?>

<!--SLIDER-->
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100 wow fadeInUp" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Light mask</h3>
        <p>First text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 wow fadeInUp" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Strong mask</h3>
        <p>Secondary text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 wow fadeInUp" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Slight mask</h3>
        <p>Third text</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<!--Main Layout-->
<main class="my-5">
    <div class="container my-5">
        <div>
          <h1 class="text-dark text-center my-5 display-4 categoryPageTitle"></h1>
        </div>
        <article>
            <div class="row my-5">
                <div class="col-6 wow bounceInLeft">
                    <!-- Card -->
                    <div class="card">

                        <!-- Card image -->
                        <img class="card-img-top img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title text-dark"><a>Titulo</a></h4>
                            <!-- Text -->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!-- Button -->
                            <a href="#" class="btn btn-primary">Leer Más</a>

                        </div>

                    </div>
                    <!-- Card -->
                </div>
                <div class="col-6 wow bounceInRight">
                    <!-- Card -->
                    <div class="card">  

                        <!-- Card image -->
                        <img class="card-img-top img-fluid " src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title"><a>Card title</a></h4>
                            <!-- Text -->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!-- Button -->
                            <a href="#" class="btn btn-primary">Leer Más</a>

                        </div>

                    </div>
                    <!-- Card -->
                </div>
            </div>
        </article>
        <article>
            <div class="row">
                <div class="col-6">
                    <!-- Card -->
                    <div class="card wow bounceInLeft">

                        <!-- Card image -->
                        <img class="card-img-top img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title"><a>Card title</a></h4>
                            <!-- Text -->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!-- Button -->
                            <a href="#" class="btn btn-primary">Leer Más</a>

                        </div>

                    </div>
                    <!-- Card -->
                </div>
                <div class="col-6 wow bounceInRight">
                    <!-- Card -->
                    <div class="card">  

                        <!-- Card image -->
                        <img class="card-img-top img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title"><a>Card title</a></h4>
                            <!-- Text -->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!-- Button -->
                            <a href="#" class="btn btn-primary">Leer Más</a>

                        </div>

                    </div>
                    <!-- Card -->
                </div>
            </div>
        </article>
    </div>
</main>
<!--Main Layout-->
<!-- SECTION -->
<section>
<div class="containerPage">
  <div class="hs__wrapper">
    <div class="hs__header">
      <h2 class="hs__headline">LO ÚLTIMO EN LA RED
      </h2>
      <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
    </div>
    <ul class="hs">
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig12" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 1</span><span class="hs__item__subtitle">la vida es genial puedes compartirla</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig22" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 2</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig32" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 3</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig42" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 4</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig52" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 5</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig62" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 6</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig72" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 7</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig82" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 8</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig92" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 9</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig102" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 10</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig112" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 11</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig122" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 12</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig132" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 13</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig142" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 14</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig152" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 15</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig162" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 16</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig172" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 17</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig182" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 18</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig192" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 19</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig202" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 20</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
    </ul>
  </div>
  <div class="hs__wrapper">
    <div class="hs__header">
      <h2 class="hs__headline">NOTICIAS VIRALES 
      </h2>
      <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
    </div>
    <ul class="hs">
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig03" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 0</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig13" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 1</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig23" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 2</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig33" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 3</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig43" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 4</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig53" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 5</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig63" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 6</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig73" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 7</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig83" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 8</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig93" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 9</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig103" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 10</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig113" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 11</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig123" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 12</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig133" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 13</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig143" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 14</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig153" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 15</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig163" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 16</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig173" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 17</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig183" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 18</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig193" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 19</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig203" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 20</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
    </ul>
  </div>
  <div class="hs__wrapper">
    <div class="hs__header">
      <h2 class="hs__headline">MUNDO
      </h2>
      <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
    </div>
    <ul class="hs">
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig04" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 0</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig14" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 1</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig24" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 2</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig34" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 3</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig44" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 4</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig54" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 5</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig64" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 6</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig74" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 7</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig84" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 8</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig94" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 9</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig104" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 10</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig114" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 11</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig124" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 12</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig134" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 13</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig144" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 14</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig154" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 15</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig164" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 16</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig174" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 17</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig184" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 18</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig194" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 19</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="https://source.unsplash.com/random/300×300/?album&amp;sig204" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Amazing title 20</span><span class="hs__item__subtitle">some subtitle</span></div>
      </li>
    </ul>
  </div>
</div>
</section>
<!-- SECTION -->
<!-- Start your project here-->

<!-- FOOOTER -->
<?php include("includes/footer.php"); ?>