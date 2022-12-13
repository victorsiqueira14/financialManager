<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Expense;
use App\Models\Category;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExpenseCrudTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        $this->category = Category::factory()->create();
        $this->expense = Expense::factory()
            ->recycle([$this->user, $this->category])
            ->make();
    }

    public function test_index_expense()
    {
        $this->actingAs($this->user);

        $this->post('/api/expense', $this->expense->toArray());

        $this->get('/api/expense')->assertSee($this->expense->expense_description);
    }

    public function test_store_expense()
    {
        $this->actingAs($this->user);

        $this->post('/api/expense', $this->expense->toArray())
            ->assertStatus(200);
        $this->assertDatabaseHas('expenses', $this->expense->toArray());
    }

    public function test_show_expense()
    {
        $this->actingAs($this->user);

        $response = $this->post('/api/expense', $this->expense->toArray());
        $id = json_decode($response->content(),true)['id'];

        $this->get('/api/expense/' . $id)
            ->assertSee($this->expense->expense_description);
    }

    public function test_update_expense()
    {
        $this->actingAs($this->user);

        $response = $this->post('/api/expense', $this->expense->toArray());
        $id = json_decode($response->content(),true)['id'];

        $expected = ['expense_description' => 'expense updated'];

        $this->put('/api/expense/' . $id, $expected)->assertStatus(200);
        $this->get('/api/expense/' . $id)->assertSee($expected);
    }

    public function test_delete_expense()
    {
        $this->actingAs($this->user);

        $response = $this->post('/api/expense', $this->expense->toArray());
        $id = json_decode($response->content(), true)['id'];

        $this->delete('/api/expense/' . $id)->assertStatus(200);
        $this->assertDatabaseCount('expenses', 0);
    }
}
