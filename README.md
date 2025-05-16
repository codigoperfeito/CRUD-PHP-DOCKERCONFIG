# Projeto PHP: CRUD Completo com Sistema de Comentários e Listagem de Usuários

Este projeto tem como objetivo demonstrar de forma prática conhecimentos em desenvolvimento PHP, incluindo a implementação de funcionalidades CRUD (Create, Read, Update, Delete), um sistema de comentários e listagem de usuários. Ele também explora o uso de Docker para facilitar a configuração e o deploy da aplicação.

## 🚀 Visão Geral

A aplicação foi desenvolvida como um exercício prático para solidificar e apresentar habilidades na linguagem PHP e em tecnologias de containerização com Docker. O código-fonte está estruturado para ser compreensível e servir como referência.

## ✨ Funcionalidades Principais

* **CRUD de Usuários:** Criação, Leitura, Atualização e Exclusão de registros de usuários.
* **Sistema de Comentários:** Permite que usuários adicionem comentários.
* **Listagem Dinâmica:** Apresentação de usuários e comentários.
* **Dockerizado:** Ambiente de desenvolvimento e produção configurado com Docker e Docker Compose.

## 🛠️ Tecnologias Utilizadas

* **PHP**
* **MySQL**
* **Docker**
* **Docker Compose**
* **PHPMyAdmin** (para gerenciamento do banco de dados)

## ⚙️ Pré-requisitos

* [Docker](https://www.docker.com/get-started) instalado e em execução.
* [Docker Compose](https://docs.docker.com/compose/install/) instalado.

## 🏁 Como Começar

Siga os passos abaixo para executar o projeto em seu ambiente local:

1.  **Clone o repositório:**
    ```bash
    git clone [https://github.com/SEU_USUARIO/SEU_REPOSITORIO.git](https://github.com/SEU_USUARIO/SEU_REPOSITORIO.git)
    cd SEU_REPOSITORIO
    ```
    *(Substitua `SEU_USUARIO/SEU_REPOSITORIO` pelo caminho correto do seu projeto)*

2.  **Inicie os containers Docker:**
    Na raiz do projeto, execute o comando:
    ```bash
    docker-compose up -d
    ```
    *(O `-d` executa os containers em segundo plano)*

3.  **Acesse a Aplicação:**
    * A aplicação estará acessível em: `http://localhost:9000`

4.  **Acesse o PHPMyAdmin:**
    * O PHPMyAdmin estará acessível em: `http://localhost:9001`
    * As informações de login do banco de dados MySQL podem ser encontradas no arquivo de configuração do projeto (geralmente um `config.php` ou similar). As credenciais padrão para o MySQL dentro do container são:
        * **Host:** `mysql_db` (nome do serviço no `docker-compose.yml`)
        * **Usuário:** `root`
        * **Senha:** `root` (ou a senha definida no seu `docker-compose.yml`)

## 🔧 Solução de Problemas e Dicas

* **Acessando o Container PHP:**
    Caso precise acessar o terminal do container PHP diretamente, utilize o comando:
    ```bash
    docker exec -it <NOME_OU_ID_DO_CONTAINER_PHP> /bin/bash
    ```
    *Dica: Você pode encontrar o nome ou ID do container com `docker ps`.*
    *O comando original `docker run -ti crud-php-dockerconfig_php-env /bin/bash` iniciaria um novo container a partir da imagem, o que pode não ser o desejado se você quer depurar um container já em execução.*

* **Backup do Banco de Dados:**
    Um arquivo de backup do MySQL (`.sql`) está incluído na pasta do projeto. Caso ocorra algum problema com o banco de dados, você pode restaurá-lo importando este arquivo através do PHPMyAdmin ou diretamente no container MySQL.

## 🖼️ Screenshots da Aplicação

<p align="center">
  <img src="https://github.com/codigoperfeito/CRUD-PHP-DOCKERCONFIG/blob/main/www/img/Captura%20de%20Tela%202022-08-01%20%C3%A0s%2020.29.28.png" alt="Screenshot da Aplicação 1" width="70%"><br/>
  <em>Tela principal da aplicação.</em>
</p>

<p align="center">
  <img src="https://github.com/codigoperfeito/CRUD-PHP-DOCKERCONFIG/blob/main/www/img/Captura%20de%20Tela%202022-08-01%20%C3%A0s%2020.47.11.png" alt="Screenshot da Aplicação 2" width="70%"><br/>
  <em>Exemplo de listagem ou formulário.</em>
</p>

<p align="center">
  <img src="https://github.com/codigoperfeito/CRUD-PHP-DOCKERCONFIG/blob/main/www/img/Captura%20de%20Tela%202022-08-01%20%C3%A0s%2021.01.52.png" alt="Screenshot da Aplicação 3" width="70%"><br/>
  <em>Outra funcionalidade da aplicação.</em>
</p>

*(Substitua as legendas das imagens por descrições mais específicas se desejar.)*

## 💡 Aprendizados

Este projeto foi desenvolvido com foco no aprendizado e na aplicação prática de conceitos de PHP e Docker.

## 🙏 Agradecimentos

Agradeço ao **B7Web** pelo conhecimento proporcionado que tornou este projeto possível.
