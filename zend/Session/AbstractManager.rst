.. Session/AbstractManager.php generated using docpx on 01/30/13 03:32am


Zend\\Session\\AbstractManager
==============================

Base ManagerInterface implementation

Defines common constructor logic and getters for Storage and Configuration

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param Config|null: 
    :param Storage|null: 
    :param SaveHandler|null: 

    :throws Exception\RuntimeException: 



setConfig
---------

.. function:: setConfig()


    Set configuration object

    :param Config: 

    :rtype: AbstractManager 



getConfig
---------

.. function:: getConfig()


    Retrieve configuration object

    :rtype: Config 



setStorage
----------

.. function:: setStorage()


    Set session storage object

    :param Storage: 

    :rtype: AbstractManager 



getStorage
----------

.. function:: getStorage()


    Retrieve storage object

    :rtype: Storage 



setSaveHandler
--------------

.. function:: setSaveHandler()


    Set session save handler object

    :param SaveHandler: 

    :rtype: AbstractManager 



getSaveHandler
--------------

.. function:: getSaveHandler()


    Get SaveHandler Object

    :rtype: SaveHandler 



