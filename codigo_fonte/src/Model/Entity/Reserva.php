<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reserva Entity
 *
 * @property int $id
 * @property int $cliente_id
 * @property int $lugares
 * @property \Cake\I18n\FrozenTime $datahora
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Mesa[] $mesas
 */
class Reserva extends Entity
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
