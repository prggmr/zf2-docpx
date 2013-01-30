.. Log/Writer/FirePhp.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Log\\Writer\\FirePhp
==========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Initializes a new instance of this class.

    :param null|FirePhp\FirePhpInterface|array|Traversable: An instance of FirePhpInterface
       that should be used for logging



doWrite
+++++++

.. function:: doWrite()


    Write a message to the log.

    :param array: event data

    :rtype: void 



getFirePhp
++++++++++

.. function:: getFirePhp()


    Gets the FirePhpInterface instance that is used for logging.

    :rtype: FirePhp\FirePhpInterface 

    :throws: Exception\RuntimeException 



setFirePhp
++++++++++

.. function:: setFirePhp()


    Sets the FirePhpInterface instance that is used for logging.

    :param FirePhp\FirePhpInterface: A FirePhpInterface instance to set.

    :rtype: FirePhp 



