<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GamesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GamesTable Test Case
 */
class GamesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GamesTable
     */
    protected $Games;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Games',
        'app.Comentsgames',
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
        $config = $this->getTableLocator()->exists('Games') ? [] : ['className' => GamesTable::class];
        $this->Games = $this->getTableLocator()->get('Games', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Games);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GamesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
