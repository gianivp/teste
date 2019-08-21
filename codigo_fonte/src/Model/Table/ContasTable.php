<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contas Model
 *
 * @property \App\Model\Table\MesasTable|\Cake\ORM\Association\BelongsTo $Mesas
 * @property \App\Model\Table\QuotasContasTable|\Cake\ORM\Association\HasMany $QuotasContas
 *
 * @method \App\Model\Entity\Conta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Conta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conta findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContasTable extends Table
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

        $this->setTable('contas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Mesas', [
            'foreignKey' => 'mesa_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('QuotasContas', [
            'foreignKey' => 'conta_id'
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
            ->numeric('valor')
            ->requirePresence('valor', 'create')
            ->notEmpty('valor');

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
        $rules->add($rules->existsIn(['mesa_id'], 'Mesas'));

        return $rules;
    }
}
