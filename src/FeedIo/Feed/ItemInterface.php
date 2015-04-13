<?php
/*
 * This file is part of the feed-io package.
 *
 * (c) Alexandre Debril <alex.debril@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FeedIo\Feed;

use FeedIo\Feed\Item\ElementInterface;

/**
 * Interface ItemInterface
 * Represents news items
 * each mandatory field has its own setter and getter
 * other fields are handled using set/get
 * @package FeedIo
 */
interface ItemInterface extends NodeInterface
{

    /**
     * @return ElementInterface
     */
    public function newElement();
    
    /**
     * @param string $name element name
     * @return mixed
     */
    public function getValue($name);
    
    /**
     * @param string $name element name
     * @param string $value element value
     * @return $this
     */      
    public function set($name, $value);
    
    /**
     * @param string $name element name
     * @return ElementIterator
     */
    public function getElementIterator($name);
    
    /**
     * @param string $name element name
     * @return boolean true if the element exists
     */   
    public function hasElement($name);
    
    /**
     * @param Element $element
     * @return $this
     */
    public function addElement(ElementInterface $element);

    /**
     * Returns all the item's optional elements
     * @return \ArrayIterator
     */
    public function getAllElements();

    /**
     * Returns the item's optional elements tag names
     * @return array
     */
    public function listElements();
}
