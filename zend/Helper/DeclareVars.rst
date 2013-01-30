.. View/Helper/DeclareVars.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Helper\\DeclareVars
===============================

Helper for declaring default values of template variables

Methods
-------

__invoke
++++++++

.. function:: __invoke()


    Declare template vars to set default values and avoid notices when using strictVars
    
    Primarily for use when using {@link Zend_View_Abstract::strictVars() Zend_View strictVars()},
    this helper can be used to declare template variables that may or may
    not already be set in the view object, as well as to set default values.
    Arrays passed as arguments to the method will be used to set default
    values; otherwise, if the variable does not exist, it is set to an empty
    string.
    
    Usage:
    <code>
    $this->declareVars(
        'varName1',
        'varName2',
        array('varName3' => 'defaultValue',
              'varName4' => array()
        )
    );
    </code>

    :param string|array: number of arguments, all string names of variables to test

    :rtype: void 



declareVar
++++++++++

.. function:: declareVar()


    Set a view variable
    
    Checks to see if a $key is set in the view object; if not, sets it to $value.

    :param string: 
    :param string: Defaults to an empty string

    :rtype: void 



