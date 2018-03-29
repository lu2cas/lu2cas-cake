<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $body
 * @property bool $published
 * @property \Cake\I18n\FrozenTime $created_on
 * @property \Cake\I18n\FrozenTime $last_modified_on
 * @property int $created_by
 * @property int $last_modified_by
 *
 * @property \App\Model\Entity\Tag[] $tags
 */
class Article extends Entity
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
        'title' => true,
        'slug' => true,
        'body' => true,
        'published' => true,
        'created_on' => true,
        'last_modified_on' => true,
        'created_by' => true,
        'last_modified_by' => true,
        'tags' => true
    ];
}
