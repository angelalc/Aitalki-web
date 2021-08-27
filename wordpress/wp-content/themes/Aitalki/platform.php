<?php
/**
 * Template Name: Platform
 */
get_header(); ?>
<main>
    <section class="platform">
        <div class="platform__container">
            <div class="platform__text">
                <h1>Da el primer paso, comienza la charla</h1>
                <p>La plataforma de Aitalki permite visualizar y manejar tus ventanas de chat activas.
                Podrás chequear estadísticas y modificar tus estrategias de Márketing según la actividad de los usuarios.</p>
                <a href="#" class="btn btn-blue">¡PRUÉBALO GRATIS</a>
            </div>
            <div class="platform__mockup">
                <img src="<?php bloginfo('template_url') ?>/dist/img/mockupchat.png" alt="Chat Aitalki">
            </div>
        </div>
    </section>
    <section class="mockups">
        <div class="mockups__container">
            <div class="mockups__card">
                <div class="mockups__card-left">
                    <div class="mockups__card-left--icon">
                        <img src="<?php bloginfo('template_url') ?>/dist/img/red-icon.svg" alt="Red de Conexiones AI">
                    </div>
                    <div class="mockups__card-left--text">
                        <h2>Construye tu Red de Conexiones AI</h2>
                        <p>Aitalki te permite dar soporte ininterrumpido e inmediato a tus visitantes. No importa el momento del día, de la noche, o la parte del mundo en la que estén.</p>
                    </div>
                    <div class="mockups__card-left--img">
                        <img src="<?php bloginfo('template_url') ?>/dist/img/red.png" alt="Red de conexiones">
                    </div>
                </div>
                <div class="mockups__card-right">
                    <div class="mockups__card-right--icon">
                        <img src="<?php bloginfo('template_url') ?>/dist/img/operador-icon.svg" alt="Operador">
                    </div>
                    <div class="mockups__card-right--text">
                        <h2>Deriva la charla con un operador</h2>
                        <p>Siempre tendrás la opción de derivar la conversación que comienza Talki con un humano. Gestiona desde la ventana de Chat, todas las charlas activas y qué perfil, Talki o un operador, está interactuando con los visitantes.</p>
                    </div>
                    <div class="mockups__card-right--img">
                        <img src="<?php bloginfo('template_url') ?>/dist/img/red.png" alt="Red de conexiones">
                    </div>
                </div>
                <div class="mockups__card-left">
                    <div class="mockups__card-left--icon">
                        <img src="<?php bloginfo('template_url') ?>/dist/img/diseña-icon.svg" alt="Diseña">
                    </div>
                    <div class="mockups__card-left--text">
                        <h2>Diseña tu chat</h2>
                        <p>El diseño de tu marca es lo que te identifica, por eso, el configurador de widget de Aitalki es muy simple e intuitivo de usar. Elige tus colores, tu logo y empieza a hablar con tu audiencia ya mismo!</p>
                    </div>
                    <div class="mockups__card-left--img">
                        <img src="<?php bloginfo('template_url') ?>/dist/img/diseña.png" alt="Diseña">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="contact__container">
           <div class="contact__text">
               <h2>Mantén la conversación activa</h2>
               <p>Aitalki es la solución inteligente que tu empresa necesita para entender en
                   profundidad qué es lo que tus clientes buscan, cuando te buscan.</p>
               <div class="contact__button">
                   <a href="#" class="btn btn-blue">¡PRUÉBALO GRATIS!</a>
                   <img src="<?php bloginfo('template_url') ?>/dist/img/talki-mano.png" alt="Talki">
               </div>
           </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>