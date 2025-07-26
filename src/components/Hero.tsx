import { Button } from '@/components/ui/button';
import { ArrowRight, Download, Github, Linkedin, Mail } from 'lucide-react';
import guilhermePhoto from '@/assets/guilherme-photo.jpg';
import heroBg from '@/assets/hero-bg.jpg';

const Hero = () => {
  const scrollToSection = (sectionId: string) => {
    const element = document.getElementById(sectionId);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    }
  };

  return (
    <section 
      id="hero"
      className="relative min-h-screen flex items-center justify-center overflow-hidden"
      style={{
        backgroundImage: `url(${heroBg})`,
        backgroundSize: 'cover',
        backgroundPosition: 'center',
        backgroundAttachment: 'fixed'
      }}
    >
      {/* Overlay */}
      <div className="absolute inset-0 bg-gradient-hero" />
      
      {/* Content */}
      <div className="relative z-10 container mx-auto px-4 lg:px-6 py-20">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Left Content */}
          <div className="space-y-8 animate-fade-in">
            <div className="space-y-4">
              <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-glass border border-border/50 backdrop-blur-sm">
                <div className="w-2 h-2 bg-accent rounded-full animate-pulse" />
                <span className="text-sm text-muted-foreground">Disponível para novos projetos</span>
              </div>
              
              <h1 className="text-4xl lg:text-6xl font-bold text-foreground leading-tight">
                Consultor técnico e{' '}
                <span className="bg-gradient-primary bg-clip-text text-transparent">
                  desenvolvedor full stack
                </span>{' '}
                apaixonado por resolver problemas
              </h1>
              
              <p className="text-xl text-muted-foreground leading-relaxed max-w-2xl">
                Ajudando pessoas e empresas a criarem{' '}
                <strong>soluções digitais robustas, eficientes e seguras</strong>. 
                Especialista em APIs, integrações e arquiteturas escaláveis.
              </p>
            </div>

            {/* Location */}
            <div className="flex items-center gap-2 text-muted-foreground">
              <div className="w-2 h-2 bg-accent rounded-full" />
              <span>Ouro Preto, MG • Atendo remoto para todo o Brasil</span>
            </div>

            {/* CTA Buttons */}
            <div className="flex flex-col sm:flex-row gap-4">
              <Button 
                size="lg"
                onClick={() => scrollToSection('contato')}
                className="bg-gradient-accent hover:shadow-accent-glow transition-all duration-300 text-lg"
              >
                Solicitar Proposta
                <ArrowRight className="w-5 h-5 ml-2" />
              </Button>
              
              <Button 
                size="lg" 
                variant="outline"
                onClick={() => scrollToSection('projetos')}
                className="border-border/50 hover:bg-secondary/50 backdrop-blur-sm text-lg"
              >
                <Download className="w-5 h-5 mr-2" />
                Ver Projetos
              </Button>
            </div>

            {/* Social Links */}
            <div className="flex items-center gap-4 pt-4">
              <span className="text-sm text-muted-foreground">Conecte-se:</span>
              <div className="flex gap-3">
                <a 
                  href="https://github.com/guilhermecota" 
                  target="_blank" 
                  rel="noopener noreferrer"
                  className="p-2 rounded-lg bg-gradient-glass border border-border/50 hover:border-primary/50 transition-all duration-300 hover:shadow-glow"
                >
                  <Github className="w-5 h-5 text-muted-foreground hover:text-primary transition-colors" />
                </a>
                <a 
                  href="https://linkedin.com/in/guilhermecota" 
                  target="_blank" 
                  rel="noopener noreferrer"
                  className="p-2 rounded-lg bg-gradient-glass border border-border/50 hover:border-primary/50 transition-all duration-300 hover:shadow-glow"
                >
                  <Linkedin className="w-5 h-5 text-muted-foreground hover:text-primary transition-colors" />
                </a>
                <a 
                  href="mailto:contato@guilhermecota.dev" 
                  className="p-2 rounded-lg bg-gradient-glass border border-border/50 hover:border-primary/50 transition-all duration-300 hover:shadow-glow"
                >
                  <Mail className="w-5 h-5 text-muted-foreground hover:text-primary transition-colors" />
                </a>
              </div>
            </div>
          </div>

          {/* Right Content - Photo */}
          <div className="relative animate-fade-in" style={{ animationDelay: '0.3s' }}>
            <div className="relative mx-auto w-80 h-80 lg:w-96 lg:h-96">
              {/* Glowing Background */}
              <div className="absolute inset-0 bg-gradient-primary rounded-full opacity-20 blur-3xl animate-pulse-glow" />
              
              {/* Photo Container */}
              <div className="relative w-full h-full rounded-full overflow-hidden border-4 border-gradient-glass backdrop-blur-sm shadow-glow animate-float">
                <img 
                  src={guilhermePhoto}
                  alt="Guilherme Cota - Consultor Técnico e Desenvolvedor Full Stack"
                  className="w-full h-full object-cover"
                />
              </div>
              
              {/* Floating Elements */}
              <div className="absolute -top-4 -right-4 w-16 h-16 bg-gradient-accent rounded-full flex items-center justify-center shadow-accent-glow animate-float" style={{ animationDelay: '0.5s' }}>
                <span className="text-white font-bold text-lg">{ '{' }</span>
              </div>
              
              <div className="absolute -bottom-4 -left-4 w-12 h-12 bg-gradient-primary rounded-full flex items-center justify-center shadow-glow animate-float" style={{ animationDelay: '1s' }}>
                <span className="text-white font-bold">💻</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* Scroll Indicator */}
      <div className="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div className="w-6 h-10 border-2 border-muted-foreground/30 rounded-full flex justify-center">
          <div className="w-1 h-3 bg-muted-foreground/50 rounded-full mt-2 animate-pulse" />
        </div>
      </div>
    </section>
  );
};

export default Hero;