<!DOCTYPE html>
<html lang="fr"> <!--lang= langue utilisée pour la page-->
    <head>
        <title>List de Bar</title>  <!--titre de la page affiché dans l'onglet navigateur-->
        <meta charset="utf-8"> <!--cryptage de la page pour facilité la lecture par le moteur de recherche-->
        <meta name="description" content="liste des bar de belgique que je connais">    <!--courte description du contenu de la page-->
        <meta name="keywords" content="bar, list, alcool, biere">  <!--mot cléf pour le moteur de recherche: keyword1, keyword2, ...-->
        <meta name="author" content="Desmet Tim">   <!--auteur de la page: auteur1, auteur2, ...-->
        <meta name="viewport" content="width=device-width, initial-scale=1">  <!--pour garder les proportions sur différent affichage-->
        @vite(["resources/css/app.css", "resources/scss/app.scss", "resources/js/app.js",])
    </head>
    <body>
        <header>
            @include('component.navbar')
            <h1>Liste de Bar</h1>
            

        </header>
        <main>
            @yield('content')
        </main>
        @include('component.footer')
    </body>
    
</html>