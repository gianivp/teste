<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Funcionario Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property string $telefone_residencial
 * @property string $telefone_celular
 * @property \Cake\I18n\FrozenDate $dt_nascimento
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenDate $dt_admissao
 * @property \Cake\I18n\FrozenDate $dt_demissao
 * @property string $pis
 * @property float $salario
 * @property float $comissao
 * @property string|resource $foto
 * @property string $email
 * @property string $password
 */
class Funcionario extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
