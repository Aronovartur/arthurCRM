<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Abilities
    Route::apiResource('abilities', 'AbilitiesController', ['only' => ['index']]);

    // Locales
    Route::get('locales/languages', 'LocalesController@languages')->name('locales.languages');
    Route::get('locales/messages', 'LocalesController@messages')->name('locales.messages');

    // Dashboard
    Route::get('dashboard', 'DashboardApiController@index')->name('dashboard');

    // Permissions
    Route::resource('permissions', 'PermissionsApiController');

    // Roles
    Route::resource('roles', 'RolesApiController');

    // Users
    Route::resource('users', 'UsersApiController');

    // Crm Status
    Route::resource('crm-statuses', 'CrmStatusApiController');

    // Crm Customer
    Route::resource('crm-customers', 'CrmCustomerApiController');

    // Crm Note
    Route::resource('crm-notes', 'CrmNoteApiController');

    // Crm Document
    Route::post('crm-documents/media', 'CrmDocumentApiController@storeMedia')->name('crm-documents.storeMedia');
    Route::resource('crm-documents', 'CrmDocumentApiController');

    // Contact Company
    Route::resource('contact-companies', 'ContactCompanyApiController');

    // Contact Contacts
    Route::resource('contact-contacts', 'ContactContactsApiController');

    // Faq Category
    Route::resource('faq-categories', 'FaqCategoryApiController');

    // Faq Question
    Route::resource('faq-questions', 'FaqQuestionApiController');

    // Expense Category
    Route::resource('expense-categories', 'ExpenseCategoryApiController');

    // Income Category
    Route::resource('income-categories', 'IncomeCategoryApiController');

    // Expense
    Route::resource('expenses', 'ExpenseApiController');

    // Income
    Route::resource('incomes', 'IncomeApiController');

    // Expense Report
    Route::apiResource('expense-reports', 'ExpenseReportApiController', ['only' => ['index']]);

    // Courses
    Route::post('courses/media', 'CoursesApiController@storeMedia')->name('courses.storeMedia');
    Route::resource('courses', 'CoursesApiController');

    // Lessons
    Route::post('lessons/media', 'LessonsApiController@storeMedia')->name('lessons.storeMedia');
    Route::resource('lessons', 'LessonsApiController');

    // Tests
    Route::resource('tests', 'TestsApiController');

    // Questions
    Route::post('questions/media', 'QuestionsApiController@storeMedia')->name('questions.storeMedia');
    Route::resource('questions', 'QuestionsApiController');

    // Question Options
    Route::resource('question-options', 'QuestionOptionsApiController');

    // Test Results
    Route::resource('test-results', 'TestResultsApiController');

    // Test Answers
    Route::resource('test-answers', 'TestAnswersApiController');
});
