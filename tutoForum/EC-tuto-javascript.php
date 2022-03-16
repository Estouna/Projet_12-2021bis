<?php
session_start();
include '../tutoForum/includes/head.php';
?>

<main>
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar-yellow.php'; ?>

    <section class="section-center column centerAll">
        <!-- 
            ------------------------------ PAGE TITLE/MIN_NAV ------------------------------
        -->
        <div class="minMenu minMenu-yellow column centerAll margT-m">
            <h1 class="margB-s"><span class="slash slash-yellow">//</span> JavaScript <span class="slash slash-yellow">//</span></h1>
            <nav>
                <ul class="ul-minMenu row centerAll margT-s">
                    <li class="li-minMenu margR-s"><a class="a-minMenu a-minMenuYellow" href="EC-tuto-javascript.php">Tutoriel</a></li>
                    <li class="li-minMenu margL-s"><a class="a-minMenu a-minMenuYellow" href="ECA-ref-javascript.php">Référence</a></li>
                </ul>
            </nav>
        </div>


        <!-- ____________________ MENU HAUT DE PAGE ____________________ -->
        <nav id="nav1" class="unselectable margT-m">
            <ul class="navul navul_yellow column centerAll">
                <li><a href="#javascript" class="a-titleMenu a_yellow a-titleMenu_yellow">Qu’est-ce que le JavaScript ?</a></li>
                <li class="margT-s"><a href="#definition" class="a-subtitleMenu a_yellow">Une définition générale</a></li>
                <li class="margT-xs"><a href="#peut-faire" class="a-subtitleMenu a_yellow">Que peut-il vraiment faire ?</a></li>
                <li class="margT-xs"><a href="#que-fait" class="a-subtitleMenu a_yellow">Que fait JavaScript sur votre page ?</a></li>

                <li class="margT-s"><a href="#prem-code" class="a-titleMenu a_yellow a-titleMenu_yellow">Notre premier code JavaScript</a></li>
                <li class="margT-xs"><a href="#penser-comme" class="a-subtitleMenu a_yellow">Penser comme un programmeur</a></li>
                <li class="margT-xs"><a href="#ajouter-java" class="a-subtitleMenu a_yellow">Comment ajouter du JavaScript à votre page ?</a></li>
                <li class="margT-xs"><a href="#ex-jeu" class="a-subtitleMenu a_yellow">Exemple — Jeu : Guess the number</a></li>

                <li class="margT-s"><a href="#debogue" class="a-titleMenu a_yellow a-titleMenu_yellow">Déboguer du code JavaScript</a></li>
                <li class="margT-xs"><a href="#types-erreurs" class="a-subtitleMenu a_yellow">Types d' erreurs</a></li>
                <li class="margT-xs"><a href="#reparer" class="a-subtitleMenu a_yellow">Réparer les erreurs de syntaxe</a></li>
                <li class="margT-xs"><a href="#erreur-logique" class="a-subtitleMenu a_yellow">Une erreur de logique</a></li>

                <li class="margT-s"><a href="#position" class="a-titleMenu a_yellow a-titleMenu_yellow">Les variables</a></li>
                <li class="margT-xs"><a href="#affichage" class="a-subtitleMenu a_yellow">Qu'est ce qu'une variable ?</a></li>
                <li class="margT-xs"><a href="#positionnement" class="a-subtitleMenu a_yellow">Déclarer une variable</a></li>
                <li class="margT-xs"><a href="#varLet" class="a-subtitleMenu a_yellow">La différence entre var et let</a></li>

                <li class="margT-s"><a href="#listes" class="a-titleMenu a_yellow a-titleMenu_yellow">Mathématiques de base en JavaScript</a></li>
                <li class="margT-xs"><a href="#operateurs" class="a-subtitleMenu a_yellow">Opérateurs arithmétiques</a></li>
                <li class="margT-xs"><a href="#increDecrem" class="a-subtitleMenu a_yellow">Incrémentation et décrémentation</a></li>
                <li class="margT-xs"><a href="#assign" class="a-subtitleMenu a_yellow">Opérateurs d'assignation</a></li>

                <li class="margT-s"><a href="#tableaux" class="a-titleMenu a_yellow a-titleMenu_yellow">Chaînes de caractères en JavaScript</a></li>
                <li class="margT-xs"><a href="#typebordure" class="a-subtitleMenu a_yellow">Chaînes de caractères — les bases</a></li>
                <li class="margT-xs"><a href="#cellules" class="a-subtitleMenu a_yellow">Concaténation de chaînes</a></li>
                <li class="margT-xs"><a href="#positiontitre" class="a-subtitleMenu a_yellow">Conclusion</a></li>
            </ul>
        </nav>

        <!-- ____________________ MENU BURGER ____________________ -->
        <div id="block-nav" class="flex centerAll">
            <div class="btn">

                <div class="spin-container spin-container_yellow">
                    <div class="front">
                        <div class="barSpin b1"></div>
                        <div class="barSpin b2"></div>
                        <div class="barSpin b3"></div>
                    </div>


                    <div class="back">
                        <div class="barSpin b1 b-back"></div>
                        <div class="barSpin b3 b-back"></div>
                    </div>
                </div>

            </div>

            <nav id='nav2' class="nav2_yellow unselectable column centerAll">

                <div class="menu-wrap1">
                    <ul class='navul2 column centerAll'>
                        <li class="margT-xs"><a href="#javascript" class="a-titleMenu2 a_yellow a-titleMenu_yellow">Qu’est-ce que le JavaScript ?</a></li>
                        <li class="margT-xs"><a href="#definition" class="a-subtitleMenu a_yellow">Une définition générale</a></li>
                        <li class="margT-xs"><a href="#peut-faire" class="a-subtitleMenu a_yellow">Que peut-il vraiment faire ?</a></li>
                        <li class="margT-xs"><a href="#que-fait" class="a-subtitleMenu a_yellow">Que fait JavaScript sur votre page ?</a></li>
                    </ul>
                    <ul class='navul2 column centerAll'>
                        <li class="margT-xm"><a href="#prem-code" class="a-titleMenu2 a_yellow a-titleMenu_yellow">Notre premier code JavaScript</a></li>
                        <li class="margT-xs"><a href="#penser-comme" class="a-subtitleMenu a_yellow">Penser comme un programmeur</a></li>
                        <li class="margT-xs"><a href="#ajouter-java" class="a-subtitleMenu a_yellow">Comment ajouter du JavaScript à votre page ?</a></li>
                        <li class="margT-xs"><a href="#ex-jeu" class="a-subtitleMenu a_yellow">Exemple — Jeu : Guess the number</a></li>
                    </ul>
                    <ul class='navul2 column centerAll'>
                        <li class="margT-xm"><a href="#debogue" class="a-titleMenu2 a_yellow a-titleMenu_yellow">Déboguer du code JavaScript</a></li>
                        <li class="margT-xs"><a href="#types-erreurs" class="a-subtitleMenu a_yellow">Types d' erreurs</a></li>
                        <li class="margT-xs"><a href="#reparer" class="a-subtitleMenu a_yellow">Réparer les erreurs de syntaxe</a></li>
                        <li class="margT-xs "><a href="#erreur-logique" class="a-subtitleMenu a_yellow">Une erreur de logique</a></li>
                    </ul>
                </div>

                <div class="menu-wrap2">
                    <ul class='navul2b column centerAll'>
                        <li class="margT-xm"><a href="#position" class="a-titleMenu2 a_yellow a-titleMenu_yellow">Les variables</a></li>
                        <li class="margT-xs"><a href="#affichage" class="a-subtitleMenu a_yellow">Qu'est ce qu'une variable ?</a></li>
                        <li class="margT-xs"><a href="#positionnement" class="a-subtitleMenu a_yellow">Déclarer une variable</a></li>
                        <li class="margT-xs"><a href="#varLet" class="a-subtitleMenu a_yellow">La différence entre var et let</a></li>
                    </ul>
                    <ul class='navul2b column centerAll'>
                        <li class="margT-xm"><a href="#listes" class="a-titleMenu2 a_yellow a-titleMenu_yellow">Mathématiques de base en JavaScript</a></li>
                        <li class="margT-xs"><a href="#operateurs" class="a-subtitleMenu a_yellow">Opérateurs arithmétiques</a></li>
                        <li class="margT-xs"><a href="#increDecrem" class="a-subtitleMenu a_yellow">Incrémentation et décrémentation</a></li>
                        <li class="margT-xs"><a href="#assign" class="a-subtitleMenu a_yellow">Opérateurs d'assignation</a></li>
                    </ul>
                    <ul class='navul2b column centerAll'>
                        <li class="margT-xm"><a href="#tableaux" class="a-titleMenu2 a_yellow a-titleMenu_yellow">Chaînes de caractères en JavaScript</a></li>
                        <li class="margT-xs"><a href="#typebordure" class="a-subtitleMenu a_yellow">Chaînes de caractères — les bases</a></li>
                        <li class="margT-xs"><a href="#cellules" class="a-subtitleMenu a_yellow">Concaténation de chaînes</a></li>
                        <li class="margT-xs margB-xs"><a href="#positiontitre" class="a-subtitleMenu a_yellow">Conclusion</a></li>
                    </ul>
                </div>
            </nav>
        </div>


        <section id="section-1">
            <div class="h2 row centerJust">
                <h2 id="javascript" class="h2Java h2-section">Qu’est-ce que le JavaScript ?</h2>
            </div>
            <h3 id="definition" class="h3Java h3-section">Une définition générale</h3>
            <p class="p-Java">
                JavaScript est un langage de programmation qui permet d’implémenter des mécanismes complexes sur une
                page
                web. À chaque fois qu’une page web fait plus que simplement afficher du contenu statique comme :<br>
                <br>
                - afficher du contenu mis à jour à des temps déterminés,<br>
                - des cartes interactives,<br>
                - des animations 2D/3D,<br>
                - des menus vidéo défilants,<br>
                - etc...<br>
                JavaScript a de bonnes chances d’être impliqué.<br>
                <br>
                C’est la troisième couche des technologies standards du web, après HTML et CSS.<br>
            </p>
            <ul class="ul-para">
                <li>
                    <p class="p-Java">
                        HTML est un langage de balises utilisé pour structurer et donner du sens au contenu web.<br>
                        Par exemple : définir des paragraphes, titres et tables de données ou encore intégrer des images
                        ou
                        des vidéos dans une page.
                    </p>
                </li>
                <li>
                    <p class="p-Java">
                        CSS est un langage de règles de style utilisé pour mettre en forme le contenu HTML.<br>
                        Par exemple : en modifiant la couleur d’arrière-plan ou les polices, ou en disposant le contenu
                        en
                        plusieurs colonnes.
                    </p>
                </li>
                <li>
                    <p class="p-Java">
                        JavaScript est un langage de programmation qui permet de créer du contenu mis à jour de façon
                        dynamique, de contrôler le contenu multimédia, d’animer des images, et tout ce à quoi on peut
                        penser.<br>
                        Bon, peut-être pas tout, mais vous pouvez faire bien des choses avec quelques lignes de
                        JavaScript.
                    </p>
                </li>
            </ul>
            <p class="p-Java">
                <br>
                Les trois couches se superposent naturellement. Prenons pour exemple une simple étiquette texte.<br>
                - Les balises HTML lui donnent une structure et un but :<br>
                <span class="ex-code">&lt;p&gt;Player 1: Chris&lt;/p&gt;<br></span>
                Player 1: Chris<br>
                - Nous pouvons ensuite ajouter du CSS pour rendre cela plus joli :<br>
                <span class="ex-code">
                    p{<br>
                    &emsp;font-family: helvetica, sans-serif;<br>
                    &emsp;letter-spacing: 1px;<br>
                    &emsp;text-transform: uppercase;<br>
                    &emsp;text-align: center;<br>
                    &emsp;border: 2px solid white;<br>
                    &emsp;background: rgb(4, 133, 255));<br>
                    &emsp;color: white;<br>
                    &emsp;box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);<br>
                    &emsp;border-radius: 10px;<br>
                    &emsp;padding: 4px 10px;<br>
                    &emsp;display: inline-block;<br>
                    &emsp;cursor:pointer;<br>
                    }
                </span>
            </p>
            <div class="p-exemple row centerAll">
                <p class="p-player">
                    PLAYER 1: CHRIS
                </p>
            </div>
            <p class="p-Java">
                - Et enfin utiliser JavaScript pour ajouter un comportement dynamique :<br>
                <span class="ex-code">
                    let para = document.querySelector('p');<br>
                    <br>
                    para.addEventListener('click', updateName);<br>
                    <br>
                    function updateName(){<br>
                    &emsp;let name = prompt('Enter a new name');<br>
                    &emsp;para.textContent = 'Player 1: ' + name;<br>
                    }
                </span>
            </p>
            <div class="p-exempleJs row centerAll">
                <p class="p-player">
                    PLAYER 1: CHRIS
                </p>
            </div>
            <p class="p-Java">Essayez de cliquer sur l’étiquette texte pour voir ce qui se passe.</p>
            <hr>
            <h3 id="peut-faire" class="h3Java h3-section">Que peut-il vraiment faire ?</h3>
            <p class="p-Java">Le cœur de JavaScript est constitué de fonctionnalités communes de programmation permettant de :</p>
            <ul class="ul-para">
                <li>
                    <p class="p-Java">
                        - stocker des valeurs utiles dans des variables.<br>
                        Dans l’exemple plus haut, nous demandons un nouveau nom à l’utilisateur puis le stockons dans
                        une
                        variable appelée name.<br>
                        <span class="ex-code">let name = prompt('Enter a new name');</span>
                    </p>
                </li>
                <li>
                    <p class="p-Java">
                        - faire des opérations sur des morceaux de texte<br>
                        (appelés en programmation « chaînes de caractères » ou « strings » en anglais).<br>
                        Dans l’exemple plus haut, nous prenons la chaîne de caractères "Player 1: " et lui adjoignons la
                        variable name pour créer l’étiquette ''Player 1: Chris"<br>
                        <span class="ex-code">para.textContent = 'Player 1: ' + name;</span>
                    </p>
                </li>
                <li>
                    <p class="p-Java">
                        exécuter du code en réponse à certains événements se produisant sur une page web.<br>
                        Dans l’exemple, nous avons utilisé un événement (« event ») click (en-US) pour détecter quand
                        l’utilisateur clique sur le bouton; on exécute alors le code qui met à jour l’étiquette.<br>
                        <span class="ex-code">para.addEventListener('click', updateName);</span>
                    </p>
                </li>
                <li>
                    <p class="p-Java">Et bien plus encore !</p>
                </li>
            </ul>
            <br>
            <p class="p-Java">
                Là où ça devient excitant, c’est que de nombreuses fonctionnalités sont basées sur ce cœur de
                JavaScript.<br>
                Les « interfaces de programmation applicatives » (APIs pour « Application Programming Interfaces »)
                donnent
                accès à des quasi-superpouvoirs dans votre code JavaScript.<br>
                <br>
                Les API sont des blocs de code déjà prêts qui permettent à un développeur d'implémenter des programmes
                qui
                seraient difficiles voire impossibles à implémenter sans elles.<br>
                C'est comme du code "en kit" pour la programmation, très pratiques à assembler et à combiner.
                Les API sont au code ce que les meubles en kits sont aux fournitures de maison.<br>
                <br>
                Il est beaucoup plus facile de prendre des panneaux prêts à l'emploi et de les visser ensemble pour
                faire une étagère que de travailler vous-même sur le design,
                d'aller chercher le bon bois, de couper tous les panneaux à la bonne taille et la bonne forme, de
                trouver les vis de la bonne taille, puis les assembler pour faire une étagère.<br>
                <br>
                <br>
                <br>
                Elles se divisent généralement en deux catégories :<br>
                <br>
                <span class="p-gras">Les APIs de navigateur</span> font partie intégrante de votre navigateur web, et
                peuvent accéder à des données de l’environnement informatique (l’ordinateur), ou faire d'autres choses
                complexes.<br>
                <br>
                Par exemple :
            </p>
            <ul class="ul-para">
                <li>
                    <p class="p-Java">
                        l’API DOM (Document Object Model) permet de manipuler du HTML et du CSS<br>
                        (créer, supprimer et modifier du HTML, appliquer de nouveaux styles à la page de façon
                        dynamique, etc...).<br>
                        Chaque fois que vous voyez une fenêtre popup sur une page ou du nouveau contenu apparaître<br>
                        (comme dans notre démonstration plus haut), il s’agit d'une action du DOM.
                    </p>
                </li>
                <li>
                    <p class="p-Java">
                        l’API de géolocalisation récupère des informations géographiques.<br>
                        C’est ainsi que Google Maps peut trouver votre position et la situer sur une carte.
                    </p>
                </li>
                <li>
                    <p class="p-Java">
                        les APIs Canvas et WebGL permettent de créer des animations 2D et 3D.<br>
                        On fait des choses incroyables avec ces technologies, voyez Chrome Experiments et webglsamples.
                    </p>
                </li>
                <li>
                    <p class="p-Java">
                        les APIs Audio et Video, comme HTMLMediaElement et WebRTC permettent des actions intéressantes
                        sur le multimédia,<br>
                        telles que jouer de l’audio ou de la vidéo directement dans une page web,<br>
                        ou récupérer le flux vidéo de votre webcam et l’afficher sur l’ordinateur de quelqu’un
                        d’autre<br>
                        (essayez la Snapshot demo pour vous faire une idée).
                    </p>
                </li>
            </ul>
            <p class="note">
                Note : beaucoup des exemples ci-dessus ne fonctionneront pas dans un ancien navigateur.<br>
                Il vaut mieux utiliser un navigateur moderne comme Firefox, Chrome, Edge ou Opera pour exécuter votre
                code et faire vos tests.<br>
                Si vous êtes amené à écrire du code de production (c’est-à-dire destiné à de véritables
                utilisateurs),<br>
                il vous faudra prendre en compte la compatibilité pour différents navigateurs.
            </p>
            <br>
            <p class="p-Java">
                <span class="p-gras">Les APIs tierces</span> ne font par défaut pas partie de votre navigateur, et vous
                devrez en général récupérer le code et les informations les concernant quelque part sur le web.<br>
                <br>
                Par exemple :
            </p>
            <ul class="ul-para">
                <li>
                    <p class="p-Java">
                        l’API Twitter vous permet par exemple d'afficher vos derniers tweets sur votre site.
                    </p>
                </li>
                <li>
                    <p class="p-Java">
                        l’API Google Maps permet d’intégrer à votre site des cartes personnalisées et d’autres
                        fonctionnalités de ce type.
                    </p>
                </li>
            </ul>
            <p class="note">
                Note : ces APIs sont d’un niveau avancé et nous ne couvrerons aucune d’entre elles dans ce cours, mais
                les liens ci-dessus fournissent une large documentation si vous voulez en savoir davantage.
            </p>
            <br>
            <p class="p-Java">
                Et il y a bien plus encore ! Pas de précipitation cependant.<br>
                Vous ne serez pas en mesure de créer le nouveau Facebook, Google Maps ou Instagram après une journée de
                travail sur JavaScript,<br>
                il y a d’abord beaucoup de bases à assimiler. Et c’est pourquoi vous êtes ici. Allons-y !
            </p>

            <hr>
            <h3 id="que-fait" class="h3Java h3-section">Que fait JavaScript sur votre page ?</h3>
            <p class="p-Java">
                Ici nous allons commencer à réellement nous intéresser au code, et, ce faisant, à explorer ce qui se
                passe quand vous exécutez du JavaScript dans votre page.<br>
                <br>
                Commençons par un bref récapitulatif de ce qui se passe lorqu'une page web se charge dans le
                navigateur.<br>
                Quand la page se charge, les codes HTML, CSS et JavaScript s'exécutent dans un environnement (l’onglet
                du navigateur).<br>
                C’est un peu comme une usine qui prend des matières premières (le code) et sort un produit (la page
                web).<br>
                <br>
                Le JavaScript est exécuté par le moteur JavaScript du navigateur, après que le HTML et le CSS ont été
                assemblés et combinés en une page web.<br>
                Cet enchaînement est nécessaire pour être sûr que la structure et le style de la page sont déjà en place
                quand le JavaScript commence son exécution.<br>

                C’est une bonne chose, étant donné qu’un usage fréquent de JavaScript est de modifier dynamiquement le
                HTML et le CSS pour mettre à jour l’interface utilisateur, via l’API DOM comme évoqué plus tôt.<br>
                Charger le JavaScript et essayer de l’exécuter avant que le HTML et le CSS ne soient en place mènerait à
                des erreurs
            </p>
            <h4 class="h4Java">Ordre d’exécution du JavaScript :</h4>
            <p class="p-Java">
                Quand le navigateur rencontre un bloc de JavaScript, il l’exécute généralement dans l’ordre, de haut en
                bas.<br>
                Vous devrez donc faire attention à l’ordre dans lequel vous écrivez les choses.<br>
                <br>
                Reprenons le bloc de JavaScript vu dans notre premier exemple :<br>
                <br>
                // Nous sélectionnons ici un paragraphe de texte //<br>
                <span class="ex-code">
                    let para = document.querySelector('p');
                </span>
                <br>
                /* Nous lui attachons un «écouteur d'évènement» (event listener) pour qu'ensuite,<br>
                lors d’un clic sur le paragraphe, le bloc de code updateName() s’exécute. */<br>
                <span class="ex-code">
                    para.addEventListener('click', updateName);
                </span>
                <br>
                /* Nous ajoutons le bloc de code updateName() (ces blocs de code réutilisables sont appelés
                « fonctions »)<br>
                qui demande à l’utilisateur un nouveau nom, et l’insère dans le paragraphe pour mettre à jour
                l’affichage.*/<br>
                <span class="ex-code">
                    function updateName(){<br>
                    &emsp;let name = prompt('Enter a new name'); <br>
                    &emsp;para.textContent = 'Player 1: ' + name; <br>
                    }
                </span>
                <br>
                Si vous échangiez les deux premières lignes de code, rien ne fonctionnerait plus, vous obtiendriez une
                erreur dans la console développeur du navigateur :<br>
                TypeError: para is undefined.<br>
                Cela signifie que l’objet para n’existe pas encore, donc nous ne pouvons pas y ajouter d’écouteur
                d'évènement.<br>
            </p>
            <p class="note">
                Note : c’est une erreur très fréquente. Il faut veiller à ce que les objets référencés dans votre code
                existent avant d'essayer de les utiliser.<br>
            </p>
            <h4 class="h4Java">Code interprété contre code compilé :</h4>
            <p class="p-Java">
                En informatique, on parle de code interprété ou compilé. JavaScript est un langage interprété :<br>
                le code est exécuté de haut en bas et le résultat du code exécuté est envoyé immédiatement.<br>
                Vous n’avez pas à transformer le code en une autre forme avant que le navigateur ne l’exécute.<br>
                Les langages compilés quant à eux sont transformés (compilés) en une autre forme avant d’être exécutés
                par l’ordinateur.<br>
                Par exemple le C et le C++ sont compilés en langage assembleur qui est ensuite exécuté par
                l’ordinateur.<br>
                Chaque approche a ses avantages, ce que nous ne développerons pas pour l’instant.<br>
            </p>
            <h4 class="h4Java">Code côté client contre côté serveur :</h4>
            <p class="p-Java">
                Vous pouvez aussi rencontrer les termes de code côté serveur et côté client, notamment dans le contexte
                du développement web.<br>
                Le code côté client est du code exécuté sur l’ordinateur de l’utilisateur :<br>
                quand une page web est vue, le code côté client de la page est téléchargé, puis exécuté et affiché par
                le navigateur.<br>
                Dans ce module JavaScript, nous parlons explicitement de JavaScript côté client.<br>
                Le code côté serveur quant à lui est exécuté sur le serveur, puis ses résultats sont téléchargés et
                affichés par le navigateur.<br>
                Citons comme langages web côté serveur populaires le PHP, Python, Ruby, et ASP.NET.<br>
                Et JavaScript ! JavaScript peut aussi s’utiliser comme un langage côté serveur, par exemple dans le
                populaire environnement Node.js.<br>
            </p>
            <h4 class="h4Java">Code dynamique contre code statique :</h4>
            <p class="p-Java">
                Le mot dynamique est utilisé tant pour qualifier le JavaScript côté client que les langages côté
                serveur.<br>
                Il se réfère à la capacité de mettre à jour l’affichage d’une page/application web pour montrer des
                choses différentes en des circonstances différentes, en générant un nouveau contenu quand
                nécessaire.<br>
                Le code côté serveur génère dynamiquement du nouveau contenu sur le serveur, par exemple en lisant une
                base de données, tandis que le JavaScript côté client peut générer dynamiquement un contenu nouveau dans
                le navigateur, par exemple en créant une nouvelle table HTML, en y insérant les données demandées au
                serveur, puis en affichant la table dans une page web. Selon le contexte, le terme dynamique prend un
                sens un peu différent, mais les deux sont très liés, et les deux approches (côté serveur et client) vont
                souvent de pair.<br>
                Une page web sans contenu mis à jour dynamiquement est appelé statique : elle montre simplement toujours
                le même contenu.
            </p>
        </section>


        <!-- ____________________ SECTION 2 ____________________ -->
        <section id="section-2">
            <div class="degrade">
                <div class="h2 row centerJust">
                    <h2 id="prem-code" class="h2Java h2-section">Notre premier code JavaScript</h2>
                </div>
                <h3 id="penser-comme" class="h3Java h3-section">Penser comme un programmeur</h3>
                <p class="p-Java">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet tempora quam culpa ex minima
                    aliquid
                    alias numquam ipsa reiciendis quae porro dicta, itaque ipsum, nisi modi expedita eaque
                    assumenda!
                    Repellendus!
                </p>
                <h3 id="ajouter-java" class="h3Java h3-section">Ajouter du JavaScript à votre page ?</h3>
                <p class="p-Java">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, quae ducimus perspiciatis
                    magni
                    sequi ea provident qui magnam optio obcaecati aut quaerat omnis iusto, nam quia ut, velit alias
                    fuga?
                </p>
                <h3 id="ex-jeu" class="h3Java h3-section">Exemple — Jeu : Guess the number</h3>
                <p class="p-Java">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti libero ratione est fugiat
                    porro in
                    totam illum laborum veritatis odio. Quam, error laboriosam laborum aspernatur tempora aliquid
                    inventore nihil optio labore corporis deserunt. Laborum ut, sapiente cupiditate ea
                    exercitationem
                    unde fuga nostrum nobis mollitia et, iste ipsam, eius fugiat quaerat ad quia voluptate non
                    voluptatum consequatur quidem animi aut eveniet placeat? Doloribus harum esse voluptates libero
                    id
                    quisquam sint, error, ex illo quas laboriosam suscipit! Odio quasi minus deleniti expedita
                    maxime
                    inventore reprehenderit voluptas repellendus facilis dignissimos nulla optio quisquam, excepturi
                    dolorem odit provident animi est voluptates. Qui, necessitatibus at.
                </p>
            </div>
        </section>

        <a class="inscription unselectable margB-m" href="AAA-signup.php">Inscrivez-vous pour lire la suite</a>

    </section>

</main>
<!-- ------------------------------ FOOTER------------------------------ -->
<script src="/tutoForum/assets/js/mainMenu.js"></script>
<script src="/tutoForum/assets/js/tuto-javascript.js"></script>
</body>

</html>