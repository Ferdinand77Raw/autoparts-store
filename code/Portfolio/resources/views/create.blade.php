@extends("layouts.main")

@section("Head")

<h1 id="h1create">We buy your auto-part. If everything's fine, we'll call you!</h1>

@endsection

@section("Middle")

{!! Form::open(['method'=>'POST','action'=>'Portfolio@store', 'files'=>true]) !!}

<table>

<tr>
<td>{!! Form::label('Name', 'Name of the product: ')!!}</td>

<td>{!! Form::text('Name') !!}</td></tr>

<tr>
<td>{!! Form::label('Origin', 'Origin: ')!!}</td>

<td>{!! Form::text('Origin') !!}</td></tr>

<tr>
<td>{!! Form::label('Price', 'Original price: ')!!}</td>

<td>{!! Form::text('Price') !!}</td></tr>

<tr>
<td>{!! Form::label('Photo', 'Illustration: ') !!}</td>

<td>{!! Form::file('Photo') !!}</td></tr>

<tr>
  <td>{!! Form::label('Phone_Number', 'Phone Number: ') !!}</td>
  <td>{!! Form::text('Phone_Number') !!}</td>
</tr>

<tr><td>{!! Form::submit('Send Product') !!}</td></tr>
<tr><td>{!! Form::reset('Clean') !!}</td></tr>

</table>

{!! Form::close() !!}   

@endsection

@section("Foot")
<p class="footcreate">
Copyrights © High Tech Auto-Parts 2020 || All rights reserved  ®.
</p>
@endsection