# Laravel Template

Dopo aver creato un progetto Laravel:

-   npm install
-   npm i --save-dev sass per installare sass
-   rinomino la cartella css all'interno di resources in scss ed il file app.css in app.scss
-   aggiorno il file vite.config.js:
    -   modifico il percorso del css con quello giusto(cambio css con scss)
    -   aggiungo un alias
-   importo in app.js il file scss con import '~resources/scss/app.scss';
-   nell'head della pagina HTML includo app.js con la direttiva @vite('resources/js/app.js')
-   dico a Vite di processare i percorsi affinchè processi tutte le immagini presenti nella cartella resources/img/ aggiungendo in app.js import.meta.glob([
    '../img/**'
    ])
-   per utilizzare immagine nel file html usare {{ Vite::asset('resources/img/logo.png') }} nella source dell'img
-   installo Bootstrap con npm i --save bootstrap @popperjs/core
-   in vite.config.js importo path con il comando import path from 'path';
-   aggiungo un alias ~bootstrap utilizzando path
-   importo Bootstrap nel file app.scss con @import "~bootstrap/scss/bootstrap";
-   importo Boostrap anche in app.js con import \* as bootstrap from 'bootstrap';
