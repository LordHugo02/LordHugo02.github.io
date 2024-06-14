<?php
    include('controller/forum.php');
//    var_dump($forum);
?>

<main class="mx-5 my-5">
    <article>
        <section class="opacity-90 bg-light px-4 py-4 mt-4 mb-4 d-flex col rounded">
            <div class="d-flex row w-75">
                <h2><?php echo  $forum['titre']?></h2>
                <p><?php echo  $forum['description']  ?></p>
            </div>
            <aside>
                <img src="../img/fish/<?php echo  $forum['link']?>.png" alt="<?php echo $forum['titre']?>">
            </aside>
        </section>
        <section class="opacity-90 bg-light px-4 py-4 mt-4 mb-4 rounded d-flex justify-content-center row">
            <h2>Informations</h2>
            <table class="w-75" aria-labelledby="tableTitle">
                <thead>
                <tr>
                    <th id="tableTitle">Lieux, périodes et pourcentage de pêche des poissons</th>
                </tr>
                <tr>
                    <th>Mois</th>
                    <th>Heure</th>
                    <th>Lieu</th>
                    <th>Pourcentage</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Janvier</td>
                    <td>13h-14h</td>
                    <td>Lac</td>
                    <td>69%</td>
                </tr>
                <tr>
                    <td>Février</td>
                    <td>10h-14h</td>
                    <td>Océan</td>
                    <td>83%</td>
                </tr>
                <tr>
                    <td>Mars</td>
                    <td>8h-11h</td>
                    <td>Lac</td>
                    <td>11%</td>
                </tr>
                <tr>
                    <td>Avril</td>
                    <td>12h-14h</td>
                    <td>Océan</td>
                    <td>42%</td>
                </tr>
                <tr>
                    <td>Mai</td>
                    <td>10h-14h</td>
                    <td>Rivière</td>
                    <td>77%</td>
                </tr>
                <tr>
                    <td>Juin</td>
                    <td>12h-13h</td>
                    <td>Lac</td>
                    <td>23%</td>
                </tr>
                <tr>
                    <td>Juillet</td>
                    <td>13h-14h</td>
                    <td>Rivière</td>
                    <td>47%</td>
                </tr>
                <tr>
                    <td>Août</td>
                    <td>11h-14h</td>
                    <td>Rivière</td>
                    <td>60%</td>
                </tr>
                <tr>
                    <td>Septembre</td>
                    <td>13h-14h</td>
                    <td>Océan</td>
                    <td>10%</td>
                </tr>
                <tr>
                    <td>Octobre</td>
                    <td>12h-14h</td>
                    <td>Océan</td>
                    <td>37%</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td>Mois</td>
                    <td>Heure</td>
                    <td>Lieu</td>
                    <td>Pourcentage</td>
                </tr>
                </tfoot>
            </table>
        </section>
        <aside class="opacity-90 bg-light px-4 py-4 mt-4 mb-4 rounded">
            <h2>Commentaires</h2>
            <hr>
            <ul>
                <li>
                    <h3>Arnold</h3>
                    <p>Super poisson, je l'ai pêché hier !</p>
                </li>
                <li>
                    <h3>Léa</h3>
                    <p>J'arrive pas à l'avoir c'est un enfer !</p>
                </li>
                <li>
                    <h3>Maxime</h3>
                    <p>Y'a besoin de quel appât pour l'attraper ?</p>
                </li>
                <li>
                    <h3>Sophie</h3>
                    <p>Je l'ai tout le temps celui-là ;-; Laisse la place aux autres</p>
                </li>
                <li>
                    <h3>Lucas</h3>
                    <p>Pourquoi on peut le cuire ? C'est pas censé être toxique comme poisson ?</p>
                </li>
                <li>
                    <h3>Emma</h3>
                    <p>Il sert à rien et il est laid, à par pour la collection.</p>
                </li>
            </ul>
        </aside>
    </article>
</main>



