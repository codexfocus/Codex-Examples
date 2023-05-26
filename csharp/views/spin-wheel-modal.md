### Spinning Wheel Modal

Make sure to have an id on the form tag `id="example"` in it. Or use on a button with `onclick="startProgress()"`

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

Modal included on the page.(This is a bootstrap 4 modal)
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

Bootstrap 3 modal example.
```
<div class="modal fade" tabindex="-1" role="dialog" id="progressModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Progress</h4>
            </div>
            <div class="modal-body">
                <div id="preloadingDiv">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="includes/loading.gif" style="max-width: 100%; max-height: 100%;" />
                        </div>
                        <div class="col-sm-10" style="margin: auto">
                            <label>Processing, please wait...</label>
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
