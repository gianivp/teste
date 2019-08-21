<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mesas Model
 *
 * @property \App\Model\Table\AgregacoesTable|\Cake\ORM\Association\HasMany $Agregacoes
 * @property \App\Model\Table\ContasTable|\Cake\ORM\Association\HasMany $Contas
 * @property \App\Model\Table\PedidosTable|\Cake\ORM\Association\HasMany $Pedidos
 * @property \App\Model\Table\ReservasTable|\Cake\ORM\Association\BelongsToMany $Reservas
 *
 * @method \App\Model\Entity\Mesa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mesa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mesa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mesa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mesa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mesa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mesa findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MesasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('mesas');
        $this->setDisplayField('numero_mesa');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Agregacoes', [
            'foreignKey' => 'mesa_id'
        ]);
        $this->hasMany('Contas', [
            'foreignKey' => 'mesa_id'
        ]);
        $this->hasMany('Pedidos', [
            'foreignKey' => 'mesa_id'
        ]);
        $this->belongsToMany('Reservas', [
            'foreignKey' => 'mesa_id',
            'targetForeignKey' => 'reserva_id',
            'joinTable' => 'mesas_reservas'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('numero_mesa')
            ->requirePresence('numero_mesa', 'create')
            ->notEmpty('numero_mesa')
            ->add('numero_mesa', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('cadeiras')
            ->requirePresence('cadeiras', 'create')
            ->notEmpty('cadeiras');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['numero_mesa']));

        return $rules;
    }
}
