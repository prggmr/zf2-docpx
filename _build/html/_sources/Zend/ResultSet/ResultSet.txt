.. /Db/ResultSet/ResultSet.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\ResultSet\\ResultSet
******************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$returnType = "arrayobject", [$arrayObjectPrototype = false]])


    Constructor

    :param string $returnType: 
    :param null|ArrayObject $arrayObjectPrototype: 



setArrayObjectPrototype
-----------------------

.. function:: setArrayObjectPrototype($arrayObjectPrototype)


    Set the row object prototype

    :param ArrayObject $arrayObjectPrototype: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ResultSet 



getArrayObjectPrototype
-----------------------

.. function:: getArrayObjectPrototype()


    Get the row object prototype

    :rtype: ArrayObject 



getReturnType
-------------

.. function:: getReturnType()


    Get the return type to use when returning objects from the set

    :rtype: string 



current
-------

.. function:: current()


    @return array|\ArrayObject|null





Constants
---------

TYPE_ARRAYOBJECT
++++++++++++++++

TYPE_ARRAY
++++++++++

