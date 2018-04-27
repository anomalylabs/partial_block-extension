<?php

use Anomaly\PartialsModule\Partial\PartialModel;
use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionPartialBlockCreatePartialBlockFields
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionPartialBlockCreatePartialBlockFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'partial' => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'mode'    => 'lookup',
                'related' => PartialModel::class,
            ],
        ],
    ];

}
