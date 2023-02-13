<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link
      rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <title>Chamaleon</title>
</head>
<body>
    <header>
        <section class="container-xg">
            <div class = "section-warning-shipping">
                <p>FRETE GRÁTIS PARA TODO BRASIL</p>
            </div>
        </section>

        <section class="container-lg">
            <div class="header-menu">
                <div class="section-logo-area">
                    <a href="<?=$base;?>/">
                        <img src="<?=$base;?>/assets/images/logos/logo.png">
                    </a>
                </div>

                <div class="section-menu-area">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>

                        <li>
                            <a href="#">Produtos</a>
                        </li>

                        <li>
                            <a href="#">Sobre Nós</a>
                        </li>

                        <li>
                            <a href="#">Página do Frete</a>
                        </li>
                    </ul>
                </div>

                <div class="section-header-form-area">
                    <form method="POST" action="search">
                        <input type="text" name="search" placeholder="Buscar produto...">
                        <i class='bx bx-search'></i>
                    </form>
                </div>

                <div class="section-cart-icon-area">
                    <a href="<?=$base;?>/cart">
                        <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.85717 29.0999C2.31844 29.023 1.70274 28.8691 1.24097 28.4842C0.317424 27.7146 -0.0673859 26.7911 0.00957618 25.5597C0.1635 23.4047 0.394386 21.1728 0.548311 19.0179C0.702235 16.863 0.933121 14.785 1.08705 12.6301C1.16401 11.3987 1.31793 10.1673 1.39489 9.01284C1.54882 7.31967 2.78021 6.08828 4.47338 6.08828C4.93515 6.08828 5.39692 6.08828 5.85869 6.08828C5.93566 4.16423 6.62831 2.54802 8.16756 1.31663C9.32199 0.393085 10.6303 -0.0686879 12.1696 0.0082742C15.402 0.0852363 18.0187 2.85587 18.0187 6.08828C18.0957 6.08828 18.2496 6.08828 18.3266 6.08828C18.8653 6.08828 19.404 6.08828 19.8658 6.16524C21.3281 6.39613 22.2516 7.55056 22.4055 9.0898C22.7134 12.3992 22.9443 15.7855 23.2521 19.0949C23.406 21.3268 23.6369 23.5587 23.7909 25.7906C23.9448 27.4837 22.7904 28.8691 21.0972 29.0999C21.0202 29.0999 21.0202 29.0999 20.9433 29.1769C14.9402 29.0999 8.93718 29.0999 2.85717 29.0999ZM5.85869 7.31967C5.31996 7.31967 4.78122 7.24271 4.24249 7.31967C3.39591 7.39663 2.78021 8.08929 2.70325 8.93588C2.54932 10.8599 2.3954 12.707 2.24148 14.6311C1.93363 18.4022 1.62578 22.0964 1.31793 25.8675C1.31793 26.0984 1.31793 26.3293 1.39489 26.5602C1.62578 27.4068 2.31844 27.8685 3.31895 27.8685C9.16806 27.8685 14.9402 27.8685 20.7893 27.8685C20.8663 27.8685 20.8663 27.8685 20.9433 27.8685C22.0977 27.7916 22.8673 26.945 22.7903 25.7906C22.7903 25.4827 22.7134 25.1749 22.7134 24.867C22.5595 22.943 22.4055 21.0959 22.2516 19.1718C22.0977 17.2478 21.9438 15.3237 21.7898 13.3227C21.6359 11.7835 21.559 10.3212 21.405 8.78195C21.3281 8.01233 20.7893 7.39663 20.0197 7.24271C19.404 7.16575 18.8653 7.24271 18.2496 7.24271C18.2496 8.39714 18.2496 9.62853 18.2496 10.8599C18.4805 10.8599 18.6344 10.8599 18.8653 10.8599C19.1731 10.8599 19.481 11.1678 19.481 11.4756C19.481 11.7835 19.2501 12.0913 18.8653 12.0913C18.0187 12.0913 17.2491 12.0913 16.4025 12.0913C16.0177 12.0913 15.7868 11.8604 15.7868 11.4756C15.7868 11.1678 16.0177 10.8599 16.4025 10.8599C16.5564 10.8599 16.7873 10.8599 16.9412 10.8599C16.9412 9.62853 16.9412 8.4741 16.9412 7.24271C13.7088 7.24271 10.4764 7.24271 7.32097 7.24271C7.32097 8.4741 7.32097 9.62853 7.32097 10.8599C7.55186 10.8599 7.70578 10.8599 7.85971 10.8599C8.24452 10.8599 8.4754 11.1678 8.4754 11.4756C8.4754 11.7835 8.24452 12.0913 7.85971 12.0913C7.09009 12.0913 6.32047 12.0913 5.47388 12.0913C5.08907 12.0913 4.85819 11.8604 4.85819 11.4756C4.85819 11.1678 5.08907 10.8599 5.55085 10.8599C5.70477 10.8599 5.93566 10.8599 6.08958 10.8599C5.85869 9.7055 5.85869 8.4741 5.85869 7.31967ZM7.09009 6.08828C10.3225 6.08828 13.5549 6.08828 16.7873 6.08828C16.7103 4.31815 16.0177 2.93283 14.5554 2.00929C12.8622 0.931819 11.0921 0.931819 9.39895 2.00929C7.85971 2.85587 7.16705 4.31815 7.09009 6.08828Z" fill="black"/>
                        </svg>
                    </a>
                </div>

                <div class="section-user-icon-area">
                    <a href="<?=$base;?>/user_account">
                        <svg width="25" height="27" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.94279 13.9842C3.53606 10.9729 3.6095 5.31764 6.69421 2.23293C9.77892 -0.851779 14.7732 -0.704888 17.711 2.45327C20.6489 5.68487 20.502 11.0464 16.1687 13.9842C16.3156 14.0577 16.4625 14.1311 16.6094 14.2045C21.2364 16.3345 23.807 19.8598 24.1008 25.001C24.1742 25.9558 23.807 26.2496 22.8522 26.2496C15.6546 26.2496 8.45691 26.2496 1.25925 26.2496C0.231011 26.2496 -0.0627708 25.8824 0.0106747 24.8541C0.377902 19.713 2.94849 16.1876 7.649 14.1311C7.72245 14.1311 7.7959 14.0577 7.94279 13.9842C7.86934 13.9842 7.94279 13.9842 7.94279 13.9842ZM22.1178 24.34C21.824 19.6395 17.5641 14.7921 11.3947 15.1593C8.38346 15.3062 5.88631 16.7017 3.97673 19.0519C2.72816 20.5943 2.06715 22.357 1.84681 24.34C8.67724 24.34 15.4342 24.34 22.1178 24.34ZM12.0557 1.79226C8.89758 1.79226 6.32699 4.36285 6.32699 7.52101C6.32699 10.6792 8.89758 13.2498 12.0557 13.2498C15.2139 13.2498 17.7845 10.6792 17.7845 7.52101C17.7845 4.4363 15.2139 1.8657 12.0557 1.79226Z" fill="black"/>
                        </svg>             
                        <p>
                            Bem vindo(a)<br>
                            Iago Silva
                        </p>      
                    </a>     
                </div>
            </div>
        </section>

        <section class="container-xg section-banner-slide-area">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="section-slide-banner1-area">
                            <div class="section-banner-texts">
                                <h2>MONTE SEU SETUP</h2>
                                <div class="border-banner1"></div>
                                <p>As melhores peças e periféricos você encontra aqui na ChamaleON</p>
                                <a class="button-banner1">COMEÇAR</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="section-slide-banner1-area">
                            <div class="section-banner-texts">
                                <h2>MONTE SEU SETUP</h2>
                                <div class="border-banner1"></div>
                                <p>As melhores peças e periféricos você encontra aqui na ChamaleON</p>
                                <a class="button-banner1">COMEÇAR</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </section>

        <section>
            <div class="container-lg section-our-products-area">
                <h2>NOSSOS PRODUTOS</h2>

                <div class="section-area-all-products-link">
                    <a href="<?=$base;?>/products">VER TODOS ></a>
                </div>

                <div class="section-products-boxes">
                    <div class="product-box">
                        <img src="<?=$base;?>/assets/images/products/memoria_image.png">

                        <p class="product-box-desc">
                            Memória Ram Fury Beast, Ddr4 Rgb, Color Preto, 16GB, 1 Kingston Kf432c16bb1a/1.
                        </p>

                        <div class="product-box-price-obs">
                            <p class="product-box-price">R$ 269,99</p>

                            <P class="product-box-obs">A vista no PIX</P>
                        </div>
                        <a href="<?=$base;?>/product/id">COMPRAR</a>
                    </div>

                    <div class="product-box">
                        <img src="<?=$base;?>/assets/images/products/memoria_image.png">

                        <p class="product-box-desc">
                            Memória Ram Fury Beast, Ddr4 Rgb, Color Preto, 16GB, 1 Kingston Kf432c16bb1a/1.
                        </p>

                        <div class="product-box-price-obs">
                            <p class="product-box-price">R$ 269,99</p>

                            <P class="product-box-obs">A vista no PIX</P>
                        </div>
                        <a href="<?=$base;?>/product/id">COMPRAR</a>
                    </div>

                    <div class="product-box">
                        <img src="<?=$base;?>/assets/images/products/memoria_image.png">

                        <p class="product-box-desc">
                            Memória Ram Fury Beast, Ddr4 Rgb, Color Preto, 16GB, 1 Kingston Kf432c16bb1a/1.
                        </p>

                        <div class="product-box-price-obs">
                            <p class="product-box-price">R$ 269,99</p>

                            <P class="product-box-obs">A vista no PIX</P>
                        </div>
                        <a href="<?=$base;?>/product/id">COMPRAR</a>
                    </div>

                    <div class="product-box">
                        <img src="<?=$base;?>/assets/images/products/memoria_image.png">

                        <p class="product-box-desc">
                            Memória Ram Fury Beast, Ddr4 Rgb, Color Preto, 16GB, 1 Kingston Kf432c16bb1a/1.
                        </p>

                        <div class="product-box-price-obs">
                            <p class="product-box-price">R$ 269,99</p>

                            <P class="product-box-obs">A vista no PIX</P>
                        </div>
                        <a href="<?=$base;?>/product/id">COMPRAR</a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="section-out-categories-area container-lg">
                <h2>Nossas Categorias</h2>

                <div class="section-area-all-categories-link">
                    <a href="<?=$base;?>/products">VER TODAS ></a>
                </div>

                <div class="categories-banners-area">
                    <div class="section-category-area-img1"></div>

                    <div class="section-category-area-img2"></div>

                    <div class="section-category-area-img3"></div>
                </div>
            </div>
        </section>

        <section>
            <div class="section-marketing-area container-lg">
                <div class="section-marketing-area-img">
                    <img src="<?=$base;?>/assets/images/banners/marketing_banner.jpeg">
                </div>

                <div class="section-marketing-area-texts">
                    <h2>
                        Porque Comprar Com a Chamale<font color="#FF5900">ON</font>
                    </h2>

                    <div class="section-marketing-area-underline-tittle"></div>
                    

                    <p class="section-marketin-area-text">
                        A ChamaleON tem uma grande variedade de produtos e preços que cabem no bolso. Buscamos trazer 
                        os melhores produto para você, e tornar facil o processo de compra pela internet, focamos em um 
                        atendimento PREMIUN onde você tera suporte todos os dias da semana a qualquer 
                        horario, para tirar duvidas ou resolver alguma pendência.
                    </p>

                    <ul>
                        <li>
                            <i>+</i>
                            <p>COMPRA 100% SEGURA</p>
                        </li>

                        <li>
                            <i>+</i>
                            <p>GARANTIA DE 4 MESES PARA TODOS OS PRODUTOS</p>
                        </li>

                        <li>
                            <i>+</i>
                            <p>FRETE GRATÍS PARA TODO BRASIL</p>
                        </li>

                        <li>
                            <i>+</i>
                            <p>SUPORTE 24/7</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </header>
    
        </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
          scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,
          },
        });
    </script>
</body>
</html>