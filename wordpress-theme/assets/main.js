document.addEventListener('DOMContentLoaded', function() {
    // Header scroll effect
    const header = document.querySelector('.site-header');
    let lastScrollY = window.scrollY;

    function updateHeader() {
        const currentScrollY = window.scrollY;
        
        if (currentScrollY > 20) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        lastScrollY = currentScrollY;
    }

    window.addEventListener('scroll', updateHeader);

    // Mobile menu toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');

    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function() {
            const isExpanded = mobileMenuToggle.getAttribute('aria-expanded') === 'true';
            mobileMenuToggle.setAttribute('aria-expanded', !isExpanded);
            mobileMenuToggle.classList.toggle('active');
            
            if (mobileMenu) {
                mobileMenu.classList.toggle('active');
            }
        });
    }

    // Smooth scrolling for anchor links
    function smoothScroll(target) {
        const element = document.querySelector(target);
        if (element) {
            const headerHeight = header.offsetHeight;
            const elementPosition = element.offsetTop - headerHeight - 20;
            
            window.scrollTo({
                top: elementPosition,
                behavior: 'smooth'
            });
        }
    }

    // Handle navigation clicks
    document.addEventListener('click', function(e) {
        const link = e.target.closest('a');
        if (link && link.getAttribute('href') && link.getAttribute('href').startsWith('#')) {
            e.preventDefault();
            const target = link.getAttribute('href');
            smoothScroll(target);
            
            // Close mobile menu if open
            if (mobileMenuToggle && mobileMenuToggle.classList.contains('active')) {
                mobileMenuToggle.click();
            }
        }
    });

    // Contact form handling
    const contactForm = document.getElementById('contact-form');
    const enhanceButton = document.getElementById('enhance-message');
    const projectSummary = document.getElementById('project-summary');
    const messageField = document.getElementById('contact-message');

    if (enhanceButton && projectSummary && messageField) {
        enhanceButton.addEventListener('click', async function() {
            const summary = projectSummary.value.trim();
            
            if (!summary) {
                alert('Por favor, descreva brevemente seu projeto antes de usar a IA.');
                return;
            }

            enhanceButton.disabled = true;
            enhanceButton.textContent = '✨ Melhorando...';

            try {
                // Simulate AI enhancement (replace with actual API call)
                const enhancedMessage = await enhanceMessage(summary);
                messageField.value = enhancedMessage;
                
                // Show success feedback
                enhanceButton.textContent = '✅ Mensagem melhorada!';
                enhanceButton.classList.remove('btn-outline');
                enhanceButton.classList.add('btn-accent');
                
                setTimeout(() => {
                    enhanceButton.textContent = '✨ Melhorar mensagem com IA';
                    enhanceButton.classList.remove('btn-accent');
                    enhanceButton.classList.add('btn-outline');
                    enhanceButton.disabled = false;
                }, 3000);
                
            } catch (error) {
                console.error('Erro ao melhorar mensagem:', error);
                enhanceButton.textContent = '❌ Erro. Tente novamente';
                enhanceButton.disabled = false;
                
                setTimeout(() => {
                    enhanceButton.textContent = '✨ Melhorar mensagem com IA';
                }, 3000);
            }
        });
    }

    // Simulate AI message enhancement
    async function enhanceMessage(summary) {
        // Simulate API delay
        await new Promise(resolve => setTimeout(resolve, 2000));
        
        // Template for enhanced message
        const templates = {
            ecommerce: `Olá Guilherme,

Estou interessado em desenvolver uma solução de e-commerce para minha empresa. 

**Resumo do projeto:**
${summary}

**Funcionalidades desejadas:**
- Integração com gateways de pagamento (especialmente Pix)
- Gestão completa de produtos e estoque
- Dashboard administrativo
- Interface responsiva e moderna

**Próximos passos:**
Gostaria de agendar uma conversa para discutir os detalhes técnicos, prazo de entrega e investimento necessário.

Fico aguardando seu retorno.

Atenciosamente,`,

            dashboard: `Olá Guilherme,

Preciso de sua expertise para desenvolver um dashboard de analytics personalizado.

**Contexto do projeto:**
${summary}

**Requisitos técnicos:**
- Visualizações interativas e em tempo real
- Integração com múltiplas fontes de dados
- Relatórios automatizados
- Interface otimizada para diferentes dispositivos

**Objetivo:**
Criar uma ferramenta que nos permita tomar decisões mais assertivas baseadas em dados.

Você teria disponibilidade para discutir este projeto?

Abraços,`,

            api: `Olá Guilherme,

Vi seu trabalho com integrações de APIs e gostaria de sua ajuda com um projeto.

**Desafio atual:**
${summary}

**Necessidades técnicas:**
- Integração robusta e segura
- Tratamento adequado de erros e fallbacks
- Documentação clara para a equipe
- Monitoramento e logs detalhados

**Contexto:**
Nossa equipe precisa de alguém experiente para garantir que a integração seja feita seguindo as melhores práticas.

Podemos conversar sobre os detalhes?

Obrigado,`,

            default: `Olá Guilherme,

Estou buscando um desenvolvedor experiente para me ajudar com um projeto.

**Sobre o projeto:**
${summary}

**O que busco:**
- Solução técnica robusta e escalável
- Código limpo e bem documentado
- Acompanhamento durante todo o desenvolvimento
- Suporte pós-entrega

**Próximos passos:**
Gostaria de conversar sobre viabilidade técnica, cronograma e investimento necessário.

Você teria disponibilidade para uma conversa inicial?

Atenciosamente,`
        };

        // Simple keyword matching to choose template
        const summaryLower = summary.toLowerCase();
        let template = templates.default;

        if (summaryLower.includes('ecommerce') || summaryLower.includes('loja') || summaryLower.includes('venda')) {
            template = templates.ecommerce;
        } else if (summaryLower.includes('dashboard') || summaryLower.includes('analytics') || summaryLower.includes('relatório')) {
            template = templates.dashboard;
        } else if (summaryLower.includes('api') || summaryLower.includes('integração') || summaryLower.includes('pix')) {
            template = templates.api;
        }

        return template;
    }

    if (contactForm) {
        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();

            const submitButton = contactForm.querySelector('button[type="submit"]');
            const buttonText = submitButton.querySelector('.btn-text');
            const buttonLoading = submitButton.querySelector('.btn-loading');

            // Show loading state
            submitButton.disabled = true;
            buttonText.style.display = 'none';
            buttonLoading.style.display = 'inline';

            const formData = new FormData(contactForm);
            formData.append('action', 'contact_form');
            formData.append('nonce', ajax_object.nonce);

            try {
                const response = await fetch(ajax_object.ajax_url, {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (result.success) {
                    // Show success message
                    showNotification('Mensagem enviada com sucesso! Retornarei em breve.', 'success');
                    contactForm.reset();
                } else {
                    throw new Error(result.data || 'Erro ao enviar mensagem');
                }

            } catch (error) {
                console.error('Erro no envio:', error);
                showNotification('Erro ao enviar mensagem. Tente novamente ou use um dos canais diretos.', 'error');
            } finally {
                // Reset button state
                submitButton.disabled = false;
                buttonText.style.display = 'inline';
                buttonLoading.style.display = 'none';
            }
        });
    }

    // Notification system
    function showNotification(message, type = 'info') {
        // Remove existing notifications
        const existingNotifications = document.querySelectorAll('.notification');
        existingNotifications.forEach(notification => notification.remove());

        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.innerHTML = `
            <div class="notification-content">
                <span class="notification-message">${message}</span>
                <button class="notification-close">&times;</button>
            </div>
        `;

        document.body.appendChild(notification);

        // Auto-remove after 5 seconds
        setTimeout(() => {
            if (notification.parentNode) {
                notification.remove();
            }
        }, 5000);

        // Manual close
        const closeButton = notification.querySelector('.notification-close');
        closeButton.addEventListener('click', () => {
            notification.remove();
        });

        // Animate in
        setTimeout(() => {
            notification.classList.add('notification-show');
        }, 100);
    }

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animateElements = document.querySelectorAll('.card, .service-card, .project-card, .contact-method');
    animateElements.forEach(element => {
        observer.observe(element);
    });

    // Dark mode toggle (if implemented)
    const darkModeToggle = document.querySelector('.dark-mode-toggle');
    if (darkModeToggle) {
        darkModeToggle.addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            localStorage.setItem('darkMode', document.body.classList.contains('dark-mode'));
        });

        // Load saved dark mode preference
        if (localStorage.getItem('darkMode') === 'true') {
            document.body.classList.add('dark-mode');
        }
    }

    // Performance: Lazy load images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        const lazyImages = document.querySelectorAll('img[data-src]');
        lazyImages.forEach(img => {
            imageObserver.observe(img);
        });
    }
});

// Add notification styles
const notificationStyles = `
.notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background: hsl(var(--card));
    border: 1px solid hsl(var(--border));
    border-radius: var(--radius);
    padding: 1rem;
    box-shadow: var(--shadow-soft);
    z-index: 9999;
    transform: translateX(100%);
    transition: transform 0.3s ease;
    max-width: 400px;
}

.notification-show {
    transform: translateX(0);
}

.notification-success {
    border-left: 4px solid hsl(var(--accent));
}

.notification-error {
    border-left: 4px solid hsl(var(--destructive));
}

.notification-content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 1rem;
}

.notification-message {
    color: hsl(var(--foreground));
    font-size: 0.875rem;
    line-height: 1.4;
}

.notification-close {
    background: none;
    border: none;
    font-size: 1.25rem;
    cursor: pointer;
    color: hsl(var(--muted-foreground));
    padding: 0;
    line-height: 1;
}

.notification-close:hover {
    color: hsl(var(--foreground));
}

@media (max-width: 768px) {
    .notification {
        right: 10px;
        left: 10px;
        max-width: none;
    }
}
`;

// Inject notification styles
const styleElement = document.createElement('style');
styleElement.textContent = notificationStyles;
document.head.appendChild(styleElement);