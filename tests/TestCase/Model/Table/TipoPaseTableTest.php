<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoPaseTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoPaseTable Test Case
 */
class TipoPaseTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoPaseTable
     */
    protected $TipoPase;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TipoPase',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TipoPase') ? [] : ['className' => TipoPaseTable::class];
        $this->TipoPase = $this->getTableLocator()->get('TipoPase', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TipoPase);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipoPaseTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
