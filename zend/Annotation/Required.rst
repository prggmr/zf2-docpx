.. Form/Annotation/Required.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Form\\Annotation\\Required
================================

Required annotation

Use this annotation to specify the value of the "required" flag for a given
input. Since the flag defaults to "true", this will typically be used to
"unset" the flag (e.g., "@Annotation\Required(false)"). Any boolean value
understood by \Zend\Filter\Boolean is allowed as the content.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Receive and process the contents of an annotation

    :param array: 



getRequired
+++++++++++

.. function:: getRequired()


    Get value of required flag

    :rtype: bool 



