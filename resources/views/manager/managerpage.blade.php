<x-app-layout>


<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Projects') }}
        </h2>
    </x-slot>

    </x-app-layout>

<table style="border:1px solid black; width:80%; height:200px; margin-left:auto;margin-right:auto;">
<tr style="border:1px solid black;">
    <td><b>Project Name</b></td>
    <td><b>Category</b></td>
    <td><b>Start date</b></td>
    <td><b>End date</b></td>
    <td><b>Duration</b></td>
    <td><b>Cost</b></td>
    <td><b>Stage</b></td>
    <td><b>Status</b></td>
</tr>

@foreach($data as $data)
<tr style="border:1px solid black;">
    <td>{{$data->projectname}}</td>
    <td>{{$data->category}}</td>
    <td>{{$data->start}}</td>
    <td>{{$data->end}}</td>
    <td>{{$data->duration}}</td>
    <td>{{$data->cost}}</td>
    <td>{{$data->stage}}</td>
    <td>{{$data->status}}</td>
    <td><b><a href={{"upd/".$data->projectid}}>Update</a></href></b></td>
    <td><b><a href={{"del/".$data->projectid}}>Delete</a></href></b></td>
@endforeach
</tr>
</table>

<x-jet-button><a href="new">Add new Project</a></href></x-jet-button>




