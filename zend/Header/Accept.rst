.. Http/Header/Accept.php generated using docpx on 01/30/13 03:32am


Zend\\Http\\Header\\Accept
==========================

Accept Header

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



addMediaType
------------

.. function:: addMediaType()


    Add a media type, with the given priority

    :param string: 
    :param int|float: 
    :param array: 

    :rtype: Accept 



hasMediaType
------------

.. function:: hasMediaType()


    Does the header have the requested media type?

    :param string: 

    :rtype: bool 



parseFieldValuePart
-------------------

.. function:: parseFieldValuePart()


    Parse the keys contained in the header line

    :param string: 

    :rtype: \Zend\Http\Header\Accept\FieldValuePart\CharsetFieldValuePart 

    :see:  



