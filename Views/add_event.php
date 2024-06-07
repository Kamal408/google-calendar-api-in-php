<section class="m-auto w-3/4 mt-16">
    <h2 class="text-2xl font-bold text-stone-700 mb-4 w-5/6">Add Event</h2>
    <form method="post" action="<?php echo URL . 'calendar/event/add' ?>">
        <p class="flex flex-col gap-1 my-4">
            <label class="text-sm font-bold uppercase text-stone-500">Summary *</label>
            <input type="text" name="summary" id="eventTitle" class="w-full p-1 border-b-2 rounded-sm border-stone-300 bg-stone-200 text-stone-600 focus:outline-none focus:border-stone-600" required />
        </p>
        <p class="flex flex-col gap-1 my-4">
            <label class="text-sm font-bold uppercase text-stone-500">Description *</label>
            <textarea name="description" id="eventDescription" class="w-full p-1 border-b-2 rounded-sm border-stone-300 bg-stone-200 text-stone-600 focus:outline-none focus:border-stone-600" required></textarea>
        </p>
        <p class="flex flex-col gap-1 my-4 w-1/2">
            <label class="w-full text-sm font-bold uppercase text-stone-500">Start *</label>
            <span class="flex ">
                <input type="date" name="startDate" class="w-1/2 mr-4 p-1 border-b-2 rounded-sm border-stone-300 bg-stone-200 text-stone-600 focus:outline-none focus:border-stone-600" required />
                <input type="time" name="startTime" class="w-1/2 p-1 border-b-2 rounded-sm border-stone-300 bg-stone-200 text-stone-600 focus:outline-none focus:border-stone-600" required />
            </span>
        </p>
        <p class="flex flex-col gap-1 my-4 w-1/2">
            <label class="w-full text-sm font-bold uppercase text-stone-500">End *</label>
            <span class="flex ">
                <input type="date" name="endDate" class="w-1/2 mr-4 p-1 border-b-2 rounded-sm border-stone-300 bg-stone-200 text-stone-600 focus:outline-none focus:border-stone-600" required />
                <input type="time" name="endTime" class="w-1/2 p-1 border-b-2 rounded-sm border-stone-300 bg-stone-200 text-stone-600 focus:outline-none focus:border-stone-600" required />
            </span>
        </p>
        <p class="flex flex-col gap-1 my-4">
            <label class="text-sm font-bold uppercase text-stone-500">Attendees</label>
            <textarea name="attendees" class="w-full p-1 border-b-2 rounded-sm border-stone-300 bg-stone-200 text-stone-600 focus:outline-none focus:border-stone-600"></textarea>
            <i><small>Comma(,) separated for multipe attendees</small></i>
        </p>
        <menu class="flex items-center justify-end gap-4 my-4">
            <li><a class="text-stone-800 hover:text-stone-950" href="<?php echo URL ?>">Cancel</a></li>
            <li><button class="px-6 py-2 rounded-md bg-stone-800 text-stone-50 hover:bg-stone-950" type="submit">Save</button></li>
        </menu>
    </form>
</section>