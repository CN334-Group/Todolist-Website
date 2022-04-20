<?php

//register

class RegisterBAT
{
    public function registerTest(AcceptanceTester $I)
    {
        $I->amOnPage('/register');
        $I->fillField('Username','davert');
        $I->fillField('Password','qwerty');
        $I->click('register');
    }
}