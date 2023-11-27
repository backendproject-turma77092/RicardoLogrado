<h1>Projecto BackEnd Flag 2023 - Ricardo Logrado</h1>
<h2>Pombo e Filhos, Lda - Software de gestão de stock</h2>

## Memória Descritiva

<p>Este projeto foi criado recorrendo a Laravel para a criação de toda a estrutura da app, migrações, controllers, models e rotas.</p>
<p>Para testar foi utilizado o Postman</p>
<p>Desde o inicio que o objectivo seria criar uma api que me desse a possibilidade de ser consumida por um projecto em ReactJs, daí a minha opção ter sido recorrer a RestApi </p>

## Descrição do projeto:

<p>O objetivo deste projecto é criar um software que permita a gestão de stocks dos produtos da Empresa Pombo e Filhos</p>
<p>Foi utilizado para este projecto a framework Laravel com recurso a RestApi e a controladores criados em CRUD</p>

<p>Através desta documentação vou explicar como instalar o projecto e como utilizar</p>
<p>Vamos precisar para este projecto o Laraval como framework e o Postman para testar</p>
<p>Antes de criar o seu primeiro projeto Laravel, certifique-se de que a máquina local tem o PHP e Composer instalados.
 Depois de instalar o PHP e o Composer, pode-se criar um novo projeto Laravel através do comando create-project do Composer:</p>

## Instalação:

<a href="https://laravel.com/docs/10.x/installation" target="_blank" rel="">Clica aqui para ver o manual de installação do Laravel.</a>

<p>Depois de instalado devemos correr o comando na consola:
    <span style="background-color: #333 ;">php artisan serve</span>
</p>
<p>Depois de iniciar o servidor de desenvolvimento Artisan, seu aplicativo estará acessível no seu navegador em <strong><a href="http://localhost:8000" target="_blank">http://localhost:8000</a></strong>. A seguir, você está pronto para começar a dar os próximos passos no ecossistema Laravel. Claro, você também pode querer configurar um banco de dados.</p>

##Utilização:

<p>Como muitos dos valores das opções de configuração do Laravel podem variar dependendo se sua aplicação está sendo executada em sua máquina local ou em um servidor web de produção, muitos valores de configuração importantes são definidos usando o arquivo <strong>.env</strong> que existe na raiz da sua aplicação .</p>

<p>Seu arquivo <strong>.env</strong> não deve ser submetido ao controle de origem do seu aplicativo, pois cada desenvolvedor/servidor que usa seu aplicativo pode exigir uma configuração de ambiente diferente. Além disso, isso seria um risco de segurança caso um intruso obtivesse acesso ao seu repositório de controle de origem, uma vez que quaisquer credenciais confidenciais seriam expostas.</p>

<p>Depois de configurar seu banco de dados MariaDB, você poderá executar as migrações de banco de dados de sua aplicação, que criarão as tabelas de banco de dados de sua aplicação:</p>
<img src="./public/assets/img/php migrate.png" alt="Migrate">

<p>Todas as tabelas criadas vão ter uma migração e um Model, pode ou não existir um controlador para as tabelas, para os controladores foi usado CRUD "Create Read Update Delete"</p>
<p>As migrações por sua vez são criadas através do comando</p>
<img src="./public/assets/img/create-mc.png" alt="Create Migration command">
<p>Ao adicionar <strong>-mc</strong> criamos em simultâneo a migração, o model e o controlador.</p>
<p>As migrações:</p>
<img src="./public/assets/img/migracoes.png" alt="Migration Folder">
<p>Os models:</p>
<img src="./public/assets/img/modelsfolder.png" alt="Models Folder">
<p>E os controllers:</p>
<img src="./public/assets/img/controllersfolder.png" alt="Controller Folder">

<p>As rotas estão todas no ficheiro api.php:</p>
<img src="./public/assets/img/rotas.png" alt="Routes">

<p>Dentro dos controladores foi utilizado o CRUD onde temos o Create Read Update e Delete, no meu caso chamei store, show e update, o destoy não foi incluido nos projecto, visto que o id auto-incrementa não existe essa necessidade diminuindo assim a probabilidade de gerar erros na tabela ao fazer update das mesmas.</p>

<!-- <p>Temos então o show all que é feito através do index</p>
<img src="./public/assets/img/index.png" alt="Controller index">
<p>Recorrendo ao model, conseguimos obter todos os dados referentes a essa tabela.</p>

<p>O store:</p>
<img src="./public/assets/img/create-store.png" alt="Controller Store">
<p>No store foram feitas validações onde alguns campos não podiam ficar vazios para que ao fazer o <strong>POST</strong> se pudesse gerar um novo user.</p>
<p>foi criada também uma validação de stock para nunca haver o problema de se fazer uma encomenda na qual não existe stock diponivel</p>
<p>Foi também criada uma validação ao tentar criar um novo produto, caso o produto já exista apenas é actulizado o stock como pdemos verificar abaixo:</p>
<img src="./public/assets/img/product_stock_update.png" alt="Product Stock Update">

<p>O update:</p>
<img src="./public/assets/img/create-update.png" alt="Controller Update">
<p>Mais tarde estes campos podem ser atualizados através do <strong>UPDATE</strong></p>
<p>No update é possível inserir os restantes campos ou modificar os submetidos no create, no entanto foram criados alguns <strong>IF</strong> e <strong>ELSE</strong> com erros associados para melhor leitura do utilizador sobre o que não estava a ser feito corectamente.</p>

<p>E o show by $id:</p>
<img src="./public/assets/img/create-show.png" alt="Controller Show">
<p>No show by $id temos então os <strong>join's</strong> de várias tabelas onde através deles conseguimos adquirir vários tipos de informação.</p>
<p>Para o caso dos <strong>Users</strong> fez-se a ligação com a tabela <strong>Orders</strong>, com a tabela <strong>Products</strong> e a tabela <strong>Products_has_orders</strong>. Com esta ligação conseguimos retornar todas as orders feitas por este user como os products a elas associadas e respectivos dados. Na imagem abaixo podemos verificar o <strong>.Json</strong> com esses dados.</p>
<img src="./public/assets/img/Order_by_userid.png" alt="Order by userid">

## Como iniciar:
<p>Para o projecto devemos em primeiro lugar correr a seguinte migração:</p>
<img src="./public/assets/img/first_migration.png" alt="First Migration">

<p>Depois de correr a migração Warehouse_table, podemos correr todas as outras através do comando:</p>
<img src="./public/assets/img/rest_migration.png" alt="Other tables">
<p>como resultado obtemos esta resposta no terminal:</p>
<img src="./public/assets/img/migration_result.png" alt="Migration Result">

## Como testar:
<p>Para testar a aplicação foi utilizado o <strong><a href="https://www.postman.com/" target="_blank">https://www.postman.com/</a></strong></p>
<p>Em primeiro lugar devemos começar por criar as rotas de <strong>Supplier</strong> como na imagem abaixo:</p>
<img src="./public/assets/img/postman-collection.png" alt="Postman Collection">
<p>Depois temos de criar em primeiro lugar o supplier.</p>
<img src="./public/assets/img/postman-first.png" alt="First Creation Supplier">
<p>Através da seguinte rota:</p>
<img src="./public/assets/img/postman-route.png" alt="Postman-route">
<p>No body do <strong>POST</strong> temos de colocar:</p>
<img src="./public/assets/img/postman-body.png" alt="Postman body">
<p>Caso o <strong>Supplier</strong> seja bem inserido iremos receber uma mensagem de sucesso. Caso o <strong>Supplier</strong> já exista será retornado uma mensagem de erro.</p>
<p>O mesmo processo terá de ser aplicado para todas as outras rotas.</p>
<p>Teremos de preencher o body no <strong>Postman</strong> com os parametros obrigatórios para podermos ir preenchendo as tabelas.</p>

## Dificuldades:
<p>A certo poonto tive de refazer todo o meu projeto por estar a exigir demasiado de mim próprio. Nessa altura decidi parar e falar com os meus colegas (porque eu não vejo o curso como uma competição de notas, mas sim como um grupo de trabalho que gostava bastante que nos podesse-mos apoiar uns aos outros mutuamente) e mais tarde falei com o Alexandre sobre o reinicio.</p>
<p>Nessa altura decidi simplificar o meu projeto tornando-o mais simples, o que correu bastante bem.</p>
<p>Penso que consegui cumprir praticamente todos os requisitos solicitados, no entanto tive dificuldades ao fazer os joins entre tabelas e de obter alguns resultados onde eu desejava.</p>
<p>Com o auxilio do Alexandre consegui perceber a lógica e implementar os joins de forma a que tudo ficasse a funcionar como pertendido.</p>
<p>Fiquei com um problema se é que assim o posso dizer, quando crio a order, tenho sempre de correr a order pelo id para atualizar o valor total, tentei colocar as linhas de código noutras partes do controlador mas sem sucesso. No entanto para um layout funcional, ao entrar numa order o valor estaria atualizado. </p>

## Conclusões:
<p>Nas conclusões, tiro que com alguma paciência consegui chegar a bom porto.</p>
<p>Foi um projeto bastante desafiante ao qual estou bastante satisfeito de chegar aos resultados obtidos.</p> -->
