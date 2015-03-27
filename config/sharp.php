<?php

return [
    "name" => "sharp::menu.name",
    "auth_service" => false,
    "auth_service" => '\App\Sharp\SharpAuthentication',
    "languages" => [
        "en" => "English",
        "fr" => "French"
    ],
    "cms" => [
        "africa" => [
            "label" => "sharp::menu.african_area",

            "entities" => [
                "giraffe" => "file:sharp_giraffe",

                "zone" => "file:sharp_zone",

                "show" => [
                    "label"   => "sharp::config.show",
                    "plural"  => "sharp::config.shows",
                    "embedded" => true,

                    // Model
                    "repository" => '\App\Sharp\Giraffe\Show\Repository',
                    "validator" => '\App\Sharp\Giraffe\Show\Validator',

                    // Fields
                    "form_fields" => [
                        "title" => [
                            "label" => "Show title",
                            "type" => "text"
                        ],
                        "desc" => [
                            "label" => "Description",
                            "type" => "textarea"
                        ],
                        "date" => [
                            "label" => "Date of the show",
                            "type" => "date",
                            "has_time" => true
                        ],
                    ], // End of form fields

                    "form_layout" => [
                        "tab1" => [
                            "tab" => "",
                            "col1" => [
                                "title",
                                "date"
                            ],
                            "col2" => [
                                "desc"
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];