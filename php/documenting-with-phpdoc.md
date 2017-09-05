### Documenting php with phpDocumentor

Use what is called a DocBlock to document your php code. Used to document files and elements through out your php.

```
 <?php
 /**
  * A summary informing the user what the associated element does.
  *
  * A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
  * and to provide some background information or textual references. Format using markdown
  *
  * @author John Doe
  * @param string $myArgument With a *description* of this argument, these may also
  *    span multiple lines.
  *
  * @return void
  */
  function myFunction($myArgument)
  {
  }
```

A quick example showing file level documentation with elements in the file:

```
<?php
/**
 * I belong to a file
 */

/**
 * I belong to a class
 */
class Def
{
}
```

- Source(s)
  - [phpdoc.org](https://www.phpdoc.org/)
  - [Documenting your first document](https://www.phpdoc.org/docs/latest/getting-started/your-first-set-of-documentation.html)
