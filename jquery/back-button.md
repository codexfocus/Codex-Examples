### Back Button Function

Simple back button function. Note when used inside of a `<form></form>` tags this script will submit the form to the `action=""` path instead of the previous page in the history.

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
