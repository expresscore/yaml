<?php
/**
 * This file is part of the ExpressCore package.
 *
 * (c) Marcin Stodulski <marcin.stodulski@devsprint.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * yaml specification: https://yaml.org/spec/1.2.2/
 */

namespace expresscore\yaml;

enum LineType {
    case SimpleValue;
    case ArrayElement;

}
