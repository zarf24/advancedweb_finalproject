<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new project') }}
        </h2>
    </x-slot>


<form action="/add" method="post">
@csrf

<p>Project Name:</p>
<input type="text" name="name" placeholder="Enter Project Name"><br/><br/>

<p>Project Category:</p>
<input type="radio" name="category" id="category1" value="Consultancy Project">
<label for="category1">Consultancy Project</label><br>
<input type="radio" name="category" id="category2" value="Research Grant Project">
<label for="category2">Research Grant Project</label><br>
<br/>
<p>Select Project Leader:</p>
<select>
    <option>Raja Zarif Raja Petra</option>
  </select>
  <br><br>

<x-jet-button type="submit">Create Project</x-jet-button>
<x-jet-button type="reset">Reset</x-jet-button>

</form>

</x-app-layout>


