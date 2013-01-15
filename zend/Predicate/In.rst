.. /Db/Sql/Predicate/In.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Sql\\Predicate\\In
****************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$identifier = false, [$valueSet = false]])


    Constructor

    :param null|string $identifier: 
    :param array $valueSet: 



setIdentifier
-------------

.. function:: setIdentifier($identifier)


    Set identifier for comparison

    :param string $identifier: 

    :rtype: In 



getIdentifier
-------------

.. function:: getIdentifier()


    Get identifier of comparison

    :rtype: null|string 



setValueSet
-----------

.. function:: setValueSet($valueSet)


    Set set of values for IN comparison

    :param array $valueSet: 

    :throws Exception\InvalidArgumentException: 

    :rtype: In 



getValueSet
-----------

.. function:: getValueSet()



getExpressionData
-----------------

.. function:: getExpressionData()


    Return array of parts for where statement

    :rtype: array 





