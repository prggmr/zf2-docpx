.. /Db/Sql/Predicate/Operator.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Sql\\Predicate\\Operator
**********************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$left = false, [$operator = "=", [$right = false, [$leftType = "identifier", [$rightType = "value"]]]]])


    Constructor

    :param int|float|bool|string $left: 
    :param string $operator: 
    :param int|float|bool|string $right: 
    :param string $leftType: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_IDENTIFIER {@see allowedTypes}
    :param string $rightType: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_VALUE {@see allowedTypes}



setLeft
-------

.. function:: setLeft($left)


    Set left side of operator

    :param int|float|bool|string $left: 

    :rtype: Operator 



getLeft
-------

.. function:: getLeft()


    Get left side of operator

    :rtype: int|float|bool|string 



setLeftType
-----------

.. function:: setLeftType($type)


    Set parameter type for left side of operator

    :param string $type: TYPE_IDENTIFIER or TYPE_VALUE {@see allowedTypes}

    :throws Exception\InvalidArgumentException: 

    :rtype: Operator 



getLeftType
-----------

.. function:: getLeftType()


    Get parameter type on left side of operator

    :rtype: string 



setOperator
-----------

.. function:: setOperator($operator)


    Set operator string

    :param string $operator: 

    :rtype: Operator 



getOperator
-----------

.. function:: getOperator()


    Get operator string

    :rtype: string 



setRight
--------

.. function:: setRight($value)


    Set right side of operator

    :param int|float|bool|string $value: 

    :rtype: Operator 



getRight
--------

.. function:: getRight()


    Get right side of operator

    :rtype: int|float|bool|string 



setRightType
------------

.. function:: setRightType($type)


    Set parameter type for right side of operator

    :param string $type: TYPE_IDENTIFIER or TYPE_VALUE {@see allowedTypes}

    :throws Exception\InvalidArgumentException: 

    :rtype: Operator 



getRightType
------------

.. function:: getRightType()


    Get parameter type on right side of operator

    :rtype: string 



getExpressionData
-----------------

.. function:: getExpressionData()


    Get predicate parts for where statement

    :rtype: array 





Constants
---------

OPERATOR_EQUAL_TO
+++++++++++++++++

OP_EQ
+++++

OPERATOR_NOT_EQUAL_TO
+++++++++++++++++++++

OP_NE
+++++

OPERATOR_LESS_THAN
++++++++++++++++++

OP_LT
+++++

OPERATOR_LESS_THAN_OR_EQUAL_TO
++++++++++++++++++++++++++++++

OP_LTE
++++++

OPERATOR_GREATER_THAN
+++++++++++++++++++++

OP_GT
+++++

OPERATOR_GREATER_THAN_OR_EQUAL_TO
+++++++++++++++++++++++++++++++++

OP_GTE
++++++

