<?php

namespace skobka\yii2\annotation;

use Doctrine\Common\Annotations\Annotation\Target;

/**
 * @Annotation
 * @Target("CLASS")
 */
class Column implements Annotation
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var array
     */
    public $typeArgs = [];

    /**
     * @var bool
     */
    public $notNull = false;

    /**
     * @var string
     */
    public $extra = '';
}