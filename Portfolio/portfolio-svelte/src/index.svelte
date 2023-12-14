<script>
    import Banner from './components/Banner.svelte';
    import LoadingPage from './components/LoadingPage.svelte';
    import { isLoading, isChecked, activeSection } from './store.js';
    import { onMount } from 'svelte';
    import Chart from 'chart.js/auto';

    let chart;
    let chartInitialized = false;
    let text = "Web Developer";
    let displayedText = "";
    let cursorVisible = true;

    const imageUrls = [
        //me
        'assets/images/me/image_0_.webp',
        'assets/images/me/me.webp',
        //banner
        //-> reseaux
        'assets/images/banner/reseaux/github-white.webp',
        'assets/images/banner/reseaux/github-black.webp',
        'assets/images/banner/reseaux/linkedin-white.webp',
        'assets/images/banner/reseaux/linkedin-black.webp',
        'assets/images/banner/reseaux/cesi-white.webp',
        'assets/images/banner/reseaux/cesi-black.webp',
        //-> toogle
        'assets/images/banner/toggle/moon.webp',
        'assets/images/banner/toggle/sun.webp',
        // bandeauTechno
        'assets/images/bandeauTechno/angular.webp',
        'assets/images/bandeauTechno/flutter.webp',
        'assets/images/bandeauTechno/html-css-javascript.webp',
        'assets/images/bandeauTechno/svelte.webp',
        'assets/images/bandeauTechno/svelte-icon.webp',
        'assets/images/bandeauTechno/unity.webp',
        //#competences
        'assets/images/_competences/seo_icon_black.webp',
        'assets/images/_competences/seo_icon_white.webp',
        'assets/images/_competences/ui_icon_black.webp',
        'assets/images/_competences/ui_icon_white.webp',
        'assets/images/_competences/ux_icon_black.webp',
        'assets/images/_competences/ux_icon_white.webp',
    ];

    function handleNavLinkClick(event) {
        const targetElement = document.querySelector(event.detail.targetId);
        if (targetElement) {
            const offsetVh = 15; 
            const offsetPx = (window.innerHeight * offsetVh) / 100;
            const targetTop = targetElement.offsetTop;
            const finalPosition = targetTop - offsetPx;

            window.scrollTo({
                top: finalPosition,
                behavior: 'smooth'
            });
        }
    }

    preload(imageUrls).then(() => {
        isLoading.set(false);
    });

    // Désactiver le zoom, le double-tap et le double-clic
    document.addEventListener('gesturestart', function (e) {
        e.preventDefault();
    });
    document.addEventListener('dblclick', function (e) {
        e.preventDefault();
    });

    function preload(imageUrls) {
        return new Promise((resolve, reject) => {
            let loadedCount = 0;
            const totalCount = imageUrls.length;

            imageUrls.forEach(url => {
                const img = new Image();
                img.onload = () => {
                    loadedCount++;
                    if (loadedCount === totalCount) {
                        resolve();
                    }
                };
                img.onerror = reject;
                img.src = url;
            });
        });
    }


    onMount(() => {
        // Debut Graphique Barre Horizontal
        window.onload = () => {
            const checkChartVisibility = () => {
                const chartElement = document.getElementById('myChart');
                const chartPosition = chartElement.getBoundingClientRect();
                if (chartPosition.top < window.innerHeight && chartPosition.bottom >= 0) {
                    initChart();
                }
            };

            window.addEventListener('scroll', checkChartVisibility);
            checkChartVisibility();

            return () => {
                window.removeEventListener('scroll', checkChartVisibility);
            };
            function initChart() {
                if (chartInitialized) {
                    return;
                }
                const canvas = document.getElementById('myChart');
                if (canvas) {
                    const ctx = canvas.getContext('2d');
                    chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['HTML', 'CSS', 'JavaScript', 'Angular', 'Flutter', 'Svelte'],
                            datasets: [{
                                label: 'Valeurs',
                                data: [9.25, 9.5, 8.75, 8.5, 8.75, 9.5],
                                backgroundColor: [
                                    'rgba(255, 87, 34, 1)',
                                    'rgba(0, 107, 192, 1)',
                                    'rgba(255, 204, 47, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(92, 201, 248, 1)',
                                    'rgba(255, 62, 0, 1)',
                                ],
                                borderColor: [
                                    'rgba(255, 87, 34, 1)',
                                    'rgba(0, 107, 192, 1)',
                                    'rgba(255, 204, 47, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(92, 201, 248, 1)',
                                    'rgba(255, 62, 0, 1)',
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true, // Rend le graphique responsive
                            maintainAspectRatio: true,
                            plugins: {
                                legend: {
                                    display: false // Désactive la légende
                                },
                                tooltip: {
                                    enabled: true,
                                    backgroundColor: 'rgba(0, 0, 0, 0.7)',
                                    titleFont: {
                                        size: 16, // Taille de la police pour le titre
                                    },
                                    bodyFont: {
                                        size: 14, // Taille de la police pour le corps du texte
                                    },
                                    callbacks: {
                                        title: function(context) {
                                            // Personnalisez le titre
                                            return context[0].label;
                                        },
                                        label: function(context) {
                                            // Retourne la valeur de la barre dans le label
                                            const value = context.raw; // ou context.dataset.data[context.dataIndex] pour la valeur brute
                                            return `Note: ${value}/10`;
                                        }
                                    }
                                }
                            },
                            indexAxis: 'y',
                            scales: {
                                x: {
                                    beginAtZero: true,
                                    barThickness: 'flex',
                                    max: 10,
                                    ticks: {
                                        stepSize: 1
                                    },
                                    grid: {
                                        display: false
                                    },
                                },
                                y: {
                                    grid: {
                                        display: false
                                    },
                                }
                            }
                        }
                    });
                } else {
                    console.error('Élément canvas introuvable');
                }
                chartInitialized = true;
            }
        };
        // Fin Graphique Barre Horizontal

        const unsubscribe = isLoading.subscribe(async value => {
            if (!value) {
                let container;
                while (!(container = document.getElementById('animatedParagraph'))) {
                    await new Promise(resolve => setTimeout(resolve, 50));
                }

                let delay = 0;
                let text2 = "Passionné et determiné de code depuis toujours, je vise l'excellence<br>UI/UX - SEO - All Supports [Responsive]";
                let elements = text2.split(/(<br>| )/);

                elements.forEach(part => {
                    let span;
                    if (part === '<br>') {
                        span = document.createElement('br');
                    } else if (part === ' ') {
                        span = document.createElement('span');
                        span.innerHTML = '\u00A0';
                    } else {
                        span = document.createElement('span');
                        span.textContent = part;
                    }

                    span.style.opacity = 0;
                    span.style.transform = 'translateY(15px)';
                    span.style.transition = `opacity 1s ease ${delay}s, transform 0.75s ease ${delay}s`;
                    container.appendChild(span);

                    setTimeout(() => {
                        span.style.opacity = 1;
                        span.style.transform = 'translateY(0)';
                    }, 0);

                    delay += (part === '<br>' || part === ' ') ? 0.02 : 0.02 * part.length;
                });

                unsubscribe();
            }
        });

        let index = 0;
        setTimeout(() => {
            const textInterval = setInterval(() => {
                displayedText += text[index];
                index++;
                if (index === text.length) {
                    clearInterval(textInterval);
                    clearInterval(cursorInterval);
                    let cursorElement = document.getElementById('cursor');
                    if(cursorElement) {
                        cursorElement.classList.add('hidden');
                    }
                }
            }, 125);
        }, 1000);

        const cursorInterval = setInterval(() => {
            cursorVisible = !cursorVisible;
        }, 500);
        
        const handleScroll = () => {
            document.querySelectorAll('.headZone').forEach(element => {
                if (element.getBoundingClientRect().top <= window.innerHeight) {
                    element.classList.add('visible');
                } else {
                    element.classList.remove('visible');
                }
            });
        };

        window.addEventListener('load', () => {
            setTimeout(() => {
                const presentationDiv = document.querySelector('.presentationDiv');
                presentationDiv.classList.add('visible');
            }, 2750);
        });

        const sections = ['A-propos', 'Competences', 'Experiences', 'Realisation', 'Contactez-moi'];
        function updateActiveSection() {
            const OFFSET_VH = 55;
            const OFFSET = window.innerHeight * (OFFSET_VH / 100);
            for(let i = 0; i < sections.length; i++) {
                let section = document.getElementById(sections[i]);
                if(i === sections.length - 1) {
                    if(window.scrollY + OFFSET >= section.offsetTop) {
                        activeSection.set(sections[i]);
                        return;
                    }
                } else {
                    if(window.scrollY + OFFSET >= section.offsetTop && window.scrollY < document.getElementById(sections[i+1]).offsetTop - OFFSET) {
                        activeSection.set(sections[i]);
                        return;
                    }
                }
            }
        }

        window.addEventListener('scroll', updateActiveSection);
        window.addEventListener('scroll', handleScroll);

        return () => {
            clearInterval(textInterval);
            clearInterval(cursorInterval);
            window.removeEventListener('scroll', handleScroll);
        };
    });
</script>

{#if $isLoading}
    <LoadingPage />
{:else}

<div class="portfolio-content">
    <div class="headerColor" class:night-mode={$isChecked} id="A-propos">
        <Banner on:navlinkclick={handleNavLinkClick} />
        <div class="menu-overlay"></div>
        <div class="aboutZone">
            <div class="txtMiddle">
                <table class="info-table" class:night-mode={$isChecked}>
                    <tr>
                        <td class="label">identity&gt;_</td>
                        <td class="content" class:night-mode={$isChecked}>
                            <h1 class="h1-name" style="font-size: 2.5em;" class:night-mode={$isChecked}>Pierre SPREDER</h1>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">job&gt;_</td>
                        <td class="content" class:night-mode={$isChecked}>
                            <h2 class="passion"><span>{displayedText}</span><span id="cursor" class:visible={cursorVisible}>|</span></h2>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">about&gt;_</td>
                        <td class="content" class:night-mode={$isChecked}>
                            <p style="font-weight: bold;">Passionné et determiné de code depuis toujours, je vise l'excellence<br>UI/UX - SEO - All Supports [Responsive]</p>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button class="contact-button" style="width: 125px; height: 40px;" class:night-mode={$isChecked}><h1 style="font-size: 1em; letter-spacing: 1px;">Contactez moi</h1></button>
                            <button class="contact-button-reverse" style="width: 125px; height: 40px;" class:night-mode={$isChecked}><h1 style="font-size: 1em; letter-spacing: 1px;">Télécharger CV</h1></button>
                        </td>
                    </tr> 
                    <tr>
                        <td></td>
                        <td>
                            <div class="imgSocial">
                                <a href="https://github.com/Pierre542A?tab=repositories" title="GitHub Repositories" alt="Link GitHub Repositories Spreder Pierre" target="_blank">
                                    <img src={$isChecked ? '/assets/images/banner/reseaux/github-white.webp' : '/assets/images/banner/reseaux/github-black.webp'} alt="GitHub Social Network Icon" class="social-icon">
                                </a>
                                <a href="https://www.linkedin.com/in/spreder-pierre/" title="Linkedin" alt="Link Linkedin Spreder Pierre" target="_blank">
                                    <img src={$isChecked ? '/assets/images/banner/reseaux/linkedin-white.webp' : '/assets/images/banner/reseaux/linkedin-black.webp'} alt="LinkedIn Social Network Icon" class="social-icon">
                                </a>
                                <a href="https://www.cesi.fr/ecole/presentation/" title="Cesi" alt="Link Cesi Ecole Ingenieur Spreder Pierre" target="_blank">
                                    <img src={$isChecked ? '/assets/images/banner/reseaux/cesi-white.webp' : '/assets/images/banner/reseaux/cesi-black.webp'} alt="LinkedIn Social Network Icon" class="social-icon">
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
                <img class="devImg" src="assets/images/me/me.webp" alt="developper coding with pc">
                <div class="contentMobile contentMasque">
                    <hr class="separeMobile">
                    <p class="content" class:night-mode={$isChecked} style="font-weight: bold;" id="animatedParagraph"></p>
                    <hr class="separeMobile">
                    <div style="display: flex; flex-direction: row; justify-content: space-between; align-items: center; width: 260px;, padding: 15px 0px 15px 0px;">
                        <button class="contact-button" style="width: 125px; height: 40px;" class:night-mode={$isChecked}><h1 style="font-size: 1em; letter-spacing: 1px;">Contactez moi</h1></button>
                        <button class="contact-button-reverse" style="width: 125px; height: 40px;" class:night-mode={$isChecked}><h1 style="font-size: 1em; letter-spacing: 1px;">Télécharger CV</h1></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intercallDiv">
        <div class="presentationDiv">
            <img src="assets/images/me/image_0_.webp" alt="">
            <div class="citationDebut">
                <p>Dans un monde où tout est connecté, un <b>UX/UI efficace</b> et un <b>SEO optimisé</b> sont essentiels pour garantir une expérience utilisateur agréable et une visibilité maximale en ligne.</p>
            </div>
        </div>
    </div>
    <div class="Zone" id="Competences" class:night-mode={$isChecked}>
        <div class="headZone">
            <h1 class="txtZone">Compétences</h1>

            <div class="headZoneContent">
                
                <div id="chartContainer">
                    <canvas id="myChart"></canvas>
                </div>

                <div class="infoSeoUxUi">
                    <div class="ColumnInfo">
                        <img src={$isChecked ? '/assets/images/_competences/ui_icon_white.webp' : '/assets/images/_competences/ui_icon_black.webp'} alt="Icon SEO" />
                        <h2>User Interface</h2>
                        <hr>
                        <p>L'UI combine l'esthétique et la fonctionnalité pour offrir une interface visuellement attrayante et facile à utiliser. Un bon design UI renforce l'identité de marque et améliore l'expérience globale de l'utilisateur.</p>
                    </div>

                    <div class="ColumnInfo">
                        <img src={$isChecked ? '/assets/images/_competences/ux_icon_white.webp' : '/assets/images/_competences/ux_icon_black.webp'} alt="Icon SEO" />
                        <h2>User Experience</h2>
                        <hr>
                        <p>L'UX se concentre sur la satisfaction des utilisateurs en créant une navigation intuitive et une interaction agréable. Il améliore l'engagement, la fidélisation et la satisfaction des utilisateurs, influençant positivement la conversion.</p>
                    </div>

                    <div class="ColumnInfo">
                        <img src={$isChecked ? '/assets/images/_competences/seo_icon_white.webp' : '/assets/images/_competences/seo_icon_black.webp'} alt="Icon SEO" />
                        <h2>Search Engine Optimization</h2>
                        <hr>
                        <p>Le SEO est crucial pour améliorer le classement dans les moteurs de recherche, augmentant ainsi la visibilité et le trafic organique vers le site. Il optimise l'accessibilité et l'efficacité du contenu en ligne.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="intercallDiv">
        <br><br><br>
    </div>
    <div class="Zone" id="Experiences" class:night-mode={$isChecked}>
        <div class="headZone">
            <h1 class="txtZone">Expériences</h1>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
    <div class="intercallDiv">
        <br><br><br>
    </div>
    <div class="Zone" id="Realisation" class:night-mode={$isChecked}>
        <div class="headZone">
            <h1 class="txtZone">Realisation</h1>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
    <div class="intercallDiv">
        <br><br><br>
    </div>
    <div class="Zone" id="Contactez-moi" class:night-mode={$isChecked}>
        <div class="headZone">
            <h1 class="txtZone">Contactez-moi</h1>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
    <div class="footerTech">
        <div>
            <img src="assets/images/bandeauTechno/svelte-icon.webp" alt="logo svelte">
            <span>Developped in Svelte</span>
        </div>
        <span><span title="Developed and owned by SPREDER Pierre">2023 &copy;</span> | <a class="mentionsLegales" href="/">Mentions légales</a></span>
    </div>
</div>

{/if}