.. Form/Element/Number.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Form\\Element\\Number
===========================

Methods
-------

getValidators
+++++++++++++

.. function:: getValidators()


    Get validator

    :rtype: \Zend\Validator\ValidatorInterface[] 



getInputSpecification
+++++++++++++++++++++

.. function:: getInputSpecification()


    Provide default input rules for this element
    
    Attaches a number validator, as well as a greater than and less than validators

    :rtype: array 



