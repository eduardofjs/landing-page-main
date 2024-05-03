<?php

class i18n
{

    protected $language;
    protected $supported_languages = ['en', 'pt'];

    protected $full_language = [
        'en' => 'English',
        'pt' => 'Português',
    ];

    public function __construct($local = 'pt')
    {

        if (!session_id()) {
            session_start();
        }

        if (isset($_GET['lang']) && in_array($_GET['lang'], $this->getSupportedLanguage())) {
            $this->setLanguage($_GET['lang']);
            $_SESSION['lang'] = $_GET['lang'];
        } else if (isset($_SESSION['lang'])) {
            $this->setLanguage($_SESSION['lang']);
        } else {
            $this->setLanguage($local);
        }
    }

    public function setLanguage($language)
    {
        if (in_array($language, $this->supported_languages)) {
            $this->language = $language;
        } else {
            throw new Exception('language not supported');
        }
    }

    public function getCurrentLanguage()
    {
        return $this->language;
    }

    public function getCurrentFullLanguage()
    {
        return $this->full_language[$this->language];
    }

    public function getSupportedLanguage()
    {
        return $this->supported_languages;
    }

    public function getFaqDirectto()
    {
        return $this->faq_list[$this->language];
    }

    public function getFaqSellersAndBuyers()
    {
        return $this->faq_list_sellers_buyers[$this->language];
    }


    private $faq_list = [
        'pt' => [
            ['Por que a Directto foi criada?', 'A Directto foi criada para ser uma alternativa ao atual modelo de mercado da bioeconomia que é burocrático, complexo e requer um número elevado de intermediários, o que torna o acesso disponível a poucos.<br><br>A Directto simplifica o processo e capacita os produtores e indústrias locais através do acesso direto ao mercado global da bioeconomia, potencializando o impacto econômico na economia regional, o que trará melhor qualidade de vida às comunidades fazendo-as entender que a floresta é mais valiosa em pé do que cortada.'],
            ['O que é a Directto?', 'Directto é uma plataforma integrada de gestão de soluções para possibilitar aos produtores locais da bioeconomia acessar e negociar seus produtos nos mercados nacional e internacional de forma segura, simples e digital, ao mesmo tempo em que dá acesso a diferentes indústrias para acessar produtores confiáveis e verificados.'],
            ['A Directto comercializa produtos de bioeconomia?', 'Não. Na plataforma Directto os produtores e compradores negociam diretamente através de um portal digital para definir o preço final do produto.<br><br>A Directto fornecerá os meios para garantir que essa negociação ocorra sem problemas, com segurança para ambas as partes, que o produto negociado seja entregue conforme acordado e que o pagamento seja realizado de acordo com os valores acordados.'],
            ['Quais são as vantagens de usar a Directto?', 'Vamos separar isso em 3 grupos principais:
		    <br><br>Para os vendedores e compradores:
            o Eles negociam diretamente e vários intermediários do processo clássico são evitados, resultando em uma melhor margem para o vendedor, preços mais baixos para o comprador.
            o A negociação, compra de serviços adicionais, acompanhamento do processo e fechamento financeiro são feitos em uma ferramenta única, segura, simples e transparente.
            o Os vendedores terão acesso a mercados inacessíveis até agora.
            o Os compradores terão acesso a vendedores verificados, que não utilizam áreas desmatadas, respeitam as leis trabalhistas e não utilizam crianças em seu processo produtivo.
            -<br><br>Para as comunidades de produtores:
            o A melhor remuneração a ser obtida nesta nova forma de fazer negócios ajudará a garantir uma melhor qualidade de vida e dignidade, poder continuar trabalhando em suas terras e manter as crianças na escola.
            -<br><br>Para a floresta:
            o Uma vez que a vida dos produtores melhore, eles não serão levados a cortar árvores para melhorar a receita nem a deixar suas terras por falta de meios de vida lá.'],
            ['Quais produtos encontrarei no marketplace da Directto?', 'O marketplace da Directto terá produtos de bioeconomia, ou seja, plantas, frutas, óleos, castanhas e outros, em diferentes formatos de apresentação, oriundos de áreas preservadas, produzidos ou coletados por comunidades e fábricas verificadas.'],
            ['Como a Directto melhora o acesso ao mercado global de bioeconomia?', 'A Directto disponibiliza uma plataforma digital integrada para pessoas cadastradas e empresas onde os vendedores – tanto produtores quanto indústrias locais – podem  apresentar seus produtos à venda. Estes tornam-se disponível na plataforma Directto para ser acessado por potenciais compradores em todo o mundo.
            Os produtos oferecidos na plataforma são verificados quanto à origem, bem como os seus vendedores.
            O uso intuitivo e simples da plataforma diminuirá os erros de processo do modelo clássico, diminuindo os riscos da operação, agilizando o processo e permitindo melhores margens aos vendedores e preços mais baixos aos compradores.'], ['O que torna a plataforma Directto diferente das outras?', 'A Directto não compra os produtos para vender fazendo uma margem em cima disso. A negociação é direta entre vendedores e compradores.
            A Directto dará suporte aos vendedores, tanto para operar a plataforma se necessário, mas o mais importante:
            - Prospecção de potenciais compradores, apresentando os produtos oferecidos na plataforma;
            - Disponibiliza todos os serviços necessários aos vendedores para a conclusão da negociação, entrega do produto e cobrança do respectivo pagamento.
            - Acompanhamento de toda a operação – desde produtos oferecidos, etapas de negociação, fases de entrega e ciclo de pagamento;
            - Fornece acesso a soluções financeiras e logísticas dedicadas a clientes cadastrados.']
        ],
        'en' => [
            ['Why Directto was created?', 'Directto was created to be an alternative to the current bioeconomy market model which is bureaucratic, complex and requires a high number of intermediaries, what makes the access available to few.
            Directto will simplifies the process and empower the local producers and industries by the direct access to global bioeconomy market, potentializing the economic impact in the regional economy, what will bring better life quality to communities making them understand that the forest is more valuable standing than cut.'],
            ['What is Directto?', 'Directto is a solution management integrated platform to make it possible to local bioeconomy producers to access and negotiate their products in national and international markets in a safe, simple and digital way while giving access to different industries to access reliable and verified producers.'],
            ['Does Directto trades bioeconomy products?', 'No. In Directto\'s platform producers and buyers negotiate directly through a digital portal to define the final price of the product.
            Directto will provide the means to assure that this negotiation occurs smoothly, safely to both sides, that the product negotiated are delivered as agreed and that payment is performed per the values agreed.'],
            ['What are the advantages of using Directto?', 'We\'ll separate this in 3 main groups:
            - For the Buyers and sellers:
            o They negotiate directly and several intermediaries of the classical process are avoided, resulting in a better margin to the seller, lower prices for the buyer.
            o The negotiation, additional services purchase, follow-up of the process and financial closing are all done on a single, safe, simple and transparent tool.
            o Sellers will have access to markets that were unreachable to them up to now.
            o Buyers will have access to sellers verified not to use deforested areas, to respect working laws and not using children in their production process.
            - For the communities of producers:
            o The better remuneration to be obtained in this new way of making business will help to assure a better life quality and dignity, keep working in their land and keep children in school.
            - For the forest:
            o Once the producers life improves, they will not be obliged to cut trees to improve revenue nor to leave their land for due to lack of ways of living there.'],
            ['What products will I find in Directto\'s  marketplace?', 'Directto\'s marketplace will have bioeconomy products, so plants, fruits, oils, nuts, and others, in different presentation formats, originated from preserved areas, produced or collected by verified communities and factories.'],
            ['How does Directto improve the access to bioeconomy global market?', 'Directto makes available an integrated digital platform for registered persons and companies where sellers – both producers and local industries – are able to present their products for sale. These become available in the Directto platform to be accessed by potential buyers all over the world.
            The products offered in the platform are checked for origin as well it`s sellers.
            The intuitive and simple platform use decreases the process errors of classical model, lowering the operation risks, speeding up the process, and allowing better margins to the sellers and lower prices to the buyers.'],
            ['What makes Directto platform different from others?', 'Directto does not buy the products to sell making a margin on top of it. The negotiation is direct between sellers and buyers.
            Directto will provide support to sellers, both to operate the platform if needed, but most importantly:
            - Prospecting potential buyers, presenting the products being offered in the platform;
            - Making available all services required to sellers to conclude the negotiation, delivering the product and collect the respective payment.
            - Follow-up all the operation – from products offered, negotiation steps, delivery phases and payment cycle;
            - Provide access to financial and logistics solutions dedicated to registered customers.']
        ]
    ];

    private $faq_list_sellers_buyers = [
        'pt' => [
            ['Quem são os vendedores?', 'Normalmente, os vendedores são produtores, cooperativas ou indústrias locais que produzem ou transformam produtos da bioeconomia.
            Para se tornar um vendedor na plataforma, ele deve passar por um processo dedicado de verificação on-board, com o objetivo de manter a credibilidade no mercado e prepará-lo para usar a plataforma.'],
            ['Quem são os compradores?', 'Os compradores são basicamente as indústrias, que vão transformar os produtos da bioeconomia no produto final a ser disponibilizado no varejo.
            Os compradores também serão verificados através de um processo de on-board dedicado com os mesmos objetivos dos vendedores.'],
            ['O que é o processo de  on-board ?', 'Nosso on-board é o processo utilizado para:
            - Verificar as informações de identificação e localização fornecidas;
            - Fornecer informações de uso inicial da plataforma;
            - Conhecer melhor o cliente e suas expectativas;
            - Permitir a verificação dos dados do processo de rastreabilidade do produto;
            - Analisar os usuários da nossa plataforma, confiabilidade ao realizar transações de produtos de bioeconomia.
            Para obter uma conta verificada, exigimos que o usuário forneça:
            1. Certidão do registo comercial da empresa;
            2. Carteira de identidade e comprovante de endereço do utilizador;
            3. Comprovante dos dados bancários da empresa.'],
            ['Os contratos são juridicamente vinculativos?', 'Sim! Uma vez que ambas as partes concordem com os termos e condições de uma transação, esses termos e condições tornam-se uma vinculação legal. Esta é a garantia de que o comprador e o vendedor assumem total responsabilidade caso uma transação não ocorra de acordo com os termos e condições estabelecidos.'],
            ['Quanto custa?', 'Para os vendedores que se registram na plataforma e carregam suas ofertas, não custa nada.
            Para os compradores que se registram na plataforma e verificam as ofertas disponíveis, também é gratuito.
            Se uma negociação for concluída com sucesso e uma transação for iniciada, o Directto cobra uma pequena taxa. O valor da taxa dependerá de vários fatores, mas será conhecido antecipadamente, permitindo um processo de negociação totalmente controlado por ambos.'],
            ['E os pagamentos?', 'Disponibilizamos um sistema de pagamento seguro e integrado na plataforma para todos os nossos usuários. Permitindo pagamentos em diferentes moedas, permanentemente disponíveis.'],
            ['Quando o dinheiro é transferido?', 'Uma vez que o contrato é concluído, bem como a transação, o valor do pagamento do comprador é mantido em espera, até que o produto seja entregue de acordo com os termos e condições contratuais. À medida que o comprador aceita a entrega dos podutos, os fundos são imediatamente transferidos para a conta do vendedor. Os pagamentos são recebidos imediatamente após acordo de ambas as partes.'],
            ['Que serviços adicionais estão disponíveis?', 'A Directto disponibiliza serviços de logística, tramitação aduaneira, rastreamento de origem de produtos, soluções financeiras como adiantamento de recebíveis e câmbio.']
        ],
        'en' => [
            ['Who are the sellers?', 'Typically, sellers are producers, cooperatives or local industries that produce or transform bioeconomy products.
            To become a seller in the platform, they must pass by a dedicated on-board verification process, aiming to maintain credibility in the market and prepare them to use the platform.'],
            ['Who are the buyers?', 'Buyers are basically industries, which will transform the bioeconomy products in the final product to be made available in the retail parket.
            The buyers will also be verified through a dedicated on-board process with the same objectives as the sellers.'],
            ['What is on-board process?', 'Our on-board is the process used to:
            - Check the identification and location information provided;
            - Provide initial use information of the platform;
            - Better know the customer and their expectations;
            - Allow product traceability process data check;
            - Analyze our platform users, reliability and trustworthiness when making transactions of bio-ecomony products.
            In order to obtain a verified account, we require the user to provide:
            1. Certificate from the company\'s commercial registration;
            2. Citizen\'s card and proof of user\'s address;
            3. Proof of the company\'s IBAN.'],
            ['Are the contracts legally binding?', 'Yes! Once both parties agree on the terms and conditions of a transaction, those terms and conditions become a legal binding. This is the guarantee that the buyer and seller assume full responsibility if a transaction does not take place in accordance with the terms and conditions set out.'],
            ['How much does it cost?', 'For sellers registering to the platform and uploading your offers you pay nothing.
            For buyers registering to the platform and checking for available offers, it\'s also free.
            If a negotiation is successfully completed and a transaction is launched, Directto charges a small fee. The fee value will depend on several factors, but it will be known upfront, allowing a negotiation process fully controlled by both.'],
            ['What about payments?', 'We provide a safe and integrated payment system in the platform for all our users. Allowing payments using different currencies, permanently available.'],
            ['When is the money transferred?', 'Once the contract is concluded as well as the transaction, buyer\'s payment amount is kept on hold, until the product is delivered in accordance with the contractual terms and conditions. As the buyer accepts the delivery, the funds are immediately transferred to seller\'s account. Payments are received immediately upon agreement by both parties.'],
            ['What additional services are available?', 'Directto makes available services of logistics, customs processing, product origin tracking, financial solutions as advance on receivables and currency exchange.']
        ]
    ];

    public function get($key)
    {
        if (array_key_exists($key, $this->words)) {
            return $this->words[$key][$this->language];
        }
        throw new \Exception('Word not found');
    }

    private $words = [
        'home' => [
            'pt' => 'Home',
            'en' => 'Home'
        ],
        'marketplace' => [
            'pt' => 'Marketplace',
            'en' => 'Marketplace'
        ],
        'sobre' => [
            'pt' => 'Sobre',
            'en' => 'About'
        ],
        'conteudo' => [
            'pt' => 'Conteúdo',
            'en' => 'Content'
        ],
        'login' => [
            'pt' => 'Login',
            'en' => 'Login'
        ],
        'hero1' => [
            'pt' => 'Acesso simplificado aos mercados da bioeconomia para todos',
            'en' => 'Simplified access to bioeconomy markets'
        ],
        'hero2' => [
            'pt' => 'Acreditamos em conexões duradouras e inovação para o desenvolvimento sustentável',
            'en' => 'We believe in durable connections and innovation for a sustainable development'
        ],
        'heroBtn' => [
            'pt' => 'Conheça agora',
            'en' => 'Know now'
        ],
        'section1Title' => [
            'pt' => 'O mercado digital pensado para a bioeconomia',
            'en' => 'The digital marketplace conceived for bioeconomy.'
        ],
        'section1Text1' => [
            'pt' => 'Tudo o que você precisa em um só lugar',
            'en' => 'All you need in a single place'
        ],
        'section1Text2' => [
            'pt' => 'Ferramenta de uso simples e intuitivo',
            'en' => 'Simple and intuitive usage tool'
        ], 'section1Text3' => [
            'pt' => 'Maior visibilidade no mercado global e melhores oportunidades de negócios',
            'en' => 'Greater visibility for products in the global market and better business opportunities'
        ],
        'section1Text4' => [
            'pt' => 'Redução acentuada de intermediários',
            'en' => 'Fewer middleman'
        ],
        'section1Text5' => [
            'pt' => 'Apoio personalizado de especialistas, conexões duradouras',
            'en' => 'Customized support by specialists, durable connections'
        ],
        'section1Text6' => [
            'pt' => 'Gestão centralizada e transparente de toda a operação',
            'en' => 'Centralized and transparent management of the entire operation'
        ],
        'section2Text1' => [
            'pt' => 'Como funciona',
            'en' => 'How it works'
        ],
        'section2Text2' => [
            'pt' => 'Conheça melhor como simplificamos a jornada de comercialização',
            'en' => 'Learn more on how we simplify the commercialization journey'
        ],
        'section2Text3' => [
            'pt' => 'Encontre as melhores oportunidades de negócios',
            'en' => 'Find the best business opportunities'
        ],
        'section2Text4' => [
            'pt' => 'A plataforma disponibiliza informações detalhadas de diversas ofertas de produtores verificados. E também possibilita a criação de demandas para produtos não encontrados.',
            'en' => 'The platform provides detailed information on the different offers from verified producers and allows the creation of a demand for a specific product not yet offered.'
        ],
        'section3Text1' => [
            'pt' => 'Negociação inteligente e de forma transparente',
            'en' => 'Intelligent negotialtion in a transparent way'
        ],
        'section3Text2' => [
            'pt' => 'O preço final é
                        definido pelos
                        compradores e
                        vendedores
                        que negociam de forma direta e segura por meio da plataforma
                        100% digital.',
            'en' => 'The final price is negotiated and defined between buyers and sellers on a 100% digital and safe platform'
        ],
        'section4Text1' => [
            'pt' => 'Gestão
                        centralizada e transparente de toda
                        a operação
                        até a conclusão',
            'en' => 'Centralized and transparent management of the whole operation up to the conclusion'
        ],
        'section4Text2' => [
            'pt' => 'A Directto
                        empodera produtores e a indústria
                        a partir de
                        uma solução integrada, que com apoio de especialistas, torna a
                        execução da operação de ponta a ponta, inteligente e segura, com um suporte humanizado.',
            'en' => 'Dirrecto empowers producers and the industry through an integrated solution, which, with the support of specialists, makes the execution of the operation from end to end, intelligent and safe, with humanized support.'
        ],
        'section5Text1' => [
            'pt' => 'Nossos valores',
            'en' => 'Our values'
        ],
        'section5Text2' => [
            'pt' => 'A Directto ressignifica a comercialização de produtos da bioeconomia',
            'en' => 'Directto brings a new meaning to the commercialization of bioeconomy products'
        ],
        'section5Text3' => [
            'pt' => 'Conexão',
            'en' => 'Connection'
        ],
        'section5Text4' => [
            'pt' => 'Conectamos negócios, impactamos pessoas',
            'en' => 'We connect businesses and impact people'
        ],
        'section5Text5' => [
            'pt' => 'Inovação',
            'en' => 'Innovation'
        ],
        'section5Text6' => [
            'pt' => 'Facilidade',
            'en' => 'Easiness'
        ],
        'section5Text7' => [
            'pt' => 'Uma plataforma simples, acessível em todo lugar, a qualquer hora e que dispõe de especialistas para apoiar em toda a jornada',
            'en' => 'A simple platform, accessible anywhere, anytime and with experts to support your entire commercialisation journey.'
        ],
        'section5Text8' => [
            'pt' => 'Consciência',
            'en' => 'Consciousness'
        ],
        'section5Text9' => [
            'pt' => 'A Directto preza pelo desenvolvimento socioeconômico sustentável com base em produtos compatíveis com a floresta',
            'en' => 'Directto values sustainable socio-economic development based on forest-compatible products.'
        ],
        'section5Text10' => [
            'pt' => 'Transparência',
            'en' => 'Transparency'
        ],
        'section5Text11' => [
            'pt' => 'Todas as informações da jornada de comercialização são disponibilizadas em único lugar com acesso fácil e intuitivo',
            'en' => 'All information on the commercialization journey is available in one place with easy and intuitive access.'
        ],
        'section5Text12' => [
            'pt' => 'A Directto traz uma nova experiência para a jornada de comercialização integrando em único lugar os melhores parceiros do mercado',
            'en' => 'Directto brings a new experience to the bioeconomy commercialisation journey, integrating the best market players into a single platform.'
        ],
        'home' => [
            'pt' => 'Home',
            'en' => 'Home'
        ],
        'comoFunciona' => [
            'pt' => 'Como funciona',
            'en' => 'How it works'
        ],
        'faq' => [
            'pt' => 'FAQ',
            'en' => 'FAQ'
        ],
        'marketplace' => [
            'pt' => 'Marketplace',
            'en' => 'Marketplace'
        ],
        'mercado' => [
            'pt' => 'Mercado',
            'en' => 'Brazilian Market'
        ],
        'internacional' => [
            'pt' => 'Internacional',
            'en' => 'Internacitional Market'
        ],
        'dashboard' => [
            'pt' => 'Dashboard',
            'en' => 'Dashboard'
        ],
        'sobre' => [
            'pt' => 'Sobre',
            'en' => 'About'
        ],
        'missao' => [
            'pt' => 'Missão',
            'en' => 'Mission'
        ],
        'visao' => [
            'pt' => 'Visão',
            'en' => 'Vision'
        ],
        'valores' => [
            'pt' => 'Valores',
            'en' => 'Values'
        ],
        'time' => [
            'pt' => 'Time',
            'en' => 'Team'
        ],
        'pessoasDirectto' => [
            'pt' => 'Veja as pessoas por trás da Directto',
            'en' => 'See the team behind Directto'
        ],
        'sobreMissao' => [
            'pt' => 'Tornar a jornada de comercialização de produtos da bioeconomia da Amazônia, uma experiência digital, simples e transparente.',
            'en' => 'To make the Amazon bioeconomy products commercialization, a digital, simple and transparent experience.'
        ],
        'sobreVisao' => [
            'pt' => 'Ser a primeira escolha dos clientes de plataformas de negócio da Bioeconomia da Amazônia, impulsionando a economia local e a preservação da floresta.',
            'en' => 'To be the first choice of Amazon bioeconomy business platforms customers, boosting local economy and forest preservation.'
        ],
        'sobreValores' => [
            'pt' => 'Preservação e diversidade, confiabilidade, simplicidade e comércio ético.',
            'en' => 'Preservation and diversity, reliability, simplicity and fair trade.'
        ],
        'conteudo' => [
            'pt' => 'Conteúdo',
            'en' => 'Contents'
        ],
        'blog' => [
            'pt' => 'Blog',
            'en' => 'Blog'
        ],
        'cases' => [
            'pt' => 'Cases',
            'en' => 'Cases'
        ],
        'quemSomos' => [
            'pt' => 'Quem somos',
            'en' => 'Who we are'
        ],
        'login' => [
            'pt' => 'Login',
            'en' => 'Login'
        ],
        'nome' => [
            'pt' => 'Nome',
            'en' => 'Name'
        ],
        'phone' => [
            'pt' => 'Telefone',
            'en' => 'Phone'
        ],
        'email' => [
            'pt' => 'Email',
            'en' => 'Email'
        ],
        'endereco' => [
            'pt' => 'Endereço',
            'en' => 'Address'
        ],
        'contato' => [
            'pt' => 'Contato',
            'en' => 'Contact'
        ],
        'copyrigth' => [
            'pt' => 'todos os<br>direitos reservados.',
            'en' => 'All<br>rights reserved.'
        ],
        'vejaTambem' => [
            'pt' => 'Veja também',
            'en' => 'See also'
        ],
        'criarUmaConta' => [
            'pt' => 'Criar uma conta',
            'en' => 'Create an account'
        ],
        'politicaPrivacidade' => [
            'pt' => 'Política de privacidade',
            'en' => 'Privacy policy'
        ],
        'termosUso' => [
            'pt' => 'Termos e condições',
            'en' => 'Terms of use'
        ],
        'cookies' => [
            'pt' => 'Cookies e LGPD',
            'en' => 'Cookies and LGPD'
        ],
        'preenchaSeusDados' => [
            'pt' => 'Preencha seus dados',
            'en' => 'Fill in your information'
        ],
        'solicitarDemonstração' => [
            'pt' => 'Solicitar demonstração',
            'en' => 'Request a demo'
        ],
        'formHeadertenhaAcesso' => [
            'pt' => 'Tenha acesso a uma demo da nossa plataforma e converse com um especialista sobre as nossas soluções',
            'en' => 'Access a platform demo and talk to a specialist about our solutions.'
        ],
        'vendedoresCompradores' => [
            'pt' => 'Vendedores e compradores',
            'en' => 'Sellers and buyers'
        ],
        'mostrarMais' => [
            'pt' => 'Mostrar mais',
            'en' => 'Show more'
        ],
        'mostrarMenos' => [
            'pt' => 'Mostrar menos',
            'en' => 'Show less'
        ],
        'casesSucesso' => [
            'pt' => 'Cases de sucesso',
            'en' => 'Success cases'
        ],
        'resultadosComprovados' => [
            'pt' => 'Resultados comprovados',
            'en' => 'Proven results'
        ],
        'case1' => [
            'pt' => 'Conheça histórias de sucesso de nossos clientes<br>com a plataforma Directto',
            'en' => 'Meet the success stories of our customers<br>with the Directto platform'
        ],
        'saibaMais' => [
            'pt' => 'Saiba mais',
            'en' => 'Learn more'
        ],
        'idioma' => [
            'pt' => 'Idioma',
            'en' => 'Language'
        ],
    ];
}
