# Guilherme Cota Portfolio - WordPress Theme

## Descrição

Tema WordPress profissional desenvolvido para portfolio de desenvolvedor full stack e consultor técnico. O tema foi convertido a partir de uma aplicação React, mantendo todas as funcionalidades e design moderno.

## Características

### Design System
- **Paleta de cores**: Azul tech e verde como cores principais
- **Tipografia**: Inter font family para máxima legibilidade
- **Componentes**: Sistema modular baseado em cards e gradientes
- **Responsividade**: Mobile-first design com breakpoints otimizados
- **Dark/Light mode**: Suporte nativo com preferência do sistema

### Funcionalidades

#### Block Patterns
- **Hero Section**: Apresentação profissional com CTA
- **About Section**: Informações pessoais e expertise
- **Services Section**: Grid de serviços oferecidos  
- **Projects Section**: Showcase de projetos em destaque
- **Contact Section**: Formulário com integração de IA
- **Blog Section**: Listagem de artigos e tutoriais

#### Custom Post Types
- **Projetos**: Gestão completa de portfolio
  - Campos customizados: tecnologias, cliente, ano, URLs
  - Template single personalizado
  - Relacionamento entre projetos
- **Serviços**: Gestão de serviços oferecidos
  - Descrições detalhadas
  - Preços e pacotes

#### Integração com IA
- **Formulário de contato inteligente**
  - IA melhora mensagens do usuário
  - Templates contextuais
  - Validação e tratamento de erros

### Performance & SEO
- **Otimização de velocidade**
  - Lazy loading de imagens
  - CSS e JS minificados
  - Fonts otimizadas
- **SEO técnico**
  - Meta tags dinâmicas
  - Structured data (JSON-LD)
  - URLs amigáveis
- **Core Web Vitals**
  - LCP otimizado
  - CLS minimizado
  - FID < 100ms

## Instalação

### Requisitos
- WordPress 6.0+
- PHP 8.0+
- MySQL 5.7+

### Instalação Manual
1. Faça download do tema
2. Extraia na pasta `/wp-content/themes/`
3. Ative no painel administrativo
4. Configure via Customizador

### Configuração Inicial

#### 1. Customizador
Acesse **Aparência > Personalizar** e configure:
- **Seção Hero**: Títulos e subtítulos principais
- **Informações de Contato**: Email, telefone, localização
- **Cores**: Ajuste da paleta (opcional)

#### 2. Menus
Crie menus em **Aparência > Menus**:
- **Primary Menu**: Menu principal do header
- **Footer Menu**: Links do rodapé

#### 3. Páginas
Crie as páginas necessárias:
- **Home**: Use os block patterns fornecidos
- **Política de Privacidade**
- **Termos de Uso**

#### 4. Projetos
Adicione projetos em **Projetos > Adicionar Novo**:
- Título do projeto
- Descrição completa
- Imagem destacada
- Campos customizados (tecnologias, cliente, etc.)

## Uso dos Block Patterns

### Importando Patterns
1. Acesse o editor de blocos
2. Clique em "Adicionar bloco" (+)
3. Aba "Patterns"
4. Categoria "Guilherme Cota Portfolio"
5. Selecione o pattern desejado

### Personalizando Patterns

#### Hero Section
```php
// Edite no Customizador
- Título principal
- Subtítulo
- Botões de CTA
- Estatísticas
```

#### Services Section
```php
// Edite os cards de serviço
- Ícones (emojis ou SVG)
- Títulos dos serviços
- Descrições
- Listas de funcionalidades
```

#### Projects Section
```php
// Use o post type Projeto
- Adicione projetos via admin
- Configure campos customizados
- Upload de imagens
```

## Desenvolvimento

### Estrutura de Arquivos
```
wordpress-theme/
├── style.css                 # CSS principal com header do tema
├── functions.php            # Funcionalidades PHP
├── index.php               # Template padrão
├── header.php              # Cabeçalho
├── footer.php              # Rodapé
├── single-projeto.php      # Template para projetos
├── patterns/               # Block patterns
│   ├── hero-section.php
│   ├── about-section.php
│   ├── services-section.php
│   ├── projects-section.php
│   └── contact-section.php
└── assets/                 # Assets
    ├── main.js            # JavaScript principal
    ├── block-editor.js    # Scripts do editor
    └── README.md          # Documentação
```

### Hooks Personalizados

#### Ações
```php
// Formulário de contato
do_action('guilherme_cota_before_contact_form');
do_action('guilherme_cota_after_contact_form');

// Projetos
do_action('guilherme_cota_before_project_grid');
do_action('guilherme_cota_after_project_content');
```

#### Filtros
```php
// Personalizar templates de IA
apply_filters('guilherme_cota_ai_message_templates', $templates);

// Modificar campos de projeto
apply_filters('guilherme_cota_project_meta_fields', $fields);
```

### Funções Helper
```php
// Buscar projetos
$projects = guilherme_cota_get_projects(3);

// Buscar serviços  
$services = guilherme_cota_get_services(-1);

// Dados de contato
$email = get_theme_mod('contact_email', 'contato@guilhermecota.dev');
```

## Personalização

### CSS Customizado
Adicione CSS personalizado em **Aparência > Personalizar > CSS Adicional**:

```css
/* Exemplo: Alterar cor primária */
:root {
    --primary: 200 100% 50%; /* Azul mais claro */
}

/* Exemplo: Fonte customizada */
.heading-xl {
    font-family: 'Montserrat', sans-serif;
}
```

### JavaScript Customizado
Adicione via functions.php:

```php
function meu_script_customizado() {
    wp_enqueue_script('meu-script', get_template_directory_uri() . '/assets/custom.js', array('guilherme-cota-main'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'meu_script_customizado');
```

### Novos Block Patterns
Crie em `/patterns/meu-pattern.php`:

```php
<?php
/**
 * Title: Meu Pattern
 * Slug: guilherme-cota/meu-pattern  
 * Categories: guilherme-cota
 */
?>

<!-- wp:group {"className":"meu-pattern"} -->
<!-- Conteúdo do pattern aqui -->
<!-- /wp:group -->
```

## Integração com IA

### Configuração da API
O tema inclui uma integração básica para melhorar mensagens de contato. Para implementar com uma API real:

1. **OpenAI API**:
```php
// Em functions.php
function enhance_message_with_openai($message) {
    $api_key = get_option('openai_api_key');
    // Implementar chamada para API
}
```

2. **Outros provedores**:
```php
// Hugging Face, Cohere, etc.
function enhance_message_custom($message) {
    // Sua implementação
}
```

### Personalização de Templates
Edite em `/assets/main.js` a função `enhanceMessage()`:

```javascript
// Adicione novos templates baseados em palavras-chave
const templates = {
    // Seus templates personalizados
    consultoria: `Template para consultoria...`,
    startup: `Template para startups...`
};
```

## Manutenção

### Atualizações
- Mantenha backup antes de atualizar
- Teste em ambiente de staging
- Verifique compatibilidade de plugins

### Performance
- Use plugin de cache (WP Rocket, W3 Total Cache)
- Otimize imagens (WebP, lazy loading)
- Configure CDN

### Segurança
- Mantenha WordPress atualizado
- Use plugin de segurança (Wordfence)
- Faça backups regulares

## Suporte

### Troubleshooting

#### Erro 500
- Verifique logs de erro
- Desative plugins conflitantes
- Aumente memory_limit do PHP

#### Problemas de CSS
- Limpe cache
- Verifique conflitos de CSS
- Use inspetor do navegador

#### JavaScript não funciona
- Verifique console de erros
- Confirme se jQuery está carregado
- Teste sem outros plugins

### Logs e Debug
```php
// wp-config.php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
```

## Changelog

### v1.0.0
- Lançamento inicial
- Block patterns completos
- Custom post types
- Integração básica com IA
- Sistema de design responsivo

## Licença

GPL v2 ou posterior - você pode modificar e redistribuir livremente.

## Créditos

- **Design**: Baseado no portfolio React original
- **Desenvolvimento**: Guilherme Cota
- **Fonts**: Inter (Google Fonts)
- **Icons**: Lucide React (convertidos para SVG)