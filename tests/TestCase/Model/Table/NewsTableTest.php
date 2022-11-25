<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewsTable Test Case
 */
class NewsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NewsTable
     */
    protected $News;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.News',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('News') ? [] : ['className' => NewsTable::class];
        $this->News = $this->getTableLocator()->get('News', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->News);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NewsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
