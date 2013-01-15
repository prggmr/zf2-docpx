.. /Db/Sql/Predicate/Between.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Sql\\Predicate\\Between
*********************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$identifier = false, [$minValue = false, [$maxValue = false]]])


    Constructor

    :param string $identifier: 
    :param int|float|string $minValue: 
    :param int|float|string $maxValue: 



setIdentifier
-------------

.. function:: setIdentifier($identifier)


    Set identifier for comparison

    :param string $identifier: 

    :rtype: Between 



getIdentifier
-------------

.. function:: getIdentifier()


    Get identifier of comparison

    :rtype: null|string 



setMinValue
-----------

.. function:: setMinValue($minValue)


    Set minimum boundary for comparison

    :param int|float|string $minValue: 

    :rtype: Between 



getMinValue
-----------

.. function:: getMinValue()


    Get minimum boundary for comparison

    :rtype: null|int|float|string 



setMaxValue
-----------

.. function:: setMaxValue($maxValue)


    Set maximum boundary for comparison

    :param int|float|string $maxValue: 

    :rtype: Between 



getMaxValue
-----------

.. function:: getMaxValue()


    Get maximum boundary for comparison

    :rtype: null|int|float|string 



setSpecification
----------------

.. function:: setSpecification($specification)


    Set specification string to use in forming SQL predicate

    :param string $specification: 

    :rtype: Between 



getSpecification
----------------

.. function:: getSpecification()


    Get specification string to use in forming SQL predicate

    :rtype: string 



getExpressionData
-----------------

.. function:: getExpressionData()


    Return "where" parts

    :rtype: array 





