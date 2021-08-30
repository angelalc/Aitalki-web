<?php
/**
 * Template Name: Enterprise
 */
get_header(); ?>
    <main>
        <section class="enterprise">
            <div class="enterprise__container">
                <div class="enterprise__flex">
                    <div class="enterprise__text">
                        <h1>¿Buscas un plan personalizado?</h1>
                        <p>Aitalki ofrece soluciones empresariales a gran escala para clientes con grandes audiencias.
                            Gestión de usuarios, roles y permisos customizados según requerimiento.</p>
                        <a href="#" class="btn btn-gray">SOLICITAR</a>
                    </div>
                    <div class="enterprise__list">
                        <div class="enterprise__list-item">
                            <img src="<?php bloginfo('template_url') ?>/dist/img/tick-3.svg" alt="Tick">
                            <p>Usuarios ilimitados</p>
                        </div>
                        <div class="enterprise__list-item">
                            <img src="<?php bloginfo('template_url') ?>/dist/img/tick-3.svg" alt="Tick">
                            <p>Chats ilimitados</p>
                        </div>
                        <div class="enterprise__list-item">
                            <img src="<?php bloginfo('template_url') ?>/dist/img/tick-3.svg" alt="Tick">
                            <p>Widgets ilimitados</p>
                        </div>
                        <div class="enterprise__list-item">
                            <img src="<?php bloginfo('template_url') ?>/dist/img/tick-3.svg" alt="Tick">
                            <p>Preguntas ilimitados</p>
                        </div>
                        <div class="enterprise__list-item">
                            <img src="<?php bloginfo('template_url') ?>/dist/img/tick-3.svg" alt="Tick">
                            <p>Machine learning</p>
                        </div>
                        <div class="enterprise__list-item">
                            <img src="<?php bloginfo('template_url') ?>/dist/img/tick-3.svg" alt="Tick">
                            <p>Big data</p>
                        </div>
                    </div>
                </div>
                <div class="enterprise__img">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/talki-arriba.png" alt="Talki">
                </div>
            </div>
        </section>
        <section class="info">
            <div class="info__container">
                <div class="info__card-left">
                    <div class="info__card-left--text">
                        <img src="<?php bloginfo('template_url') ?>/dist/img/icon-chats.svg" alt="chats ilimitados">
                        <h2>Chats ilimitados</h2>
                        <p>¡Habla con todo el mundo! El plan Enterprise te permitirá abrir tantas ventanas de chat como desees,
                            en todos los sitios que desees.</p>
                    </div>
                    <div class="info__card-left--img">
                        <img src="<?php bloginfo('template_url') ?>/dist/img/diseña.png" alt="Mockup Aitalki">
                        <div class="infor-card--bg"></div>
                    </div>
                </div>
                <div class="info__card-right--text">
                    <div class="info__card-img">
                        <img src="<?php bloginfo('template_url') ?>/dist/img/diseña.png" alt="Mockup Aitalki">
                        <div class="infor-card--bg"></div>
                    </div>
                    <div class="info__card-text">
                        <img src="<?php bloginfo('template_url') ?>/dist/img/icon-users.svg" alt="Usuarios ilimitados">
                        <h2>Usuarios ilimitados</h2>
                        <p>Gestiona todo tu equipo de operadores desde el panel de Aitalki. Asignalos a proyectos, analiza su productividad, revisa el historial de cada operador.
                            Mantente informado de la actividad de tu equipo y haz el seguimiento estadístico de rendimiento.</p>
                    </div>
                </div>
                <div class="info__card-left">
                    <div class="info__card-left--text">
                        <img src="<?php bloginfo('template_url') ?>/dist/img/icon-machine.svg" alt="Machine learning">
                        <h2>Machine learning ultra potente</h2>
                        <p>Aitalki es una máquina de aprendizaje. Cada charla representa una nueva lección para el bot.
                            Configura tu red de conexiones y observa cómo el uso de la herramienta, la potencia.</p>
                    </div>
                    <div class="info__card-left--img">
                        <img src="<?php bloginfo('template_url') ?>/dist/img/diseña.png" alt="Mockup Aitalki">
                        <div class="infor-card--bg"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>