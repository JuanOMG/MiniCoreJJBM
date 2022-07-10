<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoPase Model
 *
 * @method \App\Model\Entity\TipoPase newEmptyEntity()
 * @method \App\Model\Entity\TipoPase newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TipoPase[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TipoPase get($primaryKey, $options = [])
 * @method \App\Model\Entity\TipoPase findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TipoPase patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TipoPase[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TipoPase|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoPase saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoPase[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TipoPase[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TipoPase[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TipoPase[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TipoPaseTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tipo_pase');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 20)
            ->requirePresence('tipo', 'create')
            ->notEmptyString('tipo');

        $validator
            ->integer('cupo')
            ->requirePresence('cupo', 'create')
            ->notEmptyString('cupo');

        $validator
            ->integer('pases')
            ->requirePresence('pases', 'create')
            ->notEmptyString('pases');

        $validator
            ->numeric('costo')
            ->requirePresence('costo', 'create')
            ->notEmptyString('costo');

        return $validator;
    }
}
