<?php
/**
 * Giraffe config content.
 */

return  [
    "label"   => "sharp::menu.page",
    "icon"    => "star",
    "plural"  => "sharp::menu.pages",

    "id_attribute" => "id",

    "active_state_field" => "actived",

    "duplicable" => true,

    "commands" => [
        "list" => [
//            "export" => [
//                "text" => "Export (CSV)",
//                "type" => "download",
//                "handler" => '\App\Sharp\Giraffe\ExportCsvCommand',
//            ]
        ],
        "entity" => [
            "birthday" => [
                "text" => "Add one year",
                "type" => "reload",
                "handler" => '\App\Sharp\Giraffe\BirthdayCommand'
            ],
            "view" => [
                "text" => "Preview",
                "type" => "view",
                "handler" => '\App\Sharp\Giraffe\PreviewCommand',
                "view" => "sharp_previews/giraffe"
            ]
        ]
    ],

    "advanced_search" => [
        'rows' => [
            'row1' => [
                'label' => 'Name',
                'fields' => [
                    'name' => [
                        'type' => 'text'
                    ]
                ]
            ],
            'row2' => [
                'repeatable' => true,
                'label' => 'Age',
                'fields' => [
                    'age_comp' => [
                        'label' => 'Age',
                        'type' => 'choose',
                        'values' => ['<' => '<', '=' => '=', '>' => '>'],
                        'field_width' => 4
                    ],
                    'age' => [
                        'type' => 'text',
                        'field_width' => 8
                    ]
                ]
            ],
            'row3' => [
                'label' => 'Particularities',
                'fields' => [
                    'particularities' => [
                        'type' => 'pivot',
                        'repository' => '\App\Sharp\Particularity\Repository',
                        'negative' => true
                    ]
                ]
            ]
        ]
    ],

    // List columns
    "list_template" => [
        "columns" => [
//            "picture" => [
//                "width" => 1,
//                "renderer" => 'thumbnail:100x100'
//            ],
//            "name" => [
//                "header"   => "Name",
//                "sortable" => true,
//                "width" => 6
//            ],
//            "age" => [
//                "header"   => "Age",
//                "sortable" => true,
//                "width" => 2
//            ],
//            "height" => [
//                "header"   => "Height",
//                "width" => 1,
//                "renderer" => '\App\Sharp\Giraffe\HeightColumnsRenderer'
//            ]
        ],

        "paginate" => 10,
        "reorderable" => false,
        "sublist" => true,
        "searchable" => true
    ],

    // Model
    "repository" => '\App\Sharp\Page\Repository',
    "validator" => '\App\Sharp\Page\Validator',

    // Fields
    "form_fields" => [
        "name" => [
            "label" => "Name",
            "type" => "text"
        ],

        "picture" => [
            "label" => "Picture (JPG)",
            "type" => "file",
            "file_filter" => "jpg,jpeg",
            "file_filter_alert" => "JPG only",
            "thumbnail" => "200x100"
        ],

        "zookeeper_id" => [
            "label" => "Zoo keeper",
            "type" => "ref",
            "repository" => '\App\Sharp\Zookeeper\Repository'
        ],

        "desc" => [
            "label" => "Description",
            "type" => "markdown",
            "toolbar" => "BI QUO LP F"
        ],

        "age" => [
            "label" => "Age",
            "type" => "text",
            "attributes" => [
                "placeholder" => "In years"
            ],
            "field_width" => 6
        ],

        "height" => [
            "label" => "Height",
            "type" => "text",
            "attributes" => [
                "placeholder" => "In cm"
            ],
            "field_width" => 6
        ],

        "particularities" => [
            "label" => "Physical particularities",
            "type" => "pivot",
            "addable" => true,
            "sortable" => true,
            "order_attribute" => "order",
            "create_attribute" => "name",
            "repository" => '\App\Sharp\Particularity\Repository'
        ],

        "photos" => [
            "label" => "Photos",
            "type" => "list",
            "sortable" => true,
            "addable" => true,
            "removable" => true,
            "add_button_text" => "Add a photo",
            "item_id_attribute" => "id",
            "item" => [
                "file" => [
                    "type" => "file",
                    "file_type" => "jpg,jpeg,png,gif",
                    "thumbnail" => "0x100"
                ],
                "legend" => [
                    "type" => "markdown",
                    "height" => 80,
                    "toolbar" => "BIUL"
                ],
                "tags" => [
                    "label" => "Tags",
                    "type" => "pivot",
                    "addable" => true,
                    "create_attribute" => "text",
                    "repository" => '\App\Sharp\Photo\PhotoTagRepository'
                ],
            ]
        ],

        "card~number" => [
            "label" => "Card number",
            "type" => "text"
        ],
        "card~origin" => [
            "label" => "Origin",
            "type" => "choose",
            "values" => [
                "0" => "Unknown",
                "1" => "Other Zoo",
                "2" => "Wild life"
            ],
            "field_width"=>6
        ],
        "card~origin_zoo" => [
            "label" => "Which one?",
            "type" => "text",
            "conditional_display" => 'card~origin:1',
            "field_width"=>6
        ],
        "card~origin_country" => [
            "label" => "From which country?",
            "type" => "text",
            "conditional_display" => 'card~origin:2',
            "field_width"=>6
        ],

        "card-label" => [
            "type"=>"label",
            "format"=>"BelongsTo Relation"
        ],

        /*"show~title" => [
            "label" => "Show title",
            "type" => "text"
        ],
        "show~desc" => [
            "label" => "Description",
            "type" => "textarea"
        ],
        "show~date" => [
            "label" => "Date of the show",
            "type" => "date",
            "has_time" => true
        ],*/
        "show-label" => [
            "type"=>"label",
            "format"=>"OneToOne Relation"
        ],

        "shows" => [
            "label" => "Shows",
            "type" => "embed_list",
            "entity_category" => "africa",
            "entity" => "show",
            "renderer" => '\App\Sharp\Giraffe\Show\EmbedRenderer',
            "sortable" => true,
            "addable" => true,
            "removable" => true,
            "add_button_text" => "Add a show",
            "item_id_attribute" => "id",
            "order_attribute" => "order"
        ],

    ], // End of form fields

    "form_layout" => [
        "tab1" => [
            "tab" => "Animal",
            "col1" => [
                "name",
                "picture",
                "zookeeper_id",
                "age",
                "height",
                "particularities"
            ],
            "col2" => [
                "desc",
                "photos"
            ]
        ],
        "tab2" => [
            "tab" => "Card",
            "col1" => [
                "card-label",
                "card~number",
                "card~origin",
                "card~origin_zoo",
                "card~origin_country"
            ],
            "col2" => []
        ],
        "tab3" => [
            "tab" => "Shows",
            "col1" => [
                "shows"
            ],
            "col2" => [

            ]
        ]
    ]
];