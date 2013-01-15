.. /Db/Sql/Delete.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Sql\\Delete
*********************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$table = false])


    Constructor

    :param null|string $table: 



from
----

.. function:: from($table)


    Create from statement

    :param string $table: 

    :rtype: Delete 



getRawState
-----------

.. function:: getRawState([$key = false])



where
-----

.. function:: where($predicate, [$combination = "AND"])


    Create where clause

    :param Where|\Closure|string|array $predicate: 
    :param string $combination: One of the OP_* constants from Predicate\PredicateSet

    :rtype: Delete 



prepareStatement
----------------

.. function:: prepareStatement($adapter, $statementContainer)


    Prepare the delete statement

    :param Adapter $adapter: 
    :param StatementContainerInterface $statementContainer: 

    :rtype: void 



getSqlString
------------

.. function:: getSqlString([$adapterPlatform = false])


    Get the SQL string, based on the platform
    
    Platform defaults to Sql92 if none provided

    :param null|PlatformInterface $adapterPlatform: 

    :rtype: string 



__get
-----

.. function:: __get($name)


    Property overloading
    
    Overloads "where" only.

    :param string $name: 

    :rtype: mixed 





Constants
---------

SPECIFICATION_DELETE
++++++++++++++++++++

SPECIFICATION_WHERE
+++++++++++++++++++

