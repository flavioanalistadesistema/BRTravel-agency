{{ Form::open(array('url' => 'foo/bar')) }}
{!! Form::label('title', 'Post Title') !!}
{!! Form::text('title', null, array('class' => 'form-control')) !!}
{{ Form::close() }}