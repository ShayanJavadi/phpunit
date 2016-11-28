<?php

class UserTest extends \PHPUnit_Framework_TestCase
{
  public function testThatWeCanGetFirstName()
  {
    $user = new \App\Models\User;

    $user->setFirstName('Bob');

    $this->assertEquals($user->getFirstName(), 'Bob');
  }

  public function testThatWeCanGetLastName()
  {
    $user = new \App\Models\User;

    $user->setLastName('Brown');

    $this->assertEquals($user->getLastName(), 'Brown');
  }

  public function testThatFullNameIsReturned()
  {
    $user = new \App\Models\User;
    $user->setFirstName('Bob');
    $user->setLastName('Brown');

    $this->assertEquals($user->getFullName(), 'Bob Brown');
  }
}
