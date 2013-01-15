.. /Cache/Pattern/OutputCache.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Pattern\\OutputCache
*********************************


@category   Zend



Methods
=======

setOptions
----------

.. function:: setOptions($options)


    Set options

    :param PatternOptions $options: 

    :rtype: OutputCache 

    :throws: Exception\InvalidArgumentException 



start
-----

.. function:: start($key)


    if there is a cached item with the given key display it's data and return true
    else start buffering output until end() is called or the script ends.

    :param string $key: Key

    :throws Exception\MissingKeyException: if key is missing

    :rtype: bool 



end
---

.. function:: end()


    Stops buffering output, write buffered data to cache using the given key on start()
    and displays the buffer.


    :rtype: bool TRUE on success, FALSE on failure writing to cache





