<?php 

if(empty($eventLists)){
    print "No upcoming events found.\n";
} else {
    print "Upcoming events:\n";

    foreach ($eventLists as $event) {
  
        $start = $event->start->dateTime;
  
        if (empty($start)) {
  
            $start = $event->start->date;
  
        }
  
        printf("%s (%s)<br>", $event->getSummary(), $start);
  
    }
}
