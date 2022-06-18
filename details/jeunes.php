<div class="col-lg-8">
                <div class="col-12">
                    <div class="service-detail-sec bg-custom-white bx-wrapper">
                        <div class="services-detail-slider mb-xl-30">
                            <div class="service-image">
                                <img src="./jeunes/0.jpg" class="image-fit" alt="img">
                                <div class="overlay overlay-bg-black"></div>
                                <div class="service-text-wrapper transform-center">
                                    <h3 class="text-custom-white">Des formations qui répondent aux besoins du marché</h3>
                                    <a href="contact.php" class="btn-first btn-submit">Contactez Nous</a>
                                </div>
                            </div>
                            <div class="service-image">
                                <img src="./jeunes/11.jpg" class="image-fit" alt="img">
                                <div class="overlay overlay-bg-black"></div>
                                <div class="service-text-wrapper transform-center">
                                    <h3 class="text-custom-white">Auto entreprenariat</h3>
                                    <a href="contact.php" class="btn-first btn-submit">Joignez Nous</a>
                                </div>
                            </div>
                        </div>
                        <a href="./formation.php" class="btn-first btn-submit-fill" target="_blank">
                                    Faire une Formation
                        </a>
                        <div class="service-meta mb-xl-30">
                            <h2 class="text-custom-black fw-600">OBJECTIFS</h2>
                            <p class="text-light-white">
                                Notre politique vise à promouvoir et dévélopper la formation professionnelle. La formation occupe une place importante puisqu'elle contribue à adapter les besoins en compétences aux évolutions pédagogiques et technologiques permanentes de notre monde.
                            </p>
                            <p class="text-light-white">
                                Former habilement des hommes et des femmes en activité dans l'acquisition de nouvelles compétences afin de les rendre opérationnels immédiatement, concours à notre objectif social qu'est la réduction de la précarité dans notre environnement.
                            </p>
                            <h4 class="text-custom-black fw-600">Nous Formons en :</h4>
                            <p class="text-light-white">
                                <div class="lw-about-right-list">
                                    <ul>
                                    <li><i class="fas fa-check"></i>Auro Entreprenariat</li>
                                    <li><i class="fas fa-check"></i> Elevage</li>
                                    <li><i class="fas fa-check"></i> Agriculture</li>
                                    <li><i class="fas fa-check"></i> Installation, maintenance d'appareils technologiques (antennes paraboliques, panneaux solaires)</li>
                                    <li><i class="fas fa-check"></i>Sérigraphie</li>
                                    <li><i class="fas fa-check"></i>Impressions</li>
                                    <li><i class="fas fa-check"></i>Bureutique (saisie et traitement de texte)</li>
                                    </ul>
                                </div>
                            </p>

                            <p class="text-light-white">
                                Pour les initiés: <br>
                                <div class="lw-about-right-list">
                                    <ul>
                                    <li><i class="fas fa-check"></i>Sessions de mise à niveau sur la gestion financière</li>
                                    <li><i class="fas fa-check"></i>Optimisation des revenus des entreprises</li>
                                    <li><i class="fas fa-check"></i> Maîtrise des procédures administratives </li>
                                    <li><i class="fas fa-check"></i> Code général des impôts</li>
                                    </ul>
                                </div>
                            </p>

                            <div style="display: flex; flex-wrap: wrap;">
                                <?php
                                    for ($i=0; $i < 13 ; $i++) { 
                                        echo '  
                                                    <div class="card m-1" style="width: 18rem;">
                                                        <img class="card-img-top" src="./jeunes/'.$i.'.jpg" alt="Card image cap">
                                                        <div class="card-body">
                                                            <p class="card-text">ADHES</p>
                                                        </div>
                                                    </div>'
                                                ;
                                    };
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>