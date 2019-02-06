# Bat Servers
Plugin para Dracula: Bat Servers


<a href="https://packagist.org/packages/lameck/dracula_batservers" target="_blank">Assinatura</a>

## Dependência
Utilize o Dracula Dashboard Clean. Este plugin, assim como demais outros, acompanharam as futuras atualizações do projeto Dracula. Os plugins permitem uma programação descentralizada reutilizando recursos já definidos no projeto raiz.

<a href="https://github.com/EuFreela/dracula-dashboard-clean/blob/master/README.md" target="_blank">Link do Dracula Dashboard Clean</a>

## Sobre
Este plugin lista srvidores para possíveis conexões.

## INSTALL

<p>Ao tentar executar uma instalação pelo composer, algumas evidencias ficam no cache. Isso pode dificultar alguma instalação de algum nome relacionado. Para evitar esse tipo de problema limpe o cache:</p>
<pre>
composer clearcache
php artisan cache:clear
</pre>

<p>Instale o plugin</p>
<pre>
composer require lameck/dracula_batservers
</pre>

<p>Publique as dependencias do Lameck\Dracula\Hosts\DraculaServerServiceProvider</p>
<pre>
php artisan vendor:publish
</pre>

<p>Configure o plugin no banco de dados. Abra o database/seeds/DatabaseSeeder.php e adicione a linha</p>
<pre>
$this->call(DraculaServerPluginsTableSeeder::class);
</pre>

<p>Perpetue as configurações ao cache:</p>
<pre>
composer dump-autoload
</pre>

<p>Após, popule o banco de dados:</p>
<pre>
php artisan db:seed
</pre>

### REMOVE

<pre>
composer remove lameck/dracula_batservers
composer clearcache
php artisan cache:clear
</pre>


### REMOVE OR UPDATE

<b>Obs</b>
<p>Após desinstalação e uma nova instalação, recursos não disponibilizam no post-packager-unistall a remoção, por script, das dependencias publicadas. Esse recurso estará disponível no framework Dracula DC. Os seeders, que complementam a instalação dos packagers, caso não sejam removidos, numa nova instalação, mesmo publicando novamente, os arquivos não são reescritos mantendo a configuração anterior. Por esse motivo, a cada desinstalação e <b>UPDATE</b> apagar os arquivos:</p>
<pre>
database/seeds/DraculaServerPluginsTableSeeder.php
</pre>
<p>Remova também do DraculaServerPluginsTableSeeder ou comentando a linha</p>
<pre>
..
//$this->call(DraculaServerPluginsTableSeeder::class);
..
</pre>

<p>A Update pode ser realizada na aplicação com</p>
<pre>
composer update
</pre>
<p>Caso algum packager tenha sido atualizado, ele estará referente no comando que você realizar no terminal. A atualizaçãopoderá incluir os novos arquivos os quais não são reescritos pelos scripts do composer post-update ou post-unistaller. Isso implica que a cada atualização, caso não dipunha no framework um recurso par tais, a remoção manual e a nova publicação das dependencias.</p>

<hr>
<img src="https://i.postimg.cc/Ls5wqb5G/Captura-de-tela-em-2019-02-06-12-55-26.png">
<img src="https://i.postimg.cc/zBRQ7Hnj/Captura-de-tela-em-2019-02-06-12-56-00.png">


