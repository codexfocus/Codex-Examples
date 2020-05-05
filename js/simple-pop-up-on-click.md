### Simple Javascript pop up on click

The message goes in the `data-confirm=""`.

```
<a href="#" data-confirm='Confirm you are about to delete this entry?'>Remove</a>
```

js

```
<script>
$(function() {
    $("[data-confirm]").on('click', function() {
      return confirm($(this).data("confirm"));
    });
  });
</script>
```

- Source(s)
  - [none](#)
