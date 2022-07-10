<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaseFixture
 */
class PaseFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pase';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'fecha_compra' => 1657474615,
                'tipo' => 1,
                'usuario' => 1,
            ],
        ];
        parent::init();
    }
}
