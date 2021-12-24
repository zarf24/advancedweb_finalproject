<x-app-layout>

</x-app-layout>

<h1> Add New Project </h1>

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
    <option>Mohamad Amirul</option>
    <option>Abu Bakar</option>
    <option>Aiman Hazim</option>
  </select>
  <br><br>

<button type="submit">Create Project</button>
<button type="reset">Reset</button>

</form>


