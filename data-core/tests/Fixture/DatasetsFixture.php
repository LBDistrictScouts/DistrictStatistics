<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DatasetsFixture
 */
class DatasetsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 'fec0a2bd-8f6a-4df4-8506-5ffa6bd17dbf',
                'dataset_name' => 'Lorem ipsum dolor sit amet',
                'dataset_type' => 1,
            ],
        ];
        parent::init();
    }
}
