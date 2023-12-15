# Testes

Neste projeto serão realizados dois tipos de testes:

 - O **Teste de Software**, que utiliza uma abordadem de caixa preta, e tem por objetivo verificar a conformidade do software com os requisitos funcionais e não funcionais do sistema.
 - O **Teste de Usabilidade**, que busca avaliar a qualidade do uso do sistema por um usuário do público alvo. 

A documentação dos testes é dividida nas seguintes seções:

 - [Plano de Testes de Software](#plano-de-testes-de-software)
 - [Registro dos Testes de Software](#registro-dos-testes-de-software)
 - [Avaliação dos Testes de Software](#avaliação-dos-testes-de-software)
 - [Cenários de Teste de Usabilidade](#cenários-de-teste-de-usabilidade)
 - [Registro dos Testes de Usabilidade](#registro-dos-testes-de-usabilidade)
 - [Avaliação dos Testes de Usabilidade](#avaliação-dos-testes-de-usabilidade)

# Teste de Software

Nesta seção o grupo deverá documentar os testes de software que verificam a correta implementação dos requisitos funcionais e não funcionais do software.

## Plano de Testes de Software

Preencha a tabela com o plano dos testes. Para cada Caso de Teste (CT), associe qual o Requisito  Funcional ou não funcional que ele está verificando. Associe também a página (ou artefato) onde o teste será realizado e descreva o cenário do teste. Veja a tabela de exemplo.


**Caso de Teste** | **CT01 - Cadastro do usúario**
 :--------------: | ------------
**Procedimento**  | 1) Usuário acessa a página de cadastro e informa nome, email, telefone, senha, cidade e situação (perdeu, achou ou quer adotar um pet) e clica no botão "pronto? vamos continuar".<br>2) A aplicação verifica se os dados são válidos, informa ao usuário caso não sejam e os grava no banco de dados. Dando continuidade para a próxima página (que depende da situação escolhida)
**Requisitos associados** | RF-001
**Resultado esperado** | Prosseguir para o cadastro do pet (caso a situação seja perdi/achei o pet) ou direcionamento para o feed.
**Dados de entrada** | Inserção de dados válidos no formulário de cadastro, e na tabela "usuarios" no banco de dados.
**Resultado obtido** | Sucesso.

**Caso de Teste** | **CT02 - Criação do anúncio**
 :--------------: | ------------
**Procedimento**  | 1) Usuário cria o anúncio do pet, preenchendo as informações nome (caso esteja o procurando), espécie, genero, descrição e envia uma imagem do animal.<br> 3) A aplicação armazena os dados e direciona o usuário para o anúncio criado.
**Requisitos associados** | RF-001
**Resultado esperado** | Criação do anúncio.
**Dados de entrada** | Inserção de dados válidos na tabela "pet" no banco de dados.
**Resultado obtido** | Sucesso.

**Caso de Teste** | **CT02 - Filtragem na página de anúncios**
 :--------------: | ------------
**Procedimento**  | 1) Usuário seleciona pelo filtro na página o genêro, espécie e cidade (ou somente um dos campos) e clica em "filtrar", o anúncio com as características selecionadas é apresentado e assim que escolhido, o usúario é direcionado para sua página.<br> 3) A aplicação filtra os dados selecionados, apresentado os anúncios que correspondem e caso selecionados, direciona o usuário para o anúncio.
**Requisitos associados** | RF-001
**Resultado esperado** | Filtragem e apresentação da página de anúncio.
**Dados de entrada** | Filtragem entre os dados válidos na tabela "pet" no banco de dados.
**Resultado obtido** | Sucesso.

## Registro dos Testes de Software

Esta seção deve apresentar o relatório com as evidências dos testes de software realizados no sistema pela equipe, baseado no plano de testes pré-definido. Documente cada caso de teste apresentando um vídeo ou animação que comprove o funcionamento da funcionalidade. Veja os exemplos a seguir.

|*Caso de Teste*                                 |*TC-01 - Cadastro de usúario*                                         |
|---|---|
|Requisito Associado | RF-004 - Usúario entra na página de login, seleciona a opção de cadastro e preenche as informações|
|Link do vídeo do teste realizado: | [https://1drv.ms/u/s!AhD2JqpOUvJChapRtRSQ9vPzbNLwGA?e=mxZs6t](https://vimeo.com/894743076?share=copy)| 

|*Caso de Teste*                                 |*TC-02 - Criação do anúncio*                                         |
|---|---|
|Requisito Associado | RF-004 - Usuário preenche todas as informações relacionadas ao pet e cria um anúncio|
|Link do vídeo do teste realizado: | [https://1drv.ms/v/s!AhD2JqpOUvJChapQ8CPXL-TI_A7iVg?e=spD3Ar](https://vimeo.com/894743404?share=copy) | 

|*Caso de Teste*                                 |*TC-02 - Filtragem na página de anúncios*                                         |
|---|---|
|Requisito Associado | RF-004 - Usuário, na página de anúncios preenche um ou mais campos no filtro e entra em um anúncio correspondente|
|Link do vídeo do teste realizado: | [https://1drv.ms/v/s!AhD2JqpOUvJChapQ8CPXL-TI_A7iVg?e=spD3Ar](https://vimeo.com/894743899?share=copy) | 


# Testes de Usabilidade

O objetivo do Plano de Testes de Usabilidade é obter informações quanto à expectativa dos usuários em relação à  funcionalidade da aplicação de forma geral.

Para tanto, elaboramos quatro cenários, cada um baseado na definição apresentada sobre as histórias dos usuários, definido na etapa das especificações do projeto.

Foram convidadas quatro pessoas que os perfis se encaixassem nas definições das histórias apresentadas na documentação, visando averiguar os seguintes indicadores:

Taxa de sucesso: responde se o usuário conseguiu ou não executar a tarefa proposta;

Satisfação subjetiva: responde como o usuário avalia o sistema com relação à execução da tarefa proposta, conforme a seguinte escala:

1. Péssimo; 
2. Ruim; 
3. Regular; 
4. Bom; 
5. Ótimo.

Tempo para conclusão da tarefa: em segundos, e em comparação com o tempo utilizado quando um especialista (um desenvolvedor) realiza a mesma tarefa.

Objetivando respeitar as diretrizes da Lei Geral de Proteção de Dados, as informações pessoais dos usuários que participaram do teste não foram coletadas, tendo em vista a ausência de Termo de Consentimento Livre e Esclarecido.


Apresente os cenários de testes utilizados na realização dos testes de usabilidade da sua aplicação. Escolha cenários de testes que demonstrem as principais histórias de usuário sendo realizadas. Neste tópico o grupo deve detalhar quais funcionalidades avaliadas, o grupo de usuários que foi escolhido para participar do teste e as ferramentas utilizadas.

> - [UX Tools](https://uxdesign.cc/ux-user-research-and-user-testing-tools-2d339d379dc7)


## Cenários de Teste de Usabilidade

| Nº do Cenário | Descrição do cenário |
|---------------|----------------------|
| 1             | Você é uma pessoa que tem um pet desaparescido. Crie um anúncio no site sobre ele para tentar encontra-lo |
| 2             | Você é uma pessoa que encontrou um pet perdido. Publique um anúncio no site sobre o animal, para encontrar o dono. |
| 3             | Você é uma pessoa buscando um pet para adoção. Busque anúncios de pets que estão perdidos e sem lar, para poder adota-los. |



## Registro de Testes de Usabilidade

Cenário 1: Você é uma pessoa que tem um pet desaparescido. Crie um anúncio no site sobre ele para tentar encontra-lo

| Usuário | Taxa de sucesso | Satisfação subjetiva | Tempo para conclusão do cenário |
|---------|-----------------|----------------------|---------------------------------|
| 1       | SIM             | 5                    | 27.89 segundos                  |
| 2       | SIM             | 5                    | 34.11 segundos                  |
| 3       | SIM             | 5                    | 21.26 segundos                  |
|  |  |  |  |
| **Média**     | 100%           | 5                | 27.75 segundos                           |
| **Tempo para conclusão pelo especialista** | SIM | 5 | 26.00 segundos |


    Comentários dos usuários: Achei o cadastro simples e intuitivo.



Cenário 2: Você é uma pessoa que encontrou um pet perdido. Publique um anúncio no site sobre o animal, para encontrar o dono.

| Usuário | Taxa de sucesso | Satisfação subjetiva | Tempo para conclusão do cenário |
|---------|-----------------|----------------------|---------------------------------|
| 1       | SIM             | 5                    | 22.68 segundos                          |
| 2       | SIM             | 5                    | 29.43 segundos                          |
| 3       | SIM             | 5                    | 26.50 segundos                          |
|  |  |  |  |
| **Média**     | 100%           | 5                | 26.20 segundos                           |
| **Tempo para conclusão pelo especialista** | SIM | 5 | 22.00 segundos |


     Comentários dos usuários: A criação do anúncio foi super prática e objetiva.



Cenário 2: Você é uma pessoa que encontrou um pet perdido. Publique um anúncio no site sobre o animal, para encontrar o dono.

| Usuário | Taxa de sucesso | Satisfação subjetiva | Tempo para conclusão do cenário |
|---------|-----------------|----------------------|---------------------------------|
| 1       | SIM             | 5                    | 19.64 segundos                          |
| 2       | SIM             | 5                    | 17.32 segundos                          |
| 3       | SIM             | 5                    | 20.11 segundos                          |
|  |  |  |  |
| **Média**     | 100%           | 5                | 19.02 segundos                           |
| **Tempo para conclusão pelo especialista** | SIM | 5 | 16.00 segundos |


    Comentários dos usuários: A busca por um anúncio dentro do site é fácil, apresentando os resultados de forma rápida com um anúncio organizado e completo.






