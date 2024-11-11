@extends('layout')
@section('content')
<img src="bg.webp" alt="" class="w-full h-[600px]">
<div class="container mx-auto px-6 flex m flex-col">
    <div class="flex ">
    <livewire:public.topicsection />
    </div>
    <div class=" flex">
    <livewire:public.post-section />
    </div>
</div>

@endsection