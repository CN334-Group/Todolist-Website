<?php

//login

class LoginBAT
{
    
    public function loginTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login');
        $I->fillField('Username','davert');
        $I->fillField('Password','qwerty');
        $I->click('Login');
    }
}