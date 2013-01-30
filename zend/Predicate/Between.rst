.. Db/Sql/Predicate/Between.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Db\\Sql\\Predicate\\Between
=================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param string: 
    :param int|float|string: 
    :param int|float|string: 



setIdentifier
+++++++++++++

.. function:: setIdentifier()


    Set identifier for comparison

    :param string: 

    :rtype: Between 



getIdentifier
+++++++++++++

.. function:: getIdentifier()


    Get identifier of comparison

    :rtype: null|string 



setMinValue
+++++++++++

.. function:: setMinValue()


    Set minimum boundary for comparison

    :param int|float|string: 

    :rtype: Between 



getMinValue
+++++++++++

.. function:: getMinValue()


    Get minimum boundary for comparison

    :rtype: null|int|float|string 



setMaxValue
+++++++++++

.. function:: setMaxValue()


    Set maximum boundary for comparison

    :param int|float|string: 

    :rtype: Between 



getMaxValue
+++++++++++

.. function:: getMaxValue()


    Get maximum boundary for comparison

    :rtype: null|int|float|string 



setSpecification
++++++++++++++++

.. function:: setSpecification()


    Set specification string to use in forming SQL predicate

    :param string: 

    :rtype: Between 



getSpecification
++++++++++++++++

.. function:: getSpecification()


    Get specification string to use in forming SQL predicate

    :rtype: string 



getExpressionData
+++++++++++++++++

.. function:: getExpressionData()


    Return "where" parts

    :rtype: array 



