.. Db/Sql/Predicate/PredicateSet.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Db\\Sql\\Predicate\\PredicateSet
======================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|array: 
    :param string: 



addPredicate
++++++++++++

.. function:: addPredicate()


    Add predicate to set

    :param PredicateInterface: 
    :param string: 

    :rtype: PredicateSet 



getPredicates
+++++++++++++

.. function:: getPredicates()


    Return the predicates

    :rtype: PredicateInterface[] 



orPredicate
+++++++++++

.. function:: orPredicate()


    Add predicate using OR operator

    :param PredicateInterface: 

    :rtype: PredicateSet 



andPredicate
++++++++++++

.. function:: andPredicate()


    Add predicate using AND operator

    :param PredicateInterface: 

    :rtype: PredicateSet 



getExpressionData
+++++++++++++++++

.. function:: getExpressionData()


    Get predicate parts for where statement

    :rtype: array 



count
+++++

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

