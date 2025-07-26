import { Card } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { Badge } from '@/components/ui/badge';
import { ExternalLink, Github, Star, GitBranch, Eye } from 'lucide-react';
import projectsBg from '@/assets/projects-bg.jpg';

const Projects = () => {
  const featuredProjects = [
    {
      title: 'SDK Efí para JavaScript',
      description: 'Biblioteca JavaScript completa para integração com APIs da Efí (Gerencianet), incluindo Pix, boletos e cartão de crédito.',
      image: projectsBg,
      technologies: ['JavaScript', 'Node.js', 'API REST', 'Pix', 'SDK'],
      stats: {
        stars: '1.2k',
        forks: '280',
        downloads: '15k/mês'
      },
      links: {
        github: 'https://github.com/efipay/sdk-javascript-apis-efi',
        demo: 'https://dev.efipay.com.br',
        docs: 'https://dev.efipay.com.br/docs'
      },
      featured: true
    },
    {
      title: 'E-commerce B2B Completo',
      description: 'Plataforma de e-commerce B2B com gestão de pedidos, integração multicanal e dashboard analítico avançado.',
      image: projectsBg,
      technologies: ['Laravel', 'Vue.js', 'MySQL', 'Redis', 'AWS'],
      stats: {
        users: '10k+',
        orders: '50k+',
        revenue: 'R$ 2M+'
      },
      links: {
        demo: '#',
        case: '#'
      },
      featured: true
    },
    {
      title: 'Sistema de Gestão Hospitalar',
      description: 'ERP completo para hospitais com módulos de internação, farmácia, laboratório e integração com ANS.',
      image: projectsBg,
      technologies: ['React', 'Node.js', 'PostgreSQL', 'Docker', 'Microservices'],
      stats: {
        hospitals: '25+',
        patients: '100k+',
        uptime: '99.9%'
      },
      links: {
        case: '#'
      },
      featured: true
    }
  ];

  const otherProjects = [
    {
      title: 'API Gateway Personalizada',
      description: 'Gateway de APIs com rate limiting, autenticação JWT e monitoramento em tempo real.',
      technologies: ['Node.js', 'Redis', 'JWT', 'Docker']
    },
    {
      title: 'Dashboard Analytics',
      description: 'Dashboard interativo para visualização de dados com charts dinâmicos e relatórios automatizados.',
      technologies: ['React', 'Chart.js', 'Express', 'MongoDB']
    },
    {
      title: 'Sistema de Delivery',
      description: 'App de delivery com tracking em tempo real, integração com mapas e pagamentos online.',
      technologies: ['React Native', 'Firebase', 'Stripe', 'Maps API']
    },
    {
      title: 'Automação de Deploy',
      description: 'Pipeline CI/CD customizada com testes automatizados e deploy em múltiplos ambientes.',
      technologies: ['GitHub Actions', 'Docker', 'AWS', 'Terraform']
    }
  ];

  return (
    <section id="projetos" className="py-20 lg:py-32 bg-gradient-hero">
      <div className="container mx-auto px-4 lg:px-6">
        <div className="text-center mb-16">
          <h2 className="text-3xl lg:text-5xl font-bold text-foreground mb-6">
            Projetos em <span className="bg-gradient-primary bg-clip-text text-transparent">Destaque</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Cases reais que demonstram minha expertise em resolver problemas complexos com soluções elegantes
          </p>
        </div>

        {/* Featured Projects */}
        <div className="space-y-12 mb-20">
          {featuredProjects.map((project, index) => (
            <Card
              key={index}
              className="overflow-hidden bg-gradient-glass border border-border/50 backdrop-blur-sm hover:shadow-medium transition-all duration-300 animate-fade-in"
              style={{ animationDelay: `${index * 0.2}s` }}
            >
              <div className={`grid lg:grid-cols-2 gap-0 ${index % 2 === 1 ? 'lg:grid-flow-col-dense' : ''}`}>
                {/* Image */}
                <div className={`relative h-64 lg:h-auto ${index % 2 === 1 ? 'lg:order-2' : ''}`}>
                  <img
                    src={project.image}
                    alt={project.title}
                    className="w-full h-full object-cover"
                  />
                  <div className="absolute inset-0 bg-gradient-to-r from-background/20 to-transparent" />
                </div>

                {/* Content */}
                <div className={`p-8 lg:p-12 space-y-6 ${index % 2 === 1 ? 'lg:order-1' : ''}`}>
                  <div className="space-y-4">
                    <div className="flex items-center gap-2">
                      <Star className="w-5 h-5 text-accent" />
                      <Badge variant="secondary" className="bg-gradient-accent text-white">
                        Projeto Destaque
                      </Badge>
                    </div>
                    
                    <h3 className="text-2xl lg:text-3xl font-bold text-foreground">
                      {project.title}
                    </h3>
                    
                    <p className="text-lg text-muted-foreground leading-relaxed">
                      {project.description}
                    </p>
                  </div>

                  {/* Technologies */}
                  <div className="flex flex-wrap gap-2">
                    {project.technologies.map((tech) => (
                      <Badge
                        key={tech}
                        variant="secondary"
                        className="bg-gradient-glass border border-border/50"
                      >
                        {tech}
                      </Badge>
                    ))}
                  </div>

                  {/* Stats */}
                  <div className="flex flex-wrap gap-6">
                    {Object.entries(project.stats).map(([key, value]) => (
                      <div key={key} className="text-center">
                        <div className="text-xl font-bold text-primary">{value}</div>
                        <div className="text-xs text-muted-foreground capitalize">{key}</div>
                      </div>
                    ))}
                  </div>

                  {/* Links */}
                  <div className="flex flex-wrap gap-3">
                    {project.links.github && (
                      <Button variant="outline" size="sm" asChild>
                        <a href={project.links.github} target="_blank" rel="noopener noreferrer">
                          <Github className="w-4 h-4 mr-2" />
                          Código
                        </a>
                      </Button>
                    )}
                    {project.links.demo && (
                      <Button variant="outline" size="sm" asChild>
                        <a href={project.links.demo} target="_blank" rel="noopener noreferrer">
                          <ExternalLink className="w-4 h-4 mr-2" />
                          Demo
                        </a>
                      </Button>
                    )}
                    {project.links.docs && (
                      <Button variant="outline" size="sm" asChild>
                        <a href={project.links.docs} target="_blank" rel="noopener noreferrer">
                          <Eye className="w-4 h-4 mr-2" />
                          Documentação
                        </a>
                      </Button>
                    )}
                  </div>
                </div>
              </div>
            </Card>
          ))}
        </div>

        {/* Other Projects Grid */}
        <div className="space-y-8">
          <h3 className="text-2xl lg:text-3xl font-bold text-foreground text-center">
            Outros Projetos
          </h3>
          
          <div className="grid md:grid-cols-2 gap-6">
            {otherProjects.map((project, index) => (
              <Card
                key={index}
                className="p-6 bg-gradient-glass border border-border/50 backdrop-blur-sm hover:shadow-soft transition-all duration-300 hover:-translate-y-1 animate-fade-in"
                style={{ animationDelay: `${(index + 3) * 0.1}s` }}
              >
                <div className="space-y-4">
                  <div className="flex items-center gap-2">
                    <GitBranch className="w-5 h-5 text-primary" />
                    <h4 className="text-lg font-semibold text-foreground">{project.title}</h4>
                  </div>
                  
                  <p className="text-muted-foreground">{project.description}</p>
                  
                  <div className="flex flex-wrap gap-2">
                    {project.technologies.map((tech) => (
                      <Badge
                        key={tech}
                        variant="secondary"
                        className="text-xs bg-gradient-glass border border-border/50"
                      >
                        {tech}
                      </Badge>
                    ))}
                  </div>
                </div>
              </Card>
            ))}
          </div>
        </div>

        {/* GitHub CTA */}
        <div className="text-center mt-16">
          <Button
            size="lg"
            variant="outline"
            asChild
            className="border-border/50 hover:bg-secondary/50 backdrop-blur-sm"
          >
            <a href="https://github.com/guilhermecota" target="_blank" rel="noopener noreferrer">
              <Github className="w-5 h-5 mr-2" />
              Ver Todos no GitHub
            </a>
          </Button>
        </div>
      </div>
    </section>
  );
};

export default Projects;
