<div>
    <div class=" flex flex-1 px-[5%] mt-10 justify-between">
        <h2 class=" font-semibold text-2xl">Manage Topics</h2>
        <input type="text" wire:model.live="search" placeholder="Search Here.." class="border px-3 py-2 rounded">
    </div>
    <div class=" grid  grid-cols-4 gap-4 w-full px-[10%] mt-10 border  ">
        <div class=" flex-1">Id</div>
        <div class="  flex-1">Topic</div>
        <div class="  flex-1">Description</div>
        <div class="  flex-1">Actions</div>

        @foreach($topics as $topic)

        <div class="  flex-1">{{$topic->id}}</div>
        <div class="  flex-1">{{$topic->topic_name}}</div>
        <div class="  flex-1">{{$topic->topic_description}}</div>
        <div class="  flex-1 gap-5 flex">
            <button
                wire:confirm="Are you sure you want to delete this topic ?"
                wire:click="deleteTopic({{$topic->id}})" class="text-red-500 hover:text-red-700">Delete
            </button>
        </div>

        @endforeach

    </div>
</div>