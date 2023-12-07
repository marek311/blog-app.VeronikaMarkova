<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <title>TRM-blog </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-min.js" defer></script>

</head>

<body>


<div class="container">
    <header class="blog-header py-5   ">
        <div id="headerSubPages">
            <div class="col-4 "></div>

            <div class="col-4 text-center">
                <img src="{{ asset('Images/logo/default-monochrome.svg') }}" alt="Logo" class="img-fluid">
            </div>

            <div class="col-4 d-flex justify-content-center  ">
                <nav class="navbar navbar-expand-lg">
                    @guest
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a href="coverPage.html" class="btn btn-dark">Domov
                            </a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-black" href="#" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false" id="dropdown-label">
                                <i class="bi bi-person-circle"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown-label">
                                <li><a class="dropdown-item" href="/login">Prihlásenie</a></li>
                                <li><a class="dropdown-item" href="/register">Registrácia</a></li>
                            </ul>
                        </li>

                        @else
                    </ul>
                            <span class=" text-center fw-bold text-uppercase ms-3 me-2" style="color: #757575;">Vitaj, {{auth()->user()->name}} !</span>
                        <form method="POST" action="/logout" class=" fw-bold  ">
                            @csrf
                            <button type="submit" class="btn btn-danger">Odlásenie</button>
                        </form>

                        @endguest



                </nav>
            </div>
        </div>
    </header>
</div>


<main class="container mt-6 ">
    <div class=" p-4  p-md-5 mb-5 mt-5 text-white rounded border-top border-secondary border-5 bg-dark">
        <div class="col-md-6">
            <h1 class="display-4 fst-italic"> Tradičné ľudové remeslá na Slovensku </h1>
        </div>

        <div class="col">
            <p style="font-size: 24px;"> Ľudové remeslá v súčasnosti prežívajú svoj návrat.
                Svet sa neustále zrýchľuje a ľudia hľadajú pokoj a úľavu práve v tradíciách našich predkov. Viete, aké
                sú najtradičnejšie ľudové remeslá na Slovensku? </p>
        </div>
    </div>

    <!--   CLANKY      -->
    <div class="row mb-2">

        <h3 class="pb-4 mb-4 fst-italic border-bottom"> NAŠE NAJČÍTANEJŠIE ČLÁNKY </h3>

        <!-- clanok 1-->
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm"
                 style="height: 250px; background-image: url('{{ asset('Images/modrotlac.jpg') }}'); background-size: cover; position: relative;">
                <div class="col-md-6 d-flex flex-column  position-static p-4"
                     style="background: rgba(255, 255, 255, 0.85);">
                    <strong class=" mb-2 text-success" style="font-size: 14px;">Modrotlač</strong>
                    <h3 class="fw-bold" style="font-size: 18px;">Výroba tradičnou technikou</h3>
                    <p style="font-size: 16px;">Výrobe modrotlače sa v našej rodine venujem už ako 5.
                        generácia. Kladiem dôraz v zachovávaní tradičných historických postupoch výroby...
                    </p>
                    <a href="#">Pokračuj v čítaní</a>
                </div>
            </div>
        </div>

        <!-- clanok 2-->
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm"
                 style="height: 250px; background-image:url('{{ asset('Images/vcelarstco.jpg') }}'); background-size: cover; position: relative;">
                <div class="col-md-6 d-flex flex-column position-static p-4"
                     style="background: rgba(255, 255, 255, 0.85);">
                    <strong class=" mb-2 text-success" style="font-size: 14px;">Včelárstvo</strong>
                    <h3 class="fw-bold" style="font-size: 18px;">História včelárstva</h3>
                    <p style="font-size: 16px;">Názory na to, ako dlho sú včely medonosné na planéte, sa rôznia:
                        niektoré zdroje uvádzajú asi 40 miliónov rokov, iné tvrdia, že ...
                    </p>
                    <a href="#">Pokračuj v čítaní</a>
                </div>
            </div>
        </div>


    </div>


    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                NÁŠ NAJNOVŠÍ BLOG </h3>

            <article>

                <h2>Hrnčiarstvo</h2>

                <p style="color:grey ">Október 24, 2023 <a href="#">Zora Valentová</a></p>

                <p><strong>Výroba keramiky (nádob a predmetov) z pálenej hliny, pôvodne modelovaním v ruke, neskôr s
                        využitím hrnčiarskeho kruhu alebo tvarovaním pomocou foriem. Hrnčiarske výrobky sa vyznačujú
                        charakteristickou hrubozrnnou, pórovitou štruktúrou črepu. Osobitným odvetvím keramickej výroby
                        je džbánkarstvo. S hrnčiarskou výrobou súviselo aj kachliarstvo.</strong>
                <p>

                <hr>

                <p>Keramika patrí medzi najstaršie kultúrne prejavy ľudstva. Prvé dôkazy z nášho územia o využívaní
                    hliny ako výtvarného výrazového materiálu siahajú až do mladšieho paleolitu. Vestonická venuša
                    (29 000 – 25 000 pred n. l.), keramická soška z pálenej hliny nájdená v moravských Dolných
                    Věstoniciach, je považovaná za jednu z prvých keramických plastík v dejinách ľudstva.


                    Rozmach hrnčiarstva pokračoval s rozšírením používania rýchlo rotujúceho kruhu na pohon nohou v
                    12. – 13. storočí. Stredoveké hrnčiarstvo sa sústreďovalo v podhradských osadách, na panstvách a
                    v mestách. Známe strediská vznikali na miestach s výskytom kvalitnej hrnčiarskej hliny a
                    dostatkom dreva na vypaľovanie výrobkov. Najstarší písomný doklad o hrnčiarstve na Slovensku ako
                    remesle pochádza z Bratislavy z roku 1379, z roku 1416 jestvuje zmienka o hrnčiarskej výrobe v
                    Pozdišovciach na východnom Slovensku (do súčasnosti známom hrnčiarskom stredisku). V tomto
                    období sa u nás začali zakladať cechy – profesijné remeselnícke organizácie. Prvý hrnčiarsky
                    cech na Slovensku vznikol v Bardejove roku 1475. Ďalšie vznikali v mestách najmä v priebehu 16.
                    a 17. storočia. Na dedinách vznikali cechy v 17. a 18. storočí. V polovici 19. storočia bolo na
                    našom území činných 61 cechov. Popri cechovom hrnčiarstve malo veľký význam aj vplyv na
                    udržiavanie tradícií remesla dedinské ľudové hrnčiarstvo, rozšírené ako vedľajšie zamestnanie
                    popri poľnohospodárstve. Muži sa v zimných mesiacoch venovali výrobe, zjari zas predaju. Zatiaľ
                    čo vo väčších mestách začali hrnčiarske dielne postupne miznúť už od polovice 19. storočia, v
                    mestečkách a na dedinách pracovali hrnčiari ešte v prvej tretine 20. storočia.

                    Postupný úpadok hrnčiarstva súvisel s rozvojom mechanizovanej výroby keramiky a s rozšírením
                    lacnejšieho a trvácnejšieho továrenského riadu (plechový a smaltovaný riad, kamenina a pod.).
                    Vývoj remesla negatívne ovplyvnili aj hospodárske krízy a svetové vojny. Na začiatku 20.
                    storočia sa na Slovensku hrnčiarsky tovar vyrábal približne v 75 lokalitách. V prvých dvoch
                    desaťročiach 20. storočia zanikla výroba v 40 lokalitách a do polovice storočia sa skončila v
                    ďalších viac ako 20 lokalitách.

                    Napriek tomu, že od konca 19. storočia vznikali snahy o pozdvihnutie ľudovej výroby a zachovanie
                    jej technických a výtvarných kvalít, v popredí záujmu rôznych organizácií a spolkov boli
                    predovšetkým textilné odvetvia. Zveľaďovacie snahy sa v tomto období hrnčiarstva takmer
                    nedotkli. Najvýznamnejšou a jedinou svojho druhu a úrovne bola od roku 1883 keramická dielňa v
                    Modre, ktorá pretrvala do nedávnych dní ako Slovenská ľudová majolika. Väčší záujem o
                    hrnčiarstvo nastal až po druhej svetovej vojne, keď v podpore remesla zohral významnú rolu
                    ÚĽUV.</p>


                <h3>Od stredoveku po súčasnosť</h3>
                <p>
                    V historických dobách bolo hrnčiarstvo dôležité a veľmi rozšírené remeslo, ktoré sa časom
                    sústredilo do oblastí s vhodnou hlinou a remeselnou tradíciou. Rozvoj islamských techník
                    olovnatých a cínových glazúr zavedených Maurmi v roku 700 n. l. dosiahol dokonalosti začiatkom
                    13. stor. v Španielsku. Od neskorého stredoveku, hlavne v 12. stor. a 14. stor., vyrábali
                    hrnčiari kachlice na stavbu kachlí, obvykle glazované a bohato zdobené. V 15. stor. boli
                    v Európe veľmi žiadané kameninové nádoby (Warshawová, 2001). V severnom Taliansku
                    v 16. stor. zažilo hrnčiarstvo najväčší rozkvet, vznikli tu fajáns a majolika s bohatou
                    maľovanou výzdobou. V tomto období si talianski hrnčiari podmanili celý európsky trh.
                    Z rôznych historických prameňov sa dozvedáme, že keramické remeslo sa rozvíjalo vo všetkých
                    krajinách Európy v rámci priemyselného rozvoja na konci 18. stor. a začiatku 19. stor.
                    na celom území habsburskej monarchie. V tejto dobe vznikali továrne na výrobu keramiky
                    a porcelánu, ale malé rodinné dielničky pretrvávali naďalej. Drobní hrnčiari sa združovali do
                    cechov. V období 50. rokov minulého storočia vtedajší režim neprial súkromnému podnikaniu. V
                    tomto období zaniklo veľa malých keramických dielní. Tým sa prestalo remeslo dediť
                    z otca na syna a vôbec z generácie na generáciu. V tejto dobe nenávratne zanikli mnohé vzácne
                    technologické postupy a návody, ktoré už nikdy neboli obnovené.</p>

            </article>

        </div>


        <!-- bocny panel -->

        <div class="col-md-4">
            <div class="position-sticky" style="top:10rem;">

                <div class="p-4 mb-3 bg-light rounded-top">
                    <h4>O nás</h4>
                    <p class="mb-0"> Vitajte na našom blogu, kde objavujeme fascinujúci svet remesiel, inšpirácie z
                        minulosti a užitočné triky pre všetkých remeselníkov. Ak ste zvedaví na tradičné zručnosti,
                        ktoré prežili stáročia a tvoria našu kultúrnu dedičinu, tak ste na správnom mieste. Naše
                        blogy
                        vám poskytnú zaujímavý pohľad na rôzne remeselné techniky a prinesú vám inšpiráciu, aby ste
                        aj
                        vy mohli objaviť svoju kreativitu. Nielenže sa zameriame na zručnosti a tipy pre
                        začiatočníkov,
                        ale tiež sa pohráme s históriou, aby sme vám priblížili, ako sa remeslá vyvíjali v priebehu
                        času. Spolu objavíme krásu tradičných remesiel a vytvoríme prepojenie medzi minulosťou a
                        súčasnosťou. Poďte s nami na cestu do sveta remeselníkov a ich dovedností.</p>
                </div>

                <div class="p-4">
                    <h4>Archív</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">Hrnčiarstvo</a></li>
                        <li><a href="#">Modrotlač</a></li>
                        <li><a href="#">Umelecké šperkárstvo</a></li>
                        <li><a href="#">Včelárstvo</a></li>
                        <li><a href="#">Výstavné rezbárstvo</a></li>


                    </ol>
                </div>

            </div>
            <!-- bocny panel -->
        </div>
    </div>
</main>


<!-- NEWSLETTERS-->
<footer>
    <div style="background-image: url('{{ asset('../../Images/vcelarstco.jpg') }}'); background-size: cover;">
        <div class="row justify-content-center">
            <div class="col-8 p-md-5 mb-5 mt-5  text-black rounded  bg-white">
                <h1 class="display-4 fst-italic  ">NEWSLETTER</h1>

                <p class="lead my-3 fst-italic" style="font-size: 24px; "> Prihláste sa do nášho newslettra a buďte v
                    obraze!</p>

                <input type="email" name="email" placeholder="  zadaj svoj e-mail" required>
                <button type="button" class="btn btn-dark">ODOŠLI</button>
            </div>
        </div>
    </div>
</footer>


</body>

</html>
