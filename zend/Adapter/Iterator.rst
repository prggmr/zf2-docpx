.. Paginator/Adapter/Iterator.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Paginator\\Adapter\\Iterator
==================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor.

    :param \Iterator: Iterator to paginate

    :throws \Zend\Paginator\Adapter\Exception\InvalidArgumentException: 



getItems
++++++++

.. function:: getItems()


    Returns an iterator of items for a page, or an empty array.

    :param integer: Page offset
    :param integer: Number of items per page

    :rtype: array|\Zend\Paginator\SerializableLimitIterator 



count
+++++

.. function:: count()


    Returns the total number of rows in the collection.

    :rtype: integer 



