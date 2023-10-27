<?php
  if (isset($_GET['accepte-cookie'])) {
    // code cookie locale_get_all_variants
    setcookie('accepte-cookie', 'true', time() + 365*24*3600);
    header('Location:./');
    die();
  }
?>

<!DOCTYPE html>
<html lang="fr">

  <head>

    <!-- Balise Meta Base -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phitech | Accessibilité déficients visuels et balises sonores</title>
    <meta name="description" content="Phitech rend accessible depuis 2003 aux personnes déficientes visuelles : la voirie, les transports et les bâtiments.">

    <!-- Facebook Référencement -->
    <meta property="og:title" content="Phitech | Accessibilité déficients visuels">
    <meta property="og:site_name" content="Phitech | Accessibilité déficients visuels et balises sonores">
    <meta property="og:url" content="https://www.phitech.fr">
    <meta property="og:description" content="Phitech s'engage pour l'accessibilité des personnes déficientes visuels et
    propose des solutions adaptées à l'ensemble de la chaîne de déplacement (voirie, transport, bâtiment)... ">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://scontent-frt3-1.xx.fbcdn.net/v/t31.18172-8/10700457_565392590229476_4905166829517510877_o.jpg?_nc_cat=106&ccb=1-7&_nc_sid=9267fe&_nc_ohc=7o9vtFup260AX8ES3fq&tn=h1sPfNwOTfWtyrPl&_nc_ht=scontent-frt3-1.xx&oh=00_AT9JQkNP94rLjNRvTfBcX4oYvCr59-s6lhHjJrDAvoxmbw&oe=62D694B9">

    <!-- Twitter Référencement -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@phitech_sas">
    <meta name="twitter:description" content="Phitech s'engage pour l'accessibilité des personnes déficientes sensorielles et
    propose des solutions adaptées à l'ensemble de la chaîne de déplacement (voirie, transport, bâtiment). ">
    <meta name="twitter:title" content="Phitech">
    <meta name="twitter:image" content="https://scontent-frt3-1.xx.fbcdn.net/v/t31.18172-8/10700457_565392590229476_4905166829517510877_o.jpg?_nc_cat=106&ccb=1-7&_nc_sid=9267fe&_nc_ohc=7o9vtFup260AX8ES3fq&tn=h1sPfNwOTfWtyrPl&_nc_ht=scontent-frt3-1.xx&oh=00_AT9JQkNP94rLjNRvTfBcX4oYvCr59-s6lhHjJrDAvoxmbw&oe=62D694B9">

    <!-- Link -->
    <link rel="icon" href="img/index/logo/PHITECH_ISOTYPE_JAUNE.png" />
    <link rel="stylesheet" href="styles/style-index.css"/>
    <link rel="stylesheet" href="styles/header.css"/>
    <link rel="stylesheet" media="screen and (max-width: 1240px)" href="petite_resolution.css" />

    <!-- Link EMAILING -->
    <link rel="stylesheet" href="https://sibforms.com/forms/end-form/build/sib-styles.css">
    <!--  END - We recommend to place the above code in head tag of your website html -->
  </head>

<body>

 <!-- Nav Bar -->
    <header>

    <a href="index.php"><img id="logo" src="img/index/logo/PHYTECH_LOGO_QUADRI_V2.png" alt="logo phitech
      écriture noir isotype déficients visuels blanc"></a>

      <label for="ch" id="lab"></label>
      <input type="radio" name="check" id="ch" />

      <nav id="nav">
        <label for="cl" id="close">X</label>
        <input type="radio" name="check" id="cl" />
        <ul id="menu">
          <li class="deroulant" id="deroulant"><a href="decouvrez-phitech.html">Découvrez Phitech</a>
            <ul class="sous">
              <li><a href="notre-histoire.html">Notre Histoire</a></li>
              <li><a href="notre-equipe.html">Notre équipe</a></li>
              <li><a href="deficients-visuels.html">Déficients Visuels</a></li>
            </ul>
          </li>
          <li class="deroulant-img"><a class="img-fondu" href="voirie.html">Voirie</a>
            <ul class="sous-img" id="sous-voirie">
              <li><a href="module-sonore.html"><img src="img/pietons/R12.webp" alt="image d'une carte de module sonore R12">Répétiteur sonore R12</a></li>
              <li><a href="module-sonore-crossvoice.html"><img src="img/pietons/crossvoice.webp" alt="image d'un module CrossVoice">Module sonore CrossVoice</a></li>
              <li><a href="module-autonome.html"><img src="img/pietons/sea-lacroix.png" alt="image d'un boitier autonome pour feux pietons noir">Module sonore Sinfea® S10</a></li>
              <li><a href="bloc-autonome.html"><img src="img/pietons/lacroix-sea.png" alt="image d'un boitier autonome pour feux pietons noir">Bloc autonome Sinfea® S10</a></li>
              <li><a href="activation.html"><img src="img/telecommandes/telecommande-app.png" alt="image des télécommandes t_nor et actitam 2 ainsi qu'une image d'un mobile avec l'application ActiApp">Moyens d'activation</a></li>
            </ul>
          </li>
          <li class="deroulant-img"><a class="img-fondu" href="transport.html">Transport</a>
            <ul class="sous-img" id="sous-transport">
              <li><a href="actiblue-transport.html"><img src="img/transports/PHITECH-9779.webp" alt="image de carte actiblue
              transport pour afficheur numérique"><br><br>Actiblue Transport</a></li>
              <li><a href="arp.html"><img src="img/transports/PHITECH-9930.webp" alt="image d'un module d'aide au repérage des
              portes">ARP : Aide au repérage des portes</a></li>
              <li><a href="pt.html"><img src="img/transports/PT-am250.webp" alt="image d'une carte de réception et de décodages">PTR-AM-OPTO</a></li>
            </ul>
          </li>
          <li class="deroulant-img"><a class="img-fondu" href="batiments.html">Bâtiment</a>
            <ul class="sous-img" id="sous-batiments">
              <li><a href="balise-sonore.html"><img src="img/batiments/balise.webp" alt="image de la balise sonore Acthitéa noir">
              Balise Sonore</a></li>
              <li><a href="formation.html" target="_blank"><img src="img/formation/formation.webp" alt="image d'une personne à l'accueil avec une chemise blanche">Formation</a></li>
              <li><a href="boucle-magnetique.html"><img src="img/batiments/boucle-d-induction-mobile-lh102.webp" alt="image de la boucle
              magnétique noir">Boucle Magnétique</a></li>
              <li><a href="bande-guidage.html"><img src="img/batiments/ral-1028.webp" alt="image d'une bande de guidage jaune">
              Bande de Guidage</a></li>
              <li><a href="eveil-vigilance.html"><img src="img/batiments/dotia-a-visser-noir-800x494.webp" alt="image d'un dotia à visser
              noir">Éveil à la Vigilance</a></li>
              <li><a href="marche.html"><img src="img/batiments/nez-de-marche-corniche.webp" alt="image d'un nez de marche de corniche
              noir avec bout en alluminium">Nez de Marche</a></li>
              <li><a href="contremarche.html"><img src="img/batiments/C10P.webp" alt="contre marche en alluminium de couleur
              orange">Contremarche</a></li>
              <li><a href="adhesifs.html"><img src="img/batiments/elipso-rouge-1024x768.webp" alt="adhésifs rouge 3M pour lattes
              alluminium">Vitrophanie</a></li>
            </ul>
          </li>
          <li class="deroulant"  id="ref"><a href="nos-references.html">Nos Références</a>
            <ul class="references">
              <li><a href="partenaires.html">Partenaires</a></li>
              <li><a href="distinction.html">Prix et distinction</a></li>
            </ul>
          </li>
          <li><a href="https://shop.phitech.fr" target="_blank">Boutique</a></li>
          <li><a href="actualites.html" target="_blank">Actualités</a></li>
          <li><a href="contact.html" target="_blank">Contact</a></li>
        </ul>
      </nav>
    </header>

  <!-- Vidéo de présentaion -->
  <section class="video">

    <video controls muted autoplay loop preload="auto" src="img/index/video-aveugle.mp4" id="video"></video>

    <div class="overlay">
      <h1>La solution pour l'accessibilité des personnes déficientes visuelles</h1>
      <h2>Nos valeurs sont les gages de notre qualité !</h2>
    </div>

  </section>

  <!-- Images & Description -->
  <section class="description">

    <div class="des-img">
      <img id="img1" src="img/index/aveugle-pont-min.png" alt="jeune homme aveugle qui marche sur un pont avec des immeubles en fond">
      <img id="img2" src="img/batiments/balise.png" alt="balise sonore noir acthitéa">
      <img id="img3" src="img/equipe/Philippe_Phitech_2.webp" alt="photo de M.Philippe Lemaire souriant en costume noir avec chemise
      blanche">
    </div>

    <div id="text">
      <p>"Parce que l’inclusion commence par l’accessibilité, nous devons en faire une priorité."</p>
      <hr class="txt">
      <p>
        Pour répondre au mieux aux problématiques rencontrées par les exploitants (maîtres d’œuvre,
        Autorités Organisatrices de Transports,...) en termes de mise en accessibilité de leurs infrastructures
        et matériels, nous proposons une offre globale avec des services personnalisés (étude, conseil, installation...).
      </p>
      <hr class="txt">
      <p>
        Près de 20 ans d'expertise, primée, certifiée et reconnue par ses nombreuses distinctions, Phitech s'engage dans
        l'Économie Sociale & Solidaire, et développe des produits innovants pour rendre les villes accessibles aux personnes
        déficientes visuelles.
      </p>
    </div>

  </section>

  <!-- Actualités -->
  <section class="actu">

    <div class="news">
      <h2>Nos Actualités</h2>

    <img id="logo-news" src="img/index/logo/PHYTECH_LOGO_QUADRI_V2.png" alt="logo phitech écriture noir et isotype malvoyant jaune">

    </div>

    <div class="actualites">
      <a href="#" id="news1">
      <img class="actu1" src="img/index/actu/actu1.png" alt=""></a>

      <a href="#" id="news2">
      <img class="actu2" src="img/index/actu/actu2.png" alt=""></a>

      <a href="#" id="news3">
      <img class="actu1" src="img/index/actu/actu3.png" alt=""></a>
    </div>

    <!-- NEWSLETTER SENDINBLUE -->
    <div class="mailing">

      <!-- START - We recommend to place the below code where you want the form in your website html  -->
      <div class="sib-form" style="text-align: center;">
        <div id="sib-form-container" class="sib-form-container">
          <div id="error-message" class="sib-form-message-panel" style="font-size:16px; text-align:left; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;max-width:540px;">
            <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
              <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
                <path d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z" />
              </svg>
              <span class="sib-form-message-panel__inner-text">Nous n&#039;avons pas pu confirmer votre inscription.</span>
            </div>
          </div>
          <div id="success-message" class="sib-form-message-panel" style="font-size:16px; text-align:left; color:#085229; background-color:#e7faf0; border-radius:3px; border-color:#13ce66; max-width:540px;">
            <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
              <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
                <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" />
              </svg>
              <span class="sib-form-message-panel__inner-text">Votre inscription est confirmée.</span>
            </div>
          </div>
          <div id="sib-1" class="sib-container--large sib-container--vertical" style="text-align:center; border-radius:3px; border-width:0px; border-color:#C0CCD9; border-style:solid;">
            <form id="sib-form" method="POST" action="https://112333f5.sibforms.com/serve/MUIEADUYWBlTKDbWiq06PHftQ7ZiE3gRF3hiUAaDgjT3zAw88gaIAagLYH2ifAXbKlhCUykFqnv1AHrTBZaFZItaHqtC2vHGnEY7PDRvOhthBZDF58tixl0JqAF4EFuLlE6l40-n7HtFiBuTEbYpvjKAScsFYRuI77MkrTqwNf9BFXWG8BoQoREFGvWrCsjGMTe2o1SgzxBStFTi" data-type="subscription">
              <div class="img-news" id="sib-2">
                <div class="news1">
                  <div style="padding: 8px 0;">
                    <div class="sib-form-block" style="font-size:32px; text-align:left; font-weight:700; color:#000000; background-color:transparent;">
                      <h2>Newsletter</h2>
                    </div>
                  </div>
                  <div style="padding: 8px 0;">
                    <div class="sib-form-block" style="font-size:20px; text-align:left; font-weight:700; color:#fcfcfc; background-color:transparent;">
                      <div class="sib-text-form-block">
                        <p><u>Restez informé(e) avec notre newsletter.</u></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="sib-form-block sib-image-form-block" style="text-align: left" id="img-new">
                    <img src="img/index/logo/PHYTECH_LOGO_QUADRI_V2.png" style="width: 140px;" alt="logo phitech écriture blanche isotype déficients visuels jaune" title="Logo Phitech" />
                  </div>
                </div>
              </div>
              <div style="padding: 8px 0;">
                <div class="sib-input sib-form-block">
                  <div class="form__entry entry_block">
                    <div class="form__label-row ">

                      <div class="entry__field">
                        <input class="input" type="text" id="EMAIL" name="EMAIL" autocomplete="off" placeholder="EMAIL" data-required="true" required />
                      </div>
                    </div>

                    <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
                    </label>
                    <label class="entry__specification" style="font-size:12px; text-align:left; color:#000000;">Veuillez renseigner votre adresse email pour vous inscrire. Ex. : abc@xyz.com</label>
                  </div>
                </div>
              </div>
              <div style="padding: 8px 0;">
                <div class="sib-optin sib-form-block">
                  <div class="form__entry entry_mcq">
                    <div class="form__label-row ">
                      <div class="entry__choice">
                        <label>
                          <input type="checkbox" class="input_replaced" value="1" id="OPT_IN" name="OPT_IN" />
                          <span class="checkbox checkbox_tick_positive"></span>
                          <span style="font-size:14px; text-align:left; color:#ffffff; background-color:transparent;"><p>J'accepte de recevoir vos e-mails et confirme avoir pris connaissance de votre politique de confidentialité et mentions légales.</p></span>
                        </label>
                      </div>
                    </div>
                    <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
                    </label>
                    <label class="entry__specification" style="font-size:12px; text-align:left; color:#000000;">
                      Vous pouvez vous désinscrire à tout moment en cliquant sur le lien présent dans nos emails.
                    </label>
                  </div>
                </div>
              </div>
              <div class="captcha-button">
                <div class="captcha">
                  <div class="sib-captcha sib-form-block">
                    <div class="form__entry entry_block">
                      <div class="form__label-row ">
                        <script>
                          function handleCaptchaResponse() {
                            var event = new Event('captchaChange');
                            document.getElementById('sib-captcha').dispatchEvent(event);
                          }
                        </script>
                        <div class="g-recaptcha sib-visible-recaptcha" id="sib-captcha" data-sitekey="6LepxdwhAAAAALt9mMtHihTvGC9pk_-TJ8UP50Hw" data-callback="handleCaptchaResponse"></div>
                      </div>
                      <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
                      </label>
                    </div>
                  </div>
                </div>
                <div style="padding: 8px 0;">
                  <div class="sib-form-block" style="text-align: left">
                    <button class="sib-form-block__button sib-form-block__button-with-loader" style="font-size:16px; text-align:left; font-weight:700; color:#fdc216; background-color:#000000; border-radius:3px; border-width:0px;" form="sib-form" type="submit">
                      <svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon" viewBox="0 0 512 512">
                        <path d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z" />
                      </svg>
                      S&#039;INSCRIRE
                    </button>
                  </div>
                </div>
              </div>

              <input type="text" name="email_address_check" value="" class="input--hidden">
              <input type="hidden" name="locale" value="fr">
            </form>
          </div>
        </div>
      </div>
      <!-- END - We recommend to place the below code where you want the form in your website html  -->
    </div>

  </section>

  <!-- Description des différents pôles -->
  <section class="pole-acti">

    <h2>Nos différents pôles d'activités</h2>

    <!-- POLE FLEX -->
    <div class="pole">
      <div class="voirie">
        <div class="enfant">
          <div class="block">
            <img id="marche" src="img/index/icone/walking.png" alt="icone noir d'une personne qui marche">
            <h3>Voirie</h3>
            <div class="button" id="button-3">
              <div id="circle"></div>
              <a href="voirie.html" class="lien">En savoir plus</a>
            </div>
          </div>
        </div>
      </div>
      <div class="trans">
        <div class="enfant">
          <div class="block">
            <img id="train" src="img/index/icone/train.png" alt="icone noir d'un train">
            <h3>Transport</h3>
            <div class="button" id="button-3">
              <div id="circle"></div>
              <a href="transport.html" class="lien">En savoir plus</a>
            </div>
          </div>
        </div>
      </div>
      <div class="bati">
        <div class="enfant">
          <div class="block">
            <img id="batiments" src="img/index/icone/immeuble.png" alt="icone noir d'un batiment">
            <h3>Bâtiments</h3>
            <div class="button" id="button-3">
              <div id="circle"></div>
              <a href="batiments.html">En savoir plus</a>
            </div>
          </div>
        </div>
      </div>
      <div class="deficients">
        <div class="enfant">
          <div class="block">
            <img id="deficients" src="img/index/icone/visuel.png" alt="icone noir du logo des malvoyants">
            <h3 id="def">Déficients Visuels</h3>
            <div class="button" id="button-3">
              <div id="circle"></div>
              <a href="deficients-visuels.html" class="lien">En savoir plus</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer & Pied de page -->
  <footer>

    <div class="footer">

      <!-- START - We recommend to place the below code where you want the form in your website html  -->
      <div class="sib-form" style="text-align: center; background-color: #000000;">
        <div id="sib-form-container" class="sib-form-container">
          <div id="error-message" class="sib-form-message-panel" style="font-size:16px; text-align:left; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;max-width:540px;">
            <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
              <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
                <path d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z" />
              </svg>
              <span class="sib-form-message-panel__inner-text">Nous n&#039;avons pas pu confirmer votre inscription.</span>
            </div>
          </div>
          <div id="success-message" class="sib-form-message-panel" style="font-size:16px; text-align:left; color:#085229; background-color:#e7faf0; border-radius:3px; border-color:#13ce66; max-width:540px;">
            <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
              <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
                <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" />
              </svg>
              <span class="sib-form-message-panel__inner-text">Votre inscription est confirmée.</span>
            </div>
          </div>
          <div id="sib-containere" class="sib-container--large sib-container--vertical" style="text-align:center; background-color:rgba(0,0,0,1); max-width:750px; border-radius:3px; border-width:0px; border-color:#C0CCD9; border-style:solid;">
            <form id="sib-form" method="POST" action="https://112333f5.sibforms.com/serve/MUIEADUYWBlTKDbWiq06PHftQ7ZiE3gRF3hiUAaDgjT3zAw88gaIAagLYH2ifAXbKlhCUykFqnv1AHrTBZaFZItaHqtC2vHGnEY7PDRvOhthBZDF58tixl0JqAF4EFuLlE6l40-n7HtFiBuTEbYpvjKAScsFYRuI77MkrTqwNf9BFXWG8BoQoREFGvWrCsjGMTe2o1SgzxBStFTi" data-type="subscription">
              <div class="img-news">
                <div class="news1">
                  <div style="padding: 8px 0;">
                    <div class="sib-form-block" style="font-size:32px; text-align:left; font-weight:700; color:#fdc216; background-color:transparent;">
                      <p>Newsletter</p>
                    </div>
                  </div>
                  <div style="padding: 8px 0;">
                    <div class="sib-form-block" style="font-size:16px; text-align:left; font-weight:700; color:#fcfcfc; background-color:transparent;">
                      <div class="sib-text-form-block">
                        <p><u>Restez informé(e) avec notre newsletter.</u></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div style="padding: 8px 0;">
                  <div class="sib-form-block sib-image-form-block" style="text-align: left" id="img-new">
                    <img src="https://img.mailinblue.com/1764761/images/rnb/original/63173bb7ece5e361c01b1d08.png" style="width: 100px;height: 63px;" alt="logo phitech écriture blanche isotype déficients visuels jaune" title="Logo Phitech" />
                  </div>
                </div>
              </div>
              <div style="padding: 8px 0;">
                <div class="sib-input sib-form-block">
                  <div class="form__entry entry_block">
                    <div class="form__label-row ">

                      <div class="entry__field">
                        <input class="input" type="text" id="EMAIL" name="EMAIL" autocomplete="off" placeholder="EMAIL" data-required="true" required />
                      </div>
                    </div>

                    <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
                    </label>
                    <label class="entry__specification" style="font-size:12px; text-align:left; color:#fdc216;">Veuillez renseigner votre adresse email pour vous inscrire. Ex. : abc@xyz.com</label>
                  </div>
                </div>
              </div>
              <div style="padding: 8px 0;">
                <div class="sib-optin sib-form-block">
                  <div class="form__entry entry_mcq">
                    <div class="form__label-row ">
                      <div class="entry__choice">
                        <label>
                          <input type="checkbox" class="input_replaced" value="1" id="OPT_IN" name="OPT_IN" />
                          <span class="checkbox checkbox_tick_positive"></span>
                          <span style="font-size:14px; text-align:left; color:#ffffff; background-color:transparent;"><p>J'accepte de recevoir vos e-mails et confirme avoir pris connaissance de votre politique de confidentialité et mentions légales.</p></span>
                        </label>
                      </div>
                    </div>
                    <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
                    </label>
                    <label class="entry__specification" style="font-size:12px; text-align:left; color:#fdc216;">
                      Vous pouvez vous désinscrire à tout moment en cliquant sur le lien présent dans nos emails.
                    </label>
                  </div>
                </div>
              </div>
              <div class="captcha-button">
                <div class="captcha">
                  <div class="sib-captcha sib-form-block">
                    <div class="form__entry entry_block">
                      <div class="form__label-row ">
                        <script>
                          function handleCaptchaResponse() {
                            var event = new Event('captchaChange');
                            document.getElementById('sib-captcha').dispatchEvent(event);
                          }
                        </script>
                        <div class="g-recaptcha sib-visible-recaptcha" id="sib-captcha" data-sitekey="6LepxdwhAAAAALt9mMtHihTvGC9pk_-TJ8UP50Hw" data-callback="handleCaptchaResponse"></div>
                      </div>
                      <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
                      </label>
                    </div>
                  </div>
                </div>
                <div style="padding: 8px 0;">
                  <div class="sib-form-block" style="text-align: left">
                    <button class="sib-form-block__button sib-form-block__button-with-loader" style="font-size:16px; text-align:left; font-weight:700; color:#000000; background-color:#fdc216; border-radius:3px; border-width:0px;" form="sib-form" type="submit">
                      <svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon" viewBox="0 0 512 512">
                        <path d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z" />
                      </svg>
                      S&#039;INSCRIRE
                    </button>
                  </div>
                </div>
              </div>

              <input type="text" name="email_address_check" value="" class="input--hidden">
              <input type="hidden" name="locale" value="fr">
            </form>
          </div>
        </div>
      </div>
      <!-- END - We recommend to place the below code where you want the form in your website html  -->

      <div class="newsletters">
        <div class="contact">
          <div class="adresse">
            <h3>NOUS CONTACTER</h3><br>
            <p>1 Rue du Bois de la Sivrite<br>
            54500 Vandoeuvre-lès-Nancy<br>
            +33 (0)3 83 40 67 04</p>
          </div>

          <div class="reseaux">
            <h3>NOS RÉSEAUX</h3>
            <a href="https://www.linkedin.com/company/phitech-sas/mycompany/" target="_blank">
            <img id="link" src="img/index/reseaux/linkedin.png" alt="icone réseaux du logo linkedin"></a>
            <a href="https://www.facebook.com/Phitech.Accessibilite" target="_blank">
            <img id="fb" src="img/index/reseaux/fb.png" alt="icone réseaux du logo facebook"></a>

            <!-- ***A ajouter plus tard*** <a href="#" target="_blank">
            <img id="insta" src="img/insta.png" alt="icone réseaux du logo instagram"></a>-->

            <a href="https://twitter.com/phitech_sas" target="_blank">
            <img id="twit" class="reseaux" src="img/index/reseaux/twitter.png" alt="icone réseaux du logo twitter"></a>
          </div>

          <div class="plan">
            <h3>PLAN DU SITE</h3><br><br>
            <ul class="site">
              <li><a href="decouvrez-phitech.html">Découvrez Phitech</a></li>
              <li><a href="voirie.html">Voirie</a></li>
              <li><a href="transport.html">Transport</a></li>
              <li><a href="batiments.html">Bâtiment</a></li>
              <li><a href="nos-references.html">Nos Références</a></li>
              <li><a href="https://phitech.fr/shop/">Boutique</a></li>
              <li><a href="actualites.html">Actualités</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>

        <div class="liens-utiles">
          <div class="liens">
            <a href="mentions.html">Mentions légales</a>
            <a href="politique.html">Politique de confidentialité</a>
          </div>

          <p id="copyright">Copyright &copy; | Phitech 2003 - 2022</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- SCRIPT JS -->

  <!-- START - We recommend to place the below code in footer or bottom of your website html  -->
  <script>
    window.REQUIRED_CODE_ERROR_MESSAGE = 'Veuillez choisir un code pays';
    window.LOCALE = 'fr';
    window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "Les informations que vous avez fournies ne sont pas valides. Veuillez vérifier le format du champ et réessayer.";

    window.REQUIRED_ERROR_MESSAGE = "Vous devez renseigner ce champ. ";

    window.GENERIC_INVALID_MESSAGE = "Les informations que vous avez fournies ne sont pas valides. Veuillez vérifier le format du champ et réessayer.";




    window.translation = {
      common: {
        selectedList: '{quantity} liste sélectionnée',
        selectedLists: '{quantity} listes sélectionnées'
      }
    };

    var AUTOHIDE = Boolean(0);
  </script>
  <script defer src="https://sibforms.com/forms/end-form/build/main.js"></script>

  <script src="https://www.google.com/recaptcha/api.js?hl=fr"></script>
  <!-- END - We recommend to place the above code in footer or bottom of your website html  -->
  <!-- End Sendinblue Form -->

<!-- SCRIPT COOKIES PHP -->
<?php
  if (!isset ($_COOKIE['accepte-cookie'])) {
    // code accepte cookies
?>
    <div class="banniere">
      <div class="text-bannier">
        <p>Ce site utilise des cookies pour vous faire vivre une bonne expérience.
          <a href="politique.html#ancre_cookie" target="_blank">En savoir plus</a>
        </p>
      </div>
      <div class="button-banniere">
        <a href="?accepte-cookie">J'accepte</a>
      </div>
    </div>
<?php
  }
?>

</body>

</html>
