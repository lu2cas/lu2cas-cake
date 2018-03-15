<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $group_id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $photo
 * @property string $bio
 * @property bool $active
 * @property \Cake\I18n\FrozenTime $created_on
 * @property \Cake\I18n\FrozenTime $last_modified_on
 * @property int $created_by
 * @property int $last_modified_by
 *
 * @property \Admin\Model\Entity\Group $group
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
        'group_id' => true,
        'name' => true,
        'email' => true,
        'password' => true,
        'photo' => true,
        'bio' => true,
        'active' => true,
        'created_on' => true,
        'last_modified_on' => true,
        'created_by' => true,
        'last_modified_by' => true,
        'group' => true
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
