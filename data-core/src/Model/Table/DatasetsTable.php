<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Datasets Model
 *
 * @method \App\Model\Entity\Dataset newEmptyEntity()
 * @method \App\Model\Entity\Dataset newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Dataset> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dataset get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Dataset findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Dataset patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Dataset> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dataset|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Dataset saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Dataset>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dataset>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dataset>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dataset> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dataset>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dataset>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dataset>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dataset> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DatasetsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('datasets');
        $this->setDisplayField('dataset_name');
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
            ->scalar('dataset_name')
            ->maxLength('dataset_name', 64)
            ->requirePresence('dataset_name', 'create')
            ->notEmptyString('dataset_name')
            ->add('dataset_name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('dataset_type')
            ->notEmptyString('dataset_type');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['dataset_name']), ['errorField' => 'dataset_name']);

        return $rules;
    }
}
