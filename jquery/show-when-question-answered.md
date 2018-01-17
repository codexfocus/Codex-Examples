### Display an html element in response to a form question

This example is using a dropdown question that when answered yes will display the hidden div. In the js script set the #id of the question and the #id of the hidden div or other element. Set the #id to hidden. Set up your form question and include the hidden #id element.


```
<!-- js -->
<script>
     $(document).ready(function(){
       $('#remodel').on('change', function() {
         if ( this.value == 'Yes')
         {
           $("#rooms").show();
         }
         else
         {
           $("#rooms").hide();
         }
       });
     });
</script>
```

```
<!-- css -->
<style>
#rooms {
       display:none
     }
</style>
```

```
<!-- html -->
<div class="form-group">
	<label for="remodel" class="col-sm-2 control-label">Has the home been remodeled?</label>
	<div class="col-sm-4">
	  <select id='remodel' name="remodel" class='form-control' required>
		<option value="">-</option>
		<option value="Yes">Yes</option>
		<option value="No">No</option>
	  </select>
	</div>
</div>

<div id="rooms">
	<p>The hidden div</p>
</div>
```


- Source(s)
  - None
