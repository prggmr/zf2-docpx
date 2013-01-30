.. Serializer/Adapter/Json.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Serializer\\Adapter\\Json
===============================

Methods
-------

setOptions
++++++++++

.. function:: setOptions()


    Set options

    :param array|\Traversable|JsonOptions: 

    :rtype: Json 



getOptions
++++++++++

.. function:: getOptions()


    Get options

    :rtype: JsonOptions 



serialize
+++++++++

.. function:: serialize()


    Serialize PHP value to JSON

    :param mixed: 

    :rtype: string 

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\RuntimeException 



unserialize
+++++++++++

.. function:: unserialize()


    Deserialize JSON to PHP value

    :param string: 

    :rtype: mixed 

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\RuntimeException 



