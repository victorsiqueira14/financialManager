<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Category;
use App\FinancialManager\Categories\Entities\CategoryEntity;
use App\FinancialManager\Categories\Repositories\CategoryRepository;


class AbstractRepositoryTest extends TestCase
{

    public function setUp():void
    {
        parent::setUp();

        $this->repository = new CategoryRepository(new CategoryEntity);
        $this->user = User::factory()->create();
        $this->category = Category::factory()->make();
        $this->data = $this->category->toArray();
    }

    public function test_create_method()
    {
        $this->repository->create($this->data);

        $this->assertDatabaseHas('categories', $this->data);
    }

    public function test_find_method()
    {
        $category = $this->repository->create($this->data);

        $find = $this->repository->find($category->id);

        $this->assertEquals($category->toArray(), $find->toArray());
        $this->assertDatabaseHas('categories', $find->toArray());

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
        $category = $this->repository->create($this->data);

        $delete = $this->repository->delete($category->id);

        $this->assertTrue($delete);
    }
}
