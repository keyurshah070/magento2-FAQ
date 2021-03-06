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

namespace Prince\Faq\Api\Data;

interface FaqSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    
    /**
     * Get Faq list.
     * @return \Prince\Faq\Api\Data\FaqInterface[]
     */
    
    public function getItems();

    /**
     * Set title list.
     * @param \Prince\Faq\Api\Data\FaqInterface[] $items
     * @return $this
     */
    
    public function setItems(array $items);
}
