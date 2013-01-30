.. Validator/File/MimeType.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Validator\\File\\MimeType
===============================

Validator for the mime type of a file

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets validator options
    
    Mimetype to accept
    - NULL means default PHP usage by using the environment variable 'magic'
    - FALSE means disabling searching for mimetype, should be used for PHP 5.3
    - A string is the mimetype file to use

    :param string|array|Traversable: 



getMagicFile
++++++++++++

.. function:: getMagicFile()


    Returns the actual set magicfile

    :rtype: string 



setMagicFile
++++++++++++

.. function:: setMagicFile()


    Sets the magicfile to use
    if null, the MAGIC constant from php is used
    if the MAGIC file is erroneous, no file will be set
    if false, the default MAGIC file from PHP will be used

    :param string: 

    :rtype: MimeType Provides fluid interface

    :throws: Exception\RuntimeException When finfo can not read the magicfile
    :throws: Exception\InvalidArgumentException 
    :throws: Exception\InvalidMagicMimeFileException 



disableMagicFile
++++++++++++++++

.. function:: disableMagicFile()


    Disables usage of MagicFile

    :param $disable: False disables usage of magic file

    :rtype: MimeType Provides fluid interface



isMagicFileDisabled
+++++++++++++++++++

.. function:: isMagicFileDisabled()


    Is usage of MagicFile disabled?

    :rtype: bool 



getHeaderCheck
++++++++++++++

.. function:: getHeaderCheck()


    Returns the Header Check option

    :rtype: bool 



enableHeaderCheck
+++++++++++++++++

.. function:: enableHeaderCheck()


    Defines if the http header should be used
    Note that this is unsafe and therefor the default value is false

    :param bool: 

    :rtype: MimeType Provides fluid interface



getMimeType
+++++++++++

.. function:: getMimeType()


    Returns the set mimetypes

    :param bool: Returns the values as array, when false a concatenated string is returned

    :rtype: string|array 



setMimeType
+++++++++++

.. function:: setMimeType()


    Sets the mimetypes

    :param string|array: The mimetypes to validate

    :rtype: MimeType Provides a fluent interface



addMimeType
+++++++++++

.. function:: addMimeType()


    Adds the mimetypes

    :param string|array: The mimetypes to add for validation

    :rtype: MimeType Provides a fluent interface

    :throws: Exception\InvalidArgumentException 



isValid
+++++++

.. function:: isValid()


    Defined by Zend\Validator\ValidatorInterface
    
    Returns true if the mimetype of the file matches the given ones. Also parts
    of mimetypes can be checked. If you give for example "image" all image
    mime types will be accepted like "image/gif", "image/jpeg" and so on.

    :param string|array: Real file to check for mimetype

    :rtype: bool 





Constants
---------

FALSE_TYPE
++++++++++

NOT_DETECTED
++++++++++++

NOT_READABLE
++++++++++++

