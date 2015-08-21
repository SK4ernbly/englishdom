<?php

class IndividualAppData
{
    public static $URL = "/form/individual/";

    public static $titleText = "Заявка на обучение — индивидуальные курсы английского языка | EnglishDom";
    public static $headerText = "Заявка на обучение";

//определяем поля, дропбоксы и т.д.:
    public static $usernameField = "first_name";
    public static $emailField = "email";
    public static $phoneField = "phone";
    public static $timeZone = "gmt";
    public static $interviewTime = "time";
    public static $trainingProgram = "programs";
    public static $submitBtn = ".ed-btn.btn-applic";
    public static $successfulRegistrationMessage = ".text-notknow";


    public static $validationNameText = "Введите имя";
    public static $validationEmailText = "Введите email";
    public static $incorrectValidationEmailText = "Неверный email";
    public static $validationPhoneText = "Неверный формат телефона";

//тестовые данные
    public static $testUser = "test_user";
    public static $testEmailAdress = "test_user@gmail.com";
    public static $incorrectEmailAdress = "test_user123";
    public static $testPhoneNumber = "+380 1234567";
    public static $testTimeZone = "(UTC +2) Киев, Кишинёв";
    public static $testInterviewTime = "21:00 – 24:00";
    public static $testTrainingProgram = "Базовый английский";
//  и т.д.

}
