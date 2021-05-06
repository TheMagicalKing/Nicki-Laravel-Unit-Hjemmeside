this is the index blade, this blade will be where everyone arrives
@extends('unit.layout')
 
@section('content')

<div class="container">
<img src="{{ URL::asset('/14thaag.png') }}">
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

<p class="aaginfo">The 14th Air Assault Group is a unit based on United States Special Forces
our primary tasking consists of pure ground based assaults where out roster
is based around light vehicle transportation and air to surface support</p>

</div>
    
@endsection