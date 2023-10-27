<script>
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.mainMenu > li').forEach(item => {
    item.addEventListener('mouseover', () => {
      document.querySelectorAll('.sousMenu.active').forEach(activeSubMenu => {
        activeSubMenu.classList.remove('active');
      });
      const sousMenu = item.querySelector('.sousMenu');
      sousMenu.classList.add('active');
    });

    item.addEventListener('mouseleave', () => {
      const sousMenu = item.querySelector('.sousMenu');
      item.leaveTimeout = setTimeout(() => {
        sousMenu.classList.remove('active');
      }, 250); // 250ms == 0.25s
    });
  });
});

document.addEventListener("DOMContentLoaded", function() {
  var hamburger = document.querySelector('.hamburger');
  var sideMenu = document.querySelector('.sideMenu');

  if (hamburger) {
    hamburger.addEventListener('click', function() {
        this.classList.toggle("is-active");  // Animation du bouton hamburger
        
        if (sideMenu.classList.contains('open')) {
            sideMenu.classList.remove('open');
        } else {
            sideMenu.classList.add('open');
        }
    });
  }

  // Fermer le menu si on clique en dehors
  document.addEventListener('click', function(event) {
    if (!sideMenu.contains(event.target) && !hamburger.contains(event.target)) {
        sideMenu.classList.remove('open');
        hamburger.classList.remove('is-active');  // Réinitialiser le bouton hamburger
    }
  });
});
</script>

<head>
    <link rel="stylesheet" href="styles/banner.css"/>
    <link href="https://cdn.jsdelivr.net/npm/hamburgers@1.1.3/dist/hamburgers.min.css" rel="stylesheet">
</head>
<body>
  <header class="nwBanner">
      <a href="index.php"><img id="logo" src="img/logoPhitech/PHYTECH_LOGO_QUADRI_V2.png" alt="logo phitech écriture noir isotype déficients visuels blanc"></a>
      <button class="hamburger hamburger--collapse" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
      <div class="sideMenu">
        <ul class="mainMenu2">
          <!-- Accessibilité déficient visuel -->
          <li style="border: 1px solid red;">
            <a href="#"><h1>Accessibilité déficient visuel</h1></a>
            <ul class="sousMenu2">
              <li>
                <div>
                  <a href="#">
                    <div class="contentOption2">
                      <h2>Application mobile "ActiAPP"</h2>
                    </div>
                  </a>
                </div>
              </li>
              <li>
                <div>
                  <a href="#">
                    <div class="contentOption2">
                      <h2>Télécommande NF S32-002</h2>
                    </div>
                  </a>
                </div>
              </li>
            </ul>
          </li>

          <!-- Accessibilité voirie -->
          <li>
            <a href="#"><h1>Accessibilité voirie</h1></a>
            <ul class="sousMenu2">
            <li class="ssHover2">
                <div>
                  <a href="#">
                    <div class="contentOption2">
                      <img class="imgMenu2" alt="" />
                      <h2>Passage piéton sonore simple</h2>
                    </div>
                  </a>
                  <ul class="sousSousMenu2">
                    <li class="contentSousMenu2">
                      <a href="#">
                        <div>
                          <img class="imgSousMenu2" alt="" />
                          <h3 class="h3Menu2">Feu sonore R12<br />Répétiteur Sinféa S10</h3>
                        </div>
                      </a>
                      <hr class="menuDivider2" />
                      <a href="#">
                        <div>
                          <img class="imgSousMenu2" alt="" />
                          <h3 class="h3Menu2">Feu sonore R25<br />Répétiteur Sinféa S10</h3>
                        </div>
                      </a>
                    </li>
                  </ul>  
                </div>
              </li>
              <li class="ssHover2">
                <div>
                  <a href="#">
                    <div class="contentOption2">
                      <img class="imgMenu2" alt="" />
                      <h2>Passage piéton sonore complexe</h2>
                    </div>
                  </a>
                  <ul class="sousSousMenu2">
                    <li class="contentSousMenu2">
                    <a href="#">
                        <div>
                          <img class="imgSousMenu2" alt="" />
                          <h3 class="h3Menu2">Module sonore déporté<br />CrossVoice</h3>
                        </div>
                      </a>
                    </li>
                  </ul>  
                </div>
              </li>
              <li class="ssHover2">
                <div>
                  <a href="#">
                    <div class="contentOption2">
                      <img class="imgMenu2" alt="" />
                      <h2>Passage piéton sonore sans feu</h2>
                    </div>
                  </a>
                  <ul class="sousSousMenu2">
                    <li class="contentSousMenu2">
                    <a href="#">
                        <div>
                          <img class="imgSousMenu2" alt="" />
                          <h3 class="h3Menu2">Module sonore autonome<br />Sinféa S10</h3>
                        </div>
                      </a>
                    </li>
                  </ul> 
                </div>
              </li>
            </ul>
          </li>

          <!-- Accessibilité bâtiment -->
          <li>
            <a href="#"><h1>Accessibilité bâtiment</h1></a>
            <ul class="sousMenu2">
            <li class="ssHover2">
                <div>
                  <a href="#">
                    <div class="contentOption2">
                      <h2>Accessibilité des entrées</h2>
                    </div>
                  </a>
                  <ul class="sousSousMenu2">
                    <li class="contentSousMenu2">
                    <a href="#">
                        <div>
                          <h3 class="h3Menu2">Balise sonore</h3>
                        </div>
                      </a>
                      <hr class="menuDivider2" />
                      <a href="#">
                        <div>
                          <h3 class="h3Menu2">Bande de guidage</h3>
                        </div>
                      </a>
                      <hr class="menuDivider2" />
                      <a href="#">
                        <div>
                          <h3 class="h3Menu2">Vitrophanie PMR</h3>
                        </div>
                      </a>
                    </li>
                  </ul>  
                </div>
              </li>
              <li class="ssHover2">
                <div>
                  <a href="#">
                    <div class="contentOption2">
                      <h2>Accessibilité de l'accueil</h2>
                    </div>
                  </a>
                  <ul class="sousSousMenu2">
                    <li class="contentSousMenu2">
                      <a href="#">
                        <div>
                          <h3 class="h3Menu2">Formation accueil des personnes<br />en situation de handicap</h3>
                        </div>
                      </a>
                      <hr class="menuDivider2" />
                      <a href="#">
                        <div>
                          <h3 class="h3Menu2">Boucle magnétique</h3>
                        </div>
                      </a>
                    </li>
                  </ul>  
                </div>
              </li>
              <li class="ssHover2">
                <div>
                  <a href="#">
                    <div class="contentOption2">
                      <h2>Accessibilité des escaliers</h2>
                    </div>
                  </a>
                  <ul class="sousSousMenu2">
                    <li class="contentSousMenu2">
                    <a href="#">
                        <div>
                          <h3 class="h3Menu2">Bande d'éveil de vigilance</h3>
                        </div>
                      </a>
                      <hr class="menuDivider2" />
                      <a href="#">
                        <div>
                          <h3 class="h3Menu2">Nez de marche</h3>
                        </div>
                      </a>
                      <hr class="menuDivider2" />
                      <a href="#">
                        <div>
                          <h3 class="h3Menu2">Contremarche escalier</h3>
                        </div>
                      </a>
                    </li>
                  </ul> 
                </div>
              </li>
            </ul>
          </li>

          <!-- Accessibilité des transports -->
          <li>
            <a href="#"><h1>Accessibilité des transports</h1></a>
            <ul class="sousMenu2">
            <li class="ssHover2">
                <div>
                  <a href="#">
                    <div class="contentOption2">
                      <h2>Accessibilité des afficheurs</h2>
                    </div>
                  </a>
                  <ul class="sousSousMenu2">
                    <li class="contentSousMenu2">
                    <a href="#">
                        <div>
                          <h3 class="h3Menu2">Actithéa BIV</h3>
                        </div>
                      </a>
                      <hr class="menuDivide2r" />
                      <a href="#">
                        <div>
                          <h3 class="h3Menu2">PTR - AM - OPTO</h3>
                        </div>
                      </a>
                    </li>
                  </ul>  
                </div>
              </li>
              <li class="ssHove2r">
                <div>
                  <a href="#">
                    <div class="contentOption2">
                      <h2>Accessibilité des véhicules de transports en communs</h2>
                    </div>
                  </a>
                  <ul class="sousSousMenu2">
                    <li class="contentSousMenu2">
                      <a href="#">
                        <div>
                          <h3 class="h3Menu2">Aide au Repérage des Portes</h3>
                        </div>
                      </a>
                      <hr class="menuDivider2" />
                      <a href="#">
                        <div>
                          <h3 class="h3Menu2">PTR - AM - OPTO</h3>
                        </div>
                      </a>
                    </li>
                  </ul>  
                </div>
              </li>
            </ul>
          </li>
        <ul>
      </div>

      <div class="lesMenus">
          <div class="menuTop">
            <ul>
              <li class="linkItem" style="font-size: 0.8em; margin-left: 10px;"><a href="#"><b>Découvrez Phitech</b></a></li>
              <li class="linkItem" style="font-size: 0.8em; margin-left: 10px;"><a href="#"><b>Contact</b></a></li>
              <li class="linkItem" style="font-size: 0.8em; margin-left: 10px; margin-right: 1em;"><a href="#"><b>Actualités</b></a></li>
            </ul>
            <ul class="boutiqueT">
              <li>
                <button type="submit" class="btBoutique">
                  <img src="img/banner/panier.png" alt="Boutique"> Boutique
                </button>
              </li>
            </ul>
          </div>
          <div class="menuBottom">
            <ul class="mainMenu">
              <!-- Accessibilité déficient visuel -->
              <li>
                <a href="#"><h1>Accessibilité déficient visuel</h1></a>
                <ul class="sousMenu">
                  <li>
                    <div class="contentDesign">
                      <a href="#">
                        <div class="contentOption">
                          <img class="imgMenu" src="img/banner/Accessibilite-deficient-visuel/iphone-x-final500.webp" alt="Application mobile actiapp sur iphone x" />
                          <h2>Application mobile "ActiAPP"</h2>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="contentDesign">
                      <a href="#">
                        <div class="contentOption">
                          <img class="imgMenu" src="img/banner/Accessibilite-deficient-visuel/tele-t-nor.webp" alt="telecommande tele tnor t nor NF S32-002" />
                          <h2>Télécommande NF S32-002</h2>
                        </div>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>

              <!-- Accessibilité voirie -->
              <li>
                <a href="#"><h1>Accessibilité voirie</h1></a>
                <ul class="sousMenu">
                <li class="ssHover">
                    <div class="contentDesign">
                      <a href="#">
                        <div class="contentOption">
                          <img class="imgMenu" src="img/banner/AccessibiliteVoirie/passage_sonore_pieton_simple/R12.webp" alt="" />
                          <h2>Passage piéton sonore simple</h2>
                        </div>
                      </a>
                      <ul class="sousSousMenu">
                        <li class="contentSousMenu">
                          <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/banner/AccessibiliteVoirie/passage_sonore_pieton_simple/R12.webp" alt="" />
                              <h3 class="h3Menu">Feu sonore R12<br />Répétiteur Sinféa S10</h3>
                            </div>
                          </a>
                          <hr class="menuDivider" />
                          <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/banner/AccessibiliteVoirie/passage_sonore_pieton_simple/R25.webp" alt="" />
                              <h3 class="h3Menu">Feu sonore R25<br />Répétiteur Sinféa S10</h3>
                            </div>
                          </a>
                        </li>
                      </ul>  
                    </div>
                  </li>
                  <li class="ssHover">
                    <div class="contentDesign">
                      <a href="#">
                        <div class="contentOption">
                          <img class="imgMenu" src="img/banner/AccessibiliteVoirie/passage_sonore_pieton_complexe/Passage_complexe_vec.png" alt="" />
                          <h2>Passage piéton sonore complexe</h2>
                        </div>
                      </a>
                      <ul class="sousSousMenu">
                        <li class="contentSousMenu">
                        <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/banner/AccessibiliteVoirie/passage_sonore_pieton_complexe/crossvoice.webp" alt="" />
                              <h3 class="h3Menu">Module sonore déporté<br />CrossVoice</h3>
                            </div>
                          </a>
                        </li>
                      </ul>  
                    </div>
                  </li>
                  <li class="ssHover">
                    <div class="contentDesign">
                      <a href="#">
                        <div class="contentOption">
                          <img class="imgMenu" src="img/" alt="" />
                          <h2>Passage piéton sonore sans feu</h2>
                        </div>
                      </a>
                      <ul class="sousSousMenu">
                        <li class="contentSousMenu">
                        <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/banner/AccessibiliteVoirie/passage_sonore_sans_feu/crossvoice.webp" alt="" />
                              <h3 class="h3Menu">Module sonore autonome<br />Sinféa S10</h3>
                            </div>
                          </a>
                        </li>
                      </ul> 
                    </div>
                  </li>
                </ul>
              </li>

              <!-- Accessibilité bâtiment -->
              <li>
                <a href="#"><h1>Accessibilité bâtiment</h1></a>
                <ul class="sousMenu">
                <li class="ssHover">
                    <div class="contentDesign">
                      <a href="#">
                        <div class="contentOption">
                          <img class="imgMenu" src="img/banner/Accessibilite-batiment/accessibilite_des_entree/10907.jpg" alt="" />
                          <h2>Accessibilité des entrées</h2>
                        </div>
                      </a>
                      <ul class="sousSousMenu">
                        <li class="contentSousMenu">
                        <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/banner/Accessibilite-batiment/accessibilite_des_entree/balise.webp" alt="" />
                              <h3 class="h3Menu">Balise sonore</h3>
                            </div>
                          </a>
                          <hr class="menuDivider" />
                          <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/banner/Accessibilite-batiment/accessibilite_des_entree/ral-1028.webp" alt="" />
                              <h3 class="h3Menu">Bande de guidage</h3>
                            </div>
                          </a>
                          <hr class="menuDivider" />
                          <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/banner/Accessibilite-batiment/accessibilite_des_entree/elipso-rouge-1024x768.webp" alt="" />
                              <h3 class="h3Menu">Vitrophanie PMR</h3>
                            </div>
                          </a>
                        </li>
                      </ul>  
                    </div>
                  </li>
                  <li class="ssHover">
                    <div class="contentDesign">
                      <a href="#">
                        <div class="contentOption">
                          <img class="imgMenu" src="img/banner/Accessibilite-batiment/accessibilite_accueil/8427.jpg" alt="" />
                          <h2>Accessibilité de l'accueil</h2>
                        </div>
                      </a>
                      <ul class="sousSousMenu">
                        <li class="contentSousMenu">
                          <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/" alt="" />
                              <h3 class="h3Menu">Formation accueil des personnes<br />en situation de handicap</h3>
                            </div>
                          </a>
                          <hr class="menuDivider" />
                          <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/banner/Accessibilite-batiment/accessibilite_accueil/boucle-d-induction-mobile-lh102.webp" alt="" />
                              <h3 class="h3Menu">Boucle magnétique</h3>
                            </div>
                          </a>
                        </li>
                      </ul>  
                    </div>
                  </li>
                  <li class="ssHover">
                    <div class="contentDesign">
                      <a href="#">
                        <div class="contentOption">
                          <img class="imgMenu" src="img/banner/Accessibilite-batiment/accessibilite_des_escaliers/8461083.jpg" alt="" />
                          <h2>Accessibilité des escaliers</h2>
                        </div>
                      </a>
                      <ul class="sousSousMenu">
                        <li class="contentSousMenu">
                        <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/banner/Accessibilite-batiment/accessibilite_des_escaliers/eveil.webp" alt="" />
                              <h3 class="h3Menu">Bande d'éveil de vigilance</h3>
                            </div>
                          </a>
                          <hr class="menuDivider" />
                          <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/banner/Accessibilite-batiment/accessibilite_des_escaliers/nez-de-marche-corniche.webp" alt="" />
                              <h3 class="h3Menu">Nez de marche</h3>
                            </div>
                          </a>
                          <hr class="menuDivider" />
                          <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/banner/Accessibilite-batiment/accessibilite_des_escaliers/contre-marche.webp" alt="" />
                              <h3 class="h3Menu">Contremarche escalier</h3>
                            </div>
                          </a>
                        </li>
                      </ul> 
                    </div>
                  </li>
                </ul>
              </li>

              <!-- Accessibilité des transports -->
              <li>
                <a href="#"><h1>Accessibilité des transports</h1></a>
                <ul class="sousMenu">
                <li class="ssHover">
                    <div class="contentDesign">
                      <a href="#">
                        <div class="contentOption">
                          <img class="imgMenu" src="img/banner/Accessibilite-des-transports/Accessibilite_des_afficheurs/PHITECH-9779.webp" alt="" />
                          <h2>Accessibilité des afficheurs</h2>
                        </div>
                      </a>
                      <ul class="sousSousMenu">
                        <li class="contentSousMenu">
                        <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/banner/Accessibilite-des-transports/Accessibilite_des_afficheurs/balise.webp" alt="" />
                              <h3 class="h3Menu">Actithéa BIV</h3>
                            </div>
                          </a>
                          <hr class="menuDivider" />
                          <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/banner/Accessibilite-des-transports/Accessibilite_des_afficheurs/PT-am250.webp" alt="" />
                              <h3 class="h3Menu">PTR - AM - OPTO</h3>
                            </div>
                          </a>
                        </li>
                      </ul>  
                    </div>
                  </li>
                  <li class="ssHover">
                    <div class="contentDesign">
                      <a href="#">
                        <div class="contentOption">
                          <img class="imgMenu" src="img/banner/Accessibilite-des-transports/Accessibilite_des_vehicules_de_transport_en_communs/transport_en_communs.png" alt="" />
                          <h2>Accessibilité des véhicules de transports en communs</h2>
                        </div>
                      </a>
                      <ul class="sousSousMenu">
                        <li class="contentSousMenu">
                          <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/banner/Accessibilite-des-transports/Accessibilite_des_vehicules_de_transport_en_communs/PHITECH-9930.webp" alt="" />
                              <h3 class="h3Menu">Aide au Repérage des Portes</h3>
                            </div>
                          </a>
                          <hr class="menuDivider" />
                          <a href="#">
                            <div>
                              <img class="imgSousMenu" src="img/banner/Accessibilite-des-transports/Accessibilite_des_vehicules_de_transport_en_communs/PT-am250.webp" alt="" />
                              <h3 class="h3Menu">PTR - AM - OPTO</h3>
                            </div>
                          </a>
                        </li>
                      </ul>  
                    </div>
                  </li>
                </ul>
              </li>


              <!-- Bouton to go Boutique -->
              <button type="submit" class="btBoutique boutiqueB">
                <img src="img/banner/panier.png" alt="Boutique"> Boutique
              </button>
            </ul>
          </div>
      </div>
  </header>
</body>

<style>
body {
  background-color: lightgrey;
}
.sousMenu {
  display: none;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: 275%;
  left: 50%;
  transform: translateX(-50%);
  width: auto; 
  height: auto;
  background-color: white;
  padding: 15px;
  z-index: 1;
}

.sousMenu.active {
  display: flex;
}

.sousMenu::before {
  content: "";
  position: absolute;
  top: -15px; /* Position de la flèche. Adjustez en fonction de la taille de la flèche */
  left: 50%; /* Centre la flèche horizontalement */
  transform: translateX(-50%); /* Ajuste pour un centrage parfait */
  border-left: 15px solid transparent; /* Taille de la flèche */
  border-right: 15px solid transparent; /* Taille de la flèche */
  border-bottom: 15px solid white; /* Flèche pointée vers le haut avec la couleur de fond de la tooltip */
}

.sousMenu > li:not(:first-child) {
  margin-top: 7.5px;
}
.mainMenu > li:hover .sousMenu {
  display: flex;
}
.sousSousMenu {
  position: relative;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  opacity: 0; 
  visibility: hidden;
  transition: max-height 0.5s ease-out, opacity 0.3s ease-in 0.2s, visibility 0.3s ease-in 0s;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.ssHover:hover .sousSousMenu, 
.ssHover:focus-within .sousSousMenu {
  max-height: 300px;
  opacity: 1;
  visibility: visible;
  transition: max-height 0.5s ease-in, opacity 0.3s ease-out 0.2s, visibility 0.3s ease-out 0.2s;
}
.ssHover:hover .contentOption, 
.ssHover:focus-within .contentOption {
  border-bottom: 1px solid black;
  transition: border-bottom 0.3s ease-out 0s;
}
.ssHover .contentOption {
  transition: border-bottom 0.1s ease-out 0.2s; /* Delay ici */
  border-bottom: 1px solid transparent;
}

h1 {
  font-size: 1em;
  font-weight: normal;
  white-space: nowrap;
}

h2 {
  font-size: 1em;
  font-weight: normal;
}

h3 {
  font-size: 0.8em;
  font-weight: normal;
  padding-left: 5px;
  padding-right: 5px;
}

.h3Menu {
  text-align: right;
}

.contentDesign {
  border: 1px solid black;
  background-color: #fdc216;
  border-radius: 2.5px;
  width: 300px;
}

.contentOption {
  display: flex;
  flex-wrap: nowrap;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  padding: 10px 10px 10px 10px;
}

.contentOption > h2 {
  width: 80%;
}

.contentSousMenu {
  display: flex;
  flex-direction: column;
}
.contentSousMenu > a > div {
  display: flex;
  flex-wrap: nowrap;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  min-width: 240px;
  max-width: 280px;
}

.imgMenu {
  width: auto;
  height: 45px;
}

.imgSousMenu {
  width: 40px;
  height: auto;
}

.menuDivider {
  width: 80%;
  border: 0;
  border-top: 1px solid lightgrey; /* Vous pouvez ajuster l'épaisseur et la couleur */
  margin: 0 auto; /* Centré horizontalement avec un peu d'espace au-dessus et en-dessous */
}

</style>