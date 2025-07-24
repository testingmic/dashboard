<?php

namespace App\Libraries\Validation;

class AssignmentsValidation {

    public $routes = [
        'list' => [
            'method' => 'POST,GET',
            'authenticate' => true,
            'payload' => [
                'course_id' => 'permit_empty|integer',
                'class_id' => 'permit_empty|integer',
                'assignment_id' => 'permit_empty|integer',
                'assignment_type' => 'permit_empty|string|in_list[Quiz,Assignment,Project]',
                'status' => 'permit_empty|string|in_list[Pending,Submitted,Graded,Late]',
                'user_id' => 'permit_empty|integer',
                'limit' => 'permit_empty|integer',
                'offset' => 'permit_empty|integer',
            ]
        ],
        'view:assignment_id' => [
            'method' => 'GET',
            'authenticate' => true,
            'payload' => [
                'assignment_id' => 'required|integer',
            ]
        ],
        'create' => [
            'method' => 'POST',
            'authenticate' => true,
            'payload' => [
                'title' => 'required|string|max_length[255]',
                'description' => 'required|string|max_length[2000]',
                'due_date' => 'required|string|max_length[255]',
                'grade' => 'required|integer',
                'course_id' => 'required|integer',
                'class_id' => 'permit_empty|integer',
                'assignment_type' => 'required|string|in_list[Quiz,Assignment,Project]',
                'status' => 'permit_empty|string|in_list[Pending,Submitted,Graded,Late]',
            ]
        ],
        'update:assignment_id' => [
            'method' => 'POST',
            'authenticate' => true,
            'payload' => [
                'title' => 'permit_empty|string|max_length[255]',
                'description' => 'permit_empty|string|max_length[2000]',
                'due_date' => 'permit_empty|string|max_length[255]',
                'grade' => 'permit_empty|integer',
                'course_id' => 'permit_empty|integer',
                'class_id' => 'permit_empty|integer',
                'assignment_type' => 'permit_empty|string|in_list[Quiz,Assignment,Project]',
                'status' => 'permit_empty|string|in_list[Pending,Submitted,Graded,Late]',
                'assignment_id' => 'required|integer',
            ]
        ],
        'delete:assignment_id' => [
            'method' => 'DELETE',
            'authenticate' => true,
            'payload' => [
                'assignment_id' => 'required|integer',
            ]
        ],
        'submit:assignment_id' => [
            'method' => 'POST',
            'authenticate' => true,
            'payload' => [
                'assignment_id' => 'required|integer',
            ]
        ],
    ];
}