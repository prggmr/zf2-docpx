.. Validator/File/Upload.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Validator\\File\\Upload
=============================

Validator for the maximum size of a file up to a max of 2GB

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets validator options
    
    The array $files must be given in syntax of Zend_File_Transfer to be checked
    If no files are given the $_FILES array will be used automatically.
    NOTE: This validator will only work with HTTP POST uploads!

    :param array|\Traversable: Array of files in syntax of \Zend\File\Transfer\Transfer



getFiles
++++++++

.. function:: getFiles()


    Returns the array of set files

    :param string: (Optional) The file to return in detail

    :rtype: array 

    :throws: Exception\InvalidArgumentException If file is not found



setFiles
++++++++

.. function:: setFiles()


    Sets the files to be checked

    :param array: The files to check in syntax of \Zend\File\Transfer\Transfer

    :rtype: Upload Provides a fluent interface



isValid
+++++++

.. function:: isValid()


    Returns true if and only if the file was uploaded without errors

    :param string: Single file to check for upload errors, when giving null the $_FILES array
                      from initialization will be used
    :param mixed: 

    :rtype: bool 



throwError
++++++++++

.. function:: throwError()


    Throws an error of the given type

    :param string: 
    :param string: 

    :rtype: false 





Constants
---------

INI_SIZE
++++++++

@const string Error constants

FORM_SIZE
+++++++++

PARTIAL
+++++++

NO_FILE
+++++++

NO_TMP_DIR
++++++++++

CANT_WRITE
++++++++++

EXTENSION
+++++++++

ATTACK
++++++

FILE_NOT_FOUND
++++++++++++++

UNKNOWN
+++++++

