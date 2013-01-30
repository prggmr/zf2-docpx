.. Session/SaveHandler/Cache.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Session\\SaveHandler\\Cache
=================================

Cache session save handler

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param CacheStorage: 



open
++++

.. function:: open()


    Open Session

    :param string: 
    :param string: 

    :rtype: bool 



close
+++++

.. function:: close()


    Close session

    :rtype: bool 



read
++++

.. function:: read()


    Read session data

    :param string: 

    :rtype: string 



write
+++++

.. function:: write()


    Write session data

    :param string: 
    :param string: 

    :rtype: bool 



destroy
+++++++

.. function:: destroy()


    Destroy session

    :param string: 

    :rtype: bool 



gc
++

.. function:: gc()


    Garbage Collection

    :param int: 

    :rtype: bool 



setCacheStorage
+++++++++++++++

.. function:: setCacheStorage()


    Set cache storage

    :param CacheStorage: 

    :rtype: Cache 



getCacheStorage
+++++++++++++++

.. function:: getCacheStorage()


    Get cache storage

    :rtype: CacheStorage 



getCacheStorge
++++++++++++++

.. function:: getCacheStorge()


    @deprecated Misspelled method - use getCacheStorage() instead



