<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersGamesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersGamesTable Test Case
 */
class UsersGamesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersGamesTable
     */
    protected $UsersGames;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UsersGames',
        'app.Users',
        'app.Games',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UsersGames') ? [] : ['className' => UsersGamesTable::class];
        $this->UsersGames = $this->getTableLocator()->get('UsersGames', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UsersGames);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\UsersGamesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
