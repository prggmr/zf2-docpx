.. /Feed/Writer/FeedFactory.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Writer\\FeedFactory
*******************************


@category   Zend



Methods
=======

factory
-------

.. function:: factory($data)


    Create and return a Feed based on data provided.

    :param array|\Traversable $data: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Feed 



convertKey
----------

.. function:: convertKey($key)


    Normalize a key

    :param string $key: 

    :rtype: string 



createEntries
-------------

.. function:: createEntries($entries, $feed)


    Create and attach entries to a feed

    :param array|Traversable $entries: 
    :param Feed $feed: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 





