<?php

class UserTest extends \PHPUnit_Framework_TestCase
{

  //test first name is returned
  public function testThatWeCanGetFirstName()
  {
    $user = new \App\Models\User;

    $user->setFirstName('Bob');

    $this->assertEquals($user->getFirstName(), 'Bob');
  }
  //test last name is returned
  public function testThatWeCanGetLastName()
  {
    $user = new \App\Models\User;

    $user->setLastName('Brown');

    $this->assertEquals($user->getLastName(), 'Brown');
  }

  //test full name is returned
  public function testThatFullNameIsReturned()
  {
    $user = new \App\Models\User;
    $user->setFirstName('Bob');
    $user->setLastName('Brown');

    $this->assertEquals($user->getFullName(), 'Bob Brown');
  }

  //test no whitespace
  public function testFirstAndLastNameAreTrimmed()
  {
    $user = new \App\Models\User;
    $user->setFirstName('   Bob ');
    $user->setLastName('    Brown   ');

    $this->assertEquals($user->getFirstName(), 'Bob');
    $this->assertEquals($user->getLastName(), 'Brown');
  }

  public function testEmailAddressCanBeSet()
  {
    $email = 'billy@gmail.com';

    $user = new \App\Models\User;
    $user->setEmail($email);

    $this->assertEquals($user->getEmail(), 'billy@gmail.com');
  }

  public function testEmailVariablesContainCorrectValues()
  {
    $user = new \App\Models\User;
    $user->setFirstName('Bob');
    $user->setLastName('Brown');
    $user->setEmail('billy@gmail.com');

    $emailVariables = $user->getEmailVariables();

    $this->assertArrayHasKey('email', $emailVariables);
    $this->assertArrayHasKey('fullName', $emailVariables);

    $this->assertEquals($emailVariables['email'], 'billy@gmail.com' );
    $this->assertEquals($emailVariables['fullName'], 'Bob Brown' );

  }
}
