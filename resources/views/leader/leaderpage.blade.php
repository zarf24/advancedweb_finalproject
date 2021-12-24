<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project details') }}
        </h2>
    </x-slot>
<h1>Welcome, "user name"</h1>
<h1>You are currently the leader for "project name"</h1>


<table border="border">
<tr>
    <th>Project name:</th>
    <td></td>
  </tr>
  <tr>
    <th>Team members:</th>
    <td> </td>
  </tr>
  <tr>
    <th>Start date:</th>
    <td></td>
  </tr>
  <tr>
    <th>End date:</th>
    <td></td>
  </tr>
  <tr>
    <th>Duration:</th>
    <td></td>
  </tr>
  <tr>
    <th>Cost:</th>
    <td></td>
  </tr>
  <tr>
    <th>Client:</th>
    <td></td>
  </tr>
</table>

<x-jet-button><a href="">Edit</a></href></x-jet-button> <x-jet-button><a href="">Add members</a></href></x-jet-button>

</x-app-layout>

