.. InputFilter/FileInput.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\InputFilter\\FileInput
============================

FileInput is a special Input type for handling uploaded files.

It differs from Input in a few ways:

1. It expects the raw value to be in the $_FILES array format.

2. The validators are run **before** the filters (the opposite behavior of Input).
   This is so is_uploaded_file() validation can be run prior to any filters that
   may rename/move/modify the file.

3. Instead of adding a NotEmpty validator, it will (by default) automatically add
   a Zend\Validator\File\Upload validator.

Methods
-------

setAutoPrependUploadValidator
+++++++++++++++++++++++++++++

.. function:: setAutoPrependUploadValidator()


    @param  boolean $value Enable/Disable automatically prepending an Upload validator

    :rtype: FileInput 



getAutoPrependUploadValidator
+++++++++++++++++++++++++++++

.. function:: getAutoPrependUploadValidator()


    @return boolean



getValue
++++++++

.. function:: getValue()


    @return mixed



isValid
+++++++

.. function:: isValid()


    @param  mixed $context Extra "context" to provide the validator

    :rtype: boolean 



injectUploadValidator
+++++++++++++++++++++

.. function:: injectUploadValidator()


    @return void



injectNotEmptyValidator
+++++++++++++++++++++++

.. function:: injectNotEmptyValidator()


    No-op, NotEmpty validator does not apply for FileInputs.
    See also: BaseInputFilter::isValid()

    :rtype: void 



merge
+++++

.. function:: merge()


    @param  InputInterface $input

    :rtype: FileInput 



