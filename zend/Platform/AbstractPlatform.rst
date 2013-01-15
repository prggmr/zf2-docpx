.. /Db/Sql/Platform/AbstractPlatform.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Sql\\Platform\\AbstractPlatform
*****************************************



Methods
=======

setSubject
----------

.. function:: setSubject($subject)


    @param $subject



setTypeDecorator
----------------

.. function:: setTypeDecorator($type, $decorator)


    @param $type

    :param PlatformDecoratorInterface $decorator: 



getDecorators
-------------

.. function:: getDecorators()


    @return array|PlatformDecoratorInterface[]



prepareStatement
----------------

.. function:: prepareStatement($adapter, $statementContainer)


    @param Adapter $adapter

    :param StatementContainerInterface $statementContainer: 

    :throws Exception\RuntimeException: 

    :rtype: void 



getSqlString
------------

.. function:: getSqlString([$adapterPlatform = false])


    @param null|\Zend\Db\Adapter\Platform\PlatformInterface $adapterPlatform

    :rtype: mixed 

    :throws: Exception\RuntimeException 





