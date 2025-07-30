<?php
/**
 * Title: About Section
 * Slug: guilherme-cota/about-section
 * Categories: guilherme-cota
 * Description: Seção sobre mim com informações profissionais
 */
?>

<!-- wp:group {"className":"section-padding","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-padding" id="sobre">
    <!-- wp:group {"className":"container"} -->
    <div class="wp-block-group container">
        <!-- wp:columns {"verticalAlignment":"center"} -->
        <div class="wp-block-columns are-vertically-aligned-center">
            <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
                <!-- wp:group {"className":"about-image-container"} -->
                <div class="wp-block-group about-image-container">
                    <!-- wp:image {"className":"about-image card"} -->
                    <figure class="wp-block-image about-image card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/about-workspace.jpg" alt="Workspace do Guilherme Cota"/>
                    </figure>
                    <!-- /wp:image -->
                    
                    <!-- wp:group {"className":"tech-stack"} -->
                    <div class="wp-block-group tech-stack">
                        <!-- wp:heading {"level":4,"className":"tech-title"} -->
                        <h4 class="wp-block-heading tech-title">Tech Stack</h4>
                        <!-- /wp:heading -->
                        
                        <!-- wp:group {"className":"tech-icons"} -->
                        <div class="wp-block-group tech-icons">
                            <!-- wp:paragraph -->
                            <p>Laravel • React • Vue • Node.js • TypeScript • MySQL • Docker</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
                <!-- wp:group {"className":"about-content"} -->
                <div class="wp-block-group about-content">
                    <!-- wp:paragraph {"className":"section-label"} -->
                    <p class="section-label">Sobre Mim</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":2,"className":"heading-lg mb-6"} -->
                    <h2 class="wp-block-heading heading-lg mb-6">
                        Desenvolvedor apaixonado por <span class="gradient-text">resolver problemas</span>
                    </h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"text-lg text-muted-foreground mb-6"} -->
                    <p class="text-lg text-muted-foreground mb-6">
                        Sou um desenvolvedor full stack com mais de 5 anos de experiência criando soluções digitais robustas e escaláveis. Minha jornada começou com a curiosidade em entender como as coisas funcionam, e hoje me especializei em transformar ideias complexas em código limpo e eficiente.
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"className":"text-muted-foreground mb-8"} -->
                    <p class="text-muted-foreground mb-8">
                        Tenho vasta experiência em desenvolvimento de APIs, integrações com gateways de pagamento (especialmente Efí/Gerencianet e Pix), e na criação de aplicações web completas usando tecnologias modernas como Laravel, React, Vue.js e Node.js.
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"expertise-grid grid md:grid-cols-2 gap-4 mb-8"} -->
                    <div class="wp-block-group expertise-grid grid md:grid-cols-2 gap-4 mb-8">
                        <!-- wp:group {"className":"expertise-item"} -->
                        <div class="wp-block-group expertise-item">
                            <!-- wp:paragraph {"className":"expertise-icon"} -->
                            <p class="expertise-icon">⚡</p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"className":"expertise-text"} -->
                            <p class="expertise-text">Performance & Otimização</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"expertise-item"} -->
                        <div class="wp-block-group expertise-item">
                            <!-- wp:paragraph {"className":"expertise-icon"} -->
                            <p class="expertise-icon">🔗</p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"className":"expertise-text"} -->
                            <p class="expertise-text">Integração de APIs</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"expertise-item"} -->
                        <div class="wp-block-group expertise-item">
                            <!-- wp:paragraph {"className":"expertise-icon"} -->
                            <p class="expertise-icon">📱</p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"className":"expertise-text"} -->
                            <p class="expertise-text">Apps Responsivas</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"expertise-item"} -->
                        <div class="wp-block-group expertise-item">
                            <!-- wp:paragraph {"className":"expertise-icon"} -->
                            <p class="expertise-icon">🛡️</p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"className":"expertise-text"} -->
                            <p class="expertise-text">Segurança & Qualidade</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"className":"btn btn-accent"} -->
                        <div class="wp-block-button btn btn-accent">
                            <a class="wp-block-button__link wp-element-button" href="#contato">
                                Vamos conversar
                            </a>
                        </div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"btn btn-outline"} -->
                        <div class="wp-block-button btn btn-outline">
                            <a class="wp-block-button__link wp-element-button" href="/curriculo.pdf" target="_blank">
                                Download CV
                            </a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->