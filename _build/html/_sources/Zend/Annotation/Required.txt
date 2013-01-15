.. /Form/Annotation/Required.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\Annotation\\Required
********************************


Required annotation

Use this annotation to specify the value of the "required" flag for a given
input. Since the flag defaults to "true", this will typically be used to
"unset" the flag (e.g., "@Annotation\Required(false)"). Any boolean value
understood by \Zend\Filter\Boolean is allowed as the content.



Methods
=======

__construct
-----------

.. function:: __construct($data)


    Receive and process the contents of an annotation

    :param array $data: 



getRequired
-----------

.. function:: getRequired()


    Get value of required flag

    :rtype: bool 





