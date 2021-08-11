<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 39,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 40,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 41,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 42,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 43,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 44,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 45,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 46,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 47,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 48,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 49,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 50,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 51,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 52,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 53,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 54,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 55,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 56,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 57,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 58,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 59,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 60,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 61,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 62,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 63,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 64,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 65,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 66,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 67,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 68,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 69,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 70,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 71,
                'title' => 'expense_create',
            ],
            [
                'id'    => 72,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 73,
                'title' => 'expense_show',
            ],
            [
                'id'    => 74,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 75,
                'title' => 'expense_access',
            ],
            [
                'id'    => 76,
                'title' => 'income_create',
            ],
            [
                'id'    => 77,
                'title' => 'income_edit',
            ],
            [
                'id'    => 78,
                'title' => 'income_show',
            ],
            [
                'id'    => 79,
                'title' => 'income_delete',
            ],
            [
                'id'    => 80,
                'title' => 'income_access',
            ],
            [
                'id'    => 81,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 82,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 83,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 84,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 85,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 86,
                'title' => 'course_create',
            ],
            [
                'id'    => 87,
                'title' => 'course_edit',
            ],
            [
                'id'    => 88,
                'title' => 'course_show',
            ],
            [
                'id'    => 89,
                'title' => 'course_delete',
            ],
            [
                'id'    => 90,
                'title' => 'course_access',
            ],
            [
                'id'    => 91,
                'title' => 'lesson_create',
            ],
            [
                'id'    => 92,
                'title' => 'lesson_edit',
            ],
            [
                'id'    => 93,
                'title' => 'lesson_show',
            ],
            [
                'id'    => 94,
                'title' => 'lesson_delete',
            ],
            [
                'id'    => 95,
                'title' => 'lesson_access',
            ],
            [
                'id'    => 96,
                'title' => 'test_create',
            ],
            [
                'id'    => 97,
                'title' => 'test_edit',
            ],
            [
                'id'    => 98,
                'title' => 'test_show',
            ],
            [
                'id'    => 99,
                'title' => 'test_delete',
            ],
            [
                'id'    => 100,
                'title' => 'test_access',
            ],
            [
                'id'    => 101,
                'title' => 'question_create',
            ],
            [
                'id'    => 102,
                'title' => 'question_edit',
            ],
            [
                'id'    => 103,
                'title' => 'question_show',
            ],
            [
                'id'    => 104,
                'title' => 'question_delete',
            ],
            [
                'id'    => 105,
                'title' => 'question_access',
            ],
            [
                'id'    => 106,
                'title' => 'question_option_create',
            ],
            [
                'id'    => 107,
                'title' => 'question_option_edit',
            ],
            [
                'id'    => 108,
                'title' => 'question_option_show',
            ],
            [
                'id'    => 109,
                'title' => 'question_option_delete',
            ],
            [
                'id'    => 110,
                'title' => 'question_option_access',
            ],
            [
                'id'    => 111,
                'title' => 'test_result_create',
            ],
            [
                'id'    => 112,
                'title' => 'test_result_edit',
            ],
            [
                'id'    => 113,
                'title' => 'test_result_show',
            ],
            [
                'id'    => 114,
                'title' => 'test_result_delete',
            ],
            [
                'id'    => 115,
                'title' => 'test_result_access',
            ],
            [
                'id'    => 116,
                'title' => 'test_answer_create',
            ],
            [
                'id'    => 117,
                'title' => 'test_answer_edit',
            ],
            [
                'id'    => 118,
                'title' => 'test_answer_show',
            ],
            [
                'id'    => 119,
                'title' => 'test_answer_delete',
            ],
            [
                'id'    => 120,
                'title' => 'test_answer_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
