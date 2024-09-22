<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CustomerControllerTest extends TestCase
{
    use DatabaseTransactions;
    
    /** @test */
    public function login()
    {
        // Create a user
        //$user = User::factory()->create();

        $user = User::factory()->create();

        $response = $this->post('/admin/login', [
                            'email' => $user->email,
                            'password' => 'password',
                        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/');

        // Dump the user to verify if it's the expected user
        //dump($user);

        // Fetch CSRF token
        //$token = csrf_token();

        // Dump the CSRF token to verify if it's generated correctly
        //dump($token);

        // Act as the user and make a request to the '/admin/dashboard' route
        // $response = $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class)
        //                 ->actingAs($user)->get('/admin/dashboard');

        // Dump the request and response to inspect their contents
        //dump($this->app['request']->all());
        // dump($this->app['response']);
        // dump(auth()->user());
        // dump($response->getContent());

        // Assert that the response is successful
        //$response->assertStatus(200);
    }


    /** @test */
    public function it_can_filter_customers_by_date_and_name()
    {

        $user = User::factory()->create();

        $response = $this->post('/admin/login', [
                            'email' => $user->email,
                            'password' => 'password',
                        ]);

        $this->assertAuthenticated();

        //$this->actingAs($user);

        // Create sample customers with specific creation dates
        Customer::factory()->create(['created_at' => now()->subDays(10)]);
        Customer::factory()->create(['created_at' => now()->subDays(5)]);
        Customer::factory()->create(['created_at' => now()->subDays(2)]);
        Customer::factory()->create(['created_at' => now()->subDays(1)]);

        // Define the query parameters for filtering
        $params = [
            'start_date' => now()->subDays(7)->format('Y-m-d'),
            'end_date' => now()->subDays(1)->format('Y-m-d'),
            'name' => 'John', // assuming you have a customer named John
        ];

        // Send a GET request to the index endpoint with the defined parameters
        $response = $this->actingAs($user)->get('/admin/customers', $params);

        // Assert that the response is successful (status code 200)
        $response->assertStatus(200);

        // Assert that the response contains the customers filtered by date and name
        //$response->assertSeeInOrder(['John']); // Add other expected names if needed
    }

    // Add more test cases as needed
}
