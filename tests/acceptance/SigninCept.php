<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('log in as an anonymous user');
$I->amOnPage('/modal_forms/nojs/login');
$I->see('Log in');
$I->dontsee('Enter your Devtrac Test The Tests username.');
$I->see('Enter your Devtrac Test username');
$I->see('Enter the password that accompanies your username.');
$I->fillField('name','davert');
$I->fillField('pass','qwerty');
$I->click('Log in');
$I->see('davert');

$I = new AcceptanceTester($scenario);
$I->wantTo('log in as an anonymous user by clicking sign in link');
$I->click('Sign in');
$I->dontsee('Enter your Devtrac Test The Tests username.');
$I->see('Enter your Devtrac Test username');
$I->see('Enter the password that accompanies your username.');
$I->fillField('name','davert');
$I->fillField('pass','qwerty');
$I->click('Log in');
$I->see('Sorry, unrecognized username or password');
$I->seeLink('Have you forgotten your password?');

$I = new AcceptanceTester($scenario);
$I->wantTo('log in as an anonymous user by visiting /user/login');
$I->amOnPage('/user/login');
$I->see('Log in');
$I->dontsee('Enter your Devtrac Test The Tests username.');
$I->see('Enter your Devtrac Test username');
$I->see('Enter the password that accompanies your username.');
$I->fillField('name','davert');
$I->fillField('pass','qwerty');
$I->click('Log in');
$I->see('Sorry, unrecognized username or password');
$I->seeLink('Have you forgotten your password?');
$I->see('Error');
$I->click('Have you forgotten your password?');
$I->see('Home');


$I = new AcceptanceTester($scenario);
$I->wantTo('log in as an Admin user by clicking the sign in link');
$I->click('Sign in');
$I->dontsee('Enter your Devtrac Test The Tests username.');
$I->see('Enter the password that accompanies your username.');
$I->see('Enter your Devtrac Test username');
$I->fillField('name','admin');
$I->fillField('pass','admin');
$I->click('Log in');
$I->dontsee('Sorry, unrecognized username or password');
$I->dontseeLink('Have you forgotten your password?');