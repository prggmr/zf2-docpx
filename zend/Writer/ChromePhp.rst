.. Log/Writer/ChromePhp.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Log\\Writer\\ChromePhp
============================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Initializes a new instance of this class.

    :param null|ChromePhpInterface|array|Traversable: An instance of ChromePhpInterface
       that should be used for logging



doWrite
+++++++

.. function:: doWrite()


    Write a message to the log.

    :param array: event data

    :rtype: void 



getChromePhp
++++++++++++

.. function:: getChromePhp()


    Gets the ChromePhpInterface instance that is used for logging.

    :rtype: ChromePhpInterface 



setChromePhp
++++++++++++

.. function:: setChromePhp()


    Sets the ChromePhpInterface instance that is used for logging.

    :param ChromePhpInterface: The instance to set.

    :rtype: ChromePhp 



