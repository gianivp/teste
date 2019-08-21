<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cardapios Model
 *
 * @property \App\Model\Table\PedidosTable|\Cake\ORM\Association\BelongsToMany $Pedidos
 * @property \App\Model\Table\PedidosTable|\Cake\ORM\Association\BelongsToMany $Pedidos
 *
 * @method \App\Model\Entity\Cardapio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cardapio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cardapio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cardapio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cardapio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cardapio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cardapio findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CardapiosTable extends Table
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

        $this->setTable('cardapios');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Pedidos', [
            'foreignKey' => 'cardapio_id',
            'targetForeignKey' => 'pedido_id',
            'joinTable' => 'cardapios_pedidos'
        ]);
        $this->belongsToMany('Pedidos', [
            'foreignKey' => 'cardapio_id',
            'targetForeignKey' => 'pedido_id',
            'joinTable' => 'pedidos_cardapios'
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
            ->requirePresence('codigo', 'create')
            ->notEmpty('codigo')
            ->add('codigo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->decimal('preco')
            ->requirePresence('preco', 'create')
            ->notEmpty('preco');

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
        $rules->add($rules->isUnique(['codigo']));

        return $rules;
    }
}
