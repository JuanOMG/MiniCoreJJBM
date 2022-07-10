<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TipoPase Entity
 *
 * @property int $id
 * @property string $tipo
 * @property int $cupo
 * @property int $pases
 * @property float $costo
 */
class TipoPase extends Entity
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
        'tipo' => true,
        'cupo' => true,
        'pases' => true,
        'costo' => true,
    ];
}
