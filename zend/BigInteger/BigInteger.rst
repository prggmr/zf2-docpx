.. Math/BigInteger/BigInteger.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Math\\BigInteger\\BigInteger
==================================

Methods
-------

factory
+++++++

.. function:: factory()


    Create a BigInteger adapter instance

    :param string|Adapter\AdapterInterface|null: 

    :rtype: Adapter\AdapterInterface 



setAdapterPluginManager
+++++++++++++++++++++++

.. function:: setAdapterPluginManager()


    Set adapter plugin manager

    :param AdapterPluginManager: 



getAdapterPluginManager
+++++++++++++++++++++++

.. function:: getAdapterPluginManager()


    Get the adapter plugin manager

    :rtype: AdapterPluginManager 



setDefaultAdapter
+++++++++++++++++

.. function:: setDefaultAdapter()


    Set default BigInteger adapter

    :param string|Adapter\AdapterInterface: 



getDefaultAdapter
+++++++++++++++++

.. function:: getDefaultAdapter()


    Get default BigInteger adapter

    :rtype: null|Adapter\AdapterInterface 



getAvailableAdapter
+++++++++++++++++++

.. function:: getAvailableAdapter()


    Determine and return available adapter

    :rtype: Adapter\AdapterInterface 

    :throws: Exception\RuntimeException 



__callStatic
++++++++++++

.. function:: __callStatic()


    Call adapter methods statically

    :param string: 
    :param mixed: 

    :rtype: mixed 



