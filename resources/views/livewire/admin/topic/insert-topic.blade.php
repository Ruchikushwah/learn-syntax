 <div>
     <form wire:submit.prevent="save"  class="space-y-4">
         <!-- Topic Title -->
         <div>
             <label for="title" class="block text-gray-700 font-medium">Topic Title</label>
             <input type="text" id="title" wire:model="topic_name"  required
                 class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
         </div>

         <!-- Topic Description -->
         <div>
             <label for="description" class="block text-gray-700 font-medium">Description</label>
             <textarea id="description" wire:model="topic_description"  rows="4" required
                 class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
         </div>

         <!-- Submit Button -->
         <button type="submit" class="w-full bg-slate-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
             Add Topic
         </button>
     </form>
 </div>