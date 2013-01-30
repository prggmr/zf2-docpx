.. Http/Header/AcceptEncoding.php generated using docpx on 01/30/13 03:32am


Zend\\Http\\Header\\AcceptEncoding
==================================

Accept Encoding Header

Methods
+++++++

getFieldName
------------

.. function:: getFieldName()


    Get field name

    :rtype: string 



toString
--------

.. function:: toString()


    Cast to string

    :rtype: string 



addEncoding
-----------

.. function:: addEncoding()


    Add an encoding, with the given priority

    :param string: 
    :param int|float: 

    :rtype: Accept 



hasEncoding
-----------

.. function:: hasEncoding()


    Does the header have the requested encoding?

    :param string: 

    :rtype: bool 



parseFieldValuePart
-------------------

.. function:: parseFieldValuePart()


    Parse the keys contained in the header line

    :param string: 

    :rtype: \Zend\Http\Header\Accept\FieldValuePart\EncodingFieldValuePart 

    :see:  



