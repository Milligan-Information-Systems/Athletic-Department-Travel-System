<?php 

class CheckWhenNathanIsExcusedCest
{
    public function _before(AcceptanceTester $I)
    {
        //Step 01: Asserting I'm on Main Page.
        $I->amOnPage('/');
        $I->see('Milligan Athlete Travel Database');
        //Step 02: Logging in.
        $I->fillField('mailuid', 'nbrucehastings@gmail.com');
        $I->fillField('pwd', '1234');
        $I->click('login-submit');
        //Step 03: Asserting I'm on Home Page.
        $I->amOnPage('/index.php');
        $I->see('Home', 'a');
        $I->see('Athlete First Name');
        $I->see('Athlete Last Name');
        $I->see('Sport');
        $I->see('Date Excused');
    }

    public function _after(AcceptanceTester $I)
    {
        //Step 05: Logging out
        $I->click('logout-submit');
        $I->amOnPage('/');
        $I->see('Milligan Athlete Travel Database');
    }

    // tests
    public function searchByFirstName(AcceptanceTester $I)
    {
        //Step 04: Filter Table
        $I->fillField('valueToSearch', 'Nathan');
        $I->see('Nathan', 'tr');
    }

    public function searchByLastName(AcceptanceTester $I)
    {
        //Step 04: Filter Table
        $I->fillField('valueToSearch', 'Hastings');
        $I->see('Hastings', 'tr');
    }

    public function searchBySport(AcceptanceTester $I)
    {
        //Step 04: Filter Table
        $I->fillField('valueToSearch', 'Basketball');
        $I->see('Hastings', 'tr');
        $I->see('Basketball', 'tr');
    }
}
