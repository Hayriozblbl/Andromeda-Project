@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
    Show Country
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                          id
                        </th>
                        <td>
                            {{ $country->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
Name                        </th>
                        <td>
                            {{ $country->name }}
                        </td>
                    </tr>
                    
                     
                    <tr>
                         
                        
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
Back To List            </a>
        </div>


    </div>
</div>
@endsection