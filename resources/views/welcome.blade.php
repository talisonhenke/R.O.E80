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
        <header class="d-block col-12">
            <div class="cover-header-blur d-block mx-auto col-12"></div>
            <div class="cover-header text-center mx-auto d-block col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div class="divtest"></div>
                {{-- <img class="img-fluid cover-image" src="https://www.boredpanda.com/blog/wp-content/uploads/2023/07/26-64b7ec5f9972b__700.jpg" alt="New York"> --}}
                <div class="profile-image rounded-circle d-inline-flex justify-content-center">
                    <div class="img-profile rounded-circle"></div>
                </div>
            </div>
        </header>
        <div class="container mx-auto d-block main-content">
            <div class="about mx-auto d-block col-sm-12 col-md-8 col-lg-6 col-xl-6">
                <h2 class="name text-center text-white">Rafael Oliveira Erben</h2>
                <p class="skill text-center text-white fw-lighte"><i class="bi bi-houses"></i> Corretor e avaliador de imóveis</p>
                {{-- <p class="skill text-center text-white text-page"></p> --}}

            </div>
            <div class="social-media text-center mx-auto">
                <ul class="list-unstyled d-inline-flex justify-content-between">
                    <li><a href="https://www.facebook.com/profile.php?id=100003666284698" target="_blank"> <i class="bi bi-facebook icon-facebook social-icons-size p-2"></i></a></li>
                    <li><a href="https://www.instagram.com/rafael.erben/" target="_blank"> <i class="bi bi-instagram icon-instagram social-icons-size p-2"></i></a></li>
                    <li><a href="#"> <i class="bi bi-linkedin icon-youtube social-icons-size p-2"></i></a></li>
                    <li><a href="https://wa.me/5553984734353?text=Ol%C3%A1,%20Rafael!%20Tudo%20bem?%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20os%20apartamentos%20e%20casas%20do%20programa%20Minha%20casa,%20Miha%20vida." target="_blank"> <i class="bi bi-whatsapp icon-youtube social-icons-size p-2"></i></a></li>
                    <!-- <li><a href="#"> <i class="bi bi-youtube icon-youtube social-icons-size p-2"></i></a></li> -->
                </ul>
            </div>
            <div class="contact text-center col-sm-12 col-md-8 col-lg-6 col-xl-6 mx-auto">
                <a href="https://wa.me/5553984734353?text=Ol%C3%A1,%20Rafael!%20Tudo%20bem?%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20os%20apartamentos%20e%20casas%20do%20programa%20Minha%20casa,%20Miha%20vida." target="_blank" class="text-decoration-none text-black"><button type="button" class="btn btn-light contact-button gradient-button">Fale comigo no whatsapp!</button></a>
                <h2 class="text-white ouclass">OU</h2>
                <p class="text-white text-page">Cadastre-se que eu mesmo entrarei em contato com você o quanto antes.</p>
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-light contact-button gradient-button mb-4 mt-2">Envie-me sua dúvida que entrarei em contato!</button>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Contato</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <form class="needs-validation" id="mail-data" action="{{ route('email.store') }}" method="post"> --}}
                    <form class="needs-validation" id="mail-data" name="mail-data" action="{{ route('email.store') }}" method="post" novalidate>
                        @csrf
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Nome:</label>
                        <div class="input-group">
                            <i class="bi bi-person input-icons p-2 input-group-text"></i>
                            <input type="text" required placeholder="Digite seu nome..." class="form-control" name="name" id="name">
                            <div class="valid-feedback valid-message">
                                Ótimo!
                            </div>
                            <div class="invalid-feedback invalid-message">
                                Insira seu nome nesse campo.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">E-mail:</label>
                        <div class="input-group">
                            <i class="bi bi-at input-icons p-2 input-group-text"></i>
                            <input type="email" required placeholder="Digite seu email..." class="form-control" name="email" id="email">
                            <div class="valid-feedback valid-message">
                                Ótimo!
                            </div>
                            <div class="invalid-feedback invalid-message">
                                Insira seu e-mail nesse campo.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Telefone:</label>
                        <div class="input-group">
                            <i class="bi bi-telephone input-icons p-2 input-group-text"></i>
                            <input type="tel" maxlength="14" required data-js="phone"  placeholder="Ex. (xx)xxxx-xxxx" class="form-control" name="telefone" id="telefone">
                            <div class="valid-feedback valid-message">
                                Ótimo!
                            </div>
                            <div class="invalid-feedback invalid-message">
                                Insira seu telefone nesse campo.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="messageText" class="col-form-label">Mensagem:</label>
                        <div class="input-group">
                            <i class="bi bi-chat-square-text input-icons p-2 input-group-text"></i>
                            <textarea class="form-control" name="messageText" id="messageText" style="height: 300px" placeholder="Descreva suas preferências e necessidades para que eu possa oferecer as melhores opções..." required></textarea>
                            <div class="valid-feedback valid-message">
                                Ótimo!
                            </div>
                            <div class="invalid-feedback invalid-message">
                                Insira sua mensagem nesse campo.
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" form="mail-data" class="btn btn-primary">Enviar mensagem</button>
                </div>
                </div>
            </div>
            </div>
            {{-- <div class="text-end">
                <a href="/example2"><button class='btn btn-warning  '> Exemplo 2 </button></a>
            </div> --}}
        </div>
        <footer class=""></footer>
    </body>
    <script type="text/javascript" src="js/phone.js"></script>
    <script type="text/javascript" src="js/validationForms.js"></script>

    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
      </script>
      <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '805908787767035');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=805908787767035&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Meta Pixel Code -->

</html>
