.. /File/Transfer/Adapter/Http.php generated using docpx on 01/15/13 05:29pm


Zend\\File\\Transfer\\Adapter\\Http
***********************************


File transfer adapter class for the HTTP protocol



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor for Http File Transfers

    :param array $options: OPTIONAL Options to set

    :throws Exception\PhpEnvironmentException: if file uploads are not allowed



setValidators
-------------

.. function:: setValidators($validators, [$files = false])


    Sets a validator for the class, erasing all previous set

    :param array $validators: Validator to set
    :param string|array $files: Files to limit this validator to

    :rtype: AbstractAdapter 



removeValidator
---------------

.. function:: removeValidator($name)


    Remove an individual validator

    :param string $name: 

    :rtype: AbstractAdapter 



clearValidators
---------------

.. function:: clearValidators()


    Clear the validators

    :rtype: AbstractAdapter 



send
----

.. function:: send([$options = false])


    Send the file to the client (Download)

    :param string|array $options: Options for the file(s) to send

    :rtype: void 

    :throws: Exception\BadMethodCallException Not implemented



isValid
-------

.. function:: isValid([$files = false])


    Checks if the files are valid

    :param string|array $files: (Optional) Files to check

    :rtype: bool True if all checks are valid



receive
-------

.. function:: receive([$files = false])


    Receive the file from the client (Upload)

    :param string|array $files: (Optional) Files to receive

    :rtype: bool 



isSent
------

.. function:: isSent([$files = false])


    Checks if the file was already sent

    :param string|array $files: Files to check

    :rtype: bool 

    :throws: Exception\BadMethodCallException Not implemented



isReceived
----------

.. function:: isReceived([$files = false])


    Checks if the file was already received

    :param string|array $files: (Optional) Files to check

    :rtype: bool 



isFiltered
----------

.. function:: isFiltered([$files = false])


    Checks if the file was already filtered

    :param string|array $files: (Optional) Files to check

    :rtype: bool 



isUploaded
----------

.. function:: isUploaded([$files = false])


    Has a file been uploaded ?

    :param array|string|null $files: 

    :rtype: bool 



getProgress
-----------

.. function:: getProgress([$id = false])


    Returns the actual progress of file up-/downloads

    :param string|array $id: The upload to get the progress for

    :rtype: array|null 

    :throws: Exception\PhpEnvironmentException whether APC nor UploadProgress extension installed
    :throws: Exception\RuntimeException 



isApcAvailable
--------------

.. function:: isApcAvailable()


    Checks the APC extension for progress information

    :rtype: bool 



isUploadProgressAvailable
-------------------------

.. function:: isUploadProgressAvailable()


    Checks the UploadProgress extension for progress information

    :rtype: bool 



prepareFiles
------------

.. function:: prepareFiles()


    Prepare the $_FILES array to match the internal syntax of one file per entry

    :rtype: Http 





