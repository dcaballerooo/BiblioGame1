<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComentsgamesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComentsgamesTable Test Case
 */
class ComentsgamesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComentsgamesTable
     */
    protected $Comentsgames;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Comentsgames',
        'app.Games',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Comentsgames') ? [] : ['className' => ComentsgamesTable::class];
        $this->Comentsgames = $this->getTableLocator()->get('Comentsgames', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Comentsgames);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ComentsgamesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ComentsgamesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
