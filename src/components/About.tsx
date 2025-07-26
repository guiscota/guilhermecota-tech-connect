import { Card } from '@/components/ui/card';
import { Badge } from '@/components/ui/badge';
import { Users, Target, Heart, Zap, Award, BookOpen } from 'lucide-react';

const About = () => {
  const values = [
    {
      icon: Target,
      title: 'Foco em Resultados',
      description: 'Cada linha de código tem um propósito: resolver problemas reais e gerar valor.'
    },
    {
      icon: Users,
      title: 'Colaboração',
      description: 'Acredito que as melhores soluções nascem do trabalho em equipe e comunicação clara.'
    },
    {
      icon: BookOpen,
      title: 'Aprendizado Contínuo',
      description: 'A tecnologia evolui constantemente, e eu evoluo junto para entregar sempre o melhor.'
    },
    {
      icon: Heart,
      title: 'Paixão pela Qualidade',
      description: 'Código limpo, arquitetura sólida e experiência do usuário excepcional são meus pilares.'
    }
  ];

  const highlights = [
    { number: '7+', label: 'Anos de Experiência' },
    { number: '100+', label: 'Projetos Entregues' },
    { number: '50+', label: 'Integrações de API' },
    { number: '98%', label: 'Satisfação do Cliente' }
  ];

  const skills = [
    'Laravel', 'Node.js', 'React', 'Vue.js', 'Angular', 'TypeScript',
    'API REST', 'GraphQL', 'MySQL', 'PostgreSQL', 'MongoDB',
    'AWS', 'Docker', 'Git', 'TDD', 'Agile', 'Pix', 'Gerencianet', 'Efí'
  ];

  return (
    <section id="sobre" className="py-20 lg:py-32 bg-gradient-hero">
      <div className="container mx-auto px-4 lg:px-6">
        <div className="text-center mb-16">
          <h2 className="text-3xl lg:text-5xl font-bold text-foreground mb-6">
            Sobre <span className="bg-gradient-primary bg-clip-text text-transparent">Guilherme Cota</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Desenvolvedor apaixonado por tecnologia, sempre em busca de soluções elegantes para problemas complexos
          </p>
        </div>

        <div className="grid lg:grid-cols-2 gap-16 items-center mb-20">
          {/* Left Content */}
          <div className="space-y-6 animate-slide-in">
            <div className="space-y-4">
              <h3 className="text-2xl font-semibold text-foreground flex items-center gap-2">
                <Zap className="w-6 h-6 text-accent" />
                Minha Jornada
              </h3>
              <div className="space-y-4 text-lg text-muted-foreground leading-relaxed">
                <p>
                  Desde jovem, sempre tive uma <strong>curiosidade natural pela tecnologia</strong>. 
                  O que começou como um hobby de criar sites simples evoluiu para uma paixão genuína 
                  por resolver problemas complexos através do código.
                </p>
                <p>
                  Ao longo dos últimos <strong>7 anos</strong>, tive o privilégio de trabalhar com 
                  empresas de diversos segmentos, desde startups inovadoras até grandes corporações, 
                  sempre focando em <strong>entregar soluções que realmente fazem a diferença</strong>.
                </p>
                <p>
                  Minha expertise em <strong>integrações de APIs</strong>, especialmente com a 
                  plataforma Efí (ex-Gerencianet) e sistemas de pagamento como Pix, me permitiu 
                  ajudar centenas de empresas a automatizarem seus processos financeiros.
                </p>
                <p>
                  Quando não estou codando, adoro passar tempo com minha família, explorar novas 
                  tecnologias e compartilhar conhecimento através de mentorias e artigos técnicos.
                </p>
              </div>
            </div>

            {/* Skills */}
            <div className="space-y-3">
              <h4 className="text-lg font-semibold text-foreground">Principais Tecnologias</h4>
              <div className="flex flex-wrap gap-2">
                {skills.map((skill) => (
                  <Badge 
                    key={skill}
                    variant="secondary"
                    className="bg-gradient-glass border border-border/50 backdrop-blur-sm hover:border-primary/50 transition-all duration-300"
                  >
                    {skill}
                  </Badge>
                ))}
              </div>
            </div>
          </div>

          {/* Right Content - Stats */}
          <div className="space-y-8 animate-fade-in" style={{ animationDelay: '0.3s' }}>
            {/* Highlights */}
            <div className="grid grid-cols-2 gap-4">
              {highlights.map((item, index) => (
                <Card key={index} className="p-6 text-center bg-gradient-glass border border-border/50 backdrop-blur-sm hover:shadow-soft transition-all duration-300">
                  <div className="text-3xl font-bold text-primary mb-2">{item.number}</div>
                  <div className="text-sm text-muted-foreground">{item.label}</div>
                </Card>
              ))}
            </div>

            {/* Values */}
            <div className="space-y-4">
              <h4 className="text-lg font-semibold text-foreground flex items-center gap-2">
                <Award className="w-5 h-5 text-accent" />
                Meus Valores
              </h4>
              <div className="space-y-3">
                {values.map((value, index) => (
                  <Card 
                    key={index} 
                    className="p-4 bg-gradient-glass border border-border/50 backdrop-blur-sm hover:shadow-soft transition-all duration-300"
                  >
                    <div className="flex items-start gap-3">
                      <div className="p-2 rounded-lg bg-gradient-primary shadow-glow">
                        <value.icon className="w-4 h-4 text-white" />
                      </div>
                      <div>
                        <h5 className="font-semibold text-foreground mb-1">{value.title}</h5>
                        <p className="text-sm text-muted-foreground">{value.description}</p>
                      </div>
                    </div>
                  </Card>
                ))}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default About;