.. /Form/View/Helper/FormElementErrors.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\View\\Helper\\FormElementErrors
*******************************************


@category   Zend



Methods
=======

setMessageCloseString
---------------------

.. function:: setMessageCloseString($messageCloseString)


    Set the string used to close message representation

    :param string $messageCloseString: 

    :rtype: FormElementErrors 



getMessageCloseString
---------------------

.. function:: getMessageCloseString()


    Get the string used to close message representation

    :rtype: string 



setMessageOpenFormat
--------------------

.. function:: setMessageOpenFormat($messageOpenFormat)


    Set the formatted string used to open message representation

    :param string $messageOpenFormat: 

    :rtype: FormElementErrors 



getMessageOpenFormat
--------------------

.. function:: getMessageOpenFormat()


    Get the formatted string used to open message representation

    :rtype: string 



setMessageSeparatorString
-------------------------

.. function:: setMessageSeparatorString($messageSeparatorString)


    Set the string used to separate messages

    :param string $messageSeparatorString: 

    :rtype: FormElementErrors 



getMessageSeparatorString
-------------------------

.. function:: getMessageSeparatorString()


    Get the string used to separate messages

    :rtype: string 



setAttributes
-------------

.. function:: setAttributes($attributes)


    Set the attributes that will go on the message open format

    :param array $attributes: key value pairs of attributes

    :rtype: FormElementErrors 



getAttributes
-------------

.. function:: getAttributes()


    Get the attributes that will go on the message open format

    :rtype: array 



render
------

.. function:: render($element, [$attributes = false])


    Render validation errors for the provided $element

    :param ElementInterface $element: 
    :param array $attributes: 

    :throws Exception\DomainException: 

    :rtype: string 



$item
-----

.. function:: $item()



__invoke
--------

.. function:: __invoke([$element = false, [$attributes = false]])


    Invoke helper as functor
    
    Proxies to {@link render()} if an element is passed.

    :param ElementInterface $element: 
    :param array $attributes: 

    :rtype: string|FormElementErrors 





