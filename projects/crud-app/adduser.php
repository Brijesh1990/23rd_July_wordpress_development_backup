<div class="fixed inset-0 bg-black/40 flex items-center justify-center
opacity-0 invisible
peer-checked:opacity-100 peer-checked:visible
transition-all duration-300">

<div class="bg-white p-6 rounded-xl w-96
scale-95 peer-checked:scale-100
transition-all duration-300">

<h2 class="text-xl font-semibold mb-4">Add User</h2>
<form method="post" action="insert_users.php">
<input type="text" name="name" placeholder="Name"
class="w-full mb-3 p-2 border rounded-md
focus:ring-2 focus:ring-blue-400 outline-none" required>

<input type="email" name="email" placeholder="Email"
class="w-full mb-4 p-2 border rounded-md
focus:ring-2 focus:ring-blue-400 outline-none" required>


<input type="text" name="phone" placeholder="Phone"
class="w-full mb-4 p-2 border rounded-md
focus:ring-2 focus:ring-blue-400 outline-none" required>

<div class="flex justify-end space-x-3">
<label for="modal-toggle"
class="cursor-pointer px-4 py-2 bg-gray-400 text-white rounded-md
hover:bg-gray-500 transition">
Cancel
</label>

<button type="submit" name="add_users"
class="px-4 py-2 bg-blue-600 text-white rounded-md
hover:bg-blue-700 transition">
Save
</button>
</div>
</div>
</div>