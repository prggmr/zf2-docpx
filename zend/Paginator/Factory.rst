.. Paginator/Factory.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Paginator\\Factory
========================

Methods
-------

createAdapterFromItems
++++++++++++++++++++++

.. function:: createAdapterFromItems()


    Create adapter from items if necessary, and return paginator

    :param Traversable/array: 

    :rtype: Paginator 



getAdapterFromManager
+++++++++++++++++++++

.. function:: getAdapterFromManager()


    Get adapter from manager if necessary, and return paginator

    :param mixed: 
    :param mixed: 

    :rtype: Paginator 



factory
+++++++

.. function:: factory()


    Create paginator with items and adapter

    :param mixed: 
    :param mixed: 

    :rtype: Paginator 



setAdapterPluginManager
+++++++++++++++++++++++

.. function:: setAdapterPluginManager()


    Change the adapter plugin manager

    :param AdapterPluginManager: 

    :rtype: void 



getAdapterPluginManager
+++++++++++++++++++++++

.. function:: getAdapterPluginManager()


    Get the adapter plugin manager

    :rtype: AdapterPluginManager 



