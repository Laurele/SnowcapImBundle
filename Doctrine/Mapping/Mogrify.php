<?php

/*
 * This file is part of the Snowcap ImBundle package.
 *
 * (c) Snowcap <shoot@snowcap.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snowcap\ImBundle\Doctrine\Mapping;

use Doctrine\Common\Annotations\Annotation;

/**
 * Annotation definition class
 *
 * @Annotation
 * @codeCoverageIgnore
 */
class Mogrify extends Annotation
{
    /** @var array */
    public $params;
}
