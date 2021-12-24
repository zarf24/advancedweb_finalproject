<x-app-layout>

</x-app-layout>

<h3>List of Projects</h3>

<a href="new">Add new Project</a></href>

<table border="border">
<tr>
    <td>Project Name</td>
    <td>Category</td>
    <td>Start date</td>
    <td>End date</td>
    <td>Duration</td>
    <td>Cost</td>
    <td>Stage</td>
    <td>Status</td>
</tr>

@foreach($data as $data)
<tr>
    <td>{{$data->projectname}}</td>
    <td>{{$data->category}}</td>
    <td>{{$data->start}}</td>
    <td>{{$data->end}}</td>
    <td>{{$data->duration}}</td>
    <td>{{$data->cost}}</td>
    <td>{{$data->stage}}</td>
    <td>{{$data->status}}</td>
    <td><a href={{"upd/".$data->projectid}}>Update</a></href></td>
    <td><a href={{"del/".$data->projectid}}>Delete</a></href></td>
@endforeach
</tr>
</table>



