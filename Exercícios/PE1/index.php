<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu site">
    <meta name="keywords" content="Projeto, portfolio, site, landingpage">
    <meta name="author" content="Victor Bianchi">
    <title>Home - PE1</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/082f47588d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo left">Logomarca</div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav><!--desktop-->
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav><!--desktop-->
            <div class="clear"></div>
        </div><!--container-->
    </header>

    <section class="banner-principal">
        <div class="overlay"></div>
        <div class="container">
            <form>
                <h2>Qual o seu melhor e-mail?</h2>
                <input type="email" name="email" id="email" placeholder="seu@email.com" required>
                <input type="submit" value="Cadastrar" name="sbmt">
            </form>
        </div><!--container-->
    </section><!--banner-principal-->

    <section class="descricao-autor">
        <div class="container">
            <div class="w50 left">
                <h2>Mary A. Simpson</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam soluta illum qui nisi alias maiores, nam iste accusamus earum maxime molestias suscipit labore ex aliquid ab modi quas quidem dolorem! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, doloribus et quidem atque dolor nostrum soluta nesciunt repudiandae maiores ea? Nesciunt unde quaerat vitae numquam placeat cum? A, explicabo quidem!</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus nemo reprehenderit ut quisquam architecto libero, accusantium fugiat corporis iste? Fugiat quia beatae quidem exercitationem aliquid, maxime ut laudantium suscipit officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat perferendis laudantium repellat placeat impedit nostrum quas! A aspernatur cupiditate tenetur nulla facere, delectus iste quasi voluptatum deserunt laudantium nemo provident!</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus nemo reprehenderit ut quisquam architecto libero, accusantium fugiat corporis iste? Fugiat quia beatae quidem exercitationem aliquid, maxime ut laudantium suscipit officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat perferendis laudantium repellat placeat impedit nostrum quas! A aspernatur cupiditate tenetur nulla facere, delectus iste quasi voluptatum deserunt laudantium nemo provident!</p>
            </div><!--w50-->

            <div class="w50 right">
                <img class="right" src="./user.jpg" alt="imagem do usuário">
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--container-->
    </section><!--descricao-autor-->

    <section class="especialidades">
        <div class="container">
            <h2 class="title">Especialidades</h2>
            <div class="box-especialidade left w33">
                <h3 class="fa-brands fa-css3"></h3>
                <h3>CSS3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda doloribus rerum quo sit beatae deserunt cupiditate consequatur. Inventore, sunt expedita! Tempore eum porro quidem iusto! Suscipit odit tenetur libero omnis.</p>
            </div><!--box-especialidade-->

            <div class="box-especialidade left w33">
            <h3 class="fa-brands fa-html5"></h3>
                <h3>HTML5</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda doloribus rerum quo sit beatae deserunt cupiditate consequatur. Inventore, sunt expedita! Tempore eum porro quidem iusto! Suscipit odit tenetur libero omnis.</p>
            </div><!--box-especialidade-->

            <div class="box-especialidade left w33">
            <h3 class="fa-brands fa-square-js"></h3>
                <h3>JavaScript</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda doloribus rerum quo sit beatae deserunt cupiditate consequatur. Inventore, sunt expedita! Tempore eum porro quidem iusto! Suscipit odit tenetur libero omnis.</p>
            </div><!--box-especialidade-->
            <div class="clear"></div>
        </div><!--container-->
    </section><!--especialidades-->

    <section class="extras">
        <div class="container">
            <div class="w50 depo-cont left">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                    <q class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae corporis nostrum aut totam autem fuga veritatis quod mollitia natus provident. Vel recusandae voluptas voluptate laborum harum veniam rerum ad incidunt.</q>
                    <p class="nome-autor">John Smith</p>
                </div><!--depoimento-single-->

                <div class="depoimento-single">
                    <q class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae corporis nostrum aut totam autem fuga veritatis quod mollitia natus provident. Vel recusandae voluptas voluptate laborum harum veniam rerum ad incidunt.</q>
                    <p class="nome-autor">Lary Duck</p>
                </div><!--depoimento-single-->

                <div class="depoimento-single">
                    <q class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae corporis nostrum aut totam autem fuga veritatis quod mollitia natus provident. Vel recusandae voluptas voluptate laborum harum veniam rerum ad incidunt.</q>
                    <p class="nome-autor">Lisa Lee</p>
                </div><!--depoimento-single-->
            </div><!--w50-->

            <div class="w50 serv-cont right">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, doloremque harum. Perferendis, eos officia voluptates doloremque, expedita odio magnam dolorem quam mollitia reprehenderit beatae ipsum. Incidunt dolorem nemo voluptatibus repellat.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, doloremque harum. Perferendis, eos officia voluptates doloremque, expedita odio magnam dolorem quam mollitia reprehenderit beatae ipsum. Incidunt dolorem nemo voluptatibus repellat.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, doloremque harum. Perferendis, eos officia voluptates doloremque, expedita odio magnam dolorem quam mollitia reprehenderit beatae ipsum. Incidunt dolorem nemo voluptatibus repellat.</li>
                    </ul>
                </div><!--servicos-->
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--container-->
    </section><!--extras-->

    <footer>
        <div class="container">
            <p>Todos os direitos reservados</p>
        </div>
    </footer>

    
</body>
</html>