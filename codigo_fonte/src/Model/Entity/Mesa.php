<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mesa Entity
 *
 * @property int $id
 * @property int $numero_mesa
 * @property int $cadeiras
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Agregaco[] $agregacoes
 * @property \App\Model\Entity\Conta[] $contas
 * @property \App\Model\Entity\Pedido[] $pedidos
 * @property \App\Model\Entity\Reserva[] $reservas
 */
class Mesa extends Entity
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
