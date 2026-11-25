<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateDatasets extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/5/guides/writing-migrations/migration-methods.html#the-change-method
     *
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('datasets', [
            'id' => false,
            'primary_key' => ['id'],
        ]);
        $table->addColumn('id', 'uuid', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('dataset_name', 'string', [
            'default' => null,
            'limit' => 64,
            'null' => false,
        ]);
        $table->addColumn('dataset_type', 'integer', [
            'default' => 0,
            'null' => false,
        ]);
        $table->addIndex([
            'dataset_name',
            ], [
            'name' => 'BY_DATASET_NAME',
            'unique' => true,
        ]);
        $table->create();
    }
}
