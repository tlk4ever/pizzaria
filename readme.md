## Rotas

Listar Pizza :get-> '/pizzas'
Add Pizaas :post->(sabor, tamanho) '/add-pizzas';
Atualizar Pizza :post->(sabor, tamanho) '/atualizar-pizza/{id}'
Apagar Pizza:post-> '/apagar-pizza/{id}'

Listar Clistens:get-> '/clientes'
Add Cliente: post->(nome, telefone) '/add-cliente'

Entrega :post->(cliente_id, pizza_id, endereco) '/entrega'

## atualzar arquivo .env com dados da base
## composer install
## php artisan migrate
