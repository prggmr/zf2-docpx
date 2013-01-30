.. Cache/PatternFactory.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Cache\\PatternFactory
===========================

Methods
-------

factory
+++++++

.. function:: factory()


    Instantiate a cache pattern

    :param string|Pattern\PatternInterface: 
    :param array|Traversable|Pattern\PatternOptions: 

    :rtype: Pattern\PatternInterface 

    :throws: Exception\InvalidArgumentException 



getPluginManager
++++++++++++++++

.. function:: getPluginManager()


    Get the pattern plugin manager

    :rtype: PatternPluginManager 



setPluginManager
++++++++++++++++

.. function:: setPluginManager()


    Set the pattern plugin manager

    :param PatternPluginManager: 

    :rtype: void 



resetPluginManager
++++++++++++++++++

.. function:: resetPluginManager()


    Reset pattern plugin manager to default

    :rtype: void 



