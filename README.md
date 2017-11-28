# Sistema de Criação de Postagens
CMS simples com finalidade de estudo e avaliação.

### Autor
Gustavo Milczwski. Contato: gusmilczwski@gmail.com

## Pré-Requisitos
- Um servidor PHP. (Pro desenvolvimento foi usado o Xampp https://www.apachefriends.org/pt_br/download.html). Você pode executar o comando `php artisan serve` na pasta dos arquivos, mas pode ocorrer problemas no compartilhamento de arquivos como por exemplo CSS. Porém as funcionalidades do sistema funcionam igual.
- MySQL instalado (o Xampp instala junto).
- Instalar o framework Laravel e suas dependências https://laravel.com/docs/5.5/installation

A descrição da instalação está adequada para Windows 10.

## Instalação
- Baixe uma cópia do repositório.
- Extraia a pasta Aliens no local onde irá rodar o servidor. Esta pasta contém os arquivos que devem ser mantidos no servidor.
- Faça uma cópia do arquivo 'Aliens\.env.example' com o nome de '.env' na mesma pasta.
Ajuste a seguinte configuração do banco de dados:

```
DB_DATABASE=aliens
DB_USERNAME=nome_do_seu_usuario
DB_PASSWORD=sua_senha_do_BD
```

- Abra o console no diretório 'Aliens'
- Acesse o PHPMyAdmin `localhost/phpmyadmin`.
- Crie um banco de dados com o nome 'aliens'.
- Neste banco, clique no item importar encontrado na barra superior.
- Selecione o arquivo dump_bd.sql que está na raiz do respositório deste sistema.
- Execute o arquivo.
- Rode no terminal o comando `php artisan serve` na pasta Aliens. Ou execute pelo Xamp se você salvou o repositório na pasta `xamp/php/www`.
- Você também pode configurar o arquivo em '.../xampp/apache/conf/extra/httpd-vhosts.conf' para fazer com que o `localhost` seja o a raiz do projeto. Provavelmente a partir da linha 27, descomente o código e deixe igual a este abaixo:

```
<VirtualHost *:80>
    ServerAdmin webmaster@dummy-host.example.com    
    DocumentRoot "C:/xampp/htdocs/Aliens/public"    
    ServerName aliens.com    
    ServerAlias www.aliens.com    
    ErrorLog "logs/dummy-host.example.com-error.log"    
    CustomLog "logs/dummy-host.example.com-access.log" common    
</VirtualHost>
```

- Pronto. Agora é só acessar no navegador o `http://localhost:8000`, `http://localhost/aliens/public` ou `http://localhost` (dependendo da configuração).

