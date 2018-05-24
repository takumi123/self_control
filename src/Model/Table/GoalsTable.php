<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Goals Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ActionsTable|\Cake\ORM\Association\HasMany $Actions
 * @property \App\Model\Table\GoalLogsTable|\Cake\ORM\Association\HasMany $GoalLogs
 *
 * @method \App\Model\Entity\Goal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Goal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Goal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Goal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Goal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Goal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Goal findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GoalsTable extends Table
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

        $this->setTable('goals');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Actions', [
            'foreignKey' => 'goal_id'
        ]);
        $this->hasMany('GoalLogs', [
            'foreignKey' => 'goal_id'
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
            ->scalar('goal')
            ->requirePresence('goal', 'create')
            ->notEmpty('goal');

        $validator
            ->scalar('memo')
            ->requirePresence('memo', 'create')
            ->notEmpty('memo');

        $validator
            ->boolean('trial')
            ->requirePresence('trial', 'create')
            ->notEmpty('trial');

        $validator
            ->boolean('running')
            ->requirePresence('running', 'create')
            ->notEmpty('running');

        $validator
            ->integer('order')
            ->requirePresence('order', 'create')
            ->notEmpty('order');

        $validator
            ->integer('cycle_time')
            ->requirePresence('cycle_time', 'create')
            ->notEmpty('cycle_time');

        $validator
            ->integer('cancell_penalty_money')
            ->requirePresence('cancell_penalty_money', 'create')
            ->notEmpty('cancell_penalty_money');

        $validator
            ->integer('failure_penalty_money')
            ->requirePresence('failure_penalty_money', 'create')
            ->notEmpty('failure_penalty_money');

        $validator
            ->dateTime('end_time')
            ->requirePresence('end_time', 'create')
            ->notEmpty('end_time');

        $validator
            ->dateTime('next_time')
            ->requirePresence('next_time', 'create')
            ->notEmpty('next_time');

        $validator
            ->scalar('success_model_image_url')
            ->maxLength('success_model_image_url', 255)
            ->requirePresence('success_model_image_url', 'create')
            ->notEmpty('success_model_image_url');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
