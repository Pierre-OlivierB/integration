<?php 
$array = [
    ['Stéphane' ,  'Razafia','https://razafiasimanana.needemand.com/'],
    ['Yen Nhi' ,  'Ho Tong Minh','https://hotongminh.needemand.com/'],
    ['Pierre-Olivier' ,  'Baudino','https://pierre-olivierb.github.io'],
    ['Kim' ,  'Young Hee','https://kim.needemand.com/'],
    ['Laurent' ,  'Cochonneau','https://cochonneau.needemand.com/'],
    ['Raul' ,  'Hernandez','https://hernandez.needemand.com/'],
    ['Patrick' ,  'Arnaud','https://arnaud.needemand.com/'],
    ['Jean-Bernard' ,  'Briois','https://briois.needemand.com/'],
    ['Sylvie' ,  'Linxe','https://linxe.needemand.com/'],
    ['Thibault' ,  'Mourichon','https://mourichon.needemand.com/'],
    ['Julien' ,  'Grossi','https://grossi.needemand.com/'],
    ];

?>
<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Coming Soon</span>
                                <span class="section-heading-lower">Vos réalisations</span>
                            </h2>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                <?php foreach($array as list($a,$b,$c)):?>
                                <li class="list-unstyled-item list-hours-item d-flex sep">
                                    <?=$a." ".$b?>
                                    <a href="<?=$c?>"class="ml-auto">Portfolio</a>
                                </li>
                                <?php endforeach?>
                                <!-- <li class="list-unstyled-item list-hours-item d-flex sep">
                                Stéphane Razafia
                                    <a href="https://razafiasimanana.needemand.com/"class="ml-auto">Portfolio</a>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex sep">
                                Yen Nhi Ho Tong Minh
                                    <a href="https://hotongminh.needemand.com/" class="ml-auto">Portfolio</a>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex sep">
                                Pierre-Olivier Baudino
                                    <a href="https://pierre-olivierb.github.io" class="ml-auto">Portfolio</a>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex sep">
                                Young Hee Kim
                                    <a href="https://kim.needemand.com/" class="ml-auto">Portfolio</a>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex sep">
                                Raul Hernandez
                                    <a href="https://cochonneau.needemand.com/" class=" ml-auto">Portfolio</a>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex sep">
                                Stéphane Razafia
                                    <a href="https://hernandez.needemand.com/" class=" ml-auto">Portfolio</a>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex sep">
                                Patrick  Arnaud
                                    <a href="https://arnaud.needemand.com/" class=" ml-auto">Portfolio</a>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex sep">
                                Jean-Bernard Briois
                                    <a href="https://briois.needemand.com/" class=" ml-auto">Portfolio</a>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex sep">
                                Sylvie  Linxe
                                    <a href="https://linxe.needemand.com/" class=" ml-auto">Portfolio</a>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex sep">
                                Thibault Mourichon
                                    <a href="https://mourichon.needemand.com/" class=" ml-auto">Portfolio</a>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex sep">
                                Julien Grossi
                                    <a href="https://grossi.needemand.com/" class=" ml-auto">Portfolio</a>
                                </li> -->
                            </ul>
                            <p class="address mb-5">
                                <em>
                                    <strong>Promo 2021-2022</strong>
                                    <br />
                                    Concepteurs & développeurs d'application
                                </em>
                            </p>
                            <p class="mb-0">
                                <small><em>Needemand</em></small>
                                <br />
                                contact@needemand.com 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section class="page-section about-heading">
            <div class="container img_end">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Projet Fil Rouge</span>
                                    <span class="section-heading-lower">Contexte</span>
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