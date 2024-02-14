### Modal on page load

Using Bootstrap modal and display on page load.

```
<div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        Modal Body
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
```

The js to force the display on load, you need the latest version of the boostrap version and js files.

```
$(function () {
    $('#myModal').modal('show');
});
```

- Source(s)
  - [Bootstrap](https://getbootstrap.com/docs/4.6/getting-started/javascript/)
