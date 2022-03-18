<?php require("checkUp.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Front-End/src/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Front-End/src/css/style.css">
    <script src="/Front-End/src/js/bootstrap.min.js"></script>
    <script src="/Front-End/src/js/script.js"></script>
    <title>Medicine</title>
</head>
<body>
    <div class="wrapper">
        <header class="d-flex align-items-center ">
            <div class="header__blockInfo d-flex">
                <div class="header__burger" id="burger">
                    <span></span>
                </div>
                <img src="/Front-End/src/img/LOGO.svg" alt="logo">
                <div class="header__address">
                    <div class="d-flex header__town">
                        <img src="/Front-End/src/img/Vector.svg" alt="marker">
                        <p>Ростов-на-Дону</p>
                    </div>
                    <div class="header__street">
                        <p>ул.Ленина, 2Б</p>
                    </div>
                </div>
            </div>
            <div class="d-flex header__contactInfo align-items-center">
                <div class="d-flex header__number">
                    <img src="/Front-End/src/img/whatsapp 1.svg" alt="whatsapp">
                    <div class="header__shortInfo">
                        <p>+7(863) 000 00 00</p>
                        <p>Ростов-на-Дону</p>
                    </div>                
                </div>
                <button type="button" class="header__button btn btn-primary greenLight " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Записаться на прием</button>
            </div>
        </header>
            <div class="menu">
                <ul>
                    <li><a href="">О клинике</a</li>
                    <li><a href="">Услуги</a></li>
                    <li><a href="">Специалисты</a></li>
                    <li><a href="">Цены</a></li>
                    <li><a href="">Контакты</a></li>                  
                </ul>
                <button type="button" class="header__button btn btn-primary greenLight" id="buttonMenu">Записаться на прием</button>
            </div>
            <div class="container-fluid p-0">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Новое сообщение</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                 </div>
                 <div class="modal-body">
                   <form action="sendMessage.php" method="post">
                     <div class="mb-3">
                       <label for="recipient-name" class="col-form-label">Ваше имя:</label>
                       <input type="text" name="name" class="form-control" id="recipient-name">
                     </div>
                     <div class="mb-3">
                       <label for="message-text" class="col-form-label">Сообщение:</label>
                       <textarea class="form-control" name="message" id="message-text"></textarea>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Отправить сообщение</button>
                     </div>
                   </form>
                 </div>
                
               </div>
             </div>
            </div>
                <div class="col-12 columnInfo d-flex">
                    <div class="columnInfo__left col-6">
                        <div class="columnInfo__containerLeft">
                            <div class="columnInfo__wrapperLeft">
                                    <p>Многопрофильная клиника для детей и взрослых</p>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, vero atque. Aut optio quasi modi ex est velit, quibusdam dolorum maiores dolore unde repudiandae harum necessitatibus magnam iste obcaecati dolorem!</p>
                            </div>            
                        </div>              
                    </div>
                    <img class="columnInfo__right col-6" src="/Front-End/src/img/columnImage.png" alt="adv">
                </div>
                <div class="col-12 d-flex justify-content-center ">
                    <div class="checkUp carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <?php
                            while ($checkUp = $query->fetch_assoc()): ?> {
                                <div class="carousel-item <?php if($temp==null){$temp = 1; echo ("active");}?>">
                                    <div class="checkUp__container">
                                        <div class="checkUp__text">
                                                <p>CHECK-UP</p>
                                                <p class="checkUp__gender">для <?= $checkUp["gender"];?></p>
                                                <ul>
                                                    <?php 
                                                    $points = explode("/n", $checkUp["text"]);
                                                    foreach ($points as $point) {
                                                        echo "<li>$point</li>";
                                                    }
                                                    ?>
                                                </ul>
                                                <div class="checkUp_price d-flex">
                                                    <p class="checkUp__discPrice"><?=$checkUp["newPrice"]; ?>₽</p>
                                                    <p class="checkUp__startPrice"><?=$checkUp["oldPrice"]; ?>₽</p>
                                                </div>                
                                        </div>   
                                        <div class="checkUp__buttons d-flex">
                                                <button class="btn btn-primary greenLight " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Записаться</button>
                                                <button class="btn btn-primary greenLight">Подробнее</button>
                                        </div>            
                                    </div>
                                    <img class="checkUp__image" src="/Front-End/src/img/doctor-working-table 1.png">
                                </div>
                            }
                        <?php endwhile; ?>

                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Предыдущий</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Следующий</span>
                        </button>
                    </div>
                </div>
            </div>
            <footer class="greenDark d-flex align-items-center">
                <div class="footer__container d-flex">
                    <img class="footer__logo" src="/Front-End/src/img/LOGO2.svg" alt="logo">
                    <ul class="footer__menu">
                        <li><a href="">О клинике</a></li>
                        <li><a href="">Услуги</a></li>
                        <li><a href="">Специалисты</a></li>
                        <li><a href="">Цены</a></li>
                        <li><a href="">Контакты</a></li>
                        
                    </ul>
                    <ul class="footer__social">
                        <li><img src="/Front-End/src/img/instagram 4 1.svg" alt=""></li>
                        <li><img src="/Front-End/src/img/whatsapp 1 1.svg" alt=""></li>
                        <li><img src="/Front-End/src/img/telegram 1.svg" alt=""></li>
                    </ul>
                </div> 
            </footer>
    </div>
   
</body>
</html>