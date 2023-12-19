<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog light</title>
    <style>
        * {
    margin: 0px;
    padding: 0px;
    text-decoration: none;
    font-family: sans-serif;
}

.body{
    background-color: #5D71DD;
}

.nav__container {
    background-color: white;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}

.logo {
    width: 50px;
    height: 50px;
    margin-left: 200px;
    margin-top: 5px;
}

.nav__menu {
    gap: 20px;
    margin-right: 260px;
    display: flex;
}

.nav__button{
    color: black;
}

.number {
    color: #5D71DD;
}

.Suffix {
    width: 100%;
    height: 300px;
}

.Wallpaper {
    width: 100%;
    height: 300px;
}

.Posts{
    width: 85vw;
    height: 100vw;
    background-color: lightgray;
}

.Main__posts{
    width: 85%;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    margin-left: 15vw;
}

.post__first{
    border-radius: 1vw;
    background-color: white;
    width: 50vw;
    height: 10vw;
}

.text{
    padding: 20px;
}

.categ{
    color: #5D71DD;
    font-size: 12px;
    display: inline;
}

.data{
    color: #2F222266;
    color: rgba(0, 0, 0, 0.5);
    font-size: 12px;
    margin-left: 85%;
    display: inline;
}

.title__text{
    font-size: 24px;
    font-weight: bolder;
    margin-top: 2vw ;
}

.impotent__text{
    color: #2F222266;
    color: rgba(0, 0, 0, 0.5);
    margin-top: 1vw;
}

.post__second{
    margin-top: 1.25vw;
    width: 50vw;
    height: 15vw;
    display: flex;
    flex-wrap: row   wrap;
    justify-content: center;
}

.data__second{
    color: #2F222266;
    color: rgba(0, 0, 0, 0.5);
    font-size: 12px;
    margin-left: 72%;
    display: inline;
}

.second__text{
    margin-top: 1.25vw;
    border-radius: 1vw;
    background-color: white;
    width: 35vw;
    height: 16vw;
    padding: 20px;
}

.new__categ{
    margin-left: 1.5vw;
    margin-top: 1.25vw;
    border-radius: 1vw; 
    float: right;
    background-color: #5D71DD;
    width: 13.5vw;
    height: 18vw;
}

.back__categ{
    margin: 2vw;
    background-color: white;
    background-color: rgba(255, 255, 255, 0.5);
    width: 80px;
    height: 30px;
    border-radius: 0.5vw;
}

.categ__second{
    color: white;
    font-size: 12px;
    display: flex;
    justify-content: center;
}

.dop__categ{
    color: white;
    margin: 0 0 0 2vw;
}

.ts{
    margin-top: 7px;
}

.data__sec{
    color: white;
    font-size: 12px;
    margin: 8vw 0 0 2vw;
}

.post__third{
    margin-top: 5.5vw;
    width: 50vw;
    height: 15vw;
    display: flex;
    justify-content: center;
}

.third__categ{
    margin-top: 1.25vw;
    border-radius: 1vw; 
    background-image: url("Rectangle\ 4.jpg");
    width: 13.5vw;
    height: 18.5vw;
}

.third__text{
    margin-left: 1.5vw;
    margin-top: 1.25vw;
    border-radius: 1vw;
    background-color: white;
    width: 33.5vw;
    height: 6.5vw;
    padding: 20px;
}

.back__categ__second{
    margin: 2vw;
    background-color: white;
    background-color: rgba(255, 255, 255, 0.2);
    width: 170px;
    height: 30px;
    border-radius: 0.5vw;
}

.post__second__2{
    margin-top: 6.25vw;
    width: 50vw;
    height: 15vw;
    display: flex;
    flex-wrap: row   wrap;
    justify-content: center;
}

.fourth__categ{
    margin-top: 1.25vw;
    border-radius: 1vw; 
    background-image: url("Rectangle\ 3.png");
    width: 13.5vw;
    height: 18.5vw;
}

.sides{
    margin-top: 8vw;
    margin-left: 15vw;
    word-spacing: 15px ;
}

.fonted{
    text-decoration: underline;
}

footer{
    background-color: lightgray ;
    width: 100%;
}

.logo__footer{
    display: block;
    margin-left: auto;
    margin-right: auto
}

.footer__text{
    margin-top: 2vw;
    display: flex;
    flex-wrap: row wrap;
    justify-content: center;
    text-align: center;
}

.text__foot__2{
    margin-left: 30px;
}

.text__foot{
    margin-left: 60px;
}

.org{
    margin-top: 3vw;
    display: flex;
    flex-wrap: row wrap;
    justify-content: center;
    text-align: center;
    font-size: 10px;
}

aside {
    display: table-cell;
}

.side{
    display: table;
    width: 100%;
    margin-top: 2vw;
}

.main__side{
    width: 300px;
    height: 100px;
    border-radius: 1vw;
}

.data__side{
    color: rgba(0, 0, 0, 0.5);
    font-size: 12px;
    margin-top: 10px;
}

.glav__text{
    padding: 20px;
}

.post__1{
    padding: 20px;
    margin-top: 15px;
}

main{
    background-color: lightgray;
}

.right{
    border-radius: 1vw;
    background-color: rgb(255, 255, 255);
    display: flex;
    flex-direction: column;
}

.email{
    background-color: white;
    border-radius: 1vw;
    justify-content: center;
    margin-top: 1vw;
    height: 200px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.text__email{
    margin-top: 40px;
    margin-right: 40px ;
}

.sub__bottom{
    margin-top: 20px;
    background-color: #5D71DD;
    width: 170px;
    height: 50px;
    border-radius: 1vw;
}

.sub{
    margin-left: 30px;
    display: inline;
    justify-content: center;
}

.arow{

    margin-top: 10px;
}
    </style>
</head>
<body>
    <header class="header">
        <div class="nav__container">
            <div class="nav__logo">
                <img src="Group 18.png" alt="" class="logo">
            </div>
            <div class="nav__menu">
                <a href="#" class="nav__button">Главная</a>
                <a href="#" class="nav__button">О нас</a>
                <a href="#" class="nav__button">Контакты</a>
                <a href="#" class="nav__button">Поиск</a>
                <img src="Vector.png" alt="" class="phone">
                <a href="#" class="number">+7 (987) 887-87</a>
            </div>
        </div>
    
        <section class="Suffix">
            <img src="Rectangle 11.png" alt="" class="Wallpaper">
        </section>
    </header>
    <main>
        <section class="Posts">
            <div class="Main__posts">
                <section>
                    <div class="side">
                        <div class="post__first">
                            <div class="text">
                                <div class="categ">
                                    <a>Категория 1</a>
                                </div>
                                <div class="data">
                                    <a>13 дек 2020</a>
                                </div>
                                <div class="title__text">
                                    <p>Управление ИТ-активами – скучная рутина или творческая задача?</p>
                                </div>
                                <div class="impotent__text">
                                    <a>Размышляя об управлении ИТ-активами, я вспомнил один учебный пример. 
                                        Менеджер по ИТ-мощностям в крупной компании периодически готовил толстенный отчёт руководству.
                                         В очередной раз он не принёс отчёт, решив проверить, нужен ли он вообще. </a>
                                </div>
                            </div>
                        </div>
                        <div class="post__second">
                            <div class="second__text">
                                <div class="categ">
                                    <a>Категория 1</a>
                                </div>
                                <div class="data__second">
                                    <a>13 дек 2020</a>
                                </div>
                                <div class="title__text">
                                    <p>Управление ИТ-активами – скучная рутина или творческая задача?</p>
                                </div>
                                <div class="impotent__text">
                                    <a>Размышляя об управлении ИТ-активами, я вспомнил один учебный пример. 
                                        Менеджер по ИТ-мощностям в крупной компании периодически готовил толстенный отчёт руководству.
                                        В очередной раз он не принёс отчёт, решив проверить, нужен ли он вообще. </a>
                                </div>
                            </div>
                            <div class="new__categ">
                                <div class="back__categ">
                                    <div class="categ__second">
                                        <a class="ts">Категория 1</a>
                                    </div>
                                </div>
                                <div class="dop__categ">
                                    <a>ITAM&SAMDay – самая настоящая удача!</a>
                                </div>
                                <div class="data__sec">
                                    <a>13 дек 2020</a>
                                </div>
                            </div>
                        </div>
                        
                <div class="post__third">
                    <div class="third__categ">
                        <div class="back__categ__second">
                            <div class="categ__second">
                                <a class="ts">Очень длинная категория 2</a>
                            </div>
                        </div>
                        <div class="dop__categ">
                            <a>Управление ИТ-активами – скучная рутина или творческая задача?</a>
                        </div>
                        <div class="data__sec">
                            <a>13 дек 2020</a>
                        </div>
                    </div>
                    <div class="third__block">
                        <div class="third__text">
                            <div class="categ">
                                <a>Категория 1</a>
                            </div>
                            <div class="data__second">
                                <a>13 дек 2020</a>
                            </div>
                            <div class="title__text">
                                <p>Управление ИТ-активами – скучная рутина или творческая задача?</p>
                            </div>
                        </div>
                        <div class="third__text">
                            <div class="categ">
                                <a>Категория 1</a>
                            </div>
                            <div class="data__second">
                                <a>13 дек 2020</a>
                            </div>
                            <div class="title__text">
                                <p>ITAM&SAMDay – самая настоящая удача!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="main__side">
                            <div class="right">
                                <div class="glav__text">
                                    <a>Популярные новости</a>
                                </div>
                                <div class="post__1">
                                    <a>ITAM&SAMDay – самая настоящая удача!</a>
                                    <div class="data__side">
                                        <p>13 дек 2020</p>
                                    </div>
                                </div>
                                <div class="post__1">
                                    <a>Секреты лицензирования. Всё, что вы хотели знать про Microsoft, 
                                        SAP и Oracle, но не знали, у кого спросить ...</a>
                                    <div class="data__side">
                                            <p>13 дек 2020</p>
                                    </div>
                                </div>
                                <div class="post__1">
                                    <a>Менеджмент XXI века. Надо ли готовиться к изменениям или мы давно уже должны
                                         были измениться?</a>
                                    <div class="data__side">
                                        <p>13 дек 2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="email">
                                <p class="text__sub">Подписка на рассылку</p>
                                <p class="text__email">Email@gmail.com</p>
                                <div class="sub__bottom">
                                    <a class="sub">Подписаться</a>
                                    <img class="arow" src="Vector1.png">
                                </div>
                            </div>
                        </aside>
                        
                    </div>
                </section>
                <div class="post__second__2">
                    <div class="second__text">
                        <div class="categ">
                            <a>Категория 1</a>
                        </div>
                        <div class="data__second">
                            <a>13 дек 2020</a>
                        </div>
                        <div class="title__text">
                            <p>Управление ИТ-активами – скучная рутина или творческая задача?</p>
                        </div>
                        <div class="impotent__text">
                            <a>Размышляя об управлении ИТ-активами, я вспомнил один учебный пример. 
                                Менеджер по ИТ-мощностям в крупной компании периодически готовил толстенный отчёт руководству.
                                В очередной раз он не принёс отчёт, решив проверить, нужен ли он вообще. </a>
                        </div>
                    </div>
                    <div class="new__categ">
                        <div class="back__categ">
                            <div class="categ__second">
                                <a class="ts">Категория 1</a>
                            </div>
                        </div>
                        <div class="dop__categ">
                            <a>ITAM&SAMDay – самая настоящая удача!</a>
                        </div>
                        <div class="data__sec">
                            <a>13 дек 2020</a>
                        </div>
                    </div>
                </div>
                <div class="post__third">
                    <div class="fourth__categ">
                        <div class="back__categ__second">
                            <div class="categ__second">
                                <a class="ts">Очень длинная категория 2</a>
                            </div>
                        </div>
                        <div class="dop__categ">
                            <a>Управление ИТ-активами – скучная рутина или творческая задача?</a>
                        </div>
                        <div class="data__sec">
                            <a>13 дек 2020</a>
                        </div>
                    </div>
                    <div class="third__block">
                        <div class="third__text">
                            <div class="categ">
                                <a>Категория 1</a>
                            </div>
                            <div class="data__second">
                                <a>13 дек 2020</a>
                            </div>
                            <div class="title__text">
                                <p>Управление ИТ-активами – скучная рутина или творческая задача?</p>
                            </div>
                        </div>
                        <div class="third__text">
                            <div class="categ">
                                <a>Категория 1</a>
                            </div>
                            <div class="data__second">
                                <a>13 дек 2020</a>
                            </div>
                            <div class="title__text">
                                <p>ITAM&SAMDay – самая настоящая удача!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sides">
                    <font class="fonted" color=#5D71DD>1</font>
                    <a> 2 </a> 
                    <a> 3 </a> 
                    <a> 4 </a> 
                    <a> ... </a> 
                    <a> 10 </a> 
                    <font color=#5D71DD>Следующая ></font>
                </div>
            </div>
        </section>
    </main>
    
    <footer>
        <img src="Group 18.png" alt="" class="logo__footer">
        <div class="footer__text">
            <div class="text__foot__2">О нас</div>
            <div class="text__foot">Галерея</div>
            <div class="text__foot">Новости</div>
            <div class="text__foot">Контакты</div>
        </div>
        <div class="org">
            ООО “Организация” 2020. Все права защищены
        </div>
    </footer>
</body>
</html>