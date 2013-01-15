.. /Form/View/Helper/AbstractHelper.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\View\\Helper\\AbstractHelper
****************************************


Base functionality for all form view helpers



Methods
=======

setDoctype
----------

.. function:: setDoctype($doctype)


    Set value for doctype

    :param string $doctype: 

    :rtype: AbstractHelper 



getDoctype
----------

.. function:: getDoctype()


    Get value for doctype

    :rtype: string 



setEncoding
-----------

.. function:: setEncoding($encoding)


    Set value for character encoding

    :param string $encoding: 

    :rtype: AbstractHelper 



getEncoding
-----------

.. function:: getEncoding()


    Get character encoding

    :rtype: string 



createAttributesString
----------------------

.. function:: createAttributesString($attributes)


    Create a string of all attribute/value pairs
    
    Escapes all attribute values

    :param array $attributes: 

    :rtype: string 



getId
-----

.. function:: getId($element)


    Get the ID of an element
    
    If no ID attribute present, attempts to use the name attribute.
    If no name attribute is present, either, returns null.

    :param ElementInterface $element: 

    :rtype: null|string 



getInlineClosingBracket
-----------------------

.. function:: getInlineClosingBracket()


    Get the closing bracket for an inline tag
    
    Closes as either "/>" for XHTML doctypes or ">" otherwise.

    :rtype: string 



getDoctypeHelper
----------------

.. function:: getDoctypeHelper()


    Retrieve the doctype helper

    :rtype: Doctype 



getEscapeHtmlHelper
-------------------

.. function:: getEscapeHtmlHelper()


    Retrieve the escapeHtml helper

    :rtype: EscapeHtml 



getEscapeHtmlAttrHelper
-----------------------

.. function:: getEscapeHtmlAttrHelper()


    Retrieve the escapeHtmlAttr helper

    :rtype: EscapeHtmlAttr 



prepareAttributes
-----------------

.. function:: prepareAttributes($attributes)


    Prepare attributes for rendering
    
    Ensures appropriate attributes are present (e.g., if "name" is present,
    but no "id", sets the latter to the former).
    
    Removes any invalid attributes

    :param array $attributes: 

    :rtype: array 



prepareBooleanAttributeValue
----------------------------

.. function:: prepareBooleanAttributeValue($attribute, $value)


    Prepare a boolean attribute value
    
    Prepares the expected representation for the boolean attribute specified.

    :param string $attribute: 
    :param mixed $value: 

    :rtype: string 





