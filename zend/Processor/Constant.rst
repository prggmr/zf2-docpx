.. /Config/Processor/Constant.php generated using docpx on 01/15/13 05:29pm


Zend\\Config\\Processor\\Constant
*********************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$userOnly = true, [$prefix = false, [$suffix = false]]])


    Constant Processor walks through a Config structure and replaces all
    PHP constants with their respective values

    :param bool $userOnly: True to process only user-defined constants, false to process all PHP constants
    :param string $prefix: Optional prefix
    :param string $suffix: Optional suffix

    :rtype: \Zend\Config\Processor\Constant 



getUserOnly
-----------

.. function:: getUserOnly()


    @return bool



setUserOnly
-----------

.. function:: setUserOnly($userOnly)


    Should we use only user-defined constants?

    :param bool $userOnly: 

    :rtype: Constant 



loadConstants
-------------

.. function:: loadConstants()


    Load all currently defined constants into parser.

    :rtype: void 



getTokens
---------

.. function:: getTokens()


    Get current token registry.

    :rtype: array 





