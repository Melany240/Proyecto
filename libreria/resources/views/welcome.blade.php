<!doctype html>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/slick.css') }}">
    <title>Author</title>
</head>
<body>

    <!-- Navigation -->
    <nav class="site-navigation">
        <div class="site-navigation-inner site-container">
            <img src="./images/site-logo.png" alt="site logo">
            <div class="main-navigation">
                <ul class="main-navigation__ul">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">
 
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endauth

                    </a></li>
                    <li><a href="#">Carrito</a></li>
                    <li><a href="#">Sobre nosotros</a></li>
                </ul>


            </div>
            <div id="myBtn" class="burger-container" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <script>
                function myFunction(x) {
                    x.classList.toggle("change");
                }
            </script>

        </div>
    </nav>
    <!-- Navigation end -->

    <!-- Top banner -->
    <section class="fh5co-top-banner">
        <div class="top-banner__inner site-container">
            <div class="top-banner__image">
                <img src="./images/top-banner-author.jpg" alt="author image" class="muertos">
            </div>
            <div class="top-banner__text">
                <div class="top-banner__text-up">
                    <!-- <span class="brand-span">Hola</span> -->
                    <h2 class="top-banner__h2">Ava</h2>
                </div>
                <div class="top-banner__text-down">
                    <h2 class="top-banner__h2">Dellaira</h2>
                    <span class="brand-span">Autora, Escritora</span>
                </div>
                <!-- <p>One Man. One Mission. Can He Go Beyond?One Man. One Mission. Can He Go Beyond?</p> -->
                <a href="#" class="brand-button">Leer mas > </a>
            </div>
        </div>
    </section>
    <!-- Top banner end -->

    <!-- About me -->
    <section class="fh5co-about-me">
        <div class="about-me-inner site-container">
            <article class="portfolio-wrapper">
                <div class="portfolio__img">
                    <img src="./images/dellaira.jpg" class="about-me__profile" alt="about me profile picture">
                </div>
                <div class="portfolio__bottom">
                    <div class="portfolio__name">
                        <span>A</span>
                        <h2 class="universal-h2">va Dellaira</h2>
                    </div>
                    <p>Ava Dellaira es una escritora y cinematografa.</p>
                </div>
            </article>
            <div class="about-me__text">
                <div class="about-me-slider">
                    <div class="about-me-single-slide">
                        <h2 class="universal-h2 universal-h2-bckg">Acerca de m??</h2>
                        <p><span>A</span> va Dellaira naci?? en Los Angeles y se crio en Albuquerque, Nuevo M??xico. Tras licenciarse en la Universidad de Chicago, trabaj?? en la industria cinematogr??fica. Su primera novela, Cartas de amor a los muertos (Nocturna, 2015), inspirada en el fallecimiento de su madre, recibi?? el aplauso de la cr??tica y los lectores: sus derechos de traducci??n se vendieron en una veintena de idiomas y los productores de Bajo la misma estrella compraron sus derechos cinematogr??ficos. Su segundo libro, 17 a??os (Nocturna, 2020), se ambienta en Los ??ngeles y entrelazando las perspectivas de una madre y una hija, ambas a sus 17 a??os, profundiza en temas como el racismo, el primer amor y la b??squeda de la identidad.</p>
                        <h4>Autora</h4>
                        <!-- <p class="p-white">See me</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="about-me-bckg"></div>
    </section>
    <!-- About me end -->

    <!-- Books and CD -->
    <section class="fh5co-books">
        <div class="site-container">
            <h2 class="universal-h2 universal-h2-bckg">Romance</h2>
            <div class="books">
                <div class="single-book">
                    <a href="#" class="single-book__img">
                        <img src="./images/books-5.jpg" alt="single book and cd" class="porte">
                        <div class="single-book_download">
                            <img src="./images/download.svg" alt="book image">
                        </div>
                    </a>
                    <h4 class="single-book__title">Romeo y Julieta</h4>
                    <span class="single-book__price">$15.00</span>
                    <!-- star rating -->
                    <div class="rating">
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                    </div>
                    <!-- star rating end -->
                </div>
                <div class="single-book">
                    <a href="#" class="single-book__img">
                        <img src="./images/diario.jpg" alt="single book and cd" class="porte">
                        <div class="single-book_download">
                            <img src="./images/download.svg" alt="book image">
                        </div>
                    </a>
                    <h4 class="single-book__title">Diario de una pasion</h4>
                    <span class="single-book__price">$22.00</span>
                    <!-- star rating -->
                    <div class="rating">
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                    </div>
                    <!-- star rating end -->
                </div>
                <div class="single-book">
                    <a href="#" class="single-book__img">
                        <img src="./images/books-beso.jpg" alt="single book and cd" class="porte">
                        <div class="single-book_download">
                            <img src="./images/download.svg" alt="book image">
                        </div>
                    </a>
                    <h4 class="single-book__title">El beso que no te di</h4>
                    <span class="single-book__price">$25.00</span>
                    <div class="rating">
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                    </div>
                </div>
                <div class="single-book">
                    <a href="#" class="single-book__img">
                        <img src="./images/yoantes.jpg" alt="single book and cd" class="porte">
                        <div class="single-book_download">
                            <img src="./images/download.svg" alt="book image">
                        </div>
                    </a>
                    <h4 class="single-book__title">Yo antes de ti</h4>
                    <span class="single-book__price">$30.00</span>
                    <div class="rating">
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                    </div>
                </div>
            </div>
            <div class="books-brand-button">
                <a href="#" class="brand-button">Ver mas</a>
            </div>
        </div>
    </section>
    <!-- Books and CD end -->
<section class="fh5co-books">
        <div class="site-container">
            <h2 class="universal-h2 universal-h2-bckg">Terror</h2>
            <div class="books">
                <div class="single-book">
                    <a href="#" class="single-book__img">
                        <img src="./images/caba??a.jpg" alt="single book and cd" class="porte">
                        <div class="single-book_download">
                            <img src="./images/download.svg" alt="book image">
                        </div>
                    </a>
                    <h4 class="single-book__title">La caba??a</h4>
                    <span class="single-book__price">$12.00</span>
                    <!-- star rating -->
                    <div class="rating">
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                    </div>
                    <!-- star rating end -->
                </div>
                <div class="single-book">
                    <a href="#" class="single-book__img">
                        <img src="./images/ritual.jpg" alt="single book and cd" class="porte">
                        <div class="single-book_download">
                            <img src="./images/download.svg" alt="book image">
                        </div>
                    </a>
                    <h4 class="single-book__title">El ritual</h4>
                    <span class="single-book__price">$25.00</span>
                    <!-- star rating -->
                    <div class="rating">
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                    </div>
                    <!-- star rating end -->
                </div>
                <div class="single-book">
                    <a href="#" class="single-book__img">
                        <img src="./images/elhombrede.jpg" alt="single book and cd" class="porte">
                        <div class="single-book_download">
                            <img src="./images/download.svg" alt="book image">
                        </div>
                    </a>
                    <h4 class="single-book__title">El hombre de tiza</h4>
                    <span class="single-book__price">$21.00</span>
                    <div class="rating">
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                    </div>
                </div>
                <div class="single-book">
                    <a href="#" class="single-book__img">
                        <img src="./images/laberinto.jpg" alt="single book and cd" class="porte">
                        <div class="single-book_download">
                            <img src="./images/download.svg" alt="book image">
                        </div>
                    </a>
                    <h4 class="single-book__title">El laberinto de Fauno</h4>
                    <span class="single-book__price">$30.00</span>
                    <div class="rating">
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                    </div>
                </div>
            </div>
            <div class="books-brand-button">
                <a href="#" class="brand-button">Ver mas</a>
            </div>
        </div>
    </section>
    
    <!-- Counter -->
<section class="fh5co-books">
        <div class="site-container">
            <h2 class="universal-h2 universal-h2-bckg">Ciencia Ficcion</h2>
            <div class="books">
                <div class="single-book">
                    <a href="#" class="single-book__img">
                        <img src="./images/mundos.jpg" alt="single book and cd" class="porte">
                        <div class="single-book_download">
                            <img src="./images/download.svg" alt="book image">
                        </div>
                    </a>
                    <h4 class="single-book__title">La tierra de los mundos</h4>
                    <span class="single-book__price">$11.00</span>
                    <!-- star rating -->
                    <div class="rating">
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                    </div>
                    <!-- star rating end -->
                </div>
                <div class="single-book">
                    <a href="#" class="single-book__img">
                        <img src="./images/cronicas.jpg" alt="single book and cd" class="porte">
                        <div class="single-book_download">
                            <img src="./images/download.svg" alt="book image">
                        </div>
                    </a>
                    <h4 class="single-book__title">La cronicas marciales</h4>
                    <span class="single-book__price">$17.00</span>
                    <!-- star rating -->
                    <div class="rating">
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                    </div>
                    <!-- star rating end -->
                </div>
                <div class="single-book">
                    <a href="#" class="single-book__img">
                        <img src="./images/orden.jpg" alt="single book and cd" class="porte">
                        <div class="single-book_download">
                            <img src="./images/download.svg" alt="book image">
                        </div>
                    </a>
                    <h4 class="single-book__title">El nuevo orden de las cosas</h4>
                    <span class="single-book__price">$15.00</span>
                    <div class="rating">
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                    </div>
                </div>
                <div class="single-book">
                    <a href="#" class="single-book__img">
                        <img src="./images/ola.jpg" alt="single book and cd" class="porte">
                        <div class="single-book_download">
                            <img src="./images/download.svg" alt="book image">
                        </div>
                    </a>
                    <h4 class="single-book__title">La quinta ola</h4>
                    <span class="single-book__price">$27.00</span>
                    <div class="rating">
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                        <span>&#9734;</span>
                    </div>
                </div>
            </div>
            <div class="books-brand-button">
                <a href="#" class="brand-button">Ver mas</a>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="fh5co-blog">
        <div class="site-container">
            <h2 class="universal-h2 universal-h2-bckg">Recomendados</h2>
            <div class="blog-slider blog-inner">
                <div class="single-blog">
                    <div class="single-blog__img">
                        <img src="./images/amigo.png"   class="recomendados">
                    </div>
                    <div class="single-blog__text">
                        <h4>Amigo Imaginario</h4>
                        <span>Sthepen Chbosky</span>
                        <p>Kate Reese es madre soltera y vive una relaci??n abusiva. Sabe que no quiere esa vida para su hijo Christopher, as?? que a la mitad de la noche toma las llaves de su auto y escapa con ??l a Mill Grove, Pensilvania, una ciudad peque??a y aislada, donde la comunidad es muy unida y en la que solo hay una carretera para entrar o salir. Parece el lugar perfecto para iniciar una nueva vida.</p>
                    </div>
                </div>
                <div class="single-blog">
                    <div class="single-blog__img">
                        <img src="./images/angeles.png"  class="recomendados">
                    </div>
                    <div class="single-blog__text">
                        <h4>Angeles Caidos</h4>
                        <span>Susan Ee</span>
                        <p>
Han pasado seis semanas desde que los ??ngeles del Apocalipsis descendieron para demoler el mundo moderno. Las pandillas callejeras gobiernan los d??as mientras el miedo y la superstici??n controlan la noche. </p>
                    </div>
                </div>
                <div class="single-blog">
                    <div class="single-blog__img">
                        <img src="./images/orgullo.png"  class="recomendados">
                    </div>
                    <div class="single-blog__text">
                        <h4>Orgullo + Perjuicio + Zombies</h4>
                        <span>Austen Jone</span>
                        <p>Cuando esa misteriosa plaga llega a la apacible poblaci??n inglesa de Meryton y los difuntos empiezan a resucitar convertidos en temibles muertos vivientes, la intr??pida hero??na Elizabeth Bennett tendr?? que acabar con la amenaza y, al mismo tiempo, evitar que la llegada del altivo y arrogante se??or Darcy la distraiga de su empe??o.</p>
                    </div>
                </div>

                <div class="single-blog">
                    <div class="single-blog__img">
                        <img src="./images/secreto.png"  class="recomendados">
                    </div>
                    <div class="single-blog__text">
                        <h4>El secreto de la esfinge</h4>
                        <span>Ana Alcoleana</span>
                        <p>Antiguo Egipto, per??odo intermedio. Neferad llora la muerte de su abuelo en una de las guerras del fara??n, pero su duelo ser?? corto. En breve tendr?? que marcharse de su casa para convertirse en sacerdotisa de Isis. Algo que no desea, pues preferir??a quedarse junto a su madre y sus hermanas y esperar a su padre, tambi??n en el frente. Todo se complicar?? a??n m??s cuando comprende que siente algo por su esclavo.</p>
                    </div>
                </div>

                <div class="single-blog">
                    <div class="single-blog__img">
                        <img src="./images/tresdeseos.png"  class="recomendados">
                    </div>
                    <div class="single-blog__text">
                        <h4>Tres deseos</h4>
                        <span>Jackson Pearce</span>
                        <p>???Todo lo que he aprendido hoy en la clase sobre Shakespeare es que a veces tienes que enamorarte de la persona equivocada para encontrar a la correcta. Una lecci??n m??s ??til hubiera sido que a veces la persona adecuada no te corresponde. O que a veces la persona adecuada es gay. O que a veces t?? mismo no eres la persona adecuada.???</p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Blog end -->

  

    <!-- Social -->
    <section class="fh5co-social">
        <div class="site-container">
            <div class="social">
                <h5>S??gueme</h5>
                <div class="social-icons">
                    <a href="#" target="_blank"><img src="./images/social-twitter.png" alt="social icon"></a>
                    <a href="#" target="_blank"><img src="./images/social-pinterest.png" alt="social icon"></a>
                    <a href="#" target="_blank"><img src="./images/social-youtube.png" alt="social icon"></a>
                    <a href="#" target="_blank"><img src="./images/social-twitter.png" alt="social icon"></a>
                </div>
                <h5>Comp??rtelo!</h5>
            </div>
        </div>
    </section>
    <!-- Social -->

    <!-- Footer -->
    <footer class="site-footer">
        <div class="site-container">
            <div class="footer-inner">
                <div class="footer-info">
                    <div class="footer-info__left">
                        <img src="./images/footer-img.jpg" alt="about me image">
                        <p>Lee mas sobre mi</p>
                    </div>
                    <div class="footer-info__right">
                        <h5>Ponerse en contacto</h5>
                        <p class="footer-phone">Telefono: +958734902847</p>
                        <p>Email : melanycardenas32@gmail.com</p>
                        <div class="social-icons">
                            <a href="#" target="_blank"><img src="./images/social-twitter.png" alt="social icon"></a>
                            <a href="#" target="_blank"><img src="./images/social-pinterest.png" alt="social icon"></a>
                            <a href="#" target="_blank"><img src="./images/social-youtube.png" alt="social icon"></a>
                            <a href="#" target="_blank"><img src="./images/social-twitter.png" alt="social icon"></a>
                        </div>
                    </div>
                </div>
                <div class="footer-contact-form">
                    <h5>Formulario de Contacto</h5>
                    <form class="contact-form">
                        <div class="contact-form__input">
                            <input type="text" name="name" placeholder="Nombre">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <textarea placeholder="Comentario/Duda"></textarea>
                        <button type="submit" name="submit" value="Submit" class="submit-button">Enviar</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="site-container footer-bottom-inner">
                <p>?? 2021 Todos los derechos son reservados. MBooks</p>
                <div class="footer-bottom__img">
                    <img src="./images/footer-mastercard.png" alt="footer image">
                    <img src="./images/footer-paypal.png" alt="footer image">
                    <img src="./images/footer-visa.png" alt="footer image">
                    <img src="./images/footer-fedex.png" alt="footer image">
                    <img src="./images/footer-dhl.png" alt="footer image">
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Scripts -->
    <script src="{{ asset ('js/jquery.min.js') }}"></script>
    <script src="{{ asset ('js/slick.min.js') }}"></script>
    <script src="{{ asset ('js/main.js') }}"></script>

</body>
</html>