.. Db/ResultSet/AbstractResultSet.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\ResultSet\\AbstractResultSet
======================================

Methods
-------

initialize
++++++++++

.. function:: initialize()


    Set the data source for the result set

    :param Iterator|IteratorAggregate|ResultInterface: 

    :rtype: ResultSet 

    :throws: Exception\InvalidArgumentException 



buffer
++++++

.. function:: buffer()



isBuffered
++++++++++

.. function:: isBuffered()



getDataSource
+++++++++++++

.. function:: getDataSource()


    Get the data source used to create the result set

    :rtype: null|Iterator 



getFieldCount
+++++++++++++

.. function:: getFieldCount()


    Retrieve count of fields in individual rows of the result set

    :rtype: int 



next
++++

.. function:: next()


    Iterator: move pointer to next item

    :rtype: void 



key
+++

.. function:: key()


    Iterator: retrieve current key

    :rtype: mixed 



current
+++++++

.. function:: current()


    Iterator: get current item

    :rtype: array 



valid
+++++

.. function:: valid()


    Iterator: is pointer valid?

    :rtype: bool 



rewind
++++++

.. function:: rewind()


    Iterator: rewind

    :rtype: void 



count
+++++

.. function:: count()


    Countable: return count of rows

    :rtype: int 



toArray
+++++++

.. function:: toArray()


    Cast result set to array of arrays

    :rtype: array 

    :throws: Exception\RuntimeException if any row is not castable to an array



