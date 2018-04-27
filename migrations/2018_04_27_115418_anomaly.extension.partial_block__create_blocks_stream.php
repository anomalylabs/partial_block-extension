<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionPartialBlockCreateBlocksStream
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionPartialBlockCreateBlocksStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'blocks',
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'partial' => [
            'required' => true,
        ],
    ];

}
