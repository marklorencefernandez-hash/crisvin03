<?php

namespace Tests\Unit;

use App\Database\InventoryRepository;
use App\Database\PdoSqliteFactory;
use PHPUnit\Framework\TestCase;

class InventoryRepositoryTest extends TestCase
{
    public function test_create_read_update_delete_using_prepared_statements(): void
    {
        $repo = new InventoryRepository(PdoSqliteFactory::connect(':memory:'));
        $id = $repo->create('Notebook', 5);
        $this->assertSame('Notebook', $repo->find($id)['name']);
        $this->assertTrue($repo->update($id, 'Notebook', 8));
        $this->assertSame(8, $repo->find($id)['quantity']);
        $this->assertTrue($repo->delete($id));
        $this->assertFalse($repo->find($id));
    }

    public function test_sql_injection_like_text_is_stored_as_data_not_executed(): void
    {
        $repo = new InventoryRepository(PdoSqliteFactory::connect(':memory:'));
        $input = "Book'); DROP TABLE inventory_items; --";
        $repo->create($input, 1);
        $this->assertSame($input, $repo->all()[0]['name']);
        $this->assertCount(1, $repo->all());
    }
}
