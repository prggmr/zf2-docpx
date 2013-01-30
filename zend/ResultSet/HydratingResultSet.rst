.. Db/ResultSet/HydratingResultSet.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\ResultSet\\HydratingResultSet
=======================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|HydratorInterface: 
    :param null|object: 



setObjectPrototype
++++++++++++++++++

.. function:: setObjectPrototype()


    Set the row object prototype

    :param object: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ResultSet 



setHydrator
+++++++++++

.. function:: setHydrator()


    Set the hydrator to use for each row object

    :param HydratorInterface: 

    :rtype: HydratingResultSet 



getHydrator
+++++++++++

.. function:: getHydrator()


    Get the hydrator to use for each row object

    :rtype: HydratorInterface 



current
+++++++

.. function:: current()


    Iterator: get current item

    :rtype: object 



toArray
+++++++

.. function:: toArray()


    Cast result set to array of arrays

    :rtype: array 

    :throws: Exception\RuntimeException if any row is not castable to an array



