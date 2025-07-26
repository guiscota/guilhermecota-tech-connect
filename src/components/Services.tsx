import { Card } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { 
  Code, 
  Settings, 
  Smartphone, 
  Database, 
  ShieldCheck, 
  Zap,
  ArrowRight,
  CheckCircle
} from 'lucide-react';

const Services = () => {
  const services = [
    {
      icon: Code,
      title: 'Desenvolvimento Full Stack',
      description: 'Aplicações web completas, desde o frontend responsivo até APIs robustas e banco de dados otimizado.',
      features: [
        'React, Vue.js, Angular',
        'Laravel, Node.js, Express',
        'Arquitetura escalável',
        'Código limpo e documentado'
      ],
      color: 'primary'
    },
    {
      icon: Settings,
      title: 'Consultoria Técnica',
      description: 'Análise de arquitetura, otimização de performance e mentoria para equipes de desenvolvimento.',
      features: [
        'Revisão de código',
        'Definição de arquitetura',
        'Otimização de performance',
        'Mentoria técnica'
      ],
      color: 'accent'
    },
    {
      icon: Database,
      title: 'Integração de APIs',
      description: 'Especialista em integrações complexas, especialmente com Efí (Gerencianet), Pix e gateways de pagamento.',
      features: [
        'APIs Efí/Gerencianet',
        'Integração Pix',
        'Gateways de pagamento',
        'Webhooks e sincronização'
      ],
      color: 'primary'
    },
    {
      icon: Smartphone,
      title: 'Aplicações Mobile',
      description: 'PWAs e aplicações mobile híbridas com foco em performance e experiência do usuário.',
      features: [
        'Progressive Web Apps',
        'React Native',
        'Ionic Framework',
        'Cross-platform'
      ],
      color: 'accent'
    },
    {
      icon: ShieldCheck,
      title: 'Segurança & Performance',
      description: 'Implementação de melhores práticas de segurança, otimização de SEO e performance web.',
      features: [
        'Autenticação JWT',
        'HTTPS e SSL',
        'Otimização SEO',
        'Lighthouse 90+'
      ],
      color: 'primary'
    },
    {
      icon: Zap,
      title: 'Automação de Processos',
      description: 'Scripts customizados, automações e integrações que economizam tempo e reduzem erros manuais.',
      features: [
        'Scripts personalizados',
        'Automação de deploys',
        'Integração de sistemas',
        'Monitoramento automatizado'
      ],
      color: 'accent'
    }
  ];

  const scrollToContact = () => {
    const element = document.getElementById('contato');
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    }
  };

  return (
    <section id="servicos" className="py-20 lg:py-32">
      <div className="container mx-auto px-4 lg:px-6">
        <div className="text-center mb-16">
          <h2 className="text-3xl lg:text-5xl font-bold text-foreground mb-6">
            O que eu <span className="bg-gradient-primary bg-clip-text text-transparent">faço</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Serviços especializados para transformar suas ideias em soluções digitais de alta qualidade
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
          {services.map((service, index) => (
            <Card 
              key={index}
              className="p-8 bg-gradient-glass border border-border/50 backdrop-blur-sm hover:shadow-medium transition-all duration-300 group hover:-translate-y-2 animate-fade-in"
              style={{ animationDelay: `${index * 0.1}s` }}
            >
              <div className="space-y-6">
                {/* Icon */}
                <div className={`w-16 h-16 rounded-2xl flex items-center justify-center shadow-glow transition-all duration-300 group-hover:shadow-accent-glow ${
                  service.color === 'primary' ? 'bg-gradient-primary' : 'bg-gradient-accent'
                }`}>
                  <service.icon className="w-8 h-8 text-white" />
                </div>

                {/* Content */}
                <div className="space-y-4">
                  <h3 className="text-xl font-semibold text-foreground group-hover:text-primary transition-colors">
                    {service.title}
                  </h3>
                  <p className="text-muted-foreground leading-relaxed">
                    {service.description}
                  </p>
                </div>

                {/* Features */}
                <div className="space-y-2">
                  {service.features.map((feature, featureIndex) => (
                    <div key={featureIndex} className="flex items-center gap-2">
                      <CheckCircle className="w-4 h-4 text-accent flex-shrink-0" />
                      <span className="text-sm text-muted-foreground">{feature}</span>
                    </div>
                  ))}
                </div>
              </div>
            </Card>
          ))}
        </div>

        {/* CTA Section */}
        <div className="text-center">
          <Card className="p-8 lg:p-12 bg-gradient-hero border border-border/50 backdrop-blur-sm shadow-medium max-w-4xl mx-auto">
            <div className="space-y-6">
              <h3 className="text-2xl lg:text-3xl font-bold text-foreground">
                Pronto para transformar sua ideia em realidade?
              </h3>
              <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
                Vamos conversar sobre seu projeto e encontrar a melhor solução técnica 
                para suas necessidades específicas.
              </p>
              <div className="flex flex-col sm:flex-row gap-4 justify-center">
                <Button 
                  size="lg"
                  onClick={scrollToContact}
                  className="bg-gradient-accent hover:shadow-accent-glow transition-all duration-300"
                >
                  Solicitar Consultoria
                  <ArrowRight className="w-5 h-5 ml-2" />
                </Button>
                <Button 
                  size="lg" 
                  variant="outline"
                  onClick={() => window.open('https://wa.me/5531999999999', '_blank')}
                  className="border-border/50 hover:bg-secondary/50 backdrop-blur-sm"
                >
                  WhatsApp Direto
                </Button>
              </div>
            </div>
          </Card>
        </div>
      </div>
    </section>
  );
};

export default Services;