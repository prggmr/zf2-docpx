.. Form/View/Helper/FormElementErrors.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Form\\View\\Helper\\FormElementErrors
===========================================

Methods
-------

setMessageCloseString
+++++++++++++++++++++

.. function:: setMessageCloseString()


    Set the string used to close message representation

    :param string: 

    :rtype: FormElementErrors 



getMessageCloseString
+++++++++++++++++++++

.. function:: getMessageCloseString()


    Get the string used to close message representation

    :rtype: string 



setMessageOpenFormat
++++++++++++++++++++

.. function:: setMessageOpenFormat()


    Set the formatted string used to open message representation

    :param string: 

    :rtype: FormElementErrors 



getMessageOpenFormat
++++++++++++++++++++

.. function:: getMessageOpenFormat()


    Get the formatted string used to open message representation

    :rtype: string 



setMessageSeparatorString
+++++++++++++++++++++++++

.. function:: setMessageSeparatorString()


    Set the string used to separate messages

    :param string: 

    :rtype: FormElementErrors 



getMessageSeparatorString
+++++++++++++++++++++++++

.. function:: getMessageSeparatorString()


    Get the string used to separate messages

    :rtype: string 



setAttributes
+++++++++++++

.. function:: setAttributes()


    Set the attributes that will go on the message open format

    :param array: key value pairs of attributes

    :rtype: FormElementErrors 



getAttributes
+++++++++++++

.. function:: getAttributes()


    Get the attributes that will go on the message open format

    :rtype: array 



render
++++++

.. function:: render()


    Render validation errors for the provided $element

    :param ElementInterface: 
    :param array: 

    :throws Exception\DomainException: 

    :rtype: string 



__invoke
++++++++

.. function:: __invoke()


    Invoke helper as functor
    
    Proxies to {@link render()} if an element is passed.

    :param ElementInterface: 
    :param array: 

    :rtype: string|FormElementErrors 



