<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PizzasSabores Model
 *
 * @method \App\Model\Entity\PizzasSabore get($primaryKey, $options = [])
 * @method \App\Model\Entity\PizzasSabore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PizzasSabore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PizzasSabore|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PizzasSabore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PizzasSabore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PizzasSabore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PizzasSabore findOrCreate($search, callable $callback = null, $options = [])
 */
class PizzasSaboresTable extends Table
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

        $this->setTable('pizzas_sabores');
        $this->setDisplayField('nome');
        $this->setEntityClass('\App\Model\Entity\PizzaSabor');
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
            ->notEmptyString('nome');

        return $validator;
    }
}
