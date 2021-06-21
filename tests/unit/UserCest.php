<?php

use App\User;

class UserCest
{
    public function _before(UnitTester $I)
    {
    }

    // tests
    public function tryToTest(UnitTester $I)
    {
    }

    public function deleteUserTrue(UnitTester $I)
    {
        $id = 1;

        $I->seeRecord('users', array('id' => $id));

        $result = User::deleteUser($id);

        $I->assertArrayHasKey('status', $result);
        $I->dontSeeRecord('users', ['id' => $id]);

    }

    public function deleteUserFalse(UnitTester $I)
    {

        $id = 777;

        $I->dontSeeRecord('users', ['id' => $id]);

        $result = User::deleteUser($id);

        $I->assertArrayHasKey('error', $result);

    }
}
