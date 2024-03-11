<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    
    <link rel="shortcut icon" href="{{ asset('img/logoFundo.png') }}" type="image/x-icon">

    <title>Cripto Correio Elegante</title>
</head>
<body>
    <header>
        <a href="#">
            <img src="{{ asset('img/logo.png') }}" alt="Logo Cripto Correio Elegante">
        </a>

        <div class="barraNav"></div>
        <nav class="menuNav">
            <a href="#" class="opcaoNav">Inicio</a>
            <a href="#" class="opcaoNav">Recado</a>
        </nav>
        <div class="barraNav"></div>
    </header>

    <main>
        <section class="sessaoInicio" id="inicio">
            <div class="sessaoInicioConteudo">
                <div class="containerImagens">
                    <div class="imagem">
                        <img src="{{ asset('img/casalGay.png') }}" alt="Imagem de Casal Gay dentro de um Circulo">
                    </div>
                    <div class="imagem">
                        <img src="{{ asset('img/casalHetero.png') }}" alt="Imagem de Casal Hetero dentro de um Circulo">
                    </div>
                    <div class="imagem">
                        <img src="{{ asset('img/casalLesbico.png') }}" alt="Imagem de Casal Lesbico dentro de um Circulo">
                    </div>
                </div>

                <h1>Envie e desvende mensagens criptografadas!</h1>
                <p class="textoInicio">
                    Cripto Correio Elegante é o lugar onde os enigmas se tornam presentes e a diversão é garantida. <strong>Se você está ansioso para enviar uma mensagem cheia de suspense ou intrigado com uma carta enigmática que acabou de receber, este é o lugar para você!</strong> 
                </p>

                <div class="containerOpcoes">
                    <div class="conteudoContainer">
                        <div class="opcaoUsuario">
                            <a href="#tutorialRemetente" class="opcao1">Quero enviar</a>
                            <p class="texto">
                                Para você que quer <strong class="textoDestaque2">enviar a mensagem secreta e precisa de uma mãozinha.</strong>
                            </p>
                        </div>
                        
                        <div class="opcaoUsuario">
                            <a href="#tutorialDestinatario" class="opcao2">Quero desvendar</a>
                            <p class="texto">
                                Para você que  <strong class="textoDestaque3">recebeu uma mensagem secreta!</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Usei o site Shape Divider APP para isso -->
            <div class="wave">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
        </section>


        <section class="sessaoPassoRemetente" id="tutorialRemetente">
            <div class="sessaoPassoRemetenteConteudo">
                <div class="chamadaTutorial">
                    <h2 class="subtitulo1">Precisa de ajuda? <br>Te dou uma mãozinha</h2>
                    <p class="texto">
                        Se liga no <strong class="textoDestaque3">passo a passo para criptografar</strong> seu recado:
                    </p>
                </div>

                <div class="containerTutorial">
                    <div class="passoRemetente">
                        <h3 class="passo">1º passo</h3>
                        <p class="textoPasso">Hora de caprichar nas palavras</p>
                        <p class="explicacaoPasso">
                            <strong class="textoDestaque">Clique em 'Recado' na barra de navegação</strong> e deixe sua inspiração fluir enquanto escreve sua mensagem! 
                        </p>
                        <p class="explicacaoPasso">
                            <strong class="textoDestaque">Depois é só clicar em 'Criptografar'</strong>
                        </p>
                        <p class="explicacaoPasso">
                            Não se esqueça de expressar seus sentimentos e emoções para tornar a experiência ainda mais especial.
                        </p>
                    </div>

                    <div class="passoRemetente">
                        <h3 class="passo">2º passo</h3>
                        <p class="textoPasso">Enviando a mensagem</p>
                        <p class="explicacaoPasso">
                            Com sua mensagem pronta, <strong class="textoDestaque">clique em enviar e preencha os campos solicitados. </strong>Não se esqueça de verificar seu e-mail e adicionar uma assinatura pessoal ou deixar o mistério no ar!  
                        </p>
                        <p class="explicacaoPasso">
                            Agora é só enviar e confiar que o resto está em boas mãos.
                        </p>
                    </div>
                </div>
            </div>
            <a href="{{ url('/') }}" class="opcaoEstouProntoRemetente">Estou pronto(a)!</a>

            <!-- Usei o site Shape Divider APP para isso -->
            <div class="wave2">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
        </section>


        <section class="sessaoPassoDestinatario" id="tutorialDestinatario">
            <div class="sessaoPassoDestinatarioConteudo">
                <div class="chamadaTutorial2">
                    <h2 class="subtitulo2">Pronto(a) para desvendar a mensagem?</h2>
                    <p class="texto">
                        Se liga no <strong>passo a passo para descriptografar</strong> seu recado:
                    </p>
                </div>

                <div class="containerTutorial">
                    <div class="passoDestinatario">
                        <h3 class="passo">1º passo</h3>
                        <p class="textoPasso">Hora de caprichar nas palavras</p>
                        <p class="explicacaoPasso">
                            <strong class="textoDestaque">Clique em 'Recado' na barra de navegação e cole a mensagem recebida no seu E-mail! </strong> 
                        </p>
                        <p class="explicacaoPasso">
                            Depois é só clicar em 'Descriptografar' e desvendar esse mistério.
                        </p>
                        <p class="explicacaoPasso">
                            E então? Ele(a) ta tão na sua cara!
                        </p>
                    </div>
                </div>
            </div>
            <a href="{{url('/teste')}}" class="opcaoEstouProntoDestinatario">Estou pronto(a)!</a>
        </section>
    </main>

    <footer>
        <div class="conteudoFooter">
            <div class="dev">
                <div class="icones">
                    <a href="https://github.com/LarissaSL" target="_blank" class="footerLink">
                        <img src="{{ asset('img/github.png') }}" alt="Logo do GitHub">
                    </a>
                    <a href="https://www.linkedin.com/in/larissasilvasl/" target="_blank" class="footerLink">
                        <img src="{{ asset('img/linkedin.png') }}" alt="Logo do LinkedIn">
                    </a>
                </div>
                <p class="texto">
                    Design e Desenvolvimento por <strong>Larissa Silva</strong>
                </p>
            </div>

            <div class="design">
                <div class="icones">
                    <a href="http://www.freepik.com" target="_blank" class="footerLink">
                        <img src="{{ asset('img/freepik.png') }}" alt="Logo do Freepik">
                    </a>
                </div>
                <p class="texto">
                    Imagens e Icones Designed by Freepik
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
