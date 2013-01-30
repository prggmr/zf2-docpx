.. Db/Adapter/Driver/IbmDb2/Result.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Db\\Adapter\\Driver\\IbmDb2\\Result
=========================================

Methods
-------

initialize
++++++++++

.. function:: initialize()


    @param  resource $resource

    :param mixed: 

    :rtype: Result 



current
+++++++

.. function:: current()


    (PHP 5 &gt;= 5.0.0)<br/>
    Return the current element


    :rtype: mixed Can return any type.



next
++++

.. function:: next()


    @return mixed



key
+++

.. function:: key()


    @return int|string



valid
+++++

.. function:: valid()


    @return bool



rewind
++++++

.. function:: rewind()


    (PHP 5 &gt;= 5.0.0)<br/>
    Rewind the Iterator to the first element


    :rtype: void Any returned value is ignored.



buffer
++++++

.. function:: buffer()


    Force buffering

    :rtype: void 



isBuffered
++++++++++

.. function:: isBuffered()


    Check if is buffered

    :rtype: bool|null 



isQueryResult
+++++++++++++

.. function:: isQueryResult()


    Is query result?

    :rtype: bool 



getAffectedRows
+++++++++++++++

.. function:: getAffectedRows()


    Get affected rows

    :rtype: integer 



getGeneratedValue
+++++++++++++++++

.. function:: getGeneratedValue()


    Get generated value

    :rtype: mixed|null 



getResource
+++++++++++

.. function:: getResource()


    Get the resource

    :rtype: mixed 



getFieldCount
+++++++++++++

.. function:: getFieldCount()


    Get field count

    :rtype: integer 



count
+++++

.. function:: count()


    @return null|int



