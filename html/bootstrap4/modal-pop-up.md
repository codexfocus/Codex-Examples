### Modal Pops up on page load

Add a modal to a screen that pops up on page load.

Script:

```
<script>
  $(document).ready(function(){
    $("#example").modal('show');
    setTimeout(function () {
      $("#example").modal('hide');
    }, 30000);
  });
</script>
```

Bootstrap4 Modal:

```
<div id="example" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Example</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            Example
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
```

- Source(s)
  - [None](link1)
