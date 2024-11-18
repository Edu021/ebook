# Projeto WP com Tema Padrão Hangar Digital

# Configurações

- Criar repositório do cliente com o nome do mesmo( tudo minúsculo, se precisar separar utilize - );
- Em settings, `Collaborators and teams`, Adicionar o Time de desenvolvimento da Hangar com a permissão `Write`.

- No local, criar uma pasta com o nome do cliente.
- Dentro da pasta do cliente clonar o repositório do cliente e renomear a pasta para `site`.
- Clonar o repositório `tema-padrao-2024` dentro da pasta do cliente, e apagar a .git do `tema-padrao-2024`, e mover todos os arquivos da pasta para a pasta site da pasta do cliente.
- Dentro da pasta do cliente criar uma pasta chamada `projeto`.

- Abra a pasta do cliente no VSCode, salvar a Workspace do VSCode dentro da pasta `projeto`.
- No VSCode fazer um replace all do nome `tema-padrao` para o `nomedocliente`( tudo minúsculo, se precisar separar utilize - ).
- Renomear o nome do tema para o nome do cliente.

- No HeidiSql ou dBeaver, criar um banco de dados vazio( tudo minúsculo, se precisar separar utilize - )
- Acessar `http://localhost/nomedocliente/site` e configurar a instalação do WP. 

# BD
- Database name (mesmo nome que foi criado no HeidiSql ou dBeaver).
- Database username.
- Database password.
- Database host (localhost).
- Table prefix (minimo 7 caracteres, contendo numeros e letras minúsculas) ex: `d6i40sl_`.

# Configurações do WP
- Título do Site.
- Username(hangar).
- Senha(deve conter no minimo 20 caracteres, letras maiúsculas e minúsculas, símbolos e números).
- Email(hangarwebmaster@gmail.com)
- Search engine visibility(Visibilidade do mecanismo de pesquisa), habilitar.

* Passar nome do cliente, usuário(hangar) e senha, para Silvio salvar no LastPass.

- Realizar o login no WP.
- Copiar o conteúdo do arquivo `wp-config-local.php` para dentro do arquivo `wp-config.php` alterar os dados do BD, e trocar o nome `tema-padrao` pelo nome da pasta do cliente.
- Copiar o conteúdo do arquivo `.htaccess-local` para dentro do arquivo `.htaccess` e trocar o nome `tema-padrao` pelo nome da pasta do cliente.
- Apagar a pasta `wp-content`;
- Feito isso, no painel do WP acessar no menu `Aparência->Temas` E selecionar `Tema Padrão`;
- Na raiz do tema, trocar a imagem `screenshot.png` por uma imagem da home do layout.
- Acessando a pasta `/var/www/nomedocliente/site/site/themes/` Remover todos os temas (menos o que será utilizado).

# Instalação das dependências para usar o Gulp com os módulos
- No terminal instalar os pacotes do node com o comando `npm install`.
- Editar no gulpconfig.js o `tema-padrao` com o nome do diretório do seu tema.
- Rodar o comando `gulp w`, salvar algum arquivo scss e js dentro do tema. E verificar se criou os arquivos (style.min.css e scripts.min.js) na pasta public/css e public/js.

# Obs: 
- Caso houver algum problema, verificar os arquivos: wp-config.php e .htaccess se o caminho está correto, no arquivo wp-config.php habilite `wp_debug` para true para visualizar os erros no frontend. Caso persistir ver os erros no log de erros do apache.

# Acessando a página no local:
- Agora acessando a página `http://localhost/nomedocliente/site/` se tudo tiver ocorrido bem, terá um exemplo com Header, Main e Footer. 

# Parabéns! Tudo pronto para trabalhar :D

