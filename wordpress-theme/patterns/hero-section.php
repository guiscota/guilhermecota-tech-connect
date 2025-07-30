<?php
/**
 * Title: Hero Section
 * Slug: guilherme-cota/hero-section
 * Categories: guilherme-cota
 * Description: Seção hero principal com apresentação profissional
 */
?>

<!-- wp:group {"className":"hero-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group hero-section">
    <!-- wp:group {"className":"container"} -->
    <div class="wp-block-group container">
        <!-- wp:columns {"verticalAlignment":"center","className":"hero-content"} -->
        <div class="wp-block-columns are-vertically-aligned-center hero-content">
            <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
                <!-- wp:heading {"level":1,"className":"heading-xl animate-fade-in-up"} -->
                <h1 class="wp-block-heading heading-xl animate-fade-in-up">
                    <?php echo get_theme_mod('hero_title', 'Consultor técnico e desenvolvedor <span class="gradient-text">full stack</span>'); ?>
                </h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"text-xl text-muted-foreground mb-8 animate-fade-in-up"} -->
                <p class="text-xl text-muted-foreground mb-8 animate-fade-in-up">
                    <?php echo get_theme_mod('hero_subtitle', 'Ajudando pessoas e empresas a criarem soluções digitais robustas, escaláveis e seguras com mais de X anos de experiência.'); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"hero-buttons animate-fade-in-up"} -->
                <div class="wp-block-buttons hero-buttons animate-fade-in-up">
                    <!-- wp:button {"className":"btn btn-primary"} -->
                    <div class="wp-block-button btn btn-primary">
                        <a class="wp-block-button__link wp-element-button" href="#contato">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H7L3 21V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Solicitar Proposta
                        </a>
                    </div>
                    <!-- /wp:button -->

                    <!-- wp:button {"className":"btn btn-outline"} -->
                    <div class="wp-block-button btn btn-outline">
                        <a class="wp-block-button__link wp-element-button" href="#projetos">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 12S5 4 12 4S23 12 23 12S19 20 12 20S1 12 1 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Ver Projetos
                        </a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->

                <!-- wp:group {"className":"hero-stats mt-12"} -->
                <div class="wp-block-group hero-stats mt-12">
                    <!-- wp:columns -->
                    <div class="wp-block-columns">
                        <!-- wp:column -->
                        <div class="wp-block-column">
                            <!-- wp:paragraph {"className":"stat-number"} -->
                            <p class="stat-number">50+</p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"className":"stat-label"} -->
                            <p class="stat-label">Projetos Entregues</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column">
                            <!-- wp:paragraph {"className":"stat-number"} -->
                            <p class="stat-number">5+</p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"className":"stat-label"} -->
                            <p class="stat-label">Anos de Experiência</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column">
                            <!-- wp:paragraph {"className":"stat-number"} -->
                            <p class="stat-number">100%</p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"className":"stat-label"} -->
                            <p class="stat-label">Clientes Satisfeitos</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
                <!-- wp:group {"className":"hero-image"} -->
                <div class="wp-block-group hero-image">
                    <!-- wp:image {"className":"profile-image"} -->
                    <figure class="wp-block-image profile-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/guilherme-photo.jpg" alt="Guilherme Cota - Desenvolvedor Full Stack"/>
                    </figure>
                    <!-- /wp:image -->
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