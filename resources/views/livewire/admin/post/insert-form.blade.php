
            <div class=" w-5/12">
                <form wire:submit.prevent="store">

                    <div class="mb-4">
                        <label for="title" class="block text-lg font-semibold text-gray-700">Title</label>
                        <input type="text" wire:model="title" id="title" class="w-full border-slate-400 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
                        @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>


                    <div class="mb-4">
                        <label for="content" class="block text-lg font-semibold text-gray-700">Content</label>
                        <textarea wire:model="content" id="content" rows="5" class="w-full border-gray-300 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1"></textarea>
                        @error('content') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>


                    <div class="mb-4">
                        <label for="topic_id" class="block text-lg font-semibold text-gray-700">Topic</label>
                        <select wire:model="topic_id" id="topic_id" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
                            <option value="">Select a topic</option>
                            @foreach($topics as $topic)
                            <option value="{{$topic->id}}">{{$topic->topic_name}}</option>
                            @endforeach
                            
                        </select>
                        @error('topic_id') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>


                    <div class="mb-4">
                        <label for="featured_image" class="block text-lg font-semibold text-gray-700">Featured Image</label>
                        <input type="file" wire:model.live="featured_image" id="featured_image" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
                        @if ($featured_image)
                        <img src="{{ $featured_image->temporaryUrl() }}" alt="Preview Image" class="mt-4 w-32 h-32 object-cover rounded-lg">
                        @endif
                        @error('featured_image') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Submit</button>
                    </div>
                </form>
            </div>
       