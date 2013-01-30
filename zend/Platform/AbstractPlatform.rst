.. Db/Sql/Platform/AbstractPlatform.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Db\\Sql\\Platform\\AbstractPlatform
=========================================

Methods
-------

setSubject
++++++++++

.. function:: setSubject()


    @param $subject



setTypeDecorator
++++++++++++++++

.. function:: setTypeDecorator()


    @param $type

    :param PlatformDecoratorInterface: 



getDecorators
+++++++++++++

.. function:: getDecorators()


    @return array|PlatformDecoratorInterface[]



prepareStatement
++++++++++++++++

.. function:: prepareStatement()


    @param AdapterInterface $adapter

    :param StatementContainerInterface: 

    :throws Exception\RuntimeException: 

    :rtype: void 



getSqlString
++++++++++++

.. function:: getSqlString()


    @param null|\Zend\Db\Adapter\Platform\PlatformInterface $adapterPlatform

    :rtype: mixed 

    :throws: Exception\RuntimeException 



