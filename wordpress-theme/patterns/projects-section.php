<?php
/**
 * Title: Projects Section
 * Slug: guilherme-cota/projects-section
 * Categories: guilherme-cota
 * Description: Seção de projetos em destaque
 */
?>

<!-- wp:group {"className":"section-padding","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-padding" id="projetos">
    <!-- wp:group {"className":"container"} -->
    <div class="wp-block-group container">
        <!-- wp:group {"className":"text-center mb-16"} -->
        <div class="wp-block-group text-center mb-16">
            <!-- wp:paragraph {"className":"section-label"} -->
            <p class="section-label">Projetos</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":2,"className":"heading-lg mb-6"} -->
            <h2 class="wp-block-heading heading-lg mb-6">
                Alguns dos meus <span class="gradient-text">trabalhos recentes</span>
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"text-xl text-muted-foreground max-w-3xl mx-auto"} -->
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                Cada projeto é uma oportunidade de resolver problemas únicos e criar soluções que fazem a diferença.
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"projects-grid grid lg:grid-cols-2 gap-8"} -->
        <div class="wp-block-group projects-grid grid lg:grid-cols-2 gap-8">
            <!-- wp:group {"className":"project-card card"} -->
            <div class="wp-block-group project-card card">
                <!-- wp:image {"className":"project-image"} -->
                <figure class="wp-block-image project-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/project-ecommerce.jpg" alt="E-commerce Platform"/>
                </figure>
                <!-- /wp:image -->

                <!-- wp:group {"className":"project-content"} -->
                <div class="wp-block-group project-content">
                    <!-- wp:heading {"level":3,"className":"project-title"} -->
                    <h3 class="wp-block-heading project-title">Plataforma E-commerce Completa</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"project-description"} -->
                    <p class="project-description">
                        E-commerce robusto com integração completa ao Pix, gestão de estoque em tempo real e dashboard administrativo avançado. Suporta múltiplos gateways de pagamento.
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"project-tech"} -->
                    <div class="wp-block-group project-tech">
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">Laravel</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">Vue.js</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">MySQL</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">Pix API</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"project-links"} -->
                    <div class="wp-block-group project-links">
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"btn btn-outline btn-sm"} -->
                            <div class="wp-block-button btn btn-outline btn-sm">
                                <a class="wp-block-button__link wp-element-button" href="#" target="_blank">
                                    Ver Projeto
                                </a>
                            </div>
                            <!-- /wp:button -->

                            <!-- wp:button {"className":"btn btn-outline btn-sm"} -->
                            <div class="wp-block-button btn btn-outline btn-sm">
                                <a class="wp-block-button__link wp-element-button" href="#" target="_blank">
                                    GitHub
                                </a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"project-card card"} -->
            <div class="wp-block-group project-card card">
                <!-- wp:image {"className":"project-image"} -->
                <figure class="wp-block-image project-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/project-dashboard.jpg" alt="Analytics Dashboard"/>
                </figure>
                <!-- /wp:image -->

                <!-- wp:group {"className":"project-content"} -->
                <div class="wp-block-group project-content">
                    <!-- wp:heading {"level":3,"className":"project-title"} -->
                    <h3 class="wp-block-heading project-title">Dashboard de Analytics Avançado</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"project-description"} -->
                    <p class="project-description">
                        Sistema completo de analytics com visualizações interativas, relatórios automatizados e integração com múltiplas fontes de dados. Interface responsiva e otimizada.
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"project-tech"} -->
                    <div class="wp-block-group project-tech">
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">React</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">Node.js</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">PostgreSQL</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">Chart.js</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"project-links"} -->
                    <div class="wp-block-group project-links">
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"btn btn-outline btn-sm"} -->
                            <div class="wp-block-button btn btn-outline btn-sm">
                                <a class="wp-block-button__link wp-element-button" href="#" target="_blank">
                                    Ver Projeto
                                </a>
                            </div>
                            <!-- /wp:button -->

                            <!-- wp:button {"className":"btn btn-outline btn-sm"} -->
                            <div class="wp-block-button btn btn-outline btn-sm">
                                <a class="wp-block-button__link wp-element-button" href="#" target="_blank">
                                    GitHub
                                </a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"project-card card"} -->
            <div class="wp-block-group project-card card">
                <!-- wp:image {"className":"project-image"} -->
                <figure class="wp-block-image project-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/project-api.jpg" alt="API Integration"/>
                </figure>
                <!-- /wp:image -->

                <!-- wp:group {"className":"project-content"} -->
                <div class="wp-block-group project-content">
                    <!-- wp:heading {"level":3,"className":"project-title"} -->
                    <h3 class="wp-block-heading project-title">SDK para Integração Pix</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"project-description"} -->
                    <p class="project-description">
                        Biblioteca JavaScript open source para facilitar integrações com APIs do Pix. Documentação completa, exemplos práticos e suporte para múltiplos PSPs.
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"project-tech"} -->
                    <div class="wp-block-group project-tech">
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">TypeScript</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">Jest</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">Webpack</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">NPM</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"project-links"} -->
                    <div class="wp-block-group project-links">
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"btn btn-outline btn-sm"} -->
                            <div class="wp-block-button btn btn-outline btn-sm">
                                <a class="wp-block-button__link wp-element-button" href="#" target="_blank">
                                    Ver NPM
                                </a>
                            </div>
                            <!-- /wp:button -->

                            <!-- wp:button {"className":"btn btn-outline btn-sm"} -->
                            <div class="wp-block-button btn btn-outline btn-sm">
                                <a class="wp-block-button__link wp-element-button" href="#" target="_blank">
                                    GitHub
                                </a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"project-card card"} -->
            <div class="wp-block-group project-card card">
                <!-- wp:image {"className":"project-image"} -->
                <figure class="wp-block-image project-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/project-app.jpg" alt="Mobile Application"/>
                </figure>
                <!-- /wp:image -->

                <!-- wp:group {"className":"project-content"} -->
                <div class="wp-block-group project-content">
                    <!-- wp:heading {"level":3,"className":"project-title"} -->
                    <h3 class="wp-block-heading project-title">App de Gestão Financeira</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"project-description"} -->
                    <p class="project-description">
                        Aplicativo mobile para gestão financeira pessoal com sincronização em tempo real, categorização automática de gastos e relatórios detalhados.
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"project-tech"} -->
                    <div class="wp-block-group project-tech">
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">React Native</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">Firebase</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">Redux</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"className":"tech-tag"} -->
                        <p class="tech-tag">Expo</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"project-links"} -->
                    <div class="wp-block-group project-links">
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"btn btn-outline btn-sm"} -->
                            <div class="wp-block-button btn btn-outline btn-sm">
                                <a class="wp-block-button__link wp-element-button" href="#" target="_blank">
                                    App Store
                                </a>
                            </div>
                            <!-- /wp:button -->

                            <!-- wp:button {"className":"btn btn-outline btn-sm"} -->
                            <div class="wp-block-button btn btn-outline btn-sm">
                                <a class="wp-block-button__link wp-element-button" href="#" target="_blank">
                                    Google Play
                                </a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"text-center mt-16"} -->
        <div class="wp-block-group text-center mt-16">
            <!-- wp:paragraph {"className":"text-lg text-muted-foreground mb-8"} -->
            <p class="text-lg text-muted-foreground mb-8">
                Quer ver mais projetos ou discutir uma ideia?
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"className":"btn btn-primary"} -->
                <div class="wp-block-button btn btn-primary">
                    <a class="wp-block-button__link wp-element-button" href="https://github.com/guilhermecota" target="_blank">
                        Ver no GitHub
                    </a>
                </div>
                <!-- /wp:button -->

                <!-- wp:button {"className":"btn btn-outline"} -->
                <div class="wp-block-button btn btn-outline">
                    <a class="wp-block-button__link wp-element-button" href="#contato">
                        Discutir um Projeto
                    </a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->