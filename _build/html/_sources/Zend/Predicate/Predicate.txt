.. /Db/Sql/Predicate/Predicate.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Sql\\Predicate\\Predicate
***********************************


@property Predicate $and



Methods
=======

nest
----

.. function:: nest()


    Begin nesting predicates

    :rtype: Predicate 



setUnnest
---------

.. function:: setUnnest($predicate)


    Indicate what predicate will be unnested

    :param Predicate $predicate: 

    :rtype: void 



unnest
------

.. function:: unnest()


    Indicate end of nested predicate

    :rtype: Predicate 

    :throws: \RuntimeException 



equalTo
-------

.. function:: equalTo($left, $right, [$leftType = "identifier", [$rightType = "value"]])


    Create "Equal To" predicate
    
    Utilizes Operator predicate

    :param int|float|bool|string $left: 
    :param int|float|bool|string $right: 
    :param string $leftType: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_IDENTIFIER {@see allowedTypes}
    :param string $rightType: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_VALUE {@see allowedTypes}

    :rtype: Predicate 



notEqualTo
----------

.. function:: notEqualTo($left, $right, [$leftType = "identifier", [$rightType = "value"]])


    Create "Not Equal To" predicate
    
    Utilizes Operator predicate

    :param int|float|bool|string $left: 
    :param int|float|bool|string $right: 
    :param string $leftType: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_IDENTIFIER {@see allowedTypes}
    :param string $rightType: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_VALUE {@see allowedTypes}

    :rtype: Predicate 



lessThan
--------

.. function:: lessThan($left, $right, [$leftType = "identifier", [$rightType = "value"]])


    Create "Less Than" predicate
    
    Utilizes Operator predicate

    :param int|float|bool|string $left: 
    :param int|float|bool|string $right: 
    :param string $leftType: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_IDENTIFIER {@see allowedTypes}
    :param string $rightType: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_VALUE {@see allowedTypes}

    :rtype: Predicate 



greaterThan
-----------

.. function:: greaterThan($left, $right, [$leftType = "identifier", [$rightType = "value"]])


    Create "Greater Than" predicate
    
    Utilizes Operator predicate

    :param int|float|bool|string $left: 
    :param int|float|bool|string $right: 
    :param string $leftType: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_IDENTIFIER {@see allowedTypes}
    :param string $rightType: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_VALUE {@see allowedTypes}

    :rtype: Predicate 



lessThanOrEqualTo
-----------------

.. function:: lessThanOrEqualTo($left, $right, [$leftType = "identifier", [$rightType = "value"]])


    Create "Less Than Or Equal To" predicate
    
    Utilizes Operator predicate

    :param int|float|bool|string $left: 
    :param int|float|bool|string $right: 
    :param string $leftType: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_IDENTIFIER {@see allowedTypes}
    :param string $rightType: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_VALUE {@see allowedTypes}

    :rtype: Predicate 



greaterThanOrEqualTo
--------------------

.. function:: greaterThanOrEqualTo($left, $right, [$leftType = "identifier", [$rightType = "value"]])


    Create "Greater Than Or Equal To" predicate
    
    Utilizes Operator predicate

    :param int|float|bool|string $left: 
    :param int|float|bool|string $right: 
    :param string $leftType: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_IDENTIFIER {@see allowedTypes}
    :param string $rightType: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_VALUE {@see allowedTypes}

    :rtype: Predicate 



like
----

.. function:: like($identifier, $like)


    Create "Like" predicate
    
    Utilizes Like predicate

    :param string $identifier: 
    :param string $like: 

    :rtype: Predicate 



literal
-------

.. function:: literal($literal, $parameter)


    Create "Literal" predicate
    
    Utilizes Like predicate

    :param string $literal: 
    :param int|float|bool|string|array $parameter: 

    :rtype: Predicate 



isNull
------

.. function:: isNull($identifier)


    Create "IS NULL" predicate
    
    Utilizes IsNull predicate

    :param string $identifier: 

    :rtype: Predicate 



isNotNull
---------

.. function:: isNotNull($identifier)


    Create "IS NOT NULL" predicate
    
    Utilizes IsNotNull predicate

    :param string $identifier: 

    :rtype: Predicate 



in
--

.. function:: in($identifier, [$valueSet = false])


    Create "in" predicate
    
    Utilizes In predicate

    :param string $identifier: 
    :param array|Select $valueSet: 

    :rtype: Predicate 



between
-------

.. function:: between($identifier, $minValue, $maxValue)


    Create "between" predicate
    
    Utilizes Between predicate

    :param string $identifier: 
    :param int|float|string $minValue: 
    :param int|float|string $maxValue: 

    :rtype: Predicate 



__get
-----

.. function:: __get($name)


    Overloading
    
    Overloads "or", "and", "nest", and "unnest"

    :param string $name: 

    :rtype: Predicate 





