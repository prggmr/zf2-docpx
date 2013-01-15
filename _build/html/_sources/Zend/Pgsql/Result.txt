.. /Db/Adapter/Driver/Pgsql/Result.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Driver\\Pgsql\\Result
****************************************


@category   Zend



Methods
=======

initialize
----------

.. function:: initialize($resource, $generatedValue)


    Initialize

    :param $resource: 
    :param $generatedValue: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



current
-------

.. function:: current()


    Current

    :rtype: array|bool|mixed 



next
----

.. function:: next()


    Next

    :rtype: void 



key
---

.. function:: key()


    Key

    :rtype: int|mixed 



valid
-----

.. function:: valid()


    Valid

    :rtype: bool 



rewind
------

.. function:: rewind()


    Rewind

    :rtype: void 



buffer
------

.. function:: buffer()


    Buffer

    :rtype: null 



isBuffered
----------

.. function:: isBuffered()


    Is buffered

    :rtype: false 



isQueryResult
-------------

.. function:: isQueryResult()


    Is query result

    :rtype: bool 



getAffectedRows
---------------

.. function:: getAffectedRows()


    Get affected rows

    :rtype: int 



getGeneratedValue
-----------------

.. function:: getGeneratedValue()


    Get generated value

    :rtype: mixed|null 



getResource
-----------

.. function:: getResource()


    Get resource



count
-----

.. function:: count()


    Count
    
    (PHP 5 &gt;= 5.1.0)<br/>
    Count elements of an object


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :rtype: int The custom count as an integer.
</p>
<p>
The return value is cast to an integer.



getFieldCount
-------------

.. function:: getFieldCount()


    Get field count

    :rtype: int 





