### Display Based on Time

Compare two dates and then display.
```
<?php
$today = time();
$expiredate = mktime(0, 0, 0, 12, 9, 2022);
$startDate = mktime(0, 0, 0, 12, 7, 2022);
if ($today < $expiredate && $today > $startDate) 
{;
?>
  <p>Your display code here.</p>
<?php 
} 
?>
```

Only display until a certain time is met.

```
<?php 
if (time() < 1672146000) 
{ 
?>
  <p>Your display code here.</p>
<?php 
} 
?>
```

- Source(s)
  - [none](#)
