.. Db/Sql/Predicate/Predicate.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\Sql\\Predicate\\Predicate
===================================

@property Predicate $and

Methods
+++++++

nest
----

.. function:: nest()


    Begin nesting predicates

    :rtype: Predicate 



setUnnest
---------

.. function:: setUnnest()


    Indicate what predicate will be unnested

    :param Predicate: 

    :rtype: void 



unnest
------

.. function:: unnest()


    Indicate end of nested predicate

    :rtype: Predicate 

    :throws: \RuntimeException 



equalTo
-------

.. function:: equalTo()


    Create "Equal To" predicate
    
    Utilizes Operator predicate

    :param int|float|bool|string: 
    :param int|float|bool|string: 
    :param string: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_IDENTIFIER {@see allowedTypes}
    :param string: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_VALUE {@see allowedTypes}

    :rtype: Predicate 



notEqualTo
----------

.. function:: notEqualTo()


    Create "Not Equal To" predicate
    
    Utilizes Operator predicate

    :param int|float|bool|string: 
    :param int|float|bool|string: 
    :param string: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_IDENTIFIER {@see allowedTypes}
    :param string: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_VALUE {@see allowedTypes}

    :rtype: Predicate 



lessThan
--------

.. function:: lessThan()


    Create "Less Than" predicate
    
    Utilizes Operator predicate

    :param int|float|bool|string: 
    :param int|float|bool|string: 
    :param string: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_IDENTIFIER {@see allowedTypes}
    :param string: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_VALUE {@see allowedTypes}

    :rtype: Predicate 



greaterThan
-----------

.. function:: greaterThan()


    Create "Greater Than" predicate
    
    Utilizes Operator predicate

    :param int|float|bool|string: 
    :param int|float|bool|string: 
    :param string: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_IDENTIFIER {@see allowedTypes}
    :param string: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_VALUE {@see allowedTypes}

    :rtype: Predicate 



lessThanOrEqualTo
-----------------

.. function:: lessThanOrEqualTo()


    Create "Less Than Or Equal To" predicate
    
    Utilizes Operator predicate

    :param int|float|bool|string: 
    :param int|float|bool|string: 
    :param string: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_IDENTIFIER {@see allowedTypes}
    :param string: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_VALUE {@see allowedTypes}

    :rtype: Predicate 



greaterThanOrEqualTo
--------------------

.. function:: greaterThanOrEqualTo()


    Create "Greater Than Or Equal To" predicate
    
    Utilizes Operator predicate

    :param int|float|bool|string: 
    :param int|float|bool|string: 
    :param string: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_IDENTIFIER {@see allowedTypes}
    :param string: TYPE_IDENTIFIER or TYPE_VALUE by default TYPE_VALUE {@see allowedTypes}

    :rtype: Predicate 



like
----

.. function:: like()


    Create "Like" predicate
    
    Utilizes Like predicate

    :param string: 
    :param string: 

    :rtype: Predicate 



expression
----------

.. function:: expression()



literal
-------

.. function:: literal()


    Create "Literal" predicate
    
    Utilizes Like predicate

    :param string: 
    :param int|float|bool|string|array: 

    :rtype: Predicate 



isNull
------

.. function:: isNull()


    Create "IS NULL" predicate
    
    Utilizes IsNull predicate

    :param string: 

    :rtype: Predicate 



isNotNull
---------

.. function:: isNotNull()


    Create "IS NOT NULL" predicate
    
    Utilizes IsNotNull predicate

    :param string: 

    :rtype: Predicate 



in
--

.. function:: in()


    Create "in" predicate
    
    Utilizes In predicate

    :param string: 
    :param array|Select: 

    :rtype: Predicate 



between
-------

.. function:: between()


    Create "between" predicate
    
    Utilizes Between predicate

    :param string: 
    :param int|float|string: 
    :param int|float|string: 

    :rtype: Predicate 



__get
-----

.. function:: __get()


    Overloading
    
    Overloads "or", "and", "nest", and "unnest"

    :param string: 

    :rtype: Predicate 



