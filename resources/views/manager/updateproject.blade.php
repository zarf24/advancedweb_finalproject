<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Project') }}
        </h2>
    </x-slot>


<form action="/set" method="post">
@csrf

<input type="hidden" name="projectid" value="{{$disp['projectid']}}"></br>

<p>Updating {{$disp['projectname']}}...</p></br>

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
</br></br>

<x-jet-button type="submit">Update</x-jet-button>
<x-jet-button type="reset">Reset</x-jet-button>

</form>

</x-app-layout>