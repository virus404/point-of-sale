@extends('layout')

@section('content')
   <div class="col-md-12">
      <div class="row">
         <div class="panel panel-default">
            <div class="panel-heading">
               @include('suppliers._menu')
               <h3 class="panel-title"><i class="fi-page-multiple"></i> Suppliers</h3>
            </div>
            <div class="panel-body">
               <table class="table condence">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th class="col-md-3">Suuplier Name</th>
                        <th class="col-md-3">Address</th>
                        <th class="col-md-3">Contact</th>
                        <th class="col-md-3"></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($suppliers as $key => $supplier)
                     <tr>
                        <td>{{ $index+$key }}</td>
                        <td>{{ $supplier->name }}</td>
                        <td>{{ $supplier->address }}</td>
                        <td>{{ $supplier->contact }}</td>
                        <td class="actions">
                           <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-sm btn-primary"><i class="fi-pencil"></i> Edit</a>
                           {{ Form::open(['url' => route('suppliers.destroy', $supplier->id), 'method' => 'delete']) }}
                              {{ Form::button('<i class="fi-trash"></i> Delete', ['class' => 'btn btn-sm btn-danger', 'type' => 'submit']) }}
                           {{ Form::close() }}
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>

               {{ $suppliers->links() }}
            </div>
         </div>
      </div>
   </div>
@stop