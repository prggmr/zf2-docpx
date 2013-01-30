.. Config/Processor/Constant.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Config\\Processor\\Constant
=================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constant Processor walks through a Config structure and replaces all
    PHP constants with their respective values

    :param bool: True to process only user-defined constants, false to process all PHP constants
    :param string: Optional prefix
    :param string: Optional suffix

    :rtype: \Zend\Config\Processor\Constant 



getUserOnly
+++++++++++

.. function:: getUserOnly()


    @return bool



setUserOnly
+++++++++++

.. function:: setUserOnly()


    Should we use only user-defined constants?

    :param bool: 

    :rtype: Constant 



loadConstants
+++++++++++++

.. function:: loadConstants()


    Load all currently defined constants into parser.

    :rtype: void 



getTokens
+++++++++

.. function:: getTokens()


    Get current token registry.

    :rtype: array 



