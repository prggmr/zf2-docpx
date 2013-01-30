.. Navigation/Service/AbstractNavigationFactory.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Navigation\\Service\\AbstractNavigationFactory
====================================================

Abstract navigation factory

Methods
-------

createService
+++++++++++++

.. function:: createService()


    @param ServiceLocatorInterface $serviceLocator

    :rtype: \Zend\Navigation\Navigation 



getName
+++++++

.. function:: getName()


    @abstract

    :rtype: string 



getPages
++++++++

.. function:: getPages()


    @param ServiceLocatorInterface $serviceLocator

    :rtype: array 

    :throws: \Zend\Navigation\Exception\InvalidArgumentException 



getPagesFromConfig
++++++++++++++++++

.. function:: getPagesFromConfig()


    @param string|\Zend\Config\Config|array $config

    :rtype: array|null|\Zend\Config\Config 

    :throws: \Zend\Navigation\Exception\InvalidArgumentException 



injectComponents
++++++++++++++++

.. function:: injectComponents()


    @param array $pages

    :param RouteMatch: 
    :param Router: 

    :rtype: mixed 



