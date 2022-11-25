<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComentsnewsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComentsnewsTable Test Case
 */
class ComentsnewsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComentsnewsTable
     */
    protected $Comentsnews;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Comentsnews',
        'app.News',
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
        $config = $this->getTableLocator()->exists('Comentsnews') ? [] : ['className' => ComentsnewsTable::class];
        $this->Comentsnews = $this->getTableLocator()->get('Comentsnews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Comentsnews);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ComentsnewsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ComentsnewsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
