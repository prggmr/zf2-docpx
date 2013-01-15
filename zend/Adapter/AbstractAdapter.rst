.. /File/Transfer/Adapter/AbstractAdapter.php generated using docpx on 01/15/13 05:29pm


Zend\\File\\Transfer\\Adapter\\AbstractAdapter
**********************************************


Abstract class for file transfers (Downloads and Uploads)

This class needs a full rewrite. It re-implements functionality present in
Zend\Filter\Input and/or Zend\Form\Element, and in a way that's inconsistent
with either one. Additionally, plugin loader usage is now deprecated -- but
modifying that should be done in tandem with a rewrite to utilize validator
and filter chains instead.



Methods
=======

send
----

.. function:: send([$options = false])


    Send file

    :param mixed $options: 

    :rtype: bool 



receive
-------

.. function:: receive([$options = false])


    Receive file

    :param mixed $options: 

    :rtype: bool 



isSent
------

.. function:: isSent([$files = false])


    Is file sent?

    :param array|string|null $files: 

    :rtype: bool 



isReceived
----------

.. function:: isReceived([$files = false])


    Is file received?

    :param array|string|null $files: 

    :rtype: bool 



isUploaded
----------

.. function:: isUploaded([$files = false])


    Has a file been uploaded ?

    :param array|string|null $files: 

    :rtype: bool 



isFiltered
----------

.. function:: isFiltered([$files = false])


    Has the file been filtered ?

    :param array|string|null $files: 

    :rtype: bool 



setFilterManager
----------------

.. function:: setFilterManager($filterManager)


    Set the filter plugin manager instance

    :param FilterPluginManager $filterManager: 

    :rtype: AbstractAdapter 



getFilterManager
----------------

.. function:: getFilterManager()


    Get the filter plugin manager instance

    :rtype: FilterPluginManager 



setValidatorManager
-------------------

.. function:: setValidatorManager($validatorManager)


    Set the validator plugin manager instance

    :param ValidatorPluginManager $validatorManager: 

    :rtype: AbstractAdapter 



getValidatorManager
-------------------

.. function:: getValidatorManager()


    Get the validator plugin manager instance

    :rtype: ValidatorPluginManager 



addValidator
------------

.. function:: addValidator($validator, [$breakChainOnFailure = false, [$options = false, [$files = false]]])


    Adds a new validator for this class

    :param string|Validator\ValidatorInterface $validator: Type of validator to add
    :param bool $breakChainOnFailure: If the validation chain should stop an failure
    :param string|array $options: Options to set for the validator
    :param string|array $files: Files to limit this validator to

    :rtype: AbstractAdapter 

    :throws: Exception\InvalidArgumentException for invalid type



addValidators
-------------

.. function:: addValidators($validators, [$files = false])


    Add Multiple validators at once

    :param array $validators: 
    :param string|array $files: 

    :rtype: AbstractAdapter 

    :throws: Exception\InvalidArgumentException for invalid type



setValidators
-------------

.. function:: setValidators($validators, [$files = false])


    Sets a validator for the class, erasing all previous set

    :param array $validators: Validators to set
    :param string|array $files: Files to limit this validator to

    :rtype: AbstractAdapter 



hasValidator
------------

.. function:: hasValidator($name)


    Determine if a given validator has already been registered

    :param string $name: 

    :rtype: bool 



getValidator
------------

.. function:: getValidator($name)


    Retrieve individual validator

    :param string $name: 

    :rtype: Validator\ValidatorInterface|null 



getValidators
-------------

.. function:: getValidators([$files = false])


    Returns all set validators

    :param string|array $files: (Optional) Returns the validator for this files

    :rtype: null|array List of set validators



removeValidator
---------------

.. function:: removeValidator($name)


    Remove an individual validator

    :param string $name: 

    :rtype: AbstractAdapter 



clearValidators
---------------

.. function:: clearValidators()


    Remove all validators

    :rtype: AbstractAdapter 



setOptions
----------

.. function:: setOptions([$options = false, [$files = false]])


    Sets Options for adapters

    :param array $options: Options to set
    :param array $files: (Optional) Files to set the options for

    :rtype: AbstractAdapter 



getOptions
----------

.. function:: getOptions([$files = false])


    Returns set options for adapters or files

    :param array $files: (Optional) Files to return the options for

    :rtype: array Options for given files



isValid
-------

.. function:: isValid([$files = false])


    Checks if the files are valid

    :param string|array $files: (Optional) Files to check

    :rtype: bool True if all checks are valid



getMessages
-----------

.. function:: getMessages()


    Returns found validation messages

    :rtype: array 



getErrors
---------

.. function:: getErrors()


    Retrieve error codes

    :rtype: array 



hasErrors
---------

.. function:: hasErrors()


    Are there errors registered?

    :rtype: bool 



addFilter
---------

.. function:: addFilter($filter, [$options = false, [$files = false]])


    Adds a new filter for this class

    :param string|Filter\FilterInterface $filter: Type of filter to add
    :param string|array $options: Options to set for the filter
    :param string|array $files: Files to limit this filter to

    :rtype: AbstractAdapter 

    :throws: Exception\InvalidArgumentException for invalid type



addFilters
----------

.. function:: addFilters($filters, [$files = false])


    Add Multiple filters at once

    :param array $filters: 
    :param string|array $files: 

    :rtype: AbstractAdapter 



setFilters
----------

.. function:: setFilters($filters, [$files = false])


    Sets a filter for the class, erasing all previous set

    :param array $filters: Filter to set
    :param string|array $files: Files to limit this filter to

    :rtype: Filter\AbstractFilter 



hasFilter
---------

.. function:: hasFilter($name)


    Determine if a given filter has already been registered

    :param string $name: 

    :rtype: bool 



getFilter
---------

.. function:: getFilter($name)


    Retrieve individual filter

    :param string $name: 

    :rtype: Filter\FilterInterface|null 



getFilters
----------

.. function:: getFilters([$files = false])


    Returns all set filters

    :param string|array $files: (Optional) Returns the filter for this files

    :rtype: array List of set filters

    :throws: Exception\RuntimeException When file not found



removeFilter
------------

.. function:: removeFilter($name)


    Remove an individual filter

    :param string $name: 

    :rtype: AbstractAdapter 



clearFilters
------------

.. function:: clearFilters()


    Remove all filters

    :rtype: AbstractAdapter 



getFileName
-----------

.. function:: getFileName([$file = false, [$path = true]])


    Retrieves the filename of transferred files.

    :param string $file: (Optional) Element to return the filename for
    :param bool $path: (Optional) Should the path also be returned ?

    :rtype: string|array 



getFileInfo
-----------

.. function:: getFileInfo([$file = false])


    Retrieve additional internal file informations for files

    :param string $file: (Optional) File to get informations for

    :rtype: array 



setDestination
--------------

.. function:: setDestination($destination, [$files = false])


    Sets a new destination for the given files


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $destination: New destination directory
    :param string|array $files: Files to set the new destination for

    :rtype: AbstractAdapter 

    :throws: Exception\InvalidArgumentException when the given destination is not a directory or does not exist



getDestination
--------------

.. function:: getDestination([$files = false])


    Retrieve destination directory value

    :param null|string|array $files: 

    :throws Exception\InvalidArgumentException: 

    :rtype: null|string|array 



setTranslator
-------------

.. function:: setTranslator([$translator = false, [$textDomain = false]])


    Sets translator to use in helper

    :param Translator $translator: [optional] translator.
                                Default is null, which sets no translator.
    :param string $textDomain: [optional] text domain
                                Default is null, which skips setTranslatorTextDomain

    :rtype: AbstractAdapter 



getTranslator
-------------

.. function:: getTranslator()


    Retrieve localization translator object

    :rtype: Translator|null 



hasTranslator
-------------

.. function:: hasTranslator()


    Checks if the helper has a translator

    :rtype: bool 



setTranslatorEnabled
--------------------

.. function:: setTranslatorEnabled([$flag = true])


    Indicate whether or not translation should be enabled

    :param bool $flag: 

    :rtype: AbstractAdapter 



isTranslatorEnabled
-------------------

.. function:: isTranslatorEnabled()


    Is translation enabled?

    :rtype: bool 



setTranslatorTextDomain
-----------------------

.. function:: setTranslatorTextDomain([$textDomain = "default"])


    Set translation text domain

    :param string $textDomain: 

    :rtype: AbstractAdapter 



getTranslatorTextDomain
-----------------------

.. function:: getTranslatorTextDomain()


    Return the translation text domain

    :rtype: string 



getHash
-------

.. function:: getHash([$hash = "crc32", [$files = false]])


    Returns the hash for a given file

    :param string $hash: Hash algorithm to use
    :param string|array $files: Files to return the hash for

    :rtype: string|array Hashstring

    :throws: Exception\InvalidArgumentException On unknown hash algorithm



getFileSize
-----------

.. function:: getFileSize([$files = false])


    Returns the real filesize of the file

    :param string|array $files: Files to get the filesize from

    :rtype: string|array Filesize

    :throws: Exception\InvalidArgumentException When the file does not exist



detectFileSize
--------------

.. function:: detectFileSize($value)


    Internal method to detect the size of a file

    :param array $value: File infos

    :rtype: string Filesize of given file



getMimeType
-----------

.. function:: getMimeType([$files = false])


    Returns the real mimetype of the file
    Uses fileinfo, when not available mime_magic and as last fallback a manual given mimetype

    :param string|array $files: Files to get the mimetype from

    :rtype: string|array MimeType

    :throws: Exception\InvalidArgumentException When the file does not exist



detectMimeType
--------------

.. function:: detectMimeType($value)


    Internal method to detect the mime type of a file

    :param array $value: File infos

    :rtype: string Mimetype of given file



toByteString
------------

.. function:: toByteString($size)


    Returns the formatted size

    :param integer $size: 

    :rtype: string 



filter
------

.. function:: filter([$files = false])


    Internal function to filter all given files

    :param string|array $files: (Optional) Files to check

    :rtype: bool False on error



getTmpDir
---------

.. function:: getTmpDir()


    Determine system TMP directory and detect if we have read access

    :rtype: string 

    :throws: Exception\RuntimeException if unable to determine directory



isPathWriteable
---------------

.. function:: isPathWriteable($path)


    Tries to detect if we can read and write to the given path

    :param string $path: 

    :rtype: bool 



getFiles
--------

.. function:: getFiles($files, [$names = false, [$noexception = false]])


    Returns found files based on internal file array and given files

    :param string|array $files: (Optional) Files to return
    :param bool $names: (Optional) Returns only names on true, else complete info
    :param bool $noexception: (Optional) Allows throwing an exception, otherwise returns an empty array

    :rtype: array Found files

    :throws: Exception\RuntimeException On false filename



getValidatorIdentifier
----------------------

.. function:: getValidatorIdentifier($name)


    Retrieve internal identifier for a named validator

    :param string $name: 

    :rtype: string 



getFilterIdentifier
-------------------

.. function:: getFilterIdentifier($name)


    Retrieve internal identifier for a named filter

    :param string $name: 

    :rtype: string 





Constants
---------

FILTER
++++++

VALIDATOR
+++++++++

