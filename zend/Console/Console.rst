.. Console/Console.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Console\\Console
======================

An static, utility class for interacting with Console environment.
Declared abstract to prevent from instantiating.

Methods
-------

getInstance
+++++++++++

.. function:: getInstance()


    Create and return Adapter\AdapterInterface instance.

    :param null|string: Optional adapter class name. Ccan be absolute namespace or class name
                                   relative to Zend\Console\Adapter\. If not provided, a best matching
                                   adapter will be automatically selected.
    :param null|string: optional charset name can be absolute namespace or class name relative to
                                   Zend\Console\Charset\. If not provided, charset will be detected
                                   automatically.

    :throws Exception\InvalidArgumentException: 
    :throws Exception\RuntimeException: 

    :rtype: Adapter\AdapterInterface 



isWindows
+++++++++

.. function:: isWindows()


    Check if currently running under MS Windows


    :rtype: bool 



isAnsicon
+++++++++

.. function:: isAnsicon()


    Check if running under MS Windows Ansicon

    :rtype: bool 



isConsole
+++++++++

.. function:: isConsole()


    Check if running in a console environment (CLI)
    
    By default, returns value of PHP_SAPI global constant. If $isConsole is
    set, and a boolean value, that value will be returned.

    :rtype: bool 



overrideIsConsole
+++++++++++++++++

.. function:: overrideIsConsole()


    Override the "is console environment" flag

    :param null|bool: 



detectBestAdapter
+++++++++++++++++

.. function:: detectBestAdapter()


    Try to detect best matching adapter

    :rtype: string|null 



__callStatic
++++++++++++

.. function:: __callStatic()


    Pass-thru static call to current AdapterInterface instance.

    :param $funcName: 
    :param $arguments: 

    :rtype: mixed 



