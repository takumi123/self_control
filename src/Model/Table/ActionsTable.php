<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actions Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\GoalsTable|\Cake\ORM\Association\BelongsTo $Goals
 * @property \App\Model\Table\ActionLogsTable|\Cake\ORM\Association\HasMany $ActionLogs
 *
 * @method \App\Model\Entity\Action get($primaryKey, $options = [])
 * @method \App\Model\Entity\Action newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Action[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Action|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Action patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Action[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Action findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ActionsTable extends Table
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

        $this->setTable('actions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Goals', [
            'foreignKey' => 'goal_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ActionLogs', [
            'foreignKey' => 'action_id'
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
            ->scalar('action')
            ->requirePresence('action', 'create')
            ->notEmpty('action');

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
        $rules->add($rules->existsIn(['goal_id'], 'Goals'));

        return $rules;
    }
}
