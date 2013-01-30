.. Validator/Barcode/Code128.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Validator\\Barcode\\Code128
=================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor for this barcode adapter



setUtf8StringWrapper
++++++++++++++++++++

.. function:: setUtf8StringWrapper()



getUtf8StringWrapper
++++++++++++++++++++

.. function:: getUtf8StringWrapper()


    Get the string wrapper supporting UTF-8 character encoding

    :rtype: StringWrapperInterface 



hasValidCharacters
++++++++++++++++++

.. function:: hasValidCharacters()


    Checks for allowed characters within the barcode

    :param string: The barcode to check for allowed characters

    :rtype: bool 



code128
+++++++

.. function:: code128()


    Validates the checksum ()

    :param string: The barcode to validate

    :rtype: bool 



getCodingSet
++++++++++++

.. function:: getCodingSet()


    Returns the coding set for a barcode

    :param string: Barcode

    :rtype: string 



ord128
++++++

.. function:: ord128()


    Internal method to return the code128 integer from an ascii value
    
    Table A
       ASCII       CODE128
     32 to  95 ==  0 to  63
      0 to  31 == 64 to  95
    128 to 138 == 96 to 106
    
    Table B
       ASCII       CODE128
     32 to 138 == 0 to 106
    
    Table C
       ASCII       CODE128
     "00" to "99" ==   0 to  99
      132 to  138 == 100 to 106

    :param string: 
    :param string: 

    :rtype: integer 



chr128
++++++

.. function:: chr128()


    Internal Method to return the ascii value from an code128 integer
    
    Table A
       ASCII       CODE128
     32 to  95 ==  0 to  63
      0 to  31 == 64 to  95
    128 to 138 == 96 to 106
    
    Table B
       ASCII       CODE128
     32 to 138 == 0 to 106
    
    Table C
       ASCII       CODE128
     "00" to "99" ==   0 to  99
      132 to  138 == 100 to 106

    :param integer: 
    :param string: 

    :rtype: string 



