<?php
require_once 'Product_08.php';

class Ch2_Book extends Ch2_Product
{
    protected $_pageCount;

    public function __construct($title, $pageCount)
    {
        if (!is_numeric($pageCount) || $pageCount < 1) {
            throw new Exception('Page count must be a positive number');
        }
        parent::__construct();
        $this->_title = $title;
        $this->_pageCount = $pageCount;
        $this->_type = 'book';
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }

    public function getPageCount()
    {
        return $this->_pageCount;
    }

    public function display()
    {
        echo "<p>Book: $this->_title ($this->_pageCount pages)</p>";
    }

    public function __toString()
    {
        return $this->_title;
    }
}
