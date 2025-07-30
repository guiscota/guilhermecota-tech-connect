<?php get_header(); ?>

<main id="main" class="site-main">
    <?php if (have_posts()) : ?>
        <div class="container section-padding">
            <div class="grid md:grid-cols-2 lg:grid-cols-3">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="post-content">
                            <h2 class="heading-md">
                                <a href="<?php the_permalink(); ?>" rel="bookmark">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <div class="post-meta">
                                <time datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date(); ?>
                                </time>
                            </div>
                            
                            <div class="post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline">
                                Leia mais
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <?php
            the_posts_pagination(array(
                'prev_text' => __('&laquo; Anterior', 'guilherme-cota'),
                'next_text' => __('Próximo &raquo;', 'guilherme-cota'),
            ));
            ?>
        </div>
    <?php else : ?>
        <div class="container section-padding">
            <div class="no-posts">
                <h1 class="heading-lg">Nenhum conteúdo encontrado</h1>
                <p>Desculpe, mas não foi possível encontrar o conteúdo solicitado.</p>
                <a href="<?php echo home_url(); ?>" class="btn btn-primary">
                    Voltar ao início
                </a>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>