.. /Db/Sql/Predicate/PredicateSet.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Sql\\Predicate\\PredicateSet
**************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$predicates = false, [$defaultCombination = "AND"]])


    Constructor

    :param null|array $predicates: 
    :param string $defaultCombination: 



addPredicate
------------

.. function:: addPredicate($predicate, [$combination = false])


    Add predicate to set

    :param PredicateInterface $predicate: 
    :param string $combination: 

    :rtype: PredicateSet 



getPredicates
-------------

.. function:: getPredicates()


    Return the predicates

    :rtype: PredicateInterface[] 



orPredicate
-----------

.. function:: orPredicate($predicate)


    Add predicate using OR operator

    :param PredicateInterface $predicate: 

    :rtype: PredicateSet 



andPredicate
------------

.. function:: andPredicate($predicate)


    Add predicate using AND operator

    :param PredicateInterface $predicate: 

    :rtype: PredicateSet 



getExpressionData
-----------------

.. function:: getExpressionData()


    Get predicate parts for where statement

    :rtype: array 



count
-----

.. function:: count()


    Get count of attached predicates

    :rtype: int 





Constants
---------

COMBINED_BY_AND
+++++++++++++++

OP_AND
++++++

COMBINED_BY_OR
++++++++++++++

OP_OR
+++++

