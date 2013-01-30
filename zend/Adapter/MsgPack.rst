.. Serializer/Adapter/MsgPack.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Serializer\\Adapter\\MsgPack
==================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor




serialize
+++++++++

.. function:: serialize()


    Serialize PHP value to msgpack

    :param mixed: 

    :rtype: string 

    :throws: Exception\RuntimeException on msgpack error



unserialize
+++++++++++

.. function:: unserialize()


    Deserialize msgpack string to PHP value

    :param string: 

    :rtype: mixed 

    :throws: Exception\RuntimeException on msgpack error



