<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PedidosCardapio Entity
 *
 * @property int $id
 * @property int $cardapio_id
 * @property int $pedido_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $status
 *
 * @property \App\Model\Entity\Cardapio $cardapio
 * @property \App\Model\Entity\Pedido $pedido
 */
class PedidosCardapio extends Entity
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
        '*' => true,
        'id' => false
    ];
}
