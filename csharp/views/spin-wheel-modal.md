### Spinning Wheel Modal

Make sure to have an id on the form tag `id="example"` in it.

js included on the page.

```
@section Scripts {
    <script type="text/javascript">
        $("#example").submit(startProgress);
        function startProgress() {
            $("#progressModal").modal({ backdrop: 'static', keyboard: false });
        }
    </script>
}
```

Modal included on the page.
```
<div class="modal" tabindex="-1" role="dialog" id="progressModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Progress</h5>
            </div>
            <div class="modal-body">
                <div id="preloadingDiv">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="~/loading.gif" style="max-width: 100%; max-height: 100%;" />
                        </div>
                        <div class="col-sm-10" style="margin: auto">
                            <label>Loading data, please wait...</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
```

- Source(s)
  - [x](#)
