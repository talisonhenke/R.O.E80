<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        <title>R.O.E</title>

    </head>
    <body class="gradient-background">
        <header class="cover-header text-center">
            <img class="img-fluid" src="https://vgprojetos.com/wp-content/uploads/2022/05/P8-IMG-1.jpg.webp" alt="New York">
            <div class="profile-image rounded-circle d-inline-flex justify-content-center">
                <img class="img-profile rounded-circle img-fluid" src="images/vecteezy_default-profile-account-unknown-icon-black-silhouette_20765399.jpg" alt="">
            </div>
        </header>
        <div class="container mx-auto d-block">
            <div class="about mx-auto d-block col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h2 class="name text-center text-white">Rafael Oliveira Erben</h2>
                <p class="skill text-center text-white"><i class="bi bi-houses"></i> Corretor e avaliador de imóveis</p>
                <p class="skill text-center text-white text-page">Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto </p>

            </div>
            <div class="social-media text-center mx-auto">
                <ul class="list-unstyled d-inline-flex justify-content-between">
                    <li><a href="https://www.facebook.com/profile.php?id=100003666284698" target="_blank"> <i class="bi bi-facebook icon-facebook social-icons-size p-2"></i></a></li>
                    <li><a href="https://www.instagram.com/rafael.erben/" target="_blank"> <i class="bi bi-instagram icon-instagram social-icons-size p-2"></i></a></li>
                    <li><a href="#"> <i class="bi bi-linkedin icon-youtube social-icons-size p-2"></i></a></li>
                    <li><a href="https://wa.me/5553984734353" target="_blank"> <i class="bi bi-whatsapp icon-youtube social-icons-size p-2"></i></a></li>
                    <!-- <li><a href="#"> <i class="bi bi-youtube icon-youtube social-icons-size p-2"></i></a></li> -->
                </ul>
            </div>
            <div class="contact text-center col-sm-12 col-md-6 col-lg-6 col-xl-6 mx-auto">
                <a href="https://wa.me/5553984734353" target="_blank" class="text-decoration-none text-black"><button type="button" class="btn btn-light contact-button">Fale comigo no whatsapp!</button></a>
                <h2 class="text-white mt-2">OU</h2>
                <p class="text-white my-2 text-page">Cadastre-se que eu mesmo entrarei em contato com você o quanto antes.</p>
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-light contact-button mb-5">Envie-me um e-mail!</button>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Contato</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Nome:</label>
                        <input type="text" required placeholder="Digite seu nome..." class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">E-mail:</label>
                        <input type="text" required placeholder="Digite seu email..." class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Telefone:</label>
                        <input type="tel" maxlength="14" required data-js="phone"  placeholder="Ex. (xx)xxxx-xxxx" class="form-control" id="telefone">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Mensagem:</label>
                        <textarea class="form-control" id="message-text" style="height: 300px" placeholder="Descreva suas preferências e necessidades para que eu possa oferecer as melhores opções..."></textarea>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Enviar mensagem</button>
                </div>
                </div>
            </div>
            </div>
            <div class="text-end">
                <a href="/example2"><button class='btn btn-warning  '> Exemplo 2 </button></a>
            </div>
        </div>
        <footer class=""></footer>
    </body>
    <script type="text/javascript" src="assets/js/cover_background.js"></script>
    <script>
        const formato = {

        phone (value) {

        return value

            .replace(/\D/g, '')

            .replace(/(\d{2})(\d)/, '($1)$2')

            .replace(/(\d{4})(\d)/, '$1-$2')

            .replace(/(\d{4})-(\d)(\d{4})/, '$1$2-$3')

            .replace(/(-\d{4})\d+?$/, '$1')

        }

        }



        document.querySelectorAll('input').forEach(($input) => {

        const field = $input.dataset.js

        $input.addEventListener('input', (e) => {

        e.target.value = formato[field](e.target.value)

        }, false)

        })
    </script>
</html>
