this blade shows the leadership of the unit
@extends('unit.layout')
 
@section('content')

<table>
$leader = leaders
<tr>
<td>{{$leader->name}}</td>
<td>{{$leader->role}}</td>
</tr>
</table>
    
@endsection