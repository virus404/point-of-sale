<div class="sub-menu pull-right">
   @if( in_array($current_route, ['customers.create', 'customers.edit']) )
   <a href="{{ route('customers.index') }}" class="btn btn-xs btn-success"><i class="fa fa-arrow-left"></i> Back To List</a>
   @endif

   @if( in_array($current_route, ['customers.index', 'customers.edit']) )
   <a href="{{ route('customers.create') }}" class="btn btn-xs btn-success"><i class="fi-page-add"></i> New</a>
   @endif

   @if( in_array($current_route, ['customers.index']) )
   <a href="#" class="btn btn-xs btn-primary filter-toggle"><i class="fi-filter"></i> Filter</a>
   @endif
</div>
