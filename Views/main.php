<?php 

if(empty($eventLists)){
    print "No upcoming events found.\n";
} else {
    print "Upcoming events:\n";
$c = 0;
    foreach ($eventLists as $event) {
       if($c === 0){ 
        echo "<pre>";
        print_r($event);
        echo "</pre>";
    }
    $c++;
        $start = $event->start->dateTime;
  
        if (empty($start)) {
  
            $start = $event->start->date;
  
        }
  
        printf("%s (%s)<br>", $event->getSummary(), $start);
  
    }
}
