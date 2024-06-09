# Programação de Funcionalidades

Implementação do sistema descritas por meio dos requisitos funcionais e/ou não funcionais. Deve relacionar os requisitos atendidos os artefatos criados (código fonte) além das estruturas de dados utilizadas e as instruções para acesso e verificação da implementação que deve estar funcional no ambiente de hospedagem.

## Requisitos Atendidos

As tabelas que se seguem apresentam os requisitos funcionais e não-funcionais que relacionam o escopo do projeto com os artefatos criados:

### Requisitos Funcionais

|ID    | Descrição do Requisito | Prioridade | Artefato Criado |
|------|------------------------|------------|-----------------|
|----| Página inicial | ALTA | home.php |
|----| Página de cadastro de usúario | ALTA | cadastro.php |
|----| Página para criação do anúncio do pet perdido | ALTA | cadastro-perdi.php |
|----| Página para criação do anúncio do pet econtrado | ALTA | cadastro-achei.php |
|----| Página com apresentação dos anúncios publicados | ALTA | feed.php |
|----| Página do anúncio do pet | ALTA | detalhe-pet.php |
|----| Filtro para os anúncios | MÉDIA | feed.php |
|----| Página institucional sobre o site | BAIXA | sobresos.php |
|----| Página institucional sobre as políticas do site | BAIXA | politicasepriv.php |
|----| Formulário de contato | BAIXA | formulario.php |

### Página de Cadastro

|ID    | Descrição do Requisito | Prioridade | Artefato Criado |
|------|------------------------|------------|-----------------|
| name | Armazenar o nome do usúario | ALTA | input-box |
| email | Armazenar o email do usúario | ALTA | input-box |
| cel | Armazenar o celular do usúario | MÉDIA | input-box |
| password | Armazenar a senha do usúario | ALTA | input-box |
| empresa | Armazenar a empresa do usúario | ALTA | input-box |
|----| Validar cadastro e cadastrar usúario | ALTA | div "cadastro" |
|----| Direcionar para página de Login caso já seja cadastrado | ALTA | div "login" |
|----|---------------------------------------------------------|------|-------------|
