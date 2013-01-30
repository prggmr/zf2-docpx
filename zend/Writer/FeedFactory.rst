.. Feed/Writer/FeedFactory.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Feed\\Writer\\FeedFactory
===============================

Methods
-------

factory
+++++++

.. function:: factory()


    Create and return a Feed based on data provided.

    :param array|\Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Feed 



convertKey
++++++++++

.. function:: convertKey()


    Normalize a key

    :param string: 

    :rtype: string 



createEntries
+++++++++++++

.. function:: createEntries()


    Create and attach entries to a feed

    :param array|Traversable: 
    :param Feed: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



