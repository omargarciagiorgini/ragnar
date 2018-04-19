@extends('admin.layout.admin')
@section('content')
    <h3>Add Product</h3>

<div class="col-md-6 col-md-offset-3">

    <div class="row">
    	{!! Form::open(['route' => 'product.store','method' => 'post','files' => 'true']) !!}
	 <div class="form-group">
    	{{ Form::label('name','Name' ) }}
    	{{ Form::text('name','',['class'=>'form-control','placeholder'=>'Enter name']) }}
    </div>
     <div class="form-group">
    	{{ Form::label('description','Description' ) }}
    	{{ Form::text('description', '',['class'=>'form-control','placeholder'=>'Enter Description']) }}
    </div>
    <div class="form-group">
    	{{ Form::label('size','Size' ) }}
    	{{ Form::select('size',['small'=>'Small','medium'=>'Medium','large'=>'Large'],'', ['class'=>'form-control']) }}
    </div>

    <div class="form-group">
    	{{ Form::label('category_id','Categories' ) }}
    	{{ Form::select('category_id',$categories,'', ['class'=>'form-control']) }}

    	    
    </div>

    <div class="form-group">

    		{{ Form::file('image') }}
    </div>
    <div class="form-group">
	{{--
		Form::select('size', array('L' => 'Large', 'S' => 'Small'), null, array('multiple' => true))
	--}}
  	{{--   Form::select('animal', [
    			'Cats' => ['leopard' => 'Leopard','spaniel' => 'Spaniel','juan' => 'juan'],
    			'Dogs' => ['spaniel' => 'Spaniel'],
				])
		--}}
    </div>

     <div class="form-group">

    	{{ Form::submit('Submit',['class'=>'btn btn-primary']) }}

    </div>

		{!! Form::close() !!}

    </div>
   </div>
@endsection