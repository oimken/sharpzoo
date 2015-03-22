<?php

return [
    "label"   => "sharp::config.zone",
    "icon"    => "map-marker",
    "plural"  => "sharp::config.zones",

    // List columns
    "list_template" => [
        "columns" => [
            "name" => [
                "header"   => "Name",
                "sortable" => true,
                "width" => 12
            ]
        ],

        "paginate" => false,
        "reorderable" => true,
        "sublist" => false,
        "searchable" => false
    ],

    // Model
    "repository" => '\App\Sharp\Zone\Repository',
    "validator" => '\App\Sharp\Zone\Validator',

    // Fields
    "form_fields" => [
        "name" => [
            "label" => "Name",
            "type" => "text"
        ],
        "is_opened" => [
            "type" => "check",
            "text" => "Is opened to public?",
            "checked" => true
        ]
    ], // End of form fields

    "form_layout" => [
        "tab1" => [
            "tab" => "",
            "col1" => [
                "name",
                "is_opened"
            ],
            "col2" => [
            ]
        ]
    ]
];