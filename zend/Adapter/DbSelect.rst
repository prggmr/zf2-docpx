.. Paginator/Adapter/DbSelect.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Paginator\\Adapter\\DbSelect
==================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor.

    :param Select: The select query
    :param Adapter|Sql: DB adapter or Sql object
    :param null|ResultSetInterface: 

    :throws Exception\InvalidArgumentException: 



getItems
++++++++

.. function:: getItems()


    Returns an array of items for a page.

    :param integer: Page offset
    :param integer: Number of items per page

    :rtype: array 



count
+++++

.. function:: count()


    Returns the total number of rows in the result set.

    :rtype: integer 



