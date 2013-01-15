.. /Db/Adapter/Driver/Pdo/Result.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Driver\\Pdo\\Result
**************************************


@category   Zend



Methods
=======

initialize
----------

.. function:: initialize($resource, $generatedValue, [$rowCount = false])


    Initialize

    :param PDOStatement $resource: 
    :param $generatedValue: 
    :param int $rowCount: 

    :rtype: Result 



buffer
------

.. function:: buffer()


    @return null



isBuffered
----------

.. function:: isBuffered()


    @return bool|null



getResource
-----------

.. function:: getResource()


    Get resource

    :rtype: mixed 



current
-------

.. function:: current()


    Get the data

    :rtype: array 



next
----

.. function:: next()


    Next

    :rtype: mixed 



key
---

.. function:: key()


    Key

    :rtype: mixed 



rewind
------

.. function:: rewind()


    @throws Exception\RuntimeException

    :rtype: void 



valid
-----

.. function:: valid()


    Valid

    :rtype: bool 



count
-----

.. function:: count()


    Count

    :rtype: integer 



getFieldCount
-------------

.. function:: getFieldCount()


    @return int



isQueryResult
-------------

.. function:: isQueryResult()


    Is query result

    :rtype: bool 



getAffectedRows
---------------

.. function:: getAffectedRows()


    Get affected rows

    :rtype: integer 



getGeneratedValue
-----------------

.. function:: getGeneratedValue()


    @return mixed|null





Constants
---------

STATEMENT_MODE_SCROLLABLE
+++++++++++++++++++++++++

STATEMENT_MODE_FORWARD
++++++++++++++++++++++

