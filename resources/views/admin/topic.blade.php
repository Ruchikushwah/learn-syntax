@extends('admin.adminlayout')
@section('content')
<div class=" flex flex-1 gap-10 px-[5%]">
    <div class=" w-4/12">
        <div class="max-w-3xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-blue-600 mb-6">Add a New Topic</h2>
            <livewire:admin.topic.insert-topic/>
           
        </div>

    </div>
    <div class=" w-8/12">

        <livewire:admin.topic.calling-topic/>

    </div>

</div>
@endsection