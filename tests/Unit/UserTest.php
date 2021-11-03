<?php

namespace Tests\Unit;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_un_usuario_tiene_path()
    {
        $user = User::factory()->create();
       
        /// /users/alonso@test.com
        $this->assertEquals('/users/'. $user->id, $user->path());
    }

    public function test_un_usuario_tiene_muchos_contactos()
    {
        $user = User::factory()->create();
        $contact = Contact::factory()->create(['user_id' => $user->id]);
        $contact2 = Contact::factory()->create(['user_id' => $user->id]);
        

        /// /users/alonso@test.com
        $this->assertInstanceOf(Collection::class, $user->contacts);
        $this->assertCount(2, $user->contacts);
    }
}
