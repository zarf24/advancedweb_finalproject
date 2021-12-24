<x-app-layout>

</x-app-layout>
<h1>Welcome, "user name"</h1>
<h1>You are currently managing "project name"</h1>

<h1>Project Details:</h1>
<a href="">Edit</a></href> <a href="">Add members</a></href>


<table border="border">
@foreach($data as $data)
<tr>
    <th>Project name:</th>
    <td>{{$data->projectname}}</td>
  </tr>
  <tr>
    <th>Team members:</th>
    <td>555 77 854</td>
  </tr>
  <tr>
    <th>Start date:</th>
    <td>{{$data->start}}</td>
  </tr>
  <tr>
    <th>End date:</th>
    <td>{{$data->end}}</td>
  </tr>
  <tr>
    <th>Duration:</th>
    <td>{{$data->duration}}</td>
  </tr>
  <tr>
    <th>Cost:</th>
    <td>{{$data->cost}}</td>
  </tr>
  <tr>
    <th>Client:</th>
    <td>{{$data->client}}</td>
  </tr>
</table>


@endforeach
