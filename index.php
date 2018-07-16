<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> JOW STYLE | Home </title>

        <!--        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">-->
        <link rel="stylesheet" href="Assets/style/icons.css">
        <!--        <link href="https://file.myfontastic.com/MKtYLUgRfjzbDAXVwVqpXG/icons.css" rel="stylesheet">-->
        <link rel="stylesheet" href="Assets/style/boot.css">
        <link rel="stylesheet" href="Assets/style/style.css">
        <link rel="shortcut icon" href="_img/favicon.jpeg"/>

    </head>
    <body>
        <header class="main_header">
            <div class="container">
                <div class="main_header_nav">
                    <div class="main_header_nav_logo">
                        <a href="" title="JOW STYLE | Home">
                            <img alt="Jow Style" title="Jow Style" src="_img/marca2.png"/>
                        </a> 
                    </div>

                    <ul class="main_header_departments">
                        <li class="main_header_departments_li">Coleção 2018
                            <ul class="main_header_departments_li_ul">
                                <li class="main_header_departments_li_ul_li"><a href="#" title="">Masculino</a></li>    
                                <li class="main_header_departments_li_ul_li"><a href="#" title="">Feminino</a></li>    
                                <li class="main_header_departments_li_ul_li"><a href="#" title="">Infantil</a></li>    
                            </ul>
                        </li>
                        <li class="main_header_departments_li">Masculino
                            <ul class="main_header_departments_li_ul">
                                <li class="main_header_departments_li_ul_li"><a href="#" title="">Bonês</a></li>
                                <li class="main_header_departments_li_ul_li"><a href="#" title="">Camisetas</<a></li>    
                                            <li class="main_header_departments_li_ul_li"><a href="#" title="">Camisas</a></li> 
                                            <li class="main_header_departments_li_ul_li"><a href="#" title="">Manga Longa</a></li> 
                                            <li class="main_header_departments_li_ul_li"><a href="#" title="">Moletons</a></li>
                                            <li class="main_header_departments_li_ul_li"><a href="#" title="">Bermudas</a></li>    
                                            <li class="main_header_departments_li_ul_li"><a href="#" title="">Calças</a></li> 
                                            </ul>
                                            </li>
                                            <li class="main_header_departments_li">Feminino
                                                <ul class="main_header_departments_li_ul">
                                                    <li class="main_header_departments_li_ul_li"><a href="#" title="">Camisas e Blusas</a></li> 
                                                    <li class="main_header_departments_li_ul_li"><a href="#" title="">Moletons</a></li>    
                                                    <li class="main_header_departments_li_ul_li"><a href="#" title="">Regatinhas</a></li> 
                                                    <li class="main_header_departments_li_ul_li"><a href="#" title="">Saias</a></li>
                                                    <li class="main_header_departments_li_ul_li"><a href="#" title="">Shorts</a></li>    
                                                    <li class="main_header_departments_li_ul_li"><a href="#" title="">Vestidos</a></li> 
                                                </ul>
                                            </li>
                                            <li class="main_header_departments_li">Novidades
                                                <ul class="main_header_departments_li_ul">
                                                    <li class="main_header_departments_li_ul_li"><a href="#" title="">Masculino</a></li>
                                                    <li class="main_header_departments_li_ul_li"><a href="#" title="">Feminino</a></li>    
                                                </ul>
                                            </li>

                                            </ul>

                                            <div class="main_header_nav_search">
                                                <form action="" method="post" class="radius">
                                                    <input type="text" name="s" placeholder="O que vc procura?"/>
                                                    <button class="icon-search icon-notext transitions"></button>
                                                </form>
                                            </div>
                                            </div>  
                                            </div>
                                            </header>
                                            <main class="main_content">
                                                <div class="main_content_slide j_slide">
                                                    <a class="j_slide_item" href="#" title=""><img src="_img/bone/bn-1.jpeg" alt="" title=""/></a><!--                Uploads/featured-01.jpg-->  
                                                    <a class="j_slide_item" href="#" title=""><img src="_img/bone/bn2.jpeg" alt="" title=""/></a>
                                                    <a class="j_slide_item" href="#" title=""><img src="_img/bone/bn3.jpeg" alt="" title=""/></a>
                                                    <div class="j_slide_nav"></div>
                                    <!-- <div class="j_slide_nav"><span class="rounded transitions "></span><span class="rounded transitions"></span></div>-->
                                                </div>
                                                <section class="pdt_gallery">
                                                    <div class="container">
                                                        <header class="main_content_header">
                                                            <h1 class="main_content_header_title">Ofertas da Semana:</h1>
                                                        </header>
                                                        <!--      OFERTAS DA SEMANA-->
                                                           <div class="pdt_gallery_normalize flex">
                                                            <!--loop-->
                                                            <?php
                                                            $pdt = 0;
                                                            for ($pdt = 1; $pdt < 5; $pdt++) {
                                                                ?>
                                                                <article class="pdt_gallery_item flex-2">
                                                                    <a href="#" title=""><img src="Uploads/products/camisetas/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT); ?>.jpg" alt="" title=""></a>
                                                                    <header class="pdt_gallery_item_desc">
                                                                        <h2 class="pdt_gallery_item_desc_title"><a class="transitions" href="#" title="">Camiseta Confort Latina</a></h2>
                                                                        <div class="pdt_gallery_item_desc_price">
                                                                            <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                                                        </div>
                                                                        <p>2x R$ 29,95</p>
                                                                    </header>
                                                                </article>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                         <!-- FIM- OFERTAS DA SEMANA FIM -->
                                                         <!-- CAMISETAS -->
                                                        
                                                        <div class="pdt_gallery_normalize flex">
                                                            <!--loop-->
                                                            <?php
                                                            $pdt = 0;
                                                            for ($pdt = 5; $pdt < 9; $pdt++) {
                                                                ?>
                                                                <article class="pdt_gallery_item flex-2">
                                                                    <a href="#" title=""><img src="Uploads/products/camisetas/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT); ?>.jpg" alt="" title=""></a>
                                                                    <header class="pdt_gallery_item_desc">
                                                                        <h2 class="pdt_gallery_item_desc_title"><a class="transitions" href="#" title="">Camiseta Confort Latina</a></h2>
                                                                        <div class="pdt_gallery_item_desc_price">
                                                                            <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                                                        </div>
                                                                        <p>2x R$ 29,95</p>
                                                                    </header>
                                                                </article>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        
                                                        
                                                        <div class="pdt_gallery_normalize flex">
                                                            <!--loop-->
                                                            <?php
                                                            $pdt = 0;
                                                            for ($pdt = 9; $pdt < 13; $pdt++) {
                                                                ?>
                                                                <article class="pdt_gallery_item flex-2">
                                                                    <a href="#" title=""><img src="Uploads/products/camisetas/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT); ?>.jpg" alt="" title=""></a>
                                                                    <header class="pdt_gallery_item_desc">
                                                                        <h2 class="pdt_gallery_item_desc_title"><a class="transitions" href="#" title="">Camiseta Confort Latina</a></h2>
                                                                        <div class="pdt_gallery_item_desc_price">
                                                                            <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                                                        </div>
                                                                        <p>2x R$ 29,95</p>
                                                                    </header>
                                                                </article>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                         <!-- FIM- CAMISETAS FIM -->
                                                    </div>
                                                </section>

                                                <section class="pdt_gallery pdt_select">
                                                    <div class="container">
                                                        <header class="pdt_select_header">
                                                            <h1>
                                                                <span class="j_tabs_nav transitions radius">Eles</span>
                                                                <span class="j_tabs_nav transitions radius">Elas</span>
                                                            </h1>
                                                        </header>

                                                        <div class="j_tabs">
                                                            <div class="j_tabs_item">
                                                                <div class="flex">
                                                                    <div class="pdt_gallery_list pdt_gallery_featured">
                                                                        <article class="pdt_gallery_item flex-2">
                                                                            <a href="#" title=""><img src="Uploads/products/masc/15.jpg" alt="" title=""></a>
                                                                            <header class="pdt_gallery_item_desc">
                                                                                <h2 class="pdt_gallery_item_desc_title"><a class="transitions" href="#" title="">Camiseta Confort Latina</a></h2>
                                                                                <div class="pdt_gallery_item_desc_price">
                                                                                    <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                                                                </div>
                                                                                <p>2x R$ 29,95</p>
                                                                            </header>
                                                                        </article>
                                                                    </div>
                                                                    <div class="pdt_gallery_list flex">
                                                                        <!--loop-->
                                                                        <?php
                                                                        $pdt = 0;
                                                                        for ($pdt = 11; $pdt < 15; $pdt++) {
                                                                            ?>
                                                                            <article class="pdt_gallery_item flex-2">
                                                                                <a href="#" title=""><img src="Uploads/products/masc/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT); ?>.jpg" alt="" title=""></a>
                                                                                <header class="pdt_gallery_item_desc">
                                                                                    <h2 class="pdt_gallery_item_desc_title"><a class="transitions" href="#" title="">Camiseta Confort Latina</a></h2>
                                                                                    <div class="pdt_gallery_item_desc_price">
                                                                                        <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                                                                    </div>
                                                                                    <p>2x R$ 29,95</p>
                                                                                </header>
                                                                            </article>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                </div> <!-- FLEX-->
                                                            </div>
                                                            <div class="j_tabs_item">
                                                                <div class="flex">
                                                                    <div class="pdt_gallery_list pdt_gallery_featured">
                                                                        <article class="pdt_gallery_item flex-2">
                                                                            <a href="#" title=""><img src="Uploads/products/fem/09.jpg" alt="" title=""></a>
                                                                            <header class="pdt_gallery_item_desc">
                                                                                <h2 class="pdt_gallery_item_desc_title"><a class="transitions" href="#" title="">Camiseta Confort Latina</a></h2>
                                                                                <div class="pdt_gallery_item_desc_price">
                                                                                    <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                                                                </div>
                                                                                <p>2x R$ 29,95</p>
                                                                            </header>
                                                                        </article>
                                                                    </div>
                                                                    <div class="pdt_gallery_list flex">
                                                                        <!--loop-->
                                                                        <?php
                                                                        $pdt = 0;
                                                                        for ($pdt = 5; $pdt < 9; $pdt++) {
                                                                            ?>
                                                                            <article class="pdt_gallery_item flex-2">
                                                                                <a href="#" title=""><img src="Uploads/products/fem/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT); ?>.jpg" alt="" title=""></a>
                                                                                <header class="pdt_gallery_item_desc">
                                                                                    <h2 class="pdt_gallery_item_desc_title"><a class="transitions" href="#" title="">Camiseta Confort Latina</a></h2>
                                                                                    <div class="pdt_gallery_item_desc_price">
                                                                                        <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                                                                    </div>
                                                                                    <p>2x R$ 29,95</p>
                                                                                </header>
                                                                            </article>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                </div> <!-- FLEX-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>    
                                               </main>
                                            <footer class="Main_footer">
                                                <div class="container">
                                                    <article class="main_footer_optin">
                                                        <header class="main_footer_optin_header">
                                                            <h3>Quer 10% de desconto?</h3>
                                                            <p>Informe o seu melhor e-mail abaixo e recebe un cupom com 20% de desconto para sua primeira compra!</p>
                                                        </header>
                                                        <form class="main_footer_optin_form">
                                                            <input class="radius" type="email" name="email" placeholder="Informe o seu e-mail"/>
                                                            <button class="btn radius transitions icon-mail">Quero meu desconto!</button>
                                                        </form>
                                                    </article>
                                                    <div class="main_footer_nav flex">
                                                        <nav class="flex-3">
                                                            <h4>Menu</h4>
                                                            <a href="#" title="menu-Coleção-2018 ">- Coleção 2018</a>
                                                            <a href="#" title="menu-Masculino">- Masculino</a>
                                                            <a href="#" title="menu-Feminino">- Feminino</a>
                                                            <a href="#" title="menu-Novidades">- Novidades</a>

                                                        </nav>

                                                        <nav class="flex-3">
                                                            <h4>Contato</h4>
                                                            <p>- (12)2222-2222</p>
                                                            <p>- contato@jowstyle.com.br</p>
                                                            <p>- Jacareí - SP</p>
                                                        </nav>         
                                                        <nav class="flex-4">
                                                            <h4>Parceiros</h4>
                                                            <ul class="main_footer_nav_pays flex">
                                                               
                                                                <li class="flex-2">
                                                                    <a href="#" title="Parceiros-transport">
                                                                        <img src="_img/logoTransport.png" alt="Parceiros-transport" title="Parceiros-transport">
                                                                        <p class="desc-p">Salão de Festas</br> Espaço Leblon</br>(12)98823-4391 / 98833-0896</p>
                                                                    </a>
                                                                </li>
                                                                <li class="flex-2">
                                                                    <a href="#" title="salao-espaço-leblon">
                                                                        <img src="_img/logo-salao-espaço-leblon.png" alt="salao-espaço-leblon" title="salao-espaço-leblon">
                                                                        <p class="desc-p">Salão de Festas</br> Espaço Leblon</br>(12)98823-4391 / 98833-0896</p>
                                                                    </a>
                                                                </li>
                                                                         
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                                <div class="main_footer_bottom">
                                                    <div class="container flex">
                                                        <div class="main_footer_bottom_copy">
                                                            <img src="_img/marca2.png" alt="Jow Style" title="Jow Style">
                                                            <p>"Nosso estilo é a nossa marca"</p>

                                                        </div>
                                                        <nav class="main_footer_bottom_social">
                                                            <a href="#" class="icon transitions"><img class="icon transitions" title="Jow Style-redes-sociais"src="_img/sociais/twitter.png" alt="Jow Style-redes-sociais"/></a>
                                                            <a href="#" class="icon transitions"><img class="icon transitions" title="Jow Style-redes-sociais"src="_img/sociais/facebook.png" alt="Jow Style-redes-sociais"/></a>
                                                            <a href="#" class="icon transitions"><img class="icon transitions" title="Jow Style-redes-sociais"src="_img/sociais/instagram.png" alt="Jow Style-redes-sociais"/></a>
                                                        </nav>
                                                    </div>
                                                    <p class="cop">Todos os Direitos Reservados fccompany®</p>
                                                </div>
                                            </footer>
                                            <script src="Assets/js/jquery-3.3.1.min.js"></script>
                                            <script src="Assets/js/scripts.js"></script>
                                            </body>
                                            </html>
