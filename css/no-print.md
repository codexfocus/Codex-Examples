### No Print Class

A couple classes to help layout when printing pages.
The first one makes the class not show up in the print view including save as pdf.

```
@media print
{
  .no-print, .no-print *
    {
      display: none !important;
    }

  @page { size: auto;  margin: 30px 40px 20px 40px; }
}
```

This one is for displaying only for printing:

```
.PrintOnly 
{
 display:none; 
}
@media print 
{
  .PrintOnly 
  {
    display:block; 
  }
}
```

- Source(s)
