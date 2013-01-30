.. Form/Annotation/Validator.php generated using docpx on 01/30/13 03:32am


Zend\\Form\\Annotation\\Validator
=================================

Validator annotation

Expects an associative array defining the validator.

Typically, this includes the "name" with an associated string value
indicating the validator name or class, and optionally an "options" key
with an object/associative array value of options to pass to the
validator constructor.

This annotation may be specified multiple times; validators will be added
to the validator chain in the order specified.

Methods
+++++++

getValidator
------------

.. function:: getValidator()


    Retrieve the validator specification

    :rtype: null|array 



