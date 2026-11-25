<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DatasetsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DatasetsTable Test Case
 */
class DatasetsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DatasetsTable
     */
    protected $Datasets;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Datasets',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Datasets') ? [] : ['className' => DatasetsTable::class];
        $this->Datasets = $this->getTableLocator()->get('Datasets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Datasets);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\DatasetsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\DatasetsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
