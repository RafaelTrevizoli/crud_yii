🚀 Projeto Yii - CRUD
Este é um projeto simples implementado utilizando o Yii Framework para realizar operações CRUD (Create, Read, Update, Delete) em um banco de dados. O projeto serve como exemplo básico de como estruturar uma aplicação web utilizando o Yii, com foco em operações de gerenciamento de dados.

📝 Requisitos

Antes de começar, você precisará de:

PHP (versão 7.4 ou superior) 🖥️

Composer (para gerenciar dependências) 📦

MySQL ou outro banco de dados compatível com Yii 🗄️

Yii Framework instalado via Composer 🛠️

⬇️ Instalação

Siga os passos abaixo para configurar o projeto em sua máquina local.

1. Clone o repositório

git clone https://github.com/seu-usuario/nome-do-repositorio.git
cd nome-do-repositorio

2. Instale as dependências do Composer
3. 
Dentro da pasta do projeto, execute:

composer install

3. Configure o banco de dados
4. 
Edite o arquivo de configuração do banco de dados em config/db.php para corresponder às configurações do seu banco de dados MySQL:

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=nome_do_banco',
    'username' => 'seu_usuario',
    'password' => 'sua_senha',
    'charset' => 'utf8',
];

5. Crie as tabelas no banco de dados
6. 
Execute o comando para criar as tabelas necessárias para o CRUD. Você pode criar manualmente ou utilizar migrations se preferir.

CREATE TABLE nome_da_tabela (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

5. Configuração do ambiente
   
Execute o servidor local para visualizar o projeto:

php yii serve

O projeto estará disponível em http://localhost:8080 (ou a porta que aparecer no terminal).

🔧 Funcionalidades

O projeto implementa as seguintes funcionalidades básicas de um CRUD:

Criar: Formulário para adicionar novos registros ao banco de dados ➕

Ler: Listagem de registros existentes no banco de dados 📜

Atualizar: Formulário para editar registros existentes ✏️

Deletar: Opção para excluir registros ❌

Essas funcionalidades são implementadas em uma única tabela do banco de dados e são acessíveis a partir do painel principal da aplicação.

🗂️ Estrutura do Projeto

O projeto é estruturado da seguinte maneira:

controllers/: Contém os controladores da aplicação, incluindo a lógica para processar as requisições CRUD 📁

models/: Contém os modelos de dados que interagem com o banco de dados 💾

views/: Contém as páginas HTML geradas para exibir as operações CRUD 🖼️

config/: Contém as configurações da aplicação, incluindo configuração de banco de dados ⚙️

🖥️ Como Usar

Acesse a página inicial do projeto para ver a lista de registros 📋

Utilize os botões para adicionar, editar ou excluir registros ➕✏️❌

A interface é simples e foi projetada para facilitar o entendimento das operações CRUD básicas no Yii.

🌐 Exemplo de URLs

Listagem de registros: http://localhost:8080/

Criar registro: http://localhost:8080/criar

Editar registro: http://localhost:8080/editar?id={id}

Excluir registro: http://localhost:8080/excluir?id={id}

🤝 Contribuição
Se você tiver sugestões de melhorias ou quiser contribuir com o projeto, fique à vontade para enviar um pull request. Caso tenha encontrado algum erro ou tenha dúvidas, abra uma issue.

📜 Licença
Este projeto é licenciado sob a MIT License - veja o arquivo LICENSE para mais detalhes.
