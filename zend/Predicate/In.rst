.. Db/Sql/Predicate/In.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\Sql\\Predicate\\In
============================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param null|string: 
    :param array: 



setIdentifier
-------------

.. function:: setIdentifier()


    Set identifier for comparison

    :param string: 

    :rtype: In 



getIdentifier
-------------

.. function:: getIdentifier()


    Get identifier of comparison

    :rtype: null|string 



setValueSet
-----------

.. function:: setValueSet()


    Set set of values for IN comparison

    :param array: 

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



