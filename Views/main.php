<section class="m-auto w-3/4">
    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold text-stone-700 mb-4">Events</h2>
        <a class="px-4 py-2 text-xs md:text-base rounded-md bg-stone-700 text-stone-400 hover:bg-stone-600 hover:text-stone-100" href="<?php echo URL . 'calendar/event/add' ?>">+ Add Event</a>
    </div>
    <?php

    if (empty($eventLists)) {
    ?>
        <p class="text-stone-800 my-4">There are no events.</p>
    <?php
    } else {
    ?>
        <ul class="p-4 mt-8 rounded-md bg-stone-100">
            <li class="flex justify-between my-4 p-4 font-bold">
                <span class="w-1/4">Summary</span>
                <span class="w-1/4">Start</span>
                <span class="w-1/4">End</span>
                <span class="w-1/8"></span>
            </li>
            <?php
            foreach ($eventLists as $event) {
                $start = $event->start->date;
                if (empty($start)) {
                    $start = $event->start->dateTime;
                }

                $end = $event->end->date;
                if (empty($end)) {
                    $end = $event->end->dateTime;
                }
            ?>
                <li class="flex justify-between my-4 p-4 hover:bg-stone-200">
                    <span class="w-1/4"><?php echo $event->getSummary(); ?></span>
                    <span class="w-1/4"><?php echo $start ?></span>
                    <span class="w-1/4"><?php echo $end ?></span>
                    <span class="w-1/8">
                        <a href="<?php echo URL . 'calendar/event/delete/' . $event->id ?>" class="text-stone-700 hover:text-red-500">Delete</a>
                    </span>
                </li>
        <?php
            }
        }
        ?>
</section>