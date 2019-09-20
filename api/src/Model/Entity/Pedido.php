<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pedido Entity
 *
 * @property int $id
 * @property int $pizza_sabor_id
 * @property int $pizza_tamanho_id
 * @property int $cliente_id
 * @property int $endereco_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\PizzaSabor $pizzas_sabore
 * @property \App\Model\Entity\PizzaTamanho $pizzas_tamanho
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Endereco $endereco
 */
class Pedido extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'pizza_sabor_id' => true,
        'pizza_tamanho_id' => true,
        'cliente_id' => true,
        'endereco_id' => true,
        'created' => true,
        'modified' => true,
        'pizzas_sabore' => true,
        'pizzas_tamanho' => true,
        'cliente' => true,
        'endereco' => true
    ];
}
