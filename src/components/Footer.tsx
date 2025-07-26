import { Code, Heart, Mail, Phone, MapPin } from 'lucide-react';

const Footer = () => {
  const currentYear = new Date().getFullYear();

  const quickLinks = [
    { label: 'Sobre', href: '#sobre' },
    { label: 'Serviços', href: '#servicos' },
    { label: 'Projetos', href: '#projetos' },
    { label: 'Blog', href: '#blog' },
    { label: 'Contato', href: '#contato' }
  ];

  const services = [
    'Desenvolvimento Full Stack',
    'Consultoria Técnica',
    'Integração de APIs',
    'Aplicações Mobile'
  ];

  const scrollToSection = (href: string) => {
    const element = document.getElementById(href.substring(1));
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    }
  };

  return (
    <footer className="bg-background border-t border-border/50">
      <div className="container mx-auto px-4 lg:px-6">
        {/* Main Footer Content */}
        <div className="py-16 grid lg:grid-cols-4 gap-12">
          {/* Brand Column */}
          <div className="lg:col-span-2 space-y-6">
            <div className="flex items-center gap-3">
              <div className="w-12 h-12 bg-gradient-primary rounded-xl flex items-center justify-center shadow-glow">
                <Code className="w-7 h-7 text-white" />
              </div>
              <div>
                <div className="text-xl font-bold text-foreground">Guilherme Cota</div>
                <div className="text-sm text-muted-foreground">Consultor Técnico & Full Stack Developer</div>
              </div>
            </div>
            
            <p className="text-muted-foreground leading-relaxed max-w-md">
              Desenvolvedor apaixonado por criar soluções digitais robustas e escaláveis. 
              Especializando em transformar ideias complexas em código limpo e eficiente.
            </p>
            
            <div className="space-y-2">
              <div className="flex items-center gap-2 text-sm text-muted-foreground">
                <MapPin className="w-4 h-4 text-accent" />
                <span>Ouro Preto, MG • Atendo todo o Brasil</span>
              </div>
              <div className="flex items-center gap-2 text-sm text-muted-foreground">
                <Mail className="w-4 h-4 text-accent" />
                <a href="mailto:contato@guilhermecota.dev" className="hover:text-foreground transition-colors">
                  contato@guilhermecota.dev
                </a>
              </div>
              <div className="flex items-center gap-2 text-sm text-muted-foreground">
                <Phone className="w-4 h-4 text-accent" />
                <a href="https://wa.me/5531999999999" target="_blank" rel="noopener noreferrer" className="hover:text-foreground transition-colors">
                  +55 (31) 99999-9999
                </a>
              </div>
            </div>
          </div>

          {/* Quick Links */}
          <div className="space-y-6">
            <h4 className="text-lg font-semibold text-foreground">Navegação</h4>
            <ul className="space-y-3">
              {quickLinks.map((link) => (
                <li key={link.label}>
                  <button
                    onClick={() => scrollToSection(link.href)}
                    className="text-muted-foreground hover:text-foreground transition-colors text-left"
                  >
                    {link.label}
                  </button>
                </li>
              ))}
            </ul>
          </div>

          {/* Services */}
          <div className="space-y-6">
            <h4 className="text-lg font-semibold text-foreground">Serviços</h4>
            <ul className="space-y-3">
              {services.map((service) => (
                <li key={service} className="text-muted-foreground">
                  {service}
                </li>
              ))}
            </ul>
            
            <div className="pt-4">
              <button
                onClick={() => scrollToSection('#contato')}
                className="text-sm text-accent hover:text-accent-glow transition-colors font-medium"
              >
                Solicitar Orçamento →
              </button>
            </div>
          </div>
        </div>

        {/* Bottom Bar */}
        <div className="py-6 border-t border-border/50">
          <div className="flex flex-col sm:flex-row justify-between items-center gap-4">
            <div className="flex items-center gap-2 text-sm text-muted-foreground">
              <span>© {currentYear} Guilherme Cota. Feito com</span>
              <Heart className="w-4 h-4 text-accent" />
              <span>e muito código.</span>
            </div>
            
            <div className="flex items-center gap-6 text-sm text-muted-foreground">
              <a href="#" className="hover:text-foreground transition-colors">
                Política de Privacidade
              </a>
              <a href="#" className="hover:text-foreground transition-colors">
                Termos de Uso
              </a>
              <div className="flex items-center gap-1">
                <div className="w-2 h-2 bg-accent rounded-full animate-pulse" />
                <span>Online agora</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;