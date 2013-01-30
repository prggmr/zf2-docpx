.. Db/Adapter/Driver/Oci8/Result.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\Adapter\\Driver\\Oci8\\Result
=======================================

Methods
-------

initialize
++++++++++

.. function:: initialize()


    Initialize

    :param resource: // param mixed $generatedValue
// param bool|null $isBuffered

    :rtype: Result 



buffer
++++++

.. function:: buffer()


    Force buffering at driver level
    
    Oracle does not support this, to my knowledge (@ralphschindler)




isBuffered
++++++++++

.. function:: isBuffered()


    Is the result buffered?

    :rtype: bool 



getResource
+++++++++++

.. function:: getResource()


    Return the resource

    :rtype: mixed 



isQueryResult
+++++++++++++

.. function:: isQueryResult()


    Is query result?

    :rtype: boolean 



getAffectedRows
+++++++++++++++

.. function:: getAffectedRows()


    Get affected rows

    :rtype: integer 



current
+++++++

.. function:: current()


    Current

    :rtype: mixed 



loadData
++++++++

.. function:: loadData()


    Load from oci8 result

    :rtype: boolean 



next
++++

.. function:: next()


    Next



key
+++

.. function:: key()


    Key

    :rtype: mixed 



rewind
++++++

.. function:: rewind()


    Rewind



valid
+++++

.. function:: valid()


    Valid

    :rtype: boolean 



count
+++++

.. function:: count()


    Count

    :rtype: integer 



getFieldCount
+++++++++++++

.. function:: getFieldCount()


    @return int



getGeneratedValue
+++++++++++++++++

.. function:: getGeneratedValue()


    @return mixed|null



