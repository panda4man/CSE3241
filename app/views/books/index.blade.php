@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<table class="table-responsive table-striped" style="width:100%">
				<thead>
					<th>Title</th>
					<th>Year</th>
					<th>Price</th>
					<th>Stock</th>
					<th></th>
				</thead>
				<tbody>
					@foreach($books as $book)
						<tr>
							<td>{{$book->title}}</td>
							<td>{{$book->year}}</td>
							<td>{{$book->price}}</td>
							<td>{{$book->stock}}</td>
							<td>{{ HTML::linkRoute('books.show', 'View', array($book->id)) }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop