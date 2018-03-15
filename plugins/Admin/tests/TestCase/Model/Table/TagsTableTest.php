<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\TagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\TagsTable Test Case
 */
class TagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\TagsTable
     */
    public $Tags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.tags',
        'plugin.admin.articles',
        'plugin.admin.articles_tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tags') ? [] : ['className' => TagsTable::class];
        $this->Tags = TableRegistry::get('Tags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tags);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
