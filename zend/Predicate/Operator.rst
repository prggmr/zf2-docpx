.. Db/Sql/Predicate/Operator.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Db\\Sql\\Predicate\\Operator
==================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param int|float|bool|string: 
    :param string: 
    :param int|float|bool|string: 
    :param string: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_IDENTIFIER {@see allowedTypes}
    :param string: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_VALUE {@see allowedTypes}



setLeft
+++++++

.. function:: setLeft()


    Set left side of operator

    :param int|float|bool|string: 

    :rtype: Operator 



getLeft
+++++++

.. function:: getLeft()


    Get left side of operator

    :rtype: int|float|bool|string 



setLeftType
+++++++++++

.. function:: setLeftType()


    Set parameter type for left side of operator

    :param string: TYPE_IDENTIFIER or TYPE_VALUE {@see allowedTypes}

    :throws Exception\InvalidArgumentException: 

    :rtype: Operator 



getLeftType
+++++++++++

.. function:: getLeftType()


    Get parameter type on left side of operator

    :rtype: string 



setOperator
+++++++++++

.. function:: setOperator()


    Set operator string

    :param string: 

    :rtype: Operator 



getOperator
+++++++++++

.. function:: getOperator()


    Get operator string

    :rtype: string 



setRight
++++++++

.. function:: setRight()


    Set right side of operator

    :param int|float|bool|string: 

    :rtype: Operator 



getRight
++++++++

.. function:: getRight()


    Get right side of operator

    :rtype: int|float|bool|string 



setRightType
++++++++++++

.. function:: setRightType()


    Set parameter type for right side of operator

    :param string: TYPE_IDENTIFIER or TYPE_VALUE {@see allowedTypes}

    :throws Exception\InvalidArgumentException: 

    :rtype: Operator 



getRightType
++++++++++++

.. function:: getRightType()


    Get parameter type on right side of operator

    :rtype: string 



getExpressionData
+++++++++++++++++

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

