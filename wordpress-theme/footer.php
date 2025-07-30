    <footer id="colophon" class="site-footer">
        <div class="container">
            <!-- Main Footer Content -->
            <div class="footer-main">
                <div class="grid lg:grid-cols-4">
                    <!-- Brand Column -->
                    <div class="footer-brand">
                        <div class="brand-info">
                            <div class="logo-icon gradient-primary">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 18L22 12L16 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 6L2 12L8 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div>
                                <div class="brand-name"><?php bloginfo('name'); ?></div>
                                <div class="brand-description">Consultor Técnico & Full Stack Developer</div>
                            </div>
                        </div>
                        
                        <p class="footer-description">
                            <?php echo get_theme_mod('footer_description', 'Desenvolvedor apaixonado por criar soluções digitais robustas e escaláveis. Especializando em transformar ideias complexas em código limpo e eficiente.'); ?>
                        </p>
                        
                        <div class="contact-info">
                            <div class="contact-item">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 10C21 17 12 23 12 23S3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.3639 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><?php echo get_theme_mod('contact_location', 'Ouro Preto, MG • Atendo todo o Brasil'); ?></span>
                            </div>
                            <div class="contact-item">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <a href="mailto:<?php echo get_theme_mod('contact_email', 'contato@guilhermecota.dev'); ?>">
                                    <?php echo get_theme_mod('contact_email', 'contato@guilhermecota.dev'); ?>
                                </a>
                            </div>
                            <div class="contact-item">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 16.92C22 17.21 21.89 17.5 21.69 17.78C21.49 18.06 21.22 18.27 20.9 18.42C20.59 18.56 20.26 18.64 19.93 18.64C19.11 18.64 18.26 18.39 17.38 17.9C16.5 17.41 15.67 16.74 14.9 15.9C14.14 15.06 13.46 14.12 12.87 13.09C12.28 12.06 11.81 11.03 11.47 10C11.13 8.97 10.96 8.01 10.96 7.11C10.96 6.78 11.04 6.46 11.18 6.15C11.33 5.83 11.54 5.56 11.82 5.36C12.1 5.16 12.39 5.05 12.68 5.05C12.79 5.05 12.9 5.07 12.99 5.11C13.08 5.15 13.16 5.21 13.21 5.3L15.16 8.26C15.21 8.35 15.25 8.43 15.27 8.5C15.3 8.58 15.31 8.65 15.31 8.71C15.31 8.8 15.28 8.9 15.22 9C15.16 9.1 15.08 9.21 14.97 9.32L14.31 10.03C14.26 10.08 14.24 10.14 14.24 10.21C14.24 10.24 14.24 10.27 14.25 10.31C14.26 10.35 14.27 10.38 14.27 10.4C14.39 10.62 14.58 10.9 14.84 11.24C15.1 11.58 15.38 11.93 15.68 12.28C16.04 12.64 16.38 12.94 16.72 13.2C17.06 13.46 17.34 13.65 17.56 13.77C17.57 13.77 17.6 13.78 17.64 13.79C17.68 13.8 17.72 13.8 17.75 13.8C17.83 13.8 17.89 13.78 17.94 13.73L18.64 13.06C18.76 12.94 18.86 12.86 18.96 12.8C19.06 12.74 19.16 12.71 19.25 12.71C19.31 12.71 19.38 12.72 19.46 12.75C19.54 12.78 19.62 12.82 19.71 12.87L22.69 14.87C22.78 14.92 22.84 14.98 22.88 15.07C22.91 15.16 22.93 15.24 22.93 15.33C22.92 15.61 22.92 15.77 22.92 16.92H22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <a href="https://wa.me/5531999999999" target="_blank" rel="noopener">
                                    <?php echo get_theme_mod('contact_phone', '+55 (31) 99999-9999'); ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="footer-section">
                        <h4 class="footer-heading">Navegação</h4>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'container'      => false,
                            'menu_class'     => 'footer-menu',
                            'fallback_cb'    => 'guilherme_cota_footer_menu_fallback',
                        ));
                        ?>
                    </div>

                    <!-- Services -->
                    <div class="footer-section">
                        <h4 class="footer-heading">Serviços</h4>
                        <ul class="footer-list">
                            <li>Desenvolvimento Full Stack</li>
                            <li>Consultoria Técnica</li>
                            <li>Integração de APIs</li>
                            <li>Aplicações Mobile</li>
                        </ul>
                        
                        <div class="footer-cta">
                            <a href="#contato" class="cta-link">
                                Solicitar Orçamento →
                            </a>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="footer-section">
                        <h4 class="footer-heading">Conecte-se</h4>
                        <div class="social-links">
                            <a href="https://github.com/guilhermecota" target="_blank" rel="noopener" class="social-link">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                                GitHub
                            </a>
                            <a href="https://linkedin.com/in/guilhermecota" target="_blank" rel="noopener" class="social-link">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                                LinkedIn
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <div class="copyright">
                        <span>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Feito com</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="heart-icon">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                        </svg>
                        <span>e muito código.</span>
                    </div>
                    
                    <div class="footer-links">
                        <a href="/privacidade">Política de Privacidade</a>
                        <a href="/termos">Termos de Uso</a>
                        <div class="status">
                            <div class="status-indicator"></div>
                            <span>Online agora</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php
function guilherme_cota_footer_menu_fallback() {
    echo '<ul class="footer-menu">';
    echo '<li><a href="#sobre">Sobre</a></li>';
    echo '<li><a href="#servicos">Serviços</a></li>';
    echo '<li><a href="#projetos">Projetos</a></li>';
    echo '<li><a href="#blog">Blog</a></li>';
    echo '<li><a href="#contato">Contato</a></li>';
    echo '</ul>';
}
?>

<?php wp_footer(); ?>

</body>
</html>