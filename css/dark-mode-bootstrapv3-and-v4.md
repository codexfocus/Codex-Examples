### Dark Mode for Bootstrapv3 or v4

This works well for bootstrap with a well defined classes.

First lets add a js file to force the switch. This will persist the toggle from page to page.

```
!function(){
	var t,e=document.getElementById("darkSwitch");
	if(e)
	{
		t=null!==localStorage.getItem("darkSwitch")&&"dark"===localStorage.getItem("darkSwitch"),
		(e.checked=t)?document.body.setAttribute("data-theme","dark"):document.body.removeAttribute("data-theme"),
		e.addEventListener("change", function (t)
		{
			e.checked ? (document.body.setAttribute("data-theme", "dark"),
				localStorage.setItem("darkSwitch", "dark")) : (document.body.removeAttribute("data-theme"), localStorage.removeItem("darkSwitch"))
		})
	}
}();
```

Second lets add the css. The below example is for bootstrap v3. At the bottom of this page I will add an example for v4, feel free to add more classes and pick the colors you want.

```
[data-theme="dark"] {
    background-color: #111 !important; /* changes the color of the background*/
    color: #eee; /*  changes the color of the text*/
}

[data-theme="dark"] .panel-body {
    background: #333333;
}

[data-theme="dark"] .panel-heading {
    background: #999999;
}

[data-theme="dark"] .panel-footer {
    background: #999999;
}

[data-theme="dark"] .well {
    background: #333333;
}

[data-theme="dark"] .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
    background-color: #333333;
}
```

Last we need to add a toggle. This will go in the footer of the page and show up on every page.

```
<footer class="border-top footer text-muted">
    <div class="container">
        <div class="col-md-12">
            <input type="checkbox" id="darkSwitch" />
            <label class="text-secondary" for="darkSwitch">Dark Mode </label>
        </div>
    </div>
</footer>
```

Here is the css for bootstrap v4.

```
[data-theme="dark"] {
  background-color: #111 !important;
  color: #eee;
}

[data-theme="dark"] .bg-light {
  background-color: #333 !important;
}

[data-theme="dark"] .bg-white {
  background-color: #000 !important;
}

[data-theme="dark"] .bg-black {
  background-color: #eee !important;
}
```

- Source(s)
  - I copied this from a site but don't have the link.
