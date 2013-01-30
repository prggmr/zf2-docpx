.. Filter/Inflector.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Filter\\Inflector
=======================

Filter chain for string inflection

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param string|array|Traversable: Options to set



getPluginManager
++++++++++++++++

.. function:: getPluginManager()


    Retrieve plugin manager

    :rtype: FilterPluginManager 



setPluginManager
++++++++++++++++

.. function:: setPluginManager()


    Set plugin manager

    :param FilterPluginManager: 

    :rtype: Inflector 



setOptions
++++++++++

.. function:: setOptions()


    Set options

    :param array|Traversable: 

    :rtype: Inflector 



setThrowTargetExceptionsOn
++++++++++++++++++++++++++

.. function:: setThrowTargetExceptionsOn()


    Set Whether or not the inflector should throw an exception when a replacement
    identifier is still found within an inflected target.

    :param bool: 

    :rtype: Inflector 



isThrowTargetExceptionsOn
+++++++++++++++++++++++++

.. function:: isThrowTargetExceptionsOn()


    Will exceptions be thrown?

    :rtype: bool 



setTargetReplacementIdentifier
++++++++++++++++++++++++++++++

.. function:: setTargetReplacementIdentifier()


    Set the Target Replacement Identifier, by default ':'

    :param string: 

    :rtype: Inflector 



getTargetReplacementIdentifier
++++++++++++++++++++++++++++++

.. function:: getTargetReplacementIdentifier()


    Get Target Replacement Identifier

    :rtype: string 



setTarget
+++++++++

.. function:: setTarget()


    Set a Target
    ex: 'scripts/:controller/:action.:suffix'

    :param string: 

    :rtype: Inflector 



getTarget
+++++++++

.. function:: getTarget()


    Retrieve target

    :rtype: string 



setTargetReference
++++++++++++++++++

.. function:: setTargetReference()


    Set Target Reference

    :param reference: 

    :rtype: Inflector 



setRules
++++++++

.. function:: setRules()


    SetRules() is the same as calling addRules() with the exception that it
    clears the rules before adding them.

    :param array: 

    :rtype: Inflector 



addRules
++++++++

.. function:: addRules()


    AddRules(): multi-call to setting filter rules.
    
    If prefixed with a ":" (colon), a filter rule will be added.  If not
    prefixed, a static replacement will be added.
    
    ex:
    array(
        ':controller' => array('CamelCaseToUnderscore','StringToLower'),
        ':action'     => array('CamelCaseToUnderscore','StringToLower'),
        'suffix'      => 'phtml'
        );

    :param array: 

    :rtype: Inflector 



getRules
++++++++

.. function:: getRules()


    Get rules
    
    By default, returns all rules. If a $spec is provided, will return those
    rules if found, false otherwise.

    :param string: 

    :rtype: array|false 



getRule
+++++++

.. function:: getRule()


    getRule() returns a rule set by setFilterRule(), a numeric index must be provided

    :param string: 
    :param int: 

    :rtype: FilterInterface|false 



clearRules
++++++++++

.. function:: clearRules()


    ClearRules() clears the rules currently in the inflector

    :rtype: Inflector 



setFilterRule
+++++++++++++

.. function:: setFilterRule()


    Set a filtering rule for a spec.  $ruleSet can be a string, Filter object
    or an array of strings or filter objects.

    :param string: 
    :param array|string|\Zend\Filter\FilterInterface: 

    :rtype: Inflector 



addFilterRule
+++++++++++++

.. function:: addFilterRule()


    Add a filter rule for a spec

    :param mixed: 
    :param mixed: 

    :rtype: Inflector 



setStaticRule
+++++++++++++

.. function:: setStaticRule()


    Set a static rule for a spec.  This is a single string value

    :param string: 
    :param string: 

    :rtype: Inflector 



setStaticRuleReference
++++++++++++++++++++++

.. function:: setStaticRuleReference()


    Set Static Rule Reference.
    
    This allows a consuming class to pass a property or variable
    in to be referenced when its time to build the output string from the
    target.

    :param string: 
    :param mixed: 

    :rtype: Inflector 



filter
++++++

.. function:: filter()


    Inflect

    :param string|array: 

    :throws Exception\RuntimeException: 

    :rtype: string 



_normalizeSpec
++++++++++++++

.. function:: _normalizeSpec()


    Normalize spec string

    :param string: 

    :rtype: string 



_getRule
++++++++

.. function:: _getRule()


    Resolve named filters and convert them to filter objects.

    :param string: 

    :rtype: FilterInterface 



