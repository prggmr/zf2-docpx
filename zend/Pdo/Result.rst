.. Db/Adapter/Driver/Pdo/Result.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\Adapter\\Driver\\Pdo\\Result
======================================

Methods
-------

initialize
++++++++++

.. function:: initialize()


    Initialize

    :param PDOStatement: 
    :param $generatedValue: 
    :param int: 

    :rtype: Result 



buffer
++++++

.. function:: buffer()


    @return null



isBuffered
++++++++++

.. function:: isBuffered()


    @return bool|null



getResource
+++++++++++

.. function:: getResource()


    Get resource

    :rtype: mixed 



current
+++++++

.. function:: current()


    Get the data

    :rtype: array 



next
++++

.. function:: next()


    Next

    :rtype: mixed 



key
+++

.. function:: key()


    Key

    :rtype: mixed 



rewind
++++++

.. function:: rewind()


    @throws Exception\RuntimeException

    :rtype: void 



valid
+++++

.. function:: valid()


    Valid

    :rtype: bool 



count
+++++

.. function:: count()


    Count

    :rtype: integer 



getFieldCount
+++++++++++++

.. function:: getFieldCount()


    @return int



isQueryResult
+++++++++++++

.. function:: isQueryResult()


    Is query result

    :rtype: bool 



getAffectedRows
+++++++++++++++

.. function:: getAffectedRows()


    Get affected rows

    :rtype: integer 



getGeneratedValue
+++++++++++++++++

.. function:: getGeneratedValue()


    @return mixed|null





Constants
---------

STATEMENT_MODE_SCROLLABLE
+++++++++++++++++++++++++

STATEMENT_MODE_FORWARD
++++++++++++++++++++++

