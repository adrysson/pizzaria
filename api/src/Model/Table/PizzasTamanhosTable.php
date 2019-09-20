<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PizzasTamanhos Model
 *
 * @method \App\Model\Entity\PizzasTamanho get($primaryKey, $options = [])
 * @method \App\Model\Entity\PizzasTamanho newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PizzasTamanho[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PizzasTamanho|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PizzasTamanho saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PizzasTamanho patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PizzasTamanho[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PizzasTamanho findOrCreate($search, callable $callback = null, $options = [])
 */
class PizzasTamanhosTable extends Table
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

        $this->setTable('pizzas_tamanhos');
        $this->setDisplayField('nome');
        $this->setEntityClass('\App\Model\Entity\PizzaTamanho');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome')
            ->add('nome', 'unique', ['rule' => 'validateUnique', 'provider' => 'table', 'message' => 'Este tamanho de pizza já foi cadastrado']);

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['nome']));

        return $rules;
    }

}
