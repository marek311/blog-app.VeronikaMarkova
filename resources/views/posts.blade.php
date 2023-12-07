<x-layout>
    <main class="container mt-6 ">

    <div class=" p-4  p-md-5 mb-5 mt-5 text-white rounded border-top border-secondary border-5 bg-dark">
            <div class="col-md-6">
                <h1 class="display-4 fst-italic"> Tradičné ľudové remeslá na Slovensku </h1>
            </div>

            <div class="col">
                <p style="font-size: 24px;"> Ľudové remeslá v súčasnosti prežívajú svoj návrat.
                    Svet sa neustále zrýchľuje a ľudia hľadajú pokoj a úľavu práve v tradíciách našich predkov. Viete,
                    aké
                    sú najtradičnejšie ľudové remeslá na Slovensku? </p>
            </div>
        </div>



        @if ($posts->count()>1)
            <div class="row mb-2">
                @foreach($posts->skip(1) as $postik)
                    <x-blog-ukazka :post="$postik"/>
                @endforeach
            </div>
        @else
            <p class="text-center">Zatiaľ nebol pridaný žiaden post</p>
        @endif


        <div class="row g-5">

            @if ($posts->count())
                <div class="col-md-8">
                    <h3 class="pb-4 mb-4 fst-italic border-bottom">
                        NÁŠ NAJNOVŠÍ BLOG </h3>
                    <x-clanok :post="$posts[0]"/>
                </div>
            @endif

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
        </div>
        </div>


    </main>


</x-layout>
