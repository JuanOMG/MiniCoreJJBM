<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pase Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $fecha_compra
 * @property int $tipo
 * @property int $usuario
 */
class Pase extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'fecha_compra' => true,
        'tipo' => true,
        'usuario' => true,
    ];
}
