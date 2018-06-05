<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $display_cycle_time
 * @property int $activate
 * @property int $type
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ActionLog[] $action_logs
 * @property \App\Model\Entity\Action[] $actions
 * @property \App\Model\Entity\GoalLog[] $goal_logs
 * @property \App\Model\Entity\Goal[] $goals
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'email' => true,
        'first_name' => true,
        'last_name' => true,
        'display_cycle_time' => true,
        'activate' => true,
        'type' => true,
        'created' => true,
        'modified' => true,
        'action_logs' => true,
        'actions' => true,
        'goal_logs' => true,
        'goals' => true,
        'random_value' =>true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
