<?php namespace Anomaly\PartialBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Anomaly\PartialBlockExtension\Block\BlockModel;

/**
 * Class PartialBlockExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class PartialBlockExtension extends BlockExtension
{

    /**
     * This extension provides a partial
     * extension for the Blocks Module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.partial';

    /**
     * The block view.
     *
     * @var string
     */
    protected $view = 'anomaly.extension.partial_block::content';

    /**
     * The block model.
     *
     * @var string
     */
    protected $model = BlockModel::class;

}
