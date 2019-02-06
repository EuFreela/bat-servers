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


