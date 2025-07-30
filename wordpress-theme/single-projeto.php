<?php get_header(); ?>

<main id="main" class="site-main">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('project-single'); ?>>
            <!-- Hero Section -->
            <section class="project-hero section-padding">
                <div class="container">
                    <div class="project-header text-center mb-16">
                        <div class="breadcrumb mb-6">
                            <a href="<?php echo home_url(); ?>" class="breadcrumb-link">Início</a>
                            <span class="breadcrumb-separator">→</span>
                            <a href="<?php echo home_url('#projetos'); ?>" class="breadcrumb-link">Projetos</a>
                            <span class="breadcrumb-separator">→</span>
                            <span class="breadcrumb-current"><?php the_title(); ?></span>
                        </div>
                        
                        <h1 class="heading-xl mb-6"><?php the_title(); ?></h1>
                        
                        <div class="project-meta">
                            <?php 
                            $technologies = get_post_meta(get_the_ID(), '_project_technologies', true);
                            $client = get_post_meta(get_the_ID(), '_project_client', true);
                            $year = get_post_meta(get_the_ID(), '_project_year', true);
                            $demo_url = get_post_meta(get_the_ID(), '_project_demo_url', true);
                            $github_url = get_post_meta(get_the_ID(), '_project_github_url', true);
                            ?>
                            
                            <div class="meta-grid grid md:grid-cols-3 gap-8 mb-8">
                                <?php if ($client) : ?>
                                <div class="meta-item">
                                    <div class="meta-label">Cliente</div>
                                    <div class="meta-value"><?php echo esc_html($client); ?></div>
                                </div>
                                <?php endif; ?>
                                
                                <?php if ($year) : ?>
                                <div class="meta-item">
                                    <div class="meta-label">Ano</div>
                                    <div class="meta-value"><?php echo esc_html($year); ?></div>
                                </div>
                                <?php endif; ?>
                                
                                <?php if ($technologies) : ?>
                                <div class="meta-item">
                                    <div class="meta-label">Tecnologias</div>
                                    <div class="meta-value"><?php echo esc_html($technologies); ?></div>
                                </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="project-actions">
                                <?php if ($demo_url) : ?>
                                <a href="<?php echo esc_url($demo_url); ?>" target="_blank" rel="noopener" class="btn btn-primary">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 13V19C18 19.5304 17.7893 20.0391 17.4142 20.4142C17.0391 20.7893 16.5304 21 16 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V8C3 7.46957 3.21071 6.96086 3.58579 6.58579C3.96086 6.21071 4.46957 6 5 6H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15 3H21V9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 14L21 3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Ver Projeto
                                </a>
                                <?php endif; ?>
                                
                                <?php if ($github_url) : ?>
                                <a href="<?php echo esc_url($github_url); ?>" target="_blank" rel="noopener" class="btn btn-outline">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                    Ver Código
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <?php if (has_post_thumbnail()) : ?>
                    <div class="project-featured-image">
                        <?php the_post_thumbnail('full', array('class' => 'project-image')); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </section>

            <!-- Content Section -->
            <section class="project-content section-padding">
                <div class="container">
                    <div class="content-wrapper max-w-4xl mx-auto">
                        <div class="project-description">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Related Projects -->
            <section class="related-projects section-padding bg-secondary/30">
                <div class="container">
                    <div class="text-center mb-16">
                        <h2 class="heading-lg">Outros Projetos</h2>
                        <p class="text-muted-foreground">Conheça mais trabalhos desenvolvidos</p>
                    </div>

                    <?php
                    $related_projects = get_posts(array(
                        'post_type' => 'projeto',
                        'posts_per_page' => 3,
                        'post__not_in' => array(get_the_ID()),
                        'orderby' => 'rand'
                    ));

                    if ($related_projects) :
                    ?>
                    <div class="projects-grid grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <?php foreach ($related_projects as $project) : setup_postdata($project); ?>
                        <div class="project-card card">
                            <?php if (has_post_thumbnail($project->ID)) : ?>
                            <div class="project-image">
                                <a href="<?php echo get_permalink($project->ID); ?>">
                                    <?php echo get_the_post_thumbnail($project->ID, 'medium'); ?>
                                </a>
                            </div>
                            <?php endif; ?>

                            <div class="project-content">
                                <h3 class="project-title">
                                    <a href="<?php echo get_permalink($project->ID); ?>">
                                        <?php echo get_the_title($project->ID); ?>
                                    </a>
                                </h3>

                                <div class="project-excerpt">
                                    <?php echo get_the_excerpt($project->ID); ?>
                                </div>

                                <?php
                                $project_technologies = get_post_meta($project->ID, '_project_technologies', true);
                                if ($project_technologies) :
                                ?>
                                <div class="project-tech">
                                    <?php 
                                    $tech_array = explode(', ', $project_technologies);
                                    foreach ($tech_array as $tech) :
                                    ?>
                                    <span class="tech-tag"><?php echo esc_html($tech); ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <?php endif; ?>

                                <a href="<?php echo get_permalink($project->ID); ?>" class="btn btn-outline btn-sm">
                                    Ver Detalhes
                                </a>
                            </div>
                        </div>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="project-cta section-padding">
                <div class="container">
                    <div class="text-center">
                        <h2 class="heading-lg mb-6">Gostou deste projeto?</h2>
                        <p class="text-xl text-muted-foreground mb-8">
                            Vamos conversar sobre como posso ajudar com seu próximo projeto.
                        </p>
                        <div class="cta-buttons">
                            <a href="#contato" class="btn btn-primary">
                                Solicitar Orçamento
                            </a>
                            <a href="<?php echo home_url('#projetos'); ?>" class="btn btn-outline">
                                Ver Mais Projetos
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>