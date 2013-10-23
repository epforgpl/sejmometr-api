Nasza biblioteka PHP
===================
Idea behind.
--------------
Podczas tworzenia biblioteki skupialiśmy się przede wszystkich na dwóch założeniach:

-   **less is more** - czyli jak najmniejsza ilość kodu do osiągnięcia celu, np. poprzez zastosowania łancuchowego wywoływania metod ( jQuery, Zend Framework / Magento )
-   **IDE friendly** - nasza biblioteka jest pisana tak, aby jak najlepiej wykorzystywać zalety nowoczesnych IDE. Przecież nie wszyscy mają dwa monitory ( jeden na dokumentację, drugi na kod )


A więc mając te założenia opracowaliśmy i nadal opracowujemy naszą bibliotekę PHP, która i Wy możecie rozwijać albo customizować na potrzeby własnych potrzeb. Chociaż biblioteka to wielkie słowo w tym wypadku, bo tak jak pisaliśmy w poprzednich rozdziałach nasze REST API zachowuje się dokładnie tak jak zwykły użytkownik, który chodzi po stronie. Więc nasza biblioteka jest tak naprawdę wrapperem dla PHP'owego cURL'a, wyładowaną funkcjami i aliasami tych funkcji tak by jak najszybciej ich użyć.

    W przypadku większości IDE, podpowiadanie wyskakuje automatycznie, jeśli nie to zazwyczaj skrót klawiszowy CTRL + SPACJA daje nam ten efekt.

Hello World and Goodbye world!
-------------------------------

Zacznijmy więc, tok myślenia przy używaniu biblioteki jest niezmiernie prosty, wybieramy dataset z [tabeli](http://docs.epf.org.pl/dane), decydujemy czy chcemy szukać zbioru czy wczytać konkretny obiekt, którego `ID` znamy. Jeśli wybieramy listę Tworzymy nowy obiekt w liczbie mnogiej np. `ePGminy` ( po wpisaniu eP nasze ulubione IDE powinno nam już podpowiadać ). Analogicznie jeśli chcemy pojedynczy obiekt, to powołujemy do życia obiekt w formie pojedynczej np. `epGmina`. Wykonujemy zapytanie i już możemy przetwarzać dane.

Nie zapomnijmy oczywiście o załadowaniu biblioteki, wystarczy z naszej struktury załadować plik `epApi.php`

            # Przykład dla listy. Załóżmy, że chcemy znaleźć wszystkich posłów, którzy mają na imię Adam i są z zawodu archeologami
            $o = new epPoslowie()
              ->setFilter(epPoslowie::ZAWOD, 'Archeolog')
              ->setFilter(epPoslowie::IMIE_PIERWSZE, 'Adam')
              ->search();

            # kazdy z obiektow jest instancja epPosel - więc znów IDE będzie nam podpowiadać na podstawie tego obiektu
            foreach($o->getObjects() as $object) {
                # np.
                var_dump($object->imie_drugie);
                var_dump($object->data_urodzenia);
            }
        
            # Alternatywnie można skorzystać z wyszukiwarki pełnotekstowej w stylu Google'a, ale możemy dostać wtedy więcej wyników bo branych pod uwagę jest dużo więcej pól oraz wyszukiwarka ma słownik odmian.
            # Oczywiście metody nie wykluczają się można jednocześnie stosować filtry oraz używać wyszukiwarki pełnotekstowej, ograniczjąc pulę wyników w ten sposób
            $o = new epPoslowie()
                 ->setQ('Adam Archeolog')->search();

            foreach($o->getObjects() as $object) {
                # np.
                var_dump($object->imie_drugie);
                var_dump($object->data_urodzenia);
            }
        
            # Wczytywanie pojedynczego obietku, IDE bedzie nam podpowiadac dostepne pola
            $o = new epPosel(406); # Donald
            var_dump($o->data_urodzenia);
            var_dump($o->sejm_kluby_nazwa);
            var_dump($o->liczba_slow);
        
Warstwy
-----------------
Czyli coś więcej niż mogłoby się wydawać na pierwszy rzut oka

Ze względu na fakt, że mamy naprawdę sporo danych to nie wszystkie są serwowane od razu - optymalizacja etc. Więc niektóre z naszych obiektów posiadają tzw. warstwy - layers. Warstwy to inaczej dodatkowy zbiory danych powiązane z obiektem, są dostępne tylko przy ładowaniu pojedynczego obiektu, przykład takiej warstwy opisywaliśmy na gminach wcześniej w naszym CookBook'u. Do ładowania warstw służy metoda `epObject::loadLayer()`

            # Załadujmy ponownie warstwę `spat` dla gminy, ale tym razem używając biblioteki
            $o = new epGmina();
            $o->loadLayer('spat')
            var_dump($o->layers->spat);
        
Krótki opis struktury
-------------------------
Krótko i zwięźle gdzie znaleźć pliki do przeglądania, czytania i zmieniania wedle woli.

Po pobraniu paczki struktura powinna być następująca:

-   `docs` - wygenerowana dokumentacja techniczna zawierająca opis obiektów oraz ich atrybutów i metod oraz plik z tym właśnie CookBook'iem
-   `lib` - główny folder biblioteki
-   `examples` - proste przykłady użytkowe z wykorzystaniem biblioteki
-   `objects` - zbiór plików z klasami reprezentującymi dataset. W każdym pliku o nazwie w liczbie mnogiej zawiera się definicja klasy list ( mnoga ) oraz pojedynczego obiektu
-   `epApi.php` - inicjujący plik biblioteki, kilka stałych i funkcja do autoload'u
-   `epDataset.php` - abstrakcyjna klasa, która jest potem rozszerzana przez datasety, zawiera większość definicji funkcji, które są potem używane przez obiekty datasetów
-   `epInflector.php` - definicje liczb mnogich i pojedynczych dla datasetów
-   `epSocket.php` - wrapper do cURL'a wraz klasami parsującymi odpowiedź oraz wyjątkami

Jeśli chcemy dopisywać własne metody dla poszczególnych datasetów to oczywiście szukamy odpowiedniej klasy w folderze `lib/objects`, jeśli chcemy zmienić wyższą warstwę abstrakcji dla datasetów to zaglądamy do pliku `epDataset.php` lub `epSearch.php`, w przypadku zmian sposobów parsowania odpowiedzi lub samym mechanizmie połączeń zaglądamy do `epSocket.php`

Pożegnanie
------------
I to by było w zasadzie wszystko w kwestii tego CookBook'a. Więcej przykładów znajdziecie [tutaj](http://docs.epf.org.pl/examples)

Użyteczne linki:

-   [Dokumentacja on-line](http://docs.epf.org.pl)
-   [Strona Fundacji ePaństwo](http://epf.org.pl)
-   [Projekt Koduj Dla Polski](http://epf.org.pl/kodujdlapolski)
-   [Sejmometr.pl - dane w akcji](http://sejmometr.pl)
-   [Mail kontaktowy](mailto:biuro@epf.org.pl)

Powodzenia!
------------