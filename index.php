 <!-- 
    Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra 
di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e 
come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in 
tanti paragrafi. Ogni punto un nuovo paragrafo.

Snack 5
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome 
e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
  -->



 <!-- SNACK 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra 
di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60-->

 <?php
    $matches = [
        [
            'home' => 'New York Hamburgers',
            'guest' => 'Ohio Fries Squad',
            'home-points' => 55,
            'guest-points' => 60,
        ],
        [
            'home' => 'Orlando Bloom\'s Cheerleaders',
            'guest' => 'Avana De Cuba Drinkers',
            'home-points' => 60,
            'guest-points' => 48,
        ],
        [
            'home' => 'WDC Rolling Stonks',
            'guest' => 'Magpies',
            'home-points' => 52,
            'guest-points' => 60,
        ],
    ];

    echo '<h2 style="color: red">SNACK 1</h2>';

    for ($i = 0; $i < count($matches); $i++) {

    ?>

     <div style="padding-bottom: 10px; color: darkgreen">
         <?= $matches[$i]['home'] . ' - ' . $matches[$i]['guest'] . ' | ' . $matches[$i]['home-points'] . '-' . $matches[$i]['guest-points'] ?>
     </div>

 <?php

    }
    ?>


 <!-- SNACK 2

Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

 <?php
    echo '<h2 style="color: red">SNACK 2</h2>';

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    $verification = '';

    if (trim(strlen($name)) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
        $verification = 'Accesso riuscito';
    } else {
        $verification = 'Accesso negato';
    }
    ?>

 <div style="font-size: 1.5rem">
     <?php echo $verification ?>
 </div>


 <!-- SNACK 3

 Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e 
come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

 <?php
    echo '<h2 style="color: red">SNACK 3</h2>';

    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    $posts_keys = array_keys($posts);

    for ($k = 0; $k < count($matches); $k++) {

    ?>

     <div>
         <h2>
             <?= $posts_keys[$k] ?>
         </h2>
         <p>
             <?php
                for ($i = 0; $i < count($posts[$posts_keys[$k]]); $i++) {
                ?>

         <div>
             <?= $posts[$posts_keys[$k]][$i]['title'] ?>
         </div>
         <div>
             <?= $posts[$posts_keys[$k]][$i]['author'] ?>
         </div>
         <div>
             <?= $posts[$posts_keys[$k]][$i]['text'] ?>
         </div>

     <?php
                }
        ?>

     </p>
     </div>
 <?php
    }
    ?>


 <!-- SNACK 4

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in 
tanti paragrafi. Ogni punto un nuovo paragrafo. -->

 <?php
    echo '<h2 style="color: red">SNACK 4</h2>';
    $par = 'Ciao sono Valerio. Sono un programmatore (magari). Mi diverto molto con JavaScript. A presto!';

    $parExploded = explode('.', $par);

    var_dump($parExploded);
    ?>