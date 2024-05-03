export default class i18n {
  constructor(local = 'pt') {
    this.locale = local
  }

  setLocale(locale) {
    this.locale = locale
  }

  getFaqDirectto() {
    return this.faq_list[this.locale]
  }

  getFaqSellersAndBuyers() {
    return this.faq_list_sellers_buyers[this.locale]
  }

  faq_list = {
    pt: [
      {
        pergunta: `Por que a Directto foi criada?`,
        resposta: `A Directto foi criada para ser uma alternativa ao atual modelo de mercado da bioeconomia que é burocrático, complexo e requer um número elevado de intermediários, o que torna o acesso disponível a poucos.<br><br>A Directto simplifica o processo e capacita os produtores e indústrias locais através do acesso direto ao mercado global da bioeconomia, potencializando o impacto econômico na economia regional, o que trará melhor qualidade de vida às comunidades fazendo-as entender que a floresta é mais valiosa em pé do que cortada.`,
      },
      {
        pergunta: `O que é a Directto?`,
        resposta: `Directto é uma plataforma integrada de gestão de soluções para possibilitar aos produtores locais da bioeconomia acessar e negociar seus produtos nos mercados nacional e internacional de forma segura, simples e digital, ao mesmo tempo em que dá acesso a diferentes indústrias para acessar produtores confiáveis e verificados.`,
      },
      {
        pergunta: `A Directto comercializa produtos de bioeconomia?`,
        resposta: `Não. Na plataforma Directto os produtores e compradores negociam diretamente através de um portal digital para definir o preço final do produto.<br><br>A Directto fornecerá os meios para garantir que essa negociação ocorra sem problemas, com segurança para ambas as partes, que o produto negociado seja entregue conforme acordado e que o pagamento seja realizado de acordo com os valores acordados.`,
      },
      {
        pergunta: `Quais são as vantagens de usar a Directto?`,
        resposta: `Vamos separar isso em 3 grupos principais:
		    <br><br>Para os vendedores e compradores:
            o Eles negociam diretamente e vários intermediários do processo clássico são evitados, resultando em uma melhor margem para o vendedor, preços mais baixos para o comprador.
            o A negociação, compra de serviços adicionais, acompanhamento do processo e fechamento financeiro são feitos em uma ferramenta única, segura, simples e transparente.
            o Os vendedores terão acesso a mercados inacessíveis até agora.
            o Os compradores terão acesso a vendedores verificados, que não utilizam áreas desmatadas, respeitam as leis trabalhistas e não utilizam crianças em seu processo produtivo.
            -<br><br>Para as comunidades de produtores:
            o A melhor remuneração a ser obtida nesta nova forma de fazer negócios ajudará a garantir uma melhor qualidade de vida e dignidade, poder continuar trabalhando em suas terras e manter as crianças na escola.
            -<br><br>Para a floresta:
            o Uma vez que a vida dos produtores melhore, eles não serão levados a cortar árvores para melhorar a receita nem a deixar suas terras por falta de meios de vida lá.`,
      },
      {
        pergunta: `Quais produtos encontrarei no marketplace da Directto?`,
        resposta: `O marketplace da Directto terá produtos de bioeconomia, ou seja, plantas, frutas, óleos, castanhas e outros, em diferentes formatos de apresentação, oriundos de áreas preservadas, produzidos ou coletados por comunidades e fábricas verificadas.`,
      },
      {
        pergunta: `Como a Directto melhora o acesso ao mercado global de bioeconomia?`,
        resposta: `A Directto disponibiliza uma plataforma digital integrada para pessoas cadastradas e empresas onde os vendedores – tanto produtores quanto indústrias locais – podem  apresentar seus produtos à venda. Estes tornam-se disponível na plataforma Directto para ser acessado por potenciais compradores em todo o mundo.
            Os produtos oferecidos na plataforma são verificados quanto à origem, bem como os seus vendedores.
            O uso intuitivo e simples da plataforma diminuirá os erros de processo do modelo clássico, diminuindo os riscos da operação, agilizando o processo e permitindo melhores margens aos vendedores e preços mais baixos aos compradores.`,
      },
      {
        pergunta: `O que torna a plataforma Directto diferente das outras?`,
        resposta: `A Directto não compra os produtos para vender fazendo uma margem em cima disso. A negociação é direta entre vendedores e compradores.
            A Directto dará suporte aos vendedores, tanto para operar a plataforma se necessário, mas o mais importante:
            - Prospecção de potenciais compradores, apresentando os produtos oferecidos na plataforma;
            - Disponibiliza todos os serviços necessários aos vendedores para a conclusão da negociação, entrega do produto e cobrança do respectivo pagamento.
            - Acompanhamento de toda a operação – desde produtos oferecidos, etapas de negociação, fases de entrega e ciclo de pagamento;
            - Fornece acesso a soluções financeiras e logísticas dedicadas a clientes cadastrados.`,
      },
    ],
    en: [
      {
        pergunta: `Why Directto was created?`,
        resposta: `Directto was created to be an alternative to the current bioeconomy market model which is bureaucratic, complex and requires a high number of intermediaries, what makes the access available to few.
            Directto will simplifies the process and empower the local producers and industries by the direct access to global bioeconomy market, potentializing the economic impact in the regional economy, what will bring better life quality to communities making them understand that the forest is more valuable standing than cut.`,
      },
      {
        pergunta: `What is Directto?`,
        resposta: `Directto is a solution management integrated platform to make it possible to local bioeconomy producers to access and negotiate their products in national and international markets in a safe, simple and digital way while giving access to different industries to access reliable and verified producers.`,
      },
      {
        pergunta: `Does Directto trades bioeconomy products?`,
        resposta: `No. In Directto\'s platform producers and buyers negotiate directly through a digital portal to define the final price of the product.
            Directto will provide the means to assure that this negotiation occurs smoothly, safely to both sides, that the product negotiated are delivered as agreed and that payment is performed per the values agreed.`,
      },
      {
        pergunta: `What are the advantages of using Directto?`,
        resposta: `We\'ll separate this in 3 main groups:
            - For the Buyers and sellers:
            o They negotiate directly and several intermediaries of the classical process are avoided, resulting in a better margin to the seller, lower prices for the buyer.
            o The negotiation, additional services purchase, follow-up of the process and financial closing are all done on a single, safe, simple and transparent tool.
            o Sellers will have access to markets that were unreachable to them up to now.
            o Buyers will have access to sellers verified not to use deforested areas, to respect working laws and not using children in their production process.
            - For the communities of producers:
            o The better remuneration to be obtained in this new way of making business will help to assure a better life quality and dignity, keep working in their land and keep children in school.
            - For the forest:
            o Once the producers life improves, they will not be obliged to cut trees to improve revenue nor to leave their land for due to lack of ways of living there.`,
      },
      {
        pergunta: `What products will I find in Directto's  marketplace?`,
        resposta: `Directto's marketplace will have bioeconomy products, so plants, fruits, oils, nuts, and others, in different presentation formats, originated from preserved areas, produced or collected by verified communities and factories.`,
      },
      {
        pergunta: `How does Directto improve the access to bioeconomy global market?`,
        resposta: `Directto makes available an integrated digital platform for registered persons and companies where sellers – both producers and local industries – are able to present their products for sale. These become available in the Directto platform to be accessed by potential buyers all over the world.
            The products offered in the platform are checked for origin as well it\`s sellers.
            The intuitive and simple platform use decreases the process errors of classical model, lowering the operation risks, speeding up the process, and allowing better margins to the sellers and lower prices to the buyers.`,
      },
      {
        pergunta: `What makes Directto platform different from others?`,
        resposta: `Directto does not buy the products to sell making a margin on top of it. The negotiation is direct between sellers and buyers.
            Directto will provide support to sellers, both to operate the platform if needed, but most importantly:
            - Prospecting potential buyers, presenting the products being offered in the platform;
            - Making available all services required to sellers to conclude the negotiation, delivering the product and collect the respective payment.
            - Follow-up all the operation – from products offered, negotiation steps, delivery phases and payment cycle;
            - Provide access to financial and logistics solutions dedicated to registered customers.`,
      },
    ],
  }

  faq_list_sellers_buyers = {
    pt: [
      {
        pergunta: `Quem são os vendedores?`,
        resposta: `Normalmente, os vendedores são produtores, cooperativas ou indústrias locais que produzem ou transformam produtos da bioeconomia.
            Para se tornar um vendedor na plataforma, ele deve passar por um processo dedicado de verificação on-board, com o objetivo de manter a credibilidade no mercado e prepará-lo para usar a plataforma.`,
      },
      {
        pergunta: `Quem são os compradores?`,
        resposta: `Os compradores são basicamente as indústrias, que vão transformar os produtos da bioeconomia no produto final a ser disponibilizado no varejo.
            Os compradores também serão verificados através de um processo de on-board dedicado com os mesmos objetivos dos vendedores.`,
      },
      {
        pergunta: `O que é o processo de  on-board ?`,
        resposta: `Nosso on-board é o processo utilizado para:
            - Verificar as informações de identificação e localização fornecidas;
            - Fornecer informações de uso inicial da plataforma;
            - Conhecer melhor o cliente e suas expectativas;
            - Permitir a verificação dos dados do processo de rastreabilidade do produto;
            - Analisar os usuários da nossa plataforma, confiabilidade ao realizar transações de produtos de bioeconomia.
            Para obter uma conta verificada, exigimos que o usuário forneça:
            1. Certidão do registo comercial da empresa;
            2. Carteira de identidade e comprovante de endereço do utilizador;
            3. Comprovante dos dados bancários da empresa.`,
      },
      {
        pergunta: `Os contratos são juridicamente vinculativos?`,
        resposta: `Sim! Uma vez que ambas as partes concordem com os termos e condições de uma transação, esses termos e condições tornam-se uma vinculação legal. Esta é a garantia de que o comprador e o vendedor assumem total responsabilidade caso uma transação não ocorra de acordo com os termos e condições estabelecidos.`,
      },
      {
        pergunta: `Quanto custa?`,
        resposta: `Para os vendedores que se registram na plataforma e carregam suas ofertas, não custa nada.
            Para os compradores que se registram na plataforma e verificam as ofertas disponíveis, também é gratuito.
            Se uma negociação for concluída com sucesso e uma transação for iniciada, o Directto cobra uma pequena taxa. O valor da taxa dependerá de vários fatores, mas será conhecido antecipadamente, permitindo um processo de negociação totalmente controlado por ambos.`,
      },
      {
        pergunta: `E os pagamentos?`,
        resposta: `Disponibilizamos um sistema de pagamento seguro e integrado na plataforma para todos os nossos usuários. Permitindo pagamentos em diferentes moedas, permanentemente disponíveis.`,
      },
      {
        pergunta: `Quando o dinheiro é transferido?`,
        resposta: `Uma vez que o contrato é concluído, bem como a transação, o valor do pagamento do comprador é mantido em espera, até que o produto seja entregue de acordo com os termos e condições contratuais. À medida que o comprador aceita a entrega dos podutos, os fundos são imediatamente transferidos para a conta do vendedor. Os pagamentos são recebidos imediatamente após acordo de ambas as partes.`,
      },
      {
        pergunta: `Que serviços adicionais estão disponíveis?`,
        resposta: `A Directto disponibiliza serviços de logística, tramitação aduaneira, rastreamento de origem de produtos, soluções financeiras como adiantamento de recebíveis e câmbio.`,
      },
    ],
    en: [
      {
        pergunta: `Who are the sellers?`,
        resposta: `Typically, sellers are producers, cooperatives or local industries that produce or transform bioeconomy products.
            To become a seller in the platform, they must pass by a dedicated on-board verification process, aiming to maintain credibility in the market and prepare them to use the platform.`,
      },
      {
        pergunta: `Who are the buyers?`,
        resposta: `Buyers are basically industries, which will transform the bioeconomy products in the final product to be made available in the retail parket.
            The buyers will also be verified through a dedicated on-board process with the same objectives as the sellers.`,
      },
      {
        pergunta: `What is on-board process?`,
        resposta: `Our on-board is the process used to:
            - Check the identification and location information provided;
            - Provide initial use information of the platform;
            - Better know the customer and their expectations;
            - Allow product traceability process data check;
            - Analyze our platform users, reliability and trustworthiness when making transactions of bio-ecomony products.
            In order to obtain a verified account, we require the user to provide:
            1. Certificate from the company\'s commercial registration;
            2. Citizen\'s card and proof of user\'s address;
            3. Proof of the company\'s IBAN.`,
      },
      {
        pergunta: `Are the contracts legally binding?`,
        resposta: `Yes! Once both parties agree on the terms and conditions of a transaction, those terms and conditions become a legal binding. This is the guarantee that the buyer and seller assume full responsibility if a transaction does not take place in accordance with the terms and conditions set out.`,
      },
      {
        pergunta: `How much does it cost?`,
        resposta: `For sellers registering to the platform and uploading your offers you pay nothing.
            For buyers registering to the platform and checking for available offers, it\'s also free.
            If a negotiation is successfully completed and a transaction is launched, Directto charges a small fee. The fee value will depend on several factors, but it will be known upfront, allowing a negotiation process fully controlled by both.`,
      },
      {
        pergunta: `What about payments?`,
        resposta: `We provide a safe and integrated payment system in the platform for all our users. Allowing payments using different currencies, permanently available.`,
      },
      {
        pergunta: `When is the money transferred?`,
        resposta: `Once the contract is concluded as well as the transaction, buyer\'s payment amount is kept on hold, until the product is delivered in accordance with the contractual terms and conditions. As the buyer accepts the delivery, the funds are immediately transferred to seller\'s account. Payments are received immediately upon agreement by both parties.`,
      },
      {
        pergunta: `What additional services are available?`,
        resposta: `Directto makes available services of logistics, customs processing, product origin tracking, financial solutions as advance on receivables and currency exchange.`,
      },
    ],
  }
}
