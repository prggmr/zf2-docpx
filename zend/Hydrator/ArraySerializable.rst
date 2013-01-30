.. Stdlib/Hydrator/ArraySerializable.php generated using docpx on 01/30/13 03:32am


Zend\\Stdlib\\Hydrator\\ArraySerializable
=========================================

Methods
+++++++

extract
-------

.. function:: extract()


    Extract values from the provided object
    
    Extracts values via the object's getArrayCopy() method.

    :param object: 

    :rtype: array 

    :throws: Exception\BadMethodCallException for an $object not implementing getArrayCopy()



hydrate
-------

.. function:: hydrate()


    Hydrate an object
    
    Hydrates an object by passing $data to either its exchangeArray() or
    populate() method.

    :param array: 
    :param object: 

    :rtype: object 

    :throws: Exception\BadMethodCallException for an $object not implementing exchangeArray() or populate()



