<?php

/**
 * MagePrince
 * Copyright (C) 2020 Mageprince <info@mageprince.com>
 *
 * @package Prince_Faq
 * @copyright Copyright (c) 2020 Mageprince (http://www.mageprince.com/)
 * @license http://opensource.org/licenses/gpl-3.0.html GNU General Public License,version 3 (GPL-3.0)
 * @author MagePrince <info@mageprince.com>
 */

namespace Prince\Faq\Model\ResourceModel;

class FaqGroup extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('prince_faqgroup', 'faqgroup_id');
    }
}
