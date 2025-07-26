import { useState } from 'react';
import { Card } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Textarea } from '@/components/ui/textarea';
import { Badge } from '@/components/ui/badge';
import { useToast } from '@/components/ui/use-toast';
import { 
  Mail, 
  Phone, 
  MapPin, 
  Clock, 
  Send, 
  Sparkles,
  MessageCircle,
  Linkedin,
  Github,
  Instagram
} from 'lucide-react';

const Contact = () => {
  const { toast } = useToast();
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    company: '',
    budget: '',
    project: '',
    message: ''
  });
  const [isOptimizing, setIsOptimizing] = useState(false);
  const [isSubmitting, setIsSubmitting] = useState(false);

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement | HTMLSelectElement>) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value
    });
  };

  const optimizeWithAI = async () => {
    if (!formData.project.trim()) {
      toast({
        title: "Atenção",
        description: "Por favor, descreva seu projeto antes de otimizar com IA",
        variant: "destructive"
      });
      return;
    }

    setIsOptimizing(true);
    
    try {
      // Simulação de chamada para IA - aqui você integraria com a API da OpenAI ou similar
      await new Promise(resolve => setTimeout(resolve, 2000));
      
      const optimizedMessage = `Olá Guilherme! 

Tenho interesse em discutir um projeto que acredito ser uma excelente oportunidade de colaboração.

SOBRE O PROJETO:
${formData.project}

CONTEXTO DA EMPRESA:
${formData.company ? `Trabalho na ${formData.company}, e` : 'N'} estamos buscando um desenvolvedor full stack experiente para ${formData.project.toLowerCase().includes('integra') ? 'implementar integrações' : formData.project.toLowerCase().includes('api') ? 'desenvolver APIs' : 'criar uma solução'} robusta e escalável.

EXPECTATIVAS:
- Código limpo e bem documentado
- Arquitetura pensada para crescimento
- Prazo de entrega realista
- Comunicação clara durante todo o processo

PRÓXIMOS PASSOS:
Gostaria de agendar uma conversa para discutir detalhes técnicos, cronograma e investimento necessário.

Quando você teria disponibilidade para uma call inicial?

Obrigado pela atenção!`;

      setFormData({
        ...formData,
        message: optimizedMessage
      });

      toast({
        title: "Mensagem otimizada! ✨",
        description: "Sua mensagem foi melhorada pela IA para aumentar as chances de resposta",
      });
    } catch (error) {
      toast({
        title: "Erro",
        description: "Não foi possível otimizar a mensagem. Tente novamente.",
        variant: "destructive"
      });
    } finally {
      setIsOptimizing(false);
    }
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setIsSubmitting(true);

    try {
      // Simulação de envio - aqui você integraria com seu backend
      await new Promise(resolve => setTimeout(resolve, 1500));
      
      toast({
        title: "Mensagem enviada com sucesso! 🚀",
        description: "Retornarei em até 24 horas. Obrigado pelo contato!",
      });

      setFormData({
        name: '',
        email: '',
        company: '',
        budget: '',
        project: '',
        message: ''
      });
    } catch (error) {
      toast({
        title: "Erro ao enviar",
        description: "Tente novamente ou me chame no WhatsApp",
        variant: "destructive"
      });
    } finally {
      setIsSubmitting(false);
    }
  };

  const contactInfo = [
    {
      icon: Mail,
      title: 'Email',
      value: 'contato@guilhermecota.dev',
      link: 'mailto:contato@guilhermecota.dev',
      color: 'primary'
    },
    {
      icon: Phone,
      title: 'WhatsApp',
      value: '+55 (31) 99999-9999',
      link: 'https://wa.me/5531999999999',
      color: 'accent'
    },
    {
      icon: MapPin,
      title: 'Localização',
      value: 'Ouro Preto, MG',
      color: 'primary'
    },
    {
      icon: Clock,
      title: 'Horário',
      value: 'Seg-Sex: 9h-18h',
      color: 'accent'
    }
  ];

  const socialLinks = [
    { icon: Github, link: 'https://github.com/guilhermecota', label: 'GitHub' },
    { icon: Linkedin, link: 'https://linkedin.com/in/guilhermecota', label: 'LinkedIn' },
    { icon: Instagram, link: 'https://instagram.com/guilhermecota', label: 'Instagram' },
  ];

  return (
    <section id="contato" className="py-20 lg:py-32 bg-gradient-hero">
      <div className="container mx-auto px-4 lg:px-6">
        <div className="text-center mb-16">
          <h2 className="text-3xl lg:text-5xl font-bold text-foreground mb-6">
            Vamos <span className="bg-gradient-primary bg-clip-text text-transparent">Conversar</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Pronto para transformar sua ideia em realidade? Entre em contato e vamos discutir seu projeto
          </p>
        </div>

        <div className="grid lg:grid-cols-2 gap-12">
          {/* Contact Info */}
          <div className="space-y-8 animate-slide-in">
            <div className="space-y-6">
              <h3 className="text-2xl font-semibold text-foreground">
                Informações de Contato
              </h3>
              
              <div className="grid gap-4">
                {contactInfo.map((info, index) => (
                  <Card 
                    key={index}
                    className="p-4 bg-gradient-glass border border-border/50 backdrop-blur-sm hover:shadow-soft transition-all duration-300 group"
                  >
                    <div className="flex items-center gap-4">
                      <div className={`w-12 h-12 rounded-xl flex items-center justify-center transition-all duration-300 ${
                        info.color === 'primary' ? 'bg-gradient-primary' : 'bg-gradient-accent'
                      } group-hover:shadow-glow`}>
                        <info.icon className="w-6 h-6 text-white" />
                      </div>
                      <div>
                        <div className="text-sm text-muted-foreground">{info.title}</div>
                        {info.link ? (
                          <a 
                            href={info.link}
                            target={info.link.startsWith('http') ? '_blank' : undefined}
                            rel={info.link.startsWith('http') ? 'noopener noreferrer' : undefined}
                            className="text-foreground font-medium hover:text-primary transition-colors"
                          >
                            {info.value}
                          </a>
                        ) : (
                          <div className="text-foreground font-medium">{info.value}</div>
                        )}
                      </div>
                    </div>
                  </Card>
                ))}
              </div>
            </div>

            {/* Social Links */}
            <div className="space-y-4">
              <h4 className="text-lg font-semibold text-foreground">Redes Sociais</h4>
              <div className="flex gap-4">
                {socialLinks.map((social, index) => (
                  <a
                    key={index}
                    href={social.link}
                    target="_blank"
                    rel="noopener noreferrer"
                    className="p-3 rounded-xl bg-gradient-glass border border-border/50 hover:border-primary/50 transition-all duration-300 hover:shadow-glow group"
                    aria-label={social.label}
                  >
                    <social.icon className="w-6 h-6 text-muted-foreground group-hover:text-primary transition-colors" />
                  </a>
                ))}
              </div>
            </div>

            {/* Quick Stats */}
            <Card className="p-6 bg-gradient-glass border border-border/50 backdrop-blur-sm">
              <h4 className="text-lg font-semibold text-foreground mb-4">Por que escolher meu trabalho?</h4>
              <div className="space-y-3">
                <div className="flex items-center gap-2">
                  <Badge variant="secondary" className="bg-gradient-accent text-white">✓</Badge>
                  <span className="text-muted-foreground">Resposta em até 24 horas</span>
                </div>
                <div className="flex items-center gap-2">
                  <Badge variant="secondary" className="bg-gradient-accent text-white">✓</Badge>
                  <span className="text-muted-foreground">Reunião inicial gratuita</span>
                </div>
                <div className="flex items-center gap-2">
                  <Badge variant="secondary" className="bg-gradient-accent text-white">✓</Badge>
                  <span className="text-muted-foreground">Proposta detalhada sem compromisso</span>
                </div>
                <div className="flex items-center gap-2">
                  <Badge variant="secondary" className="bg-gradient-accent text-white">✓</Badge>
                  <span className="text-muted-foreground">7+ anos de experiência comprovada</span>
                </div>
              </div>
            </Card>
          </div>

          {/* Contact Form */}
          <Card className="p-8 bg-gradient-glass border border-border/50 backdrop-blur-sm shadow-medium animate-fade-in" style={{ animationDelay: '0.3s' }}>
            <form onSubmit={handleSubmit} className="space-y-6">
              <div className="space-y-4">
                <h3 className="text-2xl font-semibold text-foreground">Envie uma Mensagem</h3>
                
                <div className="grid md:grid-cols-2 gap-4">
                  <div>
                    <label className="text-sm font-medium text-foreground mb-2 block">
                      Nome *
                    </label>
                    <Input
                      name="name"
                      value={formData.name}
                      onChange={handleChange}
                      placeholder="Seu nome completo"
                      required
                      className="bg-background/50 border-border/50 focus:border-primary/50"
                    />
                  </div>
                  
                  <div>
                    <label className="text-sm font-medium text-foreground mb-2 block">
                      Email *
                    </label>
                    <Input
                      type="email"
                      name="email"
                      value={formData.email}
                      onChange={handleChange}
                      placeholder="seu@email.com"
                      required
                      className="bg-background/50 border-border/50 focus:border-primary/50"
                    />
                  </div>
                </div>

                <div className="grid md:grid-cols-2 gap-4">
                  <div>
                    <label className="text-sm font-medium text-foreground mb-2 block">
                      Empresa/Organização
                    </label>
                    <Input
                      name="company"
                      value={formData.company}
                      onChange={handleChange}
                      placeholder="Nome da empresa"
                      className="bg-background/50 border-border/50 focus:border-primary/50"
                    />
                  </div>
                  
                  <div>
                    <label className="text-sm font-medium text-foreground mb-2 block">
                      Orçamento Estimado
                    </label>
                    <select
                      name="budget"
                      value={formData.budget}
                      onChange={handleChange}
                      className="w-full px-3 py-2 rounded-md border border-border/50 bg-background/50 focus:outline-none focus:border-primary/50 transition-colors"
                    >
                      <option value="">Selecione uma faixa</option>
                      <option value="R$ 5k - 15k">R$ 5k - 15k</option>
                      <option value="R$ 15k - 30k">R$ 15k - 30k</option>
                      <option value="R$ 30k - 50k">R$ 30k - 50k</option>
                      <option value="R$ 50k+">R$ 50k+</option>
                      <option value="Consultoria">Apenas Consultoria</option>
                    </select>
                  </div>
                </div>

                <div>
                  <label className="text-sm font-medium text-foreground mb-2 block">
                    Resumo do Projeto *
                  </label>
                  <Textarea
                    name="project"
                    value={formData.project}
                    onChange={handleChange}
                    placeholder="Descreva brevemente seu projeto, tecnologias envolvidas e principais desafios..."
                    required
                    rows={4}
                    className="bg-background/50 border-border/50 focus:border-primary/50 resize-none"
                  />
                  <Button
                    type="button"
                    variant="outline"
                    size="sm"
                    onClick={optimizeWithAI}
                    disabled={isOptimizing || !formData.project.trim()}
                    className="mt-2 border-accent/50 text-accent hover:bg-accent/10 transition-all duration-300"
                  >
                    {isOptimizing ? (
                      <>
                        <div className="w-4 h-4 border-2 border-accent border-t-transparent rounded-full animate-spin mr-2" />
                        Otimizando...
                      </>
                    ) : (
                      <>
                        <Sparkles className="w-4 h-4 mr-2" />
                        Otimizar com IA
                      </>
                    )}
                  </Button>
                </div>

                <div>
                  <label className="text-sm font-medium text-foreground mb-2 block">
                    Mensagem Completa *
                  </label>
                  <Textarea
                    name="message"
                    value={formData.message}
                    onChange={handleChange}
                    placeholder="Detalhes adicionais, cronograma desejado, dúvidas específicas..."
                    required
                    rows={6}
                    className="bg-background/50 border-border/50 focus:border-primary/50 resize-none"
                  />
                </div>
              </div>

              <div className="flex flex-col sm:flex-row gap-3">
                <Button
                  type="submit"
                  disabled={isSubmitting}
                  className="flex-1 bg-gradient-primary hover:shadow-glow transition-all duration-300"
                >
                  {isSubmitting ? (
                    <>
                      <div className="w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin mr-2" />
                      Enviando...
                    </>
                  ) : (
                    <>
                      <Send className="w-4 h-4 mr-2" />
                      Enviar Mensagem
                    </>
                  )}
                </Button>
                
                <Button
                  type="button"
                  variant="outline"
                  onClick={() => window.open('https://wa.me/5531999999999', '_blank')}
                  className="border-accent/50 text-accent hover:bg-accent/10"
                >
                  <MessageCircle className="w-4 h-4 mr-2" />
                  WhatsApp
                </Button>
              </div>
            </form>
          </Card>
        </div>
      </div>
    </section>
  );
};

export default Contact;