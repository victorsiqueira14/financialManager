<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Category;
use App\FinancialManager\Categories\Entities\CategoryEntity;
use App\FinancialManager\Categories\Services\CategoryService;
use App\FinancialManager\Categories\Repositories\CategoryRepository;

class AbstractServiceTest extends TestCase
{

    public function setUp():void
    {
        parent::setUp();

        $this->repository = new CategoryRepository(new CategoryEntity);
        $this->service = new CategoryService($this->repository);
        $this->category = Category::factory()->make();
        $this->data = $this->category->toArray();
    }

    public function test_save_method()
    {
        $this->service->save($this->data);

        $this->assertDatabaseHas('categories', $this->data);
    }

    public function test_find_method()
    {
        $category = $this->service->save($this->data);

        $find = $this->service->find($category->id);

        $this->assertEquals($category->toArray(), $find->toArray());
    }

    public function test_update_method()
    {
        $category = $this->repository->create($this->data);
        $expected = ['description' => fake()->name];

        $update = $this->repository->update($expected, $category->id);

        $this->assertTrue($update);

    }

    public function test_delete_method()
    {
        $category = $this->service->save($this->data);

        $delete = $this->service->delete($category->id);

        $this->assertTrue($delete);
    }
}
