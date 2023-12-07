<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();       //vyprazdnenie
        Category::truncate();
        Post::truncate();


        Post::factory(5)->create();

        /*
        $user = User::factory()->count(2)->create();


        Category::create([
            'name' => 'Včelárstvo',
            'slug' => 'včelarstvo'
        ]);

        $hrnciarstvo = Category::create([
            'name' => 'Hrnčiarstvo',
            'slug' => 'hrnčiarstvo'
        ]);
        $modrotlac = Category::create([
            'name' => 'Modrotlač',
            'slug' => 'modrotlač'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hrnciarstvo->id,
            'title' => 'Výroba keramiky',
            'slug' => 'vyroba-keramiky',
            'excerpt' => '<p>Výroba keramiky (nádob a predmetov) z pálenej hliny, pôvodne modelovaním v ruke, neskôr s
                        využitím hrnčiarskeho kruhu alebo tvarovaním pomocou foriem. Hrnčiarske výrobky sa vyznačujú
                        charakteristickou hrubozrnnou, pórovitou štruktúrou črepu. Osobitným odvetvím keramickej výroby
                        je džbánkarstvo. S hrnčiarskou výrobou súviselo aj kachliarstvo.</p>',
            'body' => '<p>Keramika patrí medzi najstaršie kultúrne prejavy ľudstva. Prvé dôkazy z nášho územia o využívaní
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
ÚĽUV.</p>'
        ]);


        Post::create([
            'user_id' => $user->id,
            'category_id' => $modrotlac->id,
            'title' => 'Výroba tradičnou technikou',
            'slug' => 'vyroba-tradicnou-technikou',
            'excerpt' => '<p>Výrobe modrotlače sa v našej rodine venujem už ako 5.
                        generácia. Kladiem dôraz v zachovávaní tradičných historických postupoch výroby</p>',
            'body' => '<p>Rodina Trnkovcov pochádza zo Zákopčia, z kysuckého kraja. Otec Jozefa Trnku sa presťahoval
            zo Zákopčia do Záriečia. Odtiaľ sa presťahoval do susednej obce Lúky pod Makytou, kde si kúpil domček a
            niekoľko rolí. Tu sa narodil 7. októbra 1868 záriečsky a potom púchovský farbiar Jozef Trnka (môj prapradedo).
            Keď mal 16 rokov, išiel sa učiť farbiarske remeslo k svojmu príbuznému Bednárikovi do Záriečia. Po vyučení v roku
            1888 odišiel ako tovariš na vandrovku. Pracoval v Pardubiciach, Rýmařove a Trnave u farbiara Martina Kosoviča a v Místku,
            kde sa zdokonalil vo farbiarskom remesle. Od roku 1894 (po Bednárikovej smrti) on pokračuje vo farbiarskom
            remesle v záriečskej dielni. Od úradu v Púchove dostal dňa 12.7.1894 živnostenský list v maďarskej reči ako
            farbiar plátna. Keďže Záriečie ležalo 10 km od železnice, nevyhovovalo J. Trnkovi na vykonávanie remesla. Preto si kúpil
            v Púchove dom na Mudroňovej ulici, v ktorom garbiarske dielne prerobil na farbiarske. Zariadenie farbiarskej
            dielne presťahoval zo Záriečia do Púchova na Silvestra v roku 1898. </p> '
        ]);
*/
    }
}




//                <p style="color:grey ">Október 24, 2023 <a href="#">Zora Valentová</a></p>


