<div class="p-6 bg-white rounded shadow-md">
    @if (session()->has('message'))
        <div class="bg-green-200 text-green-800 p-2 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <label>Incident Type</label>
        <input type="text" wire:model="incident_type" class="border p-2 w-full">

        <label>Incident Date</label>
        <input type="date" wire:model="incident_date" class="border p-2 w-full">

        <label>Severity Level</label>
        <select wire:model="severity_level" class="border p-2 w-full">
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
            <option value="Critical">Critical</option>
        </select>

        <label>Victim Name</label>
        <input type="text" wire:model="victim_name" class="border p-2 w-full">

        <label>Upload Victim Image</label>
        <input type="file" wire:model="victim_image" class="border p-2 w-full">

        <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">
            Report Incident
        </button>
    </form>
</div>
