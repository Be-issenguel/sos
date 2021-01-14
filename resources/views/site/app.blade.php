<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/sos_logo.svg') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-4.1.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/teste.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                {{-- <ul>
                                    <li><a href="#"> <i class="fa fa-phone"></i> +244 936 813 330</a></li>
                                    <li><a href="#"> <i class="fa fa-envelope"></i>mnuena@htomail.com</a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="{{ route('principal') }}">
                                    <img src="{{ asset('img/sos_logo.svg') }}" alt="logo" width="70px">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('principal') }}">home</a></li>
                                        <li><a href="{{ action('CampanhaController@campanhas') }}">campanhas</a></li>
                                        <li><a href="{{ route('faqs') }}">SOS FAQ´s</a></li>
                                        <li><a href="#">como funciona <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('comofunciona') }}">Como Funciona a SOS</a></li>
                                                <li><a href="{{ route('dicas') }}">Dicas Para um SOS bem
                                                        sucedido</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        @auth
                                        <a href="{{ action('HomeController@index') }}">Painel
                                            Admin</a>
                                        @endauth
                                        @guest
                                        <a href="{{ route('sos_login') }}">Entrar</a>
                                        @endguest
                                    </div>
                                    <div class="book_btn d-none d-lg-block">

                                        <a href="{{ route('sos') }}">Iniciar SOS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    @yield('conteudo')
    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="{{ asset('img/sos_logo.svg') }}" alt="" width="75px"
                                        style="background-color:#0E6330">
                                </a>
                            </div>
                            <p class="address_text">A SOS é uma plataforma de angariação de fundos, para financiar
                                projetos sociais que visem a mitigação da pobreza em Angola, contribuindo assim para o
                                crescimento sustentavel do país
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-whatsapp"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Links Úteis
                            </h3>
                            <ul class="links">
                                <li><a href="{{ route('principal') }}">Home</a></li>
                                <li><a href="{{ route('faqs') }}">SOS FAQ´s</a></li>
                                <li><a href="{{ route('comofunciona') }}">Como Funciona</a></li>
                                <li><a href="{{ route('dicas') }}">Dicas</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contactos
                            </h3>
                            <div class="contacts">
                                <p>+244 936 813 330 <br>
                                    mnuena@htomail.com <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Top De Notícias
                            </h3>
                            <ul class="news_links">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ asset('img/news/zunga_2.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>Captação de recursos para alívio de coronavírus</h4>
                                        </a>
                                        <span>Jun 12, 2020</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ asset('img/news/zunga_1.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>CONHEÇA A SOS ANGOLA</h4>
                                        </a>
                                        <span>Jun 12, 2020</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear()); document.write('-' + new Date().getFullYear() + 1);
                                </script> Mnuaena inc. Todos os direitos reservados
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->


    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/ajax-form.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/scrollIt.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/gijgo.min.js') }}"></script>
    <!--contact js-->
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><span style="color: #00E676">Termos & Políticas</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="flex-top mb-30"><span>Obrigado por usar o SOS ANGOLA! Ao usar o software SOS ANGOLA ou
                        qualquer componente desse produto
                        (doravante denominado "Software SOS ANGOLA "), o usuário concorda com os seguintes termos e
                        condições (doravante denominados "Termos e
                        Condições do SOS ANGOLA "). O Software SOS
                        ANGOLA e qualquer componente desse produto são mencionados neste documento como o
                        "Software".</span></div>
                <div class="mb-30"><span>1. USO DO SOFTWARE Nestes Termos e Condições, o SOS ANGOLA concede ao
                        usuário uma licença exclusiva e intransferível de uso do Software
                        distribuído junto com este Contrato, durante a vigência do prazo do Contrato, para acesso
                        simultâneo por vários computadores. O usuário pode armazenar todos os
                        dados na plataforma do software. A mencionada licença será anual, a critério exclusivo do SOS
                        ANGOLA, e é condicional ao recebimento, pelo SOS ANGOLA ou um de seus
                        revendedores autorizados, do pagamento integral do Software, contudo, tal licença poderá ser
                        rescindida conforme o estabelecido nestes Termos e Condições. Os direitos
                        do usuário no que se refere ao Software são limitados àqueles explicitamente concedidos nesta
                        Seção. Os direitos do usuário no que se refere ao Software não abarcam
                        nenhum tipo de transmissão ou uso de mídia, exceto por contrato separado para obtenção de
                        permissão do SOS ANGOLA para tanto. As informações do usuário serão
                        disponibilizadas para exibição mediante o uso do Software são fornecidas para uso apenas do
                        usuário. Não é permitido usar o Software SOS ANGOLA de qualquer maneira que
                        possa danificar, desativar, sobrecarregar ou prejudicar os serviços do SOS ANGOLA ou de qualquer
                        modo que possa interferir no uso e aproveitamento dos serviços do SOS
                        ANGOLA por parte de terceiros. 2. POLÍTICA DE PRIVACIDADE A proteção da privacidade dos usuários
                        é muito importante para o SOS ANGOLA. Como condição para usar o Software,
                        o usuário concorda com os termos da Política de Privacidade do SOS ANGOLA, que poderá ser
                        atualizada periodicamente e sem aviso prévio. As informações coletadas pelo SOS
                        ANGOLA em relação ao uso do Software poderão ser armazenadas e processadas em Angola ou em
                        qualquer outro país onde o SOS ANGOLA ou seus agentes mantenham instalações.
                        Assim sendo, ao usar o Software, o usuário consente que tais informações sejam transferidas para
                        fora de seu país. O usuário reconhece e concorda que o SOS ANGOLA acesse,
                        preserve e divulgue as informações de sua conta quando assim exigido por autoridades jurídicas
                        ou quando acreditar de boafé de que o referido acesso, preservação ou
                        divulgação seja necessário para: (a) satisfazer qualquer legislação, regulamentação, processo
                        jurídico ou solicitação governamental aplicável; (b) impor estes Termos e
                        Condições, incluindo a investigação de suas possíveis violações; (c) detectar, impedir ou
                        abordar problemas técnicos, de fraude e de segurança (incluindo, sem
                        limitação, filtragem de spams); (d) atender a solicitações de suporte do usuário ou (e) proteger
                        os direitos, a propriedade ou a segurança do SOS ANGOLA, de seus
                        usuários e do público.
                        O SOS ANGOLA não será responsável pelo cumprimento ou não dos direitos previstos nestes Termos e
                        Condições.</span></div>
                <div class="mb-30"><i class="fa fa-check" style="color: green;"></i><span>DIREITOS RESERVADOS O
                        usuário reconhece que o Software contém
                        informações reservadas e confidenciais protegidas por leis de propriedade intelectual aplicáveis
                        e outras leis, e (b) o SOS ANGOLA é proprietário de todos os direitos, títulos e participações
                        referentes ao Software e
                        a qualquer outro aplicativo fornecido junto com o Software, incluindo, sem limitação, todos os
                        Direitos de Propriedade Intelectual
                        vinculados ao Software. "Direitos de Propriedade Intelectual" significa todo e qualquer direito
                        existente periodicamente sob as leis
                        de patente, de direito autoral, de segredo comercial, de marca comercial, de concorrência
                        desleal e todos os outros direitos
                        proprietários, bem como sob todos os aplicativos, renovações, extensões e restaurações
                        decorrentes, agora ou doravante vigentes no
                        mundo inteiro. O usuário concorda que não fará nem permitirá a terceiros fazer o seguinte: (i)
                        copiar, vender, licenciar, distribuir,
                        transferir, modificar, adaptar, traduzir, preparar obras derivadas, descompilar, fazer
                        engenharia reversa, desmontar ou tentar obter o
                        código-fonte do Software, salvo havendo eventual permissão; (ii) tomar qualquer providência para
                        burlar ou anular as regras de
                        segurança ou utilização de conteúdo fornecidas, implementadas ou impostas por qualquer
                        funcionalidade (incluindo, sem limitação, a
                        funcionalidade de gerenciamento de direitos digitais) oferecida no Software; (iii) usar o
                        Software para acessar, copiar, transferir,
                        transcodificar ou retransmitir conteúdo violando qualquer lei ou os direitos de terceiros; ou
                        (iv) remover, ocultar ou alterar aviso
                        SOS Angola de direito autoral, de marca registrada ou outros aviso SOS Angola de direitos
                        proprietários do SOS ANGOLA afixados ou
                        contidos no Software ou acessados em conjunto com o Software. 4. ATUALIZAÇÕES AUTOMÁTICAS A
                        aplicação SOS ANGOLA fará atualizações
                        no sistema, como correções de falhas, patches, funções aprimoradas, plug-ins ausentes e novas
                        versões (doravante denominados
                        "Atualizações"). Ao instalar o Software, você concorda em solicitar e receber Atualizações
                        automaticamente. 5. DIREITOS RESTRITOS
                        ftware e qualquer documentação relacionada são considerados "software comercial" e "documentação
                        de software comercial",
                        respectivamente, dentro do contexto das regulamentações de aquisições aplicáveis e de qualquer
                        suplemento referente a elas. incluindo
                        os manuais ou dados técnicos, estará restrito pelos termos, condições e compromisso SOS Angola
                        contidos nestes Termos e Condições do
                        SOS ANGOLA. 6. CUMPRIMENTO DAS LEIS E POLÍTICAS DO SOS ANGOLA Você concorda em cumprir todas as
                        legislações e regulamentações locais
                        referentes ao uso do Software. Você concorda em cumprir quaisquer políticas ou orientações
                        aplicáveis que o SOS ANGOLA. 7. RESCISÃO O
                        usuário poderá rescindir estes Termos e Condições a qualquer momento excluindo definitivamente o
                        Software. Os direitos do usuário serão
                        rescindidosautomática e imediatamente sem aviso prévio por parte do SOS ANGOLA caso o usuário
                        não esteja em conformidade com alguma
                        cláusula destes Termos e Condições. Nesse caso, o usuário deverá excluir imediatamente o
                        Software. Pela extensão máxima permitida pela
                        lei, o SOS ANGOLA reserva-se o direito de rescindir este contrato a qualquer momento e por
                        qualquer motivo.</span></div>

                <div class="mb-30"><strong>ACESSO E USO DOS SERVIÇOS</strong></div>
                <div class="flex-top mb-30"><i class="fa fa-check" style="color: green;"></i><strong>ACESSO E USO DOS
                        SERVIÇOS : </strong><span>Os Serviços SOS são oferecidos como uma plataforma para permitir que
                        um indivíduo, entidade ou
                        instituição de caridade (o "Organizador da campanha") publique uma campanha de angariação de
                        fundos ("Campanha") na Plataforma
                        SOS para aceitar contribuições em dinheiro ("Contribuições") de contribuintes
                        ("Contribuintes").</span></div>

                <div class="flex-top mb-30"><i class="fa fa-check" style="color: green;"></i><strong>Não somos
                        corretores,
                        instituições financeiras, credores ou instituições de caridade: </strong><span>Somos apenas
                        plataformas administrativas. O SOS facilita a campanha dos organizadores da campanha e permite
                        que os doadores façam doações a esses organizadores da campanha.
                        Todas as informações e conteúdos fornecidos pelo SOS relacionados aos Serviços são apenas para
                        fins informativos e
                        o SOS não garante a precisão, integridade, pontualidade ou confiabilidade de tais informações ou
                        conteúdos. Nenhum
                        conteúdo deve servir como aconselhamento financeiro, jurídico, tributário ou outro profissional.
                        Antes de tomar qualquer
                        decisão sobre campanhas, instituições de caridade, doações, doadores ou qualquer informação ou
                        conteúdo relacionado aos
                        Serviços, você deve consultar seu consultor financeiro, jurídico, tributário ou outro consultor
                        profissional, conforme apropriado.
                        Você reconhece que todas as informações e conteúdos acessados por você usando os Serviços são
                        por sua conta e risco.
                    </span></div>

                <div class="flex-top mb-30"><i class="fa fa-check" style="color: green;"></i><strong>Taxas do
                        processador
                        de pagamento: </strong><span>São aplicadas taxas padrão do
                        processador de pagamentos do
                        setor (doravante e no site referido como "Taxas do processador de pagamento").
                        A SOS não tem controle sobre a conduta ou qualquer informação fornecida por um Usuário e, por
                        este meio,
                        se exime de toda a responsabilidade a esse respeito na extensão máxima permitida pela lei
                        aplicável. Não garantimos
                        que uma campanha obtenha uma certa quantidade de doações ou quaisquer doações. Não endossamos
                        nenhuma Campanha, Usuário ou
                        causa e não garantimos, expressa ou implícita, que todas as informações fornecidas através dos
                        Serviços sejam precisas. Nós
                        não assumimos qualquer responsabilidade ou obrigação pelo resultado ou sucesso de qualquer
                        Campanha. Você, como Doador, deve
                        fazer a determinação final quanto ao valor e adequação de contribuir para qualquer Usuário,
                        Campanha ou evento.
                    </span></div>

                <div class="flex-top mb-30"><i class="fa fa-check" style="color: green;"></i><strong>Sem solicitação:
                    </strong><span>As Plataformas de Caridade SOS (coletivamente "Plataformas")
                        são oferecidas para ajudar os Organizadores de Campanha a arrecadar dinheiro. O SOS apenas
                        fornece a tecnologia para permitir a captação de recursos para se conectar
                        com os doadores. A existência dos Serviços não é uma solicitação de doações pelo SOS, e o SOS
                        não se envolve em nenhuma atividade de solicitação ou consulta sobre a
                        solicitação de contribuições do público, em nome de qualquer indivíduo, entidade ou organização.
                        Ao usar os Serviços, você
                        entende e concorda que o SOS não será responsável pelo uso de suas doações ou pela quantidade
                        de fundos arrecadados para o Usuário, Campanha ou evento.</span></div>

                <div class="flex-top mb-30"><i class="fa fa-check" style="color: green;"></i><strong>Doadores:
                    </strong><span>Todas as doações são por sua conta e risco. Quando você
                        faz uma doação através de qualquer uma das plataformas, é sua responsabilidade entender como seu
                        dinheiro será usado. O SOS não se responsabiliza por ofertas,
                        promessas, recompensas ou promoções feitas ou oferecidas por Usuários ou Campanhas. Não
                        verificamos e não podemos verificar as informações que os Usuários ou
                        Campanhas fornecem, nem representamos ou garantimos que as Doações serão usadas de acordo com
                        qualquer finalidade de captação de recursos prescrita por um Usuário ou Campanha ou
                        de acordo com as leis aplicáveis. Não obstante o exposto, levamos a sério a possibilidade
                        de atividades fraudulentas e o uso indevido de fundos levantados. </span></div>

                <div class="flex-top mb-30"><span>Saiba mais sobre nossa Política de Fraude. Se você tiver motivos para
                        acreditar que
                        um Usuário ou Campanha não está levantando ou usando os fundos para a
                        finalidade declarada, clique no link "Denunciar angariação de fundos" na
                        Campanha para alertar nossa equipe sobre esse possível problema e investigaremos. </span></div>

                <div class="flex-top mb-30"><i class="fa fa-check" style="color: green;"></i><strong>A. O SOS :
                    </strong><span>não faz representação sobre se todas ou parte das suas
                        doações, incluindo as taxas do processador de pagamento, são dedutíveis ou elegíveis para
                        créditos fiscais. O SOS não se responsabiliza por qualquer reclamação de
                        qualquer autoridade tributária federal, estadual, provincial, territorial, local ou qualquer
                        outra autoridade tributária com relação à caracterização de qualquer
                        declaração de imposto aplicável de qualquer Doação feita por você, qualquer Usuário ou Caridade.
                        Você deve consultar um consultor tributário sobre o valor da sua
                        doação dedutível ou elegível para reconhecimento fiscal, levando em consideração (entre outras
                        coisas) o status fiscal
                        do destinatário de qualquer doação em qualquer jurisdição relevante e, principalmente, se você
                        estiver recebeu um presente ou prêmio
                        em conexão com sua doação.</span></div>

                <div class="flex-top mb-30"><span>B. Os doadores devem fornecer ao SOS as informações necessárias para
                        permitir a emissão de um recibo de
                        doação oficial. O Doador reconhece e concorda que, de acordo com a Política de Privacidade,
                        algumas informações pessoais do Doador serão
                        compartilhadas com a Caridade para a qual esse Doador faz uma doação (incluindo, sem limitação,
                        como parte de uma Lista de Doadores, conforme
                        estabelecido acima) e podem ser utilizado por essa Instituição, de acordo com a Política de
                        Privacidade da Instituição. A SOS não é responsável
                        e não se responsabiliza pelo uso de nenhuma informação do Doador pela Caridade.</span></div>

                <div class="flex-top mb-30"><span>Certos estados exigem divulgações por escrito para instituições de
                        caridade que solicitam contribuições.
                        Para doadores que fazem doações para instituições
                        de caridade, consulte as divulgações estatais sem fins lucrativos para essas
                        instituições.</span></div>

                <div class="flex-top mb-30"><strong>Organizador da campanha: </strong><span>Você, como Organizador da
                        Campanha, declara, garante e garante que (i) todas as informações que você fornece em conexão
                        com uma Campanha ou Beneficiário são precisas,
                        completas e provavelmente não enganarão Usuários razoáveis; (ii) todas as doações contribuídas
                        para sua campanha serão usadas apenas conforme descrito nos materiais que
                        você publicar ou fornecer; (iii) se você retirar doações consideradas por Doadores razoáveis
                        levantadas em nome de alguém que não seja você (o Beneficiário),
                        todas as Doações serão dadas e / ou gastadas em nome do Beneficiário; (iv) se você adicionar um
                        Beneficiário através dos Serviços, renuncia ao controle das Doações,
                        incluindo a capacidade de emitir reembolsos; (v) você não infringirá os direitos de terceiros;
                        (vi) você cumprirá todas as leis relevantes e aplicáveis e obrigações
                        de relatórios financeiros, incluindo, entre outras, leis e regulamentos relacionados a registro,
                        relatórios fiscais, contribuições políticas e divulgação de ativos
                        para o seu projeto; e (vii) na medida em que você compartilhar conosco dados pessoais de
                        terceiros para qualquer finalidade, incluindo nomes, endereços de e-mail e
                        números de telefone de seus contatos pessoais, você tem a autoridade (incluindo os
                        consentimentos necessários), conforme exigido em legislação aplicável, para nos
                        fornecer esses dados pessoais e nos permitir usar esses dados pessoais para os fins para os
                        quais você os compartilhou conosco. Você autoriza o SOS, e o SOS se
                        reserva o direito de fornecer informações relacionadas à sua Campanha aos Doadores,
                        beneficiários da sua Campanha ou aplicação da lei e de auxiliar em qualquer
                        investigação. contribuições políticas e divulgação de ativos para o seu projeto; e (vii) na
                        medida em que você compartilhar conosco dados pessoais de terceiros
                        para qualquer finalidade, incluindo nomes, endereços de e-mail e números de telefone de seus
                        contatos pessoais, você tem a autoridade (incluindo os consentimentos
                        necessários), conforme exigido em legislação aplicável, para nos fornecer esses dados pessoais e
                        nos permitir usar esses dados pessoais para os fins para os quais
                        você os compartilhou conosco. Você autoriza o SOS, e o SOS se reserva o direito de fornecer
                        informações relacionadas à sua Campanha aos Doadores, beneficiários da
                        sua Campanha ou aplicação da lei e de auxiliar em qualquer investigação. contribuições políticas
                        e divulgação de ativos para o seu projeto; e (vii) na medida em que
                        você compartilhar conosco dados pessoais de terceiros para qualquer finalidade, incluindo nomes,
                        endereços de e-mail e números de telefone de seus contatos pessoais,
                        você tem a autoridade (incluindo os consentimentos necessários), conforme exigido em legislação
                        aplicável, para nos fornecer esses dados pessoais e nos permitir usar
                        esses dados pessoais para os fins para os quais você os compartilhou connosco. Você autoriza o
                        SOS, e o SOS se reserva o direito de fornecer informações relacionadas
                        à sua Campanha aos Doadores, beneficiários da sua Campanha ou aplicação da lei e de auxiliar em
                        qualquer investigação. endereços de e-mail e números de telefone de
                        seus contatos pessoais, você tem a autoridade (incluindo todos os consentimentos necessários),
                        conforme exigido pela lei aplicável, para nos fornecer esses dados
                        pessoais e nos permitir usar esses dados pessoais para os fins para os quais você os
                        compartilhou connosco. </span></div>

                <div class="flex-top mb-30"><span>Você autoriza o SOS, e o SOS se reserva o direito de fornecer
                        informações relacionadas à sua Campanha aos
                        Doadores, beneficiários da sua
                        Campanha ou aplicação da lei e de auxiliar em qualquer investigação.</span></div>

                <div class="flex-top mb-30"><strong>Suas Obrigações de Registro: </strong><span>Pode ser necessário se
                        registrar no SOS para acessar e usar determinados
                        recursos dos Serviços. Se você optar por se registrar nos Serviços, concorda em fornecer e
                        manter informações verdadeiras, precisas, atuais e completas
                        sobre você ou sua Caridade, conforme solicitado pelo formulário de registro dos Serviços. Os
                        Organizadores da Campanha devem se registrar usando suas
                        identidades verdadeiras (ou as identidades dos representantes autorizados das Instituições de
                        Caridade), incluindo nome, endereço e qualquer imagem ou
                        vídeo que represente o Organizador da Campanha ou o Beneficiário de tal campanha. Você concorda
                        em manter os detalhes do registro atualizados e atualizados.</span></div>

                <div class="flex-top mb-30"><span>Os dados de registro e alguns outros detalhes sobre você são regidos
                        por
                        estes Termos de Serviço e nossa Política de Privacidade. Se você for
                        menor de idade em sua jurisdição (normalmente 18 ou 19 anos), você poderá usar os Serviços
                        apenas, com ou sem registro, com a aprovação de seus pais ou responsáveis.
                        Alguns aspectos de nossos serviços também podem exigir que você se registre e concorde com os
                        termos de provedores de serviços terceirizados (por exemplo, processadores
                        de pagamento) com os quais a SOS celebrou contratos, para poder se beneficiar de seus serviços.
                        Se o SOS ou um de nossos processadores de pagamentos a qualquer momento
                        descobrir que as informações que você forneceu sobre você ou a finalidade de sua campanha estão
                        incorretas ou violam algum destes Termos de serviço ou seus termos de
                        serviço, os Serviços podem ser suspensos e / ou encerrados com efeito imediato e multas podem
                        ser aplicadas pelas autoridades relevantes, que em todos os casos serão
                        pagas por você. Você reconhece e concorda que o uso de processadores de pagamento de terceiros é
                        parte integrante dos Serviços e que podemos trocar informações com esses
                        terceiros para facilitar a prestação dos Serviços, conforme estabelecido em nossa Política de
                        Privacidade. os Serviços podem ser suspensos e / ou encerrados com efeito
                        imediato e multas podem ser aplicadas pelas autoridadesrelevantes, que em todos os casos serão
                        pagas por você. </span></div>

                <div class="mb10"><strong>Propriedade de listas e dados de doadores</strong></div>


                <div class="flex-top mb-30"><span>A. Plataforma GoFundMe. Com relação ao GoFundMe e Charity usando a
                        Plataforma GoFundMe, a Charity pode solicitar
                        listas de doadores (definidos abaixo) e
                        dados de doadores (definidos abaixo) para fins de conformidade e transações.</span></div>

                <div class="flex-top mb-30"><span>B. Plataforma de caridade GFM. No que diz respeito ao GoFundMe e
                        Charity
                        usando a Plataforma GoFundMe, no que diz
                        respeito às listas de doadores e dados do doador que o GoFundMe recebeu exclusivamente por meio
                        de uma doação a essa instituição de caridade e por
                        nenhum outro meio, e na extensão permitida pela Política de Privacidade e pela lei aplicável , A
                        Caridade deverá possuir os Dados dos Doadores dos
                        Doadores que forneceram uma Doação à Caridade, incluindo as informações de contato desses
                        Doadores; desde que, no entanto, a Charity conceda ao GoFundMe
                        uma licença perpétua em todo o mundo, não exclusiva e sem royalties, para usar os Dados dos
                        doadores para os seguintes fins: (a) fornecer os Serviços,
                        incluindo administração de contas e processamento de doações; (b) fazer cumprir nossos acordos;
                        (c) prevenção, proteção e proteção contra fraudes e conformidade
                        com a lei; (d) responder a pedidos de aplicação da lei; (e) pesquisa e análise; (f)
                        personalizar, ajustar e melhorar os Serviços; e (g) desenvolver novos serviços.
                        "Dados do doador" significa o nome, endereço, endereço de email, valor da doação, data da
                        transação, número de identificação da transação, nome do projeto e evento
                        associado à doação. A LISTA DE DOADORES QUE CONTRIBUEM PARA A CAMPANHA OU EVENTO DE UMA CARIDADE
                        CONDUTA ATRAVÉS DOS SERVIÇOS ("LISTAS DE DOADORES") SÃO FORNECIDOS
                        "NO ESTADO EM QUE SE ENCONTRAM", E A GOFUNDME NÃO FAZ REPRESENTAÇÕES, GARANTIAS OU GARANTIAS
                        RELATIVAS À PRECISÃO, COMPLEMENTAR OU ATENDIMENTO QUALQUER INFORMAÇÃO
                        CONTIDA Nelas. Ao usar esses serviços, todos os doadores concordam com a divulgação de tais
                        listas de doadores e dados de doadores descritos nesta seção. significará
                        o nome, endereço, endereço de email, valor da doação, data da transação, número de identificação
                        da transação, nome do projeto e evento associado à Doação. A LISTA DE
                        DOADORES QUE CONTRIBUEM PARA A CAMPANHA OU EVENTO DE UMA CARIDADE CONDUTA ATRAVÉS DOS SERVIÇOS
                        ("LISTAS DE DOADORES") SÃO FORNECIDOS "NO ESTADO EM QUE SE ENCONTRAM",
                        E A GOFUNDME NÃO FAZ REPRESENTAÇÕES, GARANTIAS OU GARANTIAS RELATIVAS À PRECISÃO, COMPLEMENTAR
                        OU ATENDIMENTO QUALQUER INFORMAÇÃO CONTIDA Nelas. Ao usar esses
                        serviços, todos os doadores concordam com a divulgação de tais listas de doadores e dados de
                        doadores descritos nesta seção. significará o nome, endereço, endereço
                        de email, valor da doação, data da transação, número de identificação da transação, nome do
                        projeto e evento associado à Doação. A LISTA DE DOADORES QUE CONTRIBUEM
                        PARA A CAMPANHA OU EVENTO DE UMA CARIDADE CONDUTA ATRAVÉS DOS SERVIÇOS ("LISTAS DE DOADORES")
                        SÃO FORNECIDOS "NO ESTADO EM QUE SE ENCONTRAM", E A GOFUNDME NÃO FAZ
                        REPRESENTAÇÕES, GARANTIAS OU GARANTIAS RELATIVAS À PRECISÃO, COMPLEMENTAR OU ATENDIMENTO
                        QUALQUER INFORMAÇÃO CONTIDA Nelas. Ao usar esses serviços, todos os doadores
                        concordam com a divulgação de tais listas de doadores e dados de doadores descritos nesta seção.
                        A CAMPANHA OU O EVENTO CONDUZIDO ATRAVÉS DOS SERVIÇOS
                        ("LISTAS DE DOADORES") SÃO FORNECIDOS "NO ESTADO EM QUE SE ENCONTRAM", E A GOFUNDME NÃO OFERECE
                        REPRESENTAÇÕES, GARANTIAS OU GARANTIAS SOBRE A EXATIDÃO,
                        INTEGRIDADE OU ATUALIZAÇÃO DE QUALQUER LISTA DE DOADORES OU QUALQUER INFORMAÇÃO CONTIDA. Ao usar
                        esses serviços, todos os doadores concordam com a divulgação
                        de tais listas de doadores e dados de doadores descritos nesta seção. A CAMPANHA OU O EVENTO
                        CONDUZIDO ATRAVÉS DOS SERVIÇOS ("LISTAS DE DOADORES") SÃO
                        FORNECIDOS "NO ESTADO EM QUE SE ENCONTRAM", E A GOFUNDME NÃO OFERECE REPRESENTAÇÕES, GARANTIAS
                        OU GARANTIAS SOBRE A EXATIDÃO, INTEGRIDADE OU ATUALIZAÇÃO DE
                        QUALQUER LISTA DE DOADORES OU QUALQUER INFORMAÇÃO CONTIDA. Ao usar
                        esses serviços, todos os doadores concordam com a divulgação de tais listas de doadores e dados
                        de doadores descritos nesta seção.</span></div>

                <div class="flex-top mb-30"><strong>Impostos: </strong><span>é sua responsabilidade determinar quais
                        impostos, se houver, se aplicam às
                        Doações que você recebe através do uso dos Serviços.
                        É sua responsabilidade avaliar, coletar, relatar ou remeter o imposto correto, se houver, para a
                        autoridade tributária apropriada.</span></div>

                <div class="flex-top mb-30"><i class="fa fa-check" style="color: green;"></i><strong>Conta de membro,
                        senha e segurança: </strong><span>Você é responsável por manter a
                        confidencialidade de sua senha e conta, se houver, e é totalmente responsável por toda e
                        qualquer atividade que ocorra sob sua senha ou conta. Você concorda em (a)
                        notificar imediatamente o SOS de qualquer uso não autorizado de sua senha ou conta ou qualquer
                        outra violação de segurança; e (b) saia da sua conta no final de cada
                        sessão ao
                        acessar os Serviços. A SOS não se responsabiliza por nenhuma perda ou dano decorrente do não
                        cumprimento desta seção.</span></div>

                <div class="flex-top mb-30"><i class="fa fa-check" style="color: green;"></i><strong>Modificações nos
                        Serviços: </strong><span>A SOS se reserva o direito de modificar,
                        suspender ou descontinuar, temporária ou permanentemente, os Serviços (ou qualquer parte deles)
                        a qualquer momento e por qualquer motivo, com ou sem aviso prévio,
                        e sem qualquer responsabilidade para com você ou com qualquer terceiro terceiros por quaisquer
                        reclamações, danos, custos ou perdas resultantes.</span></div>

                <div class="flex-top mb-30"><i class="fa fa-check" style="color: green;"></i><strong>Conteúdo Público,
                        Exibição Pública de Informações e Doações:</strong><span>Algumas de suas
                        atividades nos e através dos Serviços são públicas, como qualquer conteúdo que você publica
                        publicamente nas Plataformas (incluindo descrições, textos, músicas, sons,
                        informações, dados, software, gráficos, comentários, fotos, vídeos, imagens, marcas registradas,
                        logotipos, marcas ou outros materiais que você carrega ou publica nos
                        Serviços ou compartilha com outros usuários ou destinatários) ("Conteúdo do Usuário"). Além
                        disso, as informações do perfil do usuário, incluindo seu nome e sobrenome,
                        endereço de e-mail público, organização, biografia pessoal e outras informações inseridas em
                        conexão com seu perfil de usuário, podem ser exibidas para outros usuários
                        para facilitar a interação do usuário nos Serviços. Por exemplo, como organizador da campanha,
                        você pode postar detalhes pessoais, como informações sobre uma recente
                        internação hospitalar, que podem ser considerados dados confidenciais. Além do que, além do
                        mais, como doador, você tem a opção de exibir publicamente sua doação para
                        todos verem. Para manter os detalhes da sua Doação em sigilo, basta clicar na caixa de seleção
                        "Privado" durante o processo de Doação. Lembre-se de que, se você optar
                        por fornecer informações usando certos recursos públicos dos Serviços, essas informações serão
                        regidas pelas configurações de privacidade desses recursos específicos e
                        poderão estar disponíveis ao público. As pessoas que leem essas informações podem usá-las ou
                        divulgá-las a outros indivíduos ou entidades sem o nosso conhecimento e
                        sem o seu conhecimento e os mecanismos de pesquisa podem indexar essas informações. Portanto,
                        solicitamos que você pense com cuidado sobre a inclusão de qualquer
                        informação explícita que considere particular no conteúdo criado ou nas informações enviadas por
                        meio dos Serviços. Por favor, consulte o nossa Política de
                        Privacidade para obter informações sobre as maneiras pelas quais podemos coletar, usar e
                        armazenar certos detalhes sobre você e seu uso dos Serviços.</span></div>

                <div class="flex-top mb-30"><i class="fa fa-check" style="color: green;"></i><strong>Informações não
                        solicitadas: </strong><span>Esteja ciente de que o Conteúdo do
                        usuário e outras informações não solicitadas que você fornece podem estar acessíveis ao público,
                        como informações postadas em fóruns ou seções de comentários.
                        Também coletamos informações por meio de comunicações de suporte ao cliente, suas comunicações
                        de idéias para novos produtos ou modificações de produtos existentes
                        e outros envios não solicitados, ou quaisquer perguntas, comentários, sugestões, idéias,
                        comentários ou outras informações sobre os Serviços (coletivamente, com
                        informações acessíveis ao público, "Informações não solicitadas"). Ao nos enviar Informações Não
                        Solicitadas, (a) você concorda que não temos nenhuma obrigação
                        de confidencialidade, expressa ou implícita, com relação às Informações Não Solicitadas; (b)
                        você reconhece que podemos ter algo semelhante às Informações Não
                        Solicitadas já em consideração ou em desenvolvimento; (c) você concorda que o SOS terá direito
                        ao uso e disseminação irrestritos das Informações Não Solicitadas
                        para qualquer finalidade, comercial ou de outra natureza, sem reconhecimento ou compensação a
                        você; (d) você declara e garante que possui todos os direitos
                        necessários para enviar as Informações Não Solicitadas; (e) na medida do necessário, você
                        concede à SOS um direito totalmente pago, sem royalties, perpétuo,
                        irrevogável, mundial, não exclusivo e totalmente transferível e sublicenciável (por várias
                        camadas) e licença para usar, reproduzir , executar, exibir, distribuir,
                        adaptar, modificar, reformatar, criar trabalhos derivados e, de outra forma, explorar comercial
                        ou não comercialmente, de qualquer maneira, toda e qualquer informação
                        não solicitada e sublicenciar os direitos anteriores; e (f) você renuncia irrevogavelmente e faz
                        com que seja renunciado, contra a SOS e seus usuários quaisquer
                        reivindicações e afirmações de quaisquer
                        direitos morais contidos nessas Informações Não Solicitadas. Esta seção Informações não
                        solicitadas sobreviverá a qualquer rescisão da sua conta ou dos Serviços.</span></div>

                <div class="flex-top mb-30"><span>Você reconhece e concorda que o SOS pode reter Informações Não
                        Solicitadas, bem como Conteúdo do Usuário, e também pode divulgar
                        suas Informações Não Solicitadas ou Conteúdo do Usuário, se for exigido por lei ou na crença de
                        boa fé de que tal retenção ou divulgação seja razoavelmente
                        necessária para (a) cumprir o processo legal, leis aplicáveis ou solicitações governamentais;
                        (b) fazer cumprir estes Termos de Serviço; (c) responder a
                        alegações de que qualquer
                        Conteúdo do Usuário viola os direitos de terceiros; ou (d) proteger os direitos, propriedade ou
                        segurança pessoal do GoFundMe, de seus usuários ou do público.</span></div>

            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

</html>