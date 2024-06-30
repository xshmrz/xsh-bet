<?php
    return [
        'filename'                              => '_ide_helper.php',
        'models_filename'                       => '_ide_helper_models.php',
        'meta_filename'                         => '.phpstorm.meta.php',
        'include_fluent'                        => true,
        'include_factory_builders'              => true,
        'write_model_magic_where'               => true,
        'write_model_external_builder_methods'  => true,
        'write_model_relation_count_properties' => true,
        'write_eloquent_model_mixins'           => true,
        'include_helpers'                       => true,
        'helper_files'                          => [
            base_path().'/vendor/laravel/framework/src/Illuminate/Support/helpers.php',
        ],
        'model_locations'                       => [
            'app/Models/Core',
        ],
        'ignored_models'                        => [
        ],
        'model_hooks'                           => [
        ],
        'extra'                                 => [
            'Eloquent' => ['Illuminate\Database\Eloquent\Builder', 'Illuminate\Database\Query\Builder'],
            'Session'  => ['Illuminate\Session\Store'],
        ],
        'magic'                                 => [
        ],
        'interfaces'                            => [
        ],
        'model_camel_case_properties'           => false,
        'type_overrides'                        => [
            'integer' => 'int',
            'boolean' => 'bool',
        ],
        'include_class_docblocks'               => false,
        'force_fqn'                             => false,
        'use_generics_annotations'              => true,
        'additional_relation_types'             => [],
        'additional_relation_return_types'      => [],
        'post_migrate'                          => [
        ],
    ];
