<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PedidosCardapios Model
 *
 * @property \App\Model\Table\CardapiosTable|\Cake\ORM\Association\BelongsTo $Cardapios
 * @property \App\Model\Table\PedidosTable|\Cake\ORM\Association\BelongsTo $Pedidos
 *
 * @method \App\Model\Entity\PedidosCardapio get($primaryKey, $options = [])
 * @method \App\Model\Entity\PedidosCardapio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PedidosCardapio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PedidosCardapio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PedidosCardapio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PedidosCardapio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PedidosCardapio findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PedidosCardapiosTable extends Table
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

        $this->setTable('pedidos_cardapios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Cardapios', [
            'foreignKey' => 'cardapio_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Pedidos', [
            'foreignKey' => 'pedido_id',
            'joinType' => 'INNER'
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
        $rules->add($rules->existsIn(['cardapio_id'], 'Cardapios'));
        $rules->add($rules->existsIn(['pedido_id'], 'Pedidos'));

        return $rules;
    }
}
