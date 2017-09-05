### Pop-Up Confirmation Box

jquery Pop-Up Confirmation Box
Usefull for confirmation messages such as before a delete or data commit.

```
<!--js-->
<script>
  $(function() {
    $("[data-confirm]").on('click', function() {
      return confirm($(this).data("confirm"));
    });
  });
</script>
    
<!--html-->
<a href='#' data-confirm='Your Message Here'>Example Message</a>
```

- Source
  - none
