<?php
    // Snack 3
    // Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
    // Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z

    // Snack 4
    // Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta

    // Snack 5
    // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

    // Snack 6
    // Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

    // Snack 7
    // Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.


    // Snack 3
    echo "<h1>Posts</h1>";
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

    $postsKeys = array_keys($posts);

    for($i = 0; $i < count($posts); $i++) {
        echo "<h2>".$postsKeys[$i]."</h2>";
        for($j = 0; $j < count($posts[$postsKeys[$i]]);$j++) {
            echo "<h3>".$posts[$postsKeys[$i]][$j]['title']."</h3>";
            echo "<div>".$posts[$postsKeys[$i]][$j]['author']."</div>";
            echo "<p>".$posts[$postsKeys[$i]][$j]['text']."</p>";
        }
    }

    // Snack 4
    $arrNumRan = [];
    echo "<h1>Numeri Random</h1>";
    while (count($arrNumRan) < 15) {
        $numRan = rand(1, 100);
        
        if(!in_array($numRan, $arrNumRan)) {
            $arrNumRan[] = $numRan;
            echo $numRan." ";
        }

    }
?>