<?php 
include('./bdd/control.php');
?>
<section class="page-section">
            <div class="container d-flex">
                <div class="intro">
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h1 class="section-heading mb-4">Commentaires</h1>
                    </div>
                </div>
            </div>
        </section>
<section class="page-section">
    <div class="container d-flex"> 
            <form action="index.php?loc=commentaires" class="input-group" method="post">
                <div>
                   <span class="input-group-text">Pseudo</span>
                    <input type="text" class ="form-control" placeholder="Username  15car max" aria-label="Username" aria-describedby="addon-wrapping" name="pseudo" id=""> 
                </div>
                
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="comments"></textarea>
                    <label for="floatingTextarea2">Comments 500car max</label>
                </div>
                <button type="submit" name="ok">Poster</button>
            </form>

    </div>
</section>
<section class="page-section">
    <div class="container bg-faded rounded d-flex">
        <h2>Commentaires:</h2>
        <table>
            <tbody>
        <?php while ($row=$sth->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr class="primary">
                <td><?php echo htmlspecialchars($row['pseudo']);?></td>
                <td><?php echo htmlspecialchars($row['texte']);?></td>
            </tr>
        <?php endwhile ?>
    </tbody>
    </table>
    </div>
</section>
<section class="page-section about-heading">
            <div class="container img_end">
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Projet Fil Rouge</span>
                                </h2>
                                <p>Projet réalisé dans le cadre d'une formation. En partie en groupe et en partie individuellement, ce projet est le résultat d'un apprentissage lors d'une formation </p>
                                <p class="mb-0">
                                Temps de réalisation
                                    <em>du projet</em>
                                      5 mois environ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>