.. EventManager/StaticEventManager.php generated using docpx on 01/30/13 03:32am


Zend\\EventManager\\StaticEventManager
======================================

Static version of EventManager

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Singleton

    :rtype: void 



__clone
-------

.. function:: __clone()


    Singleton

    :rtype: void 



getInstance
-----------

.. function:: getInstance()


    Retrieve instance

    :rtype: StaticEventManager 



setInstance
-----------

.. function:: setInstance()


    Set the singleton to a specific SharedEventManagerInterface instance

    :param SharedEventManagerInterface: 

    :rtype: void 



hasInstance
-----------

.. function:: hasInstance()


    Is a singleton instance defined?

    :rtype: bool 



resetInstance
-------------

.. function:: resetInstance()


    Reset the singleton instance

    :rtype: void 



