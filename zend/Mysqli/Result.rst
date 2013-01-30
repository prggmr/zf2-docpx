.. Db/Adapter/Driver/Mysqli/Result.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\Adapter\\Driver\\Mysqli\\Result
=========================================

Methods
+++++++

initialize
----------

.. function:: initialize()


    Initialize

    :param mixed: 
    :param mixed: 
    :param bool|null: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Result 



buffer
------

.. function:: buffer()


    Force buffering




isBuffered
----------

.. function:: isBuffered()


    Check if is buffered

    :rtype: bool|null 



getResource
-----------

.. function:: getResource()


    Return the resource

    :rtype: mixed 



isQueryResult
-------------

.. function:: isQueryResult()


    Is query result?

    :rtype: bool 



getAffectedRows
---------------

.. function:: getAffectedRows()


    Get affected rows

    :rtype: integer 



current
-------

.. function:: current()


    Current

    :rtype: mixed 



loadDataFromMysqliStatement
---------------------------

.. function:: loadDataFromMysqliStatement()


    Mysqli's binding and returning of statement values
    
    Mysqli requires you to bind variables to the extension in order to
    get data out.  These values have to be references:



    :rtype: bool 



loadFromMysqliResult
--------------------

.. function:: loadFromMysqliResult()


    Load from mysqli result

    :rtype: bool 



next
----

.. function:: next()


    Next

    :rtype: void 



key
---

.. function:: key()


    Key

    :rtype: mixed 



rewind
------

.. function:: rewind()


    Rewind


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


    Get field count

    :rtype: integer 



getGeneratedValue
-----------------

.. function:: getGeneratedValue()


    Get generated value

    :rtype: mixed|null 



