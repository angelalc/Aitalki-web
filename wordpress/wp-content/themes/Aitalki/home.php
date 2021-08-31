<?php
/**
 * Template Name: Home
 */
get_header(); ?>
<main>
    <section class="landing">
        <div class="landing__container">
            <div class="landing__animation">
                <input type="hidden" value="<?php bloginfo('template_url') ?>/data.json" id="data-json">
                <div id="bm"> </div>
            </div>
            <div class="landing__text">
                <h1>El chat inteligente para tu empresa</h1>
                <p>Conoce Aitalki, la solución inteligente para la comunicación diaria con tus clientes. Habla con tu audiencia sin límites de
                     tiempo y a coste reducido. Talki, mantendrá charlas interactivas con los usuarios y responderá sus preguntas.</p>
                <a href="#" class="btn btn-blue">
                    ¡PRUÉBALO GRATIS!
                </a>
            </div>
        </div>
    </section>
    <section class="benefits">
        <div class="benefits__container">
            <div class="benefits__title">
                <h2 class="benefits__title-h2">Diseña, implementa y gestiona ventanas de chat inteligente con Aitalki.</h2>
            </div>
            <div class="benefits__card-left">
                <div class="benefits__card-left--icon">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/247.svg" alt="Online 24/7">
                </div>
                <div class="benefits__card-left--text">
                    <h2>Mantente online 24/7</h2>
                    <p>Aitalki te permite dar soporte ininterrumpido e inmediato a tus visitantes. No importa el momento del día, de la noche, o la parte del mundo en la que estén.</p>
                </div>
            </div>
            <div class="benefits__card-right">
                <div class="benefits__card-right--icon">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/personaliza.svg" alt="Personaliza">
                </div>
                <div class="benefits__card-right--text">
                    <h2>Personaliza tu chat</h2>
                    <p>No es necesario que seas un experto digital. Utiliza las herramientas de diseño de Aitalki y crea la ventana de chat en pocos minutos.</p>
                </div>
            </div>
            <div class="benefits__card-left">
                <div class="benefits__card-left--icon">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/aprende.svg" alt="Aprende">
                </div>
                <div class="benefits__card-left--text">
                    <h2>Aprende con cada conversación</h2>
                    <p>Talki es un robot inteligente. Guardará y analizará todas las charlas que tenga con los visitantes. Más charlas, más aprendizaje, mejor servicio.
                        ¡El aprendizaje nunca se detiene!</p>
                </div>
            </div>
            <div class="benefits__card-right">
                <div class="benefits__card-right--icon">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/implementacion.svg" alt="Implementación">
                </div>
                <div class="benefits__card-right--text">
                    <h2>Implementación cero</h2>
                    <p>Cero esfuerzo, cero estrés. Descarga el código, implementa el chat en tu web y descansa! Talki hablará con los visitantes por ti.</p>
                </div>
            </div>
            <div class="benefits__talki">
                <h2>Gestiona cientos de charlas desde un solo lugar</h2>
                <p>Aitalki te permite gestionar chats de distintas webs y empresas en simultáneo, y desde un solo lugar. Accede al panel y monitorea en vivo las conversaciones in real time.</p>
               <div class="benefits__talki-button">
                    <a href="#" class="btn btn-blue">VER MÁS</a>
                    <img src="<?php bloginfo('template_url') ?>/dist/img/talki-izq.png" alt="Talki">
               </div>
            </div>
        </div>
    </section>

    <section class="freetrial">
        <div class="freetrial__container">
            <div class="freetrial__text">
                <h2>Comienza ya tu prueba gratuita</h2>
                <p>Aitalki se ajusta a tus necesidades y crece contigo. ¿Eres autónomo y quieres darle atención a todos los clientes de tu e-commerce? ¿Eres una empresa en proceso de expansión y tienes más clientes que tiempo? ¿Necesitas un plan personalizado para darle atención a tus múltiples negocios, sin perder la calidez de una charla cercana? Hay un plan para ti, ¡Elígelo!</p>
                <a href="#" class="btn btn-blue"> CREAR CUENTA</a>
            </div>
            <div class="freetrial__mockup">
                <img src="<?php bloginfo('template_url') ?>/dist/img/mockupchat.png" alt="Chat Aitalki">
            </div>
        </div>
    </section>

    <section class="plans">
        <div class="plans__container">
            <!-- BASIC PLAN -->
            <div class="plans__basic">
                <div class="plans__basic-title">
                    <h3>Básico</h3>
                    <hr>
                    <p>Gratuito</p>
                </div>
                <div class="plans__basic-btn">
                    <a href="#" class="btn btn-gray">elegir plan</a>
                </div>
                <div class="plans__basic-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p> 1 usuario</p>
                </div>
                <div class="plans__basic-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p>1 chat</p>
                </div>
                <div class="plans__basic-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p>Big data</p>
                </div>
                <div class="plans__basic-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p>Machine learning</p>
                </div>
                <div class="plans__basic-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p>Machine learning</p>
                </div>
                <div class="plans__basic-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/equis.svg" alt="equis">
                    <p class="disabled">Estadísticas</p>
                </div>
                <div class="plans__basic-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/equis.svg" alt="equis">
                    <p class="disabled">50 preguntas/mes</p>
                </div>
            </div>
            <!-- ADVANCE PLAN -->
            <div class="plans__advance">
                <div class="plans__advance-title">
                    <h3>Avanzado</h3>
                    <hr>
                    <p>15€/mes</p>
                </div>
                <div class="plans__advance-btn">
                    <a href="#" class="btn btn-gray">elegir plan</a>
                </div>
                <div class="plans__advance-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p> 1 usuario</p>
                </div>
                <div class="plans__advance-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p>1 chat</p>
                </div>
                <div class="plans__advance-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p>Big data</p>
                </div>
                <div class="plans__advance-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p>Machine learning</p>
                </div>
                <div class="plans__advance-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p>Machine learning</p>
                </div>
                <div class="plans__advance-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p>Estadísticas <30 días</p>
                </div>
                <div class="plans__advance-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/equis.svg" alt="equis">
                    <p class="disabled">120 preguntas/mes</p>
                </div>
            </div>
            <!-- PREMIUM PLAN -->
        <div class="plans__label">
            <div class="plans__label-talki">
                <img src="<?php bloginfo('template_url') ?>/dist/img/talki-abajo.png" alt="Talki">
            </div>
            <div class="plans__label-text">
                <p>Más popular</p>
            </div>
        </div>
        <div class="plans__premium">
            <div class="plans__premium-title">
                <h3>Premium</h3>
                <hr>
                <p>25€/mes</p>
            </div>
            <div class="plans__premium-btn">
                <a href="#" class="btn btn-gray">elegir plan</a>
            </div>
            <div class="plans__premium-text">
                <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                <p> 1 usuario</p>
            </div>
            <div class="plans__premium-text">
                <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                <p>1 chat</p>
            </div>
            <div class="plans__premium-text">
                <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                <p>Big data</p>
            </div>
            <div class="plans__premium-text">
                <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                <p>Machine learning</p>
            </div>
            <div class="plans__premium-text">
                <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                <p>Machine learning</p>
            </div>
            <div class="plans__premium-text">
                <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                <p>Estadísticas <30 días</p>
            </div>
            <div class="plans__premium-text">
                <img src="<?php bloginfo('template_url') ?>/dist/img/equis.svg" alt="equis">
                <p class="disabled">50 preguntas/mes</p>
            </div>
        </div>

            <!-- ENTERPRISE PLAN -->
            <div class="plans__enterprise">
                <div class="plans__enterprise-title">
                    <h3>enterprise</h3>
                    <hr>
                    <p>Personalizado</p>
                </div>
                <div class="plans__enterprise-btn">
                    <a href="#" class="btn btn-gray">solicitar</a>
                </div>
                <div class="plans__enterprise-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p> 1 usuario</p>
                </div>
                <div class="plans__enterprise-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p>1 chat</p>
                </div>
                <div class="plans__enterprise-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p>Big data</p>
                </div>
                <div class="plans__enterprise-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p>Machine learning</p>
                </div>
                <div class="plans__enterprise-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/tick.svg" alt="tick">
                    <p>Machine learning</p>
                </div>
                <div class="plans__enterprise-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/equis.svg" alt="equis">
                    <p class="disabled">Estadísticas</p>
                </div>
                <div class="plans__enterprise-text">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/equis.svg" alt="equis">
                    <p class="disabled">50 preguntas/mes</p>
                </div>
            </div>
        </div>
    </section>

    <section class="logos">
        <div class="logos__container">
            <div class="logos__box">
                <div class="logos__box-text">
                    <p>«Proyecto cofinanciado por los fondos FEDER, de IVACE dentro del Programa Operativo FEDER de la
                         Comunitat Valenciana 2014-2020.»</p>
                    <ul>
                        <li>
                            <p><span class="bold">· Nº EXPEDIENTE:</span> IMINOD/2020/167</p>
                        </li>
                        <li>
                            <p><span class="bold">· PROYECTO:</span> PROYECTOS DE INNOVACIÓN DE PYME (INNOVA-CV)</p>
                        </li>
                        <li>
                            <p><span class="bold">· ACTUACIÓN:</span> INNOVACIÓN DE PYME. INNOVACIÓN EN TEICS (INNOVATeiC-CV)</p>
                        </li>
                        <li>
                            <p><span class="bold">· PROYECTO:</span> ASISTENTE INTELIGENTE</p>
                        </li>
                    </ul>
                </div>
                <div class="logos__box-img">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/generalitat-valenciana.png" alt="Generalitat Valenciana">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/ivace.png" alt="Ivace">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/union-europea.png" alt="Unión Europea">
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>