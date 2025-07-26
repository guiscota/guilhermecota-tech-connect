import { Card } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { Badge } from '@/components/ui/badge';
import { Calendar, Clock, ArrowRight, BookOpen, TrendingUp } from 'lucide-react';

const Blog = () => {
  const articles = [
    {
      title: 'Implementando Pix com a API da Efí: Guia Completo',
      excerpt: 'Tutorial passo a passo para integrar pagamentos via Pix usando a API da Efí, com exemplos práticos em JavaScript e PHP.',
      category: 'Tutorial',
      date: '2024-01-15',
      readTime: '8 min',
      tags: ['Pix', 'Efí', 'JavaScript', 'PHP'],
      featured: true,
      views: '15.2k'
    },
    {
      title: 'Arquitetura Limpa em Laravel: Organizando Projetos Grandes',
      excerpt: 'Como estruturar aplicações Laravel de grande escala seguindo princípios de Clean Architecture e Domain Driven Design.',
      category: 'Arquitetura',
      date: '2024-01-10',
      readTime: '12 min',
      tags: ['Laravel', 'Clean Architecture', 'DDD'],
      featured: true,
      views: '8.7k'
    },
    {
      title: 'Otimização de Performance em APIs REST',
      excerpt: 'Técnicas avançadas para melhorar a performance de APIs, incluindo caching, paginação e consultas otimizadas.',
      category: 'Performance',
      date: '2024-01-05',
      readTime: '10 min',
      tags: ['API', 'Performance', 'Cache', 'Otimização'],
      featured: true,
      views: '12.1k'
    },
    {
      title: 'React vs Vue.js: Quando Usar Cada Framework',
      excerpt: 'Comparação prática entre React e Vue.js com cenários reais de uso e análise de performance.',
      category: 'Frontend',
      date: '2024-01-01',
      readTime: '6 min',
      tags: ['React', 'Vue.js', 'Frontend'],
      views: '6.3k'
    },
    {
      title: 'Segurança em APIs: JWT, OAuth e Melhores Práticas',
      excerpt: 'Implementação de autenticação segura em APIs usando JWT e OAuth com foco em segurança.',
      category: 'Segurança',
      date: '2023-12-28',
      readTime: '9 min',
      tags: ['JWT', 'OAuth', 'Segurança', 'API'],
      views: '9.8k'
    },
    {
      title: 'Docker para Desenvolvedores: Do Básico ao Avançado',
      excerpt: 'Guia completo sobre Docker, desde conceitos básicos até orquestração com Docker Compose.',
      category: 'DevOps',
      date: '2023-12-25',
      readTime: '15 min',
      tags: ['Docker', 'DevOps', 'Containerização'],
      views: '11.5k'
    }
  ];

  const categories = [
    { name: 'Todos', count: articles.length, active: true },
    { name: 'Tutorial', count: 2 },
    { name: 'Arquitetura', count: 1 },
    { name: 'Performance', count: 1 },
    { name: 'Frontend', count: 1 },
    { name: 'DevOps', count: 1 }
  ];

  const formatDate = (dateString: string) => {
    return new Date(dateString).toLocaleDateString('pt-BR', {
      day: '2-digit',
      month: 'long',
      year: 'numeric'
    });
  };

  return (
    <section id="blog" className="py-20 lg:py-32">
      <div className="container mx-auto px-4 lg:px-6">
        <div className="text-center mb-16">
          <h2 className="text-3xl lg:text-5xl font-bold text-foreground mb-6">
            Blog & <span className="bg-gradient-primary bg-clip-text text-transparent">Artigos</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Compartilhando conhecimento técnico, tutoriais práticos e insights sobre desenvolvimento web
          </p>
        </div>

        {/* Categories Filter */}
        <div className="flex flex-wrap justify-center gap-3 mb-12">
          {categories.map((category) => (
            <Button
              key={category.name}
              variant={category.active ? "default" : "outline"}
              size="sm"
              className={`${
                category.active 
                  ? 'bg-gradient-primary text-white shadow-glow' 
                  : 'border-border/50 hover:bg-secondary/50'
              } transition-all duration-300`}
            >
              {category.name}
              <Badge variant="secondary" className="ml-2 bg-white/20 text-white text-xs">
                {category.count}
              </Badge>
            </Button>
          ))}
        </div>

        {/* Featured Articles */}
        <div className="mb-16">
          <h3 className="text-2xl font-bold text-foreground mb-8 flex items-center gap-2">
            <TrendingUp className="w-6 h-6 text-accent" />
            Artigos em Destaque
          </h3>
          
          <div className="grid lg:grid-cols-3 gap-8">
            {articles.filter(article => article.featured).map((article, index) => (
              <Card 
                key={index}
                className="overflow-hidden bg-gradient-glass border border-border/50 backdrop-blur-sm hover:shadow-medium transition-all duration-300 hover:-translate-y-2 group animate-fade-in"
                style={{ animationDelay: `${index * 0.1}s` }}
              >
                <div className="p-6 space-y-4">
                  <div className="flex items-center justify-between">
                    <Badge 
                      variant="secondary"
                      className="bg-gradient-accent text-white"
                    >
                      {article.category}
                    </Badge>
                    <div className="flex items-center gap-1 text-sm text-muted-foreground">
                      <TrendingUp className="w-4 h-4" />
                      {article.views}
                    </div>
                  </div>

                  <h4 className="text-xl font-semibold text-foreground group-hover:text-primary transition-colors line-clamp-2">
                    {article.title}
                  </h4>

                  <p className="text-muted-foreground text-sm leading-relaxed line-clamp-3">
                    {article.excerpt}
                  </p>

                  <div className="flex flex-wrap gap-1">
                    {article.tags.map((tag) => (
                      <Badge 
                        key={tag}
                        variant="secondary"
                        className="text-xs bg-gradient-glass border border-border/50"
                      >
                        {tag}
                      </Badge>
                    ))}
                  </div>

                  <div className="flex items-center justify-between pt-4 border-t border-border/50">
                    <div className="flex items-center gap-4 text-sm text-muted-foreground">
                      <div className="flex items-center gap-1">
                        <Calendar className="w-4 h-4" />
                        {formatDate(article.date)}
                      </div>
                      <div className="flex items-center gap-1">
                        <Clock className="w-4 h-4" />
                        {article.readTime}
                      </div>
                    </div>
                    
                    <Button size="sm" variant="ghost" className="text-primary hover:text-accent">
                      <ArrowRight className="w-4 h-4" />
                    </Button>
                  </div>
                </div>
              </Card>
            ))}
          </div>
        </div>

        {/* All Articles */}
        <div className="space-y-8">
          <h3 className="text-2xl font-bold text-foreground flex items-center gap-2">
            <BookOpen className="w-6 h-6 text-primary" />
            Todos os Artigos
          </h3>
          
          <div className="space-y-4">
            {articles.map((article, index) => (
              <Card 
                key={index}
                className="p-6 bg-gradient-glass border border-border/50 backdrop-blur-sm hover:shadow-soft transition-all duration-300 hover:border-primary/50 group animate-slide-in"
                style={{ animationDelay: `${index * 0.05}s` }}
              >
                <div className="grid md:grid-cols-4 gap-6 items-center">
                  <div className="md:col-span-3 space-y-3">
                    <div className="flex items-center gap-3 flex-wrap">
                      <Badge 
                        variant="secondary"
                        className="bg-gradient-glass border border-border/50"
                      >
                        {article.category}
                      </Badge>
                      <div className="flex items-center gap-4 text-sm text-muted-foreground">
                        <div className="flex items-center gap-1">
                          <Calendar className="w-4 h-4" />
                          {formatDate(article.date)}
                        </div>
                        <div className="flex items-center gap-1">
                          <Clock className="w-4 h-4" />
                          {article.readTime}
                        </div>
                        <div className="flex items-center gap-1">
                          <TrendingUp className="w-4 h-4" />
                          {article.views}
                        </div>
                      </div>
                    </div>
                    
                    <h4 className="text-lg font-semibold text-foreground group-hover:text-primary transition-colors">
                      {article.title}
                    </h4>
                    
                    <p className="text-muted-foreground line-clamp-2">
                      {article.excerpt}
                    </p>
                    
                    <div className="flex flex-wrap gap-1">
                      {article.tags.map((tag) => (
                        <Badge 
                          key={tag}
                          variant="secondary"
                          className="text-xs bg-gradient-glass border border-border/50"
                        >
                          {tag}
                        </Badge>
                      ))}
                    </div>
                  </div>
                  
                  <div className="md:col-span-1 flex justify-end">
                    <Button 
                      variant="outline"
                      className="border-border/50 hover:bg-primary hover:text-white transition-all duration-300"
                    >
                      Ler Artigo
                      <ArrowRight className="w-4 h-4 ml-2" />
                    </Button>
                  </div>
                </div>
              </Card>
            ))}
          </div>
        </div>

        {/* Newsletter CTA */}
        <div className="text-center mt-16">
          <Card className="p-8 bg-gradient-hero border border-border/50 backdrop-blur-sm shadow-medium max-w-2xl mx-auto">
            <div className="space-y-4">
              <h3 className="text-2xl font-bold text-foreground">
                Receba novos artigos por email
              </h3>
              <p className="text-muted-foreground">
                Fique por dentro das últimas tendências em desenvolvimento web
              </p>
              <div className="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                <input 
                  type="email" 
                  placeholder="Seu melhor email"
                  className="flex-1 px-4 py-2 rounded-lg border border-border/50 bg-background/50 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-primary/50"
                />
                <Button className="bg-gradient-primary hover:shadow-glow transition-all duration-300">
                  Inscrever-se
                </Button>
              </div>
            </div>
          </Card>
        </div>
      </div>
    </section>
  );
};

export default Blog;