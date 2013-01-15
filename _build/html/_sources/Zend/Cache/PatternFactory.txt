.. /Cache/PatternFactory.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\PatternFactory
***************************


@category   Zend



Methods
=======

factory
-------

.. function:: factory($patternName, [$options = false])


    Instantiate a cache pattern

    :param string|Pattern\PatternInterface $patternName: 
    :param array|Traversable|Pattern\PatternOptions $options: 

    :rtype: Pattern\PatternInterface 

    :throws: Exception\InvalidArgumentException 



getPluginManager
----------------

.. function:: getPluginManager()


    Get the pattern plugin manager

    :rtype: PatternPluginManager 



setPluginManager
----------------

.. function:: setPluginManager($plugins)


    Set the pattern plugin manager

    :param PatternPluginManager $plugins: 

    :rtype: void 



resetPluginManager
------------------

.. function:: resetPluginManager()


    Reset pattern plugin manager to default

    :rtype: void 





