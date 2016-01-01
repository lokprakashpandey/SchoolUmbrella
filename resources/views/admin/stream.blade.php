@extends('admin.index')
@section('content')
    
    @if(session('sucess_message'))
        {{session('sucess_message')}}
    @endif

    @if(session('error_message'))
        {{session('error_message')}}
    @endif

    <table>
        <tr>
            <td>SN</td>
            <td>Stream Name</td>
        </tr>
            @foreach($streams as $index => $stream)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$stream->name}}</td>
                   
                    <td><a href="{{url('myAdmin/streams/del')}}/{{$stream->id}}">Del</a></td>
                    <td><a href="{{url('myAdmin/streams/edit')}}/{{$stream->id}}">Edit</a></td>
                </tr>
            @endforeach 
        </table>
        <a href="{{url('myAdmin/streams/add')}}">Add Stream</a>
    </table>
@endsection

