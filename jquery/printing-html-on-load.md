### Printing html on load

When the page loads goes directly to the browsers print funciton. Useful instead of creating a seperate pdf file if the html file print will work.

```
<!--js-->
<script type="text/javascript">
    <!--
    window.onload = function() { window.print(); }
    //-->
</script>
```


- Source(s)
  - [Stackoverflow question](https://stackoverflow.com/questions/241570/auto-start-print-html-page-using-javascript)
