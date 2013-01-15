.. /Db/ResultSet/HydratingResultSet.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\ResultSet\\HydratingResultSet
***************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$hydrator = false, [$objectPrototype = false]])


    Constructor

    :param null|HydratorInterface $hydrator: 
    :param null|object $objectPrototype: 



setObjectPrototype
------------------

.. function:: setObjectPrototype($objectPrototype)


    Set the row object prototype

    :param object $objectPrototype: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ResultSet 



setHydrator
-----------

.. function:: setHydrator($hydrator)


    Set the hydrator to use for each row object

    :param HydratorInterface $hydrator: 

    :rtype: HydratingResultSet 



getHydrator
-----------

.. function:: getHydrator()


    Get the hydrator to use for each row object

    :rtype: HydratorInterface 



current
-------

.. function:: current()


    Iterator: get current item

    :rtype: object 



toArray
-------

.. function:: toArray()


    Cast result set to array of arrays

    :rtype: array 

    :throws: Exception\RuntimeException if any row is not castable to an array





