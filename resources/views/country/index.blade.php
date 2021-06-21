@extends('layouts.admin')
@section('content')
     <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("country.create") }}">
Add Country        </a>
        </div>
    </div>
 <div class="card">
    <div class="card-header">
Country Lisst    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-c">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                          Id
                        </th>
                        <th>
                            Name    
                    </th>
                      
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($country as $key => $c)
                        <tr data-entry-id="{{ $c->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $c->id ?? '' }}
                            </td>
                            <td>
                                {{ $c->name ?? '' }}
                            </td>
                           
                             
                            <td>
                                     <a class="btn btn-xs btn-primary" href="{{ route('country.show', $c->id) }}">
                                      View
                                    </a>
 
                                     <a class="btn btn-xs btn-info" href="{{ route('country.edit', $c->id) }}">
                                  Edit
                                    </a>
 
                                     <form action="{{ route('country.destroy', $c->id) }}" method="POST" onsubmit="return confirm('Are You Sure?? :(');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                    </form>
 
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
 
@endsection