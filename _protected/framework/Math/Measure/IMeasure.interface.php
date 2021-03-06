<?php
/**
 * @title          Measure Interface
 *
 * @author         Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright      (c) 2013-2015, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / Framework / Math / Measure
 * @version        1.0
 */

namespace PH7\Framework\Math\Measure;
defined('PH7') or exit('Restricted access');

interface IMeasure
{

    /**
     * Get measure.
     *
     * @return integer
     */
    public function get();

}
