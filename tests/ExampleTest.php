<?php

Use Laracasts\TestDummy\Factory as TestDummy;
Use Laracasts\Integrated\Services\Laravel\DatabaseTransactions;

class ExampleTest extends TestCase {

  use DatabaseTransactions;

  /** @test */
  public function it_displays_homepage()
  {
    $this->visit('/')
         ->see('Laravel 5');
  }

  /** @test */
  public function it_registers_a_new_user()
  {
    $credentials = ['email' => 'foo@foobar.com'];

    $this->register($credentials)
         ->verifyInDatabase('users', $credentials)
         ->andSeePageIs('/home');
  }

  /** @test */
  public function it_notifies_a_user_of_registration_errors()
  {

  }

  protected function register(array $overrides)
  {
    $fields = $this->getRegisterFields($overrides);

    return $this->visit('auth/register')
                ->andSubmitForm('Register', $fields);
  }

  protected function getRegisterFields(array $overrides)
  {
    $user = TestDummy::attributesFor('App\User', $overrides);
    $user += ['password_confirmation' => $user['password']];

    return $user;
  }

}
