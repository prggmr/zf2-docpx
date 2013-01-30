.. Serializer/Adapter/Wddx.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Serializer\\Adapter\\Wddx
===============================

@link       http://www.infoloom.com/gcaconfs/WEB/chicago98/simeonov.HTM

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|\Traversable|WddxOptions: 

    :throws Exception\ExtensionNotLoadedException: if wddx extension not found



setOptions
++++++++++

.. function:: setOptions()


    Set options

    :param array|\Traversable|WddxOptions: 

    :rtype: Wddx 



getOptions
++++++++++

.. function:: getOptions()


    Get options

    :rtype: WddxOptions 



serialize
+++++++++

.. function:: serialize()


    Serialize PHP to WDDX

    :param mixed: 

    :rtype: string 

    :throws: Exception\RuntimeException on wddx error



unserialize
+++++++++++

.. function:: unserialize()


    Unserialize from WDDX to PHP

    :param string: 

    :rtype: mixed 

    :throws: Exception\RuntimeException on wddx error
    :throws: Exception\InvalidArgumentException if invalid xml



