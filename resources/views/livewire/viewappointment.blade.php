<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
        <div class="inline-block align-bottom bg-blue-100 rounded-lg text-left overflow-hidden -xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
            
                <div class="px-4 pt-4">
                    <div class="rounded block  text-white text-xl font-bold mb-2 px-4 py-4">
                       
                    </div>
                </div>
                <div class="px-4">
                    <div class="block text-white text-sm font-bold mb-2 appearance-none bg-blue-900 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
                        <div class="rounded block bg-blue-900 text-white text-xl font-bold mb-2 px-4 pt-4">
                            <h4>Appointment Information</h4>
                            <h3>________________________________________</h1>
                        </div>    
                        <div class="px-4 py-4">   
                            <div class="block rounded text-white px-4 pt-2">
                                Appointment Id: <input class="bg-transparent text-sm font-bold mb-2" type=text wire:model="appointment_id" disabled>
                                @error('appointment_id') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="block rounded text-white px-4 pt-2">
                                Patient Name: <input class="bg-transparent text-sm font-bold mb-2" type=text wire:model="name" disabled>
                                @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="block rounded text-white px-4 pt-2">
                                Patient ID: <input class="bg-transparent text-sm font-bold mb-2" type=text wire:model="user_id" disabled>
                                @error('user_id') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="block rounded text-white px-4 pt-2">
                                Email: <input class="bg-transparent text-sm font-bold mb-2" type=text wire:model="email" disabled>
                                @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="block rounded text-white px-4 pt-2">
                                Hospital:  <input class="bg-transparent text-sm font-bold mb-2" type=text wire:model="hospital_name" disabled>
                                @error('hospital_name') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="block rounded text-white px-4 pt-2">
                                Hospital ID:  <input class="bg-transparent text-sm font-bold mb-2" type=text wire:model="hospital_id" disabled>
                                @error('hospital_id') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            
                            <div class="block rounded text-white px-4 pt-2">
                                Appointment Date:  <input class="bg-transparent text-sm font-bold mb-2" type=text wire:model="appoint_date" disabled>
                                @error('appoint_date') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="block rounded text-white px-4 pt-2">
                                Appointment Time:  <input class="bg-transparent text-sm font-bold mb-2" type=text wire:model="appoint_time" disabled>
                                @error('appoint_time') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="block rounded text-white px-4 pt-2">
                                Status:  <input class="bg-transparent text-sm font-bold mb-2" type=text wire:model="status" disabled>
                                @error('status') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="px-4 py-4 sm:flex sm:flex-row-reverse">
                    <span class="mt-3 flex w-full rounded-md -sm sm:mt-0 sm:w-auto">
                        <div class="px-4">
                        <!--
                        <a href="{{ route('pdf.generateUserAppointments') }}" class="bg-blue-700 hover:bg-blue-500 text-white py-4 px-4 rounded fa fa-download"> Export as PDF </a>
                        -->
                        </div>

                        <button wire:click="saraModal()" type="button" class="bg-green-700 hover:bg-green-500 text-white py-2 px-4 rounded">
                            Close
                        </button>

                        
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>