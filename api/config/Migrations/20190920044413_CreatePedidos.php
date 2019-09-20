<?php
use Migrations\AbstractMigration;

class CreatePedidos extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('pedidos');
        $table->addColumn('pizza_sabor_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('pizza_tamanho_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('cliente_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('endereco_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addForeignKey('pizza_sabor_id', 'pizzas_sabores', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION']);
        $table->addForeignKey('pizza_tamanho_id', 'pizzas_tamanhos', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION']);
        $table->addForeignKey('cliente_id', 'clientes', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION']);
        $table->addForeignKey('endereco_id', 'enderecos', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION']);
        $table->create();
    }
}
