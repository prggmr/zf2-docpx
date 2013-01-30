.. Cache/Storage/Plugin/ClearExpiredByFactor.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Cache\\Storage\\Plugin\\ClearExpiredByFactor
==================================================

Methods
-------

attach
++++++

.. function:: attach()


    Attach

    :param EventManagerInterface: 
    :param int: 

    :rtype: ClearExpiredByFactor 

    :throws: Exception\LogicException 



detach
++++++

.. function:: detach()


    Detach

    :param EventManagerInterface: 

    :rtype: ClearExpiredByFactor 

    :throws: Exception\LogicException 



clearExpiredByFactor
++++++++++++++++++++

.. function:: clearExpiredByFactor()


    Clear expired items by factor after writing new item(s)

    :param PostEvent: 

    :rtype: void 



