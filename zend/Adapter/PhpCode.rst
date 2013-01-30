.. Serializer/Adapter/PhpCode.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Serializer\\Adapter\\PhpCode
==================================

Methods
-------

serialize
+++++++++

.. function:: serialize()


    Serialize PHP using var_export

    :param mixed: 

    :rtype: string 



unserialize
+++++++++++

.. function:: unserialize()


    Deserialize PHP string
    
    Warning: this uses eval(), and should likely be avoided.

    :param string: 

    :rtype: mixed 

    :throws: Exception\RuntimeException on eval error



