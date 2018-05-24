<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Action Entity
 *
 * @property int $id
 * @property string $action
 * @property string $memo
 * @property int $user_id
 * @property int $goal_id
 * @property bool $trial
 * @property bool $running
 * @property int $order
 * @property int $cycle_time
 * @property int $cancell_penalty_money
 * @property int $failure_penalty_money
 * @property \Cake\I18n\FrozenTime $end_time
 * @property \Cake\I18n\FrozenTime $next_time
 * @property string $success_model_image_url
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Goal $goal
 * @property \App\Model\Entity\ActionLog[] $action_logs
 */
class Action extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'action' => true,
        'memo' => true,
        'user_id' => true,
        'goal_id' => true,
        'trial' => true,
        'running' => true,
        'order' => true,
        'cycle_time' => true,
        'cancell_penalty_money' => true,
        'failure_penalty_money' => true,
        'end_time' => true,
        'next_time' => true,
        'success_model_image_url' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'goal' => true,
        'action_logs' => true
    ];
}
