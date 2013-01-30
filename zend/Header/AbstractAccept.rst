.. Http/Header/AbstractAccept.php generated using docpx on 01/30/13 03:32am


Zend\\Http\\Header\\AbstractAccept
==================================

Abstract Accept Header

Naming conventions:

   Accept: audio/mp3; q=0.2; version=0.5, audio/basic+mp3
  |------------------------------------------------------|  header line
  |------|                                                  field name
         |-----------------------------------------------|  field value
         |-------------------------------|                  field value part
         |------|                                           type
                 |--|                                       subtype
                 |--|                                       format
                                               |----|       subtype
                                                     |---|  format
                     |-------------------|                  parameter set
                             |-----------|                  parameter
                             |-----|                        parameter key
                                     |--|                   parameter value
                       |---|                                priority

Methods
+++++++

parseHeaderLine
---------------

.. function:: parseHeaderLine()


    @param string $headerLine



fromString
----------

.. function:: fromString()


    Factory method: parse Accept header string

    :param string: 

    :rtype: Accept 



getFieldValuePartsFromHeaderLine
--------------------------------

.. function:: getFieldValuePartsFromHeaderLine()


    Parse the Field Value Parts represented by a header line

    :param string: 

    :throws Exception\InvalidArgumentException: If header is invalid

    :rtype: array 



parseFieldValuePart
-------------------

.. function:: parseFieldValuePart()


    Parse the accept params belonging to a media range

    :param string: 

    :rtype: stdClass 



getParametersFromFieldValuePart
-------------------------------

.. function:: getParametersFromFieldValuePart()


    Parse the keys contained in the header line

    :param string: 

    :rtype: array 



getFieldValue
-------------

.. function:: getFieldValue()


    Get field value

    :param array|null: 

    :rtype: string 



assembleAcceptParam
-------------------

.. function:: assembleAcceptParam()


    Assemble and escape the field value parameters based on RFC 2616 section 2.1


    :param string: 
    :param string: 

    :rtype: string 



addType
-------

.. function:: addType()


    Add a type, with the given priority

    :param string: 
    :param int|float: 
    :param array: $params

    :throws Exception\InvalidArgumentException: 

    :rtype: Accept 



hasType
-------

.. function:: hasType()


    Does the header have the requested type?

    :param array|string: 

    :rtype: bool 



match
-----

.. function:: match()


    Match a media string against this header

    :param array|string: 

    :rtype: AcceptFieldValuePart|bool The matched value or false



matchAcceptParams
-----------------

.. function:: matchAcceptParams()


    Return a match where all parameters in argument #1 match those in argument #2

    :param array: 
    :param array: 

    :rtype: bool|array 



addFieldValuePartToQueue
------------------------

.. function:: addFieldValuePartToQueue()


    Add a key/value combination to the internal queue

    :param stdClass: 

    :rtype: number 



sortFieldValueParts
-------------------

.. function:: sortFieldValueParts()


    Sort the internal Field Value Parts


    :rtype: number 



getPrioritized
--------------

.. function:: getPrioritized()


    @return array with all the keys, values and parameters this header represents:



