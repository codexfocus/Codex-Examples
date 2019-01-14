### Collapsable Area

Collapsable Container. Use `collapse` in the class if you want it to be collapsed when the page loads.

```
<div class="panel panel-default">
   <div class="panel-heading">
     <h3 class="panel-title">
       <a data-toggle="collapse" href="#collapse1">Collapsable Container <span class="servicedrop glyphicon glyphicon-chevron-left"></span></a>
     </h3>
   </div>
   <div id="collapse1" class="panel-body panel-collapse collapse">
    <p>Content Here</p>
   </div>
 </div>
```

jquery to change the chevron from < to down.

```
<script>
  $('#collapse1').on('shown.bs.collapse', function() {
      $(".servicedrop").addClass('glyphicon-chevron-down').removeClass('glyphicon-chevron-left');
    });
  $('#collapse1').on('hidden.bs.collapse', function() {
      $(".servicedrop").addClass('glyphicon-chevron-left').removeClass('glyphicon-chevron-down');
    });
</script>
```

- Source(s)
  - [w3schools.com](https://www.w3schools.com/bootstrap/bootstrap_collapse.asp)
