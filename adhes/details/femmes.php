<div class="col-lg-8">
                <div class="col-12">
                    <div class="service-detail-sec bg-custom-white bx-wrapper">
                        <div class="services-detail-slider mb-xl-30">
                            <div class="service-image">
                                <img src="./femme/1.jpg" class="image-fit" alt="img">
                                <div class="overlay overlay-bg-black"></div>
                                <div class="service-text-wrapper transform-center">
                                    <h3 class="text-custom-white">Des revenus secondaires</h3>
                                    <a href="contact.php" class="btn-first btn-submit">Participez</a>
                                </div>
                            </div>
                            <div class="service-image">
                                <img src="./femme/1.jpg" class="image-fit" alt="img">
                                <div class="overlay overlay-bg-black"></div>
                                <div class="service-text-wrapper transform-center">
                                    <h3 class="text-custom-white">Pour joindre les deux bouts</h3>
                                    <a href="contact.php" class="btn-first btn-submit">Participez</a>
                                </div>
                            </div>
                        </div>
                        <a href="./formation.php" class="btn-first btn-submit-fill" target="_blank">
                                Faire une Formation
                        </a>
                        <div class="service-meta mb-xl-30">
                            <h2 class="text-custom-black fw-600" style="text-transform : uppercase;">l'idée?</h2>
                            <p class="text-light-white">
                                Faire réellement progresser la situation des femmes dans la société est depuis plusieurs années une préoccupation prioritaire.
                                En analysant la situation des femmes en milieu rural, on en conclut qu'à bien des égards, et pour de multiples raisons, les femmes rurales sont défavorisées.
                                Nous mettons donc en place des programmes de formation à l'endroit de ces femmes afin de les aider au mieux à participer aux besoins de leurs foyers.
                            </p>
                            <h4 class="text-custom-black fw-600">Des programmes ?</h4>
                            <p class="text-light-white">
                                <div class="lw-about-right-list">
                                    <ul>
                                    <li><i class="fas fa-check"></i> Fabrication de savons, de produits cosmétiques naturels</li>
                                    <li><i class="fas fa-check"></i> Fabrication d'huiles essentielles</li>
                                    <li><i class="fas fa-check"></i> Transformation des tubercules en farines</li>
                                    <li><i class="fas fa-check"></i> Les évenementiels, décorations, manicures, pédicures ...</li>
                                    <li><i class="fas fa-check"></i> Fabrication de perles</li>
                                    </ul>
                                </div>
                            </p>
                            <div style="display: flex; flex-wrap: wrap;">
                                <?php
                                    for ($i=1; $i < 10 ; $i++) { 
                                        echo '  
                                                    <div class="card m-1" style="width: 18rem;">
                                                        <img class="card-img-top" src="./femme/'.$i.'.jpg" alt="Card image cap">
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