.. Db/Adapter/Driver/Sqlsrv/Result.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\Adapter\\Driver\\Sqlsrv\\Result
=========================================

Methods
+++++++

initialize
----------

.. function:: initialize()


    Initialize

    :param resource: 
    :param mixed: 

    :rtype: Result 



buffer
------

.. function:: buffer()


    @return null



isBuffered
----------

.. function:: isBuffered()


    @return bool



getResource
-----------

.. function:: getResource()


    Get resource

    :rtype: resource 



current
-------

.. function:: current()


    Current

    :rtype: mixed 



next
----

.. function:: next()


    Next

    :rtype: bool 



load
----

.. function:: load()


    Load

    :param int: 

    :rtype: mixed 



key
---

.. function:: key()


    Key

    :rtype: mixed 



rewind
------

.. function:: rewind()


    Rewind

    :rtype: bool 



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


    @return bool|int



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



