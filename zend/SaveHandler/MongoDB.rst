.. Session/SaveHandler/MongoDB.php generated using docpx on 01/30/13 03:32am


Zend\\Session\\SaveHandler\\MongoDB
===================================

MongoDB session save handler

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param Mongo|MongoClient: 
    :param MongoDBOptions: 

    :throws Zend\Session\Exception\InvalidArgumentException: 



open
----

.. function:: open()


    Open session

    :param string: 
    :param string: 

    :rtype: boolean 



close
-----

.. function:: close()


    Close session

    :rtype: boolean 



read
----

.. function:: read()


    Read session data

    :param string: 

    :rtype: string 



write
-----

.. function:: write()


    Write session data

    :param string: 
    :param string: 

    :rtype: boolean 



destroy
-------

.. function:: destroy()


    Destroy session

    :param string: 

    :rtype: boolean 



gc
--

.. function:: gc()


    Garbage collection
    
    Note: MongoDB 2.2+ supports TTL collections, which may be used in place
    of this method by indexing the "modified" field with an
    "expireAfterSeconds" option. Regardless of whether TTL collections are
    used, consider indexing this field to make the remove query more
    efficient.


    :param int: 

    :rtype: boolean 



