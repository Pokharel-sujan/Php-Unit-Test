<?php


// unit testing is observable behavious, if you dont want to test the things that are not to be tested,  just put as protected 
class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testThatWeCanGetTheFirstName()
    {
        $user = new \App\Models\user;

        $user->setFirstName('Sujan');

        $this->assertEquals($user->getFirstName(),'Sujan');
    }

    public function testfullNameIsReturned()
    {
        $user = new \App\Models\user;
        $user->setFirstName('Sujan');
        $user->setLastName('Pokharel');
 
        $this->assertEquals($user->getFullName(), "Sujan Pokharel");
    }

    public function testFirstAndLastNameAreTrimmed()
    {
        $user = new \App\Models\user;
        $user->setFirstName('Sujan       ');
        $user->setLastName('         Pokharel');
        $this->assertEquals($user->getFirstName(), "Sujan");
        $this->assertEquals($user->getLastName(), "Pokharel");
        
    }
    

       
}