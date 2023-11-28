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

## Schema:

<img src="./public/assets/img/Schema-Backend-Project.png" alt="Schema">

## Instalação:

<a href="https://laravel.com/docs/10.x/installation" target="_blank" rel="">Clica aqui para ver o manual de installação do Laravel.</a>

<p>Depois de instalado devemos correr o comando na consola:
    <span style="background-color: #333 ;">php artisan serve</span>
</p>
<p>Depois de iniciar o servidor de desenvolvimento Artisan, seu aplicativo estará acessível no seu navegador em <strong><a href="http://localhost:8000" target="_blank">http://localhost:8000</a></strong>. A seguir, você está pronto para começar a dar os próximos passos no ecossistema Laravel. Claro, você também pode querer configurar um banco de dados.</p>

## Utilização:

<p>Podem encontrar o export do Postman na pasta <strong>.public\assets\Postman-Export</strong></p>

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

<p>Dentro dos controladores foi utilizado o CRUD onde temos o Create Read Update mas não o Delete, que foi excluido de forma a simplificar o projecto.</p>

<p>Temos então o show all que é feito através do index</p>
<img src="./public/assets/img/index.png" alt="Controller index">

<p>Recorrendo ao model, conseguimos obter todos os dados referentes a essa tabela.</p>

<p>O store:</p>
<img src="./public/assets/img/create-store.png" alt="Controller Store">

<p>O update:</p>
<img src="./public/assets/img/create-update.png" alt="Controller Update">
<p>Mais tarde estes campos podem ser atualizados através do <strong>UPDATE</strong></p>
<p>No update é possível inserir os restantes campos ou modificar os submetidos no create, no entanto foram criados alguns <strong>IF</strong> e <strong>ELSE</strong> com erros associados para melhor leitura do utilizador sobre o que não estava a ser feito corectamente.</p>

<p>E o show by $id:</p>
<img src="./public/assets/img/create-show.png" alt="Controller Show">

## Como testar:

<p>Para testar a aplicação foi utilizado o <strong><a href="https://www.postman.com/" target="_blank">https://www.postman.com/</a></strong></p>
<p>Em primeiro lugar devemos começar por criar as rotas como na imagem abaixo:</p>
<img src="./public/assets/img/postman-collection.png" alt="Postman Collection">
<p>Depois das rotas criadas podemos avançar com os testes das Orders</p>
<p>Por ordem devemos primeiro criar Suppliers:</p>
<break>{<br/>
        &emsp;"company_name":"Worten",<br/>
        &emsp;"phone":"911234567",<br/>
        &emsp;"email":"worten@gmail.com",<br/>
        &emsp;"address":"Almada",<br/>
        &emsp;"postal_code":"2805",<br/>
        &emsp;"type":"Electronics",<br/>
        &emsp;"NIF":"321321321"<br/>
      }
</break>
<img src="./public/assets/img/postman-collection-suppliers.png" alt="Postman Collection">
<p>Depois Products, sendo que os products pode pertencer a 1 ou a vários suppliers:</p>
<break>{<br/>
    &emsp;"brand":"Apple",<br/>
    &emsp;"model":"Macbook Air",<br/>
    &emsp;"serial_number":"1234512345",<br/>
    &emsp;"type":"Electronics",<br/>
    &emsp;"unit_price":"1200",<br/>
    &emsp;"units_in_stock":"200",<br/>
    &emsp;"units_on_order":"5",<br/>
    &emsp;"discontinued":"No",<br/>
    &emsp;"supplier_ids": [1,2]<br/>
  }
</break>
<img src="./public/assets/img/postman-collection-products.png" alt="Postman Collection">
<p>E finalmente podemos criar uma Order, que pode conter vários Products e, que vai também somar o valor total não só dos diferentes items adicionados, mas também o numero de vezes que um item especifico foi adicionado á Order:</p>
<break>
{<br/>
    &emsp;"postal_code": "4444-123",<br/>
    &emsp;"order_date": "2023-11-20",<br/>
    &emsp;"shipped_date": "2023-11-22",<br/>
    &emsp;"products": [<br/>
        &emsp;&emsp;{<br/>
            &emsp;&emsp;&emsp;"ProductID": 2,<br/>
            &emsp;&emsp;&emsp;"quantity": 1<br/>
        &emsp;&emsp;},<br/>
        &emsp;&emsp;{<br/>
            &emsp;&emsp;&emsp;"ProductID": 3,<br/>
            &emsp;&emsp;&emsp;"quantity": 1<br/>
        &emsp;&emsp;}<br/>
    &emsp;]<br/>
  }
</break>
<img src="./public/assets/img/postman-collection-orders.png" alt="Postman Collection">

## Dificuldades:

<p>Não foi um projecto fácil de executar, e mesmo após muitas dificuldades, o projecto não está a 100%</p>
<p>Inicialmente compliquei bastante na altura de desenhar o schema pois tendo a visualizar o produto final e não o caminho que leva lá.</p>
<p>Com o Auxilio dos meus colegas, pouco a pouco tenho vindo a entender melhor o que é a lógica do código.</p>
<p>O Alexandre também me instigou bastante a dar o melhor de mim e a ver as coisas como elas devem ser vistas, que é, uma coisa de cada vez, partidas em segmentos pequenos que pouco a pouco, quando unidos, se vão tornando em segmentos maiores até que finalmente se chega ao panorama maior.</p>
<p>Durante o processo de criação, fiz migrações , refresh, e resets incontáveis e, pelo meio deparei-me com o facto de uma migração aparecer como já existente, logo, não podia ser migrada novamente. a solução prendeu-se com a adição de <img src="./public/assets/img/drop-if-exists.png" alt="drop-if-exists"> no "UP" da migração.</p>
<p>Apenas hoje, 4 dias depois, descobri que o erro afinal era uma outra migração com o mesmo nome que eu tinha criado sem dar conta. De qualquer forma, agora toadas as migrações deste projecto têm um "drop-if-exists" no "UP"</p>

## Conclusões:

<p>É preciso um trabalho continuo, basicamente diário nesta fase de aprendizagem, não só na utilização do código mas também no desenvolvimento de lógica</p>
<p>Aprender isto aos 40 foi de longe o objectivo mais desafiante a que alguma vez me propus</p>

<img src="./public/assets/img/alexandre-the-great.webp" alt="Postman Collection">
