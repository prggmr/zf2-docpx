.. Console/Getopt.php generated using docpx on 01/30/13 03:32am


Zend\\Console\\Getopt
=====================

Getopt is a class to parse options for command-line
applications.

Terminology:
Argument: an element of the argv array.  This may be part of an option,
  or it may be a non-option command-line argument.
Flag: the letter or word set off by a '-' or '--'.  Example: in '--output filename',
  '--output' is the flag.
Parameter: the additional argument that is associated with the option.
  Example: in '--output filename', the 'filename' is the parameter.
Option: the combination of a flag and its parameter, if any.
  Example: in '--output filename', the whole thing is the option.

The following features are supported:

- Short flags like '-a'.  Short flags are preceded by a single
  dash.  Short flags may be clustered e.g. '-abc', which is the
  same as '-a' '-b' '-c'.
- Long flags like '--verbose'.  Long flags are preceded by a
  double dash.  Long flags may not be clustered.
- Options may have a parameter, e.g. '--output filename'.
- Parameters for long flags may also be set off with an equals sign,
  e.g. '--output=filename'.
- Parameters for long flags may be checked as string, word, or integer.
- Automatic generation of a helpful usage message.
- Signal end of options with '--'; subsequent arguments are treated
  as non-option arguments, even if they begin with '-'.
- Raise exception Zend_Console_Getopt_Exception in several cases
  when invalid flags or parameters are given.  Usage message is
  returned in the exception object.

The format for specifying options uses a PHP associative array.
The key is has the format of a list of pipe-separated flag names,
followed by an optional '=' to indicate a required parameter or
'-' to indicate an optional parameter.  Following that, the type
of parameter may be specified as 's' for string, 'w' for word,
or 'i' for integer.

Examples:
- 'user|username|u=s'  this means '--user' or '--username' or '-u'
  are synonyms, and the option requires a string parameter.
- 'p=i'  this means '-p' requires an integer parameter.  No synonyms.
- 'verbose|v-i'  this means '--verbose' or '-v' are synonyms, and
  they take an optional integer parameter.
- 'help|h'  this means '--help' or '-h' are synonyms, and
  they take no parameter.

The values in the associative array are strings that are used as
brief descriptions of the options when printing a usage message.

The simpler format for specifying options used by PHP's getopt()
function is also supported.  This is similar to GNU getopt and shell
getopt format.

Example:  'abc:' means options '-a', '-b', and '-c'
are legal, and the latter requires a string parameter.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    The constructor takes one to three parameters.
    
    The first parameter is $rules, which may be a string for
    gnu-style format, or a structured array for Zend-style format.
    
    The second parameter is $argv, and it is optional.  If not
    specified, $argv is inferred from the global argv.
    
    The third parameter is an array of configuration parameters
    to control the behavior of this instance of Getopt; it is optional.

    :param array: 
    :param array: 
    :param array: 

    :throws Exception\InvalidArgumentException: 



__get
-----

.. function:: __get()


    Return the state of the option seen on the command line of the
    current application invocation.  This function returns true, or the
    parameter to the option, if any.  If the option was not given,
    this function returns null.
    
    The magic __get method works in the context of naming the option
    as a virtual member of this class.

    :param string: 

    :rtype: string 



__isset
-------

.. function:: __isset()


    Test whether a given option has been seen.

    :param string: 

    :rtype: bool 



__set
-----

.. function:: __set()


    Set the value for a given option.

    :param string: 
    :param string: 

    :rtype: void 



__toString
----------

.. function:: __toString()


    Return the current set of options and parameters seen as a string.

    :rtype: string 



__unset
-------

.. function:: __unset()


    Unset an option.

    :param string: 

    :rtype: void 



addArguments
------------

.. function:: addArguments()


    Define additional command-line arguments.
    These are appended to those defined when the constructor was called.

    :param array: 

    :throws \Zend\Console\Exception\InvalidArgumentException: When not given an array as parameter

    :rtype: \Zend\Console\Getopt Provides a fluent interface



setArguments
------------

.. function:: setArguments()


    Define full set of command-line arguments.
    These replace any currently defined.

    :param array: 

    :throws \Zend\Console\Exception\InvalidArgumentException: When not given an array as parameter

    :rtype: \Zend\Console\Getopt Provides a fluent interface



setOptions
----------

.. function:: setOptions()


    Define multiple configuration options from an associative array.
    These are not program options, but properties to configure
    the behavior of Zend_Console_Getopt.

    :param array: 

    :rtype: \Zend\Console\Getopt Provides a fluent interface



setOption
---------

.. function:: setOption()


    Define one configuration option as a key/value pair.
    These are not program options, but properties to configure
    the behavior of Zend_Console_Getopt.

    :param string: 
    :param string: 

    :rtype: \Zend\Console\Getopt Provides a fluent interface



addRules
--------

.. function:: addRules()


    Define additional option rules.
    These are appended to the rules defined when the constructor was called.

    :param array: 

    :rtype: \Zend\Console\Getopt Provides a fluent interface



toString
--------

.. function:: toString()


    Return the current set of options and parameters seen as a string.

    :rtype: string 



toArray
-------

.. function:: toArray()


    Return the current set of options and parameters seen
    as an array of canonical options and parameters.
    
    Clusters have been expanded, and option aliases
    have been mapped to their primary option names.

    :rtype: array 



toJson
------

.. function:: toJson()


    Return the current set of options and parameters seen in Json format.

    :rtype: string 



toXml
-----

.. function:: toXml()


    Return the current set of options and parameters seen in XML format.

    :rtype: string 



getOptions
----------

.. function:: getOptions()


    Return a list of options that have been seen in the current argv.

    :rtype: array 



getOption
---------

.. function:: getOption()


    Return the state of the option seen on the command line of the
    current application invocation.
    
    This function returns true, or the parameter value to the option, if any.
    If the option was not given, this function returns false.

    :param string: 

    :rtype: mixed 



getRemainingArgs
----------------

.. function:: getRemainingArgs()


    Return the arguments from the command-line following all options found.

    :rtype: array 



getArguments
------------

.. function:: getArguments()



getUsageMessage
---------------

.. function:: getUsageMessage()


    Return a useful option reference, formatted for display in an
    error message.
    
    Note that this usage information is provided in most Exceptions
    generated by this class.

    :rtype: string 



setAliases
----------

.. function:: setAliases()


    Define aliases for options.
    
    The parameter $aliasMap is an associative array
    mapping option name (short or long) to an alias.

    :param array: 

    :throws \Zend\Console\Exception\ExceptionInterface: 

    :rtype: \Zend\Console\Getopt Provides a fluent interface



setHelp
-------

.. function:: setHelp()


    Define help messages for options.
    
    The parameter $helpMap is an associative array
    mapping option name (short or long) to the help string.

    :param array: 

    :rtype: \Zend\Console\Getopt Provides a fluent interface



parse
-----

.. function:: parse()


    Parse command-line arguments and find both long and short
    options.
    
    Also find option parameters, and remaining arguments after
    all options have been parsed.

    :rtype: \Zend\Console\Getopt|null Provides a fluent interface



_parseLongOption
----------------

.. function:: _parseLongOption()


    Parse command-line arguments for a single long option.
    A long option is preceded by a double '--' character.
    Long options may not be clustered.

    :param mixed: 

    :rtype: void 



_parseShortOptionCluster
------------------------

.. function:: _parseShortOptionCluster()


    Parse command-line arguments for short options.
    Short options are those preceded by a single '-' character.
    Short options may be clustered.

    :param mixed: 

    :rtype: void 



_parseSingleOption
------------------

.. function:: _parseSingleOption()


    Parse command-line arguments for a single option.

    :param string: 
    :param mixed: 

    :throws \Zend\Console\Exception\ExceptionInterface: 

    :rtype: void 



_setNumericOptionValue
----------------------

.. function:: _setNumericOptionValue()


    Set given value as value of numeric option
    
    Throw runtime exception if this action is deny by configuration
    or no one numeric option handlers is defined

    :param int: 

    :throws Exception\RuntimeException: 

    :rtype: void 



_setSingleOptionValue
---------------------

.. function:: _setSingleOptionValue()


    Add relative to options' flag value
    
    If options list already has current flag as key
    and parser should follow cumulative params by configuration,
    we should to add new param to array, not to overwrite

    :param string: 
    :param string: 

    :rtype: null 



_setBooleanFlagValue
--------------------

.. function:: _setBooleanFlagValue()


    Set TRUE value to given flag, if this option does not exist yet
    In other case increase value to show count of flags' usage

    :param string: 

    :rtype: null 



_checkParameterType
-------------------

.. function:: _checkParameterType()


    Return true if the parameter is in a valid format for
    the option $flag.
    Throw an exception in most other cases.

    :param string: 
    :param string: 

    :throws \Zend\Console\Exception\ExceptionInterface: 

    :rtype: bool 



_addRulesModeGnu
----------------

.. function:: _addRulesModeGnu()


    Define legal options using the gnu-style format.

    :param string: 

    :rtype: void 



_addRulesModeZend
-----------------

.. function:: _addRulesModeZend()


    Define legal options using the Zend-style format.

    :param array: 

    :throws \Zend\Console\Exception\ExceptionInterface: 

    :rtype: void 





Constants
+++++++++

MODE_ZEND
=========

The options for a given application can be in multiple formats.
modeGnu is for traditional 'ab:c:' style getopt format.
modeZend is for a more structured format.

MODE_GNU
========

PARAM_REQUIRED
==============

Constant tokens for various symbols used in the mode_zend
rule format.

PARAM_OPTIONAL
==============

TYPE_STRING
===========

TYPE_WORD
=========

TYPE_INTEGER
============

TYPE_NUMERIC_FLAG
=================

CONFIG_RULEMODE
===============

These are constants for optional behavior of this class.
ruleMode is either 'zend' or 'gnu' or a user-defined mode.
dashDash is true if '--' signifies the end of command-line options.
ignoreCase is true if '--opt' and '--OPT' are implicitly synonyms.
parseAll is true if all options on the command line should be parsed, regardless of
whether an argument appears before them.

CONFIG_DASHDASH
===============

CONFIG_IGNORECASE
=================

CONFIG_PARSEALL
===============

CONFIG_CUMULATIVE_PARAMETERS
============================

CONFIG_CUMULATIVE_FLAGS
=======================

CONFIG_PARAMETER_SEPARATOR
==========================

CONFIG_FREEFORM_FLAGS
=====================

CONFIG_NUMERIC_FLAGS
====================

