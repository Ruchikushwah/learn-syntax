<div class=" w-full overflow-auto px-[10%] py-10">
    @if(session("message"))
    <p>{{session('message')}}</p>
    @endif
    <div class=" flex flex-1 my-3 justify-between items-center">
        <h2 class=" text-2xl font-semibold">Manage Posts({{count($posts)}})</h2>
        <input type="search" class=" border px-3 py-2 border-slate-400" placeholder="Search Here...">

    </div>
    <table class=" w-full border">
        <thead>
            <tr>
                <th class=" border p-3">Id</th>
                <th class=" border p-3">Title</th>
                <th class=" border p-3">Topic</th>
                <th class=" border p-3">Content</th>
                <th class=" border p-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr class=" text-center">
                <td class=" border p-3">{{$post->id}}</td>
                <td class=" border p-3">{{$post->title}}</td>
                <td class=" border p-3">{{$post->topic->topic_name}}</td>
                <td class=" border p-3">{{$post->content}}</td>
                <td class=" border p-3">
                    <button class=" bg-teal-500 text-white px-4 py-2 rounded">Edit</button>
                    <button wire:click="deletePost({{$post->id}})" class=" bg-red-500 text-white px-3 py-2 rounded">Delete</button>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>