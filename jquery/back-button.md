### Back Button Function

Simple back button function
Note when used inside of a `<form></form>` tags this will script seems to submit the form to the `action=""` path.

```
<!--js-->
<script>
  function goBack() {
    window.history.back();
  }
</script>

<!--html-->
<button onclick="goBack()">Back</button>
```

- Source(s)
  - none
