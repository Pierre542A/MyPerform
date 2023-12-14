<script>
    import { onMount, createEventDispatcher } from 'svelte';
    import { isChecked, activeSection } from '../store.js';

    let localIsChecked = isChecked;
    let scrolled = false;
    let sliding = false;

    const dispatch = createEventDispatcher();
    function handleNavLinkClick(targetId) {
        dispatch('navlinkclick', { targetId });
    }

    // S'abonner au store et mettre à jour localIsChecked lorsque isChecked change
    const unsubscribe = isChecked.subscribe(value => {
        localIsChecked = value;
    });

    function toggleSwitch() {
        sliding = true; // Activez l'animation lors du changement du toggle
        setTimeout(() => sliding = false, 500); // Désactivez l'animation après 0.5s
        // Mettre à jour la valeur dans le store
        isChecked.update(value => !value);

        // Mettre à jour le body class et le localStorage
        document.body.classList.toggle('night-mode', localIsChecked);
        localStorage.setItem('night-mode', localIsChecked);
    }
    function handleKeydown(event) {
        if (event.key === "Enter" || event.key === " ") {
            toggleSwitch();
            event.preventDefault();
        }
    }

    /* Enregistre preference */
    onMount(() => {
        const scrollToTopLink = document.querySelector('.firstMenu .scroll-to-top');
        if (scrollToTopLink) {
            scrollToTopLink.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        updateColor();
        let clickCount25 = 0;
        let clickCount3 = 0;
        let lastClickTime = 0;
        let sequenceTimerId;
        let resetTimerId;

        const resetAll = () => {
            clearTimeout(sequenceTimerId);
            clearTimeout(resetTimerId);
            clickCount25 = 0;
            clickCount3 = 0;
            lastClickTime = 0;
        };

        const startSecondSequence = () => {
            if (clickCount25 === 25) {
                // Attendre 2 secondes après 5 clics avant de commencer la seconde séquence
                sequenceTimerId = setTimeout(() => {
                    clickCount25 = -1; // Marquer la première séquence comme complétée
                }, 2000);

                // Réinitialiser si la seconde séquence ne démarre pas dans les 5 secondes
                resetTimerId = setTimeout(resetAll, 5000);
            }
        };

        var hamburger = document.querySelector(".hamburger");
        var menuSlide = document.querySelector(".menuSlide");
        var menuOverlay = document.querySelector(".menu-overlay");
        var isOpen = false;
        var isAnimating = false; // Variable pour suivre l'état de l'animation

        function closeMenu() {
            menuSlide.classList.add("closing");

            menuSlide.addEventListener('animationend', function() {
                menuSlide.classList.remove("visible", "closing");
                isAnimating = false; // Réinitialiser l'état d'animation après la fermeture
            }, { once: true });
        }

        hamburger.addEventListener("click", function() {
            if (isAnimating) return; // Empêche toute action si une animation est en cours
            isAnimating = true; // Définir l'état d'animation

            isOpen = !isOpen;
            hamburger.classList.toggle("is-active");

            if (isOpen) {
                menuSlide.classList.add("visible");
                menuSlide.addEventListener('animationend', function() {
                    isAnimating = false; // Réinitialiser l'état d'animation après l'ouverture
                }, { once: true });
            } else {
                closeMenu();
            }

            menuOverlay.classList.toggle("visible");
        });

        document.addEventListener("click", function(event) {
            var clickedInsideMenu = menuSlide.contains(event.target);
            var clickedHamburger = hamburger.contains(event.target);

            if (!clickedInsideMenu && !clickedHamburger && isOpen) {
                closeMenu();
                hamburger.classList.remove("is-active");
                menuOverlay.classList.remove("visible");
                isOpen = false;
            }
        });

        window.addEventListener("resize", function() {
            if (window.innerWidth >= 1023 && isOpen) {
                closeMenu();
                hamburger.classList.remove("is-active");
                menuOverlay.classList.remove("visible");
                isOpen = false;
            }
        });

        document.querySelector('.hamburger').addEventListener('click', () => {
            const currentTime = new Date().getTime();
            clearTimeout(resetTimerId);

            if (clickCount25 !== -1) {
                // Première séquence de clics
                clickCount25++;
                if (clickCount25 > 25) resetAll(); // Plus de 5 clics réinitialisent
                else startSecondSequence();
            } else {
                // Seconde séquence de clics
                clickCount3++;
                if (clickCount3 > 3) resetAll(); // Plus de 3 clics réinitialisent
            }

            // Vérifier si les deux séquences sont complétées
            if (clickCount25 === -1 && clickCount3 === 3) {
                const newText = "Ma chérie R"; // Remplacez par le texte souhaité
                const targetElement = document.querySelector('.passion');
                targetElement.innerHTML = ""; // Nettoyer le contenu existant

                // Créer des éléments span pour chaque lettre
                newText.split("").forEach((char, index) => {
                    const span = document.createElement('span');
                    span.classList.add('letter');
                    span.style.animationDelay = `${index * 0.05}s`; // Retarder chaque lettre
                    if (char === ' ') {
                        span.innerHTML = '&nbsp;'; // Remplacer les espaces par un espace insécable
                    } else {
                        span.textContent = char;
                    }
                    targetElement.appendChild(span);
                });

                // Ajouter un cœur rouge à la fin
                const heart = document.createElement('span');
                heart.classList.add('heart');
                heart.innerHTML = '&hearts;';
                targetElement.appendChild(heart);
                resetAll();
            }

            lastClickTime = currentTime;
        });

        // Réinitialiser si aucun clic pendant 5 secondes à tout moment
        setInterval(() => {
            if (new Date().getTime() - lastClickTime > 5000) {
                resetAll();
            }
        }, 1000);

        function updateColor() {
            const hamburgerInner = document.querySelector('.hamburger-inner');

            if (isOpen) {
                // La couleur devient transparente quand le menu est ouvert
                hamburgerInner.style.backgroundColor = 'transparent';
                hamburgerInner.classList.remove('night-mode');
            } else {
                if (localIsChecked) {
                    hamburgerInner.classList.add('night-mode');
                } else {
                    hamburgerInner.classList.remove('night-mode');
                    hamburgerInner.style.backgroundColor = '#fff';
                }
            }
        }

        function adjustPaddingForBanner() {
            const headerBanner = document.querySelector('.header-banner');
            const headerBanner2 = document.querySelector('.header-banner2');
            const pageWrapper = document.querySelector('.page-wrapper');

            let bannerHeight = 0;

            // Si headerBanner est visible, utilisez sa hauteur
            if (headerBanner && headerBanner.offsetHeight > 0) {
                bannerHeight = headerBanner.offsetHeight - 1;
            }
            // Sinon, si headerBanner2 est visible, utilisez sa hauteur
            else if (headerBanner2 && headerBanner2.offsetHeight > 0) {
                bannerHeight = headerBanner2.offsetHeight - 1;
            }

            // Ajustez le padding top du .page-wrapper
            pageWrapper.style.paddingTop = `${bannerHeight}px`;
        }
        
        sliding = true;
        setTimeout(() => sliding = false, 500);
        localIsChecked = localStorage.getItem('night-mode') === 'true';
        isChecked.set(localIsChecked);
        document.body.classList.toggle('night-mode', localIsChecked);
        adjustPaddingForBanner();

        window.addEventListener('resize', adjustPaddingForBanner);
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 10;
        });
        return () => {
            window.removeEventListener('resize', adjustPaddingForBanner);
            window.removeEventListener('scroll');
        };
    });

    let currentActiveSection;
    activeSection.subscribe(value => {
        currentActiveSection = value;
    });
</script>

<div class="page-wrapper">
    <div class="menuSlide">
        <div>
            <div class="toogleMenu">
                <div class="mui-switch-wrapper">
                    <div
                    id="toggleSwitch"
                    class="mui-switch" 
                    on:click={toggleSwitch} 
                    on:keydown={handleKeydown} 
                    tabindex="0" 
                    role="button" 
                    aria-pressed="{localIsChecked}" 
                    class:checked={localIsChecked}>
                        <div class="thumb">
                            <img 
                            src={localIsChecked ? "assets/images/banner/toggle/moon.webp" : "assets/images/banner/toggle/sun.webp"} 
                            alt={localIsChecked ? "Moon" : "Sun"} 
                            class="thumb-image">
                        </div>
                    </div>
                </div>
                <span style="white-space: nowrap;">{localIsChecked ? 'Thème Sombre' : 'Thème Clair'}</span>
            </div>
            <div class="menuActive">
                <hr class="hrSlideMenu">
                menu active
            </div>
        </div>
        <div class="footer">footer</div>
    </div>
    <div class="header-banner" class:night-mode={localIsChecked} class:white-mode={!localIsChecked} class:scrolled={scrolled}>
        <div class="mui-switch-wrapper">
            <div 
            class="mui-switch" 
            on:click={toggleSwitch} 
            on:keydown={handleKeydown} 
            tabindex="0" 
            role="button" 
            aria-pressed="{localIsChecked}" 
            class:checked={localIsChecked}>
                <div class="thumb">
                    <img 
                    src={localIsChecked ? "assets/images/banner/toggle/moon.webp" : "assets/images/banner/toggle/sun.webp"} 
                    alt={localIsChecked ? "Moon" : "Sun"} 
                    class="thumb-image">
                </div>
            </div>
            <h1 class="h1-name name1" class:night-mode={localIsChecked}>Pierre SPREDER.</h1>
        </div>
        <div class="name2" style="display: flex; flex-direction: column;">
            <h1 class="h1-name" class:night-mode={localIsChecked} style="font-size: 1.75em;">Pierre SPREDER</h1>
            <h2 class="passion mobileNigth" class:night-mode={localIsChecked}>Web Developer</h2>
        </div>
        <div class="nav">
            <ul class="nav1" class:night-mode={localIsChecked}>
                <li class="firstMenu {currentActiveSection === 'A-propos' ? 'active' : ''}" class:night-mode={localIsChecked}>
                    <a href="#A-propos" class="scroll-to-top">
                        <div class="underline-effect" style="font-size: 0.5em;"><h1>À-propos</h1></div>
                    </a>
                </li>
                <li class="firstMenu {currentActiveSection === 'Competences' ? 'active' : ''}" class:night-mode={localIsChecked}>
                    <a href="#Competences" on:click|preventDefault={() => handleNavLinkClick('#Competences')}>
                        <div class="underline-effect" style="font-size: 0.5em;"><h1>Compétences</h1></div>
                    </a>
                </li>
                <li class="firstMenu {currentActiveSection === 'Experiences' ? 'active' : ''}" class:night-mode={localIsChecked}>
                    <a href="#Experiences" on:click|preventDefault={() => handleNavLinkClick('#Experiences')}>
                        <div class="underline-effect" style="font-size: 0.5em;"><h1>Expériences</h1></div>
                    </a>
                </li>
                <li class="firstMenu {currentActiveSection === 'Realisation' ? 'active' : ''}" class:night-mode={localIsChecked}>
                    <a href="#Realisation" on:click|preventDefault={() => handleNavLinkClick('#Realisation')}>
                        <div class="underline-effect" style="font-size: 0.5em;"><h1>Realisation</h1></div>
                    </a>
                </li>
                <li>
                    <a href="#Contactez-moi" on:click|preventDefault={() => handleNavLinkClick('#Contactez-moi')}>
                        <div class="contact-button" style="padding: 12.5px;" class:night-mode={localIsChecked}><h1 style="font-size: 1em; letter-spacing: 1px;">Contactez moi</h1></div>
                    </a>
                </li>
            </ul>         
        </div>
        <button class="hamburger hamburger--elastic " class:night-mode={localIsChecked} style="color: white;" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner" class:night-mode={localIsChecked}></span>
            </span>
        </button>
    </div>
</div>