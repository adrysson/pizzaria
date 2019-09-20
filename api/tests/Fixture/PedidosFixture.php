<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PedidosFixture
 */
class PedidosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'pizza_sabor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pizza_tamanho_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cliente_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'endereco_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'pizza_sabor_id' => ['type' => 'index', 'columns' => ['pizza_sabor_id'], 'length' => []],
            'pizza_tamanho_id' => ['type' => 'index', 'columns' => ['pizza_tamanho_id'], 'length' => []],
            'cliente_id' => ['type' => 'index', 'columns' => ['cliente_id'], 'length' => []],
            'endereco_id' => ['type' => 'index', 'columns' => ['endereco_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'pedidos_ibfk_1' => ['type' => 'foreign', 'columns' => ['pizza_sabor_id'], 'references' => ['pizzas_sabores', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'pedidos_ibfk_2' => ['type' => 'foreign', 'columns' => ['pizza_tamanho_id'], 'references' => ['pizzas_tamanhos', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'pedidos_ibfk_3' => ['type' => 'foreign', 'columns' => ['cliente_id'], 'references' => ['clientes', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'pedidos_ibfk_4' => ['type' => 'foreign', 'columns' => ['endereco_id'], 'references' => ['enderecos', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'pizza_sabor_id' => 1,
                'pizza_tamanho_id' => 1,
                'cliente_id' => 1,
                'endereco_id' => 1,
                'created' => '2019-09-20 02:07:09',
                'modified' => '2019-09-20 02:07:09'
            ],
        ];
        parent::init();
    }
}
