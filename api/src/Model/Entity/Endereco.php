<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Endereco Entity
 *
 * @property int $id
 * @property string|null $cep
 * @property string $logradouro
 * @property int $numero
 * @property string|null $complemento
 * @property string $bairro
 * @property string $cidade
 * @property int $estado_id
 *
 * @property \App\Model\Entity\Estado $estado
 * @property \App\Model\Entity\Pedido[] $pedidos
 */
class Endereco extends Entity
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
        'cep' => true,
        'logradouro' => true,
        'numero' => true,
        'complemento' => true,
        'bairro' => true,
        'cidade' => true,
        'estado_id' => true,
        'estado' => true,
        'pedidos' => true
    ];
}
