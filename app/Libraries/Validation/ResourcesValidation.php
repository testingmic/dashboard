<?php

namespace App\Libraries\Validation;

class ResourcesValidation {

    public $routes = [
        'list' => [
            'method' => 'GET',
            'authenticate' => true,
            'payload' => [
                'user_id' => 'permit_empty|integer',
                'record_id' => 'permit_empty|integer',
                'section' => 'permit_empty|string',
            ]
        ],
        'view:resource_id' => [
            'method' => 'GET',
            'authenticate' => true,
            'payload' => [
                'resource_id' => 'required|integer'
            ]
        ],
        'create' => [
            'method' => 'POST',
            'authenticate' => true,
            'payload' => [
                'record_id' => 'required|integer',
                'section' => 'required|string',
            ]
        ],
        'delete:resource_id' => [
            'method' => 'DELETE',
            'authenticate' => true,
            'payload' => [
                'resource_id' => 'required|integer'
            ]
        ]
    ];
}