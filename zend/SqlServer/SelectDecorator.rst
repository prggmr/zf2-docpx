.. Db/Sql/Platform/SqlServer/SelectDecorator.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\Sql\\Platform\\SqlServer\\SelectDecorator
===================================================

Methods
+++++++

setSubject
----------

.. function:: setSubject()


    @param Select $select



prepareStatement
----------------

.. function:: prepareStatement()


    @param AdapterInterface $adapter

    :param StatementContainerInterface: 



getSqlString
------------

.. function:: getSqlString()


    @param PlatformInterface $platform

    :rtype: string 



processLimitOffset
------------------

.. function:: processLimitOffset()


    @param PlatformInterface $platform

    :param DriverInterface: 
    :param ParameterContainer: 
    :param $sqls: 
    :param $parameters: 

    :rtype: null 



