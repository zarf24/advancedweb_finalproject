<x-app-layout>

</x-app-layout>

<h1> Update Project </h1>

<form action="/set" method="post">
@csrf

<input type="hidden" name="projectid" value="{{$disp['projectid']}}">

<p>Project Stage:</p>
<select name="stage">
    <option value="Inception">Inception</option>
    <option value="Milestone 1">Milestone 1</option>
    <option value="Milestone 2 and Final Report">Milestone 2 and Final Report</option>
    <option value="Closing">Closing</option>
  </select>

<p>Project Status:</p>
<select name="status">
    <option value="On track">On track</option>
    <option value="Delayed">Delayed</option>
    <option value="Extended">Extended</option>
    <option value="Completed">Completed</option>
  </select>

<button type="submit">Update</button>
<button type="reset">Reset</button>

</form>