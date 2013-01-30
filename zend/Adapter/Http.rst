.. File/Transfer/Adapter/Http.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\File\\Transfer\\Adapter\\Http
===================================

File transfer adapter class for the HTTP protocol

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor for Http File Transfers

    :param array: OPTIONAL Options to set

    :throws Exception\PhpEnvironmentException: if file uploads are not allowed



setValidators
+++++++++++++

.. function:: setValidators()


    Sets a validator for the class, erasing all previous set

    :param array: Validator to set
    :param string|array: Files to limit this validator to

    :rtype: AbstractAdapter 



removeValidator
+++++++++++++++

.. function:: removeValidator()


    Remove an individual validator

    :param string: 

    :rtype: AbstractAdapter 



clearValidators
+++++++++++++++

.. function:: clearValidators()


    Clear the validators

    :rtype: AbstractAdapter 



send
++++

.. function:: send()


    Send the file to the client (Download)

    :param string|array: Options for the file(s) to send

    :rtype: void 

    :throws: Exception\BadMethodCallException Not implemented



isValid
+++++++

.. function:: isValid()


    Checks if the files are valid

    :param string|array: (Optional) Files to check

    :rtype: bool True if all checks are valid



receive
+++++++

.. function:: receive()


    Receive the file from the client (Upload)

    :param string|array: (Optional) Files to receive

    :rtype: bool 



isSent
++++++

.. function:: isSent()


    Checks if the file was already sent

    :param string|array: Files to check

    :rtype: bool 

    :throws: Exception\BadMethodCallException Not implemented



isReceived
++++++++++

.. function:: isReceived()


    Checks if the file was already received

    :param string|array: (Optional) Files to check

    :rtype: bool 



isFiltered
++++++++++

.. function:: isFiltered()


    Checks if the file was already filtered

    :param string|array: (Optional) Files to check

    :rtype: bool 



isUploaded
++++++++++

.. function:: isUploaded()


    Has a file been uploaded ?

    :param array|string|null: 

    :rtype: bool 



getProgress
+++++++++++

.. function:: getProgress()


    Returns the actual progress of file up-/downloads

    :param string|array: The upload to get the progress for

    :rtype: array|null 

    :throws: Exception\PhpEnvironmentException whether APC nor UploadProgress extension installed
    :throws: Exception\RuntimeException 



isApcAvailable
++++++++++++++

.. function:: isApcAvailable()


    Checks the APC extension for progress information

    :rtype: bool 



isUploadProgressAvailable
+++++++++++++++++++++++++

.. function:: isUploadProgressAvailable()


    Checks the UploadProgress extension for progress information

    :rtype: bool 



prepareFiles
++++++++++++

.. function:: prepareFiles()


    Prepare the $_FILES array to match the internal syntax of one file per entry

    :rtype: Http 



