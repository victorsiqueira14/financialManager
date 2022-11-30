<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\FinancialManager\Categories\Entities\CategoryEntity;
use App\FinancialManager\Categories\Services\CategoryService;
use App\FinancialManager\Categories\Repositories\CategoryRepository;

class RevenueTest extends TestCase
{
    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->categoryRepository = new CategoryRepository(new CategoryEntity);
        $this->categoryService = new CategoryService($this->categoryRepository);
    }
    /**
     * if a User has a revenue.
     *
     * @return void
     */
    public function test_if_user_has_revenue()
    {
        $this->user->revenue()->save($this->revenue);
        $this->assertEquals($this->revenue->id, $this->user->revenue->first()->id);
    }

    public function test_if_service_can_create_data()
    {
                // Arrange
                $data = ['name' => fake()->word];

                // Act
                $revenue = $this->categoryService->create($data);

                //Assert
                $this->assertDatabaseHas('revenues', $data);
                $this->assertTrue($revenue instanceof \app\Models\Revenue);
    }

}
