.. Stdlib/Hydrator/Strategy/SerializableStrategy.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Stdlib\\Hydrator\\Strategy\\SerializableStrategy
======================================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param mixed $serializer string or SerializerAdapter



extract
+++++++

.. function:: extract()


    Serialize the given value so that it can be extracted by the hydrator.

    :param mixed: The original value.

    :rtype: mixed Returns the value that should be extracted.



hydrate
+++++++

.. function:: hydrate()


    Unserialize the given value so that it can be hydrated by the hydrator.

    :param mixed: The original value.

    :rtype: mixed Returns the value that should be hydrated.



setSerializer
+++++++++++++

.. function:: setSerializer()


    Set serializer

    :param string|SerializerAdapter: 

    :rtype: Serializer 



getSerializer
+++++++++++++

.. function:: getSerializer()


    Get serializer

    :rtype: SerializerAdapter 



setSerializerOptions
++++++++++++++++++++

.. function:: setSerializerOptions()


    Set configuration options for instantiating a serializer adapter

    :param mixed: 

    :rtype: SerializableStrategy 



getSerializerOptions
++++++++++++++++++++

.. function:: getSerializerOptions()


    Get configuration options for instantiating a serializer adapter

    :rtype: mixed 



