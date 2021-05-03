this is the index blade, this blade will be where everyone arrives
@extends('unit.layout')
 
@section('content')

<div class="container">
<h1>welcome to the unit page of the 14th Air Assault Group</h1>
<p>The unit consists of Ground and Air Support units listed below</p>
<table class="unitlisting">
    <tr>
        <th>VIKING</th>
        <th>SOAR</th>
        <th>LOKI</th>
        <th>COMMAND</th>
    </tr>
</table>
<table class="indexinfo">
    <tr><td>The 14th Air Assault Group is a unit based on United States Special Forces</td></tr>
    <tr><td>our primary tasking consists of pure ground based assaults where out roster</td></tr>
    <tr><td>is based around light vehicle transportation and air to surface support</td></tr>
</table>


</div>
    
@endsection