@extends('layouts.admin')
@section('content')
     <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("users.create") }}">
Add User        </a>
        </div>
    </div>
 <div class="card">
    <div class="card-header">
Users Lisst    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
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
                            Email
                        </th>
                        <th>
                            Email Verified At
                        </th>
   
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                        <tr data-entry-id="{{ $user->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $user->id ?? '' }}
                            </td>
                            <td>
                                {{ $user->name ?? '' }}
                            </td>
                            <td>
                                {{ $user->email ?? '' }}
                            </td>
                            <td>
                                {{ $user->email_verified_at ?? '' }}
                            </td>
                             
                            <td>
                                     <a class="btn btn-xs btn-primary" href="{{ route('users.show', $user->id) }}">
                                      View
                                    </a>
 
                                     <a class="btn btn-xs btn-info" href="{{ route('users.edit', $user->id) }}">
                                  Edit
                                    </a>
 
                                     <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are You Sure?? :(');" style="display: inline-block;">
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