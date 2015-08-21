<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Check Individual Application page');
$I->amOnPage(IndividualAppData::$URL);
$I->seeInTitle(IndividualAppData::$titleText);
$I->see(IndividualAppData::$headerText);

//попытка отправить форму с незаполненными обязательными полями.
$I->click(IndividualAppData::$submitBtn);
$I->wait(1);    //для phantomjs пришлось поставить эти паузы, т.к. текст не успевает появляться и тест падает. Для Chrome или FF эти паузы можно убрать
$I->see(IndividualAppData::$validationNameText);
$I->see(IndividualAppData::$validationEmailText);
$I->see(IndividualAppData::$validationPhoneText);

//попытка отправить форму с неверно заполненным e-mail полем
$I->fillField(IndividualAppData::$emailField, IndividualAppData::$incorrectEmailAdress);
$I->click(IndividualAppData::$submitBtn);
$I->wait(1);
$I->see(IndividualAppData::$incorrectValidationEmailText);

//проверка, что меняется флаг
$I->fillField(IndividualAppData::$phoneField, '+1');
$I->wait(1);
$I->seeElement('div.us');

//заполняем поля тестовыми данными:
$I->fillField(IndividualAppData::$usernameField, IndividualAppData::$testUser);
$I->fillField(IndividualAppData::$emailField, IndividualAppData::$testEmailAdress);
$I->fillField(IndividualAppData::$phoneField, IndividualAppData::$testPhoneNumber);
$I->selectOption(IndividualAppData::$timeZone, IndividualAppData::$testTimeZone);
$I->selectOption(IndividualAppData::$interviewTime, IndividualAppData::$testInterviewTime);
$I->selectOption(IndividualAppData::$trainingProgram, IndividualAppData::$testTrainingProgram);


$I->click(IndividualAppData::$submitBtn);
$I->waitForJS("return $.active == 0;", 10); // ждём до 10сек до завершения всех jQuery AJAX запросов
//$I->wait(5); // эту команду можно использовать вместо предыдущей, т.е. просто ждём 5сек

$I->seeElementInDOM(IndividualAppData::$successfulRegistrationMessage);